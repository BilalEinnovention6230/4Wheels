@extends('partial.practice')
@section('content')
    <div class="workshopdetails m-5">
        <h1 class="fw-semibold">{{ $data->Wname }}</h1>
        <div class="row">
            <div class="col-8 text-center">
                <img src="{{$data->image}}" alt="" width="500px" height="300px">
            </div>
            <div class="col-4">
                <a href="tel:{{ $data->contact }}" class="btn btn-success">Call the Workshop</a>
                <div class="card ">
                    <div class="card-header">
                        <h4>Shop Timings</h4>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h6>{{$data->cloestime}}</h6>
                            <small class=" text-danger">The shop remains closed on {{$data->closeday}}.</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <h4>Shop Details</h4>
        <p>{{$data->detail}}</p>
        <div class="card">
            <div class="card-header">
                <h5>Contact Details</h5>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <span><img src="./location.png" alt="" width="20px"class="me-1 mt-1"></span>
                    <h6 class="mt-1">Location: {{ $data->Address }}</h6>
                </div>
                <div class="d-flex"><span><img src="./distance.png" alt="" width="20px"class="me-1 mt-1"></span>
                    <h6 class="mt-1">Go to Gogle Maps <span class="alert"> <a
                                href="https://www.google.com/maps?q={{ $data->latitude }},{{ $data->longitude }}">View On
                                Maps</a>
                        </span></h6>
                </div>
                <div class="d-flex">
                    <span><img src="./customer-support.png" alt="" width="20px"class="me-1 mt-1"></span>
                    <h6 class="mt-1">Services Offered: {{$data->Service}}</h6>

                </div>
                <div class="d-flex">
                    <span><img src="./star.png" alt="" width="20px"class="me-1 mt-1"></span>
                    <h6 class="mt-1">Specialization{{$data->Specialization}}</h6>

                </div>
                <div class="d-flex">
                    <span><img src="./phone.png" alt="" width="20px" class="me-1 mt-1"></span>
                    <h6 class="mt-1">Contact: {{$data->Contact}}</h6>

                </div>
            </div>
        </div>
    </div>
@endsection
