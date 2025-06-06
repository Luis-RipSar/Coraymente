@extends('layouts.public')

@section('content')
<div class="fondo-container">
    <div class="fondo-capa"></div>
    <video class="fondo-video" autoplay muted loop playsinline>
        <source src="{{ asset('videos/video_ini.mp4') }}" type="video/mp4">
        Tu navegador no soporta la etiqueta <code>video</code>.
    </video>
    <div class="fondo-overlay">
        <h1 class="fondo-title">Cada gota en el mar cuenta</h1>
        <p class="fondo-subtitulo">Psicología, Terapia Ocupacional, Logopedia, Neurorrehabilitación y Terapia Asistida
            con Animales</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary fondo-cta">Pedir cita</a>
    </div>
</div>
<div class="inicio">

    {{-- 1. Qué es… --}}
    <section class="inicio__que-es">
        <h2>¿Qué es CorayMente?</h2>
        <p>CorayMente es un centro multidisciplinar ubicado tanto en Elche como Almoradí, el cual cuenta con un equipo
            de profesionales de la psicología, neurorrehabilitación, terapia ocupacional, logopedia y terapia asistida
            con animales, con amplia experiencia y formación en infancia y adolescencia, adultez y vejez, siendo
            expertas en neurodivergencia.
        </p>
        <a href="{{ route('contacto') }}" class="btn cita-btn">Pide tu cita</a>
    </section>

    {{-- 2. Nuestros Servicios --}}
    <section class="inicio__servicios">
        <h2>Nuestros Servicios</h2>
        <div class="servicios-grid">
            {{-- Psicología Clínica --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/psicologia.jpg" alt="Psicología">
                        <span class="card-title">Psicología Clínica</span>
                    </div>
                    <div class="card-back">
                        <p>Evaluación, diagnóstico y tratamiento de
                            alteraciones en el estado de ánimo, trastorno
                            psicológico y de la conducta.</p>
                    </div>
                </div>
            </div>
            {{-- Terapia Asistida con Animales --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/taa.jpg" alt="Terapia Asistida con Animales">
                        <span class="card-title">Terapia Asistida con Animales</span>
                    </div>
                    <div class="card-back">
                        <p>Intervención dirigida por un profesional de la
                            salud y asistida por un animal cualificado
                            para favorecer los objetivos terapéuticos.</p>
                    </div>
                </div>
            </div>
            {{-- Terapia Ocupacional --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/to.jpg" alt="Terapia Ocupacional">
                        <span class="card-title">Terapia Ocupacional</span>
                    </div>
                    <div class="card-back">
                        <p>
                            Evaluación y tratamiento en la autonomía y funcionalidad diaria.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Logopedia --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/logopedia.jpg" alt="Logopedia">
                        <span class="card-title">Logopedia</span>
                    </div>
                    <div class="card-back">
                        <p>
                            Evaluación, diagnóstico y tratamiento en problemas del lenguaje, el habla, la voz, audición
                            y deglución.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Neurorrehabilitacion --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/neurorehabilitacion.jpg" alt="Neurorrehabilitacion">
                        <span class="card-title">Neurorrehabilitación</span>
                    </div>
                    <div class="card-back">
                        <p>
                            Mantenimiento, compensación y/o recuperación de alteraciones derivadas de trastornos del
                            neurodesarrollo, daño cerebral y enfermedades neurodegenerativas. En los campos de
                            neuropsicología, terapia ocupacional nurológica y neurologopedia.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Apoyo a la educación psicopedagogica --}}
            <div class="card-flip">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="fondo-capa"></div>
                        <img src="imagenes/servicios/ae.jpg" alt="Apoyo educación">
                        <span class="card-title">Apoyo a la educación psicopedagógica
                        </span>
                    </div>
                    <div class="card-back">
                        <p>
                            Intervención enfocada a trabajar dificultades escolares relacionadas con el aprendizaje en
                            terapia ocupacional y en psicopedagogía
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Sobre nosotros --}}
    <section class="inicio__sobre">
        <h2>Sobre Nosotros</h2>
        <div class="sobre-list">
            <div class="sobre-item">
                <img src="imagenes/iconos/cora.png" alt="Cora">
                <div class="sobre-desc">
                    <h3>Visión</h3>
                    <p>Nuestro objetivo es ofrecer a la entidad interesada un recurso
                        terapéutico adaptado a las necesidades del centro y de los
                        participantes, a fin de ayudar en la mejora del estado psicoemocional,
                        cognitivo, físico, sensorial y social de estos.</p>
                </div>
            </div>
            <div class="sobre-item">
                <img src="imagenes/iconos/mente.png" alt="Mente">
                <div class="sobre-desc">
                    <h3>Misión</h3>
                    <p>Nuestra misión es ofrecer un modelo de intervención basado en
                        complementar los conocimientos de la psicología y la terapia
                        ocupacional, con los beneficios de la terapia asistida con
                        animales, favoreciendo tanto el estado general de bienestar de
                        los participantes, como la motivación, adherencia al tratamiento yalianza terapéutica.</p>
                </div>
            </div>

            <div class="sobre-item">
                <img src="imagenes/iconos/ancla.png" alt="Ancla">
                <div class="sobre-desc">
                    <h3>Valores</h3>
                    <p>Nos gusta la cercanía, transmitir sensación de lugar seguro, el
                        trato entre iguales, la atención continua en cada etapa del
                        proceso y hacer sentir a cada persona la valía que merecen.
                        Además, como amantes de los animales y de los beneficios que
                        ellos nos ofrecen, somos una marca petfriendly.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. Equipo --}}
    <section class="inicio__equipo">
        <h2>Nuestro Equipo</h2>
        <div class="two-tone-container">
            <div class="equipo-grid">
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/lorena.jpg" alt="Lorena Sánchez Martínez">
                    </div>
                    <h3>Lorena Sánchez Martínez</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/minerva.jpg" alt="Minerva Linares Martín-Calpena">
                    </div>
                    <h3>Minerva Linares Martín-Calpena</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/raquel.jpg" alt="Raquel Cristo">
                    </div>
                    <h3>Raquel Cristo</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/kala.jpg" alt="Kala">
                    </div>
                    <h3>Kala</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/clara.jpg" alt="Clara San Nicolás">
                    </div>
                    <h3>Clara San Nicolás</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/elena.jpg" alt="Elena Cuerda Navarro">
                    </div>
                    <h3>Elena Cuerda Navarro</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/inma.jpg" alt="Inma Fulleda García">
                    </div>
                    <h3>Inma Fulleda García</h3>
                </div>
                <div class="equipo-card">
                    <div class="avatar-wrapper">
                        <div class="bg-circle"></div>
                        <img class="avatar" src="imagenes/equipo/noemi.jpg" alt="Noemi Martínez">
                    </div>
                    <h3>Noemi Martínez</h3>
                </div>

            </div>
        </div>
        <div class="equipo-enlace">
            <a href="{{ route('equipo') }}">¿Quieres conocernos un poco más?</a>
        </div>
    </section>

    {{-- 5. Colaboraciones --}}
    <section class="inicio__colaboraciones">
        <h2>Colaboraciones</h2>
        <div class="colab-slider">
            @foreach(['ceu.jpg','domopersonal.jpg','helike.jpg', 'mentesdivergentes.jpg', 'umh.jpg'] as $logo)
            <div class="colab-item">
                <img src="imagenes/colaboradores/<?= $logo ?>" alt="Colaboradores">
            </div>
            @endforeach
            @foreach(['ceu.jpg','domopersonal.jpg','helike.jpg', 'mentesdivergentes.jpg', 'umh.jpg'] as $logo)
            <div class="colab-item">
                <img src="imagenes/colaboradores/<?= $logo ?>" alt="Colaboradores">
            </div>
            @endforeach
        </div>
    </section>

    {{-- 6. Opiniones --}}
    <section class="inicio__opiniones">
        <h2>Opiniones</h2>
        <div class="opiniones-container">
            <div class="opiniones-sede">
                <h3>Almoradí</h3>
                <div class="opiniones-grid">
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Pilar Moya Liron</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>100% recomendado
                            Son muy profesionales y, sobretodo, muy cercanas tanto con el paciente como con las
                            familias, trabajando en conjunto
                            para conseguir los mejores resultados.
                            En nuestro caso estamos muy contentos y agradecidos de poder contar con ellas.</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Agustina Miranda Esteban</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Un espacio súper multidisciplinar para los niños, un establecimiento moderno y con toques a
                            mar que da mucha calma.
                            Recomiendo esta clínica 100%
                            Todo el personal es muy profesional y súper reciclado alas novedades de hoy en día.</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>IanRico13</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>100 %Recomendable muy profesionales y atentas con el trato,para mí el centro 1° en Almoradí y
                            alrededores un 10 como
                            terapeutas y como personas</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Diego Linares Saez</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Gran profesional, simpática, amable, diligente !Que suerte tenerla en la Vega Baja!!!!</p>
                    </div>
                </div>

            </div>
            <div class="opiniones-sede">
                <h3>Elche</h3>
                <div class="opiniones-grid">
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Laura Vives Mas</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Trato de 10.
                            Recomendadisimo ✌️👍
                            Lorena ha tratado conmigo espectacularmente, me ha ayudado y dado pautas para solucionar los
                            problemas.
                            ¡La salud mental también es importante!</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Encarni García</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Desde que comencé mis sesiones hace seis meses, he experimentado una transformación
                            increíble. Llegué en un momento muy
                            difícil de mi vida, pero gracias a su apoyo y profesionalismo, he recuperado la fuerza y las
                            ganas de seguir adelante.
                            Muy recomendada.</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Estela Piñol</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Lorena es una profesional de 10. Me ha ayudado muchísimo y nunca había encontrado ninguna
                            psicóloga que entendiera tan
                            bien mi caso y me diera técnicas tan adaptadas a mí y ya llevo muchos años en tratamiento
                            psicológico. Lorena me ha
                            aportado una nueva perspectiva y es un lujo tenerla como psicóloga. ¡Súper recomendada!</p>
                    </div>
                    <div class="opinion-card">
                        <div class="opinion-card-cabecera">
                            <div class="col-izquierda">
                                <h4>Nora Duca</h4>
                                <div class="stars">★★★★★</div>
                            </div>
                            <div class="col-derecha">
                                <img src="imagenes/google-logo.png" alt="Google">
                            </div>
                        </div>
                        <p>Sin duda Lorena me ha cambiado la vida. Llevo años acudiendo a ella y no pudo ser una
                            decisión mejor.
                            Te trata desde el amor, busca tu comodidad y tu seguridad. No te hace sentir como un simple
                            paciente, si no que conecta
                            contigo y es imposible no corresponderlo.
                            Es tierna, amable y además de ser muy inteligente y estar capacitada de sobra con sus
                            amplios conocimientos y
                            experiencia, me parece una estupenda persona.
                            Siempre agradecida por haberla encontrado❤️</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="opiniones-container">
            <div>
                <center><img src="imagenes/opinion_almoradi.png" class="qr" alt="QR"></center>
            </div>
            <div>
                <center><img src="imagenes/opinion_elche.png" class="qr" alt="QR"></center>
            </div>
        </div>
        <h3>Ahora es tu momento, deja tu opinión</h3>
    </section>

    {{-- 7. Dónde Estamos --}}
    <section class="inicio__donde">
        <h2>Dónde Estamos</h2>
        <div class="sedes">
            <div class="sede">
                <h3>Almoradí</h3>
                <p>Calle Mayor, 1, 03160 Almoradí, Alicante</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1263.210987654321!2d-0.7921032!3d38.1089439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63a5afbdc62021%3A0x73fb9d97bfd4e877!2sTerapia%20ocupacional%20y%20Psicolog%C3%ADa%20en%20Almorad%C3%AD.%20CorayMente.%20Espacio%20terap%C3%A9utico!5e0!3m2!1ses!2ses!4v1690000000001!5m2!1ses!2ses"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="sede">
                <h3>Elche</h3>
                <p>Calle Antonio Mora Ferrández, 16, 03202 Elche, Alicante</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12968.123456789!2d-0.6857894!3d38.2714077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63b70ad8c70e89%3A0xad22f9f387197b0d!2sCorayMente!5e0!3m2!1ses!2ses!4v1690000000000!5m2!1ses!2ses"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</div>
@endsection