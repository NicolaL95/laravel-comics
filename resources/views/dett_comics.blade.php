@extends('layouts.app')
@section('comics_list')
    <div class="bg_a pt-5 pb-4 position-relative">
        <div class="container">
        <div class="cover_format position-absolute">
            <img class="position-relative" src="{{ $dett_com[$num]['thumb'] }}" alt="Cover image">
            <span class="position-absolute text-uppercase">{{ $dett_com[$num]['type'] }}</span>
            <p class="m-0">VIEW GALLERY</p>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="content">
                    <h2>{{ $dett_com[$num]['title'] }}</h2>
                    <div class="d-flex price_av justify-content-between">
                    <div>
                        <div class="d-flex bg_gr p-2 av justify-content-between">
                            <p class="m-0 text-secondary">US.Price <span class="text-white">{{ $dett_com[$num]['price'] }}</span></p>
                            <p class="m-0 text-secondary">AVAILABLE</p>
                        </div>
                    </div>
                    <p class="m-0 bg_gr p-2 text-white">Check Availability</p>
                    </div>
                    <p class="fw-bold">{{ $dett_com[$num]['description'] }}</p>
                </div>
            </div>
        
            <div class="col-6">
                <div class="adv">
                    <h2>ADVERTISEMENT</h2>
                    <img src="{{asset('img/adv.jpg')}}" alt="adv">
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
