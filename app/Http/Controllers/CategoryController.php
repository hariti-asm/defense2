<?php

namespace App\Http\Controllers;

use App\Models\Category; // Import the Category model at the top

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Category created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category->update($validatedData);
    
        return redirect()->route('admin.index')->with('success', 'Category updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.index')->with('success', 'Category deleted successfully.');
    }
    
}
