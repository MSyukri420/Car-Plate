<!doctype html>
<html lang="en">

<head>
    <title>Tender</title>
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
    <div class="page-header min-vh-70" style="background-image: url('{{ asset('images/header2.jpg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="text-center">
                    <h1 class="text-white">JPJ Latest Number Plate</h1>
                    <p class="text-white">Provided information on Malaysia's latest vehicle registration number details.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End First Section -->

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n5">
        <section class="pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if($latestTender)
                            <p class="text-center">Listed below is the JPJ latest vehicle registration numbers as of {{ $latestTender->created_at->format('d F Y @ h:i a (l)') }}:</p>
                        @else
                            <p class="text-center">No latest plate available.</p>
                        @endif

                        <!-- Display Tenders Items Here as Cards -->
                        <div class="row mt-4">
                            @foreach ($mostRecentTenders as $tender)
                                <div class="col-md-4 col-sm-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $tender->state }}</h5>
                                            <p class="card-text">{{ strtoupper($tender->plate) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('navigation/floatButton')
  @include('navigation/footer')
</body>

</html>

