<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting Us</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; background-color: #f9f9f9; padding: 20px;">

    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ asset('public/images/logo/urlwebwala.png') }}" alt="URLWebwala Logo" style="width: 150px;">
    </div>

    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px;">
        <h2>Hello {{ (isset($name) ? $name : 'Admin') }},</h2>

        <p>Thank you for reaching out to us at <strong>URLWebwala</strong>! We’ve received your message and our team will get back to you as soon as possible.</p>

        <p><strong>Here’s a quick summary of your inquiry:</strong></p>

        <ul>
            <li><strong>Name:</strong> {{ (isset($name) ? $name : 'Admin') }}</li>
            <li><strong>Email:</strong> {{ (isset($email) ? $email : '') }}</li>
            <li><strong>Phone:</strong> {{ (isset($mobile) ? $mobile : '') }}</li>
            <li><strong>Service Interested:</strong> {{ (isset($serviceName) ? $serviceName : '') }}</li>
            <li><strong>Message:</strong> {{ (isset($commentMessage) ? $commentMessage : '') }}</li>
        </ul>

        <p>We appreciate your interest in our services. If your inquiry is urgent, feel free to call us directly at <a href="tel:+918084033396">+91 8084033396</a>.</p>

        <p>Best regards, <br>
        <strong>Team URLWebwala</strong><br>
        <a href="https://www.urlwebwala.com">www.urlwebwala.com</a></p>
    </div>

    <div style="text-align: center; margin-top: 30px; font-size: 14px;">
        <p>Follow us on:</p>
        <a href="https://www.facebook.com/share/18aStSgd8m/" style="margin: 0 10px; text-decoration: none;">
            <img src="{{ asset('public/images/logo/facebook.jpeg') }}" alt="Facebook" width="24">
        </a>
        <a href="https://www.instagram.com/urlwebwala" style="margin: 0 10px; text-decoration: none;">
            <img src="{{ asset('public/images/logo/instagram.jpeg') }}" alt="Instagram" width="24">
        </a>
        <a href="https://www.linkedin.com/company/urlwebwala-pvt-ltd/" style="margin: 0 10px; text-decoration: none;">
            <img src="{{ asset('public/images/logo/linkdin.jpeg') }}" alt="LinkedIn" width="24">
        </a>
        <p style="margin-top: 10px;">&copy; {{ date('Y') }} Urlwebwala All rights reserved.</p>
    </div>

</body>
</html>
