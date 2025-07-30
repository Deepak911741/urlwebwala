<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Subscribing</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4; padding: 20px;">

    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ url('public/images/logo/urlwebwala.png') }}" alt="URLWebwala Logo" style="width: 150px;">
    </div>

    <div style="background-color: #fff; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto;">

        <h2 style="color: #333;">Hello!</h2>

        <p>Thank you for subscribing to <strong>URLWebwala</strong>'s newsletter!</p>

        <p>We’ve received your subscription and added your details to our notification list. You’ll now receive updates about our offers, discounts, and services.</p>

        <h4 style="color: #444;">Subscription Details:</h4>
        <ul style="padding-left: 20px;">
            <li><strong>Email:</strong> {{ (isset($email) ? $email : '') }}</li>
            <li><strong>Phone:</strong> {{ (isset($mobile) ? $mobile : '') }}</li>
            <li><strong>Service Interested:</strong> {{ (isset($serviceName) ? $serviceName : '') }}</li>
        </ul>

        <p>If you have any questions or need support, feel free to <a href="mailto:info@urlwebwala.com">contact us</a>.</p>

        <p>Thank you again!<br>
        <strong>Team URLWebwala</strong></p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
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

        <p style="font-size: 13px; color: #888; margin-top: 10px;">&copy; {{ date('Y') }} URLWebwala All rights reserved.</p>
    </div>

</body>
</html>
