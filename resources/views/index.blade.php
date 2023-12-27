@section('content')

<!doctype html>
<html lang="en">

<head>
  <title>Car Plate</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="{{ asset('css/material-kit.css?v=3.0.0') }}" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.x/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @include('navigation/navbar')


  <!-- First Section -->
  <section class="carousel">
    <div class="container">
      <div id="carouselPromotions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselPromotions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselPromotions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselPromotions" data-bs-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
          <!-- Page 2 -->
          <div class="carousel-item active">
            <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="New Product">
            <div class="carousel-caption custom-carousel-caption d-md-block">
              <h4>New Arrival: Designer Plates</h4>
              <p>Check out our latest collection of designer car plates. Available now!</p>
            </div>
          </div>
          <!-- Page 1 -->
          <div class="carousel-item">
            <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100" alt="Special Offer">
            <div class="carousel-caption custom-carousel-caption d-md-block">
              <h4>Limited Time Offer!</h4>
              <p>Get 20% off on all custom car plates. Offer valid until 12/12/2012.</p>
            </div>
          </div>
          <!-- Page 3 -->
          <div class="carousel-item">
            <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100" alt="Seasonal Campaign">
            <div class="carousel-caption custom-carousel-caption d-md-block">
              <h4>Summer Specials!</h4>
              <p>Explore our summer collection with vibrant and unique designs!</p>
            </div>
          </div>
        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#carouselPromotions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPromotions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- End First Section -->


  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n4" style="z-index: 99;">
    <!-- Second Section -->
    <section class="pt-4 pb-4" id="car-plates">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto mt-3 mb-3">
            <div class="text-center">
              <h2>New Release</h2>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach ($carplates as $cp)
                <div class="col-md-3 col-sm-6 col-6 mb-4 number-plate">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="{{ asset('images/car.jpeg') }}" class="card-img-top img-fluid" alt="Car Plate 1">
                            <div class="car-plate"
                                data-alphabet-start="{{ $cp->alphabet_start }}"
                                data-alphabet-end="{{ $cp->alphabet_end }}"
                                data-number="{{ $cp->number }}"
                                data-carplate="{{ $cp->carplate }}">
                                {{ strtoupper($cp->carplate) }}
                            </div>
                        </div>
                        <div class="card-body-text text-center">
                            <h6 class="card-title">RM{{ number_format($cp->price) }}</h6>
                            <a href="https://wa.me/60138151535?text=I%20want%20to%20buy%20this%20carplate%20-%20{{ $cp->carplate }}" class="btn bg-gradient-info p-2 d-none d-md-inline-block" target="_blank">Inquire on WhatsApp</a>
                            <a href="https://wa.me/60138151535?text=I%20want%20to%20buy%20this%20carplate%20-%20{{ $cp->carplate }}" class="btn bg-gradient-info px-4 d-md-none" target="_blank">Inquire</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
          <a href="/car-plate
"><h5 class="card-title text-center">View More</h5></a>
        </div>
      </div>
    </section>
    <!-- End Second Section -->


    <!-- About Third Section -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" style="padding-right: 30px;">
            <h2 class="text-center text-lg-start">About Us</h2>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">history</i>
                  <h5>Our History</h5>
                  <p>Discover the story behind our establishment and how we have grown to serve a diverse clientele.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">star_rate</i>
                  <h5>Commitment to Quality</h5>
                  <p>Quality is at the heart of our business. Learn how we ensure the highest standards in all our products.</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">group</i>
                  <h5>Our Team</h5>
                  <p>Meet the passionate individuals behind our company, dedicated to providing the best service.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">thumb_up</i>
                  <h5>Customer Satisfaction</h5>
                  <p>Understand how we prioritize customer satisfaction and the steps we take to meet diverse needs.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <img src="{{ asset('images/homecar1.jpg') }}" class="card-img" alt="Company Image 1">
            </div>
          </div>
          <div class="col-lg-3 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <img src="{{ asset('images/homecar2.jpg') }}" class="card-img" alt="Company Image 2">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Third Section -->


    <!-- Fourth Section -->
    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto mt-3">
            <div class="text-center">
              <h2>How It Work?</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <i class="bi bi-search" style="font-size: 2.5rem;"></i>
                  <h5 class="mt-3">1. Find Interesting Number</h5>
                  <p class="text-sm font-weight-normal">Search for a number that can represent you and make a online booking by inquire in Whatsapp</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <i class="bi bi-credit-card" style="font-size: 2.5rem;"></i>
                  <h5 class="mt-3">2. Order the Number Plate</h5>
                  <p class="text-sm font-weight-normal">Make the payment and fill in the basic information</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <i class="bi bi-truck" style="font-size: 2.5rem;"></i>
                  <h5 class="mt-3">3. Get Your Plate</h5>
                  <p class="text-sm font-weight-normal">Receive your personalized car plate swiftly and conveniently, ready to elevate your vehicle's identity.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Fourth Section -->

    <!-- Fifth Section -->
    <div class="page-header min-vh-50 rounded-section" loading="lazy">
        <span class="mask bg-gradient-dark opacity-1"></span>
        <div class="container col-12">
            <div class="row">
                <!-- Left Column: Description -->
                <div class="col-lg-7 col-md-6 mb-md-0 mb-4 d-flex justify-content-center flex-column text-center text-md-start">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p class="opacity-8 lead">Reach out to us for inquiries about our unique car plates, custom requests, or any other questions. We're here to help.</p>
                </div>

                <!-- Spacing Column (optional, can be removed for smaller screens) -->
                <div class="col-lg-1 d-none d-lg-block"></div>

                <!-- Right Column: Buttons -->
                <div class="col-lg-4 col-md-6 d-flex justify-content-center flex-column">
                    <a href="/contact-us" class="btn btn-white">
                        <h5 class="mt-2">Contact Us</h5>
                    </a>
                    <a href="/carplate" class="btn shadow-none mt-1">View Car Plates</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fifth Section -->
</div>


  @include('navigation/floatButton')
  @include('navigation/footer')
</body>

</html>


<script>
  function showPage(pageNumber) {
    // Hide all pages
    document.querySelectorAll('.content-page').forEach(page => {
      page.style.display = 'none';
    });

    // Show the selected page
    document.getElementById('page' + pageNumber).style.display = 'block';
  }
</script>
