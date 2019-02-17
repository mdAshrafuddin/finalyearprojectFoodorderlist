<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DhakaController extends Controller
{
    public function index()
    {
        return view('frontend.city.dhaka');
    }
}
