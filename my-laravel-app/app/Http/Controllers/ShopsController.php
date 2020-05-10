<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index(Request $request)
    {
        $items = Shop::all();
        return view('shops.index', ['items' => $items]);
    }
}
