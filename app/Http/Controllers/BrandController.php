<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest() -> get();
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request -> validate([
            "name" => "required"
        ]);

        // logo upload
        $fileName = "";

        
        if($request ->hasFile('logo')){
            $fileName = $this->fileUpload($request->file('logo'), "media/brands/");
        } 
        

        // data store
        Brand::create([
            "name"   => $request -> name, 
            "slug"   => $this ->makeSlug($request -> name),
            "logo"   => $fileName,
        ]);

        // retirn back
        return back()->with('success', 'Brand created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('backend.brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {

        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        // validation
        $request->validate([
            "name" => "required"
        ]);

        // logo upload
        $fileName = $brand->logo;


        if ($request->hasFile('logo')) {
            $fileName = $this->fileUpload($request->file('logo'), "media/brands/");
        }


        // data store
        $brand->update([
            "name"   => $request->name,
            "slug"   => $this->makeSlug($request->name),
            "logo"   => $fileName,
        ]);

        // retirn back
        return redirect()->route('brand.index')->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {

        if($brand){

            //brand link unlink
            unlink("media/brands/" . $brand -> logo);

            Brand::destroy($brand -> id);
        }else{
            return back() -> with('error', 'Brand not found');
        }

        // return $brand;
        // $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully!');
    }
}
