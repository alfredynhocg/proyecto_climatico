@extends('layouts.app', [
    'title' => 'Glosario de Cambio Climático - Educavo',
    'metaDescription' => '23 términos clave sobre cambio climático explicados en lenguaje sencillo: qué son, cómo se ven en tu comunidad y un dato clave de cada uno.',
    'variant' => 'inner',
])

@php
$etapas = [
    [
        'clave' => 'conozco',
        'n' => 1,
        'nombre' => 'CONOZCO',
        'desc' => 'Entiendo qué es el cambio climático',
        'terminos' => [
            ['t' => 'Cambio climático', 'que' => 'Es la alteración a largo plazo de las temperaturas y patrones de clima en la Tierra, causada principalmente por la acumulación de gases que atrapan el calor en la atmósfera.', 'como' => 'En mi comunidad se nota en sequías más largas de lo normal, lluvias que llegan fuera de época, o heladas que dañan los cultivos cuando antes no ocurrían.', 'dato' => "El cambio climático no es lo mismo que 'el clima de hoy': un día frío no significa que no exista — este se mide en años y décadas."],
            ['t' => 'Clima', 'que' => 'Es el patrón habitual del tiempo atmosférico en una región durante muchos años (por ejemplo, si un lugar es seco, húmedo, frío o cálido en general).', 'como' => "Decimos que el altiplano tiene un 'clima frío y seco' porque así se comporta la mayoría de los años, más allá de si hoy hace calor o frío.", 'dato' => 'El clima se estudia observando el tiempo atmosférico durante al menos 30 años seguidos.'],
            ['t' => 'Tiempo atmosférico', 'que' => "Es lo que pasa con la temperatura, el viento y la lluvia en un lugar y un momento específicos, como 'hoy' o 'esta semana'.", 'como' => "Cuando decimos 'hoy va a llover' o 'esta semana hizo mucho sol', estamos hablando del tiempo atmosférico, no del clima.", 'dato' => 'El tiempo cambia de un día a otro; el clima cambia a lo largo de muchos años.'],
            ['t' => 'Efecto invernadero', 'que' => 'Es un proceso natural en el que ciertos gases de la atmósfera retienen parte del calor del sol, manteniendo la Tierra templada. El problema surge cuando las actividades humanas aumentan demasiado estos gases.', 'como' => 'Es como cuando un invernadero de plástico retiene el calor adentro para que las plantas crezcan mejor — pero si se acumula demasiado calor, puede dañar los cultivos.', 'dato' => 'Sin efecto invernadero, la Tierra sería demasiado fría para la vida; el problema es su exceso, no su existencia.'],
            ['t' => 'Calentamiento global', 'que' => 'Es el aumento progresivo de la temperatura promedio de la Tierra, principalmente por el aumento de gases de efecto invernadero producidos por actividades humanas.', 'como' => 'Se relaciona con el derretimiento de nevados que antes se veían en las montañas cercanas a la comunidad, y con veranos más calurosos que antes.', 'dato' => 'El calentamiento global es una de las principales causas del cambio climático que vivimos hoy.'],
        ],
    ],
    [
        'clave' => 'conecto',
        'n' => 2,
        'nombre' => 'CONECTO',
        'desc' => 'Relaciono el cambio climático con mi vida y mi comunidad',
        'terminos' => [
            ['t' => 'Vulnerabilidad climática', 'que' => 'Es el grado en que una persona, familia o comunidad puede verse afectada negativamente por los impactos del cambio climático, según sus condiciones y recursos.', 'como' => 'Una familia que depende únicamente de un solo cultivo de secano es más vulnerable a una sequía que una familia que tiene varias fuentes de alimento y agua.', 'dato' => 'Diversificar cultivos y fuentes de agua reduce la vulnerabilidad climática de una familia o comunidad.'],
            ['t' => 'Escasez hídrica', 'que' => 'Es la falta o disminución del agua disponible para el consumo humano, agrícola o comunitario, muchas veces agravada por el cambio climático.', 'como' => 'Cuando el río o la vertiente de la comunidad tiene menos agua que hace unos años, y las familias deben caminar más lejos para conseguirla.', 'dato' => 'Cuidar las fuentes de agua (no contaminarlas, no talar los árboles cercanos) ayuda a que se mantengan por más tiempo.'],
            ['t' => 'Huella hídrica', 'que' => 'Es la cantidad total de agua que se usa, directa o indirectamente, para producir un bien, un alimento o para las actividades de una persona.', 'como' => 'Producir un kilo de papa o de carne requiere cientos de litros de agua a lo largo de todo el proceso, aunque no lo veamos directamente.', 'dato' => 'Reducir el desperdicio de alimentos también reduce nuestra huella hídrica, porque evita desperdiciar el agua usada para producirlos.'],
            ['t' => 'Seguridad alimentaria', 'que' => 'Es la condición en la que todas las personas tienen, en todo momento, acceso a suficiente alimento seguro y nutritivo para llevar una vida activa y sana.', 'como' => 'Se ve afectada cuando una helada o sequía destruye la cosecha de la que depende la alimentación de las familias de la comunidad.', 'dato' => 'Diversificar cultivos y fortalecer las reservas de semillas ayuda a proteger la seguridad alimentaria frente a riesgos climáticos.'],
            ['t' => 'Resiliencia territorial', 'que' => 'Es la capacidad de un territorio y su comunidad para resistir, adaptarse y recuperarse frente a los impactos del cambio climático.', 'como' => 'Una comunidad que organiza reservas de agua, diversifica sus cultivos y se coordina ante riesgos climáticos es más resiliente que una que no se prepara.', 'dato' => 'La resiliencia se construye colectivamente: mientras más organizada esté una comunidad, mejor enfrenta los riesgos climáticos.'],
        ],
    ],
    [
        'clave' => 'puedo-actuar',
        'n' => 3,
        'nombre' => 'PUEDO ACTUAR',
        'desc' => 'Actúo con acciones concretas en mi día a día',
        'terminos' => [
            ['t' => 'Reducir, reusar, reciclar (las 3R)', 'que' => 'Son tres acciones para disminuir la cantidad de residuos que generamos: reducir lo que consumimos, reusar lo que ya tenemos y reciclar los materiales que se pueden transformar.', 'como' => 'Reusar una botella como maceta, reducir el uso de bolsas plásticas, o separar el papel y el plástico para reciclarlos.', 'dato' => 'El orden importa: primero reducir, luego reusar, y reciclar como última opción.'],
            ['t' => 'Compostaje', 'que' => 'Es un proceso natural que transforma los residuos orgánicos (cáscaras, restos de comida, hojas secas) en abono para la tierra.', 'como' => 'Enterrar cáscaras de fruta y verdura en un rincón del huerto escolar para que, con el tiempo, se conviertan en abono para las plantas.', 'dato' => 'El compostaje reduce la basura que se manda al basurero y mejora la fertilidad del suelo sin necesidad de químicos.'],
            ['t' => 'Agricultura sostenible', 'que' => 'Es una forma de cultivar que busca producir alimentos cuidando el suelo, el agua y el ambiente, para que la tierra siga siendo productiva en el futuro.', 'como' => 'Rotar los cultivos cada temporada, usar abono orgánico en vez de químicos, o combinar distintos cultivos en un mismo terreno.', 'dato' => 'La agricultura sostenible ayuda a que la tierra sea más resistente frente a sequías y otros riesgos climáticos.'],
            ['t' => 'Huella de carbono', 'que' => 'Es la cantidad de gases de efecto invernadero que se producen, directa o indirectamente, por las actividades de una persona, familia o comunidad.', 'como' => 'Usar transporte motorizado para trayectos cortos genera más huella de carbono que caminar o usar bicicleta.', 'dato' => 'Plantar árboles ayuda a compensar parte de la huella de carbono, porque absorben dióxido de carbono del aire.'],
            ['t' => 'Reforestación', 'que' => 'Es la acción de sembrar árboles en zonas donde antes había bosque o vegetación y se perdió, o de sembrar nuevas áreas con especies adecuadas al territorio.', 'como' => 'Organizar una jornada de siembra de árboles nativos en una zona erosionada cercana a la escuela o la comunidad.', 'dato' => 'Sembrar especies nativas es preferible porque están mejor adaptadas al clima y suelo del territorio.'],
        ],
    ],
    [
        'clave' => 'colaboro',
        'n' => 4,
        'nombre' => 'COLABORO',
        'desc' => 'Me organizo con otras personas frente a los riesgos climáticos',
        'terminos' => [
            ['t' => 'Gestión de riesgos climáticos', 'que' => 'Es el conjunto de acciones organizadas para anticipar, reducir y responder ante situaciones de riesgo relacionadas con el clima (sequías, granizadas, heladas, inundaciones).', 'como' => 'Cuando una comunidad se organiza para saber qué hacer si llega una alerta de granizada antes de la cosecha, en vez de esperar a que ocurra el daño.', 'dato' => 'Anticiparse a un riesgo climático suele costar menos —en esfuerzo y pérdidas— que reaccionar después de que el daño ya ocurrió.'],
            ['t' => 'Economía circular', 'que' => "Es un modelo que busca que los materiales se reduzcan, reusen, reciclen y regeneren, en lugar de usarse una sola vez y desecharse ('usar y tirar').", 'como' => 'Una iniciativa comunitaria que recolecta plástico para venderlo a una empresa recicladora, generando ingresos y reduciendo la basura.', 'dato' => 'La economía circular puede convertirse en una fuente de ingresos para las comunidades, además de cuidar el ambiente.'],
            ['t' => 'Gestión comunitaria del agua', 'que' => 'Es la forma organizada en que una comunidad administra, cuida y distribuye sus fuentes de agua para asegurar que alcance para todas las familias.', 'como' => 'Un comité de agua de la comunidad que organiza turnos de riego y vigila que nadie contamine la fuente de agua compartida.', 'dato' => 'Las comunidades con sistemas organizados de gestión del agua suelen enfrentar mejor las épocas de escasez.'],
            ['t' => 'Toma de decisiones colectiva', 'que' => 'Es el proceso mediante el cual un grupo o comunidad delibera y decide juntos qué acción tomar frente a una situación, en lugar de que una sola persona decida sola.', 'como' => 'Una Brigada Estudiantil que se reúne para decidir, entre todas y todos, qué acción climática priorizar en su unidad educativa.', 'dato' => 'Escuchar distintos puntos de vista antes de decidir ayuda a encontrar soluciones más completas y aceptadas por el grupo.'],
        ],
    ],
    [
        'clave' => 'lidero',
        'n' => 5,
        'nombre' => 'LIDERO',
        'desc' => 'Impulso acciones climáticas en mi comunidad educativa',
        'terminos' => [
            ['t' => 'Brigada Estudiantil de Agentes de Cambio', 'que' => 'Es un grupo de estudiantes organizados dentro de una unidad educativa que, con el acompañamiento de un PEB, identifican problemáticas climáticas de su territorio y desarrollan acciones para atenderlas.', 'como' => 'Un grupo de estudiantes que, tras identificar la escasez de agua en su escuela, organiza una campaña de ahorro de agua y siembra de árboles.', 'dato' => 'A la fecha, el modelo de Brigadas Estudiantiles de Enseña por Bolivia ha alcanzado a más de 13.000 estudiantes en más de 100 unidades educativas.'],
            ['t' => 'Liderazgo climático', 'que' => 'Es la capacidad de una persona o grupo de inspirar, organizar y guiar acciones colectivas frente a las problemáticas del cambio climático.', 'como' => 'Un/a estudiante que motiva a su curso a participar en una jornada de reforestación y coordina con el PEB y la dirección de la escuela.', 'dato' => 'El liderazgo climático no depende de la edad: niñas, niños y adolescentes pueden liderar acciones concretas en su comunidad.'],
            ['t' => 'Agente de Cambio', 'que' => 'Es la persona (estudiante o educador/a) que, de forma consciente y activa, promueve transformaciones positivas frente a una problemática de su entorno, como el cambio climático.', 'como' => 'Un PEB (Participante de Enseña por Bolivia) que acompaña a su Brigada Estudiantil en el diseño e implementación de un proyecto climático.', 'dato' => 'En Enseña por Bolivia, tanto los PEBs como los propios estudiantes son considerados Agentes de Cambio.'],
            ['t' => 'Proyecto de acción climática', 'que' => 'Es una iniciativa planificada, con un problema identificado, un objetivo claro, actividades y responsables, orientada a atender una problemática climática del territorio.', 'como' => 'El proyecto final de la Brigada Estudiantil (actividad de cierre del módulo), donde el grupo formula y presenta su propia propuesta de acción climática.', 'dato' => 'Un buen proyecto de acción climática empieza siempre identificando un problema real y cercano, no uno lejano o abstracto.'],
        ],
    ],
];
@endphp

@section('content')
<div class="main-content">

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumb-clima.svg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Glosario Climático</h1>
            <ul>
                <li><a class="active" href="{{ route('home') }}">Inicio</a></li>
                <li>Glosario Climático</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Presentacion Start -->
    <div class="rs-about style3 pt-100 pb-70 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row mb-30 md-mb-20">
                <div class="col-lg-9 mx-auto text-center">
                    <div class="sec-title2 text-center">
                        <div class="sub-title">23 términos · 5 etapas</div>
                        <h2 class="title purple-color mb-20">Glosario Climático</h2>
                        <div class="desc">
                            Este glosario acompaña al Manual del PEB "Mochila de Acción Climática" y organiza sus
                            términos siguiendo el mismo camino de 5 etapas que recorren las y los estudiantes: desde
                            conocer qué es el cambio climático, hasta liderar una acción concreta en su comunidad
                            educativa. Cada término explica qué es, cómo se ve en la comunidad y un dato clave.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                @foreach ($etapas as $etapa)
                <div class="col mb-30">
                    <a href="#accordion-{{ $etapa['clave'] }}" class="cc-card text-center d-block">
                        <span class="cc-pill-num mx-auto mb-3">{{ $etapa['n'] }}</span>
                        <h4 class="mb-0" style="font-size:16px;">{{ $etapa['nombre'] }}</h4>
                        <p class="mb-0"><small>{{ count($etapa['terminos']) }} términos</small></p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Presentacion End -->

    <!-- Glosario por etapas Start -->
    <div class="rs-faq-part pb-100 md-pb-70">
        <div class="container">
            @foreach ($etapas as $etapa)
            <div class="content-part mb-50 md-mb-30">
                <div class="title mb-25 md-mb-15">
                    <h3 class="text-part">{{ $etapa['n'] }}. {{ $etapa['nombre'] }}</h3>
                    <p class="mb-0">{{ $etapa['desc'] }}</p>
                </div>
                <div id="accordion-{{ $etapa['clave'] }}" class="accordion">
                    @foreach ($etapa['terminos'] as $index => $term)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $etapa['clave'] }}-{{ $index }}" aria-expanded="false">
                                {{ $term['t'] }}
                            </a>
                        </div>
                        <div id="collapse-{{ $etapa['clave'] }}-{{ $index }}" class="collapse" data-bs-parent="#accordion-{{ $etapa['clave'] }}">
                            <div class="card-body">
                                <p><strong>¿Qué es?</strong> {{ $term['que'] }}</p>
                                <p><strong>¿Cómo se ve en mi comunidad?</strong> {{ $term['como'] }}</p>
                                <p class="mb-0"><strong>Dato clave:</strong> {{ $term['dato'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Glosario por etapas End -->

    <!-- CTA Start -->
    <div class="rs-cta home11-style pt-70 pb-100 md-pt-40 md-pb-70">
        <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
            <div class="content text-center">
                <div class="sec-title2 mb-30">
                    <div class="sub-title white-color">Sigue explorando</div>
                    <h2 class="title white-color">Conoce el resto de la Mochila de Acción Climática</h2>
                </div>
                <div class="btn-part">
                    <a class="readon white-color" href="{{ route('manual-peb') }}">Ver Manual del PEB</a>
                    <a class="readon white-color" href="{{ route('mochila') }}">🎒 Ver Mochila Interactiva 3D</a>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA End -->

</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (!window.location.hash) return;
        var target = document.querySelector(window.location.hash);
        if (!target || !target.classList.contains('collapse')) return;

        function openAndScroll() {
            if (window.bootstrap && window.bootstrap.Collapse) {
                window.bootstrap.Collapse.getOrCreateInstance(target, { toggle: false }).show();
            } else {
                target.classList.add('show');
            }
            setTimeout(function () {
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 300);
        }

        openAndScroll();
    });
</script>
@endpush
@endsection
