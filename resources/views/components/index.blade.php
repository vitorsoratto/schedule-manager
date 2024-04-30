<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Horários</title>

    @livewireStyles

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <ul class="flex items-center justify-center">
                <li><a href="{{ route('index') }}">Inicio</a></li>
            </ul>
        </div>
    </nav>

    {{ $slot }}

    @livewireScripts
</body>

</html>
