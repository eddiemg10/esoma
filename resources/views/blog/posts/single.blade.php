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
@if (session('status'))
    <div class="bg-green-100 alert alert-success">
        {{ session('status') }}
    </div>
@endif


	<div class="flex flex-col p-20">
		<h1 class="text-5xl text-blue-900 font-bold mb-20 text-center">{{ $post->title }}</h1>
		<div>
			<img class="px-[25%]" src="{{asset('images/blog/'.$post->image)}}" alt="">


		</div>
		<div class="p-20 px-40">
			{!! $post->content !!}
		</div>

			<a class="inline-block px-6 py-2.5 w-24 mt-6 mb-6 mx-[25%] bg-sky-500 text-white font-medium" href="{{ route('blog.posts.edit', $post->id) }}"> Edit</a>

	</div>



</body>

</html>

