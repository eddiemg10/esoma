<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="/css/app.css" rel="stylesheet">
<!--     <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
<!--     <script src="https://kit.fontawesome.com/6d51c26809.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/347b9e054d.js" crossorigin="anonymous"></script> -->




	<title></title>
</head>
<body class="bg-cyan">
	@foreach($posts as $post)
		<pre>
		{{$post}}
	</pre>

		<a href="{{ route('blog.posts.show', $post->id)}}">
			<div class="bg-blue-100 rounded">
				<div class="bg-blue-100">
				<img src="">
				</div>
				<div>
					<h5>{{$post->title}}</h5>
					<span>{{ date('M j, Y', strtotime($post->created_at)) }}</span>
					
					<p>
						{{substr(strip_tags($post->content), 0, 250) }}{{ strlen(strip_tags($post->content)) > 250 ? '...' : "" }}
					</p>
				</div>

			</div>
		</a>
	@endforeach	
</body>
</html>