@extends('layouts.main')
@section('title', 'AFdeveloper')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<main class="px-3">
    <div class="containAvatar">
        <div class="containH1">
            <h1>Desarrollador Backend</h1>
            <p class="textH1">Diseño y codifico cosas maravillosamente simples y amo lo que hago.</p>
        </div>
        <img class="avatarAlan" src="{{ asset('imagen/Alan.webp') }}" alt="Alan_avatar">
    </div>
    <div class="">
            <p class="lead">Web application developer</p>
            <i class="lead">
                <a href="https://www.linkedin.com/in/alancarabali" class="btn btn-lg btn-light fw-bold border-white bg-white">Read
                    more</a>
            </i>
        </div>
        <div class="containImgPcs">
            <img class="imgPcs" src="{{ asset('imagen/hero-devices.svg') }}">
        </div>
</main>
@endsection