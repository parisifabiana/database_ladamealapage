@extends('layouts.app') 

@section('title', 'La dame à la page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
@endsection

@section('content')

<!------Hero------->

<div class="masthead text-white">
    <div class="container d-flex flex-column align-items-center">
    
      <h1 class="mb-3" >Contattaci</h1>
      <h4 class="mb-5">Per qualsiasi dubbio o informazione, siamo qui per te!</h4>
    </div>
  </div>
</header>

<main>
    <!------Form------>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Modulo di Contatto</h5> 
                        <form action="{{ route('sendEmail') }}" method="POST">
                            <div class="mb-3">
                              <label for="nome" class="form-label">Nome</label>
                              <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                              <label for="messaggio" class="form-label">Messaggio</label>
                              <textarea class="form-control" id="messaggio" name="messaggio" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection