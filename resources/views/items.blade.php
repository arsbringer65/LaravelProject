<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Items</title>
</head>
<body>
	@foreach($items as $item)
	<article>
			<div>
				<h1>{{$item->todo->name}}</h1>
			</div>
	</article>
	@endforeach
</body>	
</html>