<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class sendWelcomeEmailController extends Controller {
    
    // Inside your controller method or wherever you want to send the email
    public function index()
    {
        $username = "Isaac"; // Assuming you have a logged-in user
        $email  = "onlinewritingjobs34@gmail.com";
        $imagePath = public_path('images/pizza.jpg');
    
        Mail::to($email)->send(new WelcomeMail($username, $imagePath));
    }
}
