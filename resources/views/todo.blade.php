<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todos</title>
</head>
<body>
	<x-layout>
		@foreach ($todos as $todo)
			<div>
				<h1>{{$todo->title}}</h1>
			</div>
		@endforeach
	</x-layout>
</body>
</html>