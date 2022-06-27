<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/6d51c26809.js" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<title>Add Post</title>
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

		<div class="w-[80%] flex flex-col  bg-slate-50">
			<div class="w-full">
				<form method="POST" action="{{route('blog.posts.store')}}"
					class="m-8 flex flex-col  bg-white shadow-md rounded px-8 pt-6 pb-8" enctype="multipart/form-data">
					@csrf

					<div class="flex gap-5 mb-20">
						<span class="w-[6px] rounded h-[40px] bg-slate-300"></span>
						<h1 class="text-blue-900 text-4xl font-bold">Add new Blog Post</h1>
					</div>

					<div class="mb-6">
						<input class="border-solid border-b-4 border-black rounded p-4 w-[50%]" type="text" name="title"
							placeholder="Add Title" id="title" value="{{ old('title') }}">
					</div>

					<div class="mb-6 ">
						<input class="p-4 rounded border-b-4 border-solid border-black w-[50%]" type="text" name="slug"
							placeholder="Add Slug" id="slug" value="{{ old('slug') }}">
					</div>

					<div class="mb-6">
						<textarea name="content" id="content">
				{{ old('content') }}
			</textarea>
					</div>

					<div class="flex flex-col mb-6 w-full">
						<label for="category">Category</label>
						<select class="w-[50%] p-2 rounded" name="category" id="category">
							@foreach($categories as $category)

							<option value="{{ $category->id }}">{{ $category->category}} </option>

							@endforeach
						</select>
					</div>

					<div class="flex flex-col mb-6">
						<label for="tags[]">Tags</label>
						<select class="js-example-basic-multiple p-4 w-[50%] border-b-4 border-solid border-black"
							name="tags[]" id="tags" multiple="multiple">
							@foreach($tags as $tag)
							<option value="{{ $tag->id }}">{{ $tag->tag}}</option>

							@endforeach
						</select>
					</div>

					<div class="mb-6">
						<input type="file" name="image" class="file:border file:border-solid p-4 rounded" id="image">
					</div>

					<div class="mb-6 flex space-x-2 ">
						<input
							class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
							type="submit" name="submit" id="submit" value="Add Post">
					</div>

				</form>
			</div>
		</div>

	</div>


	{{-- <div class="w-full max-w-xs"> --}}
		{{-- <form method="POST" action="{{route('blog.posts.store')}}"
			class="m-8 flex flex-col  bg-white shadow-md rounded px-8 pt-6 pb-8" enctype="multipart/form-data">
			@csrf

			<legend class="mt-8 justify-self-center mb-10 font-bold text-2xl">Add Post</legend>

			<div class="mb-6 px-[25%] ">
				<input class="border-solid border-b-4 border-black rounded p-4 w-[50%]" type="text" name="title"
					placeholder="Add Title" id="title" value="{{ old('title') }}">
			</div>

			<div class="mb-6 ">
				<input class="p-4 rounded border-b-4 border-solid border-black w-[50%]" type="text" name="slug"
					placeholder="Add Slug" id="slug" value="{{ old('slug') }}">
			</div>

			<div class="mb-6">
				<textarea name="content" id="content">
				{{ old('content') }}
			</textarea>
			</div>

			<div class="flex flex-col mb-6 w-24">
				<label for="category">Category</label>
				<select class="w-[50%] p-2 rounded" name="category" id="category">
					@foreach($categories as $category)

					<option value="{{ $category->id }}">{{ $category->category}} </option>

					@endforeach
				</select>
			</div>

			<div class="flex flex-col mb-6">
				<label for="tags[]">Tags</label>
				<select class="js-example-basic-multiple p-4 w-[50%] border-b-4 border-solid border-black" name="tags[]"
					id="tags" multiple="multiple">
					@foreach($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->tag}}</option>

					@endforeach
				</select>
			</div>

			<div class="mb-6">
				<input type="file" name="image" class="file:border file:border-solid p-4 rounded" id="image">
			</div>

			<div class="mb-6 flex space-x-2 ">
				<input
					class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
					type="submit" name="submit" id="submit" value="Add Post">
			</div>

		</form> --}}

		{{-- </div> --}}

	<script type="text/javascript">
		ClassicEditor
        .create( document.querySelector( '#content' ) )
           .then( editor => {
                console.log( editor );
                 } )
                .catch( error => {
                    console.error( error );
                } );

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
		});
	</script>

</body>

</html>