<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Feature;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(){
        ;
        return view("pages/home",['items' => $items = Item::get()]);
    }
}
