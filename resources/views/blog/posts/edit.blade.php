<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

	<title></title>
</head>
<body>

	<form method="POST" action="" class="flex flex-col" enctype="multipart/form-data">
		@csrf
		@foreach($categories as $category)

		{{ $category->category}}

		@endforeach
		
		@foreach($tags as $tag)

		{{ $tag->tag}}

		@endforeach

		<div>
			<input type="text" name="title" placeholder="Add Title" id="title" value="{{ $post->title }}"></div>

		<div>
			<input type="text" name="slug" placeholder="Add Slug" id="slug" value="{{ $post->slug }}">
		</div>

		<div>
			<textarea name="content" id="content" cols="10" rows="10" value="{{ $post->content }}"></textarea>
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

    CKEDITOR.instances['#content'].setData({{ $post->content }});
</script>

</body>
</html>