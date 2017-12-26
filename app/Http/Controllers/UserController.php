<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct() {
        if (Auth::check()) {
            // user is valid
        }else{
            return redirect('/auth/login');
        }
    }
    public function getLogout() {
        Auth::logout();
        return redirect('/auth/login');
    }
}
