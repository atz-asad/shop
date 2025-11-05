<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest() ->get();

        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::latest() -> get();
        $tags = Tag::latest() -> get();
        $categoryes = Category::latest() -> get();
        return view('backend.product.create', compact('brands','tags', 'categoryes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request -> all();


        $featurefileName = null;

        //validation
        
        $request -> validate([
            'name' => 'required|string|max:255',
            'regular_price' => 'required|integer|min:1',
            'sale_price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            "feature_image" => "required|image",
        ]);

        if ($request->hasFile('feature_image')) {
            $featurefileName = $this->fileUpload($request->file('feature_image'), "media/product/");
        }

        // product data stone
        $product = Product::create([
            "name"                   => $request ->name,
            "slug"                   => $this->makeslug($request -> name),
            "subtitle"               => $request->subtitle,
            "regular_price"          => $request->regular_price,
            "sale_price"             => $request->sale_price,
            'stock'                  => $request->stock,
            "feature_image"          => $featurefileName,
            "rating"                 => $request->rating,
            "short_desc"             => $request->short_desc,
            "long_desc"              => $request->long_desc,
            "brand_id"               => $request->brand,
        ]);

        // gallery upload
        // return $request -> file('gallery');
        foreach ($request ->file('gallery') as $item ){
            $file_name = $this -> fileUpload($item, "media/product/gallery");
            Gallery::create([
                "product_id"     =>   $product -> id,
                "file_name"     =>   $file_name,
            ]);
        }


        // Category
        $product->categoryes()->attach($request->category);
        // tag
        $product->tags()->attach($request->tag);


        // return back
        return back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $product->load('brand');
        // $product = Product::with('brand')->findOrFail($id);
        return $product->tags;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
