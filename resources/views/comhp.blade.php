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
@endsection
