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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/prism.min.js') }}"></script>
        <script src="{{ asset('js/plugins/highlight.min.js') }}"></script>
    </head>

    <body>
    @include('navigation/navbar')

    <!-- First Section -->
    <div class="page-header min-vh-70" style="background-image: url('{{ asset('images/header1.jpg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
            <div class="text-center">
                <h1 class="text-white">Find Your Desire Plate Number</h1>
                <p class="text-white">Explore new number, lucky number and more</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End First Section -->


    <!-- Second Section -->
    <div class="card card-body shadow-xl mx-3 mx-md-7 mt-n5 p-0">
        <div class="container">
            <div class="row p-3">
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text pt-2 pb-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" id="searchCarPlate" name="searchCarPlate" value="{{ request('searchCarPlate') }}" placeholder="Search Car Plate..." class="form-control centered-placeholder" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Second Section -->


    <!-- Third Section with Tabs -->
    <section class="pt-5 pb-4" id="car-plates">
        <div class="container" id="numberPlateContainer">
            <div class="nav-wrapper position-relative end-0 pb-4">
                <!-- Tab Navigation -->
                <ul class="nav nav-pills nav-fill p-2" id="carPlateTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0 px-3 py-1" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All Categories</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0 px-3 py-1" id="golden-tab" data-bs-toggle="tab" data-bs-target="#golden" type="button" role="tab" aria-controls="golden" aria-selected="false">Golden Number</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0 px-3 py-1" id="twoDigit-tab" data-bs-toggle="tab" data-bs-target="#two-digit" type="button" role="tab" aria-controls="two-digit" aria-selected="false">2 Digit</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0 px-3 py-1" id="threeDigit-tab" data-bs-toggle="tab" data-bs-target="#three-digit" type="button" role="tab" aria-controls="three-digit" aria-selected="false">3 Digit</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0 px-3 py-1" id="fourDigit-tab" data-bs-toggle="tab" data-bs-target="#four-digit" type="button" role="tab" aria-controls="four-digit" aria-selected="false">4 Digit</button>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="tab-content">
            </div>

        </div>
    </section>
    <!-- End Third Section -->

    @include('navigation/floatButton')
  @include('navigation/footer')
    </body>

    </html>

<script>
    var activeTab = 'all';

    $('.nav-link').on('click', function() {
        activeTab = $(this).attr('id').replace('-tab', '');
        fetchTabContentWithSearch('/car-plate/' + activeTab);
    });

    function fetchTabContentWithSearch(url) {
        const searchParams = new URLSearchParams({
            searchCarPlate: $('#searchCarPlate').val(),
            activeTab: activeTab
        });
        fetch(`${url}?${searchParams.toString()}`)
            .then(response => response.text())
            .then(html => {
                $('#tab-content').html(html);
            });
    }

    $(document).on('click', '.pagination-links a', function(event) {
        event.preventDefault();
        var pageUrl = new URL($(this).attr('href'));
        pageUrl.searchParams.set('searchCarPlate', $('#searchCarPlate').val());
        pageUrl.searchParams.set('activeTab', activeTab);

        fetchTabContentWithSearch(pageUrl.toString());
    });

    $(document).ready(function() {
        $('#all-tab').trigger('click');
        $('input[name="searchCarPlate"]').on('keyup', function() {
            var formData = {
                searchCarPlate: $('#searchCarPlate').val(),
                activeTab: activeTab
            };

            var url = '/car-plate/' + activeTab;

            // Update the tab content immediately after a search
            fetchTabContentWithSearch(url);
        });
    });
</script>
