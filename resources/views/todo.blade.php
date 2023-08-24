<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>

<body>
    @foreach ($todos as $todo)
        <article>
            <div>
                <h1>{{ $todo }}</h1>
            </div>
        </article>
    @endforeach
</body>

</html>
