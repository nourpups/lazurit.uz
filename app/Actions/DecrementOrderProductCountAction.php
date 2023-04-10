<?php

namespace App\Actions;

use App\Models\Order;
use App\Models\Product;

class DecrementOrderProductCountAction
{
  public function __invoke(Order $order, Product $product, $product_id)
  {
    $last_product = $product->count == 1;

    if (!$last_product) {
      $count = --$product->count;
      $product->amount = $product->price * $count;
    } else {
      $products = $order->products;

      $products->each(function ($product, $key) use ($products, $product_id) {
        if ($product['id'] == $product_id)
        {
          $products->forget($key);
        }
      });

      $total = $order->total_sum();
      if ($total == 0) {
        session()->forget('order');
      }
      session()->now('danger', 'Product has been removed from cart');

      return [
        'id' => $product_id,
        'deleted' => true,
        'total' => $total,
        'flash' => view('partials.flashs')->render()
      ];
    }

  }
}
