<?php

namespace App\Actions;
use App\Models\Product;

class IncrementOrderProductCountAction
{
  public function __invoke(Product $product)
  {
    $count = ++$product->count;
    $product->amount = $product->price * $count;
  }
}
