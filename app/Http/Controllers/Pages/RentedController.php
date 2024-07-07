<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentedController extends Controller
{
    public function index()
    {
        return view('pages.rented.index');
    }

    public function show()
    {
        return view('pages.rented.show');
    }
}
