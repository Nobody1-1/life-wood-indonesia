<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Store;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $store = Store::all();
        $product = Product::all();
        return view('admin.dashboard',compact(['user','product','store']));
    }
    public function chartData()
    {
        $data = Product::selectRaw('category, COUNT(*) as count')
        ->groupBy('category')
        ->get()
        ->map(function ($item) {
            return [
                'category' => $item->category,
                'count' => intval($item->count) 
            ];
        });

        return response()->json($data);
    }

}
