<?php

namespace App\Http\Resources;

use App\Models\Value;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result =  [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'content' => $this->content,
            'category' => $this->category,
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

        $attributes = json_decode($this->attributes);
        foreach($attributes as $stockAttribute){
           // $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->value_id);
            $result[$attribute->name] = $value->name;
        }

        return $result;
    }
}
