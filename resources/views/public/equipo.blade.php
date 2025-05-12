@extends('layouts.public')

@section('content')
<div class="equipo-container">
    <h1 class="equipo-title">Equipo Coraymente</h1>

    <div class="equipo-grid">

        {{-----------------LORENA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/jefas.jpg') }}" alt="Lorena Sanchez" class="profesional-avatar">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Lorena Sánchez Martínez</h2>
                <p class="profesional-pro">Psicóloga</p>
                <span class="profesional-col">Nº COL.: </span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2">
                    Soy Lorena, psicóloga y especialista en neurodivergencia, alteraciones del estado de ánimo y
                    desregulación emocional. Durante mi recorrido profesional, que incluye asociaciones para personas
                    con enfermedades neurodegerativas, hospitales privados en el área de la neurorrehabilitación y
                    clínicas privadas en donde durante años he ofrecido terapia psicológica a población infanto-juvenil
                    y adultos, he descubierto mi pasión por entender la mente en su conjunto y así lograr un estado
                    completo de bienestar.<br>
                    Durante estos años, me he ido formando desde el ámbito de la neuropsicología, en evaluación e
                    intervención en trastornos del neurodesarrollo, daño cerebral y enfermedades neurodegenerativas y
                    desde el ámbito de la psicología, en inteligencia emocional, terapias de tercera generación y apego,
                    siendo mi última formación en terapia asistida con perros, a fin de unificar mis tres grandes
                    pasiones. Mi compromiso con la salud reside en ofrecer un acompañamiento terapéutico íntegro,
                    cercano y adaptado a las necesidades y características de cada persona.<br>
                    Mi pasión por los animales es algo que me caracteriza desde bien pequeña. Desde siempre he estado
                    comprometida con el bienestar y cuidado de los animales, colaborando con asociaciones y procesos de
                    adopción, teniendo siempre claro que los animales iban a formar parte de vida a nivel personal y
                    profesional.<br>
                </p>

                {{-- Secciones desplegables --}}
                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en Psicología (Universidad Miguel Hernández)</li>
                            <li>Máster en Psicología General Sanitaria (Universidad Miguel Hernández)</li>
                            <li>Máster en Neuropsicología Clínica (Universidad Pablo de Olavide)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de Experto en Intervención Asistida con Perros (UDIMA)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'especialidad' ? null : 'especialidad'">
                            Especialidad
                            <span x-show="openSection !== 'especialidad'">+</span>
                            <span x-show="openSection === 'especialidad'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'especialidad'" x-collapse>
                            <li>Neuropsicología</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------MINERVA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/jefas.jpg') }}" alt="Minerva Linares" class="profesional-avatar">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Minerva Linares Martín-Calpena</h2>
                <p class="profesional-pro">Terapeuta Ocupacional</p>
                <span class="profesional-col">Nº COL.: CV-44600697</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Minerva, terapeuta ocupacional especializada en infancia y neurodesarrollo, con una
                    trayectoria profesional que abarca diversas áreas de la salud. A lo largo de mi recorrido
                    profesional, que incluye el trabajo en residencias de ancianos, hospitales privados en el área de
                    neurorrehabilitación y centros de terapia infantil, he descubierto que mi auténtica pasión radica en
                    la promoción de un equilibrio ocupacional óptimo. <br>
                    Durante estos años ejerciendo mi profesión me he ido formando en Integración Sensorial de la mano de
                    la Universidad Sur de California y en abordajes e intervención en Autismo y en colegios. Asimismo,
                    he hecho diversos cursos sobre problemas de alimentación en la infancia, demencias y atención
                    temprana. <br>
                    Mi compromiso con la salud no se limita solo a la práctica profesional, también se refleja en mi
                    interés por la alimentación saludable y la promoción de buenos hábitos. Creo firmemente en la
                    conexión entre cuerpo y mente para alcanzar una vida plena. <br>
                    Mi objetivo es claro: ayudar a las personas a ser independientes en las actividades de la vida
                    diaria, brindando apoyo especializado a ancianos, adultos, niños y sus familias. Estoy comprometida
                    en ofrecer servicios que fomenten el bienestar y la autonomía, contribuyendo así a una vida plena y
                    significativa para todos.
                </p>

                {{-- Secciones desplegables --}}
                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en Terapia Ocupacional (Universidad Rey Juan Carlos)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso completo de Integración sensorial y Autismo (Aytona- Universidad Sur de
                                California) </li>
                            <li>Curso Problemas de alimentación en la infancia (Aytona)</li>
                            <li>Curso intervención en la selectividad alimentaria (Elena Yagüe)</li>
                            <li>Curso intervención en Autismo en contextos naturales desde un enfoque basado en el
                                desarrollo (Universidad de Almería)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------RAQUEL-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/raquel.jpg') }}" alt="Raquel Cristo" class="profesional-avatar">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Raquel Cristo</h2>
                <p class="profesional-pro">Terapeuta Ocupacional</p>
                <span class="profesional-col">Nº COL.: </span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Raquel terapeuta ocupacional. Cuando me gradué en terapia ocupacional buscaba la inspiración que
                    me llevase exactamente a la especialidad que me acompañaría de por vida. Tengo un máster en
                    Demencias y Modelo de ACP (Atención Centrada en la Persona). Me considero una defensora de este
                    modelo porque las preferencias y deseos de los protagonistas del proceso y de sus familias, siempre
                    deberían ser el centro de una buena intervención. <br>
                    Hace ya unos años encontré mi vocación en forma de espectro y desde que me adentré en el mundo del
                    TEA no he dejado de formarme porque cuando realmente te apasiona lo que haces, estás en renovación
                    constante de conocimientos. Soy especialista en Integración Sensorial y he estudiado diversos cursos
                    específicos del autismo como alimentación en TEA, intervención en contextos naturales, acoso y TEA y
                    detección, diagnóstico e intervención en atención temprana. <br>
                    Mi andadura como terapeuta ocupacional pasa por intervención domiciliaria y clinica en Demencias y
                    población infanto-juvenil TEA hasta abordaje en el entorno escolar. <br>
                    Mi objetivo: dotar a los peques el mayor bienestar y calidad de vida, así como intervenir en el
                    desempeño ocupacional y lograr la mayor autonomía e independencia posibles en las AVDs (Actividades
                    de la Vida Diaria). <br>
                    Me comprometo a ser una profesional de confianza, cálida y atenta a cada objetivo de trabajo.
                    Creer y crear están tan solo a una letra de distancia, ¡anímate a luchar por aquello que quieres
                    conseguir! Estoy aquí para trabajar por ello y juntos seremos capaces.
                </p>

                {{-- Secciones desplegables --}}
                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en Psicología (Universidad de Cantabria)</li>
                            <li>Máster en Neuropsicología Clínica (UNED)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de Comunicación Aumentativa (AAC)</li>
                            <li>Taller de Terapia Miofuncional (2023)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------CLARA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/clara.jpg') }}" alt="Clara San Nicolás" class="profesional-avatar">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Clara San Nicolás</h2>
                <p class="profesional-pro">Psicóloga</p>
                <span class="profesional-col">Nº COL.: </span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Clara, soy psicóloga. Cuento con el Máster de Psicología General Sanitaria y el Máster de
                    Terapia Psicológica para niños y adolescentes. <br>
                    Cuando empecé a estudiar psicología fue cuando comprendí que había encontrado mi vocación y me
                    enamoré de esta profesión. Estudiar psicología no solo me ha permitido aprender muchas cosas a nivel
                    profesional, sino que me ha permitido ver el mundo desde otra perspectiva y entenderme mucho más a
                    mí y a las personas que me rodean. <br>
                    Mis ganas de aprender nunca sacian y por ello, estoy continuamente formándome. Cuento con diversos
                    cursos relacionados con: autoestima, habilidades sociales, duelo, ansiedad, neurodivergencia,
                    trastornos alimentarios, entre otros. <br>
                    Mi objetivo es poder ayudarte y acompañarte en terapia, creando un espacio seguro, donde te
                    encuentres tranquilx, cómodx y libre de juicios.
                </p>

                {{-- Secciones desplegables --}}
                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en Psicología (Universidad Miguel Hernández)</li>
                            <li>Máster en Psicología General Sanitaria (Universidad Miguel Hernández)</li>
                            <li>Máster en Terapia Psicológica para niños y adolescentes (Universidad Miguel Hernández)
                            </li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de ...</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------NOEMI-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            <img src="{{ asset('imagenes/equipo/noemi.jpg') }}" alt="Noemi Martínez" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Noemi Martínez</h2>
                <p class="profesional-pro">Terapeuta Ocupacional</p>
                <span class="profesional-col">Nº COL.: </span>

                <p class="profesional-desc mt-2 mb-4">
                    Soy Noemi. Parte de mi enfoque en terapia ocupacional consiste en la adaptación de
                    tareas y entornos, facilitando así que las personas superen las barreras que puedan encontrar debido
                    a limitaciones físicas, cognitivas o emocionales, ya sea a través del juego en niños como en adultos
                    ó, trabajando sobre las AVD’s, tanto en sus aspectos más básicos como en los instrumentales y
                    avanzados. <br>
                    A lo largo de mi carrera profesional, he trabajado y realizado diferentes cursos relacionados con la
                    neurorehabilitación, dificultades del aprendizaje en etapa escolar, integración sensorial y terapias
                    ecuestres. <br>
                    Mi objetivo está dedicado a promover el bienestar, autonomía y calidad de vida de las personas,
                    promoviendo no solo el desempeño funcional, sino también el bienestar emocional y el desarrollo
                    personal. <br>
                    Mi profesión no solo es mi carrera, sino también mi vocación, ya que me apasiona seguir aprendiendo,
                    adaptandome y creciendo para poder ayudar a otros a alcanzar su máximo potencial en las actividades
                    cotidianas y a encontrar un equilibrio ocupacional que les permita disfrutar de una vida plena y
                    significativa.
                </p>

                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en </li>
                            <li>Máster en </li>
                            <li>Doctorado en </li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de ...</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------INMA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            <img src="{{ asset('imagenes/equipo/inma.jpg') }}" alt="Inma Fulleda" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Inma Fulleda García</h2>
                <p class="profesional-pro">Maestra en Audición y Lenguaje</p>
                {{-- <span class="profesional-col">Nº COL.: </span> --}}

                <p class="profesional-desc mt-2 mb-4">
                    Soy Inma, soy maestra de Audición y Lenguaje. Estoy graduada en el doble grado de
                    Educación Primaria e Infantil, con la mención en Audición y Lenguaje, lo que me ha permitido
                    comprender la importancia de apoyar a los niños en su desarrollo lingüístico desde las primeras
                    etapas de su vida. Actualmente, soy opositora y, al mismo tiempo, continúo formándome con el máster
                    en Atención Temprana con el objetivo de profundizar en las primeras etapas del desarrollo infantil.
                    <br>
                    Mi vocación por la enseñanza siempre ha sido mi motor. Me considero una persona empática, paciente y
                    comprometida con el bienestar de cada niño. Estoy convencida de que cada pequeño tiene un potencial
                    único que se puede desbloquear a través de una intervención adecuada, por lo que me esfuerzo por
                    ofrecer un espacio de aprendizaje inclusivo y estimulante. En mi metodología, el juego es clave, los
                    niños aprenden mejor cuando disfrutan, por eso diseño sesiones donde exploran y descubren a través
                    de actividades lúdicas.
                    <br>
                    Mi objetivo es acompañar a los niños en su desarrollo comunicativo, ofreciéndoles herramientas
                    para superar sus dificultades y desarrollarse, favoreciendo su confianza y autonomía, porque cada
                    niño merece ser escuchado y comprendido.
                </p>

                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">-</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en Educación Infantil</li>
                            <li>Grado en Educación Primaria</li>
                            <li>Mención en Audición y lenguaje</li>
                            <li>Máster en Atención Temprana</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">-</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de Educación emocional: DE LA INTELIGENCIAS MÚLTIPLES AL MINDFULNESS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------ELENA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            <img src="{{ asset('imagenes/equipo/jefas.jpg') }}" alt="Elena Cuerda" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Elena Cuerda Navarro</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: </span>

                <p class="profesional-desc mt-2 mb-4">
                    Soy Elena, y soy una apasionada de mi trabajo. Llevo en el mundo de la Logopedia
                    desde hace 8 años y desde entonces he estado en formación continua para ofrecer el mejor servicio a
                    mis pacientes y poder mejorar su calidad de vida. Además de cursos de formación en lenguaje, habla,
                    trastornos miofuncionales, disfagia y voz, tengo un Máster en rehabilitación de patologías
                    neurológicas. Durante este tiempo he tenido la oportunidad de trabajar en hospitales, diferentes
                    centros de rehabilitación de daño cerebral y centros de desarrollo infantil. A raíz de trabajar
                    durante años con pacientes con problemas de alimentación, decidí estudiar para mi segunda profesión,
                    dietista.
                    <br>
                    Mi objetivo cada día es poder ayudar a aquellas personas que encuentran barreras en su comunicación
                    o alimentación, y guiar tanto a la persona como a su entorno durante todo el proceso. Todos nos
                    comunicamos más allá de las palabras y comer es mucho más que masticar y tragar.
                    <br>
                    Además de mi formación y trabajo como logopeda, soy una amante del desarrollo de hábitos saludables
                    y el crecimiento personal. Me gusta dar lo mejor de mí cada día y apoyar a todo aquel que lo
                    necesite, por lo que estaré encantada de escucharte y ayudarte.
                </p>

                <div class="profesional-sections">
                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                            Formación
                            <span x-show="openSection !== 'formacion'">+</span>
                            <span x-show="openSection === 'formacion'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                            <li>Grado en </li>
                            <li>Máster en </li>
                            <li>Doctorado en </li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de ...</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection





{{-- <div class="profesional-card" x-data="{ openSection: null }">
    <img src="{{ asset('imagenes/equipo/jefas.jpg') }}" alt="" class="profesional-avatar">

    <div class="profesional-content">

        <h2 class="profesional-nombre"></h2>
        <p class="profesional-pro"></p>
        <span class="profesional-col">Nº COL.: </span>

        <p class="profesional-desc mt-2 mb-4">
            Soy ...
        </p>

        <div class="profesional-sections">
            <div class="section-group">
                <button class="section-toggle" @click="openSection = openSection === 'formacion' ? null : 'formacion'">
                    Formación
                    <span x-show="openSection !== 'formacion'">+</span>
                    <span x-show="openSection === 'formacion'">–</span>
                </button>
                <ul class="section-list" x-show="openSection === 'formacion'" x-collapse>
                    <li>Grado en </li>
                    <li>Máster en </li>
                    <li>Doctorado en </li>
                </ul>
            </div>

            <div class="section-group">
                <button class="section-toggle"
                    @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                    Formación complementaria
                    <span x-show="openSection !== 'complementaria'">+</span>
                    <span x-show="openSection === 'complementaria'">–</span> </button>
                <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                    <li>Curso de ...</li>
                </ul>
            </div>
        </div>
    </div>

</div> --}}