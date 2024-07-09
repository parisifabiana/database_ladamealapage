<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Color;
use App\Models\Item;
use App\Models\Size;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::paginate(9); // Puoi cambiare il numero di items per pagina
        return view('shop', compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collections = Collection::all();
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $item = Item::with('categories', 'collections', 'colors', 'sizes')->findOrFail($id);
        return view('shop.show', compact('item', 'categories', 'collections', 'colors', 'sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
