@extends('layouts.layout', ['title' => "404"])
@section('content')
    <div class="card">
        <h2 class="card-header">Ooops...</h2>
        <img src="{{ asset('img/img_1.png') }}" alt="">
    </div>
    <a href="/" class="btn btn-outline-primary">На главную</a>
@endsection
