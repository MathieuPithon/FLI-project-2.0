@extends('layouts.app', ['title' => 'Inventaire'])

@section('content')
<h1 class="text-2xl font-semibold">FLI Project</h1>
<select name="category" required>
    <option value="">Choisissez une catégorie</option>
    @foreach(App\Models\Category::all() as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
@include('layouts.inventory-table')


@endsection
