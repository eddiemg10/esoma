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
		<h1 class="text-5xl text-blue-900 font-bold mb-20 text-center">{{ $post->title }}</h1>
		<div>
			<img class="px-[25%]" src="{{asset('images/blog/'.$post->image)}}" alt="">
						<div class="tags flex gap-x-3 px-[25%] mt-[5%]">

							@foreach( $post->tags as $tag)

							<span class="text-sm py-1 px-4 bg-sky-100 text-zinc-600 rounded-full">{{ $tag->tag }}</span>

							@endforeach

						</div>



		</div>
		<div class="p-20 px-40">
			{!! $post->content !!}
		</div>
</div>


</body>

</html>