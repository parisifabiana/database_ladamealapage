@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app" class="row">
        <div class="col-md-12">
            <h2>Tutti i prodotti</h2>
            <div class="text-right mb-3">
                <a href="{{ route('admin.items.create') }}" class="btn btn-success">Aggiungi prodotto</a>
            </div>
        </div>
    </div>
</body>
</html>

