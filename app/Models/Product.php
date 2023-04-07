<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
  use HasFactory, Translatable;
  protected $guarded = ['id'];
  public $translatedAttributes = ['name', 'description'];
  protected $fillable = [
    'price',
    'image',
    'category_id',
  ];
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function price_for_count()
  {
    return $this->pivot->count * $this->price;
  }

}
