@extends('partial.practice')
@section('content')
    <style>
        .next {
            float: right;

        }

        .prev {
            float: left
        }

        .content__title {
            font-size: 20px;
            text-align: center;
        }

        .content__title--m-sm {}

        .multisteps-form__progress {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
            width: 100%;
        }

        .multisteps-form__progress-btn {
            transition-property: all;
            transition-duration: 0.15s;
            transition-timing-function: linear;
            transition-delay: 0s;
            position: relative;
            padding-top: 20px;
            color: rgba(108, 117, 125, 0.7);
            text-indent: -9999px;
            border: none;
            background-color: transparent;
            outline: none !important;
            cursor: pointer;
        }

        @media (min-width: 500px) {
            .multisteps-form__progress-btn {
                text-indent: 0;
            }
        }

        .multisteps-form__progress-btn:before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 13px;
            height: 13px;
            content: '';
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            border: 2px solid currentColor;
            border-radius: 50%;
            background-color: #fff;
            box-sizing: border-box;
            z-index: 3;
        }

        .multisteps-form__progress-btn:after {
            position: absolute;
            top: 5px;
            left: calc(-50% - 13px / 2);
            transition-property: all;
            transition-duration: 0.15s;
            transition-timing-function: linear;
            transition-delay: 0s;
            display: block;
            width: 100%;
            height: 2px;
            content: '';
            background-color: currentColor;
            z-index: 1;
        }

        .multisteps-form__progress-btn:first-child:after {
            display: none;
        }

        .multisteps-form__progress-btn.js-active {
            color: #FE1517;
        }

        .multisteps-form__progress-btn.js-active:before {
            -webkit-transform: translateX(-50%) scale(1.2);
            transform: translateX(-50%) scale(1.2);
            background-color: currentColor;
        }


        .multisteps-form__panel {
            width: 100%;
            height: 0;
            visibility: hidden;
            display: none
                /* hide the panel */
        }

        .multisteps-form__panel.js-active {
            height: auto;
            opacity: 1;
            visibility: visible;
            display: block;
            /* show the panel */
        }


        .multisteps-form__panel[data-animation="scaleOut"] {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .multisteps-form__panel[data-animation="scaleOut"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .multisteps-form__panel[data-animation="slideHorz"] {
            left: 50%;
        }

        .multisteps-form__panel[data-animation="slideHorz"].js-active {
            transition-property: all;
            transition-duration: 0.25s;
            transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
            transition-delay: 0s;
            left: 0;
        }

        .multisteps-form__panel[data-animation="slideVert"] {
            top: 30px;
        }

        .multisteps-form__panel[data-animation="slideVert"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            top: 0;
        }

        .multisteps-form__panel[data-animation="fadeIn"].js-active {
            transition-property: all;
            transition-duration: 0.3s;
            transition-timing-function: linear;
            transition-delay: 0s;
        }

        .multisteps-form__panel[data-animation="scaleIn"] {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        .multisteps-form__panel[data-animation="scaleIn"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    </style>
    <div class="container" id="cont">
        <!--begin::Content container-->
        <div class="col-12">
            <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Car
                    Informtion
                </button>
                <button class="multisteps-form__progress-btn" type="button" title="Address">Contact
                    Information</button>
                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Upload picture
                </button>
            </div>
            <form class="multisteps-form__form" action="{{ route('bookingcreated') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="multisteps-form__panel  p-4 pt-6 rounded bg-white js-active" data-animation="scaleIn">
                    <div class="multisteps-form__content">
                        <h4 class="backgrounds"> CAR DETAILS </h4>
                        <div>
                            <div class="positionadjust pt-3 ">
                                <label for="carRegistration" class="form-label pt-1 ms-4 ">Your Car Registration :
                                    *</label>
                                <input type="text" class="form-control w-25 ms-2" id="carRegistratoin"
                                    placeholder="Enter your car registration" name="carRegistratoin">
                                    <span class="text-danger">
                                        @error('carRegistratoin')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                            <h5 class="pt-3">Select your advert category or Name your Vechials </h5>
                            <div class="positionadjust pt-3 ">
                                <label for="price" class="form-lable pt-1 ms-4">Car Name :</label>
                                <input type="text " class="form-control w-25 ms-5" id="CarName"
                                    placeholder=" Civic C Class 2019 C180" name="CarName">
                                    <span class="text-danger">
                                        @error('CarName')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                        </div>
                        <h4 class="backgrounds mt-4">Add price and description</h4>

                        <div>
                            <div class="positionadjust  pt-2">
                                <label for="price" class="form-lable pt-1 ms-4">Asking Price : *</label>
                                <input type="text " class="form-control w-25 ms-5" id="askingprice"
                                    placeholder="Asking Price" name="askingprice">
                                    <span class="text-danger">
                                        @error('askingprice')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                            <div class="positionadjust  pt-1">
                                <label for="checking" class="pt-1 ms-4">Price Display :</label>
                                <label>
                                    <input type="radio" name="price" id="price" class="ms-5 mt-2">visible
                                </label>
                                <label>
                                    <input type="radio" name="price" id="price" checked class="ms-5 mt-2"
                                        checked>Price On Application
                                </label>
                            </div>
                            <div class="positionadjust decriptiontextarea pt-2 ">
                                <label for="price" class="form-lable pt-1 ms-4 ">DISCRIPTION : *</label>
                                <textarea class="form-control w-75" id="description" rows="5" cols="3" name="description"></textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                            <div class="positionadjust  pt-2">
                                <label for="price" class="form-lable pt-1 ms-4">Part Exchange :</label>

                                <input type="text " class="form-control w-35 ms-5" id="askingprice" placeholder=""
                                    name="partexchange">If
                                you change Part then fill it
                                <span class="text-danger">
                                    @error('partexchange')
                                        {{ $message }}
                                    @enderror
                                    </span>

                            </div>
                        </div>

                        <h4 class="backgrounds mt-2"> CAR Specification </h4>
                        <legend class="text-danger">Car Details</legend>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label class="form-label pt-2 ms-5" for="CardName ">Car Milage :</label>
                                    <input type="text" class="form-control w-35 ms-1" id="CardName"
                                        placeholder="Enter Name" name="Milage">
                                        <span class="text-danger">
                                            @error('Milage')
                                                {{ $message }}
                                            @enderror
                                            </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label for="CVV" class="form-label pt-3 ms-5">YEARS : *</label>
                                    <select name="modelYear" class=" form-control w-35 ms-3 " id="modelYear1">
                                        <option value=""></option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('modelYear')
                                            {{ $message }}
                                        @enderror
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label for="doors" class="ms-5">Car Doors :*</label>
                                    <select name="Doors" class=" form-control w-35 ms-1" id="Doors">
                                        <option value=""></option>
                                        <option value="002">2 Doors</option>
                                        <option value="003">3 Doors</option>
                                        <option value="004">4 Doors</option>
                                        <option value="005">5 Doors</option>
                                        <option value="006">6 Doors</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('Doors')
                                            {{ $message }}
                                        @enderror
                                        </span>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label for="c" class="mb-3 pt-2 ms-5">GearBox :</label>
                                    <select name="GearBox" class="form-control w-35 ms-3" id="c">
                                        <option selected="selected" value=""></option>
                                        <option value="UNK">Unknown</option>
                                        <option value="MAN">Manual</option>
                                        <option value="ATO">Automatic</option>
                                        <option value="SAT">Semi Automatic</option>
                                        <option value="CVT">CVT</option>
                                        <option value="OTH">Other</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('GearBox')
                                            {{ $message }}
                                        @enderror
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="c" class="pt-2 ms-1 ms-5">Engin Type: *</label>
                                <select name="engintype" class="form-control w-35 " id="c">
                                    <option selected="selected" value=""></option>
                                    <option value="PTL">Petrol</option>
                                    <option value="DSL">Diesel</option>
                                    <option value="LPG">LPG</option>
                                    <option value="ELE">Electric</option>
                                    <option value="HYB">Hybrid</option>
                                    <option value="OTH">Other</option>
                                </select>
                                <span class="text-danger">
                                    @error('engintype')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col positionadjust">
                            <label for="" class="mt-2 ms-5"> CarColour:</label>
                            <select name="colour" class="form-control w-35 ms-1" id="colour">
                                <option selected="selected" value=""></option>
                                <option value="BEI">Beige</option>
                                <option value="BLA">Black</option>
                                <option value="BLU">Blue</option>
                                <option value="BRZ">Bronze</option>
                                <option value="BRO">Brown</option>
                                <option value="CRE">Cream</option>
                                <option value="GOL">Gold</option>
                                <option value="GRN">Green</option>
                                <option value="GRY">Grey</option>
                                <option value="MAR">Maroon</option>
                                <option value="MUL">Multi</option>
                                <option value="ORA">Orange</option>
                                <option value="PNK">Pink</option>
                                <option value="PPL">Purple</option>
                                <option value="RED">Red</option>
                                <option value="SIL">Silver</option>
                                <option value="TUR">Turquoise</option>
                                <option value="WHI">White</option>
                                <option value="YEL">Yellow</option>
                            </select>
                            <span class="text-danger">
                                @error('colour')
                                    {{ $message }}
                                @enderror
                                </span>
                        </div>
                    </div>
                    <legend class="text-danger">PistonHead Essentials</legend>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="doors" class=" ms-3"> Engine Pisition :*</label>
                                <select name="PistonHead" class=" form-control w-35 ms-1" id="Doors">
                                    <option selected="selected" value=""></option>
                                    <option value="FRO">Front Engined</option>
                                    <option value="MID">Mid Engined</option>
                                    <option value="REA">Rear Engined</option>

                                </select>
                                <span class="text-danger">
                                    @error('PistonHead')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="c" class="mb-3 pt-2 ms-6">Aspiration : *</label>
                                <select name="Aspiration" class="form-control w-35 ms-1" id="c">
                                    <option selected="selected" value=""></option>
                                    <option value="NAT">Normally Aspirated</option>
                                    <option value="TUR">Turbo</option>
                                    <option value="SPC">Supercharger</option>
                                </select>
                                <span class="text-danger">
                                    @error('Aspiration')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label class="form-label pt-2 " for="CardName ">Engine size (Litres):</label>
                                <input type="text" class="form-control w-35 ms-1" id="CardName" placeholder=""
                                    name="enginesize">
                            </div>
                            <span class="text-danger">
                                @error('enginesize')
                                    {{ $message }}
                                @enderror
                                </span>
                        </div>
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="CVV" class="form-label pt-3 ms-5">Cylinder Layout: *</label>
                                <select name="Cylinder" class=" form-control w-35 ms-1 " id="modelYear1">
                                    <option value=""></option>
                                    <option value="UNK">Unknown</option>
                                    <option value="003">3 cylinder</option>
                                    <option value="004">4 cylinder</option>
                                    <option value="005">5 cylinder</option>
                                    <option value="006">6 cylinder</option>
                                    <option value="008">8 cylinder</option>
                                    <option value="ROT">Rotary</option>
                                    <option value="V10">V10</option>
                                    <option value="V12">V12</option>
                                    <option value="V6">V6</option>
                                    <option value="V8">V8</option>
                                    <option value="W12">W12</option>
                                </select>
                                <span class="text-danger">
                                    @error('Cylinder')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label class="form-label pt-2 " for="CardName ">Fuel Consumption:</label>
                                <input type="text" class="form-control w-35 ms-1" id="CardName" placeholder=""
                                    name="FuelConsumption">
                                    <span class="text-danger">
                                        @error('FuelConsumption')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="CVV" class="form-label pt-3 ms-6">Cylinder : *</label>
                                <select name="noCylinder" class=" form-control w-35 ms-3 " id="modelYear1">
                                    <option value=""></option>
                                    <option value="2">2 Cylinders</option>
                                    <option value="3">3 Cylinders</option>
                                    <option value="4">4 Cylinders</option>
                                    <option value="5">5 Cylinders</option>
                                    <option value="6">6 Cylinders</option>
                                    <option value="8">8 Cylinders</option>
                                    <option value="10">10 Cylinders</option>
                                    <option value="12">12 Cylinders</option>
                                    <option value="16">16 Cylinders</option>
                                </select>
                                <span class="text-danger">
                                    @error('noCylinder')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label class="form-label pt-2 ms-5" for="CardName ">Health:</label>
                                <input type="text" class="form-control w-35 ms-1" id="CardName" placeholder=""
                                    name="Health">
                                    <span class="text-danger">
                                        @error('Health')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label class="form-label pt-2 ms-5" for="CardName ">Top speed (mph):</label>
                                <input type="text" class="form-control w-35 ms-1" id="CardName" placeholder=""
                                    name="topspeed">
                                    <span class="text-danger">
                                        @error('topspeed')
                                            {{ $message }}
                                        @enderror
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label class="form-label pt-2 ms-4" for="CardName ">Driven wheels:</label>
                                <select name="Drivenwheels" class=" form-control w-35 ms-2 " id="modelYear1">
                                    <option value=""></option>
                                    <option value="FRO">Front Wheel Drive</option>
                                    <option value="REA">Rear Wheel Drive</option>
                                    <option value="ALP">All Wheel Drive - Permanent</option>
                                    <option value="ALS">All Wheel Drive - Selected</option>
                                    <option value="LFR">Lifting Rear</option>
                                    <option value="MID">Middle</option>
                                    <option value="NAN">Na</option>
                                    <option value="PUS">Pusher</option>
                                    <option value="TWS">Twin Steer</option>
                                </select>
                                <span class="text-danger">
                                    @error('Drivenwheels')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 positionadjust">
                                <label for="CVV" class="form-label pt-3 ms-6">Owners : *</label>
                                <select name="Owners" class=" form-control w-35 ms-4 " id="modelYear1">
                                    <option value=""></option>
                                    <option value="1">1 Owner</option>
                                    <option value="2">2 Owners</option>
                                    <option value="3">3 Owners</option>
                                    <option value="4">4 Owners</option>
                                    <option value="5">5 Owners</option>
                                    <option value="6">6 Owners</option>
                                    <option value="7">7 or more Owners</option>
                                </select>
                                <span class="text-danger">
                                    @error('Owners')
                                        {{ $message }}
                                    @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="button-row mt-4 mb-4">
                        <a class="btn btn-danger ml-auto js-btn-next next" title="Next">Next</a>
                    </div>
                </div>
                {{-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                <div class="multisteps-form__panel  p-4 pt-6 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">
                        <div>
                            <h4 class="backgrounds mt-2"> Contact Information </h4>
                            <h1 class="text-center mt-5"> Additional Details Required </h1>
                            <h5 class="mt-4">About Me </h5>
                            <h5>-----------------------------------------------------------------------------------------------------------------------------------
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label class="form-label pt-2 ms-4" for="valid">1st Name :*</label>
                                    <input type="text" class="form-control w-35 ms-4" id="fullname"
                                        placeholder="i.e John" name="fullname">
                                        <span class="text-danger">
                                            @error('fullname')
                                                {{ $message }}
                                            @enderror
                                            </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 positionadjust">
                                    <label class="form-label pt-2 ms-4" for="valid">2nd Name :*</label>
                                    <input type="text" class="form-control w-35 ms-4" id="fullname"
                                        placeholder="i.e Doe" name="lastname">
                                        <span class="text-danger">
                                            @error('lastname')
                                                {{ $message }}
                                            @enderror
                                            </span>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 positionadjust">
                                        <label class="form-label pt-2 ms-4" for="valid">Address 1:*</label>
                                        <input type="text" class="form-control w-75 ms-4 pt-2" id="fullname"
                                            placeholder="alfalah town  ,    badien road  ,    Lahore   , PUNJAB"
                                            name="address1">
                                            <span class="text-danger">
                                                @error('address1')
                                                    {{ $message }}
                                                @enderror
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 positionadjust">
                                        <label class="form-label pt-2 ms-4" for="valid">Address 2:*</label>
                                        <input type="text" class="form-control w-75 ms-4 pt-2" id="fullname"
                                            placeholder="Narang mandi   ,     dara ashraf   ,    Narowall    ,  Punjab   "
                                            name="address2">
                                            <span class="text-danger">
                                                @error('address2')
                                                    {{ $message }}
                                                @enderror
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 positionadjust">
                                        <label class="form-label pt-2 ms-4 " for="valid">Town / City :*</label>
                                        <select name="town" class="form-control w-35 ms-2" id="c">
                                            <option value="AF">Lahore</option>
                                            <option value="AR">Karachi</option>
                                            <option value="AU">Islamabad</option>
                                            <option value="AT">Peshawar</option>
                                            <option value="BE">Quetta</option>
                                            <option value="BR">Multan</option> 
                                        </select>
                                            <span class="text-danger">
                                                @error('town')
                                                    {{ $message }}
                                                @enderror
                                                </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 positionadjust">
                                        <label class="form-label pt-2 ms-5 pt-3" for="valid">County /
                                            State:*</label>
                                        <select name="country" class="form-control w-35 ms-2" id="c">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="CA">Canada</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MT">Malta</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MC">Monaco</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NO">Norway</option>
                                            <option value="OT">Other</option>
                                            <option selected="selected" value="PK">Pakistan</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="ES">Spain</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="YU">Yugoslavia</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                            </span>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col">
                                        <div class="mb-3 positionadjust">
                                            <label class="form-label pt-2 ms-4" for="valid">Postcode :*</label>
                                            <input type="text" class="form-control w-35 ms-4" id="fullname"
                                                placeholder="" name="Postcode">
                                                <span class="text-danger">
                                                    @error('CarName')
                                                        {{ $message }}
                                                    @enderror
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 positionadjust">
                                            <label class="form-label pt-2 ms-4" for="valid">Telephone Number
                                                :*</label>
                                            <input type="text" class="form-control w-35 ms-1" id="fullname"
                                                placeholder="+923480332899" name="Telephone">
                                                <span class="text-danger">
                                                    @error('Telephone')
                                                        {{ $message }}
                                                    @enderror
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="button-row   mt-4">
                                        <button class="btn  btn-danger js-btn-prev prev" type="button"
                                            title="Prev">Prev</button>
                                        <button class="btn  btn-danger  ml-auto js-btn-next next" type="button"
                                            title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="multisteps-form__panel   p-4 pt-6 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <div class="mb-3 ">

                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="row_field">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <input type="file" class="form-control" name="image1"
                                                                    multiple="">
                                                            </div>
                                                            <div class="col">
                                                                <a class="btn btn-success addthepic">ADD</a>
                                                            </div>
                                                            <div class="col">
                                                                <button class="btn btn-danger remove">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row mt-4">
                                        <button class="btn  btn-danger js-btn-prev prev" type="button"
                                            title="Prev">Prev</button>
                                        <button class="btn  btn-danger ml-auto " type="submit"
                                            title="Next">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('script')
    <script>
        // JavaScript code
        var uploadedPhotoCount = 0;

        function uploadImage(photoNumber) {
            if (uploadedPhotoCount == 0 || document.getElementById("photo1").files.length > 0) {
                var input = document.createElement("input");
                input.type = "file";
                input.accept = "image/*";
                input.onchange = function(event) {
                    var file = event.target.files[0];
                    // You can use the file variable to perform further actions, such as displaying the image on the screen or uploading it to a server.
                    var reader = new FileReader();
                    reader.onload = function() {
                        document.getElementById("image-container").src = reader.result;
                    }
                    reader.readAsDataURL(file);
                    document.getElementById("tagline" + photoNumber.charAt(photoNumber.length - 1)).disabled = false;
                    uploadedPhotoCount++;
                    if (uploadedPhotoCount < 6) {
                        document.getElementsByTagName("button")[uploadedPhotoCount].disabled = false;
                    }
                };
                input.click();
            } else {
                alert("Please upload the first photo before uploading any subsequent photos.");
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var i = 1;

            // Add a new file input field
            $('.addthepic').click(function() {
                if (i < 9) {
                    i++;
                    $('#row_field').append(
                        '<div class="row mt-2"><div class="col-md-8"><input type="file" class="form-control" name="image' +
                        i +
                        '" multiple=""></div><div class="col"></div><div class="col"><button class="btn btn-danger remove">Remove</button></div></div>'
                    );
                } else {
                    alert("You can add a maximum of 9 pictures.");
                }
            });

            // Remove the file input field
            $(document).on('click', '.remove', function() {
                if (i > 1) {
                    $(this).closest('.row').remove();
                    i--;
                }
            });
        });
    </script>
    <script>
        const DOMstrings = {
            stepsBtnClass: 'multisteps-form__progress-btn',
            stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
            stepsBar: document.querySelector('.multisteps-form__progress'),
            stepsForm: document.querySelector('.multisteps-form__form'),
            stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
            stepFormPanelClass: 'multisteps-form__panel',
            stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
            stepPrevBtnClass: 'js-btn-prev',
            stepNextBtnClass: 'js-btn-next'
        };

        const removeClasses = (elemSet, className) => {
            elemSet.forEach(elem => {
                elem.classList.remove(className);
            });
        };

        const findParent = (elem, parentClass) => {
            let currentNode = elem;
            while (!currentNode.classList.contains(parentClass)) {
                currentNode = currentNode.parentNode;
            }
            return currentNode;
        };

        const getActiveStep = elem => {
            return Array.from(DOMstrings.stepsBtns).indexOf(elem);
        };

        const setActiveStep = activeStepNum => {
            removeClasses(DOMstrings.stepsBtns, 'js-active');
            DOMstrings.stepsBtns.forEach((elem, index) => {
                if (index <= activeStepNum) {
                    elem.classList.add('js-active');
                }
            });
        };

        const getActivePanel = () => {
            let activePanel;
            DOMstrings.stepFormPanels.forEach(elem => {
                if (elem.classList.contains('js-active')) {
                    activePanel = elem;
                }
            });
            return activePanel;
        };

        const setActivePanel = activePanelNum => {
            removeClasses(DOMstrings.stepFormPanels, 'js-active');
            DOMstrings.stepFormPanels.forEach((elem, index) => {
                if (index === activePanelNum) {
                    elem.classList.add('js-active');
                    setFormHeight(elem);
                }
            });
        };

        const formHeight = activePanel => {
            const activePanelHeight = activePanel.offsetHeight;
            DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
        };

        const setFormHeight = () => {
            const activePanel = getActivePanel();
            formHeight(activePanel);
        };

        // Comment out the click event listener for stepsBar
        // DOMstrings.stepsBar.addEventListener('click', e => {
        //     const eventTarget = e.target;
        //     if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        //         return;
        //     }
        //     const activeStep = getActiveStep(eventTarget);
        //     setActiveStep(activeStep);
        //     setActivePanel(activeStep);
        //     setFormHeight();
        // });

        DOMstrings.stepsForm.addEventListener('click', e => {
            const eventTarget = e.target;
            if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList
                    .contains(`${DOMstrings.stepNextBtnClass}`))) {
                return;
            }
            const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
            let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
            if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
                activePanelNum--;
            } else {
                activePanelNum++;
            }
            setActiveStep(activePanelNum);
            setActivePanel(activePanelNum);
            setFormHeight();
        });

        window.addEventListener('load', setFormHeight, false);
        window.addEventListener('resize', setFormHeight, false);

        const setAnimationType = newType => {
            DOMstrings.stepFormPanels.forEach(elem => {
                elem.dataset.animation = newType;
            });
        };

        // Comment out the animationSelect event listener
        // const animationSelect = document.querySelector('.pick-animation__select');
        //
        // animationSelect.addEventListener('change', () => {
        //     const newAnimationType = animationSelect.value;
        //
        //     setAnimationType(newAnimationType);
        // });
    </script>

    <script>
        $(document).ready(function() {
            var imageCount = 1;

            // Add Image button click event
            $("#addButton").click(function() {
                var imageSrc = "hiding-image-" + imageCount + ".jpg";
                var carouselItemClass = imageCount === 1 ? "carousel-item active" : "carousel-item";

                // Append new image to carousel
                $("#smallCarousel .carousel-inner").append(
                    '<div class="' + carouselItemClass + '">' +
                    '<img src="' + imageSrc + '" class="d-block w-100">' +
                    '</div>'
                );

                // Show Remove Image button
                $("#removeButton").show();

                // Increment image count
                imageCount++;
            });

            // Remove Image button click event
            $("#removeButton").click(function() {
                // Remove last carousel item
                $("#smallCarousel .carousel-inner .carousel-item:last-child").remove();

                // Decrement image count
                imageCount--;

                // Hide Remove Image button if no images remaining
                if (imageCount === 1) {
                    $("#removeButton").hide();
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nextBtn = document.querySelector('.js-btn-next');

            nextBtn.addEventListener('click', function(event) {
                if (!validateCarDetails()) {
                    event.preventDefault();
                }
            });

            function validateCarDetails() {
                const carRegistration = document.getElementById('carRegistratoin').value.trim();
                const carManufacturers = document.querySelectorAll('#manufacturar');
                const askingPrice = document.getElementById('askingprice').value.trim();
                const description = document.getElementById('description').value.trim();

                // Validate Car Registration
                if (carRegistration === '') {
                    displayError('carRegistratoinError', 'Car Registration is required.');
                    return false;
                }
                hideError('carRegistratoinError');

                // Validate Car Manufacturers
                let validManufacturers = false;
                for (const manufacturerSelect of carManufacturers) {
                    if (manufacturerSelect.value !== '') {
                        validManufacturers = true;
                        break;
                    }
                }
                if (!validManufacturers) {
                    displayError('manufacturarError', 'At least one Car Manufacturer must be selected.');
                    return false;
                }
                hideError('manufacturarError');

                // Validate Asking Price
                if (askingPrice === '') {
                    displayError('askingpriceError', 'Asking Price is required.');
                    return false;
                }
                hideError('askingpriceError');

                // Validate Description
                if (description === '') {
                    displayError('descriptionError', 'Description is required.');
                    return false;
                }
                hideError('descriptionError');

                return true;
            }

            function displayError(elementId, errorMessage) {
                const errorElement = document.getElementById(elementId);
                errorElement.textContent = errorMessage;
                errorElement.style.display = 'block';
            }

            function hideError(elementId) {
                const errorElement = document.getElementById(elementId);
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            }
        });
    </script>
@endsection
