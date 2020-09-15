@extends('layouts.user')

@section('content')

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">

            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('img/caurosal/2.jpeg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                    <h1 class="mb-4">
                        <strong>Ride Here</strong>
                    </h1>

                    <p>
                        <strong>We are providing awesome ride Experience to you. Contact Us and Enjoy your ride with us.</strong>
                    </p>


                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

    <!--Main layout-->
    <main>

        <div class="container">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

                <!-- Navbar brand -->
                <span class="navbar-brand">Bikes:</span>

            </nav>
            <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4">

            <!--Grid row-->
            <div class="row wow fadeIn">

                @if(count($bikes) > 0)

                    @foreach($bikes as $i => $bike_details)
                        
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card">

                                 <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{ $bike_details->picture }}" class="card-img card-img-top"
                                    alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body text-center">
                                    <!--Category & Title-->
                                    <a href="" class="grey-text">
                                        <h5>{{ $bike_details->brand }}</h5>
                                    </a>
                                    <h5>
                                    <strong>
                                        <a href="" class="dark-grey-text">
                                            {{ $bike_details->name }} 
                                        </a>
                                    </strong>
                                    </h5>

                                    <h4 class="font-weight-bold blue-text">
                                    <strong>₹{{ $bike_details->rent }}/day </strong>
                                    </h4>

                                </div>
                                <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                    @endforeach

                @endif

            </div>
               
        </section>
        <!--Section: Products v.3-->

        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">

            {{ $bikes->links() }}

        </nav>
        <!--Pagination-->

        </div>
    </main>
    <!--Main layout-->

@endsection