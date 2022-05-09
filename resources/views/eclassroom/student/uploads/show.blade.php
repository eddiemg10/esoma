@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
@endsection

@foreach($data as $data)
<div style ="padding:8px; width: 900px; margin:0; auto:0;" class="rounded-full bg-blue-400">

<a href="{{url('/assets/',$data['doc'])}}">{{$data->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->description}}&nbsp;&nbsp;&nbsp;&nbsp;{{$data->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a class="fa-solid fa-download" href="#"></a>
</div>

@endforeach

@endsection
