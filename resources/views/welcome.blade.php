@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3 text-center">Movies</h1>
        <div class="row row-cols-5">
            
            @foreach ($movies as $movie)
                <div class="col my-3">
                    <div class="card w-100 h-100" style="width: 18rem;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="poster">
                        <div class="card-body">
                            <h3 class="card-title">{{ $movie->title }}</h3>
                            <h5>Original title: {{ $movie->original_title }}</h5>
                            <p>Language: {{ $movie->nationality }}</p>
                            <p>Setting date: {{ $movie->date }}</p>
                            <p>Rating: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
