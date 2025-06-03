@extends('layouts.public')

@section('content')
<div class="servicios-container" x-data="{ 
        active: 'psicologia',
        menuOpen: false
    }">
    {{-- Menú lateral --}}
    <nav class="servicios-menu" :class="{ 'open': menuOpen }">
        <div class="menu-header" @click.stop="menuOpen = !menuOpen">
        </div>
        <div class="menu-content">
            <ul>
                {{-- Psicología --}}
                <li>
                    <details class="servicio-item" :open="active === 'psicologia'">
                        <summary class="menu-item" @click.prevent="active = 'psicologia'; menuOpen = false">
                            Psicología
                        </summary>
                    </details>
                </li>
                {{-- Neuropsicología --}}
                <li>
                    <details class="servicio-item" :open="active.startsWith('neuropsicologia')">
                        <summary class="menu-item" @click.prevent="active = 'neuropsicologia'">
                            Neuropsicología
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
                    <details class="servicio-item" :open="active.startsWith('neurorrehabilitacion')">
                        <summary class="menu-item" @click.prevent="active = 'neurorrehabilitacion'">
                            Neurorrehabilitación
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
        </div>
    </nav>

    {{-- Contenido dinámico --}}
    <div class="servicios-content">
        {{-- Psicología general --}}
        <section x-show="active==='psicologia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia.jpg') }}" alt="Psicología">
            <h2>Psicología</h2>
            <p>
                La <span class="strong">Psicología</span> es una rama de la ciencia que estudia la mente y el
                comportamiento humano, así como procesos mentales como los pensamientos, sentimientos y emociones.
                <br>
                El objetivo principal del psicólogo es ayudar en la comprensión y gestión de los problemas psicológicos
                y emocionales que alteran la calidad de vida de las personas.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Anamnesis del caso</li>
                <li>▼</li>
                <li>Evaluación cualitativa y/o cuantitativa personalizada en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Devolución de conclusiones clínicas y posible diagnóstico</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>Plan de intervención</li>
                <li>▼</li>
                <li>Pautas y coordinación con su entorno</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Promoción y prevención psicológica y emocional</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Mejorar el bienestar emocional y psicológico</li>
                <li>Desarrolla herramientas de gestión emocional</li>
                <li>Favorece la interiorización de recursos y estrategias de afrontamiento</li>
                <li>Fomenta el autoconocimiento, la autoestima y la confianza en uno mismo</li>
                <li>Ayuda en la toma de decisiones y a establecer objetivos a corto y largo plazo</li>
                <li>Favorece el desarrollo y reajuste de vínculos y relaciones interpersonales</li>
                <li>Ayuda a superar experiencias y eventos difíciles o traumáticos</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTO-JUVENIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, Altas
                                        Capacidades, Trastornos del aprendizaje, Trastornos del lenguaje y alteraciones
                                        genéticas
                                    </li>
                                    <li>
                                        <span class="strong">Trastornos psicológicos y emocionales</span>: Trastorno de
                                        la conducta, problemas de autocontrol y gestión emocional, Trastorno de
                                        Ansiedad, Depresión, Fobias, Trastorno Obsesivo Compulsivo (TOC) y Trastorno de
                                        estrés postraumático (TEPT)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">NEURORREHABILITACIÓN</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: Ictus, traumatismos,
                                        tumores…
                                    </li>
                                    <li>
                                        <span class="strong">Enfermedades neurodegenerativas</span>: Demencias,
                                        Esclerosis Lateral Amiotrófica (ELA), Enfermedad de Parkinson, Esclerosis
                                        Múltiple…
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ADULTOS Y VEJEZ</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos psicológicos y emocionales</span>: Trastorno del
                                        estado de ánimo, Trastorno de Ansiedad, Depresión, Fobias y Trastorno de estrés
                                        postraumático (TEPT)
                                    </li>
                                    <li>Deterioro cognitivo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        {{-- Neuropsicología --}}
        <section x-show="active==='neuropsicologia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/neuropsico.jpg') }}" alt="Neuropsicología">
            <h2>Neuropsicología</h2>
            <p>
                La <span class="strong">Neuropsicología</span> es una rama de la Psicología la cual estudia y trabaja
                sobre las funciones cognitiva innatas (atención, inhibición, memoria, percepción, cognición espacial,
                lenguaje, praxias, funciones ejecutivas y cognición social) y adquiridas (calculo, escritura, lectura y
                orientación izquierda y derecha), así como los procesos que estas ocasionan y se ven reflejadas en la
                conducta y su interacción con el medio.
                <br>
                El objetivo principal del neuropsicólogo es comprender y atender el funcionamiento neurocognitivo en el
                humano y sus posibles alteraciones.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Anamnesis del caso</li>
                <li>▼</li>
                <li>Evaluación cualitativa y/o cuantitativa personalizada en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Devolución de conclusiones clínicas y posible diagnóstico</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>Plan de intervención</li>
                <li>▼</li>
                <li>Pautas y coordinación con su entorno</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Mejora el rendimiento cognitivo</li>
                <li>Favorece el enlentecimiento del deterioro cognitivo natural y adquirido</li>
                <li>Ayuda a identificar y comprender el funcionamiento de nuestro cerebro</li>
                <li>Facilita la aplicación de adaptaciones y recursos de afrontamiento del día a día</li>
                <li>
                    Promueve la recuperación o compensación de alteraciones cognitivas derivadas de trastornos
                    psicológicos y/o neurológicos
                </li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTO-JUVENIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        Evaluación y diagnóstico de neurodivergencias
                                    </li>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, Altas
                                        Capacidades, Trastornos del aprendizaje, Retraso madurativo, Diversidad
                                        Funcional, Trastornos del lenguaje y alteraciones genéticas
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">NEURORREHABILITACIÓN</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: Ictus, traumatismos,
                                        tumores…
                                    </li>
                                    <li>
                                        <span class="strong">Enfermedades neurodegenerativas</span>: Demencias,
                                        Esclerosis Lateral Amiotrófica (ELA), Enfermedad de Parkinson, Esclerosis
                                        Múltiple…
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ADULTOS Y VEJEZ</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>Evaluación y diagnóstico de neurodivergencias</li>
                                    <li>Deterioro cognitivo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Terapia Ocupacional -->
        <section x-show="active==='terapia_ocupacional'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/to.jpg') }}" alt="TO General">
            <h2>Terapia Ocupacional</h2>
            <p>
                La <span class="strong">Terapia Ocupacional</span> es una disciplina sanitaria que se enfoca en promover
                la autonomía y
                la participación activa de las personas en sus actividades cotidianas, también llamadas ocupaciones.
                <br>
                El objetivo principal del terapeuta ocupacional es mejorar la calidad de vida de las personas,
                ayudándolas a desarrollar, recuperar o mantener las habilidades necesarias para desenvolverse con la
                mayor independencia posibleen su día a día.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Evaluación personalizada en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Identificación de fortalezas, dificultades y necesidades</li>
                <li>▼</li>
                <li>Información sobre su entorno y desempeño de roles (hogar, escuela, trabajo, comunidad, ocio…)</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>Plan de intervención</li>
                <li>▼</li>
                <li>Pautas y coordinación con su entorno</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Mejora la autonomía personal</li>
                <li>Potencia la participación en la vida diaria</li>
                <li>Desarrolla habilidades motoras, cognitivas y sociales</li>
                <li>Previene la dependencia</li>
                <li>Favorece el correcto procesamiento sensorial</li>
                <li>Apoya a familias y cuidadores</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        Evaluación y diagnóstico de neurodivergencias
                                    </li>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, parálisis
                                        cerebral, , dificultades sensoriales, Sindrome de Down, enfermedades raras,
                                        problemas en la escritura o en la motricidad
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">NEURORREHABILITACIÓN</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: Ictus, traumatismos,
                                        tumores…
                                    </li>
                                    <li>
                                        <span class="strong">Enfermedades neurodegenerativas</span>: Demencias,
                                        Esclerosis Lateral Amiotrófica (ELA), Enfermedad de Parkinson, Esclerosis
                                        Múltiple…
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ADULTOS Y VEJEZ</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>Pérdida de autonomía por envejecimiento</li>
                                    <li>Enfermedades crónicas</li>
                                    <li>Trastornos del procesamiento sensorial</li>
                                    <li>Deterioro cognitivo y físico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Logopedia -->
        <section x-show="active==='logopedia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/logopedia.jpg') }}" alt="Logopedia">
            <h2>Logopedia</h2>
            <p>
                La <span class="strong">Logopedia</span> es una rama de las ciencias sanitarias que aborda la
                evaluación, diagnóstico,
                prevención y rehabilitación de alteraciones en la comunicación, habla, lenguaje, voz y otras funciones
                orales no verbales (deglución, masticación, parálisis facial…). La intervención logopédica aborda desde
                neonatos hasta la vejez.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Valoración inicial, basada en entrevista, observación y pruebas estandarizadas</li>
                <li>▼</li>
                <li>Establecer objetivos terapéuticos junto a la persona o familiares</li>
                <li>▼</li>
                <li>Plan de intervención personalizado</li>
                <li>▼</li>
                <li>Pautas tanto para la persona como sus diferentes contextos</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Potencia la articulación del habla, así como la comprensión y la expresión del lenguaje</li>
                <li>Permite a la persona expresar sus necesidades y deseos</li>
                <li>Previene y/o rehabilita alteraciones en la voz</li>
                <li>Favorece las relaciones sociales</li>
                <li>Permite el desarrollo o recuperación de alteraciones en la deglución</li>
                <li>Consigue un buen estado y funcionamiento de las estructuras orofaciales</li>
                <li>Favorecer un buen desarrollo craneofacial</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, Trastornos del
                                        aprendizaje, Retraso madurativo, Diversidad Funcional, Trastornos del habla y
                                        del lenguaje y alteraciones genéticas
                                    </li>
                                    <li>
                                        <span class="strong">Desórdenes miofuncionales</span>: deglución atípica,
                                        frenillo lingual, respiración oral, posicionamiento lingual, bruxismo, apnea,
                                        dolor orofacial, alteraciones en la masticación
                                    </li>
                                    <li>
                                        <span class="strong">Terapia vocal</span>: fatiga vocal, disfonía, nódulos
                                        vocales, coordinación fonorespiratoria
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">NEURORREHABILITACIÓN</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, Trastornos del
                                        aprendizaje, Retraso madurativo, Diversidad Funcional, Trastornos del habla y
                                        del lenguaje y alteraciones genéticas
                                    </li>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: afasia, disartria, apraxia,
                                        disfagia, parálisis facial
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ADULTO Y VEJEZ</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Desórdenes miofuncionales</span>: deglución atípica,
                                        frenillo lingual, respiración oral, posicionamiento lingual, bruxismo, apnea,
                                        dolor orofacial, alteraciones en la masticación
                                    </li>
                                    <li>
                                        <span class="strong">Terapia vocal</span>: fatiga vocal, disfonía, nódulos
                                        vocales, coordinación fonorespiratoria
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Neurorehabilitación -->
        <section x-show="active==='neurorrehabilitacion'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/neurorehabilitacion.jpg') }}" alt="Neurorehabilitación">
            <h2>Neurorrehabilitación</h2>
            <p>
                La <span class="strong">Neurorrehabilitación</span> es un proceso de tratamiento con enfoque
                multidisciplinario que involucra a profesionales de la neuropsicología, terapia ocupacional y logopedia
                en atender y abordar a aquellas personas que presentan una afectación en sus funciones neurológicas.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Anamnesis del caso</li>
                <li>▼</li>
                <li>Evaluación cualitativa y/o cuantitativa personalizada en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Devolución de conclusiones clínicas y posible diagnóstico</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>Plan de intervención</li>
                <li>▼</li>
                <li>Pautas y coordinación con su entorno</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>
                    Recuperación, compensación o enlentecimiento de aquellas funciones cognitivas y motoras afectadas
                </li>
                <li>Fomentar la autonomía y adaptaciones del día a día</li>
                <li>Mejorar la calidad de vida</li>
                <li>Promover la reintegración social</li>
                <li>Favorecer el bienestar integro de la persona afectada y de su entorno</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">Personas</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, Altas
                                        Capacidades, Trastornos del aprendizaje, Retraso madurativo, Diversidad
                                        Funcional, Trastornos del lenguaje y alteraciones genéticas
                                    </li>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: Ictus, traumatismos,
                                        tumores…
                                    </li>
                                    <li>
                                        <span class="strong">Enfermedades neurodegenerativas</span>: Deterioro
                                        cognitivo, Demencias, Esclerosis Lateral Amiotrófica (ELA), Enfermedad de
                                        Parkinson, Esclerosis Múltiple…
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Terapia Asistida con Animales -->
        <section x-show="active==='taa'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/taa.jpg') }}" alt="Terapia con Animales">
            <h2>Terapia con Animales</h2>
            <p>
                La <span class="strong">Terapia Asistida con Animales</span> es una metodología de intervención
                terapéutica
                estructurada y dirigida por un profesional de la salud, en donde se introduce la asistencia de animales
                cualificados para favorecer los objetivos terapéuticos previamente marcados.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Evaluación por un profesional de la salud en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Identificación de fortalezas, dificultades y necesidades</li>
                <li>▼</li>
                <li>Información sobre su entorno y desempeño de roles (hogar, escuela, trabajo, comunidad, ocio…)</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>
                    Plan de intervención adaptado y coordinación con los profesionales a cargo de las terapias
                    principales
                </li>
                <li>▼</li>
                <li>Seguimiento</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Aumenta la alianza terapéutica e implicación en la terapia</li>
                <li>Reduce la ansiedad, el sentimiento de soledad y la sintomatología depresiva</li>
                <li>Favorece la creación de espacios de conexión, expresión y regulación emocional</li>
                <li>Mejora la gestión emocional y autocontrol</li>
                <li>Favorece el mantenimiento de estados de calma fisiológicos y psicológicos</li>
                <li>Potencia la creación de vínculos</li>
                <li>Incrementa la intención comunicativa</li>
                <li>Favorece la focalización y mantenimiento de la atención</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTO-JUVENIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, Altas
                                        Capacidades, Trastornos del aprendizaje, Retraso madurativo, Diversidad
                                        Funcional, Trastornos del lenguaje y alteraciones genéticas
                                    </li>
                                    <li>
                                        <span class="strong">Trastornos psicológicos y emocionales</span>: Trastorno de
                                        la conducta, problemas de autocontrol y gestión emocional, Trastorno de
                                        Ansiedad, Depresión, Fobias y Trastorno de estrés postraumático (TEPT)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">NEURORREHABILITACIÓN</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Daño cerebral adquirido</span>: Ictus, traumatismos,
                                        tumores…
                                    </li>
                                    <li>
                                        <span class="strong">Enfermedades neurodegenerativas</span>: Demencias,
                                        Esclerosis Lateral Amiotrófica (ELA), Enfermedad de Parkinson, Esclerosis
                                        Múltiple…
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ADULTOS Y VEJEZ</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>
                                        <span class="strong">Trastornos psicológicos y emocionales</span>: Trastorno del
                                        estado de ánimo, Trastorno de Ansiedad, Depresión, Fobias y Trastorno de estrés
                                        postraumático (TEPT)
                                    </li>
                                    <li>Deterioro cognitivo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h2>PROGRAMA DE TERAPIA ASISTIDA CON ANIMALES</h2>
            <p>
                Programa de <span class="strong">seis talleres diferentes</span> destinado a ofrecer un servicio de
                asistencia terapéutica grupal e
                integral a través de la terapia asistida con animales. Todos los talleres están diseñados y dirigidos
                por profesionales de la salud.
            </p>
            <ul class="beneficios-lista">
                <li>Sesiones semanales, quincenales o mensuales</li>
                <li>Sesiones de 1 hora</li>
                <li>Entre 3 y 10 participantes</li>
                <li>Adaptado a todas las edades, condición y características</li>
                <li>Elección libre de talles. Con posibilidad de variar temática</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Talleres</h3>
            <ul>
                <li><span style="font-size:1.3em; margin-right:0.5em;">🧠</span>Taller de estimulación cognitiva</li>
                <li><span style="font-size:1.3em; margin-right:0.5em;">🤲</span>Taller de motricidad fina y gruesa</li>
                <li><span style="font-size:1.3em; margin-right:0.5em;">💖</span>Taller de inteligencia emocional</li>
                <li><span style="font-size:1.3em; margin-right:0.5em;">🏠</span>Taller de actividades de la vida diaria
                </li>
                <li><span style="font-size:1.3em; margin-right:0.5em;">🧩</span>Taller de integración sensorial</li>
                <li><span style="font-size:1.3em; margin-right:0.5em;">🛁</span>Taller de autocuidado</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>A quién va dirigido</h3>

            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">CENTROS EDUCATIVOS</span>
                            </div>
                            <div class="card-back">
                                <p style="padding: 1rem; font-size: 1rem;">
                                    Alumnos con necesidades educativas especiales, aulas ordinarias con alumnado con
                                    problemas de conducta, ansiedad, autolesiones, desmotivación, bajo estado de ánimo,
                                    bullying, problemas de comunicación, falta de habilidades sociales, problemas de
                                    aprendizaje, dificultades de adaptación y trastornos del neurodesarrollo.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">RESIDENCIAS DE ANCIANOS</span>
                            </div>
                            <div class="card-back">
                                <p style="padding: 1rem; font-size: 1rem;">
                                    Usuarios con deterioro cognitivo leve o moderado, demencia, trastornos del
                                    movimiento, usuarios con estado bajo estado de ánimo y con alteración en actividades
                                    de la vida diaria básicas e instrumentales.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">ASOCIACIONES Y FUNDACIONES</span>
                            </div>
                            <div class="card-back">
                                <p style="padding: 1rem; font-size: 1rem;">
                                    Usuarios con diversidad funcional, trastornos psiquiátricos, alteración en las
                                    actividades de la vida diaria básicas e instrumentales, dificultades psicomotrices,
                                    usuarios con problemas de conducta, con riesgo de exclusión social y aislamiento,
                                    usuarios con alteración sensorial, usuarios con alteración en el estado de ánimo,
                                    problemas de autocontrol, problemas en la funcionalidad diaria, alteración
                                    cognitiva, daño cerebral, trastornos del neurodesarrollo y enfermedades
                                    neurodegenerativas.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Apoyo educación -->
        <section x-show="active==='ae'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/ae.jpg') }}" alt="Apoyo Educación">
            <h2>Apoyo Educación</h2>
            <p>
                El <span class="strong">Apoyo Educativo</span> consiste en una metodología de intervención dirigida al
                entorno
                educativo, con la finalidad de adquirir recursos y estrategias para el desarrollo de competencias
                curriculares asociadas al aprendizaje.
            </p>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Metodología</h3>
            <ul class="metodologia-lista">
                <li>Anamnesis del caso</li>
                <li>▼</li>
                <li>Evaluación cualitativa y/o cuantitativa personalizada en relación al motivo de consulta</li>
                <li>▼</li>
                <li>Marcaje de objetivos</li>
                <li>▼</li>
                <li>Plan de intervención</li>
                <li>▼</li>
                <li>Pautas y coordinación con su entorno</li>
                <li>▼</li>
                <li>Seguimiento</li>
                <li>▼</li>
                <li>Alta</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Beneficios</h3>
            <ul class="beneficios-lista">
                <li>Mejorar el rendimiento académico</li>
                <li>Fortalecimiento de habilidades y recursos relacionados con el aprendizaje</li>
                <li>Desarrollo ocupacional</li>
                <li>Incorporación de adaptaciones curriculares</li>
            </ul>

            <br>
            <hr class="separador-servicio">
            <br>
            <h3>Áreas de Intervención</h3>
            <ul class="areas-lista">
                <li>
                    <div class="card-flip" @click="$el.classList.toggle('flipped')">
                        <div class="card-inner">
                            <div class="card-front">
                                <span class="card-title">INFANTO-JUVENIL</span>
                            </div>
                            <div class="card-back">
                                <ul>
                                    <li>Necesidades educativas especiales</li>
                                    <li>
                                        <span class="strong">Trastornos del neurodesarrollo</span>: TEA, TDAH, Altas
                                        Capacidades, Trastornos del aprendizaje, Retraso madurativo, Diversidad
                                        Funcional, Trastornos del lenguaje y alteraciones genéticas
                                    </li>
                                    <li>Dificultades en el aprendizaje por condiciones personales y ambientales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</div>
@endsection