<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('products.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        products::create([
            'name'=>$request->name,
            'price'=>$request->price,
        ]);
        return redirect()->route('products.create')->with('success', 'Product Add successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $products = products::findorFail($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = products::findorFail($id);
        $products->name = $request->name;
        $products->title = $request->title;
        $products->email = $request->email;
        $products->save();
        return redirect()->route('products.edit',$products->id)->with('success', 'Product Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        products::findorFail($id)->delete();
        return redirect()->route('products.index')->with('error', 'Product Delete successfully.');
    }
}
