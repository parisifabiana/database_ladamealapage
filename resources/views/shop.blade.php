
<!-- resources/views/shop.blade.php -->
@extends('layouts.app') <!-- o il layout che usi di solito -->

@section('title', 'Shop')

@section('content')
<div class="container">
    <h1>Shop</h1>
    <div class="row">
        @foreach($items as $item)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ $item->img ? asset('storage/img/' . $item->img) : 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <p class="card-text"><strong>€{{ $item->price }}</strong></p>
                    <a href="{{ route('shop.show', $item->id) }}" class="btn btn-primary">View Item</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $items->links() }} <!-- Paginazione -->
    </div>
</div>
@endsection
