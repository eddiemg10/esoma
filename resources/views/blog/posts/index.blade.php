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

<body class="">

	<div class="w-full flex p-40 bg-slate-50">



		<div class="w-[80%] flex flex-col gap-10">

			<div class="flex gap-5 mb-20">
				<span class="w-[6px] rounded h-[40px] bg-slate-300"></span>
				<h1 class="text-blue-900 text-4xl font-bold">Your Blog Posts</h1>
			</div>

			@foreach($posts as $post)

			<a href="{{ route('blog.posts.show', $post->id)}}" class="hover:-translate-y-1 transition">
				<div class="bg-white shadow-md rounded-md flex gap-x-10 hover:shadow-lg transition">
					<div class="w-[35%] p-4">
						<img src="{{asset('images/blog/'.$post->image)}}"
							class="w-full rounded-md h-[300px] object-cover">
					</div>

					<div class="w-[65%] flex flex-col items-start pr-10 py-5 gap-y-5">
						<div class="tags">
							{{-- <span class="text-sm py-1 px-4 bg-sky-100 text-zinc-600 rounded-full">Tag</span> --}}
						</div>

						<h2 class="text-2xl font-bold font-blue-700">{{$post->title}}</h2>


						<p class="text-zinc-600">
							{{substr(strip_tags($post->content), 0, 250) }}{{ strlen(strip_tags($post->content)) > 250 ?
							'...' :
							"" }}
						</p>

						<div>
							<div class="text-zinc-400">{{ date('M j, Y', strtotime($post->created_at)) }}</div>

						</div>

					</div>

				</div>
			</a>
			@endforeach
		</div>

		<div class="w-[20%]">

		</div>

	</div>
</body>

</html>