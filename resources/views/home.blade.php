@extends('layouts.test')

@section('css')
<style>
    #portada {
        position: relative;
        text-align: center;
        width: 100%;
    }

    .overlay {
        position: absolute;
        top: 55px;
        left: 0;
        width: 100%;
        height: 86%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        z-index: 8;
    }

    img {
        width: 100%;
        margin: 0;
        padding: 0;
       
    }

    .card-content {
        position: relative; /* Para que el contenido de la tarjeta esté posicionado relativamente */
        z-index: 1; /* Para que el contenido esté por encima del fondo oscurecido */
    }
</style>
@endsection

@section('content')
<div id="portada" class="w-full">
    <img src="/aplicaciones.jpg" alt="portada1">
    <div class="overlay">
        <h1 class="text-5xl font-bold">Oposiciones a Técnico Auxiliar de Informática</h1>
        <p class="text-xl mt-5">Personaliza tu preparación. Podrás hacer test por temas y materias sin límites. ¡Haz
            los test que quieras, cuando quieras!</p>
    </div>
</div>
<div class="grid grid-cols-3 gap-12 w-10/12  mx-auto mt-5">
    <x-card>
        <img src="/portada1.jpg" class="rounded-lg" alt="portada2">
        <div class="card-content">
            <p class="m-4 text-lg "><b>Fácil y cómodo de seguir</b></p>
            Accesible desde cualquier dispositivo y con una interfaz intuitiva. ¡Regístrate ahora y alcanza el éxito en tu examen de oposición!
        </div>
    </x-card>
    <x-card>
        <img src="/portada2.jpg" class="rounded-lg" alt="portada2">
        <div class="card-content">
            <p class="text-lg m-4"><b>Temario actualizado</b></p>
            Preguntas actualizadas al temario de la última convocatoria de 2022 y anteriores en nuestra plataforma en línea. ¡Regístrate ahora y obtén una preparación efectiva!
        </div>
    </x-card>
    <x-card>
        <img src="/portada3.jpeg" class="rounded-lg" alt="portada3">
        <div class="card-content">
            <p class="text-lg m-4"><b>Más de 1000 preguntas</b></p>
            Regístrate ahora para acceder a más de 1000 preguntas diseñadas por expertos. ¡Obtén una preparación efectiva y alcanza el éxito en tu examen de oposición!
        </div>
    </x-card>
</div>
<div class="w-10/12 mx-auto p-4 text-center">
    <x-card>
        <p class="m-5 text-xl"><b>Contenido del temario</b></p>
        El temario se dividirá en 36 temas estructurados en cuatro bloques. El primero de ellos se centra en materias legislativas y jurídicas, y los tres restantes versan sobre contenido informático.
    </x-card>
</div>
@endsection
