<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');  
    }
    public function index()
    {
        return auth()->user()->orders;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
       $sum = 0;
       $products = Product::query()->limit(2)->get();
       auth()->user()->orders()->create([
            'comment' => $request->comment,
            'delivery_method_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'products' => 'required',
            'comment' => 'nullable|max:500',
            'product.*.product_id' => 'required|numeric',
            'product.*.stock_id' => 'nullable|numeric',
            'product.*.quantity' => 'required|numeric', 
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
