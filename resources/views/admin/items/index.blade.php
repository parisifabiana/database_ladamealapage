@extends('layouts.admin')
@section('title', 'La dame à la page')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h2>Tutti i prodotti</h2>
        <div class="text-right mb-3">
            <a href="{{ route('admin.items.create') }}" class="btn btn-success">Aggiungi Prodotto</a>
        </div>
        {{-- Messaggi di errore e successo --}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Immagine</th>
                <th scope="col">Operazioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <th scope="row"> {{$item->name}} </th>
                        <td> {{$item->description}} </td> 
                        <td> {{$item->price}} </td>
                            <td>
                                @if (filter_var($item->img, FILTER_VALIDATE_URL))
                                <img src="{{ $item->img }}" alt="{{ $item->name }}" class="img-thumbnail"
                                    style="max-width: 150px;">
                                @elseif($item->img === null)
                                <img src="https://cdn.pixabay.com/photo/2023/08/11/16/50/water-8183918_1280.jpg" class="img-thumbnail"
                                style="max-width: 150px;">
                                @else
                                <img src="{{ asset('storage/img/' . $item->img) }}" alt="{{ $item->name }}"
                                    class="img-thumbnail" style="max-width: 150px;">
                                @endif
                            </td>
                            <td>
                            <a href="{{route('admin.items.edit', $item->id)}}">Modifica</a>
                            <form action="{{ route('admin.items.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Cancella" onclick="return confirm('Sei sicuro di cancellare?')"> 
                            </form>
                            </td>         
                </tr>
                @endforeach 
            </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </ul>
            </nav>
        </div> 
    </div>
@endsection
