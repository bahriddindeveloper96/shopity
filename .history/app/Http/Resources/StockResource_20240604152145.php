<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return [
        //     'quantity' => $this->quantity,
        //     'color' => 'red',
        //     'material' => 'MDF',
        // ];
        $result =  [
           'quantity' => $this->quantity,
        ];

        $attributes = json_decode($this->attributes);
        foreach($attributes as $stockAttribute){
            $attribute = Attribute::find($stockAttribute->attribute_id)
            $value = Value::find($stockAttribute->value_id);
            $result[$attribute->name] = $value->name;
        }
    }
}
