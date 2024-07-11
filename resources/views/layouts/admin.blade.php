{{-- @php
    $locale = app()->getLocale();
    $locales = config('app.locales');
    $flags = config('app.locale_flags');
@endphp --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Includi fogli di stile Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Includi fogli di stile personalizzati -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <title>@yield('title', 'La dame à la page')</title>
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.items.index') }}">Prodotti</a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                </ul>

                {{-- <ul class="navbar-nav">
                    <li class="nav-item dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- <img src="{{ $flags[$locale] }}" alt="{{ strtoupper($locale) }}" width="20"> {{ strtoupper($locale) }} --}}
                        {{-- </a> --}}
                        {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-white"
                            aria-labelledby="languageDropdown">
                            @foreach (config('app.locales') as $lang => $language)
                            @if ($lang != $locale)
                            <li>
                                <a class="dropdown-item" href="{{ route('switchLang', $lang) }}">
                                    <img src="{{ $flags[$lang] }}" alt="{{ strtoupper($lang) }}" width="20"> {{ strtoupper($lang) }}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li> --}}
                {{-- </ul>  --}}
            </div>
        </nav>
        <!-- Main Content -->
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <!------FOOTER---------->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <section>
            <div class="container text-center text-md-start mt-5" id="footer">
                <div class="row mt-3">
        
                    <!-- Promo -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4"></i>La dame à la page</h6>
                    <p><b>Il tuo stile, i tuoi accessori.</b><br> Con La dame à la page  puoi rinnovare il tuo look ogni volta che vuoi per essere ogni giorno diversa ma sempre unica.</p>
                </div>
            
                <!-- Collezioni --> 
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    Collezioni
                    </h6>
                    <p><a href="#!" class="text-reset">Estate</a>
                    </p>
                    <p><a href="#!" class="text-reset">Magia</a>
                    </p>
                    <p><a href="#!" class="text-reset">Romantic</a></p>
                
                </div>
                
                    <!-- Menu -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    Menu
                    </h6>
                    <p>
                    <a href="#home" class="text-reset">Home</a>
                    </p>
                    <p>
                    <a href="#shop" class="text-reset">Shop</a>
                    </p>
                    <p>
                    <a href="#contatti" class="text-reset">Contatti</a>
                    </p>
                
                </div>
                
                    <!-- Info -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="info">
                    <h6 class="text-uppercase fw-bold mb-4">Info</h6>
                    <p>ladamealapage@gmail.com</p>
                    <p> + 01 234 567 88</p>
                    <p><a href="https://www.instagram.com/ladamealapage/"><i class="fa-brands fa-instagram fa-lg"></i></a>  <a href="https://www.facebook.com/ladamealapage"><i class="fa-brands fa-facebook fa-lg"></i></a></p>
                </div>
        
                </div>
            </section>   
        </footer>
    </div>
    <!-- Includi script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>   
</body>
</html>