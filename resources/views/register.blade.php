@extends('layouts.user')

@section('content')

    <!--Main layout-->
    <main class="mt-5 pt-4">

        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Bike Register Form</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                <!--Card-->
                <div class="card">

                    @include('notifications.notify')

                    <!--Card content-->
                    <form class="card-body" method="POST" action={{ route('register.save') }} enctype="multipart/form-data" role="form">

                        @csrf

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" id="brand" class="form-control" name="brand" value="{{ old('brand') }}">
                                    <label for="brand" class="">Brand name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                                    <label for="name" class="">Bike name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->


                        <!--Rent-->
                        <div class="md-form input-group pl-0 mb-5"> 
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">₹</span>
                            </div>
                            <input type="number" class="form-control py-0" placeholder="Rent" name="rent" aria-describedby="basic-addon1" min="0" value="{{ old('rent') }}">
                        </div>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-6 col-md-12 mb-4">

                                <label for="picture">Picture</label>
                                
                                <input type="file" id="picture" name="picture" class="form-control" accept="image/*"> 

                            </div>
                            <!--Grid column-->
                        </div>

                        <hr class="mb-4">
                        
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Register the Bike</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

@endsection