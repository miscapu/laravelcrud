<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'created_at', 'updated_at')->get();
        $data = [
            'title' => 'Products',
            'products' => $products
        ];
        return view('Pages.Dashboard', $data);
    }
}
