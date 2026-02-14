<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>


    </script>
</head>

<body>
    <h1>Listado de posts</h1>
    <ul>
        <li>Post 1</li>
        <li>Post 2</li>
        <li>Post 3</li>
    </ul>
    <script>
        let posts = @json($posts);
        console.log(posts);
    </script>

    <!-- Directivas de Blade -->

    @if (true)
        <p>Esto se muestra si la condición es verdadera.</p>
    @else
        <p>Esto se muestra si la condición es falsa.</p>
    @endif

    <!-- lo que se espera es que la condicion sea falsa -->
    @unless (false)
        <p>Esto se muestra si la condición es falsa.</p>
    @else
        <p>Esto se muestra si la condición es verdadera.</p>
    @endunless

    <!-- Comprobar si la variable existe -->
    @isset($variable)
        <p>La variable existe.</p>
    @endisset


    <!-- Comprobar si la variable está vacía o es nula -->

    @empty($variables_nula)
        <p>La variable está vacía.</p>
    @endempty


    <!-- Directivas de Enviroment -->

    @env('local')
        <p>Esto se muestra solo en el entorno local.</p>
    @endenv

    @production
        <p>Esto se muestra solo en producción.</p>
    @endproduction

    <!-- Directivas de switch -->

    @switch($posts[2]['id'])
        @case(1)
            <p>El primer post tiene ID 1.</p>
        @break

        @case(2)
            <p>El primer post tiene ID 2.</p>
        @break

        @default
            <p>El primer post tiene un ID diferente.</p>
    @endswitch

    <!-- Directivas de foreach -->
    <ul>
        @foreach ($posts as $post)
            <li @class(['color-red' => $loop->first, 'color-green' => $loop->last])>

                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['content'] }}</p>
                <p>{{ $loop->iteration }}</p>
                <p>{{ $loop->index }}</p>
                <p>Iteraciones restante : {{ $loop->remaining }}</p>

            </li>
        @endforeach
    </ul>

    <!-- Directivas de forelse -->
    @forelse ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['content'] }}</p>

    @empty
        <p>No hay posts disponibles.</p>
    @endforelse

    <!-- Directivas de for -->
    @for ($i = 0; $i < $count; $i++)
        @continue($i % 3 == 0)
        <p>Índice: {{ $i }}</p>
    @endfor

    @includeFirst(
        ['posts.prueba', 'posts.create'],
        ['variable' => 'Valor de la variable pasada a la vista incluida']
    )

    <!-- Componentes de Clases -->
    <div class="container mx-auto py-12">
        <x-alert type="success" class="mb-4">
            <x-slot name="message">
                ¡Este es un mensaje de alerta!
            </x-slot>
            <x-slot name="title">
                ¡Este es un título de alerta!
            </x-slot>
        </x-alert>

        <p class="mt-4">hola mundo</p>
    </div>

    <!-- Componentes Anónimos -->

    <x-container width="7xl">
        <x-alert type="success" class="mb-4">
            <x-slot name="message">
                ¡Este es un mensaje de alerta!
            </x-slot>
            <x-slot name="title">
                ¡Este es un título de alerta!
            </x-slot>
        </x-alert>


        <p class="mt-4">hola mundo</p>
    </x-container>

</body>

</html>
