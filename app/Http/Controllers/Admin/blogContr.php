<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use Inertia\Inertia;

class blogContr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::get();
        return Inertia::render('Admin/Blog/Blog',[
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Blog/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'cont' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Blog::create([
            'image' => $imagePath,
            'date' => $request->date,
            'name' => $request->name,
            'heading' => $request->heading,
            'cont' => $request->cont,
        ]);

        return redirect()->route('blog.index')->with('message', 'New Blog Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return Inertia::render('Admin/Blog/Update',[
            'blog' => $blog
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'cont' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        $blog->update([
            'image' => $imagePath,
            'date' => $request->date,
            'name' => $request->name,
            'heading' => $request->heading,
            'cont' => $request->cont,
        ]);

        return redirect()->route('blog.index')->with('message', 'New Blog Update Success..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'New Blog Delete Success..');
    }
}
