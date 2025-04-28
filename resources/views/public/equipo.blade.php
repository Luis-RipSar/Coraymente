@extends('layouts.public')

@section('content')
<div class="equipo-container">
    <h1 class="equipo-title">Nuestro Equipo</h1>

    <div class="equipo-grid">
        {{-- -------- Profesionales: copia uno de estos bloques por cada miembro -------- --}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/clara.jpg') }}" alt="Laura Cuesta" class="profesional-avatar mb-4">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Laura Lucrecia Cuesta Pando</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: 39/0306</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Laura Lucrecia con amplia experiencia en terapia infantil y adulta.
                </p>

                {{-- Redes sociales --}}
                <div class="profesional-social mb-4">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>

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
                            <li>Doctorado en Comunicación Terapéutica (UA)</li>
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

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'colaboraciones' ? null : 'colaboraciones'">
                            Colaboraciones
                            <span x-show="openSection !== 'colaboraciones'">+</span>
                            <span x-show="openSection === 'colaboraciones'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'colaboraciones'" x-collapse>
                            <li>Ponente en Congreso Nacional de Logopedia 2022</li>
                            <li>Colaboración con ALFASAAC desde 2020</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-- ------------------ Fin de un card ------------------ --}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/clara.jpg') }}" alt="Laura Cuesta" class="profesional-avatar mb-4">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Laura Lucrecia Cuesta Pando</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: 39/0306</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Laura Lucrecia con amplia experiencia en terapia infantil y adulta.
                </p>

                {{-- Redes sociales --}}
                <div class="profesional-social mb-4">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>

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
                            <li>Doctorado en Comunicación Terapéutica (UA)</li>
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

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'colaboraciones' ? null : 'colaboraciones'">
                            Colaboraciones
                            <span x-show="openSection !== 'colaboraciones'">+</span>
                            <span x-show="openSection === 'colaboraciones'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'colaboraciones'" x-collapse>
                            <li>Ponente en Congreso Nacional de Logopedia 2022</li>
                            <li>Colaboración con ALFASAAC desde 2020</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-- ------------------ Fin de un card ------------------ --}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/clara.jpg') }}" alt="Laura Cuesta" class="profesional-avatar mb-4">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Laura Lucrecia Cuesta Pando</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: 39/0306</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Laura Lucrecia con amplia experiencia en terapia infantil y adulta.
                </p>

                {{-- Redes sociales --}}
                <div class="profesional-social mb-4">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>

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
                            <li>Doctorado en Comunicación Terapéutica (UA)</li>
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

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'colaboraciones' ? null : 'colaboraciones'">
                            Colaboraciones
                            <span x-show="openSection !== 'colaboraciones'">+</span>
                            <span x-show="openSection === 'colaboraciones'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'colaboraciones'" x-collapse>
                            <li>Ponente en Congreso Nacional de Logopedia 2022</li>
                            <li>Colaboración con ALFASAAC desde 2020</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-- ------------------ Fin de un card ------------------ --}}
        <div class="profesional-card" x-data="{ openSection: null }">
            {{-- Foto arriba --}}
            <img src="{{ asset('imagenes/equipo/clara.jpg') }}" alt="Laura Cuesta" class="profesional-avatar mb-4">

            <div class="profesional-content">
                {{-- Cabecera --}}
                {{-- Nombre y datos básicos --}}
                <h2 class="profesional-nombre">Laura Lucrecia Cuesta Pando</h2>
                <p class="profesional-pro">Logopeda</p>
                <span class="profesional-col">Nº COL.: 39/0306</span>

                {{-- Descripción breve --}}
                <p class="profesional-desc mt-2 mb-4">
                    Soy Laura Lucrecia con amplia experiencia en terapia infantil y adulta.
                </p>

                {{-- Redes sociales --}}
                <div class="profesional-social mb-4">
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

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
                            <li>Doctorado en Comunicación Terapéutica (UA)</li>
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

                    <div class="section-group">
                        <button class="section-toggle"
                            @click="openSection = openSection === 'colaboraciones' ? null : 'colaboraciones'">
                            Colaboraciones
                            <span x-show="openSection !== 'colaboraciones'">+</span>
                            <span x-show="openSection === 'colaboraciones'">–</span>
                        </button>
                        <ul class="section-list" x-show="openSection === 'colaboraciones'" x-collapse>
                            <li>Ponente en Congreso Nacional de Logopedia 2022</li>
                            <li>Colaboración con ALFASAAC desde 2020</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        {{-- ------------------ Fin de un card ------------------ --}}
    </div>
</div>
@endsection