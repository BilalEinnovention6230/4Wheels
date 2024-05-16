<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="\cssfiles\nav.css">

</head>

<body>

    <div class="landingpage">
        <div class="container-fluid" style="height: 450px">
            <div class="row" style="height: 100%;">
                <div class="col-6">
                    <div class="websitetitle">
                        <div class="text-start">
                            <h1 style="font-weight: bold;">4 Wheels</h1>
                        </div>
                        <div class="text-start">
                            <h1 style="font-weight: bold;"> Car Maintenance</h1>
                        </div>
                        <p class="text-start">
                            4Wheels is here to provide you with a seamless experience. Whether you require immediate
                            assistance when your vehicle breaks down or want to schedule a maintenance appointment at a
                            car shop, we've got you covered.
                        </p>
                        <div class="text-start">
                            <a href="WebsiteLandingPage" class="btn btn-primary"> Home </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="./car.png" alt="" class="image">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mx-5">
                <div class="col-12  ">
                    <div class="card text-start  modules  ">
                        <img class="card-img-top w-25" src="./24hours.png" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title fw-bold ">Instant Roadside Maintenance</h4>
                            <p class="card-text fs-6">Getting stuck on the road can be a frustrating and stressful
                                experience. With our website, you can easily request a maintenance team to come to your
                                location.</p>
                        </div>
                        <div class="text-center">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"
                                id="find-me">Get Immediate Help</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-4  ">
                    <div class="card text-start  modules ">
                        <img class="card-img-top w-25" src="./schedule.png" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title fw-bold ">Online Reservation for Car Maintenance</h4>
                            <p class="card-text fs-6">Preventive maintenance is essential for keeping your vehicle in
                                top shape. Our website allows you to conveniently book a reservation at a trusted car
                                shop for your maintenance needs</p>
                        </div>
                        <div class="text-center">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"
                                id="find-me">Make a Reservation</button>
                        </div>
                    </div>
                </div>
                <div class="col-4  ">
                    <div class="card text-start  modules  ">
                        <img class="card-img-top w-25" src="./maintenance.png" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title fw-bold ">Convenient In-House Maintenance</h4>
                            <p class="card-text fs-6">Our website offers the option to call our maintenance team
                                directly to your location. Whether it's a minor repair or routine maintenance we are
                                always ready to help you</p>
                        </div>
                        <div class="text-center">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"
                                id="find-me">Get Home Service</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <div class="container">
            <div class="text-center mt-5">
                <h2>Recent Activites</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card text-start">
                            <img class="card-img-top" src="./mechanicshop.png" alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">WorkShop Name</h4>
                                <div class="address">
                                    <p>Dha Phase 2 Sector U Street No 12 House # 201 </p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Last Vist</p>
                                    </div>
                                    <div class="col-6">
                                        <p>12/04/2023</p>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button class="btn btn-primary">Revisit Shop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class=" modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Instant Roadside Maintenance</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="submit" action="{{ route('instantbooking') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row  mb-3">
                            <p id="status" hidden></p>
                            <a id="map-link" target="_blank" hidden></a>


                        </div>
                        <input type="text" name="latitude" id="latitude" value=""  hidden>
                        <input type="text" name="longitude" id="longitude" value=""  hidden>
                        <div class="row  mb-3">
                            <div class="col-6">

                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname"
                                    placeholder="Ali">
                            </div>
                            <div class="col-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname"
                                    placeholder="Gill">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="cnum">Contact Number</label>
                                <input type="number" class="form-control" name="contact" id="contact"
                                    placeholder="03086159654">
                            </div>
                            <div class="col-6">
                                <label for="currentaddress">Current Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Dha Phase 2 sector u street 101">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="cartype">Car Type</label>
                                <input type="text" class="form-control" name="cartype" id="cartype"
                                    placeholder="Cvic">
                            </div>
                            <div class="col-6">
                                <label for="model">Model</label>
                                <input type="text" class="form-control" name="model" id="model"
                                    placeholder="23">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 ">
                                <label for="carissue">Car Issues</label>
                                <input type="text" class="form-control" name="carissues" id="carissues"
                                    placeholder="Engine Not Working">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function geoFindMe() {
            console.log("clicked");
            const status = document.querySelector("#status");
            const mapLink = document.querySelector("#map-link");
            const latitudeInput = document.querySelector('input[name="latitude"]');
            const longitudeInput = document.querySelector('input[name="longitude"]');

            mapLink.href = "";
            mapLink.textContent = "";

            function success(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                // Update the latitude and longitude input fields with the obtained values
                latitudeInput.value = latitude;
                longitudeInput.value = longitude;

                status.textContent = "";
                mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
                mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;

                // Open Google Maps with the specified latitude and longitude
                // const googleMapsLink = `https://www.google.com/maps/search/?api=1&query=${latitude},${longitude}`;
                // window.open(googleMapsLink, "_blank");
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


        document.querySelector("#find-me").addEventListener("click", geoFindMe);
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
