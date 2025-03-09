<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

   

        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'size' => 'required|string',
            'material' => 'required|string',
            'variant' => 'required|string',
            'category' => 'required|string',
            'deskripsi' => 'nullable|string'
        ]);

        $imagePath = $request->file('image')->store('products', 'public');
        $product = Product::create([
            'name' => $request->name,
            'image' => $imagePath,
            'size' => $request->size,
            'material' => $request->material,
            'variant' => $request->variant,
            'category' => $request->category,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'size' => 'string',
            'material' => 'string',
            'variant' => 'string',
            'category' => 'string',
            'deskripsi' => 'nullable|string'
        ]);

        // Inisialisasi data yang akan diupdate
        $data = [
            'name' => $request->name ?? $product->name,
            'size' => $request->size ?? $product->size,
            'material' => $request->material ?? $product->material,
            'variant' => $request->variant ?? $product->variant,
            'category' => $request->category ?? $product->category,
            'deskripsi' => $request->deskripsi ?? $product->deskripsi,
        ];

        // Jika ada file gambar yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image));
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path; // Tambahkan ke data update
        }

        // Update product
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }


    public function destroy(Product $product)
    {
        if ($product->images) {
                Storage::disk('public')->delete($image);
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
}
