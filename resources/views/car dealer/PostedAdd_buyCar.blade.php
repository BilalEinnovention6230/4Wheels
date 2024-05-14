@extends('partial.practice')
@section('content')
    <div class="container bgcolor mt-3 ">
            
        
        <div class="text-center BodyTexAdjust">
            <code>HomeUsed /CarsCars /KarachiToyota /KarachiVitz /KarachiVitz /2020 /KarachiVitz /2020</code>
        </div>
        <div class="row">

            <div class="col-1 text-end  mt-5">    </div>
            <div class="col-md-7 bg-light  mt-5">
                <h1 class="h1text text-center mt-5 pt-2" style="background-color: rgb(243, 243, 243)">
                    Toyota Corolla Altis Automatic 1.6 2020
                </h1>
                <p class="border-right mt-2">
                    <a href="">
                        Narang Mandi, Dara Ashraf
                    </a>
                </p>
                <div id="carouselExampleDark" class="carousel carousel-dark slide ps-3 pe-2 mt-1 bg-danger"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset($data->image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset($data->image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset($data->image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <button class="carousel-control-prev slider_button" type="button"
                            data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next slider_button" type="button"
                            data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="row bg-light ms-2 pt-3 border-right slider_button">
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="0">
                            <img src="{{ asset($data->image1) }}" alt="Image 1" width="100px" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="1">
                            <img src="{{ asset($data->image2) }}"alt="Image 2" width="100px" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="2">
                            <img src="{{ asset($data->image3) }}" alt="Image 3" width="100px" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="3">
                            <img src="{{ asset($data->image4) }}" alt="Image 4" width="100px" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="4">
                            <img src="{{ asset($data->image5) }}" alt="Image 5" width="100px" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 ps-1 border">
                        <a href="#carouselExampleDark" role="button" data-bs-slide-to="5">
                            <img src="{{ asset($data->image6) }}" alt="Image 6" width="100px" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row mt-5 me-3">
                    <div class="col-md-3 border">
                        <div class="text-center mt-3">
                            <i class="fa-solid fa-calendar-days fa-3x"></i>
                            <h5>2020</h5>
                        </div>
                    </div>
                    <div class="col-md-3 border">
                        <div class="text-center mt-3">
                            <i class="fa-solid fa-gauge fa-3x"></i>
                            <h5>60,000 KM</h5>
                        </div>
                    </div>
                    <div class="col-md-3 border">
                        <div class="text-center mt-3">
                            <i class="fa-solid fa-gas-pump fa-3x"></i>
                            <h5>Petrol</h5>
                        </div>
                    </div>
                    <div class="col-md-3 border">
                        <div class="text-center mt-3">
                            <i class="fa-solid fa-car fa-3x"></i>
                            <h5>Automatic</h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="auction-list fs16">
                  <ul class="list-unstyled clearfix nomargin">
                    <li>
                      <strong class="pull-right">25</strong>
                      Mileage
                    </li>
                    <li>
                      <strong class="pull-right ">2023-03-09</strong>
                      Auction Date
                    </li>
                    <li>
                      <strong class="pull-right ">KSP130-4031537</strong>
                      Chassis number
                    </li>
                  </ul>
                </div>
                <br>
                <br>
                <h2> Car Feature </h2>
                <div class="row ">
                  <div class="col-md-4">ABS</div>
                  <div class="col-md-4">AM/FM Radio
                  </div>
                  
                  <div class="col-md-4">Air Bags</div>
                  <div class="col-md-4 mt-2">Air Conditioning</div>
                  <div class="col-md-4 mt-2">CD Player</div>
                  <div class="col-md-4 mt-2">Front Speaker</div>
                  <div class="col-md-4 mt-2">Immobilzer Keys</div>
                  <div class="col-md-4 mt-2">Keyless Entry</div>
                  <div class="col-md-4 mt-2">Power Locks</div>
                  <div class="col-md-4 mt-2">Power Mirror</div>
                  <div class="col-md-4 mt-2">Power steering</div>
                  <div class="col-md-4 mt-2">Power Window</div>
                </div>
                <br>
                <br><br> 
            </div>

            <div class="col-md-3  mt-5  ms-3 text-center">
                <div class="bg-light">
                    <strong class="generic-green  mt-5">PKR 48
                        <span>lacs</span>
                    </strong>
                    <div>
                        <span class="sold-by-pw" style="font-size: 13px;">Managed by 4Wheels</span>
                    </div>

                </div>
                <div class="mt-3 bg-light">

                    <button class="btn btn-large mt-3 w-75 btn-block btn-success h-25  phone_number_btn border">
                        <i class="fa fa-phone"></i>
                        <span class="fs22">
                            0480227661...
                            <br><small>Show Phone Number</small>
                        </span>
                    </button>

                    <button class=" btn btn-larger mt-3 w-75 btn-block btn-transparent" style="flex-direction: row">

                        <span class="me-2" style="font-size: 20px"> Send Message </span>
                        <i class="text-left fa fa-message fa-2x"></i>
                    </button>
                    <br>
                    <br>
                </div>
                <div class="mt-3 bg-light">
                    <div class="text-container">
                        <span class="fs-4">Seller Information</span>
                        <hr class="underline">

                        <h5 class="text-center  " style="color: rgb(136, 136, 247); font-weight:bold">Ali hamza Gill</h5>
                        <small class="text-start pt-1" style="font-weight: bold ; font-size:15px">Dealer:</small>
                        <a href="" style="font-size:18px ;font-weight: bold"> 4Wheels Pakistan </a><br>
                        <br>
                        <small class="text-start pt-2 ms-4" style="font-weight: bold ; font-size:15px">ADDress:</small>
                        <small>Narang Mandi ,Dera Ashraf district Sheikhpura Muridaka Road </small>
                        <br>
                        <br>
                        <div class="d-flex align-items-center">
                            <small class="text-start pt-2 ps-5"
                                style="font-weight: bold; font-size: 15px">Post_Code:</small>
                            <table class="table mb-0 ms-2  mt-2" style="border-width:1px; background-color:rgb(253, 253, 229)">
                                <tr>
                                    <td class="border ">56789</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <small class="text-start mt-3 ms-1" style="font-weight: bold ; font-size:15px">Timing :</small>
                        <span>09:00 AM 09:00 PM</span>
                        <br>
                        <br>
                        <small class="text-start mt-3 " style="font-weight: bold ; font-size:15px">State/Country :</small>
                        <span class="me-3"> Pakistan</span>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col ms-2 ">
                                <i class=" sold-by-pw fa-solid fa-mobile-screen-button fa-2x"></i>
                            </div>
                            <div class="col me-2">
                                <i class=" sold-by-pw fa-solid fa-envelope fa-2x"></i>
                            </div>
                            <div class="col me-4">
                                <i class=" sold-by-pw fa-brands fa-facebook fa-2x"></i>
                            </div>
                        </div>
                        <br><br>
                        <small> Contact It With this When you feel You can trust him</small>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="mt-3 bg-light">
                    <div>
                        <span class="fs-5"> Safity Tips !!!</span>
                        <hr class="underline">
                        <ol class="text-start">
                          <li >Use a safe location to meet seller</li>
                          <li>Avoid cash transactions</li>
                          <li>Beware of unrealistic offers</li>
                        </ol>
                    </div>
                </div>
            </div>



        </div>
        
    </div>

@endsection
