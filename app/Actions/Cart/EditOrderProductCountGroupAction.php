<?php

namespace App\Actions\Cart;

use App\Models\Order;

class EditOrderProductCountGroupAction
{
    public function __construct(private IncrementOrderProductCountAction $incrementOrderProductAction, private DecrementOrderProductCountAction $decrementOrderProductAction)
    {
    }

    public function __invoke($product_id, $method, $order)
    {
        $product = $order->products->where('id', $product_id)->first();

        if ($method == 'inc') {
            ($this->incrementOrderProductAction)($product);
        }
        if ($method == 'dec') {
            $responseData = ($this->decrementOrderProductAction)($order, $product);

            if (isset($responseData)) {
                return $responseData;
            }
        }

        return [
           'id' => $product->id,
           'count' => $product->count,
           'amount' => $product->amount,
           'total' => $order->totalSum()
        ];
    }
}
