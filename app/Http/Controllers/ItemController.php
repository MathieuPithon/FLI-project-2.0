<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Feature;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(){
        ;
        return view("pages/home",['items' => $items = Item::get()]);
    }

    public function create()
    {
        $categories = Category::all();
        $features = Feature::all();
        return view('items.create', compact('categories', 'features'));
    }

    public function store(Request $request)
    {


        // Créer un nouvel objet avec les données envoyées par le formulaire
        $item = new Item();
        $item->image_path = $request->image;
        $item->category = $request->category;
        $featu

        select2 JS
        // Ajouter la catégorie choisie à l'objet
        $category = Category::find($validatedData['category']);
        $item->category()->associate($category);

        // Ajouter les features choisies à l'objet avec leurs valeurs
        $featuresData = collect($validatedData['features'])->mapWithKeys(function ($feature) {
            return [$feature['id'] => ['value' => $feature['value']]];
        });
        $item->features()->sync($featuresData);

        // Enregistrer l'objet dans la base de données
        $item->save();

        // Rediriger l'utilisateur vers la page d'accueil avec un message de confirmation
        return redirect()->route('home')->with('success', 'Objet ajouté avec succès !');
    }
}
