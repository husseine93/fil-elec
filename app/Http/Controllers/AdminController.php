<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use cart;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'detail' => 'required|max:500',
            'price'=> 'required|max:4',
            'quantity' => 'required|max:2'
        ]);
    
        $product = new Product;
        $product->id=$request->id;
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
    
        return back()->with('message', "Le produit a bien été créée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'detail' => 'required|max:500',
            'price'=> 'required|max:4',
            'quantity' => 'required|max:2'
        ]);
    
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
    
        return back()->with('message', "Le produit a bien été modifiée !");        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
