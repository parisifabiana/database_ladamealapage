<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles') <!-- Sezione per gli stili personalizzati -->
    <title>@yield('title', 'La dame à la page')</title>
</head>

<body>
    <header>
        <!-------------NAVBAR --------->
    <nav class="navbar navbar-expand-lg ">
		
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		<a class="navbar-brand">
		  <img height="100px"src="{{asset ('.\assets\logo\minilogo.png')}}">
		</a>
		<a class="navbar-brand" {{Request::routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">La dame à la page</a> 

        <div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ms-auto ">
			  <li class="nav-item active">
				<a class="nav-link" {{Request::routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" {{Request::routeIs('shop') ? 'active' : '' }}" href="{{route('shop')}}">Shop</a>
			  </li>
			  <li class="nav-item active">
				  <a class="nav-link" {{Request::routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contatti</a>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link"  {{Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">Dashboard</a>
			</li>
	        </ul>
        </div>
	
		</nav>
    </header>
    <main>
        @yield('content')
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
        </section>   
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>