<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
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


  <div class="card card-body shadow-xl mt-4">
    <!-- First Section -->
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('images/contact.jpg') }}'); background-size: cover;" loading="lazy"></div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                <div class="card-header position-relative z-index-2 bg-transparent">
                  <div class="bg-gradient-info shadow-primary border-radius-lg p-3">
                    <h3 class="text-white text-primary mb-0">Contact us</h3>
                  </div>
                </div>
                <div class="card-body">
                  <p class="pb-3">
                    For further questions, please email carplate@gmail.com
                    or contact using our contact form.
                  </p>
                  <form id="contact-form" method="post" action="mailto:carplate@gmail.com" enctype="text/plain">
                    <div class="card-body p-0 my-3">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                          </div>
                        </div>
                        <div class="col-md-6 ps-md-2">
                          <div class="input-group input-group-static mb-4">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="hello@creative-tim.com">
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-0 mt-md-0 mt-4">
                        <div class="input-group input-group-static mb-4">
                          <label>How can we help you?</label>
                          <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Send Message</button>
                          <a href="https://wa.me/60138151535?text=I%20want%20to%20inquire%20about%20" class="btn bg-gradient-info mt-3 mb-0" target="_blank">Inquire on WhatsApp</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End First Section -->
  </div>


  @include('navigation/floatButton')
  @include('navigation/footer')
</body>

</html>

