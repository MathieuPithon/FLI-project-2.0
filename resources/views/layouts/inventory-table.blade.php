<table class="table-fixed w-4/5">
    <thead class="bg-neutral-200">
        <tr>
            <th>Image</th>
            <th>Objet</th>
            <th>caractéristiques</th>
            <th>quantité disponible</th>
            <th>options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-200">
            <td><img src="{{ asset($item->image_path)}}"
                    class="h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 object-contain h-48 w-48">
            </td>
            <td>{{$item->category->name}}</td>
            <td>
                <ul class="list-disc">
                    @foreach ( $item->features as $feature)
                    <li>{{$feature->name}} : {{$feature->pivot->value}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                {{ collect($items)
                ->where('category_id', $item->category_id)
                ->count()
                }}

            </td>
            <td>
                {{-- {{$item}} --}}
                <x-primary-button>
                    <a href="{{ route('home') }}"> Emprunter </a>
                </x-primary-button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>