<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
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

    

    public function store(Request $request):JsonResponse
    {
        auth()->user()->favourites()->attach($request->product_id);
        return response()->json([
            'success'=> true,
        ]);
    }
    public function destroy($favourite_id):JsonResponse
    {        
        auth()->user()->favourites()->detach($favourite_id);
        return response()->json(['success'=>true]);
    }
}
