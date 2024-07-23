<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentedController extends Controller
{
    public function index()
    {
        $rents = Rent::with('product', 'return_product')
            ->where('users_id', Auth::user()->id)
            ->withCount('return_product')
            ->orderBy('id', 'DESC')
            ->get();
        return view('pages.rented.index', compact('rents'));
    }

    public function show()
    {
        return view('pages.rented.show');
    }

    public function generateRentInvoice($invoice)
    {
        $rents = Rent::with('product', 'user')->where('invoice', $invoice)->first();
        return view('pages.rented.invoice-sewa', compact('rents'));
    }
}
