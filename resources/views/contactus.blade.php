@extends('partial.practice')
@section('content')
<title>Contact Us - 4 Wheels</title>
  <style>
    /* Custom CSS */
   
    .contact-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin-top: 40px;
    }
    .contact-methods {
      margin-bottom: 30px;
    }
    .contact-methods h4 {
      margin-top: 0;
    }
    .contact-methods p {
      margin: 5px 0;
    }
    .social-media-links a {
      display: inline-block;
      margin-right: 10px;
      color: #007bff;
    }
    .feedback-email {
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container contact-container">
    <h2>Contact Us</h2>
    <div class="row">
      <div class="col-md-6 contact-methods">
        <h4>General Inquiries:</h4>
        <p>Email: <a href="mailto:contact@4wheelsplatform.com">contact@4wheelsplatform.com</a></p>
        <p>Phone: +123-456-7890</p>
      </div>
      <div class="col-md-6 contact-methods">
        <h4>Technical Support:</h4>
        <p>Email: <a href="mailto:techsupport@4wheelsplatform.com">techsupport@4wheelsplatform.com</a></p>
        <p>Phone: +123-456-7890</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 contact-methods">
        <h4>Business Partnerships:</h4>
        <p>Email: <a href="mailto:partnerships@4wheelsplatform.com">partnerships@4wheelsplatform.com</a></p>
        <p>Phone: +123-456-7890</p>
      </div>
      <div class="col-md-6 contact-methods">
        <h4>Address:</h4>
        <p>4 Wheels Platform</p>
        <p>123 Car Avenue</p>
        <p>Cityville, State 12345</p>
        <p>Country</p>
      </div>
    </div>
    <div class="row social-media-links">
      <div class="col-md-6 contact-methods">
        <h4>Connect with Us:</h4>
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">Twitter</a>
        <a href="#" target="_blank">Instagram</a>
      </div>
    </div>
    <div class="row feedback-email">
      <div class="col-md-12">
        <h4>Feedback:</h4>
        <p>We value your input and are committed to continuously improving the "4 Wheels" platform. If you have any suggestions or feedback, please let us know:</p>
        <p>Email: <a href="mailto:feedback@4wheelsplatform.com">feedback@4wheelsplatform.com</a></p>
      </div>
    </div>
  </div>
  @endsection