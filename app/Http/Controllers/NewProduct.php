<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New_Product;

class NewProduct extends Controller
{
    public function index() {
        $new_products = New_Product::all(); 
        return view('list', compact('new_products'));
    }

    public function create() {
        return view('/new_products');
    }

    public function store(Request $request) {

        $new_product = new New_Product;
        $new_product->title = $request->title;
        $new_product->value = $request->value;
        $new_product->description = $request->description;
        $new_product->author = $request->author;

        $new_product->save();

        return redirect('/');

    }
}