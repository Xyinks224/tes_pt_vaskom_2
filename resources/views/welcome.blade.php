@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active align-items-center">
            <img class="d-block w-100" src="{{ asset('img/slide1.svg') }}" style="object-fit: cover;" alt="First slide">
          </div>
          <div class="carousel-item align-items-center">
            <img class="d-block w-100" src="{{ asset('img/slide1.svg') }}" style="object-fit: cover;" alt="Second slide">
          </div>
          <div class="carousel-item align-items-center">
            <img class="d-block w-100" src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" style="object-fit: cover;" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <h3 class="mb-4" style="font-family: Playfair Display"><b>Terbaru</b></h3>
		<div class="col-12">
            <div id="inam" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
						 	<div class="row">
						 		<div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/a.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
						 		<div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/a.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
                                <div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/b.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
						 		<div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/b.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
                                <div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/c.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
						 		<div class="col-2">
						 			<div class="card" style="width: 165px;">
						 				<img src="images/c.jpg" class="card-img-top">
						 				<div class="card-body">
						 					<h4 class="card-title">Why you should use skin masks ?</h4>
						 					<p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
						 					<button type="button" class="btn btn-warning">Read More</button>
						 				</div>
						 			</div>
						 		</div>
						 	</div>
						 </div>
					</div>
					<div class="carousel-item">
						 <div class="container">
						 	<div class="row">
                                <div class="col-2">
                                    <div class="card" style="width: 165px;">
                                        <img src="images/c.jpg" class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" style="width: 165px;">
                                        <img src="images/c.jpg" class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
						 	</div>
						 </div>
					</div>
				</div>
				<a href="#inam" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#inam" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>

		</div>

	</div>

</div>

<div class="container">
    <h3 class="mb-4" style="font-family: Playfair Display"><b>Produk Tersedia</b></h3>
	<div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/a.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/a.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                   <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/b.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/b.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                   <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/c.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/c.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="images/c.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Why you should use skin masks ?</h4>
                                <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                <button type="button" class="btn btn-warning">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@endsection
