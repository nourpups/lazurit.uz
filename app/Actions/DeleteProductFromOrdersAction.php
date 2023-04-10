<?php

namespace App\Actions;

use App\Models\Order;
use Illuminate\Http\Request;

class DeleteProductFromOrdersAction
{
  public function __invoke($request, Order $order)
  {
    $product_id = $request['product_id'];
    $products = $order->products;

    $products->each(function ($product, $key) use ($products, $product_id) {
      if ($product['id'] == $product_id)
      {
        $products->forget($key);
      }
    });

    $count = $order->products->count();
    $total = $order->total_sum();

    if ($total == 0) {
      session()->forget('order');
    }

    session()->now('danger', 'Product has been removed from cart');

    return [
      'count' => $count,
      'total' => $total,
      'flash' => view('partials.flashs')->render()
    ];
  }
}
