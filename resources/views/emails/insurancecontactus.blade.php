<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Inquiry</title>
</head>
<body>
    <h1>Contact Us Inquiry</h1>
    <p>Dear {{ $user->name }},</p>
    <p>Thank you for reaching out to us. Here are the details of your inquiry:</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Contact Number:</strong> {{ $contactNumber }}</p>
    <p>We will get back to you as soon as possible.</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
