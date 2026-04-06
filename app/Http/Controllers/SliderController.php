<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;



class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "slider"   => 'required',
            "slider.*" => 'image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        if($request->hasFile("file")){
        $file= $request->hasFile('file');
        $file_name = $this->fileUpload($file, "media/slider");
        Slider::create([
            "image" => $file_name,
        ]);
    }
        // return $request -> file('slider');
        return redirect()->back()->with('success', 'Slider uploaded successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('backend.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $Slider)
    {
        // return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $Slider)
    {
        //
    }

    
}
