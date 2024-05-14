@extends('partial.practice')
@section('content')
    <div class="form_adjust slider_button " style="padding: 40px ; ">
        <form method="POST" action="{{route('car_isurance')}}">
            @csrf
            <div class="row">
                <h4 style="color:#ffff " class="me-3">Your Information </h4>
                <div class="col">

                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2 " for="valid">First Name :*</label>
                        <input type="text" class="form-control w-35 ms-5" id="fullname" placeholder="i.e John"
                            name="Fname">
                            <span class="text-danger">
                                @error('Fname')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4s positionadjust">
                        <label class="form-label pt-2 " for="valid">Second Name :*</label>
                        <input type="text" class="form-control w-35 ms-4" id="fullname" placeholder="i.e Doe"
                            name="Lname">
                            <span class="text-danger">
                                @error('Lname')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2 " for="valid">Current Address: </label>
                        <input type="text" class="form-control w-75 ms-1 pt-2" id="fullname" placeholder=""
                            name="CurrentAddress">
                            <span class="text-danger">
                                @error('CurrentAddress')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2 " for="valid">Parmanent Adress:</label>
                        <input type="text" class="form-control w-75  pt-2" id="fullname"
                            placeholder="Narang mandi   ,     dara ashraf   ,    Narowall    ,  Punjab   "
                            name="ParmanentAdress">
                            <span class="text-danger">
                                @error('ParmanentAdress')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label for="" class=" pt-2">CNIC number :</label>
                        <input type="text" name="cnic" class=" form-control ms-5" id="I_CNIC" placeholder="35401677645469">
                        <span class="text-danger">
                            @error('cnic')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2  pt-3" for="valid">Country /
                            State:*</label>
                        <select name="Country" class="form-control w-35 ms-4" id="c">
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
                            @error('Country')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2 " for="valid">Postcode :*</label>
                        <input type="text" class="form-control w-35 ms-5" id="fullname" placeholder=""
                            name="Postcode">
                            <span class="text-danger">
                                @error('Postcode')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2 " for="valid">Telephone Number
                            :*</label>
                        <input type="text" class="form-control w-35 " id="fullname" placeholder="+923480332899"
                            name="TelephoneNumber">
                            <span class="text-danger">
                                @error('TelephoneNumber')
                                    {{ $message }}
                                @enderror
                                </span>
                    </div>
                </div>
            </div>
            <div class="row ">
                <h4 style="color:#ffff " class="me-3 pt-5">Car Information </h4>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2  pt-3" for="valid">Make *</label>
                        <select name="Make" class="form-control w-35 ms-1" id="c">
                            <option value="AF">Toyota</option>
                            <option value="AR">Volkswagen Group</option>
                            <option value="AU">General Motors</option>
                            <option value="AT">Ford</option>
                            <option value="BE">Honda</option>
                            <option value="BR">BMW</option>
                            <option value="BG">Mercedes-Benz</option>
                            <option value="CA"> Nissan</option>
                            <option value="CL">Hyundai</option>
                            <option value="CN">Kia</option>
                            <option value="CO">Tesla</option>
                            <option value="CR">Fiat Chrysler Automobiles</option>
                            <option value="HR">Subaru</option>
                            <option value="CY">Mazda</option>
                            <option value="CZ">Mitsubishi</option>
                            <option value="DK">Volvo</option>
                            <option value="FI">Land Rover </option>
                            <option value="FR">Renault</option>
                            <option value="DE">Peugeot</option>
                            <option value="GI">Suzuki</option>
                        </select>
                        <span class="text-danger">
                            @error('Make')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2  pt-3 ms" for="valid">Car Models : *</label>
                        <select name="CarModels" class="form-control w-35 ms-5" id="c">
                            <option value="Corolla">Toyota Corolla</option>
                            <option value="Golf">Volkswagen Golf</option>
                            <option value="Cruze">Chevrolet Cruze</option>
                            <option value="Mustang">Ford Mustang</option>
                            <option value="Civic">Honda Civic</option>
                            <option value="3 Series">BMW 3 Series</option>
                            <option value="E-Class">Mercedes-Benz E-Class</option>
                            <option value="Altima">Nissan Altima</option>
                            <option value="Sonata">Hyundai Sonata</option>
                            <option value="Optima">Kia Optima</option>
                            <option value="Model 3">Tesla Model 3</option>
                            <option value="Cherokee">Jeep Cherokee</option>
                            <option value="Impreza">Subaru Impreza</option>
                            <option value="CX-5">Mazda CX-5</option>
                            <option value="Outlander">Mitsubishi Outlander</option>
                            <option value="XC90">Volvo XC90</option>
                            <option value="Range Rover">Land Rover Range Rover</option>
                            <option value="Clio">Renault Clio</option>
                            <option value="308">Peugeot 308</option>
                            <option value="Swift">Suzuki Swift</option>
                        </select>
                        <span class="text-danger">
                            @error('CarModels')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2  pt-3 ms-2" for="valid">Year *</label>
                        <select name="Year" class="form-control w-35 " id="c"
                            onchange="showSelectedYear(this.value)">
                            <option value="">Select Year</option>
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
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                        <span class="text-danger">
                            @error('Year')
                                {{ $message }}
                            @enderror
                            </span>
                        <!-- Display selected year -->
                        <div id="selected-year"></div>


                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 positionadjust">
                        <label class="form-label pt-2" for="valid"> Estimate Car Price :*</label>
                        <input type="text" class="form-control w-35 " id="fullname" name="EstimateCarPrice">
                        <span class="text-danger">
                            @error('EstimateCarPrice')
                                {{ $message }}
                            @enderror
                            </span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2">
                <button class="btn btn-success text-center" type="submit">Submit</button>
            </div>
            @if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Show the modal on page load if there is a success message
    $(document).ready(function () {
        $('#successModal').modal('show');
    });
</script>   
@endif

        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#registration-status").change(function() {
                if ($(this).val() == 1 || $(this).val() === "") {
                    $("#registration-number-field").hide();
                } else {
                    $("#registration-number-field").show();
                }
            });
        });

        $(document).ready(function() {
            var mask = IMask(
                document.getElementsByClassName('insurance_cnic')[0], {
                    mask: '00000-0000000-0'
                });
        });
    </script>
    <script>
        var select = document.getElementById("c");
        var currentYear = new Date().getFullYear();

        for (var year = 2023; year >= 1990; year--) {
            var option = document.createElement("option");
            option.value = year;
            option.text = year;
            select.appendChild(option);
        }
    </script>



    </div>
@endsection
