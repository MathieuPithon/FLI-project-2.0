@extends('layouts.app')

@section('content')
<img src="{{ asset("images/me1.jpg")}}" alt="photo of me" class="mt-12 rounded shadow-md w-64">
<h1 class="fs-1 fw-bold text-primary mt-3">FLI Project</h1>

<p>il est actuellement {{date('H\hi')}}</p>
@endsection