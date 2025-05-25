@extends('layouts.public')

@section('content')
<div class="servicios-container" x-data="{ active: 'psicologia' }">
    {{-- Menú lateral --}}
    <nav class="servicios-menu">
        <ul>
            {{-- Psicología --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('psicologia')">
                    <summary class="menu-item" @click.prevent="active = 'psicologia'">
                        Psicología
                    </summary>
                </details>
            </li>
            {{-- Terapia Ocupacional --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('terapia_ocupacional')">
                    <summary class="menu-item" @click.prevent="active = 'terapia_ocupacional'">
                        Terapia Ocupacional
                    </summary>
                </details>
            </li>

            {{-- Logopedia --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('logopedia')">
                    <summary class="menu-item" @click.prevent="active = 'logopedia'">
                        Logopedia
                    </summary>
                </details>
            </li>

            {{-- Neurorehabilitación --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('neurorehabilitacion')">
                    <summary class="menu-item" @click.prevent="active = 'neurorehabilitacion'">
                        Neurorehabilitación
                    </summary>
                </details>
            </li>

            {{-- Terapia Asistida con Animales --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('taa')">
                    <summary class="menu-item" @click.prevent="active = 'taa'">
                        Terapia con Animales
                    </summary>
                </details>
            </li>

            {{-- Apoyo Educación --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('ae')">
                    <summary class="menu-item" @click.prevent="active = 'ae'">
                        Apoyo Educación
                    </summary>
                </details>
            </li>
        </ul>
    </nav>

    {{-- Contenido dinámico --}}
    <div class="servicios-content">
        {{-- Psicología general --}}
        <section x-show="active==='psicologia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/psicologia.jpg') }}" alt="Psicología">
            <h2>Psicología</h2>
            <p>Ofrecemos atención psicológica personalizada para todas las edades…</p>
        </section>

        <!-- Terapia Ocupacional -->
        <section x-show="active==='terapia_ocupacional'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/to.jpg') }}" alt="TO General">
            <h2>Terapia Ocupacional</h2>
            {{-- EXPLICACION --}}

            <h3>Explicación</h3>
            <p>La Terapia Ocupacional es una disciplina sanitaria que se enfoca en promover la autonomía y la
                participación activa de las personas en sus actividades cotidianas, también llamadas ocupaciones. Estas
                pueden incluir desde vestirse, alimentarse o ir al colegio o al trabajo, hasta jugar, socializar o
                participar en actividades comunitarias.
                <br>
                <br>
                El objetivo principal del terapeuta ocupacional es mejorar la calidad de vida de las personas,
                ayudándolas a desarrollar, recuperar o mantener las habilidades necesarias para desenvolverse con la
                mayor independencia posible en su día a día.
                <br>
                <br>
                La intervención en terapia ocupacional parte de una evaluación personalizada. Se identifican las
                fortalezas, dificultades y necesidades de cada persona en su entorno habitual (hogar, escuela, trabajo,
                comunidad), y a partir de ahí se diseña un plan de intervención adaptado.
            </p>

            {{-- METODOLOGIA --}}
            <h3>Metodología</h3>
            <h4>Algunas estrategias o herramientas que se utilizan pueden incluir:</h4>
            <ul>
                <li>Ejercicios para mejorar la motricidad fina y gruesa</li>
                <li>Actividades que favorecen la autonomía en la vida diaria (como vestirse, comer, asearse)</li>
                <li>Adaptaciones del entorno o uso de productos de apoyo</li>
                <li>Entrenamiento en habilidades sociales y cognitivas</li>
                <li>Juegos y dinámicas lúdicas con objetivos terapéuticos</li>
                <li>Orientación a familias y cuidadores</li>
            </ul>

            <h3>Beneficios</h3>
            <h4>La Terapia Ocupacional no solo trata dificultades: acompaña a las personas a descubrir y potenciar sus
                capacidades, mejorar su autonomía y participar activamente en su entorno.
                Su enfoque centrado en la persona permite trabajar de forma integral en todas las etapas de la vida, con
                beneficios concretos y visibles en el día a día. </h4>
            <ul>
                <li>
                    <h5>Mejora la autonomía personal</h5>
                    <p>
                        Ayuda a que las personas realicen por sí mismas actividades básicas como vestirse, alimentarse,
                        asearse o desplazarse, promoviendo una vida más independiente.
                    </p>
                </li>
                <li>
                    <h5>Potencia la participación en la vida diaria</h5>
                    <p>
                        Favorece la inclusión en la escuela, el trabajo, el hogar o la comunidad, adaptando tareas y
                        entornos para que cada persona pueda participar activamente.
                    </p>
                </li>
                <li>
                    <h5>Desarrolla habilidades motoras, cognitivas y sociales</h5>
                    <p>
                        Mediante actividades terapéuticas, se trabajan aspectos como la motricidad fina y gruesa, la
                        atención, la memoria, la planificación y las relaciones con los demás.
                    </p>
                </li>
                <li>
                    <h5>Previene la dependencia</h5>
                    <p>
                        En personas mayores o con enfermedades crónicas, la terapia ocupacional mantiene las capacidades
                        funcionales y ralentiza el deterioro, promoviendo un envejecimiento activo.
                    </p>
                </li>
                <li>
                    <h5>Acompaña en procesos de rehabilitación neurológica</h5>
                    <p>
                        Tras un ictus, traumatismo u otra lesión, la terapia ayuda a recuperar funciones perdidas y a
                        readaptarse al entorno con nuevos recursos y apoyos.
                    </p>
                </li>
                <li>
                    <h5>Apoya a familias y cuidadores</h5>
                    <p>
                        Ofrece orientación práctica, estrategias adaptadas y acompañamiento emocional para afrontar el
                        día a día con mayor confianza.
                    </p>
                </li>
            </ul>

            <h3>Áreas de intervención</h3>
            <h4>En nuestro centro trabajamos en tres grandes áreas de intervención:</h4>
            <ul>
                <li>
                    <h5>Área Infantil</h5>
                    <p>
                        Intervenimos en niños con trastornos del neurodesarrollo (como TEA, TDAH o parálisis cerebral),
                        dificultades sensoriales, Sindrome de Down, enfermedades raras, problemas en la escritura o en
                        la motricidad. A través del juego y actividades terapéuticas, fomentamos su desarrollo,
                        autonomía y participación en el entorno escolar y familiar.
                    </p>
                </li>
                <li>
                    <h5>Neurorrehabilitación</h5>
                    <p>
                        Dirigida a personas que han sufrido un daño cerebral adquirido (ictus, traumatismos, tumores) o
                        enfermedades neurológicas como esclerosis múltiple, ELA o Parkinson. Trabajamos para recuperar
                        funciones perdidas, mantener capacidades y mejorar la independencia en las actividades
                        cotidianas.
                    </p>
                </li>
                <li>
                    <h5>Adultos y Personas Mayores</h5>
                    <p>
                        Apoyamos a personas con pérdida de autonomía por envejecimiento, enfermedades crónicas,
                        trastornos del procesamiento sensorial, deterioro cognitivo o físico. Nuestro objetivo es
                        mantener la funcionalidad, prevenir la dependencia y promover un envejecimiento
                        activo y con sentido.
                    </p>
                </li>
            </ul>
        </section>

        <!-- Logopedia -->
        <section x-show="active==='logopedia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/logopedia.jpg') }}" alt="Logopedia">
            <h2>Logopedia</h2>
            <p>Tratamos trastornos del habla y lenguaje…</p>
        </section>

        <!-- Neurorehabilitación -->
        <section x-show="active==='neurorehabilitacion'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/neuro.jpg') }}" alt="Neurorehabilitación">
            <h2>Neurorehabilitación</h2>
            <p>Evaluamos y rehabilitamos funciones cognitivas…</p>
        </section>

        <!-- Terapia Asistida con Animales -->
        <section x-show="active==='taa'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/taa.jpg') }}" alt="Terapia con Animales">
            <h2>Terapia con Animales</h2>
            <p>Intervenciones con animales entrenados…</p>
        </section>

        <!-- Apoyo educación -->
        <section x-show="active==='ae'" x-cloak class="servicio-seccion">
            <img src="{{ asset('public/imagenes/servicios/ae.jpg') }}" alt="Apoyo Educación">
            <h2>Apoyo Educación</h2>
            <p>Psicopedagogía</p>
        </section>

    </div>
</div>
@endsection