<!doctype html>
<html lang="en">

<head>
    <title>Live Bid</title>
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
    <div class="page-header min-vh-70" style="background-image: url('{{ asset('images/header3.jpeg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="text-center">
                    <h1 class="text-white">Live Bid Plate</h1>
                    <p class="text-white">Provided information on Malaysia's latest live bid vehicle registration number details.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End First Section -->

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n5">
        <!-- First Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Display Live Plate Items Here as a Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Alphabet Start</th>
                                        <th>Alphabet End</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($livePlates as $livePlate)
                                        <tr>
                                            <td>{{ $livePlate->state }}</td>
                                            <td>{{ $livePlate->alphabet_start }}</td>
                                            <td>{{ $livePlate->alphabet_end }}</td>
                                            <td>{{ $livePlate->end_date }}</td>
                                            <td><span id="duration_{{ $livePlate->id }}">{{ $livePlate->duration }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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


<script>
    // Function to update the duration
    function updateDuration() {
        @foreach ($livePlates as $livePlate)
            // Calculate the remaining time in seconds
            var remainingTime_{{ $livePlate->id }} = new Date("{{ $livePlate->end_date }}").getTime() - new Date().getTime();
            var hours_{{ $livePlate->id }} = Math.floor(remainingTime_{{ $livePlate->id }} / (1000 * 60 * 60));
            var minutes_{{ $livePlate->id }} = Math.floor((remainingTime_{{ $livePlate->id }} % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_{{ $livePlate->id }} = Math.floor((remainingTime_{{ $livePlate->id }} % (1000 * 60)) / 1000);

            // Update the displayed duration
            var durationText_{{ $livePlate->id }} = hours_{{ $livePlate->id }} + " : " + minutes_{{ $livePlate->id }} + " : " + seconds_{{ $livePlate->id }} ;

            var durationElement_{{ $livePlate->id }} = document.getElementById("duration_{{ $livePlate->id }}");

            if (durationElement_{{ $livePlate->id }}) {
                if (remainingTime_{{ $livePlate->id }} <= 0) {
                    // If remaining time is zero or negative, remove the row
                    var row_{{ $livePlate->id }} = durationElement_{{ $livePlate->id }}.closest("tr");
                    if (row_{{ $livePlate->id }}) {
                        row_{{ $livePlate->id }}.remove();
                    }
                } else {
                    // Update the duration text
                    durationElement_{{ $livePlate->id }}.innerHTML = durationText_{{ $livePlate->id }};
                }
            }
        @endforeach
    }

    // Update the duration every second (1000 milliseconds)
    setInterval(updateDuration, 1000);

    // Initial update
    updateDuration();
</script>

