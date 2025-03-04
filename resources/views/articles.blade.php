
@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
        <h2><a href="#"></a>{{ $post }}</h2>
    @endforeach

@endsection
