<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@@yield('tittle')</title>
                <script src="https://cdn.tailwindcss.com"></script>
    
      <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }
    </style>

</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('posts.create') }}">Crear Post</a></li>
        </ul>
    </nav>

   @yield('content')
</body>
</html>