@extends('layouts.app', [
    'title' => 'Manual del PEB - Educación sobre Cambio Climático - Educavo',
    'metaDescription' => '30 actividades pedagógicas sobre cambio climático organizadas por edad (6 a 18 años) para Educadores Comunitarios de Enseña por Bolivia en el área rural.',
    'variant' => 'inner',
])


@php
$ejes = [
    '¿Qué es el cambio climático?',
    'El ciclo del agua y su escasez',
    'Cuidando el agua en mi comunidad',
    'Manejo de residuos y reciclaje',
    'De la basura a un recurso: compostaje',
    'Cultivos y su fragilidad frente al clima',
    'Agricultura sostenible y soberanía alimentaria',
    'Reforestación y cuidado de los suelos',
    'Toma de decisiones frente a riesgos climáticos',
    'Mi Brigada de Acción Climática (proyecto final)',
];

$ruta = [
    ['n' => 1, 'nombre' => 'CONOZCO', 'pregunta' => '¿Qué está pasando con el clima en mi territorio?', 'desc' => 'Punto de partida: reconocer qué es el cambio climático y cómo se manifiesta en la comunidad (agua, cultivos, clima).', 'ejes' => 'Ejes 1 y 2'],
    ['n' => 2, 'nombre' => 'CONECTO', 'pregunta' => '¿Cómo me afecta a mí, a mi familia y a mi comunidad?', 'desc' => 'Relacionar el problema climático con la vida cotidiana propia: el agua que se usa en casa, los cultivos de la familia.', 'ejes' => 'Ejes 3 y 6'],
    ['n' => 3, 'nombre' => 'PUEDO ACTUAR', 'pregunta' => '¿Qué puedo hacer yo, hoy, con lo que tengo?', 'desc' => 'Pasar a la acción individual concreta: manejar residuos, compostar, sembrar de forma sostenible, cuidar árboles y suelos.', 'ejes' => 'Ejes 4, 5, 7 y 8'],
    ['n' => 4, 'nombre' => 'COLABORO', 'pregunta' => '¿Cómo nos organizamos frente a un riesgo climático?', 'desc' => 'Pasar de la acción individual a la decisión colectiva: analizar riesgos y tomar decisiones en grupo.', 'ejes' => 'Eje 9'],
    ['n' => 5, 'nombre' => 'LIDERO', 'pregunta' => '¿Cómo impulso una acción climática en mi comunidad educativa?', 'desc' => 'Cierre del módulo: diseñar y liderar, junto a la Brigada Estudiantil, un proyecto propio de acción climática.', 'ejes' => 'Eje 10'],
];

$fundamentacion = [
    [
        'titulo' => 'Enfoque psicopedagógico',
        'sub' => 'Perspectiva psicológica',
        'icono' => 'icon-mente.svg',
        'color' => 'navy',
        'texto' => "Las 30 actividades respetan las etapas del desarrollo cognitivo y socioemocional, adaptando lenguaje y abstracción a cada franja etaria — juego simbólico en 6-8 años, razonamiento causal y autoeficacia en 9-12, pensamiento hipotético-deductivo y diseño de proyectos en 13-18. De forma transversal se incorpora prevención de la eco-ansiedad: toda actividad que expone una problemática climática cierra siempre con una acción concreta y alcanzable.",
        'chips' => ['Piaget', 'Bandura', 'Eco-ansiedad'],
    ],
    [
        'titulo' => 'Enfoque de diseño educativo',
        'sub' => 'Perspectiva de ciencias de la educación',
        'icono' => 'icon-curriculo.svg',
        'color' => 'green',
        'texto' => 'El Manual se organiza según el Aprendizaje Basado en Proyectos y la Zona de Desarrollo Próximo: el PEB actúa como mediador entre el conocimiento previo y las problemáticas climáticas. Los objetivos progresan de forma intencional — Recordar/Comprender en el Módulo A, Aplicar/Analizar en el B, Evaluar/Crear en el C — dando coherencia curricular vertical y horizontal a las 30 actividades.',
        'chips' => ['Vygotsky', 'ABP', 'Taxonomía de Bloom'],
    ],
    [
        'titulo' => 'Enfoque de sistematización y monitoreo',
        'sub' => 'Perspectiva de ingeniería de sistemas',
        'icono' => 'icon-sistema.svg',
        'color' => 'terracota',
        'texto' => 'Dada la escala de la intervención (77 PEBs, 16 municipios, 100+ unidades educativas, 20 kits físicos), cada actividad tiene un código único (A1-A10, B1-B10, C1-C10) trazable en un Sistema de Monitoreo y Seguimiento complementario: registro por unidad educativa, módulo de línea base con brecha pre/post, seguimiento de capacitación de los 77 PEBs y un tablero de indicadores para los informes de conformidad de cada pago.',
        'chips' => ['Trazabilidad', 'Línea base', 'Dashboard'],
    ],
];

$modulos = [
    [
        'codigo' => 'A',
        'edad' => '6 a 8 años',
        'color' => 'green',
        'titulo' => 'Módulo A — Estudiantes de 6 a 8 años',
        'subtitulo' => 'Nivel inicial – lenguaje sencillo, juego y narración',
        'actividades' => [
            ['cod'=>'A1','titulo'=>'El clima cuenta una historia','objetivo'=>"Reconocer, mediante un cuento ilustrado, la diferencia entre 'clima' y 'tiempo' y notar cambios simples en el entorno.",'tiempo'=>'40 minutos','materiales'=>'Láminas o dibujos del clima (sol, lluvia, viento, frío), tarjetas de emociones, tiza o crayones.','pasos'=>["El PEB narra un cuento corto sobre un pueblo donde el clima empieza a comportarse 'raro' (mucho calor, poca lluvia).","En círculo, cada estudiante muestra una lámina de clima y dice cómo se siente ese día.","Se dibuja una línea de tiempo simple: 'antes' y 'ahora' del clima en su comunidad.","Se cierra con una ronda: '¿qué cambió en el dibujo?'"],'ficha'=>"Ficha 'Colorea el clima de hoy': el estudiante colorea el ícono de clima de la jornada y dibuja cómo imagina el clima de hace muchos años.",'infografia'=>"Infografía A1 – '¿Qué es el clima?': compara 'tiempo de hoy' vs. 'clima de siempre' con íconos de sol, lluvia, nieve y viento.",'cierre'=>'¿Alguien de tu familia te ha contado que el clima antes era diferente?'],
            ['cod'=>'A2','titulo'=>'El viaje de la gotita','objetivo'=>'Comprender de forma lúdica el ciclo del agua y reconocer por qué el agua puede escasear.','tiempo'=>'45 minutos','materiales'=>'Una tela azul o cinta, tarjetas con dibujos (nube, río, mar, lluvia, planta), música suave (opcional).','pasos'=>["El PEB cuenta la historia de 'la gotita viajera' que sube al cielo, se convierte en nube y vuelve a caer.","Los estudiantes se convierten en 'gotitas' y se mueven siguiendo las etapas del ciclo.","Se detiene el juego en 'sequía': ¿qué pasa si la gotita no vuelve a caer por mucho tiempo?","Cierre: ¿de dónde viene el agua que tomamos en casa?"],'ficha'=>"Ficha 'Ordena el viaje de la gotita': recortar y pegar en orden 4 imágenes del ciclo del agua.",'infografia'=>"Infografía A2 – 'El ciclo del agua': diagrama circular con las 4 etapas ilustradas.",'cierre'=>'Compromiso: una cosa que puedo hacer para no desperdiciar agua en casa.'],
            ['cod'=>'A3','titulo'=>'Guardianes del agua','objetivo'=>'Identificar hábitos cotidianos de cuidado del agua en la familia y la escuela.','tiempo'=>'40 minutos','materiales'=>'Tarjetas con dibujos de acciones (cerrar el caño, regar de más, lavar mucho tiempo), una jarra con agua.','pasos'=>['El PEB muestra dos escenas: una donde se cuida el agua y otra donde se desperdicia.',"Los estudiantes clasifican tarjetas en 'cuido el agua' / 'desperdicio el agua'.",'Demostración con la jarra: cuánta agua se necesita realmente para lavarse las manos.','Juego de roles: un estudiante actúa una acción y el resto adivina.'],'ficha'=>"Ficha 'Soy guardián del agua': dibuja una acción que hará esta semana para cuidar el agua.",'infografia'=>"Infografía A3 – '5 formas de cuidar el agua'.",'cierre'=>'Cada estudiante repite en voz alta su compromiso de guardián del agua.'],
            ['cod'=>'A4','titulo'=>'La caja de la basura feliz','objetivo'=>'Diferenciar tipos de residuos (orgánico, plástico, papel) mediante clasificación lúdica.','tiempo'=>'40 minutos','materiales'=>'3 cajas o bolsas de colores, objetos/residuos limpios de ejemplo.','pasos'=>["El PEB presenta 3 'casas' (cajas de colores) para distintos tipos de residuos.",'Los estudiantes sacan un objeto de una bolsa sorpresa y deciden en qué casa vive.',"Se canta una canción corta sobre 'reducir, reusar, reciclar' creada por el grupo.",'Se revisa juntos si las clasificaciones fueron correctas.'],'ficha'=>"Ficha 'Une con una línea': unir cada residuo con la casa/color que le corresponde.",'infografia'=>"Infografía A4 – 'Las 3 casas de la basura'.",'cierre'=>'Compromiso: elegir un residuo que separarán en casa esta semana.'],
            ['cod'=>'A5','titulo'=>'La tierra que come cáscaras','objetivo'=>'Conocer de forma sensorial qué es el compostaje y para qué sirve.','tiempo'=>'45 minutos','materiales'=>'Cáscaras de fruta o verdura, un recipiente pequeño con tierra, guantes (opcional).','pasos'=>["El PEB explica que algunos residuos 'alimentan' a la tierra.",'Se entierran cáscaras en el recipiente de tierra frente al grupo.','Los estudiantes tocan y observan la tierra, describen textura y olor.','Se conversa sobre qué comen las plantas para crecer fuertes.'],'ficha'=>"Ficha 'Mi mini huerto': dibujar el recipiente de compost y lo que imaginan que crecerá.",'infografia'=>"Infografía A5 – 'De la cáscara a la planta'.",'cierre'=>'Se define un rincón del aula o casa donde seguir observando el compost.'],
            ['cod'=>'A6','titulo'=>'La planta triste y la planta feliz','objetivo'=>'Reconocer cómo la falta de agua o cuidado afecta a los cultivos.','tiempo'=>'40 minutos','materiales'=>'Dos macetas o dibujos de plantas (sana y marchita), tarjetas de clima.','pasos'=>["Se presentan 'la planta feliz' (bien cuidada) y 'la planta triste' (sin agua, con calor extremo).",'En parejas, conversan sobre por qué una planta está triste.',"Juego 'ser plantas': representan con su cuerpo lluvia y sequía.",'Se relaciona con los cultivos de sus familias.'],'ficha'=>"Ficha 'Ayuda a la planta triste': dibujar lo que la planta necesita para estar feliz de nuevo.",'infografia'=>"Infografía A6 – 'Lo que necesita una planta': sol, agua y tierra buena.",'cierre'=>'¿Qué cultivo conoces que a veces se ve afectado por el clima?'],
            ['cod'=>'A7','titulo'=>'Mi huerto pequeño','objetivo'=>'Experimentar el cultivo de una semilla como introducción a la agricultura sostenible.','tiempo'=>'45 minutos','materiales'=>'Vasos reutilizables, tierra, semillas de fácil germinación (fréjol, poroto), agua.','pasos'=>["Se explica de forma sencilla qué significa 'cuidar lo que comemos'.",'Cada estudiante siembra su semilla en un vaso reutilizado.','Se conversa sobre los cuidados que necesitará la semilla (agua, sol, paciencia).','Se acuerda un calendario simple de riego colectivo.'],'ficha'=>"Ficha 'Diario de mi semilla': dibujo semanal de cómo va creciendo la planta.",'infografia'=>"Infografía A7 – 'Sembrar es cuidar'.",'cierre'=>'Compromiso de regar y observar la planta cada semana.'],
            ['cod'=>'A8','titulo'=>'Los árboles amigos','objetivo'=>'Reconocer la importancia de los árboles para el suelo, el agua y el aire.','tiempo'=>'40 minutos','materiales'=>'Dibujos o fotos de árboles de la región, hojas secas reales si es posible, papel para dibujar.','pasos'=>["Un árbol 'amigo' cuenta, en juego de roles, todo lo que hace por la comunidad.",'Los estudiantes tocan y observan hojas reales, describen colores y formas.',"En grupo, arman una lista de 'lo que nos da el árbol'.",'Juego de mímica: ser un árbol que da sombra, frutos y sostiene la tierra.'],'ficha'=>"Ficha 'Mi árbol amigo': dibujar un árbol y tres cosas buenas que hace por la comunidad.",'infografia'=>"Infografía A8 – 'Lo que nos dan los árboles'.",'cierre'=>'Se invita a cuidar o saludar a un árbol cercano a su casa o escuela.'],
            ['cod'=>'A9','titulo'=>'¿Qué hago si...?','objetivo'=>'Practicar respuestas simples ante situaciones climáticas cotidianas (mucho sol, lluvia fuerte, viento).','tiempo'=>'40 minutos','materiales'=>'Tarjetas con dibujos de situaciones climáticas, cartel con opciones de respuesta.','pasos'=>["El PEB presenta una tarjeta con una situación (por ejemplo, 'hace mucho sol y no hay agua').",'Los estudiantes, en pequeños grupos, actúan qué harían.','Se comparte cada respuesta en plenaria y el PEB refuerza las ideas más seguras.','Se repite el juego con 2-3 situaciones más.'],'ficha'=>"Ficha '¿Qué harías tú?': tres viñetas donde el estudiante marca con una carita la mejor decisión.",'infografia'=>"Infografía A9 – 'Actúo con cuidado'.",'cierre'=>'Se recuerda que cuidar de uno mismo también es parte de cuidar el planeta.'],
            ['cod'=>'A10','titulo'=>'Somos una Brigada pequeñita','objetivo'=>'Cerrar el módulo organizando una mini-acción climática grupal en la escuela.','tiempo'=>'50 minutos','materiales'=>'Materiales reciclados para una acción simple (carteles, semillas, bolsas para recolectar basura).','pasos'=>['El PEB recuerda brevemente los temas vistos usando las infografías ya trabajadas.','En grupo, se elige UNA acción sencilla para realizar juntos.','Se realiza la mini-acción con acompañamiento del PEB.',"Cierre con una foto o dibujo grupal de 'Nuestra primera Brigada de Acción Climática'."],'ficha'=>"Ficha 'Mi Brigada': el estudiante dibuja la acción que hicieron juntos.",'infografia'=>"Infografía A10 – 'Diploma de Agente de Cambio'.",'cierre'=>"Entrega simbólica del 'Diploma de Agente de Cambio' a cada estudiante."],
        ],
    ],
    [
        'codigo' => 'B',
        'edad' => '9 a 12 años',
        'color' => 'navy',
        'titulo' => 'Módulo B — Estudiantes de 9 a 12 años',
        'subtitulo' => 'Nivel intermedio – análisis, casos y trabajo en equipo',
        'actividades' => [
            ['cod'=>'B1','titulo'=>'Detectives del clima','objetivo'=>'Diferenciar clima y tiempo atmosférico, e identificar evidencias de cambio climático en su territorio.','tiempo'=>'50 minutos','materiales'=>'Papelógrafo, marcadores, testimonios cortos de personas mayores de la comunidad.','pasos'=>['Lluvia de ideas: ¿qué es el clima? ¿qué es el tiempo?','El PEB comparte 1-2 testimonios breves de personas mayores sobre cómo era el clima antes.','En grupos de 4, los estudiantes listan pistas de cambio climático que ellos mismos han notado.','Se construye un mapa colectivo de evidencias de cambio climático en su territorio.'],'ficha'=>'Ficha "Investigación de campo": entrevista en casa a un adulto mayor con 3 preguntas guía.','infografia'=>"Infografía B1 – 'Clima vs. Tiempo': comparación con datos breves sobre cambio climático en Bolivia.",'cierre'=>'¿Por qué es importante escuchar a nuestros mayores sobre estos cambios?'],
            ['cod'=>'B2','titulo'=>'La ruta del agua en mi territorio','objetivo'=>'Comprender el ciclo del agua y las causas de la escasez hídrica en zonas rurales.','tiempo'=>'50 minutos','materiales'=>'Papelógrafo con esquema del ciclo del agua incompleto, plumones, mapa simple de la comunidad.','pasos'=>['Se presenta un esquema incompleto del ciclo del agua para completar en grupos.','Se ubican en un mapa sencillo las fuentes de agua conocidas (río, pozo, vertiente).','Discusión: ¿qué factores hacen que estas fuentes tengan menos agua en los últimos años?','Se listan en conjunto posibles causas (deforestación, menor lluvia, uso excesivo).'],'ficha'=>'Ficha "Caso real": análisis de un caso con preguntas de reflexión.','infografia'=>'Infografía B2 – "El ciclo del agua y la escasez": etapas y puntos donde interviene el cambio climático.','cierre'=>'Cada grupo comparte una causa de escasez identificada y una posible solución.'],
            ['cod'=>'B3','titulo'=>'Auditores del agua','objetivo'=>'Calcular de forma sencilla el consumo de agua en la escuela o el hogar y proponer mejoras.','tiempo'=>'50 minutos','materiales'=>'Ficha de registro, lápiz, recipiente medidor (opcional).','pasos'=>['El PEB explica qué es una "auditoría" de agua con un ejemplo simple.','En grupos, estiman cuánta agua se usa en actividades cotidianas de la escuela.','Se comparan resultados entre grupos y se identifican los usos de mayor consumo.','Se diseñan 2-3 recomendaciones prácticas para reducir el consumo.'],'ficha'=>'Ficha "Auditoría de agua": tabla de actividad, cantidad estimada y alternativa de ahorro.','infografia'=>'Infografía B3 – "Ahorra agua paso a paso".','cierre'=>'Cada grupo presenta su recomendación principal al resto del curso.'],
            ['cod'=>'B4','titulo'=>'El destino de la basura','objetivo'=>'Analizar el ciclo de vida de distintos residuos y su impacto ambiental.','tiempo'=>'50 minutos','materiales'=>'Tarjetas con imágenes de residuos y su tiempo de degradación, papelógrafo con línea de tiempo.','pasos'=>['Se presentan tarjetas de residuos comunes con su tiempo aproximado de degradación.','En grupos, ordenan las tarjetas de menor a mayor tiempo de degradación.','Discusión: ¿qué pasa con la basura que no se separa en su comunidad?','Se construye una lista de "residuos que podemos reducir" en la escuela.'],'ficha'=>'Ficha "Sopa de letras: tipos de residuos" + clasificación en orgánico/inorgánico/reciclable.','infografia'=>'Infografía B4 – "¿Cuánto tarda en degradarse?".','cierre'=>'Compromiso grupal: una acción de reducción de residuos para el mes.'],
            ['cod'=>'B5','titulo'=>'Construyendo una compostera escolar','objetivo'=>'Diseñar y comprender el funcionamiento de una compostera sencilla.','tiempo'=>'55 minutos','materiales'=>'Recipiente grande o espacio de tierra, residuos orgánicos, tierra, hojas secas, pala pequeña.','pasos'=>['El PEB explica el proceso de compostaje y sus beneficios para el suelo.','En grupos, arman capas de una compostera sencilla.','Se asigna un grupo responsable de dar seguimiento semanal.','Se conversa sobre cómo usar luego el compost en el huerto escolar.'],'ficha'=>'Ficha "Bitácora de la compostera": registro semanal de observaciones.','infografia'=>'Infografía B5 – "Cómo armar una compostera escolar".','cierre'=>'Se establece un cronograma rotativo de cuidado de la compostera.'],
            ['cod'=>'B6','titulo'=>'Cultivos en riesgo','objetivo'=>'Analizar cómo el cambio climático afecta los cultivos tradicionales de la región.','tiempo'=>'50 minutos','materiales'=>'Fichas con cultivos típicos de la zona (papa, quinua, maíz, haba), papelógrafo.','pasos'=>['Se asigna un cultivo típico de la región a cada equipo.','Cada grupo investiga qué condiciones climáticas necesita y qué riesgos lo amenazan.','Se presenta un breve reporte oral por grupo con dibujo del cultivo y sus riesgos.','Discusión plenaria: ¿qué cultivos son más vulnerables y por qué?'],'ficha'=>'Ficha "Análisis de caso: mi cultivo en riesgo".','infografia'=>'Infografía B6 – "Cultivos andinos y su vulnerabilidad climática".','cierre'=>'Se identifican prácticas que ya usan las familias para proteger sus cultivos.'],
            ['cod'=>'B7','titulo'=>'Sembrando resiliencia','objetivo'=>'Conocer prácticas de agricultura sostenible que fortalecen la seguridad alimentaria.','tiempo'=>'55 minutos','materiales'=>'Semillas, tierra, macetas o espacio de huerto escolar, ficha de prácticas sostenibles.','pasos'=>['El PEB presenta 3-4 prácticas de agricultura sostenible.','En grupos, eligen una práctica y la aplican en una parcela pequeña del huerto escolar.','Se documenta el proceso con fotos o dibujos.','Puesta en común sobre por qué estas prácticas ayudan frente al cambio climático.'],'ficha'=>'Ficha "Mi práctica sostenible": descripción, materiales usados y resultado esperado.','infografia'=>'Infografía B7 – "4 prácticas de agricultura sostenible".','cierre'=>'Compromiso grupal de dar seguimiento a la parcela sembrada.'],
            ['cod'=>'B8','titulo'=>'El bosque que nos protege','objetivo'=>'Comprender la relación entre deforestación, erosión del suelo y cambio climático.','tiempo'=>'50 minutos','materiales'=>'Dos recipientes con tierra (uno con "raíces" simuladas, otro sin ellas), agua, papelógrafo.','pasos'=>['Experimento: se vierte agua sobre los dos recipientes y se observa cuál retiene mejor el suelo.','Se relaciona el experimento con el papel de los árboles en la prevención de la erosión.','En grupos, identifican zonas de su comunidad con deforestación o pérdida de suelo.','Se diseña una propuesta breve de reforestación con especies nativas.'],'ficha'=>'Ficha "Mi propuesta de reforestación": área elegida, especie sugerida y razón.','infografia'=>'Infografía B8 – "Raíces que sostienen la vida".','cierre'=>'Si es posible, se planifica una jornada de siembra de árboles nativos.'],
            ['cod'=>'B9','titulo'=>'Semáforo de riesgos climáticos','objetivo'=>'Practicar la toma de decisiones frente a distintos escenarios de riesgo climático.','tiempo'=>'50 minutos','materiales'=>'Tarjetas de colores (rojo, amarillo, verde), casos escritos de riesgo climático.','pasos'=>['El PEB narra un caso de riesgo climático (ej. alerta de granizada antes de la cosecha).','Los estudiantes, en grupos, deciden qué acción tomar y levantan la tarjeta de color según la urgencia.','Se debate en plenaria las distintas decisiones y sus consecuencias.','Se repite con 2 casos más (sequía prolongada, lluvias intensas).'],'ficha'=>'Ficha "¿Qué harías tú?": tres casos de riesgo con opciones para marcar y justificar.','infografia'=>'Infografía B9 – "Semáforo de decisiones climáticas".','cierre'=>'Se reflexiona sobre la importancia de estar organizados como comunidad.'],
            ['cod'=>'B10','titulo'=>'Mi Brigada Estudiantil en acción','objetivo'=>'Diseñar de forma colaborativa un mini-proyecto de acción climática para la escuela o comunidad.','tiempo'=>'55 minutos','materiales'=>'Ficha de planificación de proyecto, papelógrafo, plumones.','pasos'=>['El PEB recuerda brevemente los temas trabajados en el módulo.','En grupos, eligen un problema climático de su territorio y proponen una acción concreta.','Cada grupo completa una ficha simple de planificación (qué, quién, cuándo, qué necesitan).','Se presenta cada propuesta al resto del curso.'],'ficha'=>'Ficha "Mi proyecto de Brigada": problema identificado, acción propuesta y recursos.','infografia'=>'Infografía B10 – "Pasos para mi proyecto de Brigada".','cierre'=>'Se acuerda un cronograma tentativo para iniciar la implementación.'],
        ],
    ],
    [
        'codigo' => 'C',
        'edad' => '13 a 18 años',
        'color' => 'terracota',
        'titulo' => 'Módulo C — Estudiantes de 13 a 18 años',
        'subtitulo' => 'Nivel avanzado – pensamiento crítico y diseño de proyectos',
        'actividades' => [
            ['cod'=>'C1','titulo'=>'Analizando el cambio climático en mi territorio','objetivo'=>'Analizar causas y evidencias del cambio climático a nivel global y su manifestación local.','tiempo'=>'55 minutos','materiales'=>'Datos breves sobre cambio climático en Bolivia (proporcionados por el PEB), papelógrafo, plumones.','pasos'=>['Presentación breve sobre causas globales del cambio climático (efecto invernadero, emisiones).','En grupos, analizan datos/evidencias locales y las relacionan con las causas globales.','Debate estructurado sobre la responsabilidad de distintos actores frente al cambio climático.','Se sintetizan las conclusiones en un mapa conceptual grupal.'],'ficha'=>'Ficha "Análisis de caso": lectura sobre impactos climáticos en una comunidad rural boliviana.','infografia'=>'Infografía C1 – "Causas y evidencias del cambio climático".','cierre'=>'¿Qué rol pueden jugar los jóvenes rurales frente a esta problemática global?'],
            ['cod'=>'C2','titulo'=>'El agua como derecho y como riesgo','objetivo'=>'Analizar la escasez hídrica desde una perspectiva de derechos y de gestión territorial.','tiempo'=>'55 minutos','materiales'=>'Mapa de fuentes de agua de la comunidad, datos de precipitación (si disponibles), papelógrafo.','pasos'=>['Se presenta el concepto de "seguridad hídrica" y su relación con el cambio climático.','En grupos, elaboran un mapa territorial simple de las fuentes de agua y su situación actual.','Discusión sobre conflictos o desafíos en torno al acceso al agua en su territorio.','Se identifican colectivamente posibles estrategias de gestión comunitaria del agua.'],'ficha'=>'Ficha "Diagnóstico hídrico comunitario": preguntas guía para investigar la situación del agua.','infografia'=>'Infografía C2 – "Seguridad hídrica y cambio climático".','cierre'=>'Puesta en común de los diagnósticos y propuestas de gestión hídrica.'],
            ['cod'=>'C3','titulo'=>'Huella hídrica: midiendo mi consumo','objetivo'=>'Calcular la huella hídrica personal y familiar, y diseñar un plan de reducción.','tiempo'=>'55 minutos','materiales'=>'Ficha de cálculo de huella hídrica (tabla simple), calculadora si es posible.','pasos'=>['El PEB explica el concepto de huella hídrica con ejemplos cotidianos.','Cada estudiante calcula una estimación de su consumo semanal de agua.','En grupos, comparan resultados e identifican los mayores consumos.','Se diseña un plan personal de reducción con al menos 3 acciones concretas.'],'ficha'=>'Ficha "Mi huella hídrica": tabla de cálculo + plan de acción personal.','infografia'=>'Infografía C3 – "¿Qué es la huella hídrica?".','cierre'=>'Compromiso individual de compartir el plan de reducción con su familia.'],
            ['cod'=>'C4','titulo'=>'Economía circular en mi comunidad','objetivo'=>'Analizar el modelo de economía circular como alternativa a la gestión lineal de residuos.','tiempo'=>'55 minutos','materiales'=>'Esquema de economía lineal vs. circular, ejemplos de emprendimientos locales de reciclaje (si existen).','pasos'=>['Se presenta la diferencia entre economía lineal ("usar y tirar") y circular ("reducir, reusar, reciclar, regenerar").','En grupos, analizan el flujo de residuos en su comunidad e identifican oportunidades de circularidad.','Se diseña una idea simple de emprendimiento o iniciativa de reciclaje/reuso.','Presentación breve de ideas (pitch de 2 minutos por grupo).'],'ficha'=>'Ficha "Mi idea circular": descripción de una iniciativa aplicable en su comunidad.','infografia'=>'Infografía C4 – "Economía lineal vs. economía circular".','cierre'=>'Votación grupal de la idea más viable para desarrollar como proyecto de Brigada.'],
            ['cod'=>'C5','titulo'=>'Del residuo al abono: compostaje a escala comunitaria','objetivo'=>'Diseñar un sistema de compostaje aplicable a escala comunitaria o de unidad educativa.','tiempo'=>'60 minutos','materiales'=>'Materiales para compostera (recipiente grande, residuos orgánicos, tierra, hojas secas), ficha técnica.','pasos'=>['El PEB presenta los principios técnicos del compostaje (proporciones, aireación, humedad).','En grupos, diseñan y construyen una compostera a mayor escala para la unidad educativa.','Se establece un sistema de turnos y registro técnico de seguimiento.','Se proyecta el uso del abono resultante en el huerto escolar o comunitario.'],'ficha'=>'Ficha técnica "Bitácora de compostaje comunitario".','infografia'=>'Infografía C5 – "Compostaje técnico paso a paso".','cierre'=>'Se asigna un equipo responsable de dar seguimiento mensual.'],
            ['cod'=>'C6','titulo'=>'Vulnerabilidad de los sistemas agrícolas locales','objetivo'=>'Analizar críticamente la vulnerabilidad de los sistemas productivos locales frente al cambio climático.','tiempo'=>'55 minutos','materiales'=>'Datos o testimonios sobre producción agrícola local, papelógrafo, plumones.','pasos'=>['En grupos, investigan los principales cultivos de su zona y su evolución en los últimos años.','Se construye un análisis simple de vulnerabilidad: ¿qué cultivos son más afectados y por qué?','Discusión sobre la relación entre pérdida de cultivos, migración y seguridad alimentaria.','Se identifican estrategias de adaptación ya utilizadas por las familias.'],'ficha'=>'Ficha "Análisis de vulnerabilidad agrícola": cultivo, riesgo y estrategia de adaptación.','infografia'=>'Infografía C6 – "Vulnerabilidad agrícola y cambio climático".','cierre'=>'Reflexión sobre el valor del conocimiento tradicional de las familias.'],
            ['cod'=>'C7','titulo'=>'Diseñando un sistema agrícola resiliente','objetivo'=>'Aplicar principios de agricultura sostenible y resiliente al diseño de una parcela demostrativa.','tiempo'=>'60 minutos','materiales'=>'Espacio de huerto escolar, semillas variadas, herramientas básicas, ficha de diseño.','pasos'=>['El PEB presenta principios de resiliencia agrícola (diversificación, asociación de cultivos, manejo de agua, abono orgánico).','En grupos, diseñan en papel una parcela demostrativa aplicando al menos 3 principios.','Se implementa el diseño (o una parte) en el huerto escolar.','Se documenta el proceso mediante fotografías o registro escrito.'],'ficha'=>'Ficha "Diseño de parcela resiliente": croquis y justificación técnica.','infografia'=>'Infografía C7 – "Principios de agricultura resiliente".','cierre'=>'Se establece un cronograma de manejo y seguimiento de la parcela.'],
            ['cod'=>'C8','titulo'=>'Reforestación con enfoque territorial','objetivo'=>'Planificar una acción de reforestación considerando criterios técnicos y territoriales.','tiempo'=>'55 minutos','materiales'=>'Mapa de la comunidad, información sobre especies nativas, ficha de planificación.','pasos'=>['El PEB presenta criterios básicos para elegir especies y sitios de reforestación.','En grupos, identifican en un mapa zonas prioritarias de reforestación en su comunidad.','Se elabora un plan simple: especie, sitio, cantidad de plantines, responsables.','Se gestiona, con apoyo del PEB, articular la acción con autoridades locales o la unidad educativa.'],'ficha'=>'Ficha "Plan de reforestación territorial": especie, sitio, cronograma y responsables.','infografia'=>'Infografía C8 – "Criterios para una reforestación exitosa".','cierre'=>'Se define una fecha tentativa para ejecutar la jornada de reforestación.'],
            ['cod'=>'C9','titulo'=>'Gestión de riesgos climáticos: simulacro de decisiones','objetivo'=>'Fortalecer capacidades de toma de decisiones colectivas frente a escenarios de riesgo climático.','tiempo'=>'60 minutos','materiales'=>'Guion de simulacro con roles (autoridad comunal, familia agricultora, estudiante, PEB), tarjetas de escenario.','pasos'=>['El PEB presenta un escenario de riesgo climático complejo (ej. alerta de sequía prolongada antes de la siembra).','Se asignan roles a los estudiantes para simular la toma de decisiones.','Cada rol delibera y propone una acción; se negocia una decisión conjunta en plenaria.','Se analiza el proceso: ¿qué dificultades hubo para ponerse de acuerdo? ¿qué información faltó?'],'ficha'=>'Ficha "Simulacro de decisión climática": registro de la decisión de cada rol.','infografia'=>'Infografía C9 – "Gestión de riesgos climáticos".','cierre'=>'Reflexión sobre la importancia de la organización comunitaria y la Brigada.'],
            ['cod'=>'C10','titulo'=>'Mi proyecto de Brigada Estudiantil de Acción Climática','objetivo'=>'Diseñar y presentar un proyecto de acción climática viable para implementar en la comunidad educativa.','tiempo'=>'60 minutos','materiales'=>'Ficha de formulación de proyecto, papelógrafo, plumones.','pasos'=>['El PEB guía una síntesis de los temas trabajados en el módulo.','En grupos, identifican un problema climático prioritario en su territorio.','Se formula un proyecto simple: problema, objetivo, actividades, recursos, cronograma, responsables.','Cada grupo presenta su proyecto al resto del curso y recibe retroalimentación.'],'ficha'=>'Ficha "Formulación de proyecto de Brigada": estructura completa de planificación.','infografia'=>'Infografía C10 – "De la idea a la acción".','cierre'=>'Se selecciona, con apoyo del PEB, un proyecto para iniciar su implementación.'],
        ],
    ],
];

$rubricas = [
    'A' => [
        'titulo' => 'Módulo A (6 a 8 años)',
        'filas' => [
            ['Reconoce la diferencia entre clima y tiempo', 'Nombra ejemplos con apoyo del PEB', 'Los confunde o necesita apoyo constante'],
            ['Identifica al menos una acción de cuidado del agua', 'Identifica la acción pero no la explica', 'No identifica acciones'],
            ['Clasifica correctamente residuos orgánicos e inorgánicos', 'Clasifica con apoyo', 'No logra clasificar'],
            ['Participa activamente en la mini-acción grupal (A10)', 'Participa parcialmente', 'No participa'],
        ],
    ],
    'B' => [
        'titulo' => 'Módulo B (9 a 12 años)',
        'filas' => [
            ['Explica con sus palabras al menos dos evidencias locales de cambio climático', 'Menciona evidencias sin explicarlas', 'No identifica evidencias'],
            ['Analiza causas de la escasez de agua en su territorio', 'Identifica causas de forma general', 'No relaciona causas y efectos'],
            ['Propone una práctica de agricultura sostenible aplicable a su contexto', 'Propone una práctica genérica', 'No logra proponer una práctica'],
            ['Formula un mini-proyecto de Brigada con problema y acción (B10)', 'Formula el proyecto de forma incompleta', 'No logra formular el proyecto'],
        ],
    ],
    'C' => [
        'titulo' => 'Módulo C (13 a 18 años)',
        'filas' => [
            ['Argumenta críticamente sobre causas y responsabilidades del cambio climático', 'Describe causas sin argumentar', 'No logra relacionar causas y responsabilidades'],
            ['Calcula y analiza su huella hídrica personal', 'Calcula con apoyo, sin analizar', 'No logra calcular'],
            ['Diseña una parcela o plan de reforestación con criterio técnico', 'Diseña con criterios parciales', 'No logra aplicar criterios técnicos'],
            ['Formula y presenta un proyecto completo de Brigada Estudiantil (C10)', 'Formula el proyecto con vacíos en su planificación', 'No logra formular el proyecto'],
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
            <h1 class="page-title">Manual del PEB</h1>
            <ul>
                <li><a class="active" href="{{ route('home') }}">Inicio</a></li>
                <li>Manual del PEB — Mochila de Acción Climática</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Presentacion Start -->
    <div class="rs-about style3 pt-100 pb-70 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row mb-40 md-mb-25">
                <div class="col-lg-9 mx-auto text-center">
                    <div class="sec-title2 text-center">
                        <div class="sub-title">Producto 2 · 30 actividades pedagógicas</div>
                        <h2 class="title purple-color mb-20">Manual del PEB — Mochila de Acción Climática</h2>
                        <div class="desc">
                            Este Manual acompaña al Agente de Cambio (PEB) en la implementación de la Mochila de
                            Acción Climática, una herramienta pedagógica lista para usar que combina teoría, recursos
                            visuales y guías de acción. El contenido está organizado en tres módulos (6–8, 9–12 y
                            13–18 años) que profundizan progresivamente diez ejes temáticos comunes, desde el
                            reconocimiento básico del clima hasta el diseño de proyectos de acción climática
                            liderados por las y los propios estudiantes a través de las Brigadas Estudiantiles.
                            Cada una de las 30 actividades incluye sus recursos pedagógicos obligatorios: una
                            infografía didáctica para imprimir, una hoja de trabajo para estudiantes y, cuando
                            corresponde, dinámicas de la caja de herramientas que no requieren conexión a internet.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="cc-card">
                        <h3 class="text-center mb-25">Diez Ejes Temáticos</h3>
                        <div class="row">
                            @foreach ($ejes as $i => $eje)
                            <div class="col-md-6 mb-15">
                                <div class="d-flex align-items-center">
                                    <span class="cc-pill-num me-3">{{ $i + 1 }}</span>
                                    <span>{{ $eje }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Presentacion End -->

    <!-- Ruta de Aprendizaje Start -->
    <div class="gray-bg3 pt-70 pb-70 md-pt-40 md-pb-40">
        <div class="container">
            <div class="sec-title2 text-center mb-40 md-mb-25">
                <div class="sub-title">Cómo se organiza el Manual</div>
                <h2 class="title purple-color">Ruta de Aprendizaje Climática</h2>
                <div class="desc">5 etapas que acompañan al estudiante desde conocer el problema hasta liderar una acción climática propia.</div>
            </div>
            <div class="row">
                @foreach ($ruta as $etapa)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="cc-card">
                        <span class="cc-pill-num mb-3">{{ $etapa['n'] }}</span>
                        <h4>{{ $etapa['nombre'] }}</h4>
                        <p class="cc-question">{{ $etapa['pregunta'] }}</p>
                        <p>{{ $etapa['desc'] }}</p>
                        <p class="cc-eje mb-0">{{ $etapa['ejes'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Ruta de Aprendizaje End -->

    <!-- Fundamentacion Tecnica Start -->
    <div class="rs-about style3 pt-70 pb-70 md-pt-40 md-pb-40">
        <div class="container">
            <div class="sec-title2 text-center mb-40 md-mb-25">
                <div class="sub-title">Rigor técnico</div>
                <h2 class="title purple-color">Fundamentación Técnica Multidisciplinaria</h2>
                <div class="desc">El diseño de la Mochila de Acción Climática integra tres enfoques profesionales complementarios, exigidos por la naturaleza interdisciplinaria del perfil del/la consultor/a y por la escala del proyecto (77 PEBs, más de 13.000 estudiantes, 16 municipios en dos departamentos).</div>
            </div>
            <div class="row">
                @foreach ($fundamentacion as $i => $f)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="cc-card cc-approach cc-approach-{{ $f['color'] }}">
                        <div class="cc-icon cc-icon-{{ $f['color'] }}">
                            <img src="{{ asset('assets/images/'.$f['icono']) }}" alt="">
                        </div>
                        <span class="cc-sub">{{ $f['sub'] }}</span>
                        <h4>{{ $f['titulo'] }}</h4>
                        <p>{{ $f['texto'] }}</p>
                        <div class="cc-chip-row">
                            @foreach ($f['chips'] as $chip)
                            <span class="cc-chip cc-chip-{{ $f['color'] }}">{{ $chip }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Fundamentacion Tecnica End -->

    <!-- Modulos Start -->
    <div class="rs-faq-part pt-70 pb-70 md-pt-40 md-pb-40 gray-bg3">
        <div class="container">
            <div class="sec-title2 text-center mb-40 md-mb-25">
                <div class="sub-title">Las 30 actividades pedagógicas</div>
                <h2 class="title purple-color">Actividades por Módulo</h2>
                <div class="desc">Elige un módulo por edad y haz clic en cada actividad para ver su objetivo, materiales, desarrollo paso a paso, hoja de trabajo e infografía asociada.</div>
            </div>

            <ul class="nav cc-module-tabs mb-40 md-mb-25" id="moduloTabs" role="tablist">
                @foreach ($modulos as $i => $modulo)
                <li class="nav-item" role="presentation">
                    <button class="nav-link cc-module-tab-{{ $modulo['color'] }} {{ $i === 0 ? 'active' : 'cc-tab-hint' }}" id="tab-{{ $modulo['codigo'] }}" data-bs-toggle="tab" data-bs-target="#panel-{{ $modulo['codigo'] }}" type="button" role="tab" aria-controls="panel-{{ $modulo['codigo'] }}" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">
                        Módulo {{ $modulo['codigo'] }}
                        <span class="cc-module-tab-age">{{ $modulo['edad'] }}</span>
                    </button>
                </li>
                @endforeach
            </ul>

            <div class="tab-content" id="moduloTabContent">
                @foreach ($modulos as $i => $modulo)
                <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}" id="panel-{{ $modulo['codigo'] }}" role="tabpanel" aria-labelledby="tab-{{ $modulo['codigo'] }}">
                    <div class="content-part">
                        <div class="title mb-25 md-mb-15 d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <div>
                                <h3 class="text-part mb-5">{{ $modulo['titulo'] }}</h3>
                                <p class="mb-0">{{ $modulo['subtitulo'] }}</p>
                            </div>
                            <span class="cc-chip cc-chip-{{ $modulo['color'] }}">{{ count($modulo['actividades']) }} actividades</span>
                        </div>
                        <div id="accordion-modulo-{{ $modulo['codigo'] }}" class="accordion cc-activity-accordion cc-activity-{{ $modulo['color'] }}">
                            @foreach ($modulo['actividades'] as $index => $act)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $modulo['codigo'] }}{{ $index }}" aria-expanded="false">
                                        <span class="cc-act-code">{{ $act['cod'] }}</span>
                                        <span class="cc-act-title">{{ $act['titulo'] }}</span>
                                        <span class="cc-act-time"><i class="fa fa-clock-o"></i> {{ $act['tiempo'] }}</span>
                                        <i class="fa fa-angle-down cc-act-chevron {{ $loop->first ? 'cc-chevron-hint' : '' }}"></i>
                                    </a>
                                </div>
                                <div id="collapse-{{ $modulo['codigo'] }}{{ $index }}" class="collapse" data-bs-parent="#accordion-modulo-{{ $modulo['codigo'] }}">
                                    <div class="card-body">
                                        <p><strong>Objetivo de aprendizaje:</strong> {{ $act['objetivo'] }}</p>
                                        <p><strong>Materiales:</strong> {{ $act['materiales'] }}</p>
                                        <p><strong>Desarrollo paso a paso:</strong></p>
                                        <ol>
                                            @foreach ($act['pasos'] as $paso)
                                            <li>{{ $paso }}</li>
                                            @endforeach
                                        </ol>
                                        <p><strong>Hoja de trabajo asociada:</strong> {{ $act['ficha'] }}</p>
                                        <p><strong>Infografía asociada:</strong> {{ $act['infografia'] }}</p>
                                        <p class="mb-0"><strong>Cierre y reflexión:</strong> {{ $act['cierre'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Modulos End -->

    <!-- Evaluacion Start -->
    <div class="rs-about style3 pt-70 pb-70 md-pt-40 md-pb-40">
        <div class="container">
            <div class="sec-title2 text-center mb-40 md-mb-25">
                <div class="sub-title">Cierre de cada módulo</div>
                <h2 class="title purple-color">Sistema de Evaluación de Aprendizajes por Nivel</h2>
                <div class="desc">Rúbrica de referencia para que el PEB verifique el logro de los objetivos al cierre de cada módulo, a partir de las hojas de trabajo y la participación en las actividades A10, B10 o C10.</div>
            </div>
            @foreach ($rubricas as $r)
            <div class="cc-card mb-30">
                <h4 class="mb-20">{{ $r['titulo'] }}</h4>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle table-climate mb-0">
                        <thead>
                            <tr>
                                <th>Indicador de logro (Logrado)</th>
                                <th>En proceso</th>
                                <th>Inicial</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($r['filas'] as $fila)
                            <tr>
                                <td>{{ $fila[0] }}</td>
                                <td>{{ $fila[1] }}</td>
                                <td>{{ $fila[2] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Evaluacion End -->

    <!-- Produccion y Trazabilidad Start -->
    <div class="rs-cta home11-style pt-70 pb-70 md-pt-40 md-pb-40">
        <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
            <div class="content text-center">
                <div class="sec-title2 mb-30">
                    <div class="sub-title white-color">Producción y trazabilidad</div>
                    <h2 class="title white-color">Un sistema, no solo un documento</h2>
                    <div class="desc white-color">
                        Cada una de las 30 actividades cuenta con su ficha de producción: materiales físicos a
                        comprar o preparar y piezas gráficas a diseñar (30 infografías en total, una por actividad),
                        consolidadas en la "Caja de Herramientas Dinámicas" para facilitar la cotización y el brief
                        de diseño de los 20 kits. El seguimiento de la entrega de kits, los resultados del
                        diagnóstico y la cobertura de capacitación de los 77 PEBs se centraliza en un Sistema de
                        Monitoreo y Seguimiento en hoja de cálculo, entregado como herramienta complementaria.
                    </div>
                </div>
                <div class="btn-part">
                    <a class="readon white-color" href="{{ route('glosario-climatico') }}">Ver Glosario Climático</a>
                    <a class="readon white-color" href="{{ route('mochila') }}">🎒 Ver Mochila Interactiva 3D</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Produccion y Trazabilidad End -->

</div>
@endsection
