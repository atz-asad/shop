<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shop(Request $request)
    {
        $name = null;

        if ($request->filled('name')) {
            $name = $request->name;
        }
        $products = Product::query()
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->get();
        $trending_produts = Product::query()
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->get();
        $latest_produts = Product::query()
            ->orderBy('id', 'desc')
            ->get();
        return response()->json([
            'status' => 'success',
            'products' => $products,
            'trending_produts' => $trending_produts,
            'latest_produts' => $latest_produts,

        ]);
    }
}
