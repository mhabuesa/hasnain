<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard()
    {
        $products = Product::all();
        return view('backend.index');
    }
}
