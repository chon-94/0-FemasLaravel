@extends('layouts.app')

@section('content')

    <!-- Hero Section (Portada) -->
    <section class="h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white">
        <div class="text-center px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 text-gray-900">
                Hola, soy <span class="text-blue-600">Tu Nombre</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Desarrollador Web Full Stack especializado en crear experiencias digitales únicas.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#proyectos" class="px-6 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition shadow-lg">
                    Ver Proyectos
                </a>
                <a href="#contacto" class="px-6 py-3 border border-gray-300 rounded-full font-semibold hover:bg-gray-100 transition">
                    Contáctame
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Proyectos -->
    <section id="proyectos" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Mis Proyectos</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100">
                        <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center text-gray-400">
                            <!-- Aquí iría una imagen real -->
                            Imagen Proyecto
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $project['desc'] }}</p>
                        <a href="{{ $project['link'] }}" class="text-blue-600 font-semibold hover:underline">Ver más &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">¿Trabajamos juntos?</h2>
            <p class="text-gray-400 mb-8">Estoy disponible para nuevos proyectos. Envíame un correo y hablemos.</p>
            <a href="mailto:tuemail@ejemplo.com" class="inline-block px-8 py-4 bg-blue-600 rounded-full font-bold text-lg hover:bg-blue-500 transition">
                Enviar Correo
            </a>
        </div>
    </section>

@endsection