<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Helpers
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
