@extends('layouts.admin') 

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'La dame à la page')</title>
</head>
<body>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="p-5 bg-light rounded">
                <h2 class="mb-4">Inserisci un nuovo prodotto</h2>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <!-- Nome del prodotto-->
                <div class="form-group mb-3">
                    <label for="name" class="text-primary">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <form method="POST" action="{{ route('admin.items.store')}}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Categorie</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="collection_id" class="form-label">Collezione</label>
                        <select name="collection_id" id="collection_id" class="form-control">
                            @foreach($collections as $collection)
                            <option value="{{ $collection->id}}">{{ $collection->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="color_id" class="form-label">Colori</label>
                    <div class="mb-3">
                        @foreach($colors as $color)
                        <input type="checkbox" id="categoria_{{$color->id}}" name="color[]" value="{{$color->id}}">
                        <label for="color_{{$color->id}}"> {{ $color->name }} </label>
                        @endforeach
                    </div> 
                    <label for="color_id" class="form-label">Misure</label>
                    <div class="mb-3">
                        @foreach($sizes as $size)
                        <input type="checkbox" id="size_{{$size->id}}" name="size[]" value="{{$size->id}}">
                        <label for="color_{{$size->id}}"> {{ $size->name }} </label>
                        @endforeach
                    </div> 
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del prodotto</label>
                        <input type="file" class="form-control" id="img" name="img" enctype="multipart/form-data">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Invia
                    </button>    
                </form> 
            </div>
        </div>
    </div>
</body>
</html>
@endsection   