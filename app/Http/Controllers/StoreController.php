<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = Store::all();
        return view('admin.store.index', compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'address' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('store_images', 'public');
            $data['image'] = $imagePath;
        }

        Store::create($data);

        return redirect()->route('store.index')->with('success', 'Store created successfully.');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        return view('admin.store.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $store = Store::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'address' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($store->image) {
                Storage::disk('public')->delete($store->image);
            }
            $imagePath = $request->file('image')->store('store_images', 'public');
            $data['image'] = $imagePath;
        }

        $store->update($data);

        return redirect()->route('store.index')->with('success', 'Store updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $store = Store::findOrFail($id);

        if ($store->image) {
            Storage::disk('public')->delete($store->image);
        }

        $store->delete();
        return redirect()->route('store.index')->with('success', 'Store deleted successfully.');
        
    }
}
