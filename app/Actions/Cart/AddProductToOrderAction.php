<?php

namespace App\Actions\Cart;

use App\Models\Order;
use App\Models\Product;

class AddProductToOrderAction
{
   public function __invoke(Product $product, Order $order)
   {

      if ($order->products->contains($product->id)) {
         $product = $order->products->where('id', $product->id)->first();
         $count = ++$product->count;
         $product->amount = $product->price * $count;
      } else {
         $product->count = 1;
         $product->amount = $product->price; // amount = price because product count = 1 (1 products amount = product price)

         $order->products->push($product);
      }

   }
}
