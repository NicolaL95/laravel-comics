@extends('layouts.app')
@section('comics_list')
    <div class="bg_a">
        <div class="current_series">
            <p>VIEW GALLERY</p>
            <a href="{{ $dett_com[$num]['thumb'] }}"></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="content">
                    <h2>{{ $dett_com[$num]['title'] }}</h2>
                    <p>US.Price {{ $dett_com[$num]['price'] }}</p>
                    <p>Check Availability</p>
                    <p>{{ $dett_com[$num]['description'] }}</p>
                </div>
            </div>
            <div class="col-6">
                <div class="adv">
                    <h2>ADVERTISEMENT</h2>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    </div>
    <div class="bg_g">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="talent">
                        <h2>Talent</h2>
                        <div class="art">
                            <p>Art by:</p>

                        </div>
                        <div class="writter">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="specs">
                        <h2>Specs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
