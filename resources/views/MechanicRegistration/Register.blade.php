@extends('partial.practice')
@section('content')
    <div class="container">
        <div class="card m-5"  >
            <div class="text-center">
                Register Your Shop
            </div>
            <div class="card-body">
                <form action="{{ route('register_mechanic') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="dashboard" value="1" id="">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Wname">Shop Name</label>
                                <input class="form-control" placeholder="Enter Shop name" type="text" name="Wname"
                                    id="Wname">
                            </div>

                            <div class="form-group">
                                <label for="Address">Shop Address</label>
                                <input class="form-control" placeholder="Enter Shop address" type="text" name="Address"
                                    id="Address">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Service">Service</label>
                                <input class="form-control" placeholder="Enter service" type="text" name="Service"
                                    id="Service">
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                <label for="Specialization">Specialization</label>
                                <input class="form-control" placeholder="Enter specialization" type="text"
                                    name="Specialization" id="Specialization">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Detail">Shop Details</label>
                                <input class="form-control" placeholder="Enter Detail" type="text" name="detail"
                                    id="Detail">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Open">Open Time</label>
                                <input class="form-control" placeholder="Enter Open Time" type="time"
                                    name="cloestime" id="Open">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Contact">Contact</label>
                                    <input class="form-control" placeholder="Enter contact number" type="text"
                                        name="Contact" id="Contact">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Cloesed">Cloesed On </label>
                                    <input class="form-control" placeholder="Enter Cloesed day"type="time"
                                        name="closeday" id="Cloesed">
                                </div>
                            </div>
                  
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Contact">Name</label>
                                    <input class="form-control" placeholder="Enter your name" type="text"
                                        name="name" id="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Cloesed">Password</label>
                                    <input class="form-control" placeholder="Enter Password" type="text"
                                        name="password" id="password">
                                </div>
                            </div>
                  
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Contact">Upload Image</label>
                                <input class="form-control" type="file"
                                    name="image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p id="targetlongitude"hidden>Longitude: {{ request()->input('longitude') }}</p>
                        <p id="targetlatitude"hidden>Latitude: {{ request()->input('latitude') }}</p>
                        <p id="status"hidden></p>
                        <a id="map-link" target="_blank"hidden></a>
                        <input type="text" name="latitude" id="latitude" value=""  hidden>
                        <input type="text" name="longitude" id="longitude" value="" hidden >
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
<script>
    function geoFindMe() {
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
            alert(`Latitude: ${latitude} °, Longitude: ${longitude} °`);

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