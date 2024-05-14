@extends('partial.practice')
@section('content')
    <div class="container-fluid insurace_bg paddingset">
        <div class="container">

            <div class="row">
                <div class="col-md-6 bg-light border-right">
                    <div>
                        <span style="font-size:20px">Car Make :</span>
                        <span class="font-weight-bold" style="font-size:20px;font-weight:bold">Honda</span>
                    </div>
                    <div>

                        <span style="font-size:20px">Car Model :</span>
                        <span class="font-weight-bold " style="font-size:20px;font-weight:bold">Civic</span>
                    </div>

                </div>
                <div class="col-md-6 bg-light">
                    <div class="d-flex align-items-center">
                        <span class="fs22 fs-5">Model Year</span>
                        <hr class="flex-grow-1 custom-line mx-3 ">
                        <span class="fs22 fs-5  fw-bold">2023</span>
                      </div> 
                      <div class="d-flex align-items-center">
                        <span class="fs22 fs-5">Market Price </span>
                        <hr class="flex-grow-1 custom-line mx-3 ">
                        <span class="fs22 fs-5  fw-bold">2000000 Rs</span>
                      </div> 
                </div>

            </div>
            <br>
            <br>
            @foreach ($data as $item)
            <div class="card-body ms-8   fixed-size-card mt-4" style="background-color: #e6f2f3">
                <div class="row" >
                    <div class="col-md-3 img-thumbnail text-center fixed-size">
                        <img src="{{$item->UploadLogo}}" width="200dp" height="75dp" alt="" class="img-fluid ">
                    </div>
                    <div class="col-md-6 middlecardadjust rate">
                        <div class="d-inline-block text-start">
                            <strong class=" d-inline-block fs16 mt-3 ms-2"> {{$item->CompanyName}}  </strong>
                        </div>
                        <div class="d-inline-block text-start">
                        
                            <strong class=" d-inline-block mt-3 ms-5">
                                <i class="fa-solid fa-chart-simple"></i>
                                Rate :</strong>
                            <p class="d-inline-block  ">{{$item->CompanyRate}}%</p>
                        </div>
                        <div class="d-inline-block text-start">
                            <strong class=" d-inline-block  ms-5">
                                <i class="fa-solid fa-building-columns"></i>
                                Company_Owner_Name:</strong>
                            <p class=" d-inline-block">{{$item->Company_Owner_Name}}</p>
                        </div>
                         <div class="d-inline-block text-start">
                            <strong class=" d-inline-block ms-5 me-3">
                                <i class="fa-solid fa-business-time"></i>
                                Motive Line :</strong>
                            <p class=" d-inline-block">{{$item->CompanyTagLine}} </p>
                        </div>
                    </div>
                    <div class="col-md-3 text-end " style="margin-left: 40px">
                        <div class="text-start">
                            <p class=" fw-bold d-inline-block ms-5">
                                <i class="fa-solid fa-money-check-dollar"></i>
                                Total :</p>
                        <p class="  d-inline-block">Rs 40,000</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-6">
                            <a href="\insurance_form" class="btn btn-primary" style="background-color: #f1b040">Apply Now</a>
                        </div>
                        
                    </div>
                    
                      

                </div>


            </div>
            @endforeach
            
        </div>
    </div>
@endsection
