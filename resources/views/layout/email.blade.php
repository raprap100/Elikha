<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Likha</title>
    <!-- Include any additional styles or CSS frameworks here -->
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* Email container styles */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Email content styles */
        .content {
            padding: 20px;
        }

        /* Footer styles */
        .footer {
            background-color: #007BFF;
            color: #ffffff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->

        <!-- Email content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </div>
</body>
</html>
