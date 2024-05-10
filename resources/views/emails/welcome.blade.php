<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>

    <style>
        /* Reset CSS */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-left: 10px;
        }

        /* Wrapper */
        .wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
        }

        /* Content */
        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        /* Button */
        .btn {
            /* display: inline-block; */
            padding: 10px 20px;
            width: 110px;
            height: 43px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }


        /* Footer */
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .pizza-info {
            display: flex;
            flex-direction: column;
            padding: 10px;
            /* margin-left: 10px; */
        }
    </style>

</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="col-12 p-3 bg-light text-dark">
            <h1>Pizza House Offers 🔥</h1>
        </div>

        <!-- Content -->
        <div class="row">
            <p>Dear {{ $username }},</p>
            <p class='mb-4'>We're thrilled to have you join us. Thank you for signing up!</p>

            <!-- Button -->
            <div class='pizza-info'>
                <a href="{{ $buttonUrl }}" class="btn">{{ $buttonText }}</a>
                
                <img src="{{ $message->embed($imagePath) }}" alt="Welcome Image" style="margin-top: 20px; height: 100px; border-radius: 50%">
            </div>
        </div>

        <!-- Footer -->
        <div class="d-flex justify-content-center">
            &copy; {{ date('Y') }} Pizza House. All rights reserved.
        </div>
    </div>
</body>
</html>
