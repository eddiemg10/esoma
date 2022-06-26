<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

	<style>

		strong{
			width: 100vw;
		}
		
		img{
			width: 500px;
			height: 500px;
			border-radius: 10px;		
		}

		p{
			padding: 10px 0px;
		}
	</style>

	<title>Blogs</title>
</head>

<body>
	<div class="flex flex-col p-20">
		<h1 class="text-4xl text-blue-900 font-bold mb-10 text-center">{{ $post->title }}</h1>
	
		<div class="flex w-full justify-center">
			<img class=" w-[500px] object-cover rounded-md justify-center ml-30" src="{{asset('images/blog/'.$post->image)}}" alt="">
		</div>
		<br><br>

		<div class="p-20 px-40 rounded-md border-2 border-black-100 blog-container flex flex-col  items-center text-lg">
			{!! $post->content !!}
		</div>
	</div>

	<a href="{{ route('blog.posts.edit', $post->id) }}"> Edit</a>

</body>

</html>