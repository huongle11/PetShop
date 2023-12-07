<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return ProductResource::collection(Product::all()); 
        $products = ProductResource::collection(Product::all());

        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $name = "asd";
        $products = ProductResource::collection(Product::all());
        return view('main', compact('name','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'price.base_price' => 'required|numeric',
            'price.sales' => 'required|numeric',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image ?? '',
        ]);

        $product->Price()->create([
            'base_price' => $request->price['base_price'],
            'sales' => $request->price['sales'],
        ]);

        $product->Stock()->create([
            'quantity' => $request->quantity,
        ]);

        return redirect(url('product'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string', 
            'quantity' => 'required|integer',
            'price.base_price' => 'required|numeric',
            'price.sales' => 'required|numeric',
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image ?? ''
        ]);

        $product->Price()->update([
            'base_price' => $request->price['base_price'],
            'sales' => $request->price['sales']
        ]);

        $product->Stock()->update([
            'quantity' => $request->quantity,
        ]);

        return redirect(url('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->Price()->delete();
        $product->Stock()->delete();
        $product->delete();
        return redirect(url('product'));
    }
}
