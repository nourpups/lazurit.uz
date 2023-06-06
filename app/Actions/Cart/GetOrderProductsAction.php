<?php

namespace App\Actions\Cart;

class GetOrderProductsAction
{
public function __invoke($products) {
    $orderProducts = '';
    foreach ($products as $product) {
        $amount = $product->pivot->count * $product->price;
        $count = $product->pivot->count;
        $orderProducts .= " <b>$product->name  <code>$product->art</code></b> ✖️ <b>$count</b> 🟰 <b>$amount</b> sum\n ";
    }
    return $orderProducts;
}

}