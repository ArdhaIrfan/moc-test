<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }
}
