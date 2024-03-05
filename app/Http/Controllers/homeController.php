<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;

use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function filter(Request $request)
    {
        $categories = Category::all();
        $categoryId = $request->input('category');
        $title = $request->input('title');
    
        $eventsQuery = Event::query();
    
        if ($categoryId !== 'All') {
            $eventsQuery->where('category_id', $categoryId);
        }
    
        if (!empty($title)) {
            $eventsQuery->where('title', 'like', '%' . $title . '%');
        }
    
        $events = $eventsQuery->get();
    
        return view('welcome', compact('categories', 'events'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
