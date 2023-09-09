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
            <img class="d-block w-100" src="{{ asset('img/slide1.svg') }}" style="object-fit: cover;" alt="Second slide">
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
                    @foreach ($latest->chunk(6) as $key => $items)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="container">
						 	<div class="row">
                                @foreach ($items as $item)
                                <div class="col-2">
                                    <div class="card" style="width: 165px;">
                                        <img src="{{ $item->image ?? '' }}" class="card-img-top">
                                        <div class="card-body">
                                            <p class="card-title">{{ $item->name }}</p>
                                            <p class="card-text">IDR. {{ number_format($item->price) }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
						 	</div>
						 </div>
					</div>
                    @endforeach
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
                    @foreach ($products as $product)
                    <div class="col-2 mb-3">
                        <div class="card" style="width: 165px;">
                            <img src="{{ $product->image ?? asset('img/no_profile.svg') }}" class="card-img-top">
                            <div class="card-body">
                                <p class="card-title">{{ $product->name }}</p>
                                <p class="card-text">IDR. {{ number_format($product->price) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
		</div>
	</div>
</div>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Links  -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="{{ asset('img/logo.svg') }}" alt="">
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
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
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Layanan
            </h6>
            <p>
              <a href="#!" class="text-reset">Bantuan</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Tanya Jawab</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Hubungi Kami</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Cara Berjualan</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Tentang Kami
            </h6>
            <p>
              <a href="#!" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Karir</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Kebijakan Privasi</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Syarat dan Ketentuan</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Mitra</h6>
            <p>Supplier</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- Footer -->
@endsection
