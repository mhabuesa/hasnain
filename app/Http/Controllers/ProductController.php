<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductMeta;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $subcategories = Subcategory::all();
        return view('backend.product.create', compact('category', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'current_price' => 'required',
            'stock' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'preview' => 'required|image',

        ]);

        $image = $this->saveImage('product/preview', $request->file('preview'), 260, 330);

         // Product Code Generation
         $product_code = 'PRD' . mt_rand(100000, 999999);
         $prd_count = Product::where('product_code', $product_code)->count();

         if ($prd_count > 0) {
             $product_code = $product_code . '-' . ($prd_count + 1);
         }

         // Slug Generation
         $slug = Str::slug($request->input('name'));
         $slugCount = Product::where('slug', $slug)->count();
         if ($slugCount > 0) {
             $slug = $slug . '-' . ($slugCount + 1);
         }

         // Status Check
         if ($request->status == 'on') {
             $status = 1;
         } else {
             $status = 0;
         }

         $product = Product::create([
            'name' => $request->name,
            'product_code' => $product_code,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand' => $request->brand,
            'warranty' => $request->warranty,
            'regular_price' => $request->regular_price,
            'current_price' => $request->current_price,
            'discount' => $request->discount,
            'stock' => $request->stock,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'preview' => $image,
            'slug' => $slug,
            'status' => $status,
        ]);

        $gallery = $request->file('gallery');

        // Limit the number of images in the Gallery array
        $gallery = count($gallery) > 5 ? array_slice($gallery, 0, 5) : $gallery;

        foreach ($gallery as $image) {
            $gallery_image = $this->saveImage('product/gallery', $image, 260, 330);
            Gallery::create([
                'product_id' => $product->id,
                'image' => $gallery_image,
            ]);
        }

        if ($request->meta_title != '') {
            $keywords = $request->meta_keyword;

            // Initialize meta_keyword as an empty string
            $meta_keyword = '';

            // Concatenate all keywords into a single string
            if ($keywords) {
                foreach ($keywords as $value) {
                    $meta_keyword .= $value . ' ';
                }
            }

            // Create ProductMetaInfo record
            ProductMeta::create([
                'product_id' => $product->id,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => rtrim($meta_keyword)
            ]);
        }
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
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
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('backend.product.edit', compact('product', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'current_price' => 'required',
        'stock' => 'required',
        'short_description' => 'required',
        'description' => 'required',
    ]);

    $product = Product::findOrFail($id);
    $meta = ProductMeta::where('product_id', $id)->first();

    // Handle product preview image
    if ($request->hasFile('preview')) {
        if (!empty($product->preview)) {
            $this->deleteImage(public_path($product->preview));
        }
        $product->preview = $this->saveImage('product/preview', $request->file('preview'), 260, 330);
    }

    // Update product details
    $product->update($request->only([
        'name', 'category_id', 'subcategory_id', 'brand', 'warranty', 'regular_price',
        'current_price', 'discount', 'stock', 'short_description', 'description'
    ]));

    // Handle meta data
    $meta_keyword = $request->meta_keyword ? implode(' ', $request->meta_keyword) : '';

    if ($meta) {
        $meta->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $meta_keyword,
        ]);
    } else {
        ProductMeta::create([
            'product_id' => $product->id,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $meta_keyword,
        ]);
    }

    // Handle gallery images
    $gallery = $request->file('gallery');
    $existing_gallery_count = Gallery::where('product_id', $id)->count();

    if (!empty($gallery)) {
        $remaining_slots = max(0, 5 - $existing_gallery_count);

        if ($remaining_slots > 0) {
            foreach (array_slice($gallery, 0, $remaining_slots) as $image) {
                $gallery_image = $this->saveImage('product/gallery', $image, 260, 330);
                Gallery::create([
                    'product_id' => $id,
                    'image' => $gallery_image,
                ]);
            }
        } else {
            return redirect()->route('product.index')->with([
                'success' => 'Product updated successfully.',
                'error' => 'You cannot upload more than 5 images.',
            ]);
        }
    }

    return redirect()->route('product.index')->with('success', 'Product updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        try {
            $product->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }
        return response()->json(['success' => true, 'message' => 'Product Deleted Successfully'], 200);
    }

    public function get_subcategories($category)
    {
        $subcategories = Subcategory::where('category_id', $category)->get();
        return response()->json($subcategories);
    }

    public function status_update($id)
    {
        $product = Product::find($id);
        try {
            $product->update([
                'status' => $product->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Product Status Updated Successfully'], 200);
    }

    public function deleteGallery(Request $request)
    {
        $gallery = Gallery::find($request->id);

        if ($gallery) {
            if (file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $gallery->delete();
            return response()->json(['success' => true, 'message' => 'Image deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Image not found.']);
    }
}
