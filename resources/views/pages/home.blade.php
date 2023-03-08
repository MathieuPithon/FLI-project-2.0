@extends('layouts.app')

@section('content')
<img src="{{ asset("images/me1.jpg")}}" alt="photo of me" class="shadow rounded w-25 mt-5">
<h1 class="fs-1 fw-bold text-primary mt-3">FLI Project</h1>

<p>il est actuellement {{date('H\hi')}}</p>
@endsection