<?php

namespace App\Http\Controllers\user;
use App\Models\Product;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index() {
        $products = Product::all(); 
        return view('product', compact('products'));
    }

    public function show($id) {
                // Ambil kategori produk yang sedang ditampilkan
                $product = Product::findOrFail($id);
                
                $relatedProducts = Product::where('category', $product->category)
                            ->where('id', '!=', $product->id)
                            ->get();
                return view('productShow', compact('product','relatedProducts'));
    }
}
