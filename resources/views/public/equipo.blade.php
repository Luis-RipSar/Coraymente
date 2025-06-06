@extends('layouts.public')

@section('content')
<div class="equipo-container">
    <h1 class="equipo-title">Equipo Coraymente</h1>

    <div class="equipo-grid">

        {{-----------------LORENA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/lorena.jpg') }}" alt="Lorena Sanchez" class="profesional-avatar">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Lorena Sánchez Martínez</h2>
                <p class="profesional-pro">Psicóloga</p>
                <span class="profesional-col">Nº COL.: CV-15384</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2">
                    Soy Lorena, psicóloga y especialista en neurodivergencia, alteraciones del estado de ánimo y
                    desregulación emocional. Durante mi recorrido profesional, que incluye asociaciones para personas
                    con enfermedades neurodegerativas, hospitales privados en el área de la neurorrehabilitación y
                    clínicas privadas en donde durante años he ofrecido terapia psicológica a población infanto-juvenil
                    y adultos, he descubierto mi pasión por entender la mente en su conjunto y así lograr un estado
                    completo de bienestar.
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
            <img src="{{ asset('imagenes/equipo/minerva.jpg') }}" alt="Minerva Linares" class="profesional-avatar">

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
                    la promoción de un equilibrio ocupacional óptimo.
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
                                desarrollo (Universidad de Almería)</li>
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
                <span class="profesional-col">Nº COL.: CV-0845</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Raquel terapeuta ocupacional. Cuando me gradué en terapia ocupacional buscaba la inspiración que
                    me llevase exactamente a la especialidad que me acompañaría de por vida. Tengo un máster en
                    Demencias y Modelo de ACP (Atención Centrada en la Persona). Me considero una defensora de este
                    modelo porque las preferencias y deseos de los protagonistas del proceso y de sus familias, siempre
                    deberían ser el centro de una buena intervención.
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
                            <li>Grado en Terapia Ocupacional (Universidad Miguel Hernández)</li>
                            <li>Máster en Gerontología y modelo de Atención Centrada en la Persona (ACP) (Universidad
                                Internacional de Valencia)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso integración sensorial y TEA</li>
                            <li>Curso de alimentación en TEA</li>
                            <li>Curso de intervención en contextos naturales en atención temprana</li>
                            <li>Curso de acoso en colectivo TEA</li>
                            <li>Curso de detección, diagnóstico e intervención en atención temprana</li>
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
                <span class="profesional-col">Nº COL.: CV-16729</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Clara, soy psicóloga. Cuento con el Máster de Psicología General Sanitaria y el Máster de
                    Terapia Psicológica para niños y adolescentes. Cuando empecé a estudiar psicología fue cuando
                    comprendí que había encontrado mi vocación y me enamoré de esta profesión. Estudiar psicología no
                    solo me ha permitido aprender muchas cosas a nivel profesional, sino que me ha permitido ver el
                    mundo desde otra perspectiva y entenderme mucho más a mí y a las personas que me rodean.
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
                </div>
            </div>

        </div>
        {{-----------------NOEMI-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            <img src="{{ asset('imagenes/equipo/noemi.jpg') }}" alt="Noemi Martínez" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Noemi Martínez</h2>
                <p class="profesional-pro">Terapeuta Ocupacional</p>
                <span class="profesional-col">Nº COL.: CV-0923</span>

                <p class="profesional-desc mt-2 mb-4">
                    Soy Noemi. Parte de mi enfoque en terapia ocupacional consiste en la adaptación de
                    tareas y entornos, facilitando así que las personas superen las barreras que puedan encontrar debido
                    a limitaciones físicas, cognitivas o emocionales, ya sea a través del juego en niños como en adultos
                    ó, trabajando sobre las AVD’s, tanto en sus aspectos más básicos como en los instrumentales y
                    avanzados.
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
                            <li>Ciclo formativo superior TAFAD(IES Victoria Kent)</li>
                            <li>Grado en Terapia Ocupacional(UMH)</li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso de Integración sensorial</li>
                            <li>Curso de "Dificultades del aprendizaje en la edad escolar</li>
                            <li>Curso de iniciación a terapias ecuestres</li>
                            <li>Curso de "Comunicación aumentativa y alternativa, software, herramientas y materiales
                                para la comunicación" (ARASAAC)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-----------------INMA-----------------------}}
        <div class="profesional-card" x-data="{ openSection: null }">
            <img src="{{ asset('imagenes/equipo/inma.jpg') }}" alt="Inma Fulleda" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Inmaculada Fulleda García</h2>
                <p class="profesional-pro">Maestra en Audición y Lenguaje</p>
                {{-- <span class="profesional-col">Nº COL.: </span> --}}

                <p class="profesional-desc mt-2 mb-4">
                    Soy Inma, soy maestra de Audición y Lenguaje. Estoy graduada en el doble grado de
                    Educación Primaria e Infantil, con la mención en Audición y Lenguaje, lo que me ha permitido
                    comprender la importancia de apoyar a los niños en su desarrollo lingüístico desde las primeras
                    etapas de su vida. Actualmente, soy opositora y, al mismo tiempo, continúo formándome con el máster
                    en Atención Temprana con el objetivo de profundizar en las primeras etapas del desarrollo infantil.
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
            <img src="{{ asset('imagenes/equipo/elena.jpg') }}" alt="Elena Cuerda" class="profesional-avatar">

            <div class="profesional-content">

                <h2 class="profesional-nombre">Elena Cuerda Navarro</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: CV-284651</span>

                <p class="profesional-desc mt-2 mb-4">
                    Soy Elena, y soy una apasionada de mi trabajo. Llevo en el mundo de la Logopedia
                    desde hace 8 años y desde entonces he estado en formación continua para ofrecer el mejor servicio a
                    mis pacientes y poder mejorar su calidad de vida. Además de cursos de formación en lenguaje, habla,
                    trastornos miofuncionales, disfagia y voz, tengo un Máster en rehabilitación de patologías
                    neurológicas. Durante este tiempo he tenido la oportunidad de trabajar en hospitales, diferentes
                    centros de rehabilitación de daño cerebral y centros de desarrollo infantil. A raíz de trabajar
                    durante años con pacientes con problemas de alimentación, decidí estudiar para mi segunda profesión,
                    dietista.
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
                            <li>Grado en Logopedia(Universidad de Murcia)</li>
                            <li>Máster en intervención logopédica en patología neurológica </li>
                            <li>Técnico Superior en Dietética(Instituto Claudio Galeno) </li>
                        </ul>
                    </div>

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'complementaria' ? null : 'complementaria'">
                            Formación complementaria
                            <span x-show="openSection !== 'complementaria'">+</span>
                            <span x-show="openSection === 'complementaria'">–</span> </button>
                        <ul class="section-list" x-show="openSection === 'complementaria'" x-collapse>
                            <li>Curso especialización: Planificación de menús y dietas especiales</li>
                            <li>Curso especialización: Nutrición deportiva adaptada</li>
                            <li>Nuevas perspectivas en la rehabilitación vocal</li>
                            <li>Mastermind más voz</li>
                            <li>Estill Voice Training y Logopedia</li>
                            <li>Evaluación e intervención logopédica en deglución atípica</li>
                            <li>Abordaje integral en el paciente con disfagia: una visión multidisciplinar</li>
                            <li>Tratamiento de la disfagia orofaríngea</li>
                            <li>Intervención logopédica actualizada en rotacismo</li>
                            <li>Trastornos de los sonidos del habla: recursos prácticos para la intervención</li>
                            <li>Terapias funcionales en afasia</li>
                            <li>Intervención logopédica en afasias no fluentes</li>
                            <li>Disartria: modelos de evaluación e intervención basados en la evidencia actual</li>
                            <li>Intervención logopédica en Trastornos del Especetro Autista</li>
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