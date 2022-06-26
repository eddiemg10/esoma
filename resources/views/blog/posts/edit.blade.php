<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<title>Edit Post</title>
</head>
<body class="">

	<div class="w-full max-w-xs">
	<form method="POST" action="{{ route('blog.posts.update', $post->id) }}" class="flex flex-col bg-white shadow-md rounded px-8 pt-6 pb-8"  enctype="multipart/form-data">
		@csrf
		@method('PUT')

		<legend class="mt-8 justify-self-center mb-10 font-bold text-2xl text-center">Edit Post</legend>

		<div class="mb-6 w-1/2">
			<input type="text" class ="w-[50%] border-solid border-b-4 border-black rounded p-4 w-1/2" name="title" placeholder="Add Title" id="title" value="{{ $post->title }}"></div>

		<div class="mb-6">
			<input class="p-4 w-[50%] rounded border-b-4 border-solid border-black " type="text" name="slug" placeholder="Add Slug" id="slug" value="{{ $post->slug }}">
		</div>

		<div class="mb-6">
			<textarea name="content" id="content" cols="10" rows="10" >
				{{ $post->content }}
			</textarea>
		</div>

		<div class="flex flex-col mb-6 w-36">
			<label for="category">Category</label>
			<select class ="w-[50%] p-2 rounded" name="category" id="category">
				@foreach($categories as $category)

				@if($post->category == $category->id)

				<option value="{{ $category->id }}" selected>{{ $category->category}} </option>	

				@else

				<option value="{{ $category->id }}">{{ $category->category}} </option>	

				@endif
				@endforeach
			</select>
		</div>

		<div class="mb-6 flex flex-col">
			<label for="tags[]">Tags</label>
			<select class="js-example-basic-multiple w-[50%]" name="tags[]" id="tags" multiple="multiple">
				@foreach($tags as $tag)

					@if(in_array($tag->id,$postTags))
						<option value="{{ $tag->id }}" selected>{{ $tag->tag }}</option>

					@else
					<option value="{{ $tag->id }}">{{ $tag->tag }}</option>

					@endif
				@endforeach
			</select>
		</div>


		<div class="mb-6">
			<input type="file" name="image" class="file:border file:border-solid" id="image">
		</div>

		<div class="mb-6 flex space-x-2 ">
			<input class= "inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="submit" name="submit" id="submit" value="Edit Post">
		</div>

	</form>

	</div>

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