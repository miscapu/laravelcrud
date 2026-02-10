<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'created_at', 'updated_at')->get();
        $data = [
            'title' => 'Products',
            'products' => $products
        ];
        return view('Pages.Dashboard', $data);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function show(Product $product)
    {
        $data = [
            'title'     => 'Product View',
            'product'   =>  $product
        ];

        return view('Pages.Products.Show', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Product',
        ];
        return view('Pages.Products.Create', $data);
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        Product::create($request);
        return redirect()
            ->route('Products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $data = [
            'title' => 'Edit Product',
            'product' => $product
        ];
        return view('Pages.Products.Edit', $data);
    }

    public function update(Request $request, Product $product)
    {
        $request = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $product->update($request);
        return redirect()
            ->route('Products.index')
            ->with('success', 'Product updated successfully.');
    }



}
