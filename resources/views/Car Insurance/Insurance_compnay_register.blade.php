@extends('partial.practice')
@section('content')
    <div class="container-fluid " style="background-color: #F2F3F3">
        <div class="form_adjust" style="background-color: #F2F3F3 ; padding:70px">
            <form action="{{ route('insurance-company-register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row pt-3 " style="background-color: #ffff">
                    <strong>

                        <h3 style="color:cornflowerblue" class="text-center"> Register your Company
                            <i class="fa-solid fa-registered"></i>
                        </h3>
                    </strong>
                    <div class="col-md-4 text-end ">
                        <i class="fa-solid fa-building"></i>
                        <label class="form-label pt-2" for="valid"> CompanyName :*</label>
                    </div>
                    <div class="col-md-8">
                     <input type="text" class="form-control w-75" id="fullname" name="CompanyName">
                     <span class="text-danger">
                        @error('CompanyName')
                            {{ $message }}
                        @enderror
                        </span>
                    </div>
                    
                </div>

                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-regular fa-bullseye"></i>
                        <label class="form-label pt-2" for="valid"> CompanyObjective:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control w-75" id="fullname" name="CompanyObjective">
                        <span class="text-danger">
                            @error('CompanyObjective')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-brands "></i>
                        <label class="form-label pt-2" for="valid"> Company Tag Line:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control w-75" id="fullname" name="CompanyTagLine">
                        <span class="text-danger">
                            @error('CompanyTagLine')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-regular fa-bullseye"></i>
                        <label class="form-label pt-2" for="valid"> Company Rate*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" class="form-control w-75" id="fullname" name="CompanyRate">
                        <span class="text-danger">
                            @error('CompanyRate')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-solid fa-user"></i>
                        <label class="form-label pt-2" for="valid"> Company_Owner_Name :*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control w-75" id="fullname" name="Company_Owner_Name">
                        <span class="text-danger">
                            @error('Company_Owner_Name')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-solid fa-address-book"></i>
                        <label class="form-label pt-2" for="valid"> Company_Contact_Number :*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" class="form-control w-75" id="fullname" name="Company_Contact_Number">
                        <span class="text-danger">
                            @error('Company_Contact_Number')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-solid fa-phone"></i>
                        <label class="form-label pt-2" for="valid"> Landline_Number:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" class="form-control w-75" id="fullname" name="Landline_Number">
                        <span class="text-danger">
                            @error('Landline_Number')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-solid fa-envelope"></i>
                        <label class="form-label pt-2" for="valid"> Working_Gmail:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control w-75" id="fullname" name="Working_Gmail">
                        <span class="text-danger">
                            @error('Working_Gmail')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-brands fa-facebook"></i>
                        <label class="form-label pt-2" for="valid"> Facebook_Link:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control w-75" id="fullname" name="Facebook_Link">
                        <span class="text-danger">
                            @error('Facebook_Link')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <i class="fa-brands fa-square-instagram"></i>
                        <label class="form-label pt-2" for="valid"> InstaGramm_Link:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control w-75" id="fullname" name="InstaGramm_Link">
                        <span class="text-danger">
                            @error('InstaGramm_Link')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                    
                </div>
                <div class="row pt-3 " style="background-color: #ffff">
                    <div class="col-md-4 text-end">
                        <label class="form-label pt-2" for="valid"> Upload Logo:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" class="form-control w-75" id="fullname" name="UploadLogo">
                        <span class="text-danger">
                        @error('UploadLogo')
                        {{ $message }}
                    @enderror
                        </span>
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mt-4 w-35" type="submit">Submit</button>
                    </div>
                    
                </div>
            </form>

        </div>
    </div>
@endsection
