@extends('layouts.standard')

@section('title', $comics['series'])

@section('mainContent')

    <main class="main-comics">

        <div class="background-main">

        </div>

        <div class="back-dodge"></div>

        <div class="container-comics">
            
            <div class="cont-com">

                <figure class="img-f">
                    <img src="{{ $comics['thumb'] }}" alt="">
                </figure>

                <div class="cont-1">
                    <h2>{{ $comics['title'] }}</h2>
                    <div class="bar-green">
                        <div>
                            <p class="price">U.s. Price</p>
                            <p class="p-1">{{ $comics['price'] }}</p>
                        </div>
                        <div>
                            <p class="avaible">Available</p>
                            <p class="p-1">Chech Availability</p>
                        </div>
                    </div>
                    <div>
                        <p class="description">{{ $comics['description'] }}</p>
                    </div>
                </div>
                <div class="fig">
                    <p>Advertising</p>
                    <figure>
                        <img src="../img/adv.jpg" alt="">
                    </figure>
                </div>
            </div>

        </div>

        <div class="container-comics-2">

            <div class="container-b">

                <div class="cont">
                    <h3>Talent</h3>
                    <div>
                        <div class="aut">
                            <p class="aut-1">Art by:</p>
                            <div class="aut-3">
                                @foreach( $comics['artists'] as $comic )
                                    <p class="lightblue">{{ $comic }}, </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="aut">
                            <p class="aut-1">Written by:</p>
                            <div class="aut-3">
                                @foreach( $comics['writers'] as $comic )
                                    <p class="lightblue">{{ $comic }}, </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cont">
                    <h3>Specs</h3>
                    <div>
                        <div class="aut">
                            <p class="aut-1">Series</p>
                            <p class="lightblue">{{ $comics['series'] }}</p>
                        </div>
                        <div class="aut">
                            <p class="aut-1">U.S. Price:</p>
                            <p>{{ $comics['price'] }}</p>
                        </div>
                        <div class="aut">
                            <p class="aut-1">On Sale Date:</p>
                            <p>{{ $comics['sale_date'] }}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
    </main>

@endsection