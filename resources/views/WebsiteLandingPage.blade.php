<!doctype html>
<html lang="en">

<head>
    <title>Four Wheels</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="\cssfiles\nav.css">
    <link rel="stylesheet" href="\fontawesome-free-6.4.0-web\css\all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .scrollable_box{
            width: 1340px;
    column-gap: 20px;
    overflow: hidden;
    display: flex;
    overflow-x: scroll;
    padding: 2rem;
        }
    </style>
</head>

<body>

    <div class="WebsiteLandingPage">
        <video autoplay loop muted class="back-video" src="./backvideo2.mp4"></video>
        <div class="logo">
            <img src="./logo2.png" alt="" width="200px">
        </div>
        <nav class="navbar">

            <ul>
                <li><a class="dropdown-item"
                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li>
                    <select id="partnerSelect" class="form-control">
                        <option value="" hidden>Join Us</option>
                        <option value="insurance">Insurance Company</option>
                        <option value="maintenance">Maintenance Shop</option>
                        <option value="sell">Sell Car</option>
                        <option value="Profile">Profile</option>
                    </select>
                </li>
            </ul>
        </nav>
        <div class="content w-100">
            <div class="text-center">
                <h1>4Wheels</h1>
                <div class="d-flex btnmodule justify-content-center">
                    <a href="{{ route('car_buy') }}" class="btn btn-outline-light fw-bold mx-2 ms-4"
                        style="color: black">Find a Car</a>
                    <a href="{{ route('CarSell') }}" class="btn btn-outline-light fw-bold mx-2"
                        style="color: black">Sell
                        Your Car</a>
                    <a href="Insurance" class="btn btn-outline-light fw-bold mx-2" style="color: black">Get
                        Insurance</a>
                    <a href="Maintanance" class="btn btn-outline-light fw-bold mx-2" style="color: black">Book
                        Maintenance</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="car-purchase">
        <div class="border-left-right mb-4">
            <h1>Explore Our Car Listings</h1>
        </div>
        <div class="" >
            <div class=" scrollable_box">
                @foreach ($data as $item)
                    {{-- <div class="col-2">
                        <div class="card text-start clas" style="display: inline-block; margin-right: 10px;">
                            <img class="card-img-top" width="100px" height="100px" src="{{ $item->image1 }}"
                                alt="Car Image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->CarName }}</h4>
                                <p class="card-text">Price: {{ $item->CarPrice }}</p>
                                <p class="card-text">Mileage: {{ $item->CarMilage }}</p>
                                <p class="card-text">Condition: Used</p>
                                <div class="text-center">
                                    <a href="{{ route('postadd', ['id' => $item->id]) }}" class="btn btn-danger">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-3">
                        <div class="card text-start">
                            <img class="card-img-top" width="100px" height="100px" src="{{ $item->image1 }}"
                                alt="Car Image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->CarName }}</h4>
                                <p class="card-text">Price: {{ $item->CarPrice }}</p>
                                <p class="card-text">Mileage: {{ $item->CarMilage }}</p>
                                <p class="card-text">Condition: Used</p>
                                <div class="text-center">
                                    <a href="{{ route('postadd', ['id' => $item->id]) }}" class="btn btn-danger">View
                                        Details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>




    </div>

    <div class="discover mt-5 mb-2" data-aos="fade-out">
        <div class="text-center">
            <h3>Discover & enjoy our amazing feature</h3>
        </div>
        <div class="row">
            <div class="col-6"data-aos="slide-up">
                <div class="d-flex">
                    <img src="./key.png" alt="">
                    <div class="decription">
                        <h4>Sell Your Car Hassle-Free</h4>
                        <p> Looking to sell your car hassle-free? Our platform provides a seamless and convenient way to
                            sell your car. We connect you with potential buyers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6" data-aos="slide-up">
                <div class="d-flex">
                    <img src="./trade.png" alt="">
                    <div class="decription">
                        <h4>Discover Your Dream Car</h4>
                        <p> Finding your dream car has never been easier. Explore our wide selection of high-quality
                            cars available for purchase. Start your car-buying journey today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6" data-aos="slide-up">
                <div class="d-flex">
                    <img src="./tools.png" alt="">
                    <div class="decription">
                        <h4>Expert Car Maintenance Services</h4>
                        <p> Keep your car running smoothly with our reliable maintenance services. Our experienced team
                            ensures the routine check-ups and major repairs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6" data-aos="slide-up">
                <div class="d-flex">
                    <img src="./life-insurance.png" alt="">
                    <div class="decription">
                        <h4>Secure Insurance</h4>
                        <p> Protect your investment and drive with peace of mind. Choose from a range of policies, and
                            let us take care of your car insurance worries
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="car-purchase">
        <div class="border-left-right mb-4">
            <h1>Discover Top-Quality Car Maintenance Services</h1>
        </div>
        <div class="row ms-4" style="width: 95%">
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Expert Car Maintenance Package</h4>
                        <p class="card-text">Service Type: Full Maintenance</p>
                        <p class="card-text">Price: $150</p>
                        <p class="card-text">Estimated Duration: 2 hours</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Expert Car Maintenance Package</h4>
                        <p class="card-text">Service Type: Full Maintenance</p>
                        <p class="card-text">Price: $150</p>
                        <p class="card-text">Estimated Duration: 2 hours</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Expert Car Maintenance Package</h4>
                        <p class="card-text">Service Type: Full Maintenance</p>
                        <p class="card-text">Price: $150</p>
                        <p class="card-text">Estimated Duration: 2 hours</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Expert Car Maintenance Package</h4>
                        <p class="card-text">Service Type: Full Maintenance</p>
                        <p class="card-text">Price: $150</p>
                        <p class="card-text">Estimated Duration: 2 hours</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="chose-us mt-5 mb-2 " data-aos="fade-out">
        <div class="text-center">
            <h3>Why Choose Us</h3>
        </div>
        <div class="row">
            <div class="col-6" data-aos="slide-right">
                <img src="./whycar4.png" alt="">
            </div>
            <div class="col-6" data-aos="fade-out">
                <div class="features">
                    <div class="Professional">
                        <div class="d-flex">
                            <i class="fa-solid fa-asterisk" style="color: #fb1817;"></i>
                            <h6>Find the perfect car hassle-free with our wide selection, transparent pricing, and
                                reliable sellers, ensuring a seamless buying experience</h6>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-asterisk" style="color: #fb1817;"></i>
                            <h6>Sell your car effortlessly and maximize its value with our streamlined process,
                                connecting you with potential buyers and ensuring a smooth and secure comunication</h6>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-asterisk" style="color: #fb1817;"></i>
                            <h6>Trust our team of skilled professionals to provide expert car maintenance services with
                                attention to detail, ensuring your vehicle stays in peak condition and delivers a
                                reliable and safe driving experience</h6>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-asterisk" style="color: #fb1817;"></i>
                            <h6>Protect your investment and gain peace of mind with our comprehensive car insurance
                                options tailored to your needs, offering reliable coverage and responsive customer
                                support.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="car-purchase">
        <div class="border-left-right mb-4">
            <h1>Find the Perfect Protection for Your Vehicle</h1>
        </div>
        <div class="row ms-4" style="width: 95%">
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Comprehensive Car Insurance</h4>
                        <p class="card-text">Coverage Type: Full Protection</p>
                        <p class="card-text">Price: $500 per year</p>
                        <p class="card-text">Policy Features: Accident Coverage, Theft Protection, Roadside Assistance
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Get a Quote</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Comprehensive Car Insurance</h4>
                        <p class="card-text">Coverage Type: Full Protection</p>
                        <p class="card-text">Price: $500 per year</p>
                        <p class="card-text">Policy Features: Accident Coverage, Theft Protection, Roadside Assistance
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Get a Quote</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Comprehensive Car Insurance</h4>
                        <p class="card-text">Coverage Type: Full Protection</p>
                        <p class="card-text">Price: $500 per year</p>
                        <p class="card-text">Policy Features: Accident Coverage, Theft Protection, Roadside Assistance
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Get a Quote</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="./car.png" alt="Car Image">
                    <div class="card-body">
                        <h4 class="card-title">Comprehensive Car Insurance</h4>
                        <p class="card-text">Coverage Type: Full Protection</p>
                        <p class="card-text">Price: $500 per year</p>
                        <p class="card-text">Policy Features: Accident Coverage, Theft Protection, Roadside Assistance
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-danger">Get a Quote</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('partnerSelect').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue === 'insurance') {
                window.location.href = 'insurance_registration';
            } else if (selectedValue === 'maintenance') {
                window.location.href = 'shop';
            } else if (selectedValue === 'sell') {
                window.location.href = 'CarSell';
            } else if (selectedValue === 'Profile') {
                window.location.href = 'profile';
            }
        });
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 2000,
        });
    </script>
</body>

</html>
