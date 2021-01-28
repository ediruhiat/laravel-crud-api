<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Specs;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all products
        $products = Product::all();

        foreach($products as $product){
            $product->brand = Brand::find($product->brand_id)->brand_name;
            $product->specs = Specs::find($product->specs_id);
        }

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create product
        $request->validate([
            'slug' => ['required', 'unique:products,slug'],
            'brand_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);
        
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get single product
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update product
        $product = Product::find($id);
        $product->update($request->all());
        $product->status = "Updated successfully.";

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete product
        $product = Product::find($id);
        Product::destroy($id);
        $product->status = "Deleted successfully.";

        return $product;
    }
}
