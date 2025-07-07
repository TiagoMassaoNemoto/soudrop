<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all(); 
        return view('products.list', compact('products'));
    }

    public function yourProduct() {
        $usuarioId = Auth::id();
        $products = Product::where('user_id', $usuarioId)->get(); 
        return view('products.myproduct', compact('products'));
    }

    public function create() {
        return view('products.newproduct');
    }

    public function store(Request $request) {

        $products = new Product;
        $products->title = $request->title;
        $products->value = $request->value;
        $products->description = $request->description;

        $user = Auth::user();
        $products->user_id = $user->id;

        $products->save();

        return redirect('/myproduct');

    }
    
    public function destroy($id) {

        Product::findOrFail($id)->delete();

        return redirect('/myproduct');

    }

    public function edit($id) {

        $products = Product::findOrFail($id);

        return view('/product/productedit', ['product' => $edit]);
    }

}