<?php

namespace App\Actions\Cart;

use App\Models\Order;
use App\Models\Product;

use function session;
use function view;

class DecrementOrderProductCountAction
{

    public function __invoke(Order $order, Product $product, $product_id)
    {
        $lastProduct = $product->count == 1;
        if (!$lastProduct) {
            $count = --$product->count;
            $product->amount = $product->price * $count;
        }
        else {

            $products = $order->products;

            $products->each(function ($product, $key) use ($products, $product_id)
            {
                if ($product['id'] == $product_id) {
                    $products->forget($key);
                }
            });

            $total = $order->totalSum();

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
