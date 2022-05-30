<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<title></title>
</head>
<body>

	<form method="POST" action="{{route('blog.posts.store')}}" class="flex flex-col" enctype="multipart/form-data">
		@csrf
		@foreach($categories as $category)

		{{ $category->category}}

		@endforeach
		
		@foreach($tags as $tag)

		{{ $tag->tag}}

		@endforeach

		<div>
			<input type="text" name="title" placeholder="Add Title" id="title" value="{{ old('title') }}"></div>

		<div>
			<input type="text" name="slug" placeholder="Add Slug" id="slug" value="{{ old('slug') }}">
		</div>

		<div>
			<textarea name="content" id="content" cols="10" rows="10" value="{{ old('content') }}"></textarea>
		</div>

		<div class="flex flex-col">
			<label for="category">Category</label>
			<select name="category" id="category">
				@foreach($categories as $category)

				<option value="{{ $category->id }}">{{ $category->category}} </option>	

				@endforeach
			</select>
		</div>

		<div>
			<label for="tags[]">Tags</label>
			<select class="js-example-basic-multiple" name="tags[]" id="tags" multiple="multiple">
				@foreach($tags as $tag)
				<option value="{{ $tag->id }}">{{ $tag->tag}}</option>

				@endforeach
			</select>
		</div>

		<div>
			<input type="file" name="image" class="file:border file:border-solid" id="image">
		</div>

		<div>
			<input type="submit" name="submit" id="submit">
		</div>

	</form>

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
    $('js-example-basic-multiple').select2();
		});
</script>

</body>
</html>