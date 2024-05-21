<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="\css\bootstrap.css">
    <link rel="stylesheet" href="\cssfiles\nav.css">
    <!-- Include the Font Awesome CSS -->
    <link rel="stylesheet" href="\assets\fontawesome-free-6.4.0-web\css\all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- cdn --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <!-- Global Stylesheets Bundle(used by all pages) -->

    <link href="/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

    <link href="/plugins/global/test.css" rel="stylesheet" type="text/css" />

    <link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-qnJV0I2+6kPmXQ2OJ+mGjKu4LBWEPFa1i4EwzJueOvSjI6RyXrY+ZdFYzD+GJ+pR" crossorigin="anonymous">


</head>

<body>

    <nav>


        <div class="container-fluid">
            <img src="logo.png" class="imgn" alt="">
            <div class="text-end short" >
                @if (Route::currentRouteName() !== 'mechanicdashboard')
                <a href="{{ route('WebsiteLandingPage') }}" class="btn btn-light me-2">
                    Home
                </a>
            @endif
            
                <a href="new" class="btn btn-light  me-2">
                    Sign Out
                </a>
                <a href="{{ route('Profile') }}" class="text-white icon">
                    <i class="fas fa-user-circle fa-2x mt-5 me-5" ></i>
                </a>
            </div>
        </div>


    </nav>
