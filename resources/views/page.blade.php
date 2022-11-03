@extends('layouts.app')

@section('title')
    Laravel Model Controller
@endsection

@section('body')
    <h1>MOVIES</h1>

    <div class="card-container">
        @foreach ($movies as $movie)
            <div>
                @include('partials._movie-card')
            </div>
        @endforeach
    </div>
@endsection
