@extends('layouts.app')

@section('title', 'La dame à la page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
@endsection

@section('content')
      
<!------JUMBOTRON------->

<div class="jumbotron container">
    <img src=".\assets\img\background.jpg" alt="background" class="jumbotron">
    <h1 class="display-4">Il tuo stile, i tuoi accessori</h1>
    <p class="lead">La nuova collezione estate ti aspetta!</p>
    <div class= "flex-btn">
        <a class="btn btn-primary btn-shop btn-lg d-flex justify-content-center btn-shop" href="{{route('shop')}}" role="button"> Shop now > </a>
    </div>
    </div>
</header>
<!------CAROUSEL------->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>I vostri preferiti in offerta!</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
		 
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-SUN.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Sun</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-SIMPLE.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Simple</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-GOCCIA-small-argento.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Goccia</h4>
									<p class="item-price"><s>€10.00</s>  <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-SUNNY.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Sunny</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-STYLE-oro.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Style - oro</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-WAVES.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Waves</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-BAG-oro.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Bag - oro</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src=".\assets\home-img\orecchini-MIRROR.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Orecchini Mirror</h4>
									<p class="item-price"><s>€10.00</s> <span>€8.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary rounded">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
@endsection