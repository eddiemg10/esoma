<!DOCTYPE html>
<html>

<x-navbar focus="blog" />


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

	<title>Blogs</title>
</head>

<body>

	<!-- 	<span>Tags: </span>
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
	<span>{{ $author->firstName }} {{ $author->secondName }}</span> -->

	<div class="flex flex-col p-20">
		<h1 class="text-4xl text-blue-900 font-bold mb-10 text-center">{{ $post->title }}</h1>

		<div class="flex w-full justify-center">
			<img class=" w-[500px] object-cover rounded-md justify-center ml-30"
				src="{{asset('images/blog/'.$post->image)}}" alt="">
		</div>
		<br><br>

		<div class="p-20 px-40 rounded-md border-2 border-black-100 blog-container flex flex-col  items-center text-lg">
			{!! $post->content !!}
		</div>
	</div>


</body>

</html>