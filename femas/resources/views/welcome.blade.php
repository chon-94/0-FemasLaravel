# Crea el archivo
cat > resources/views/welcome.blade.php << 'EOF'
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Femas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <h1 class="text-4xl font-bold">Femas</h1>
    </div>
</body>
</html>
