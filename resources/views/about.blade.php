<!doctype html>
<html lang="en">

<head>
    <title>About Us</title>
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
  <div class="page-header min-vh-70" style="background-image: url('{{ asset('images/header4.jpeg') }}');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto mt-5">
          <div class="text-center">
            <h1 class="text-white">Our Craft, Your Identity</h1>
            <p class="text-white">Crafting distinct car plates with a blend of art and innovation. Your satisfaction, our promise.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End First Section -->


  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n5">
    <!-- Second Section -->
    <section class="pt-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" style="padding-right: 30px;">
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
    <!-- End Second Section -->

    <!-- Fourth Section-->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-auto">
                    <h2 class="text-center text-lg-start text-white pb-2">Our Commitment</h2>
                    <div class="row justify-content-start mt-4">
                        <!-- Valuable Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">emoji_events</i>
                                    <h5 class="card-title">Valuable</h5>
                                    <p class="card-text">Our car plates are not just identifiers; they are a symbol of prestige and personalization. Each plate is crafted to meet the highest standards of quality and design, ensuring that they bring value not just to your vehicle, but also to your personal brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- JPJ Approved Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">gavel</i>
                                    <h5 class="card-title">JPJ Approved</h5>
                                    <p class="card-text">All our car plates are fully compliant with JPJ (Jabatan Pengangkutan Jalan) regulations. We ensure that every plate we produce meets the legal requirements, giving you peace of mind about the legality and quality of your purchase.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-4">
                        <!-- Lifetime Collection Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">collections</i>
                                    <h5 class="card-title">Lifetime Collection</h5>
                                    <p class="card-text">Our selection includes exclusive designs that stand the test of time. From classic to contemporary styles, our plates are a lifetime collection item for car enthusiasts and collectors, ensuring that your vehicle stands out for years to come.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Unique Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">fingerprint</i>
                                    <h5 class="card-title">Unique</h5>
                                    <p class="card-text">We specialize in offering unique car plate designs that reflect your individuality. Our plates are more than just numbers; they're a statement about who you are. With a wide array of customization options, we make sure your car plate is as unique as you are.</p>
                                </div>
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

