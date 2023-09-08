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
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection
