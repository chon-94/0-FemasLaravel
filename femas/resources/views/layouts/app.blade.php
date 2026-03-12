<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi CV - Portafolio</title>
    <!-- Vite incluye Tailwind automáticamente -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Navegación -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-sm shadow-sm">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                    Mi<span class="text-gray-800">CV</span>
                </a>

                <!-- Menú -->
                <div class="space-x-6 hidden md:flex">
                    <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Inicio</a>
                    <a href="{{ route('home') }}#proyectos" class="hover:text-blue-600 transition">Proyectos</a>
                    <a href="{{ route('home') }}#contacto" class="hover:text-blue-600 transition">Contacto</a>
                    <a href="{{ route('about') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Sobre Mí</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Mi Portafolio. Hecho con Laravel & Tailwind.</p>
        </div>
    </footer>

</body>
</html>