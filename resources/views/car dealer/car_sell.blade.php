@extends('partial.practice')
@section('content')
    <style>
        .next {
            float: right;

        }

        /* .prev {
                                                                        float: left
                                                                    } */

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

        #hedding {
            text-decoration-color: #FE1517;
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
            <form class="multisteps-form__form" action="{{ $data ? route('post.update') : route('bookingcreated') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id ?? '' }}" id="">
                <div class="multisteps-form__panel  p-4 pt-6 rounded bg-white js-active" data-animation="scaleIn">
                    <div class="multisteps-form__content">
                        <h4 class="backgrounds"> CAR DETAILS </h4>
                        <div>
                            <div class=" pt-3 ">
                                <label for="carRegistration" class="form-label pt-1 ">Your Car Registration :
                                    *</label>
                                <input type="text" class="form-control w-25 ms-2" id="carRegistratoin"
                                    placeholder="Enter your car registration" name="carRegistratoin"
                                    value="{{ $data->RegistrrationNumber ?? '' }}" />
                                @if ($errors->has('carRegistratoin'))
                                    <div class="text-danger">{{ $errors->first('carRegistratoin') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex">
                                <h4 class="pt-3 text-danger">Select your advert category or Name your Vechials </h4>
                            </div>
                            <div class="col-md-12">
                                <div class=" pt-3 ">
                                    <label for="price" class="form-lable pt-1 ms-4">Car Name :</label>
                                    <input type="text " class="form-control w-25 ms-5" id="CarName"
                                        placeholder=" Civic C Class 2019 C180" name="CarName"
                                        value="{{ $data->CarName ?? '' }}">
                                    @if ($errors->has('CarName'))
                                        <div class="text-danger">{{ $errors->first('CarName') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <h4 class="backgrounds mt-4">Add price and description</h4>

                        <div>
                            <div class="  pt-2">
                                <label for="price" class="form-lable pt-1 ">Asking Price : <span
                                        style="color: red">*</span></label>
                                <input type="text " class="form-control w-25 " id="askingprice" placeholder="Asking Price"
                                    name="askingprice" value="{{ $data->CarPrice ?? '' }}">
                                <span class="text-danger">
                                    @if ($errors->has('askingprice'))
                                        <div class="text-danger">{{ $errors->first('askingprice') }}</div>
                                    @endif
                                </span>
                            </div>
                            <br>
                            {{-- <div class="  pt-1">
                                <label for="checking" class="pt-1 ms-4">Price Display :</label>
                                <label>
                                    <input type="radio" name="price" id="price" class="ms-5 mt-2">visible
                                </label>
                                <label>
                                    <input type="radio" name="price" id="price" checked class="ms-5 mt-2"
                                        checked>Price On Application
                                </label>
                            </div> --}}
                            <div class=" decriptiontextarea pt-2 ">
                                <label for="price" class="form-lable pt-1  ">DISCRIPTION : <span
                                        style="color: red">*</span></label>
                                <textarea class="form-control w-75" id="description" rows="5" cols="3" name="description">{{ $data->cardesc ?? '' }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                            <div class="  pt-2">
                                <label for="price" class="form-lable ">Part Exchange :</label>

                                <input type="text " class="form-control  ms-1" id="askingprice" placeholder=""
                                    name="partexchange"value="{{ $data->PartExchange ?? '' }}">If
                                you change Part then fill it
                                @if ($errors->has('partexchange'))
                                    <div class="text-danger">{{ $errors->first('partexchange') }}</div>
                                @endif


                            </div>
                        </div>
                        <h4 class="backgrounds mt-2"> CAR Specification </h4>
                        <legend class="text-danger">Car Details</legend>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="CardName ">Car Milage :</label>
                                    <input type="number" class="form-control  ms-1" id="CardName"
                                        placeholder="Enter Name" name="Milage" value="{{ $data->CarMilage ?? '' }}">
                                    @if ($errors->has('Milage'))
                                        <div class="text-danger">{{ $errors->first('Milage') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="CVV" class="form-label">YEARS : <span
                                            style="color: red">*</span></label>
                                    <select name="modelYear" class=" form-control   " id="modelYear1">
                                        <option value=""></option>
                                        <option value="2024" @if ($data && $data->years == '2024') selected @endif>2024
                                        </option>
                                        <option value="2023" @if ($data && $data->years == '2023') selected @endif>2023
                                        </option>
                                        <option value="2022" @if ($data && $data->years == '2022') selected @endif>2022
                                        </option>
                                        <option value="2021" @if ($data && $data->years == '2021') selected @endif>2021
                                        </option>
                                        <option value="2020" @if ($data && $data->years == '2020') selected @endif>2020
                                        </option>
                                        <option value="2019" @if ($data && $data->years == '2019') selected @endif>2019
                                        </option>
                                        <option value="2018" @if ($data && $data->years == '2018') selected @endif>2018
                                        </option>
                                        <option value="2017" @if ($data && $data->years == '2017') selected @endif>2017
                                        </option>
                                        <option value="2016" @if ($data && $data->years == '2016') selected @endif>2016
                                        </option>
                                        <option value="2015" @if ($data && $data->years == '2015') selected @endif>2015
                                        </option>
                                        <option value="2014" @if ($data && $data->years == '2014') selected @endif>2014
                                        </option>
                                        <option value="2013" @if ($data && $data->years == '2013') selected @endif>2013
                                        </option>
                                        <option value="2012" @if ($data && $data->years == '2012') selected @endif>2012
                                        </option>
                                        <option value="2011" @if ($data && $data->years == '2011') selected @endif>2011
                                        </option>
                                        <option value="2010" @if ($data && $data->years == '2010') selected @endif>2010
                                        </option>
                                        <option value="2009" @if ($data && $data->years == '2009') selected @endif>2009
                                        </option>
                                        <option value="2008" @if ($data && $data->years == '2008') selected @endif>2008
                                        </option>
                                        <option value="2007" @if ($data && $data->years == '2007') selected @endif>2007
                                        </option>
                                        <option value="2006" @if ($data && $data->years == '2006') selected @endif>2006
                                        </option>
                                        <option value="2005" @if ($data && $data->years == '2005') selected @endif>2005
                                        </option>
                                        <option value="2004" @if ($data && $data->years == '2004') selected @endif>2004
                                        </option>
                                        <option value="2003" @if ($data && $data->years == '2003') selected @endif>2003
                                        </option>
                                        <option value="2002" @if ($data && $data->years == '2002') selected @endif>2002
                                        </option>
                                        <option value="2001" @if ($data && $data->years == '2001') selected @endif>2001
                                        </option>
                                        <option value="2000" @if ($data && $data->years == '2000') selected @endif>2000
                                        </option>
                                    </select>
                                    @if ($errors->has('modelYear'))
                                        <div class="text-danger">{{ $errors->first('modelYear') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="doors">Car Doors :<span style="color: red">*</span></label>
                                    <select name="Doors" class=" form-control  ms-1" id="Doors">
                                        <option value=""></option>
                                        <option value="002" @if ($data && $data->CarDoor == '002') selected @endif>2 Doors
                                        </option>
                                        <option value="003" @if ($data && $data->CarDoor == '003') selected @endif>3 Doors
                                        </option>
                                        <option value="004" @if ($data && $data->CarDoor == '004') selected @endif>4 Doors
                                        </option>
                                        <option value="005" @if ($data && $data->CarDoor == '005') selected @endif>5 Doors
                                        </option>
                                        <option value="006" @if ($data && $data->CarDoor == '006') selected @endif>6 Doors
                                        </option>
                                    </select>
                                    @if ($errors->has('Doors'))
                                        <div class="text-danger">{{ $errors->first('Doors') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="c" class="">GearBox :</label>
                                    <select name="GearBox" class="form-control  " id="c">
                                        <option selected="selected" value=""></option>
                                        <option value="UNK" @if ($data && $data->GearBox == 'UNK') selected @endif>Unknown
                                        </option>
                                        <option value="MAN" @if ($data && $data->GearBox == 'MAN') selected @endif>Manual
                                        </option>
                                        <option value="ATO" @if ($data && $data->GearBox == 'ATO') selected @endif>
                                            Automatic</option>
                                        <option value="SAT" @if ($data && $data->GearBox == 'SAT') selected @endif>Semi
                                            Automatic</option>
                                        <option value="CVT" @if ($data && $data->GearBox == 'CVT') selected @endif>CVT
                                        </option>
                                        <option value="OTH" @if ($data && $data->GearBox == 'OTH') selected @endif>Other
                                        </option>
                                    </select>
                                    @if ($errors->has('GearBox'))
                                        <div class="text-danger">{{ $errors->first('GearBox') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="c" class="">Engin Type: <span
                                            style="color: red">*</span></label>
                                    <select name="engintype" class="form-control  " id="c">
                                        <option selected="selected" value=""></option>
                                        <option value="PTL"@if ($data && $data->EnginType == 'PTL') selected @endif>Petrol
                                        </option>
                                        <option value="DSL" @if ($data && $data->EnginType == 'DSL') selected @endif>Diesel
                                        </option>
                                        <option value="LPG" @if ($data && $data->EnginType == 'LPG') selected @endif>LPG
                                        </option>
                                        <option value="ELE" @if ($data && $data->EnginType == 'ELE') selected @endif>Electric
                                        </option>
                                        <option value="HYB" @if ($data && $data->EnginType == 'HYB') selected @endif>Hybrid
                                        </option>
                                        <option value="OTH" @if ($data && $data->EnginType == 'OTH') selected @endif>Other
                                        </option>
                                    </select>
                                    @if ($errors->has('engintype'))
                                        <div class="text-danger">{{ $errors->first('engintype') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col ">
                                <label for="" class=""> CarColour:</label>
                                <select name="colour" class="form-control  ms-1" id="colour">
                                    <option selected="selected" value=""></option>
                                    <option value="BEI" @if ($data && $data->CarColor == 'BEI') selected @endif>Beige
                                    </option>
                                    <option value="BLA" @if ($data && $data->CarColor == 'BLA') selected @endif>Black
                                    </option>
                                    <option value="BLU" @if ($data && $data->CarColor == 'BLU') selected @endif>Blue
                                    </option>
                                    <option value="BRZ" @if ($data && $data->CarColor == 'BRZ') selected @endif>Bronze
                                    </option>
                                    <option value="BRO" @if ($data && $data->CarColor == 'BRO') selected @endif>Brown
                                    </option>
                                    <option value="CRE" @if ($data && $data->CarColor == 'CRE') selected @endif>Cream
                                    </option>
                                    <option value="GOL" @if ($data && $data->CarColor == 'GOL') selected @endif>Gold
                                    </option>
                                    <option value="GRN" @if ($data && $data->CarColor == 'GRN') selected @endif>Green
                                    </option>
                                    <option value="GRY" @if ($data && $data->CarColor == 'GRY') selected @endif>Grey
                                    </option>
                                    <option value="MAR" @if ($data && $data->CarColor == 'MAR') selected @endif>Maroon
                                    </option>
                                    <option value="MUL" @if ($data && $data->CarColor == 'MUL') selected @endif>Multi
                                    </option>
                                    <option value="ORA" @if ($data && $data->CarColor == 'ORA') selected @endif>Orange
                                    </option>
                                    <option value="PNK" @if ($data && $data->CarColor == 'PNK') selected @endif>Pink
                                    </option>
                                    <option value="PPL" @if ($data && $data->CarColor == 'PPL') selected @endif>Purple
                                    </option>
                                    <option value="RED" @if ($data && $data->CarColor == 'RED') selected @endif>Red</option>
                                    <option value="SIL" @if ($data && $data->CarColor == 'SIL') selected @endif>Silver
                                    </option>
                                    <option value="TUR" @if ($data && $data->CarColor == 'TUR') selected @endif>Turquoise
                                    </option>
                                    <option value="WHI" @if ($data && $data->CarColor == 'WHI') selected @endif>White
                                    </option>
                                    <option value="YEL" @if ($data && $data->CarColor == 'YEL') selected @endif>Yellow
                                    </option>
                                </select>
                                @if ($errors->has('colour'))
                                    <div class="text-danger">{{ $errors->first('colour') }}</div>
                                @endif
                            </div>
                        </div>
                        <legend class="text-danger">
                            <h3>PistonHead Essentials</h3>
                        </legend>
                        <div class="row pt-3">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="doors" class=" "> Engine Pisition :<span
                                            style="color: red">*</span></label>
                                    <select name="PistonHead" class=" form-control  ms-1" id="Doors">
                                        <option selected="selected" value=""></option>
                                        <option value="FRO" @if ($data && $data->EngiPosition == 'FRO') selected @endif>Front
                                            Engined</option>
                                        <option value="MID" @if ($data && $data->EngiPosition == 'MID') selected @endif>Mid
                                            Engined
                                        </option>
                                        <option value="REA" @if ($data && $data->EngiPosition == 'REA') selected @endif>Rear
                                            Engined
                                        </option>

                                    </select>
                                    @if ($errors->has('PistonHead'))
                                        <div class="text-danger">{{ $errors->first('PistonHead') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="c" class="">Aspiration : <span
                                            style="color: red">*</span></label>
                                    <select name="Aspiration" class="form-control  ms-1" id="c">
                                        <option selected="selected" value=""></option>
                                        <option value="NAT"@if ($data && $data->Aspiration == 'NAT') selected @endif>Normally
                                            Aspirated</option>
                                        <option value="TUR"@if ($data && $data->Aspiration == 'TUR') selected @endif>Turbo
                                        </option>
                                        <option value="SPC" @if ($data && $data->Aspiration == 'SPC') selected @endif>
                                            Supercharger
                                        </option>
                                    </select>
                                    @if ($errors->has('Aspiration'))
                                        <div class="text-danger">{{ $errors->first('Aspiration') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label pt-2 " for="CardName ">Engine size (Litres):</label>
                                    <input type="number" class="form-control  ms-1" id="CardName" placeholder=""
                                        name="enginesize" value="{{ $data->EngineSize ?? '' }}">
                                </div>
                                @if ($errors->has('enginesize'))
                                    <div class="text-danger">{{ $errors->first('enginesize') }}</div>
                                @endif
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="CVV" class="form-label">Cylinder Layout: <span
                                            style="color: red">*</span></label>
                                    <select name="Cylinder" class=" form-control  ms-1 " id="modelYear1">
                                        <option value=""></option>
                                        <option value="UNK" @if ($data && $data->CylinderLayout == 'UNK') selected @endif>Unknown
                                        </option>
                                        <option value="003" @if ($data && $data->CylinderLayout == '003') selected @endif>3
                                            cylinder
                                        </option>
                                        <option value="004" @if ($data && $data->CylinderLayout == '004') selected @endif>4
                                            cylinder
                                        </option>
                                        <option value="005" @if ($data && $data->CylinderLayout == '005') selected @endif>5
                                            cylinder
                                        </option>
                                        <option value="006" @if ($data && $data->CylinderLayout == '006') selected @endif>6
                                            cylinder
                                        </option>
                                        <option value="008" @if ($data && $data->CylinderLayout == '008') selected @endif>8
                                            cylinder
                                        </option>
                                        <option value="ROT" @if ($data && $data->CylinderLayout == 'ROT') selected @endif>Rotary
                                        </option>
                                        <option value="V10" @if ($data && $data->CylinderLayout == 'V10') selected @endif>V10
                                        </option>
                                        <option value="V12" @if ($data && $data->CylinderLayout == 'V12') selected @endif>V12
                                        </option>
                                        <option value="V6" @if ($data && $data->CylinderLayout == 'V6') selected @endif>V6
                                        </option>
                                        <option value="V8" @if ($data && $data->CylinderLayout == 'V8') selected @endif>V8
                                        </option>
                                        <option value="W12" @if ($data && $data->CylinderLayout == 'W12') selected @endif>W12
                                        </option>
                                    </select>
                                    @if ($errors->has('Cylinder'))
                                        <div class="text-danger">{{ $errors->first('Cylinder') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label  " for="CardName ">Fuel Consumption:</label>
                                    <input type="text" class="form-control  ms-1" id="CardName" placeholder=""
                                        name="FuelConsumption" value="{{ $data->FuelConsumption ?? '' }}">
                                    @if ($errors->has('FuelConsumption'))
                                        <div class="text-danger">{{ $errors->first('FuelConsumption') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="CVV" class="form-label">Cylinder : <span
                                            style="color: red">*</span></label>
                                    <select name="noCylinder" class=" form-control   " id="modelYear1">
                                        <option value=""></option>
                                        <option value="2"@if ($data && $data->Cylinder == '2') selected @endif>2
                                            Cylinders
                                        </option>
                                        <option value="3"@if ($data && $data->Cylinder == '3') selected @endif>3
                                            Cylinders
                                        </option>
                                        <option value="4"@if ($data && $data->Cylinder == '4') selected @endif>4
                                            Cylinders
                                        </option>
                                        <option value="5"@if ($data && $data->Cylinder == '5') selected @endif>5
                                            Cylinders
                                        </option>
                                        <option value="6"@if ($data && $data->Cylinder == '6') selected @endif>6
                                            Cylinders
                                        </option>
                                        <option value="8"@if ($data && $data->Cylinder == '7') selected @endif>8
                                            Cylinders
                                        </option>
                                        <option value="10"@if ($data && $data->Cylinder == '10') selected @endif>10
                                            Cylinders
                                        </option>
                                        <option value="12"@if ($data && $data->Cylinder == '12') selected @endif>12
                                            Cylinders
                                        </option>
                                        <option value="16"@if ($data && $data->Cylinder == '16') selected @endif>16
                                            Cylinders
                                        </option>
                                    </select>
                                    @if ($errors->has('noCylinder'))
                                        <div class="text-danger">{{ $errors->first('noCylinder') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="CardName ">Health:</label>
                                    <input type="text" class="form-control  ms-1" id="CardName" placeholder=""
                                        name="Health" value="{{ $data->Health ?? '' }}">
                                    @if ($errors->has('Health'))
                                        <div class="text-danger">{{ $errors->first('Health') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="CardName ">Top speed (mph):</label>
                                    <input type="number" class="form-control  ms-1" id="CardName" placeholder=""
                                        name="topspeed" value="{{ $data->TopSpeed ?? '' }}">
                                    @if ($errors->has('topspeed'))
                                        <div class="text-danger">{{ $errors->first('topspeed') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="CardName ">Driven wheels:</label>
                                    <select name="Drivenwheels" class=" form-control  ms-2 " id="modelYear1">
                                        <option value=""></option>
                                        <option value="FRO"@if ($data && $data->DrivenWheels == 'FRO') selected @endif>Front
                                            Wheel
                                            Drive</option>
                                        <option value="REA" @if ($data && $data->DrivenWheels == 'REA') selected @endif>Rear
                                            Wheel
                                            Drive</option>
                                        <option value="ALP"@if ($data && $data->DrivenWheels == 'ALP') selected @endif>All
                                            Wheel
                                            Drive - Permanent</option>
                                        <option value="ALS" @if ($data && $data->DrivenWheels == 'ALS') selected @endif>All
                                            Wheel
                                            Drive - Selected</option>
                                        <option value="LFR" @if ($data && $data->DrivenWheels == 'LFR') selected @endif>Lifting
                                            Rear
                                        </option>
                                        <option value="MID" @if ($data && $data->DrivenWheels == 'MID') selected @endif>Middle
                                        </option>
                                        <option value="NAN" @if ($data && $data->DrivenWheels == 'NAN') selected @endif>Na
                                        </option>
                                        <option value="PUS" @if ($data && $data->DrivenWheels == 'PUS') selected @endif>Pusher
                                        </option>
                                        <option value="TWS" @if ($data && $data->DrivenWheels == 'TWS') selected @endif>Twin
                                            Steer
                                        </option>
                                    </select>
                                    @if ($errors->has('Drivenwheels'))
                                        <div class="text-danger">{{ $errors->first('Drivenwheels') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="CVV" class="form-label">Owners : <span
                                            style="color: red">*</span></label>
                                    <select name="Owners" class=" form-control  ms-4 " id="modelYear1">
                                        <option value=""></option>
                                        <option value="1"@if ($data && $data->Owners == '1') selected @endif>1 Owner
                                        </option>
                                        <option value="2" @if ($data && $data->Owners == '2') selected @endif>2
                                            Owners
                                        </option>
                                        <option value="3" @if ($data && $data->Owners == '3') selected @endif>3
                                            Owners
                                        </option>
                                        <option value="4" @if ($data && $data->Owners == '4') selected @endif>4
                                            Owners
                                        </option>
                                        <option value="5" @if ($data && $data->Owners == '5') selected @endif>5
                                            Owners
                                        </option>
                                        <option value="6" @if ($data && $data->Owners == '6') selected @endif>6
                                            Owners
                                        </option>
                                        <option value="7" @if ($data && $data->Owners == '7') selected @endif>7 or
                                            more
                                            Owners</option>
                                    </select>
                                    @if ($errors->has('Owners'))
                                        <div class="text-danger">{{ $errors->first('Owners') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="button-row mt-4 mb-4">
                            <a class="btn btn-danger ml-auto js-btn-next next" title="Next">Next</a>
                        </div>
                    </div>
                </div>
                {{-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                <div class="multisteps-form__panel  p-4 pt-6 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">
                        <div>
                            <h4 class="backgrounds mt-2"> Contact Information </h4>
                            <h1 class="text-center mt-5"> Additional Details Required </h1>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="valid">1st Name :<span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control  ms-4" id="fullname"
                                        placeholder="i.e John" name="fullname" value="{{ $data->Fname ?? '' }}">
                                    @if ($errors->has('fullname'))
                                        <div class="text-danger">{{ $errors->first('fullname') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label class="form-label" for="valid">2nd Name :<span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control  ms-4" id="fullname"
                                        placeholder="i.e Doe" name="lastname" value="{{ $data->Lname ?? '' }}">
                                    @if ($errors->has('lastname'))
                                        <div class="text-danger">{{ $errors->first('lastname') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label class="form-label" for="valid">Address 1:<span
                                                style="color: red">*</span></label>
                                        <input type="text" class="form-control w-75 ms-4 pt-2" id="fullname"
                                            placeholder="alfalah town  ,    badien road  ,    Lahore   , PUNJAB"
                                            name="address1" value="{{ $data->Address1 ?? '' }}">
                                        @if ($errors->has('address1'))
                                            <div class="text-danger">{{ $errors->first('address1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label class="form-label " for="valid">Address 2:<span
                                                style="color: red">*</span></label>
                                        <input type="text" class="form-control w-75 ms-4 pt-2" id="fullname"
                                            placeholder="Narang mandi   ,     dara ashraf   ,    Narowall    ,  Punjab   "
                                            name="address2" value="{{ $data->Address2 ?? '' }}">
                                        @if ($errors->has('address2'))
                                            <div class="text-danger">{{ $errors->first('address2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label class="form-label  " for="valid">Town / City :<span
                                                style="color: red">*</span></label>
                                        <select name="town" class="form-control  ms-2" id="c">
                                            <option value="AF" @if ($data && $data->City == 'AF') selected @endif>
                                                Lahore</option>
                                            <option value="AR"@if ($data && $data->City == 'AR') selected @endif>
                                                Karachi</option>
                                            <option value="AU"@if ($data && $data->City == 'AU') selected @endif>
                                                Islamabad</option>
                                            <option value="AT"@if ($data && $data->City == 'AT') selected @endif>
                                                Peshawar</option>
                                            <option value="BE"@if ($data && $data->City == 'BE') selected @endif>
                                                Quetta</option>
                                            <option value="BR"@if ($data && $data->City == 'BR') selected @endif>
                                                Multan</option>
                                        </select>
                                        @if ($errors->has('town'))
                                            <div class="text-danger">{{ $errors->first('town') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label class="form-label pt-2 ms-5 pt-3" for="valid">County /
                                            State:<span style="color: red">*</span></label>
                                        <select name="country" class="form-control  ms-2" id="c">
                                            <option value="AF" @if ($data && $data->County == 'AF') selected @endif>
                                                Afghanistan</option>
                                            <option value="AR" @if ($data && $data->County == 'AR') selected @endif>
                                                Argentina</option>
                                            <option value="AU" @if ($data && $data->County == 'AU') selected @endif>
                                                Australia</option>
                                            <option value="AT" @if ($data && $data->County == 'AT') selected @endif>
                                                Austria</option>
                                            <option value="BE" @if ($data && $data->County == 'BE') selected @endif>
                                                Belgium</option>
                                            <option value="BR" @if ($data && $data->County == 'BR') selected @endif>
                                                Brazil</option>
                                            <option value="BG" @if ($data && $data->County == 'BG') selected @endif>
                                                Bulgaria</option>
                                            <option value="CA" @if ($data && $data->County == 'CA') selected @endif>
                                                Canada</option>
                                            <option value="CL" @if ($data && $data->County == 'CL') selected @endif>
                                                Chile</option>
                                            <option value="CN" @if ($data && $data->County == 'CN') selected @endif>
                                                China</option>
                                            <option value="CO" @if ($data && $data->County == 'CO') selected @endif>
                                                Colombia</option>
                                            <option value="CR" @if ($data && $data->County == 'CR') selected @endif>
                                                Costa Rica</option>
                                            <option value="HR" @if ($data && $data->County == 'HR') selected @endif>
                                                Croatia</option>
                                            <option value="CY" @if ($data && $data->County == 'CY') selected @endif>
                                                Cyprus</option>
                                            <option value="CZ" @if ($data && $data->County == 'CZ') selected @endif>
                                                Czech Republic</option>
                                            <option value="DK" @if ($data && $data->County == 'DK') selected @endif>
                                                Denmark</option>
                                            <option value="FI" @if ($data && $data->County == 'FI') selected @endif>
                                                Finland</option>
                                            <option value="FR" @if ($data && $data->County == 'FR') selected @endif>
                                                France</option>
                                            <option value="DE" @if ($data && $data->County == 'DE') selected @endif>
                                                Germany</option>
                                            <option value="GI" @if ($data && $data->County == 'GI') selected @endif>
                                                Gibraltar</option>
                                            <option value="GR" @if ($data && $data->County == 'GR') selected @endif>
                                                Greece</option>
                                            <option value="HK" @if ($data && $data->County == 'HK') selected @endif>
                                                Hong Kong</option>
                                            <option value="HU" @if ($data && $data->County == 'HU') selected @endif>
                                                Hungary</option>
                                            <option value="IS" @if ($data && $data->County == 'IS') selected @endif>
                                                Iceland</option>
                                            <option value="IN" @if ($data && $data->County == 'IN') selected @endif>
                                                India</option>
                                            <option value="ID" @if ($data && $data->County == 'ID') selected @endif>
                                                Indonesia</option>
                                            <option value="IE" @if ($data && $data->County == 'IE') selected @endif>
                                                Ireland</option>
                                            <option value="IL" @if ($data && $data->County == 'IL') selected @endif>
                                                Israel</option>
                                            <option value="IT" @if ($data && $data->County == 'IT') selected @endif>
                                                Italy</option>
                                            <option value="JP" @if ($data && $data->County == 'JP') selected @endif>
                                                Japan</option>
                                            <option value="JO" @if ($data && $data->County == 'JO') selected @endif>
                                                Jordan</option>
                                            <option value="KR" @if ($data && $data->County == 'KR') selected @endif>
                                                Korea, Republic of</option>
                                            <option value="LB" @if ($data && $data->County == 'LB') selected @endif>
                                                Lebanon</option>
                                            <option value="LT" @if ($data && $data->County == 'LT') selected @endif>
                                                Lithuania</option>
                                            <option value="LU" @if ($data && $data->County == 'LU') selected @endif>
                                                Luxembourg</option>
                                            <option value="MY" @if ($data && $data->County == 'MY') selected @endif>
                                                Malaysia</option>
                                            <option value="MT" @if ($data && $data->County == 'MT') selected @endif>
                                                Malta</option>
                                            <option value="MX" @if ($data && $data->County == 'MX') selected @endif>
                                                Mexico</option>
                                            <option value="MC" @if ($data && $data->County == 'MC') selected @endif>
                                                Monaco</option>
                                            <option value="NL" @if ($data && $data->County == 'NL') selected @endif>
                                                Netherlands</option>
                                            <option value="NZ" @if ($data && $data->County == 'NZ') selected @endif>
                                                New Zealand</option>
                                            <option value="NO" @if ($data && $data->County == 'NO') selected @endif>
                                                Norway</option>
                                            <option value="OT" @if ($data && $data->County == 'OT') selected @endif>
                                                Other</option>
                                            <option value="PK" @if ($data && $data->County == 'PK') selected @endif>
                                                Pakistan</option>
                                            <option value="PE" @if ($data && $data->County == 'PE') selected @endif>
                                                Peru</option>
                                            <option value="PH" @if ($data && $data->County == 'PH') selected @endif>
                                                Philippines</option>
                                            <option value="PL" @if ($data && $data->County == 'PL') selected @endif>
                                                Poland</option>
                                            <option value="PT" @if ($data && $data->County == 'PT') selected @endif>
                                                Portugal</option>
                                            <option value="PR" @if ($data && $data->County == 'PR') selected @endif>
                                                Puerto Rico</option>
                                            <option value="RO" @if ($data && $data->County == 'RO') selected @endif>
                                                Romania</option>
                                            <option value="RU" @if ($data && $data->County == 'RU') selected @endif>
                                                Russian Federation</option>
                                            <option value="SA" @if ($data && $data->County == 'SA') selected @endif>
                                                Saudi Arabia</option>
                                            <option value="SG" @if ($data && $data->County == 'SG') selected @endif>
                                                Singapore</option>
                                            <option value="SI" @if ($data && $data->County == 'SI') selected @endif>
                                                Slovenia</option>
                                            <option value="ZA" @if ($data && $data->County == 'ZA') selected @endif>
                                                South Africa</option>
                                            <option value="ES" @if ($data && $data->County == 'ES') selected @endif>
                                                Spain</option>
                                            <option value="SE" @if ($data && $data->County == 'SE') selected @endif>
                                                Sweden</option>
                                            <option value="CH" @if ($data && $data->County == 'CH') selected @endif>
                                                Switzerland</option>
                                            <option value="TW" @if ($data && $data->County == 'TW') selected @endif>
                                                Taiwan</option>
                                            <option value="TH" @if ($data && $data->County == 'TH') selected @endif>
                                                Thailand</option>
                                            <option value="TR" @if ($data && $data->County == 'TR') selected @endif>
                                                Turkey</option>
                                            <option value="UA" @if ($data && $data->County == 'UA') selected @endif>
                                                Ukraine</option>
                                            <option value="AE" @if ($data && $data->County == 'AE') selected @endif>
                                                United Arab Emirates</option>
                                            <option value="US" @if ($data && $data->County == 'US') selected @endif>
                                                United States</option>
                                            <option value="UY" @if ($data && $data->County == 'UY') selected @endif>
                                                Uruguay</option>
                                            <option value="VE" @if ($data && $data->County == 'VE') selected @endif>
                                                Venezuela</option>
                                            <option value="YU" @if ($data && $data->County == 'YU') selected @endif>
                                                Yugoslavia</option>
                                        </select>
                                        @if ($errors->has('country'))
                                            <div class="text-danger">{{ $errors->first('country') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label class="form-label pt-2 " for="valid">Postcode :<span
                                                    style="color: red">*</span></label>
                                            <input type="number" class="form-control  ms-4" id="fullname"
                                                placeholder="" name="Postcode" value="{{ $data->Postcode ?? '' }}">
                                            @if ($errors->has('Postcode'))
                                                <div class="text-danger">{{ $errors->first('Postcode') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label class="form-label pt-2" for="valid">Telephone Number
                                                :<span style="color: red">*</span></label>
                                            <input type="number" class="form-control  ms-1" id="fullname"
                                                placeholder="+923480332899" name="Telephone"
                                                value="{{ $data->Telephone ?? '' }}">
                                            @if ($errors->has('Telephone'))
                                                <div class="text-danger">{{ $errors->first('Telephone') }}</div>
                                            @endif
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
                            <div class="card text-start p-5">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Your Car Images</h4>
                                    <div id="row_field">
                                        <div class="row">
                                            @if (
                                                $data &&
                                                    ($data->image1 ||
                                                        $data->image2 ||
                                                        $data->image3 ||
                                                        $data->image4 ||
                                                        $data->image5 ||
                                                        $data->image6 ||
                                                        $data->image7 ||
                                                        $data->image8 ||
                                                        $data->image9))
                                                @if ($data && $data->image1)
                                                    <div class="col-md-8">
                                                        <img src="{{ asset($data->image1) }}" width="150px"
                                                            height="100px" alt="">

                                                        <input type="file" class="form-control" name="image1"
                                                            multiple="">

                                                        <a class="btn btn-success addthepic">ADD</a>
                                                        <button class="btn btn-danger remove">Remove</button>
                                                    </div>
                                        </div>
                                        @endif
                                        @if ($data && $data->image2)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image2) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image2"
                                                    multiple="">
                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image3)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image3) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image3"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image4)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image4) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image4"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image5)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image5) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image5"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image6)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image6) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image6"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image7)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image7) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image7"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image8)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image8) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image8"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                        @if ($data && $data->image9)
                                            <div class="col-md-8">
                                                <img src="{{ asset($data->image9) }}" width="150px" height="100px"
                                                    alt="">

                                                <input type="file" class="form-control" name="image9"
                                                    multiple="">


                                                <a class="btn btn-success addthepic">ADD</a>
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="image1" multiple="">

                                            <a class="btn btn-success addthepic">ADD</a>
                                            <button type="button" class="btn btn-danger remove">Remove</button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mt-4 text-center">
                            <button class="btn  btn-danger js-btn-prev prev" type="button" title="Prev">Prev</button>
                            <button class="btn  btn-danger ml-auto ms-2" type="submit" title="Next">Submit</button>
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

            var total_images = $('input[type=file]');
            var i = 0;
            if (total_images && total_images.length > 0) {
                i = total_images.length;
            }
            // Add a new file input field
            $('.addthepic').click(function() {
                if (i < 9) {
                    i++;
                    $('#row_field').append(
                        '<div class="row mt-2"><div class="col-md-8"><input type="file" class="form-control" name="image' +
                        i +
                        '" multiple=""></div><div class="col"><button type="button" class="btn btn-danger remove">Remove</button></div></div>'
                    );
                } else {
                    alert("You can add a maximum of 9 pictures.");
                }
            });

            // Remove the file input field
            $(document).on('click', '.remove', function() {
                if (i > 1) {
                    $(this).closest('.col-md-8').remove();
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
