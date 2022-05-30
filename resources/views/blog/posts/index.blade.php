<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@foreach($posts as $post)
		<pre>
		{{$post}}
	</pre>

		<a href="{{ route('blog.posts.show', $post->id)}}">
			<div>
				<div>
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