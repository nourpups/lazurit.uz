<?php

namespace App\Actions\Cart;

use App\Models\Order;
use App\Models\Product;

use function session;
use function view;

class DecrementOrderProductCountAction
{

    public function __invoke(Order $order, Product $product)
    {
        $lastProduct = $product->count == 1;
        if (!$lastProduct) {
            $count = --$product->count;
            $product->amount = $product->price * $count;
        }
        else {
            $products = $order->products;
            $productId = $product->id;

            foreach ($products as $key => $product) {
               if($product->id == $productId) {
                  $products->forget($key); break;
               } 
            }

            $total = $order->totalSum();
            if ($total == 0) {
                session()->forget('order');
            }
            session()->now('danger', 'Product has been removed from cart');
            
            return [
               'id' => $productId,
               'deleted' => true,
               'total' => $total,
               'flash' => view('partials.flash')->render()
            ];
        }
         
        return null;
    }

}
