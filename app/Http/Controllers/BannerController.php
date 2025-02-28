<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\MainBanner;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        $main_banner = MainBanner::first();
        $products = Product::where('status', 1)->latest()->get();
        return view('backend.banner.index', [
            'banners' => $banners,
            'products' => $products,
            'main_banner' => $main_banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.banner.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'product_id' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Save image
        $image = $this->saveImage('banner', $request->file('image'));

        // Calculate status
        $status = Banner::where('status', 1)->count() < 5 ? 1 : 0;

        // Create banner
        Banner::create([
            'product_id' => $request->product_id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'short_title' => $request->short_title,
            'image' => $image,
            'status' => $status,
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner Added Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        $products = Product::all();
        return view('backend.banner.edit', compact('banner', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'product_id' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $banner = Banner::find($id);
        if ($request->hasFile('image')) {
            $this->deleteImage(public_path($banner->image)); // Delete old image
            $image = $this->saveImage('banner', $request->file('image'));
        }
        $banner->update([
            'product_id' => $request->product_id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'short_title' => $request->short_title,
            'image' => $image ?? $banner->image,
        ]);
        return redirect()->route('banner.index')->with('success', 'Banner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);

        try {
            if ($banner->image) {
                $this->deleteImage(public_path($banner->image)); // Delete old image
            }
            $banner->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Banner Deleted Successfully'], 200);
    }

    public function status_update($id)
    {
        $banner = Banner::find($id);

        // Check if there are already 5 banners Active
        if (Banner::where('status', 1)->count() >= 5 && $banner->status == 0) {
            return response()->json(['success' => false, 'message' => 'Maximum 5 Banner Allowed'], 200);
        }

        try {
            $banner->update([
                'status' => $banner->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Banner Status Updated Successfully'], 200);
    }


    public function main_banner_update(Request $request)
    {
        if ($request->hasFile('image')) {
            $banner = MainBanner::first();
            if ($banner && !empty($banner->image)) {
                $this->deleteImage(public_path($banner->image));
            }
            $image = $this->saveImage('banner/main_banner', $request->file('image'));
        }

        MainBanner::updateOrCreate(
            ['id' => 1],
            [
                'product_id' => $request->product_id,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'short_title' => $request->short_title,
                'image' => $image ?? MainBanner::first()->image ?? null, // আগের ইমেজ রেখে দিচ্ছি
            ]
        );

        return redirect()->route('banner.index')->with('success', 'Main Banner Updated Successfully');
    }
}
