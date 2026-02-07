<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
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

</body>
</html>