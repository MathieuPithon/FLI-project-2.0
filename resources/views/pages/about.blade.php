@extends('layouts.app', ['pageTitle' => 'About me'])



@section('content')
<img src="{{ asset('images/me2.jpg')}}" alt="photo of me" class="shadow rounded w-25 mt-5">
<h1  class="fs-1 fw-bold text-primary mt-3">Mathieu Pithon</h1>

<p><a href=" {{ route('home') }}"> revenir à la page d'accueil </a></p>

@endsection