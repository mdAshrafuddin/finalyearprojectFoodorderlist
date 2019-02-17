<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KhulnaController extends Controller
{
    public function index()
    {
        return view('frontend.city.khulna');
    }
}
