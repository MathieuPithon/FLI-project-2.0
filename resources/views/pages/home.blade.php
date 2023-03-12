@extends('layouts.app', ['title' => 'Inventaire'])

@section('content')
<h1 class="text-2xl font-semibold">FLI Project</h1>
@include('layouts.inventory-table')

@endsection
{{-- <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-200">
    <td><img src="{{ asset('images/rallonge_electrique.jpg')}}" alt="rallonge électrique"
            class="h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 object-contain h-48 w-48">
    </td>
    <td>Rallonge électrique</td>
    <td>
        <ul class="list-disc">
            <li>longueur: 3.2m</li>
            <li>16A</li>
            <li>blanc</li>
        </ul>
    </td>
    <td>3</td>
    <td>
        <x-primary-button>
            <a href="{{ route('home') }}"> see Home </a>
        </x-primary-button>
    </td>
</tr>
<tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-200">
    <td><img src="{{ asset('images/ecran_pc.jpg')}}" alt="écran pc"
            class="h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 object-contain h-48 w-48">
    </td>
    <td>Ecran PC</td>
    <td>
        <ul class="list-disc">
            <li>résolution: 1920x1080</li>
            <li>28 pouces</li>
            <li>avec cable d'alimentation 2m</li>
            <li>avec cable HDMI 2m</li>
            <li>noir</li>
        </ul>
    </td>
    <td>5</td>
    <td>
        <x-primary-button>
            <a href="{{ route('home') }}"> see Home </a>
        </x-primary-button>
    </td>
</tr>
<tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-200">
    <td><img src="{{ asset('images/bloc-multiprise-4x16a-avec-interrupteur-1m.jpg')}}" alt="multiprise"
            class="h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 object-contain h-48 w-48">
    </td>
    <td>Multiprise</td>
    <td>
        <ul class="list-disc">
            <li>nombre de prises: 4m</li>
            <li>avec interrupteur</li>
            <li>16A</li>
            <li>blanc</li>
        </ul>
    </td>
    <td>18</td>
    <td>
        <x-primary-button>
            <a href="{{ route('home') }}"> see Home </a>
        </x-primary-button>
    </td>
</tr> --}}