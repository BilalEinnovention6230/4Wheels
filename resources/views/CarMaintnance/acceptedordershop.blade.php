@extends('partial.practice')
@section('content')
    <div class="mt-3">
        <p>Explore a wide range of trusted car maintenance workshops in your area. Whether you need routine
            maintenance, repairs, or specialized services, we've got you covered. Browse through the options below
            to find the perfect workshop for your car's needs.</p>
    </div>
    <h5 class="fw-bold my-3">Best Options for Car Near You</h5>
    @if ($data)
    <a href="{{ route('deletemyadd', ['recordid' => $recordid]) }}">Delete Your Add</a>
        
    @endif
    
    {{-- My Location --}}
    <input type="text" name="latitude" id="latitude" value="" hidden>
    <input type="text" name="longitude" id="longitude" value="" hidden>

    @if ($data)
        <div class="workshops my-5">
            <div class="container">
                <div class="card ">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-3">
                                <img src="{{ $data->image }}" alt="" class="w-100">
                            </div>
                            <div class="col-7">
                                <h3>{{ $data->Wname }}</h3>
                                <div class="d-flex">
                                    <span><img src="./location.png" alt="" width="20px" class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Location: {{ $data->Address }}</h6>
                                </div>
                                <div class="d-flex"><span><img src="./distance.png" alt="" width="20px"
                                            class="me-1 mt-1"></span>
                                    <a href="https://www.google.com/maps?q={{ $data->latitude }},{{ $data->longitude }}">View
                                        On Maps</a>

                                    <p id="targetlongitude" hidden>{{ $data->longitude }}: </p>
                                    <p id="targetlatitude" hidden>{{ $data->latitude }}:</p>
                                    <p id="status" hidden></p>
                                    <a id="map-link" target="_blank" hidden></a>
                                </div>
                                <div class="d-flex">
                                    <span><img src="./customer-support.png" alt="" width="20px"
                                            class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Services Offered: {{ $data->Service }}</h6>
                                </div>
                                <div class="d-flex">
                                    <span><img src="./star.png" alt="" width="20px" class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Specializations: {{ $data->Specialization }}</h6>
                                </div>
                                <div class="d-flex">
                                    <span><img src="./phone.png" alt="" width="20px" class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Contact: {{ $data->Contact }}</h6>
                                </div>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('workshop.viewdetails', ['id' => $data->id]) }}"
                                    class="btn btn-outline-danger">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <h3>Your request is pending. Please wait while we process it.</h3>
    <a href="{{ route('workshops', ['recordid' => $recordid]) }}" class="btn btn-info">Refresh</a>
    @endif
@endsection
