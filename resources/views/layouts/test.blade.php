<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Título de la aplicación</title>
    @livewireStyles
    
    @yield('css')
    
</head>
<body class="bg-gray-200">
    <!-- Barra de navegación Livewire -->
   
    <div class="bg-gray-50 fixed z-10 w-full shadow-lg flex items-center justify-between">
        <h1 class="text-3xl font-bold italic m-4">Test tai</h1>
        <ul class="flex text-md font-bold justify-end space-x-4 p-4">
            <li>
               opcion 1
            </li>
            <li>
                opcion 1
             </li>
             <li>
                opcion 1
             </li> 
        </ul>
    </div>
    <!-- Contenido de la página -->
    <div>
        @yield('content')
    </div>
<x-footer/>
    @livewireScripts
    <!-- Otros scripts -->
</body>
</html>
