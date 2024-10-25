<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Helpers
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

}
