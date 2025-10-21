<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys =  Category::latest() -> get();
        return view('backend.category.index', compact('categorys'));
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
        // validation
        $request->validate([
            "name" => "required"
        ]);

        // photo upload
        $fileName = "";


        if ($request->hasFile('photo')) {
            $fileName = $this->fileUpload($request->file('photo'), "media/category/");
        }


        // data store
        Category::create([
            "name"   => $request->name,
            "slug"   => $this->makeSlug($request->name),
            "photo"   => $fileName,
        ]);

        // retirn back
        // return redirect()->route('/admin.category')->with('success', 'Category created successfully!');
        return redirect("/admin/category")->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // validation
        $request->validate([
            "name" => "required"
        ]);

        // photo upload
        $fileName = $category->photo;


        if ($request->hasFile('photo')) {
            $fileName = $this->fileUpload($request->file('photo'), "media/category/");
        }


        // data store
        $category->update([
            "name"   => $request->name,
            "slug"   => $this->makeSlug($request->name),
            "photo"   => $fileName,
        ]);

        // retirn back
        return redirect()->route('category.index')->with('success', 'category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category) {

            //category link unlink
            unlink("media/category/" . $category->photo);

            Category::destroy($category->id);
        } else {
            return back()->with('error', 'category not found');
        }

        // return $category;
        // $category->delete();
        return redirect()->back()->with('success', 'category deleted successfully!');
    }
}
