<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

	<title>Blogs</title>
</head>

<body>

	<span>Tags: </span>
	@foreach( $post->tags as $tag)

	<span>{{ $tag->tag }} </span>

	@endforeach

	<br>
	<span>Category: </span>
	<span>{{ $category->category }}</span>

	<br>
	<span>Created:</span>
	<span>{{ date('M j, Y', strtotime($post->created_at)) }}</span>

	<br>
	<span>By:</span>
	<span>{{ $author->firstName }} {{ $author->secondName }}</span>


	<div>


		<h1>{{ $post->title }}</h1>
		<div>
			<img src="{{ asset($post->image) }}" alt="">
		</div>
		{{ $post->user }}


		<div class="p-20">
			{!! $post->content !!}
		</div>
	</div>



</body>

</html>