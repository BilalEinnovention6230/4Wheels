<?php

use App\Http\Controllers\CarInsuranceController;
use App\Http\Controllers\CarRegistration;
use App\Http\Controllers\InstantMaintenaceController;
use App\Http\Controllers\InsuranceCompanyController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Route::get('/clear-cache', function () {
    // Clear application cache
    Artisan::call('cache:clear');

    // Clear configuration cache
    Artisan::call('config:clear');

    // Clear route cache
    Artisan::call('route:clear');

    // Clear view cache
    Artisan::call('view:clear');

    // Clear compiled views
    Artisan::call('view:cache');

    // Clear optimized class files
    Artisan::call('optimize:clear');

    return 'Cache cleared successfully!';
})->name('clear-cache');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/bookingcreated', [CarRegistration::class, 'bookingcreated'])->name('bookingcreated');

Route::post('/signup_form', [InstantMaintenaceController::class, 'signup'])->name('signup');

Route::post('/booking', [CarRegistration::class, 'booking'])->name('booking');
Route::post('/upload-image', [CarRegistration::class, 'storeImage'])->name('store');
Route::post('/isurance_company_register', [InsuranceCompanyController::class, 'company_register'])->name('insurance-company-register');
Route::get('/insurance_form/{id}', [InsuranceCompanyController::class, 'ContactUs']);
Route::post('/isurance_car_register', [CarInsuranceController::class, 'car_insurance'])->name('car_isurance');

Route::get('/car_buy', [CarRegistration::class, 'car_buy'])->name('car_buy');
Route::post('/carname', [CarRegistration::class, 'carname'])->name('carname');
Route::post('/city', [CarRegistration::class, 'city'])->name('city');
Route::post('/provinc', [CarRegistration::class, 'provinc'])->name('provinc');
Route::post('/pricerange', [CarRegistration::class, 'pricerange'])->name('pricerange');
Route::post('/years', [CarRegistration::class, 'years'])->name('years');
Route::post('/millage', [CarRegistration::class, 'millage'])->name('millage');
Route::post('/TransmissionType', [CarRegistration::class, 'TransmissionType'])->name('TransmissionType');
Route::post('/colour', [CarRegistration::class, 'colour'])->name('colour');
Route::post('/Engine', [CarRegistration::class, 'Engine'])->name('Engine');

// Route::get('flight', [App\Http\Controllers\FlightController::class, 'flight'])->name('flight');
Route::get('instantbooking', [App\Http\Controllers\InstantMaintenaceController::class, 'instantbooking'])->name('instantbooking');
Route::get('Maintanance', [App\Http\Controllers\InstantMaintenaceController::class, 'maintlending'])->name('Maintanance');
Route::get('shop', [App\Http\Controllers\MechanicShopController::class, 'shop']);
Route::get('mechaniclogin', [App\Http\Controllers\MechanicShopController::class, 'mechaniclogin'])->name('mechaniclogin');
Route::get('/mechanicdashboard/{id}', [App\Http\Controllers\MechanicShopController::class, 'mechanicdashboard'])->name('mechanicdashboard');
Route::post('loginsucces', [App\Http\Controllers\MechanicShopController::class, 'loginsucces'])->name('loginsucces');
Route::post('register', [App\Http\Controllers\MechanicShopController::class, 'register'])->name('register');
Route::get('workshops/{recordid}', [App\Http\Controllers\MechanicShopController::class, 'workshops'])->name('workshops');
Route::get('deletemyadd/{recordid}', [App\Http\Controllers\MechanicShopController::class, 'deletemyadd'])->name('deletemyadd');
Route::get('/deletebooking/{user_id}/{item_id}', [App\Http\Controllers\MechanicShopController::class, 'deletebooking'])->name('deletebooking');
Route::get('/workshop/{id}', [App\Http\Controllers\InstantMaintenaceController::class, 'viewdetails'])->name('workshop.viewdetails');
Route::get('/WebsiteLandingPage', [CarRegistration::class, 'cardata'])->name('WebsiteLandingPage');
Route::get('/Insurance', [InsuranceCompanyController::class, 'Insurance'])->name('Insurance');
Route::get('/login_form', [InstantMaintenaceController::class, 'login'])->name('login');
Route::get('/profile', [profileController::class, 'Profile'])->name('Profile');
Route::get('delete/{id}', [profileController::class, 'delete'])->name('delete');
Route::get('view/{id}', [profileController::class, 'view'])->name('view');

Route::get('/', function () {
    return view('login&signup\login');
});


Route::get('/new', function () {
    return view('login&signup\signup');
});

Route::get('workshopsdetails', function () {
    return view('CarMaintnance/workshopdetails');
});


//Ali Routes
Route::get('/nav', function () {
    return view('partial/navbar');
});

Route::get('/postadd', function () {
    return view('car dealer\PostedAdd_buyCar');
});
Route::get('/practice', function () {
    return view('partial/practice');
});
Route::get('/foot', function () {
    return view('partial/footer');
});
Route::get('/pre', function () {
    return view('partial/pra');
});
Route::get('/CarSell', [CarRegistration::class, 'Carselling'])->name('CarSell');
Route::get('/postadd/{id}', [CarRegistration::class, 'postadd'])->name('postadd');

Route::get('/Login_form', function () {
    return view('Login&signup\login');
});
Route::get('/signup_form', function () {
    return view('Login&signup\signup');
});
// Route::get('/insurance_form/{id}', function ($id) {
//     return view('Car Insurance\insurance_form', ['id' => $id]);
// });


// Route::get('/insurance_form', function () {
//     return view('Car Insurance\insurance_form');
// });
Route::get('/insurance_registration', function () {
    return view('Car Insurance\insurance_compnay_register');
});
// for signup
Route::get('/signup', function () {
    return view('user form\registration_form');
});
Route::get('/landingpage', function () {
    return view('landing page\landingpage');
});