@extends('partial.practice')

@section('content')
<div class="container mt-5">
    <!-- Company Information Section -->
    <div class="row justify-content-center">
        <div class="col-md-8 text-center bg-white p-5 rounded shadow-sm border border-danger">
            <div class="d-flex align-items-center justify-content-start mb-4">
                <img src="{{ $contactpage->UploadLogo }}" alt="{{ $contactpage->CompanyName }} Logo" class="img-fluid" style="max-width: 150px;">
            </div>
            <h1 class="mb-3 text-danger">{{ $contactpage->CompanyName }}</h1>
            <p class="lead mb-4">{{ $contactpage->CompanyTagLine }}</p>
            <p class="mb-4 text-dark">
                Welcome to {{ $contactpage->CompanyName }}! We are dedicated to providing the best insurance services in the industry. 
                Our team of experts is here to assist you with any questions or concerns you may have. 
                Whether you are looking for auto, home, life, or business insurance, we have comprehensive solutions tailored to your needs. 
                Customer satisfaction is our top priority, and we strive to offer personalized service to ensure you have peace of mind. 
                Contact us today to learn more about our services and how we can help protect what matters most to you.
            </p>
            <div class="text-dark">
                <p><strong>Landline Number:</strong> {{ $contactpage->Landline_Number }}</p>
                <p><strong>Contact Number:</strong> {{ $contactpage->Company_Contact_Number }}</p>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            <div class="bg-white p-5 rounded shadow-sm border border-danger">
                <h2 class="mb-4 text-danger">Contact Us</h2>
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label text-dark">Email Address</label>
                        <input type="email" class="form-control border border-danger" id="email" name="email" required>
                    </div>
                    <input type="tel" class="form-control border border-danger"   value="{{$contactpage->Working_Gmail}}" id="contact_number" name="Working_Gmail" hidden>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label text-dark">Contact Number</label>
                        <input type="tel" class="form-control border border-danger" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label text-dark">Car Modal</label>
                        <input type="tel" class="form-control border border-danger" id="contact_number" name="carmodal" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>

            <!-- Social Media Links Footer -->
            <div class="text-center mt-4">
                <h5 class="text-dark">Follow Us</h5>
                <div class="mb-3 ms-3">
                    <a href="{{ $contactpage->Facebook_Link }}" class="me-5 ">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="{{ $contactpage->InstaGramm_Link }}" class="me-5 ">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="mailto:{{ $contactpage->Working_Gmail }}" class="">
                        <i class="fas fa-envelope fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
