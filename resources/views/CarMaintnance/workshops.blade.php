@extends('partial.practice')
@section('content')
    <div class="mt-3">
        <p>Explore a wide range of trusted car maintenance workshops in your area. Whether you need routine
            maintenance, repairs, or specialized services, we've got you covered. Browse through the options below
            to find the perfect workshop for your car's needs.</p>
    </div>
    <h5 class="fw-bold my-3">Your Request Accepted by this Worksop</h5>
    {{-- My Loction --}}
    <input type="text" name="latitude" id="latitude" value=""  hidden>
    <input type="text" name="longitude" id="longitude" value="" hidden >
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
                                    <span><img src="./location.png" alt="" width="20px"class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Location: {{ $data->Address }}</h6>
                                </div>
                                <div class="d-flex"><span><img src="./distance.png" alt=""
                                            width="20px"class="me-1 mt-1"></span>
                                    <a href="https://www.google.com/maps?q={{ $data->latitude }},{{ $data->longitude }}" >View On Maps</a>
                                            

                                    <p id="targetlongitude" hidden>{{$data->longitude}}: </p>
                                    <p id="targetlatitude" hidden>{{$data->latitude}}:</p>
                                    <p id="status" hidden></p>
                                    <a id="map-link" target="_blank" hidden></a>
                                </div>
                                <div class="d-flex">
                                    <span><img src="./customer-support.png" alt=""
                                            width="20px"class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Services Offered: {{ $data->Service }}</h6>

                                </div>
                                <div class="d-flex">
                                    <span><img src="./star.png" alt="" width="20px"class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Specializations: {{ $data->Specialization }}</h6>

                                </div>
                                <div class="d-flex">
                                    <span><img src="./phone.png" alt="" width="20px" class="me-1 mt-1"></span>
                                    <h6 class="mt-1">Contact: {{ $data->Contact }}</h6>

                                </div>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('workshop.viewdetails', ['id' => $data->id]) }}" class="btn btn-outline-danger">View Details</a>
                                {{-- <a class="btn btn-outline-danger" href="https://www.google.com/maps?q={{ $data->latitude }},{{ $data->longitude }}" target="_blank">View on Maps</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        {
            <div class="my-5">
                <p>Wait, your request is in process...</p>
            </div>
        }
@endsection
@section('script')
    {{-- <script>
        var targetLongitude = parseFloat(document.getElementById("targetlongitude").innerHTML);
        var targetLatitude = parseFloat(document.getElementById("targetlatitude").innerHTML);

        function geoFindMe() {
            const status = document.querySelector("#status");
            const mapLink = document.querySelector("#map-link");

            mapLink.href = "";
            mapLink.textContent = "";

            function success(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                status.textContent = "";
                mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
                mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;

                const distance = calculateDistance(latitude, longitude, targetLatitude, targetLongitude);
                console.log(`Distance: ${distance} km`);
            }

            function error() {
                status.textContent = "Unable to retrieve your location";
            }

            if (!navigator.geolocation) {
                status.textContent = "Geolocation is not supported by your browser";
            } else {
                status.textContent = "Locating…";
                navigator.geolocation.getCurrentPosition(success, error);
            }
        }

        function calculateDistance(lat1, lon1, lat2, lon2) {
            const earthRadius = 6371; // Radius of the earth in kilometers
            const dLat = degToRad(lat2 - lat1);
            const dLon = degToRad(lon2 - lon1);

            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(degToRad(lat1)) * Math.cos(degToRad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);

            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            const distance = earthRadius * c;

            return distance;
        }

        function degToRad(deg) {
            return deg * (Math.PI / 180);
        }

        document.querySelector("#find-me").addEventListener("click", geoFindMe);
    </script> --}}
    
    <script>
        function geoFindMe() {
            console.log("funtionrun")
            const latitudeInput = document.getElementById("latitude");
            const longitudeInput = document.getElementById("longitude");
            const status = document.querySelector("#status");
    
            function success(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
    
                latitudeInput.value = latitude;
                longitudeInput.value = longitude;
    
                status.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
                console.log(`Latitude: ${latitude} °, Longitude: ${longitude} °`);
                console.log("function")
            }
            function error() {
                status.textContent = "Unable to retrieve your location";
            }   
    
            if (navigator.geolocation) {
                status.textContent = "Locating…";
                navigator.geolocation.getCurrentPosition(success, error);
            } else {
                status.textContent = "Geolocation is not supported by your browser";
            }
        }
    
        // Call geoFindMe() on page load to populate latitude and longitude
        geoFindMe();
    </script>
@endsection
