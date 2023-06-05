<!---Modal -->
<x-modal name="modal" id="modal">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100">
                <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlnx="http://www.w.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                    </path>
                </svg>
            </div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Successfull</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">Account has been Successful registered.</p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="ok-btn"
                    class="px-4 py-2 bg-purple-500 text-white
                        text-base font-medium rounded-md w-full
                        shadow-sm hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-300">
                    ajouter
                </button>

            </div>
        </div>

    </div>
</x-modal>

<div>
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
        @csrf
        <label for="image">Image :</label>
        <input type="file" name="image" required>

        <label for="category" id="categories">Catégorie :</label>
        <select name="category" id="category" onchange="handleSelectChange()" required>
            <option value="">Choisissez une catégorie</option>
            @foreach (App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            <option value="new" v-if="showModal">Nouvelle catégorie</option>
        </select>


        <label for="feature">Caractéristique</label>

        <div class="mb-4" v-for="(input, index) in inputs" :key="index">
            <select name="feature" required id="feature">
                <option value="">Choisissez une caractéristique</option>
                @foreach (App\Models\Feature::all() as $feature)
                    <option value="{{ $feature->id }}">{{ $feature->name }}
                    </option>
                @endforeach
            </select>

            <div id="feature_value">

                <button x-on:click="addFeature()">Ajouter un champ</button>
                <template x-for="(feature, index) in features" :key="index">
                    <div>
                        <input type="text" x-model="features[index]">
                        <button x-on:click="removeFeatures(index)">X</button>
                    </div>
                </template>
            </div>

        </div>


        <x-primary-button type="submit" class="mt-5">
            Ajouter
        </x-primary-button>
    </form>


    @push('scripts')
        <script src="{{ mix('js/add-item-form.js') }}"></script>
    @endpush
