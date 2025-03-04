@extends('layouts.guest')

@section('content')
    <div class="container z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded-lg shadow-lg w-fit">
        <h1 class="text-lg">Login</h1>
        <a class="" href="{{ route('github.login') }}">Github Login</a>
    </div>
@endsection
