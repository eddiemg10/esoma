<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/6d51c26809.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

	<style>
		strong {
			width: 100vw;
		}

		img {
			width: 500px;
			height: 500px;
			border-radius: 10px;
		}

		p {
			padding: 10px 0px;
		}
	</style>

	<title>Blogs</title>
</head>

<body>

	<div class="w-100vw flex">
		<div class="w-[20%] bg-sky-900 text-white">
			<ul class="flex flex-col w-full items-center">
				<div class="flex flex-col items-center py-4">
					<h1 class="text-4xl font-bold p-2">E-s<a class="text-yellow-500">o</a>ma</h1>
					<h3 class="text-xl font-normal">ADMIN PANEL</h3>
				</div>
				<div class="h-[2px] w-[90%] bg-white"></div>
				<div class="flex flex-col gap-3 rounded-md p-3 pb-[1000px]">
					<a href="{{url('/admin/elib')}}"
						class="w-[250px] rounded-md px-4 py-3 hover:bg-cyan-800 hover:shadow-inner"><i
							class="fa-solid fa-book mr-4"></i>E-Library</a>
					<a href="{{url('/blog/posts')}}" class="w-[250px] rounded-md px-4 py-3 bg-cyan-600"><i
							class="fa-solid fa-blog mr-4"></i>Esoma
						Blog</a>
				</div>
			</ul>
		</div>

		<div class="w-[80%] flex grow-0 bg-slate-50">
			@if (session('status'))
			<div class="bg-green-100 alert alert-success">
				{{ session('status') }}
			</div>
			@endif


			<div class="flex flex-col p-20 w-[80%]">
				<h1 class="text-4xl text-blue-900 font-bold mb-10 text-center">{{ $post->title }}</h1>

				<div class="flex w-full justify-center">
					<img class=" w-[500px] object-cover rounded-md justify-center ml-30"
						src="{{asset('images/blog/'.$post->image)}}" alt="">
				</div>
				<br><br>

				<div
					class="p-20 px-40 rounded-md border-2 border-black-100 blog-container flex flex-col  items-center text-lg">
					{!! $post->content !!}
				</div>



			</div>


			<div class="w-[20%] flex flex-col items-center mt-20 gap-4 bg-slate-100">

				<div class="flex flex-col items-center gap-4 w-full pt-[5%]">
					<a class="font-semibold text-zinc-600 py-2 w-[80%] bg-white rounded-md pl-8 hover:shadow-lg transition"
						href="{{ route('blog.posts.edit', $post->id) }}">Edit Post</a>

				</div>
				<div class="font-semibold text-zinc-600 pt-10 py-2 w-[80%] bg-white rounded-md pl-8">


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
					<span>Last Updated:</span>
					<span>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</span>

					<br>
					<span>By:</span>
					<span>{{ $author->firstName }} {{ $author->secondName }}</span>
				</div>
			</div>
		</div>
	</div>


	</div>





</body>

</html>