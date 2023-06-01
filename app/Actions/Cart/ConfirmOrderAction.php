<?php

namespace App\Actions\Cart;

use function now;
use function session;

class ConfirmOrderAction
{
    public function __invoke($order, $user_id)
    {
        $order->user_id = $user_id;
        $order->status = 1;
        $order->created_at = now();
        $order->sum = $order->totalSum();
        $order->save();

        foreach ($order->products as $order_product) {
            $order->products()->attach($order_product, [
               'count' => $order_product->count,
               'amount' => $order_product->amount
            ]);
        }
        session()->forget('order');
    }

}
