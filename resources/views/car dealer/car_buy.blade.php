@extends('partial.practice')
@section('content')
    <div class="container ">

        <div class="row pt-4 ">
            <div class="col-md-3">
                <button disabled class=" btn btn-primary btn-block px-5 w-">
                    Show Result By:
                </button>
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingOne">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Search Filter
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li>Lahore</li>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Search by keyword  --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Search by keyword
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="input-group mb-3">
                                    <form action="{{ route('carname') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" class="form-control" id="carSearch" placeholder="Civic"
                                            name="Car_Name">
                                        <button type="submit" class="btn btn-sm btn-danger pe-3">Go</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- for city --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Select City
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <form action="{{ route('city') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <label>Select Cities:</label><br>
                                        <input type="checkbox" name="cities" value="lahore"> Lahore<br>
                                        <input type="checkbox" name="cities" value="karachi"> Karachi<br>
                                        <input type="checkbox" name="cities" value="islamabad"> Islamabad<br>
                                        <input type="checkbox" name="cities" value="peshawar"> Peshawar<br>
                                        <input type="checkbox" name="cities" value="quetta"> Quetta<br>
                                        <input type="checkbox" name="cities" value="multan"> Multan<br>
                                        <button type="submit" class="btn btn-sm btn-danger pe-3"
                                            id="more-cities-btn">Filter Result</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PROVINCE --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                SELECT PROVINCE
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('provinc') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Select Provinces:</label><br>
                                    <input type="checkbox" name="province" value="punjab"> Punjab<br>
                                    <input type="checkbox" name="province" value="sindh"> Sindh<br>
                                    <input type="checkbox" name="province" value="kpk"> Khyber Pakhtunkhwa<br>
                                    <input type="checkbox" name="province" value="balochistan"> Balochistan<br>
                                    <input type="checkbox" name="province" value="gilgit"> Gilgit-Baltistan<br>
                                    <input type="checkbox" name="province" value="kashmir"> Azad Kashmir<br>
                                    <button type="submit" class="btn btn-sm btn-danger pe-3" id="more-cities-btn">Filter
                                        Result</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- make --}}
                {{-- PRICE RANGE  --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Price Rnage
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="input-group mb-3">
                                    <form action="{{ route('pricerange') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="price1" laceholder="Minimum"
                                            class="form-control me-2">
                                        <span class="mx-2">-</span>
                                        <input type="text" name="price-from" placeholder="Maximum"
                                            class="form-control">
                                        <button type="submit" class="btn btn-danger">Go</button>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- for YEAR --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                YEARS
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">

                                <div class="input-group mb-3">
                                    <form action="{{ route('years') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="start-year" placeholder="From" class="form-control">
                                        <span class="mx-2">-</span>
                                        <input type="text" name="end-year" placeholder="To"
                                            class="form-control me-2">
                                        <button type="submit" class="btn btn-danger">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Milage --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Milage
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="input-group mb-3">
                                    <form action="{{ route('millage') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="start-millage" placeholder="From"
                                            class="form-control">
                                        <span class="mx-2">-</span>
                                        <input type="text" name="end-millage" placeholder="To"
                                            class="form-control me-2">
                                        <button type="submit" class="btn btn-danger">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Registration --}}

                {{-- Trusted car  --}}

                {{-- Transmission --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Transmission
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('TransmissionType') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label>Select Transmission:</label><br>
                                    <input type="checkbox" name="Transmission" value="Automatic">Automatic<br>
                                    <input type="checkbox" name="Transmission" value="Manual"> Manual<br>
                                    <button type="submit" class="btn btn-danger">Go</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- Color --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Color
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('colour') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="car-color">Select car color:</label><br>
                                    <input type="checkbox" id="red" name="car-color" value="red">
                                    <label for="red">Red</label><br>
                                    <input type="checkbox" id="blue" name="car-color" value="blue">
                                    <label for="blue">Blue</label><br>
                                    <input type="checkbox" id="green" name="car-color" value="green">
                                    <label for="green">Green</label><br>
                                    <input type="checkbox" id="white" name="car-color" value="white">
                                    <label for="white">White</label><br>
                                    <button type="submit" class="btn btn-danger">Go</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Engin Type  --}}
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Engin Type
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('Engine') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Select Engine Type:</label><br>
                                    <input type="checkbox" name="engine_type" value="Petrol"> Petrol<br>
                                    <input type="checkbox" name="engine_type" value="Diesel"> Diesel<br>
                                    <input type="checkbox" name="engine_type" value="Hybrid"> Hybrid<br>
                                    <input type="checkbox" name="engine_type" value="Electric"> Electric<br>
                                    <button type="submit" class="btn btn-danger">Go</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Engin Capacity  --}}
             
                {{-- Assembly --}}
         
                {{-- Model Catergories --}}
          
                {{-- saller type --}}
             
                {{-- Picture Avaliablity --}}
           
                {{-- AD Type --}}
              
            </div>

            <div class="col-md-9 backcolor">
                @foreach ($data as $item)
                    <div class="card  mt-5 ms-5">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{$item->image1}}" width="100%" height="185dp"
                                        alt="">
                                </div>
                                <div class="col-md-6 middlecardadjust">
                                    <div class="container">
                                        <a href="{{ route('postadd', ['id' => $item->id]) }}" class="BodyTexAdjust">{{ $item->CarName }} {{ $item->GearBox }} For sale</a>
                                            <p class="mt-3">{{$item->City}}</p>
                                        <div class="row border-right mt-4">
                                            <div class="col">{{$item->years}}</div>
                                            <div class="col">{{$item->CarColor}} Car</div>
                                            <div class="col">{{$item->EnginType}}</div>
                                            <div class="col">{{$item->EngineSize}} CC</div>
                                            <div class="col">{{$item->GearBox}}</div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">ADD posted date: 02/08/2023</div>
    
                                        </div>
                                        
                                    </div>
    
                                </div>
                                <div class="col-md-3 d-flex flex-column">
                                    <h3 class="BodyTexAdjust"> PKR {{$item->CarPrice}}Rs</h3>
                                    <div class="mt-auto">
                                        <button class="btn btn-light btn-sm"> 
                                            <i class="far fa-heart"></i>
                                        </button>
                                      <button class="btn btn-success btn-sm"> Show Phone number </button>
                                    </div>
                                </div>
                                  
    
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
<script>
    const accordianHeading = document.querySelector('.click');
    const ul = accordianHeading.querySelector('ul');

    accordianHeading.addEventListener('click', () => {
        ul.style.display = ul.style.display === 'none' ? 'block' : 'none';
    });
    // for more choose city 
    const moreCitiesBtn = document.getElementById('more-cities-btn');
    const moreCitiesDiv = document.getElementById('more-cities');
    moreCitiesBtn.addEventListener('click', function() {
        if (moreCitiesDiv.style.display == 'none') {
            moreCitiesDiv.style.display = 'block';
            moreCitiesBtn.textContent = 'Less Cities';
        } else {
            moreCitiesDiv.style.display = 'none';
            moreCitiesBtn.textContent = 'More Cities';
        }
    });
    // 
    // script for car model
    const moreModelsBtn = document.getElementById('more-models-btn');
    const moreModelsDiv = document.getElementById('more-models');
    moreModelsBtn.addEventListener('click', function() {
        if (moreModelsDiv.style.display === 'none') {
            moreModelsDiv.style.display = 'block';
            moreModelsBtn.textContent = 'Less Models';
        } else {
            moreModelsDiv.style.display = 'none';
            moreModelsBtn.textContent = 'More Models';
        }
    });
</script>
@section('script')
@endsection
