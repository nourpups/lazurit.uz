<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

     public function total_sum()
     {
        $sum = 0;
        foreach($this->products as $product)
        {
            $sum += $product->price_for_count();
        }
        return $sum;
     }
     public function quantity()
    {
        $order_id = session('order_id');
        $quantity = 0;
        if(!is_null($order_id))
        {
            foreach($this->products as $product)
            {
                $quantity += $product->pivot->count;
            }
        }
        return $quantity;
    }
}
