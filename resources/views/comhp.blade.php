@extends('layouts.app')
@section('page-title', 'homepage')
@section('comics_list')
<div class="container">
    <div class="row">
@foreach($comics_album as $comic)
<div class="col-2">
    <div class="card_container">
        <img src="{{$comic['thumb']}}" alt="Album image">
        <p>{{$comic['title']}}</p>
    </div>
</div>
@endforeach
    </div>
</div>
 </div>
      <button class="load">LOAD MORE</button>
    </div>
    <div class="generic_bg">
      <div class="generic_container">
        <div class="generic_content">
             <img src="{{asset('img/buy-comics.png')}}" alt="Icona Generica">
          <img src="../assets/buy-comics-digital-comics.png" alt="" />
          <p>Digital Comics</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics--merchandise.png')}}" alt="Icona Generica">
          <p>DC MERCHANDISE</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Icona Generica">
          <p>SUBSCRIPTION</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Icona Generica">
          <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="Icona Generica">
          <p>DC POWER VISA</p>
        </div>
      </div>
    </div>
@endsection
