<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New_Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NewProduct extends Controller
{
    public function index() {
        $new_products = New_Product::all(); 
        return view('list', compact('new_products'));
    }

    public function yourProduct() {
        $usuarioId = Auth::id();
        $new_products = New_Product::where('user_id', $usuarioId)->get(); 
        return view('myproduct', compact('new_products'));
    }

    public function create() {
        return view('/new_products');
    }

    public function store(Request $request) {

        $new_product = new New_Product;
        $new_product->title = $request->title;
        $new_product->value = $request->value;
        $new_product->description = $request->description;

        $user = Auth::user();
        $new_product->user_id = $user->id;

        $new_product->save();

        return redirect('/');

        

    }
    
}