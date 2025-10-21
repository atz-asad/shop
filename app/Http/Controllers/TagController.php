<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        return view('backend.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            "name" => "required"
        ]);

        // data store
        tag::create([
            "name"   => $request->name,
            "slug"   => $this->makeSlug($request->name),
        
        ]);

        return back()->with('success', 'tag  created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('backend.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('backend.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        // validation
        $request->validate([
            "name" => "required"
        ]);

        // data store
        $tag->update([
            "name"   => $request->name,
            "slug"   => $this->makeSlug($request->name),
        
        ]);

        return redirect()->route('tag.index')->with('success', 'tag updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        if ($tag) {

            Tag::destroy($tag->id);
        } else {
            return back()->with('error', 'Brand not found');
        }

        // return $tag;
        // $tag->delete();
        return redirect()->back()->with('success', 'tag deleted successfully!');
    }
}
