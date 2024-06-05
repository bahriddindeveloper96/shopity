<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }    

    public function index()
    {
        return auth()->user()->favourites()->paginate(20);
    }
    public function store(Request $request)
    {
        auth()->user()->favourites()->attach($request->product_id);
        return response()->json([]);
    }
}
