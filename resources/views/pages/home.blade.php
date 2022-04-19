@extends('layouts.standard')

@section('title', 'Comics')

@section('mainContent')

    <ul>

        @foreach ($comics as $comic)
        
        @endforeach

    </ul>

@endsection