@extends('layouts.standard')

@section('title', 'Comics')

@section('mainContent')

    <main>

        <div class="background-main">

        </div>

        <div class="container">
        
        <button class="button button-jumbo">Current Series</button>

        <ul class="card-wrapper">

            @foreach ($comics as $index => $comic)
            
                <a href="{{ route('comics.show', [ 'id' => $index ]) }}" class="card-item">
                    <figure>
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </figure>
                    <p>{{ $comic['series'] }}</p>
                </a>

            @endforeach
            
        </ul>

        <button class="button button-end">Load More</button>

        </div>
        
    </main>

@endsection