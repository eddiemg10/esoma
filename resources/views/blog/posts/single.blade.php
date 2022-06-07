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


	<div class="flex">
		<div class="flex flex-col p-20 w-[80%]">
			<h1 class="text-5xl text-blue-900 font-bold mb-20 text-center">{{ $post->title }}</h1>
			<div>
				<img class="px-[25%]" src="{{asset('images/blog/'.$post->image)}}" alt="">


			</div>
			<div class="p-20 px-40">
				{!! $post->content !!}
			</div>

				

		</div>

			<div class="w-[20%] flex flex-col items-center  bg-slate-100">
				
				<div class="flex flex-col items-center gap-4 w-full pt-[5%]">
					<a
							class="font-semibold text-zinc-600 py-2 w-[80%] bg-white rounded-md pl-8 hover:shadow-lg transition"
						href ="{{ route('blog.posts.edit', $post->id) }}"	>Edit Post</a>

				</div>
			</div>
	</div>




</body>

</html>

