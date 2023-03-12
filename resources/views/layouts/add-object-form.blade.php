<div>
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
        @csrf
        <label for="image">Image :</label>
        <input type="file" name="image" required>

        <label for="category">Catégorie :</label>
        <select name="category" required>
            <option value="">Choisissez une catégorie</option>
            @foreach(App\Models\Category::all() as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>


        <label for="feature">Caractéristique</label>
        <select name="feature" required id="feature">
            <option value="">Choisissez une caractéristique</option>
            @foreach (App\Models\Feature::all() as $feature)
            <option value="{{ $feature->id }}">{{ $feature->name }}
            </option>
            @endforeach
        </select>
        <div id="feature_value">

            <label for="value">valeur de la caractéristique</label>
            <input type="text" name="value" value="{{ old('value') }}">

        </div>

        <script>
        var e = document.getElementById("feature_value");
            function onChange() {
                var value= e.value;
                if (value != '') {
                    e.style.display = "block";
                } else {
                    e.style.display = "none";
                }
            }
            e.onchange = onChange;
            onChange();
        </script>

        <x-primary-button type="submit" class="mt-5">
            Ajouter
        </x-primary-button>
    </form>




</div>