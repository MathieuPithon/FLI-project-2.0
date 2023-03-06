@extends('app')

@section('title', 'About me | ' . config('app.name'))


@section('content')
<img src="{{ asset('images/me2.jpg')}}" alt="photo of me" width="500">
<h1>Mathieu Pithon</h1>

<p><a href=" {{ route('home') }}"> revenir à la page d'accueil </a></p>

@endsection