import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import { RoundedBoxGeometry } from 'three/examples/jsm/geometries/RoundedBoxGeometry.js';
import gsap from 'gsap';
import '../css/mochila-3d.css';

const PALETTE = {
    green: 0x7cc22a,
    greenMid: 0x66a31c,
    greenDark: 0x4c7f16,
    navy: 0x273c66,
    navyDark: 0x1c335f,
    cream: 0xfff6e5,
    creamShade: 0xe9dcc0,
    yellow: 0xf4bf00,
    brown: 0x8a5a34,
    red: 0xe0503a,
    skin: 0xf2c9a0,
    metal: 0xd7dbe0,
    denim: 0x9fd8ff,
};

const OUTLINE_COLOR = 0x1c2b4a;

const BADGES = [
    { label: '🌡️', bg: '#e0503a', ring: '#c23f2c', name: 'Cambio climático', dato: "El cambio climático no es lo mismo que 'el clima de hoy': un día frío no significa que no exista — este se mide en años y décadas.", anchor: 'conozco-0' },
    { label: '💧', bg: '#2f8fd1', ring: '#1c6a9c', name: 'Escasez hídrica', dato: 'Cuidar las fuentes de agua (no contaminarlas, no talar los árboles cercanos) ayuda a que se mantengan por más tiempo.', anchor: 'conecto-1' },
    { label: '♻️', bg: '#76bb20', ring: '#5c9418', name: 'Reducir, reusar, reciclar', dato: 'El orden importa: primero reducir, luego reusar, y reciclar como última opción.', anchor: 'puedo-actuar-0' },
    { label: '🌳', bg: '#5c9418', ring: '#436012', name: 'Reforestación', dato: 'Sembrar especies nativas es preferible porque están mejor adaptadas al clima y suelo del territorio.', anchor: 'puedo-actuar-4' },
    { label: '🤝', bg: '#273c66', ring: '#1c335f', name: 'Brigada Estudiantil', dato: 'El modelo de Brigadas Estudiantiles de Enseña por Bolivia ha alcanzado a más de 13.000 estudiantes en más de 100 unidades educativas.', anchor: 'lidero-0' },
    { label: '⭐', bg: '#f4bf00', ring: '#c9a100', name: 'Liderazgo climático', dato: 'El liderazgo climático no depende de la edad: niñas, niños y adolescentes pueden liderar acciones concretas en su comunidad.', anchor: 'lidero-1' },
];

/* ---------------------------------------------------------------- */
/*  Small helpers: cartoon shading, ink outlines, organic shaping    */
/* ---------------------------------------------------------------- */

function tailorGeometry(geometry, { taper = 0, puff = 0 } = {}) {
    geometry.computeBoundingBox();
    const pos = geometry.attributes.position;
    const box = geometry.boundingBox;
    const height = box.max.y - box.min.y || 1;

    for (let i = 0; i < pos.count; i++) {
        let x = pos.getX(i);
        const y = pos.getY(i);
        let z = pos.getZ(i);
        const t = Math.min(Math.max((y - box.min.y) / height, 0), 1);

        if (taper) {
            const factor = 1 + taper * (0.5 - t);
            x *= factor;
            z *= factor;
        }
        if (puff) {
            const bulge = Math.sin(t * Math.PI) * puff;
            const len = Math.hypot(x, z) || 1;
            x += (x / len) * bulge;
            z += (z / len) * bulge;
        }
        pos.setXYZ(i, x, y, z);
    }

    pos.needsUpdate = true;
    geometry.computeVertexNormals();
    geometry.computeBoundingBox();
    geometry.computeBoundingSphere();
    return geometry;
}

/** Small stepped gradient used by MeshToonMaterial to get flat, comic-style shading bands. */
function makeToonGradient(steps = 3) {
    const canvas = document.createElement('canvas');
    canvas.width = steps;
    canvas.height = 1;
    const ctx = canvas.getContext('2d');
    for (let i = 0; i < steps; i++) {
        const v = Math.round((i / (steps - 1)) * 255);
        ctx.fillStyle = `rgb(${v},${v},${v})`;
        ctx.fillRect(i, 0, 1, 1);
    }
    const texture = new THREE.CanvasTexture(canvas);
    texture.minFilter = THREE.NearestFilter;
    texture.magFilter = THREE.NearestFilter;
    texture.generateMipmaps = false;
    return texture;
}

let toonGradientCache = null;
function toonGradient() {
    if (!toonGradientCache) toonGradientCache = makeToonGradient(3);
    return toonGradientCache;
}

/**
 * Inverted-hull "ink" outline: pushes a copy of the mesh out along its own
 * vertex normals by a fixed world-unit thickness and draws only its back
 * faces, so a thin dark rim shows at the silhouette — the classic
 * hand-drawn/cel-shaded look instead of a photoreal render.
 */
function outlineMaterial(color, thickness) {
    return new THREE.ShaderMaterial({
        uniforms: {
            outlineColor: { value: new THREE.Color(color) },
            thickness: { value: thickness },
        },
        vertexShader: `
            uniform float thickness;
            void main() {
                vec3 outPos = position + normal * thickness;
                gl_Position = projectionMatrix * modelViewMatrix * vec4(outPos, 1.0);
            }
        `,
        fragmentShader: `
            uniform vec3 outlineColor;
            void main() {
                gl_FragColor = vec4(outlineColor, 1.0);
            }
        `,
        side: THREE.BackSide,
    });
}

function addOutline(mesh, { color = OUTLINE_COLOR, thickness = 0.016 } = {}) {
    const outline = new THREE.Mesh(mesh.geometry, outlineMaterial(color, thickness));
    outline.raycast = () => {};
    mesh.add(outline);
    return mesh;
}

function makeBadgeTexture(label, bg, ring) {
    const size = 256;
    const canvas = document.createElement('canvas');
    canvas.width = size;
    canvas.height = size;
    const ctx = canvas.getContext('2d');

    ctx.fillStyle = bg;
    ctx.beginPath();
    ctx.arc(size / 2, size / 2, size / 2 - 10, 0, Math.PI * 2);
    ctx.fill();
    ctx.lineWidth = 14;
    ctx.strokeStyle = ring;
    ctx.stroke();

    ctx.fillStyle = '#ffffff';
    ctx.font = '700 128px "Nunito", "Rubik", sans-serif';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(label, size / 2, size / 2 + 12);

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    texture.anisotropy = 4;
    return texture;
}

function makeBookTexture() {
    const w = 256, h = 200;
    const canvas = document.createElement('canvas');
    canvas.width = w;
    canvas.height = h;
    const ctx = canvas.getContext('2d');

    ctx.fillStyle = '#273c66';
    ctx.fillRect(0, 0, w, h);
    ctx.strokeStyle = '#ffffff';
    ctx.lineWidth = 6;
    ctx.strokeRect(10, 10, w - 20, h - 20);

    ctx.fillStyle = '#ffffff';
    ctx.font = '700 46px "Nunito", "Rubik", sans-serif';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('PEB', w / 2, h / 2 - 18);

    ctx.font = '700 15px "Nunito", "Rubik", sans-serif';
    ctx.fillText('M A N U A L', w / 2, h / 2 + 16);

    ctx.fillStyle = '#76bb20';
    ctx.font = '30px sans-serif';
    ctx.fillText('🌿', w / 2, h / 2 + 50);

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    return texture;
}

function makeTagTexture() {
    const w = 220, h = 130;
    const canvas = document.createElement('canvas');
    canvas.width = w;
    canvas.height = h;
    const ctx = canvas.getContext('2d');

    ctx.fillStyle = '#fff6e5';
    ctx.fillRect(0, 0, w, h);
    ctx.strokeStyle = '#273c66';
    ctx.lineWidth = 8;
    ctx.strokeRect(4, 4, w - 8, h - 8);

    ctx.fillStyle = '#273c66';
    ctx.font = '700 34px "Nunito", "Rubik", sans-serif';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('Educavo', w / 2, h / 2 - 6);

    ctx.fillStyle = '#76bb20';
    ctx.font = '20px sans-serif';
    ctx.fillText('🌿 aprende jugando', w / 2, h / 2 + 30);

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    return texture;
}

function makeGroundTexture() {
    const size = 512;
    const canvas = document.createElement('canvas');
    canvas.width = size;
    canvas.height = size;
    const ctx = canvas.getContext('2d');
    const gradient = ctx.createRadialGradient(size / 2, size / 2, size * 0.05, size / 2, size / 2, size / 2);
    gradient.addColorStop(0, 'rgba(28,43,74,0.30)');
    gradient.addColorStop(0.6, 'rgba(28,43,74,0.11)');
    gradient.addColorStop(1, 'rgba(28,43,74,0)');
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, size, size);
    return new THREE.CanvasTexture(canvas);
}

/** Bold dashed "stitch" made of little ink-colored blocks instead of a thin GL line. */
function buildStitchTrack(width, height, { color = 0x1c2d4a, dash = 0.05, gap = 0.032, thickness = 0.016, depth = 0.006 } = {}) {
    const w = width / 2;
    const h = height / 2;
    const corners = [[-w, -h], [w, -h], [w, h], [-w, h], [-w, -h]];
    const group = new THREE.Group();
    const material = new THREE.MeshBasicMaterial({ color });

    for (let i = 0; i < corners.length - 1; i++) {
        const [x1, y1] = corners[i];
        const [x2, y2] = corners[i + 1];
        const dx = x2 - x1;
        const dy = y2 - y1;
        const segLen = Math.hypot(dx, dy);
        const angle = Math.atan2(dy, dx);
        const dirX = dx / segLen;
        const dirY = dy / segLen;

        let t = 0;
        while (t < segLen) {
            const end = Math.min(t + dash, segLen);
            const len = end - t;
            const mid = (t + end) / 2;
            const box = new THREE.Mesh(new THREE.BoxGeometry(len, thickness, depth), material);
            box.position.set(x1 + dirX * mid, y1 + dirY * mid, 0);
            box.rotation.z = angle;
            box.raycast = () => {};
            group.add(box);
            t += dash + gap;
        }
    }
    return group;
}

/* ---------------------------------------------------------------- */
/*  Backpack contents                                                */
/* ---------------------------------------------------------------- */

function buildBook() {
    const texture = makeBookTexture();
    const material = new THREE.MeshToonMaterial({ map: texture, gradientMap: toonGradient() });
    const sideMaterial = new THREE.MeshToonMaterial({ color: 0xf4f4f4, gradientMap: toonGradient() });
    const geometry = new RoundedBoxGeometry(0.5, 0.36, 0.07, 2, 0.025);
    const mesh = new THREE.Mesh(geometry, [sideMaterial, sideMaterial, sideMaterial, sideMaterial, material, material]);
    mesh.castShadow = true;
    addOutline(mesh, { thickness: 0.014 });
    return mesh;
}

function buildPencil() {
    const group = new THREE.Group();
    const body = new THREE.Mesh(
        new THREE.CylinderGeometry(0.045, 0.045, 0.5, 10),
        new THREE.MeshToonMaterial({ color: PALETTE.yellow, gradientMap: toonGradient() })
    );
    body.rotation.z = Math.PI / 2;
    addOutline(body, { thickness: 0.01 });

    const tip = new THREE.Mesh(
        new THREE.ConeGeometry(0.045, 0.09, 10),
        new THREE.MeshToonMaterial({ color: PALETTE.skin, gradientMap: toonGradient() })
    );
    tip.rotation.z = -Math.PI / 2;
    tip.position.x = 0.295;
    addOutline(tip, { thickness: 0.009 });

    const lead = new THREE.Mesh(
        new THREE.ConeGeometry(0.016, 0.03, 8),
        new THREE.MeshToonMaterial({ color: 0x2b2b2b, gradientMap: toonGradient() })
    );
    lead.rotation.z = -Math.PI / 2;
    lead.position.x = 0.335;

    const eraser = new THREE.Mesh(
        new THREE.CylinderGeometry(0.05, 0.05, 0.06, 12),
        new THREE.MeshToonMaterial({ color: PALETTE.red, gradientMap: toonGradient() })
    );
    eraser.rotation.z = Math.PI / 2;
    eraser.position.x = -0.28;
    addOutline(eraser, { thickness: 0.009 });

    group.add(body, tip, lead, eraser);
    group.traverse((o) => { if (o.isMesh) o.castShadow = true; });
    return group;
}

/** A small potted sprout — stands in for the "Reforestación" eje inside the kit. */
function buildSprout() {
    const group = new THREE.Group();

    const pot = new THREE.Mesh(
        new THREE.CylinderGeometry(0.055, 0.07, 0.09, 12),
        new THREE.MeshToonMaterial({ color: PALETTE.brown, gradientMap: toonGradient() })
    );
    pot.position.y = 0.045;
    addOutline(pot, { thickness: 0.01 });

    const soil = new THREE.Mesh(
        new THREE.CylinderGeometry(0.05, 0.05, 0.015, 12),
        new THREE.MeshToonMaterial({ color: 0x3a2a1a, gradientMap: toonGradient() })
    );
    soil.position.y = 0.093;

    const stem = new THREE.Mesh(
        new THREE.CylinderGeometry(0.008, 0.01, 0.1, 6),
        new THREE.MeshToonMaterial({ color: 0x4c8014, gradientMap: toonGradient() })
    );
    stem.position.y = 0.14;

    const leafMatA = new THREE.MeshToonMaterial({ color: PALETTE.green, gradientMap: toonGradient() });
    const leaf1 = new THREE.Mesh(new THREE.SphereGeometry(0.05, 10, 8), leafMatA);
    leaf1.scale.set(1.6, 0.45, 0.85);
    leaf1.position.set(-0.032, 0.185, 0);
    leaf1.rotation.z = 0.7;
    addOutline(leaf1, { thickness: 0.007 });

    const leafMatB = new THREE.MeshToonMaterial({ color: 0x8ed13a, gradientMap: toonGradient() });
    const leaf2 = new THREE.Mesh(new THREE.SphereGeometry(0.045, 10, 8), leafMatB);
    leaf2.scale.set(1.5, 0.4, 0.8);
    leaf2.position.set(0.032, 0.205, 0);
    leaf2.rotation.z = -0.65;
    addOutline(leaf2, { thickness: 0.007 });

    group.add(pot, soil, stem, leaf1, leaf2);
    group.traverse((o) => { if (o.isMesh) o.castShadow = true; });
    return group;
}

/** A mini "hoja de trabajo" card, standing in for the kit's student worksheets. */
function buildWorksheet() {
    const group = new THREE.Group();
    const w = 0.32, h = 0.23, d = 0.014;
    const canvas = document.createElement('canvas');
    canvas.width = 220; canvas.height = 158;
    const ctx = canvas.getContext('2d');

    ctx.fillStyle = '#ffffff';
    ctx.fillRect(0, 0, 220, 158);
    ctx.strokeStyle = '#76bb20';
    ctx.lineWidth = 5;
    ctx.strokeRect(5, 5, 210, 148);

    ctx.fillStyle = '#273c66';
    ctx.font = '700 17px "Nunito", "Rubik", sans-serif';
    ctx.textAlign = 'center';
    ctx.fillText('¿Qué harías tú?', 110, 32);

    ctx.strokeStyle = '#c9cfda';
    ctx.lineWidth = 2;
    for (let i = 0; i < 4; i++) {
        const y = 56 + i * 20;
        ctx.beginPath();
        ctx.moveTo(20, y);
        ctx.lineTo(200, y);
        ctx.stroke();
    }

    ctx.strokeStyle = '#76bb20';
    ctx.lineWidth = 3;
    ctx.strokeRect(20, 122, 16, 16);
    ctx.strokeRect(60, 122, 16, 16);

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    const mesh = new THREE.Mesh(
        new THREE.BoxGeometry(w, h, d),
        new THREE.MeshToonMaterial({ map: texture, gradientMap: toonGradient() })
    );
    mesh.castShadow = true;
    addOutline(mesh, { thickness: 0.012 });
    group.add(mesh);
    return group;
}

function buildBottle() {
    const group = new THREE.Group();
    const bottleMat = new THREE.MeshToonMaterial({
        color: PALETTE.denim, gradientMap: toonGradient(), transparent: true, opacity: 0.88,
    });
    const body = new THREE.Mesh(new THREE.CylinderGeometry(0.09, 0.09, 0.42, 18), bottleMat);
    addOutline(body, { thickness: 0.012 });

    const neck = new THREE.Mesh(new THREE.CylinderGeometry(0.045, 0.06, 0.08, 14), bottleMat);
    neck.position.y = 0.25;

    const cap = new THREE.Mesh(
        new THREE.CylinderGeometry(0.05, 0.05, 0.07, 14),
        new THREE.MeshToonMaterial({ color: PALETTE.navy, gradientMap: toonGradient() })
    );
    cap.position.y = 0.32;
    addOutline(cap, { thickness: 0.009 });

    group.add(body, neck, cap);
    group.traverse((o) => { if (o.isMesh) o.castShadow = true; });
    return group;
}

/* ---------------------------------------------------------------- */
/*  Backpack hardware (straps, buckles, tag, zipper pull)            */
/* ---------------------------------------------------------------- */

function buildStrap(trimMat, xOffset) {
    const curve = new THREE.CatmullRomCurve3([
        new THREE.Vector3(xOffset, 0.9, -0.4),
        new THREE.Vector3(xOffset * 1.25, 0.3, -0.58),
        new THREE.Vector3(xOffset * 1.05, -0.35, -0.5),
        new THREE.Vector3(xOffset * 0.85, -0.92, -0.28),
    ]);
    const geometry = new THREE.TubeGeometry(curve, 24, 0.068, 10, false);
    const mesh = new THREE.Mesh(geometry, trimMat);
    mesh.castShadow = true;
    addOutline(mesh, { thickness: 0.012 });

    const group = new THREE.Group();
    group.add(mesh);

    const adjuster = new THREE.Mesh(
        new RoundedBoxGeometry(0.16, 0.1, 0.05, 2, 0.02),
        new THREE.MeshToonMaterial({ color: PALETTE.metal, gradientMap: toonGradient() })
    );
    const adjusterPoint = curve.getPointAt(0.42);
    adjuster.position.copy(adjusterPoint);
    adjuster.position.z += 0.015;
    adjuster.rotation.x = 0.25;
    adjuster.castShadow = true;
    addOutline(adjuster, { thickness: 0.01 });
    group.add(adjuster);

    const tail = new THREE.Mesh(new THREE.BoxGeometry(0.09, 0.22, 0.02), trimMat);
    tail.position.copy(adjusterPoint);
    tail.position.y -= 0.16;
    tail.position.z += 0.02;
    tail.rotation.x = 0.1;
    addOutline(tail, { thickness: 0.01 });
    group.add(tail);

    return { group, curve };
}

function buildChestStrap(trimMat, accentMat, leftCurve, rightCurve) {
    const group = new THREE.Group();
    const leftPt = leftCurve.getPointAt(0.62);
    const rightPt = rightCurve.getPointAt(0.62);

    const curve = new THREE.CatmullRomCurve3([leftPt, new THREE.Vector3(0, (leftPt.y + rightPt.y) / 2, leftPt.z + 0.02), rightPt]);
    const geometry = new THREE.TubeGeometry(curve, 12, 0.02, 8, false);
    const strap = new THREE.Mesh(geometry, trimMat);
    addOutline(strap, { thickness: 0.008 });

    const clip = new THREE.Mesh(new RoundedBoxGeometry(0.12, 0.07, 0.035, 2, 0.015), accentMat);
    clip.position.set(0, (leftPt.y + rightPt.y) / 2, leftPt.z + 0.02);
    addOutline(clip, { thickness: 0.009 });

    group.add(strap, clip);
    return group;
}

function buildNameTag(trimMat) {
    const group = new THREE.Group();

    const loop = new THREE.Mesh(new THREE.TorusGeometry(0.035, 0.011, 8, 16), trimMat);
    loop.rotation.x = Math.PI / 2;
    addOutline(loop, { thickness: 0.006 });

    const string = new THREE.Mesh(
        new THREE.CylinderGeometry(0.005, 0.005, 0.1, 6),
        new THREE.MeshToonMaterial({ color: 0x2b2b2b, gradientMap: toonGradient() })
    );
    string.position.y = -0.06;

    const tag = new THREE.Mesh(
        new RoundedBoxGeometry(0.16, 0.095, 0.012, 2, 0.02),
        new THREE.MeshToonMaterial({ map: makeTagTexture(), gradientMap: toonGradient() })
    );
    tag.position.y = -0.14;
    tag.rotation.z = 0.1;
    tag.rotation.x = -0.15;
    tag.castShadow = true;
    addOutline(tag, { thickness: 0.008 });

    group.add(loop, string, tag);
    return group;
}

function buildZipperPull(trimMat) {
    const group = new THREE.Group();
    const ring = new THREE.Mesh(
        new THREE.TorusGeometry(0.026, 0.008, 8, 14),
        new THREE.MeshToonMaterial({ color: PALETTE.metal, gradientMap: toonGradient() })
    );
    addOutline(ring, { thickness: 0.005 });

    const tab = new THREE.Mesh(new THREE.BoxGeometry(0.02, 0.05, 0.006), trimMat);
    tab.position.y = -0.035;
    addOutline(tab, { thickness: 0.006 });

    group.add(ring, tab);
    return group;
}

/* ---------------------------------------------------------------- */
/*  Full backpack assembly                                           */
/* ---------------------------------------------------------------- */

function buildBackpack() {
    const group = new THREE.Group();
    const gradientMap = toonGradient();

    const bodyMat = new THREE.MeshToonMaterial({ color: PALETTE.green, gradientMap });
    const flapMat = new THREE.MeshToonMaterial({ color: PALETTE.greenDark, gradientMap });
    const pocketMat = new THREE.MeshToonMaterial({ color: PALETTE.cream, gradientMap });
    const sideMat = new THREE.MeshToonMaterial({ color: PALETTE.greenMid, gradientMap });
    const trimMat = new THREE.MeshToonMaterial({ color: PALETTE.navy, gradientMap });
    const accentMat = new THREE.MeshToonMaterial({ color: PALETTE.yellow, gradientMap });

    /* Main body: rounded box, gently tapered (wider base) and puffed (padded look) */
    const bodyGeo = new RoundedBoxGeometry(1.5, 1.85, 0.85, 5, 0.2);
    tailorGeometry(bodyGeo, { taper: 0.1, puff: 0.035 });
    const body = new THREE.Mesh(bodyGeo, bodyMat);
    body.castShadow = true;
    body.receiveShadow = true;
    addOutline(body, { thickness: 0.03 });
    group.add(body);

    const bodySeam = buildStitchTrack(1.1, 1.5, { color: 0xffffff });
    bodySeam.position.set(0, 0.02, 0.43);
    group.add(bodySeam);

    /* Front pocket */
    const pocketGeo = new RoundedBoxGeometry(1.02, 0.92, 0.24, 4, 0.14);
    tailorGeometry(pocketGeo, { puff: 0.03 });
    const pocket = new THREE.Mesh(pocketGeo, pocketMat);
    pocket.position.set(0, -0.25, 0.5);
    pocket.castShadow = true;
    addOutline(pocket, { thickness: 0.024 });
    group.add(pocket);

    const pocketSeam = buildStitchTrack(0.76, 0.66, { color: OUTLINE_COLOR });
    pocketSeam.position.set(0, -0.25, 0.635);
    group.add(pocketSeam);

    const zip = new THREE.Mesh(new THREE.BoxGeometry(0.94, 0.045, 0.045), trimMat);
    zip.position.set(0, 0.2, 0.61);
    addOutline(zip, { thickness: 0.008 });
    group.add(zip);

    const zipperPull = buildZipperPull(trimMat);
    zipperPull.position.set(0.49, 0.2, 0.63);
    group.add(zipperPull);

    const buckle = new THREE.Mesh(new THREE.CylinderGeometry(0.07, 0.07, 0.06, 18), accentMat);
    buckle.rotation.x = Math.PI / 2;
    buckle.position.set(0, -0.08, 0.64);
    buckle.castShadow = true;
    addOutline(buckle, { thickness: 0.012 });
    group.add(buckle);

    /* Side pocket with a bottle peeking out */
    const sideGeo = new RoundedBoxGeometry(0.24, 0.58, 0.5, 3, 0.09);
    tailorGeometry(sideGeo, { puff: 0.025 });
    const sidePocket = new THREE.Mesh(sideGeo, sideMat);
    sidePocket.position.set(0.83, -0.35, 0.02);
    sidePocket.rotation.y = -0.18;
    sidePocket.castShadow = true;
    addOutline(sidePocket, { thickness: 0.018 });
    group.add(sidePocket);

    const bottle = buildBottle();
    bottle.scale.setScalar(0.85);
    bottle.position.set(0.86, -0.02, 0.02);
    bottle.rotation.y = -0.18;
    group.add(bottle);

    /* Bottom trim */
    const bottomTrim = new THREE.Mesh(new RoundedBoxGeometry(1.55, 0.22, 0.9, 4, 0.1), trimMat);
    bottomTrim.position.y = -0.94;
    bottomTrim.castShadow = true;
    addOutline(bottomTrim, { thickness: 0.02 });
    group.add(bottomTrim);

    /* Top handle */
    const handle = new THREE.Mesh(new THREE.TorusGeometry(0.15, 0.04, 12, 24, Math.PI * 1.3), trimMat);
    handle.rotation.set(Math.PI / 2, 0, -Math.PI * 0.65);
    handle.position.set(0, 0.98, -0.1);
    addOutline(handle, { thickness: 0.012 });
    group.add(handle);

    /* Shoulder straps + hardware */
    const strapLeft = buildStrap(trimMat, -0.42);
    const strapRight = buildStrap(trimMat, 0.42);
    group.add(strapLeft.group, strapRight.group);
    group.add(buildChestStrap(trimMat, accentMat, strapLeft.curve, strapRight.curve));

    const nameTag = buildNameTag(trimMat);
    nameTag.position.copy(strapRight.curve.getPointAt(0.18));
    nameTag.position.x += 0.08;
    nameTag.rotation.z = -0.15;
    group.add(nameTag);

    /* Flap, hinged so it can swing open */
    const flapPivot = new THREE.Object3D();
    flapPivot.position.set(0, 0.92, -0.42);
    group.add(flapPivot);

    const flapGeo = new RoundedBoxGeometry(1.55, 0.72, 0.86, 4, 0.18);
    tailorGeometry(flapGeo, { puff: 0.045 });
    const flap = new THREE.Mesh(flapGeo, flapMat);
    flap.position.set(0, -0.35, 0.43);
    flap.castShadow = true;
    addOutline(flap, { thickness: 0.026 });
    flapPivot.add(flap);

    const flapSeam = buildStitchTrack(0.98, 0.32, { color: 0xffffff });
    flapSeam.position.set(0, -0.35, 0.86);
    flapPivot.add(flapSeam);

    const patch = new THREE.Mesh(
        new THREE.CircleGeometry(0.16, 28),
        new THREE.MeshBasicMaterial({ map: makeBadgeTexture('★', '#f4bf00', '#c9a100') })
    );
    patch.position.set(0, -0.24, 0.865);
    flapPivot.add(patch);

    /* Contents revealed once the flap opens */
    const suppliesGroup = new THREE.Group();
    suppliesGroup.position.set(0, 0.3, 0.02);
    suppliesGroup.scale.setScalar(0.001);
    suppliesGroup.visible = false;

    const book = buildBook();
    book.position.set(-0.35, -0.02, -0.06);
    book.rotation.set(0.15, 0.4, 0.05);
    suppliesGroup.add(book);

    const pencil = buildPencil();
    pencil.position.set(0.1, 0.22, 0.03);
    pencil.rotation.set(0.1, 0.3, 0.55);
    suppliesGroup.add(pencil);

    const sprout = buildSprout();
    sprout.position.set(0.34, -0.2, -0.03);
    suppliesGroup.add(sprout);

    const worksheet = buildWorksheet();
    worksheet.position.set(-0.08, -0.16, 0.14);
    worksheet.rotation.set(0.2, -0.35, -0.1);
    suppliesGroup.add(worksheet);

    group.add(suppliesGroup);

    return {
        group,
        clickTargets: [body, pocket, flap, patch, sidePocket],
        flapPivot,
        suppliesGroup,
    };
}

/* ---------------------------------------------------------------- */
/*  Scene bootstrap                                                  */
/* ---------------------------------------------------------------- */

function initMochila(root) {
    const canvasHost = root;
    const loadingEl = root.querySelector('[data-loading]');
    const fallbackEl = root.querySelector('[data-fallback]');
    const tooltipEl = root.querySelector('[data-tooltip]');
    const scoreEl = root.querySelector('[data-score]');
    const hintEl = root.querySelector('[data-hint]');
    const celebrateEl = root.querySelector('[data-celebrate]');
    const celebrateTitleEl = root.querySelector('[data-celebrate-title]');
    const celebrateTextEl = root.querySelector('[data-celebrate-text]');
    const celebrateLinkEl = root.querySelector('[data-celebrate-link]');
    const glosarioBaseUrl = celebrateLinkEl?.getAttribute('href') || '/glosario-climatico';

    if (!window.WebGLRenderingContext) {
        fallbackEl?.classList.add('is-visible');
        loadingEl?.classList.add('is-hidden');
        return;
    }

    let renderer;
    const canvas = document.createElement('canvas');
    try {
        renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
    } catch (e) {
        fallbackEl?.classList.add('is-visible');
        loadingEl?.classList.add('is-hidden');
        return;
    }

    canvasHost.prepend(canvas);

    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    renderer.outputColorSpace = THREE.SRGBColorSpace;
    renderer.toneMapping = THREE.NoToneMapping;

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(38, 1, 0.1, 100);
    camera.position.set(2.6, 1.6, 3.4);

    /* Flat, high-contrast lighting to match the illustrated/toon look (no HDRI reflections) */
    const hemiLight = new THREE.HemisphereLight(0xeaffcf, 0x3c2f1e, 0.75);
    scene.add(hemiLight);

    const keyLight = new THREE.DirectionalLight(0xffffff, 1.15);
    keyLight.position.set(3, 4.5, 2.5);
    keyLight.castShadow = true;
    keyLight.shadow.mapSize.set(1024, 1024);
    keyLight.shadow.camera.near = 1;
    keyLight.shadow.camera.far = 12;
    keyLight.shadow.camera.left = -3;
    keyLight.shadow.camera.right = 3;
    keyLight.shadow.camera.top = 3;
    keyLight.shadow.camera.bottom = -3;
    keyLight.shadow.bias = -0.002;
    scene.add(keyLight);

    const fillLight = new THREE.DirectionalLight(0xffffff, 0.3);
    fillLight.position.set(-2.5, 1.5, -1.5);
    scene.add(fillLight);

    const rimLight = new THREE.DirectionalLight(0x9be24d, 0.35);
    rimLight.position.set(-3, 2, -2);
    scene.add(rimLight);

    const ground = new THREE.Mesh(
        new THREE.CircleGeometry(3.4, 48),
        new THREE.MeshBasicMaterial({ map: makeGroundTexture(), transparent: true })
    );
    ground.rotation.x = -Math.PI / 2;
    ground.position.y = -1.08;
    scene.add(ground);

    const shadowCatcher = new THREE.Mesh(
        new THREE.CircleGeometry(3.4, 48),
        new THREE.ShadowMaterial({ opacity: 0.2 })
    );
    shadowCatcher.rotation.x = -Math.PI / 2;
    shadowCatcher.position.y = -1.07;
    shadowCatcher.receiveShadow = true;
    scene.add(shadowCatcher);

    const { group: backpack, clickTargets, flapPivot, suppliesGroup } = buildBackpack();
    backpack.position.y = 0.05;
    scene.add(backpack);

    const badges = BADGES.map((cfg, i) => {
        const material = new THREE.MeshBasicMaterial({
            map: makeBadgeTexture(cfg.label, cfg.bg, cfg.ring),
            transparent: true,
        });
        const mesh = new THREE.Mesh(new THREE.CircleGeometry(0.22, 28), material);
        mesh.userData = { name: cfg.name, dato: cfg.dato, anchor: cfg.anchor };
        scene.add(mesh);
        return {
            mesh,
            baseAngle: (i / BADGES.length) * Math.PI * 2,
            radius: 2.15 + (i % 3) * 0.18,
            speed: 0.22 + (i % 4) * 0.045,
            baseHeight: -0.2 + (i % 3) * 0.45,
            phase: i * 1.3,
            locked: false,
        };
    });

    const controls = new OrbitControls(camera, renderer.domElement);
    controls.target.set(0, 0.05, 0);
    controls.enableDamping = true;
    controls.dampingFactor = 0.08;
    controls.minDistance = 2.6;
    controls.maxDistance = 6;
    controls.maxPolarAngle = Math.PI * 0.55;
    controls.autoRotate = true;
    controls.autoRotateSpeed = 1.1;
    controls.addEventListener('start', () => {
        controls.autoRotate = false;
        hideHint();
    });

    let hintHidden = false;
    function hideHint() {
        if (hintHidden) return;
        hintHidden = true;
        hintEl?.classList.add('is-hidden');
    }
    setTimeout(hideHint, 7000);

    const raycaster = new THREE.Raycaster();
    const pointer = new THREE.Vector2();
    let hoveredBadge = null;
    let isOpen = false;
    let score = 0;
    const collectedTerms = new Set();

    const PROGRESS_KEY = 'mochila-clima-progress';

    function loadProgress() {
        try {
            const raw = window.localStorage?.getItem(PROGRESS_KEY);
            if (!raw) return;
            const saved = JSON.parse(raw);
            if (Array.isArray(saved)) {
                saved.forEach((name) => collectedTerms.add(name));
                score = collectedTerms.size;
            }
        } catch (e) {
            /* localStorage unavailable (private mode, disabled) — progress just won't persist */
        }
    }

    function saveProgress() {
        try {
            window.localStorage?.setItem(PROGRESS_KEY, JSON.stringify(Array.from(collectedTerms)));
        } catch (e) {
            /* ignore */
        }
    }

    loadProgress();

    let badgeHintTween = null;
    let hintedEntry = null;
    function startBadgeHint() {
        if (badgeHintTween || collectedTerms.size > 0) return;
        const candidates = badges.filter((b) => !b.locked);
        if (!candidates.length) return;
        hintedEntry = candidates[Math.floor(Math.random() * candidates.length)];
        badgeHintTween = gsap.to(hintedEntry.mesh.scale, {
            x: 1.35, y: 1.35, z: 1.35,
            duration: 0.5,
            yoyo: true,
            repeat: 5,
            ease: 'power1.inOut',
            onComplete: () => {
                hintedEntry.mesh.scale.set(1, 1, 1);
                badgeHintTween = null;
                hintedEntry = null;
            },
        });
    }
    function stopBadgeHint() {
        if (!badgeHintTween) return;
        badgeHintTween.kill();
        badgeHintTween = null;
        if (hintedEntry) {
            hintedEntry.mesh.scale.set(1, 1, 1);
            hintedEntry = null;
        }
    }
    setTimeout(startBadgeHint, 7000);

    function setPointerFromEvent(event) {
        const rect = canvas.getBoundingClientRect();
        pointer.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
        pointer.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
    }

    function toggleOpen() {
        isOpen = !isOpen;
        gsap.to(flapPivot.rotation, {
            x: isOpen ? -2.05 : 0,
            duration: 0.65,
            ease: isOpen ? 'back.out(1.5)' : 'power2.inOut',
        });
        if (isOpen) {
            suppliesGroup.visible = true;
            gsap.fromTo(
                suppliesGroup.scale,
                { x: 0.001, y: 0.001, z: 0.001 },
                { x: 1, y: 1, z: 1, duration: 0.6, delay: 0.18, ease: 'back.out(2.2)' }
            );
            hideHint();
        } else {
            gsap.to(suppliesGroup.scale, {
                x: 0.001, y: 0.001, z: 0.001, duration: 0.25, ease: 'power1.in',
                onComplete: () => { suppliesGroup.visible = false; },
            });
        }
    }

    function updateScoreLabel() {
        if (scoreEl) {
            scoreEl.textContent = `${score} de ${BADGES.length} datos climáticos descubiertos`;
        }
    }

    function showFact(entry) {
        if (!celebrateEl) return;
        const { name, dato, anchor } = entry.mesh.userData;
        if (celebrateTitleEl) celebrateTitleEl.textContent = `¡Aprendiste algo nuevo! 🎉 ${name}`;
        if (celebrateTextEl) celebrateTextEl.textContent = dato;
        if (celebrateLinkEl) {
            celebrateLinkEl.href = `${glosarioBaseUrl}#collapse-${anchor}`;
            celebrateLinkEl.style.display = '';
        }
        celebrateEl.classList.add('is-visible');
        gsap.delayedCall(3.6, () => celebrateEl.classList.remove('is-visible'));
    }

    function showCompletion() {
        if (!celebrateEl) return;
        if (celebrateTitleEl) celebrateTitleEl.textContent = '¡Completaste la colección! 🌎';
        if (celebrateTextEl) celebrateTextEl.textContent = 'Descubriste los 6 conceptos climáticos de la Mochila de Acción Climática. Sigue jugando o pásate al Manual del PEB para las 30 actividades completas.';
        if (celebrateLinkEl) celebrateLinkEl.style.display = 'none';
        celebrateEl.classList.add('is-visible');
        gsap.delayedCall(3.8, () => celebrateEl.classList.remove('is-visible'));
    }

    function collectBadge(entry) {
        if (entry.locked) return;
        entry.locked = true;
        hideTooltip();
        stopBadgeHint();

        const isNewDiscovery = !collectedTerms.has(entry.mesh.userData.name);
        if (isNewDiscovery) {
            collectedTerms.add(entry.mesh.userData.name);
            score += 1;
            updateScoreLabel();
            saveProgress();
        }

        gsap.timeline({
            onComplete: () => {
                entry.baseAngle = Math.random() * Math.PI * 2;
                entry.mesh.position.y = entry.baseHeight;
                gsap.to(entry.mesh.scale, { x: 1, y: 1, z: 1, duration: 0.4, ease: 'back.out(2)' });
                entry.locked = false;
            },
        })
            .to(entry.mesh.scale, { x: 1.5, y: 1.5, z: 1.5, duration: 0.15, ease: 'power1.out' })
            .to(entry.mesh.position, { y: '+=0.7', duration: 0.55, ease: 'power1.out' }, '<')
            .to(entry.mesh.scale, { x: 0.001, y: 0.001, z: 0.001, duration: 0.3, ease: 'power2.in' }, '-=0.25');

        if (isNewDiscovery && score === BADGES.length) {
            showCompletion();
        } else {
            showFact(entry);
        }
    }

    function showTooltip(entry) {
        if (!tooltipEl) return;
        tooltipEl.textContent = entry.mesh.userData.name;
        tooltipEl.classList.add('is-visible');
    }

    function hideTooltip() {
        hoveredBadge = null;
        tooltipEl?.classList.remove('is-visible');
    }

    function onPointerMove(event) {
        setPointerFromEvent(event);
        raycaster.setFromCamera(pointer, camera);

        const badgeHit = raycaster.intersectObjects(badges.map((b) => b.mesh))[0];
        if (badgeHit) {
            const entry = badges.find((b) => b.mesh === badgeHit.object);
            if (entry && !entry.locked) {
                hoveredBadge = entry;
                showTooltip(entry);
                canvas.style.cursor = 'pointer';
                return;
            }
        }

        hideTooltip();

        const backpackHit = raycaster.intersectObjects(clickTargets)[0];
        canvas.style.cursor = backpackHit ? 'pointer' : 'grab';
    }

    function onClick(event) {
        setPointerFromEvent(event);
        raycaster.setFromCamera(pointer, camera);

        const badgeHit = raycaster.intersectObjects(badges.map((b) => b.mesh))[0];
        if (badgeHit) {
            const entry = badges.find((b) => b.mesh === badgeHit.object);
            if (entry) {
                collectBadge(entry);
                return;
            }
        }

        const backpackHit = raycaster.intersectObjects(clickTargets)[0];
        if (backpackHit) {
            toggleOpen();
        }
    }

    canvas.addEventListener('pointermove', onPointerMove);
    canvas.addEventListener('click', onClick);
    canvas.addEventListener('pointerleave', hideTooltip);

    function resize() {
        const { clientWidth: w, clientHeight: h } = canvasHost;
        if (!w || !h) return;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h, false);
    }

    const resizeObserver = new ResizeObserver(resize);
    resizeObserver.observe(canvasHost);
    resize();

    const clock = new THREE.Clock();
    const projected = new THREE.Vector3();

    function animate() {
        requestAnimationFrame(animate);
        const t = clock.getElapsedTime();

        badges.forEach((entry) => {
            if (entry.locked) return;
            const angle = entry.baseAngle + t * entry.speed;
            entry.mesh.position.x = Math.cos(angle) * entry.radius;
            entry.mesh.position.z = Math.sin(angle) * entry.radius * 0.85;
            entry.mesh.position.y = entry.baseHeight + Math.sin(t * 1.4 + entry.phase) * 0.12;
            entry.mesh.quaternion.copy(camera.quaternion);
        });

        controls.update();
        renderer.render(scene, camera);

        if (hoveredBadge && tooltipEl) {
            projected.copy(hoveredBadge.mesh.position).project(camera);
            const rect = canvasHost.getBoundingClientRect();
            const x = (projected.x * 0.5 + 0.5) * rect.width;
            const y = (-projected.y * 0.5 + 0.5) * rect.height;
            tooltipEl.style.left = `${x}px`;
            tooltipEl.style.top = `${y}px`;
        }
    }

    updateScoreLabel();
    requestAnimationFrame(() => {
        loadingEl?.classList.add('is-hidden');
    });
    animate();
}

function boot() {
    document.querySelectorAll('[data-mochila-root]').forEach((root) => initMochila(root));
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
} else {
    boot();
}
