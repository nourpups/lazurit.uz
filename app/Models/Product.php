<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends
   Model implements
   TranslatableContract
{

    use HasFactory, Translatable;

    protected $guarded = ['id'];

    public $translatedAttributes = [
       'name',
       'description'
    ];
    protected $fillable = [
       'category_id',
       'slug',
       'art',
       'image',
       'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function priceForCount()
    {
        return $this->amount;
    }

    public function formattedPrice()
    {
        return number_format($this->price, 0, '', ' ');
    }

    public static function scopeRelatedProducts($query, Product $product)
    {
        return $query->with('category')->withTranslation()->translatedIn(app()->getLocale())->where('id', '!=', $product->id)->where('category_id', $product->category->id)->take(10)->get();
    }

}
