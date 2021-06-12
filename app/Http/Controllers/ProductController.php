<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('create');
    }

    public function store(Request $request){
        Product::create([
            'name' => $request->name,
            'color' => $request->color,
            'material' => $request->material,
            'price' => $request->price
        ]);
        return redirect('/product');
    }

    public function listProduct(){
        $products = Product::all();
        return view('list', compact('products'));
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update($id, Request $request){
        Product::findOrFail($id)->update([
            'name' => $request->name,
            'color' => $request->color,
            'material' => $request->material,
            'price' => $request->price
        ]);
        return redirect('/product');
    }

    public function delete($id){
        Product::destroy($id);
        return back();
    }
}
