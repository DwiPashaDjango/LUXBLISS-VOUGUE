<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $product = Product::with('designer');

        if (!empty($search)) {
            $product->where('nm_produk', 'like', '%' . $search . '%')->paginate(8);
        }

        $products = $product->orderBy('id', 'DESC')->paginate(8);

        return view('pages.product.product', compact('products'));
    }

    public function show(string $id)
    {
        $product = Product::with('designer')->where('id', $id)->first();
        return view('pages.product.detail', compact('product'));
    }
}
