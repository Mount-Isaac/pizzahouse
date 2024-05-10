<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountVerifyController extends Controller
{
    //verify user account
    
    public function index ($token) {
        $status_code = '404';

        return view('auth.verifyaccount', ['token'=> $token]);
    }
}
