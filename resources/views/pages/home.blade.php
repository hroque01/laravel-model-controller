@extends('layouts.main-layout')

@section('main')
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
                <li>{{ $movie -> title}}</li>
            @endforeach
    </ul>
@endsection