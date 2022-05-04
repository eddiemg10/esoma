{{-- TODO: Admin Dashboard and footer --}}


{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')
<x-side-bar />
 
@yield('content')

<x-footer />

@endsection
