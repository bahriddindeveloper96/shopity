<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'category_id','name','price','description','content'
    ];
    public array $translatable = ["name","description", "content"];


    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function Stocks():HasMany
    {
        return $this->hasMany(Stock::class);
    }
    public function favourites():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
