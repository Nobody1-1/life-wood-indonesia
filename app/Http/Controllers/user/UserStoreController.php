<?php

namespace App\Http\Controllers\user;
use App\Models\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserStoreController extends Controller
{
    public function index(){
        $store = Store::all();
        return view('store',compact('store'));
    }
}
