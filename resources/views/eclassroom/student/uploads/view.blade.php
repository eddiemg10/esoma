@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
@endsection

@foreach{$data as $data}
{{$data->name}}
{{$data->description}}
@endforeach
<embed src="public/assets/{{$data->doc}}"></embed>
@endsection