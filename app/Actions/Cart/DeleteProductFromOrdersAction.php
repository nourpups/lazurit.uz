<?php

namespace App\Actions\Cart;

use App\Models\Order;

use function session;
use function view;

class DeleteProductFromOrdersAction
{
    public function __invoke($product_id, Order $order)
    {
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
           'count' => $order->quantity(),
           'total' => $total,
           'flash' => view('partials.flash')->render()
        ];
    }
}
