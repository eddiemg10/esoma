<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>
		<h1>{{ $post->title }}</h1>
		<div>
			<img src="{{ asset( $post->image) }}" alt="">
		</div>
		<div>
			{!! $post->content !!}
		</div>
	</div>

	<a href="{{ route('blog.posts.edit', $post->id) }}"> Edit</a>

</body>
</html>