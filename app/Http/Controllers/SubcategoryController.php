<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubcategoryController extends Controller
{
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
        $subcategories = Subcategory::all();
        return view('backend.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
        ]);

        Subcategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => $this->generateUniqueSlug($request->name),
        ]);
        return redirect()->route('subcategory.index')->with('success', 'Subcategory created successfully.');
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
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('backend.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
        ]);

        $subcategory = Subcategory::findOrFail($id);

        // Check if subcategory with the same name exists
        if (Subcategory::where('name', $request->name)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Category Already Exists');
        }

        // Update slug if the name has changed
        if ($request->name != $subcategory->name) {
            $subcategory->slug = $this->generateUniqueSlug($request->name);
        }

        // Update subcategory
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->save();

        return redirect()->route('subcategory.index')->with('success', 'Subcategory Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategory::find($id);

        try {
            $subcategory->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Subcategory Deleted Successfully'], 200);
    }

    public function status_update($id)
    {
        $subcategory = Subcategory::find($id);
        try {
            $subcategory->update([
                'status' => $subcategory->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Subcategory Status Updated Successfully'], 200);
    }
}
