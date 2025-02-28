<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */

    protected function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $slugCount = Category::where('slug', 'LIKE', "$slug%")->count();
        return $slugCount > 0 ? $slug . '-' . ($slugCount + 1) : $slug;
    }
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories'],
            'description' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Handle image upload
        $image = $request->hasFile('image')
            ? $this->saveImage('category', $request->file('image'), 400, 400)
            : null;

        // Generate unique slug
        $slug = $this->generateUniqueSlug($request->name);

        // Create the category
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $category = Category::findOrFail($id);

        // Check if category with the same name exists
        if (Category::where('name', $request->name)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Category Already Exists');
        }

        // Update slug if the name has changed
        if ($request->name != $category->name) {
            $category->slug = $this->generateUniqueSlug($request->name);
        }

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $this->deleteImage(public_path($category->image)); // Delete old image
            $category->image = $this->saveImage('category', $request->file('image'), 400, 400);
        }

        // Update category
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::find($id);
        // if ($category->name == 'Uncategorized') {
        //     return response()->json(['success' => false, 'message' => 'Uncategorized Category Can\'t Be Deleted'], 200);
        // }

        // $uncategorized = Category::where('name', 'Uncategorized')->first();
        // $product = Product::where('category_id', $id);
        // if ($product) {
        //     $product->update([
        //         'category_id' => $uncategorized->id
        //     ]);
        // }

        try {
            $this->deleteImage(public_path($category->image));
            $category->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Category Deleted Successfully'], 200);
    }

    public function status_update($id)
    {
        $category = Category::find($id);
        try {
            $category->update([
                'status' => $category->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Category Status Updated Successfully'], 200);
    }
}
