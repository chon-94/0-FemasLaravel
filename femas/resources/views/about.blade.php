@extends('layouts.app')

@section('content')

    <section class="py-20 bg-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <!-- Foto -->
                <div class="w-full md:w-1/3">
                    <div class="aspect-square bg-gray-200 rounded-full overflow-hidden border-4 border-blue-100">
                        <!-- Pon tu foto aquí -->
                        <img src="https://via.placeholder.com/400" alt="Mi Foto" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Texto -->
                <div class="w-full md:w-2/3">
                    <h1 class="text-4xl font-bold mb-6">Sobre Mí</h1>
                    <div class="prose text-gray-600 space-y-4">
                        <p>
                            ¡Hola! Soy un desarrollador apasionado por la tecnología. Me especializo en el ecosistema de PHP y JavaScript.
                        </p>
                        <p>
                            Mi enfoque principal es crear aplicaciones web limpias, rápidas y escalables. Cuando no estoy programando, me gusta aprender sobre nuevas tecnologías y contribuir a la comunidad open source.
                        </p>
                        
                        <h3 class="text-xl font-bold text-gray-800 mt-6">Mis Habilidades</h3>
                        <ul class="list-disc list-inside mt-2 grid grid-cols-2 gap-2">
                            <li>Laravel / PHP</li>
                            <li>Tailwind CSS</li>
                            <li>JavaScript / Vue.js</li>
                            <li>MySQL / PostgreSQL</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection