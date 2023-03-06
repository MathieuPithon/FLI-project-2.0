@extends('app')

@section('content')
<img src="{{ asset("images/me1.jpg")}}" alt="photo of me" width="500">
<h1>FLI Project</h1>

<p>il est actuellement {{date('H\hi')}}</p>
@endsection