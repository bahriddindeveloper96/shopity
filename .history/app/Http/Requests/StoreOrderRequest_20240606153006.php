<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'delivery_method_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'products' => 'required|array:product_id,stock_id, quantity',
            'comment' => 'nullable|max:500',
            'product.*.product_id' => 'required|numeric',
            'product.*.stock_id' => 'required|numeric',

        ];
    }
}
