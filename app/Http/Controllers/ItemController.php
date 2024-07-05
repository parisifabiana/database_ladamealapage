<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Collection;
use App\Models\Color;
use App\Models\Item;
use App\Models\Size;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $colors = Color::all();
        $sizes = Size::all();
        $items = Item::orderby('id', 'asc')->paginate(4);
        return view('admin.items.index', compact('items', 'categories', 'collections', 'colors', 'sizes'));
    }

    public function index_admin()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $colors = Color::all();
        $sizes = Size::all();
        $items = Item::all();
        return view('admin.items.index', compact('items', 'categories', 'collections', 'colors', 'sizes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $colors = Color::all();
        $sizes = Size::all();
        $items = Item::all();
        // Passa i dati alla vista create
        return view('admin.items.create', compact('items', 'categories', 'collections', 'colors', 'sizes'));
    }

    private function validateItemData(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'collections' => 'required|array',
            'collections.*' => 'exists:collections,id',
            'colors' => 'required|array',
            'colors.*' => 'exists:colors,id',
            'sizes' => 'required|array',
            'sizes.*' => 'exists:sizes,id',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validare i dati
        $validateData = $this->validateItemData($request);
        //creo un'istanza
        $item = new Item();
        //riempio i campi della tabella
        $item->fill($validateData);

        //gestiamo l'immagine
        if ($request->hasFile('img')) {
            $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
            //carica l'immagine dentro la cartella storage/imgs
            $request->file('img')->storeAs('img', $fileName, 'public');
            //salva il percorso solo del nome del file nel campo del db
            $item->img = $fileName;
        }

        if ($item->save()) {
            $item->collections()->attach($validateData['collections']);
            $item->colors()->attach($validateData['colors']);
            $item->sizes()->attach($validateData['sizes']);
            $item->img()->attach($validateData['img']);
        }

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
