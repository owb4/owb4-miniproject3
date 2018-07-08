@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">About Us</div>
                    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                        <div class="col-md-8 px-0">
                            <h1 class="display-4 font-italic">We are all about cars</h1>
                            <p class="lead my-3">Our goal is that every ride in the car creates a positive experience.</p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h2 class="mb-0">
                                        <a class="text-dark" href="#">Reliability</a>
                                    </h2>
                                    <div class="mb-1 text-muted">Trust</div>
                                    <p class="card-text mb-auto">Our mission is to make sure the vehicle you select will be by your side every day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h2 class="mb-0">
                                        <a class="text-dark" href="#">Efficiency</a>
                                    </h2>
                                    <div class="mb-1 text-muted">Environment</div>
                                    <p class="card-text mb-auto">We make sure every vehicle we sell follows the most strict industry standards when it comes to fuel efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
