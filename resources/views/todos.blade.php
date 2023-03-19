
<body>
		@foreach ($todos as $todo)
			<article>
				<div>
					<a href="/items/{{$todo->items->id}}">
						<h1>{{$todo->title}}</h1>
					</a>
				</div>
			</article>
		@endforeach
</body>
