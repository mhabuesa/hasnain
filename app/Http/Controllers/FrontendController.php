<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\MainBanner;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $main_banner = MainBanner::first();
        $banners = Banner::where('status', 1)->orderBy('updated_at', 'desc')->get();
        $products = Product::where('status', 1)->latest()->take(25)->get();
        $categories = Category::where('status', 1)->get();
        return view('frontend.index', [
            'main_banner' => $main_banner,
            'banners' => $banners,
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function product_details($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $galleries = $product->gallery;
        return view('frontend.product_details', [
            'product' => $product,
            'galleries' => $galleries
        ]);
    }
}
