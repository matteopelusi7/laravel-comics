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
                        <p>{{ $comics['description'] }}</p>
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

            <div class="container">
                
            </div>

        </div>
        
    </main>

@endsection