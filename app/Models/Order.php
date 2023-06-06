<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends
   Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'sum',
       'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count', 'amount')->withTimestamps();
    }

    public function totalSum()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->amount;
        }
        return $sum;
    }

    public function quantity()
    {
        $quantity = 0;
        foreach ($this->products as $product) {
            $quantity += ($product->pivot->count ?? $product->count);
        }
        return $quantity;
    }

    public function formattedSum()
    {
        return number_format($this->sum ?? $this->totalSum(), 0, '', ' ');
    }

    public function createdAt()
    {
        return $this->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y');
    }

}
