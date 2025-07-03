<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New_Product;

class NewProduct extends Controller
{
    public function index() {
        $new_product = New_Product::all(); 
        return view('list',['new_product' => $new_product]);

    }
}
