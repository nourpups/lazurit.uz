<?php

namespace App\Actions\Cart;

use App\Models\Product;

class AddProductToOrderGroupAction
{
   public function __construct(
      private CreateOrderAction $createOrderAction,
      private AddProductToOrderAction $addProductToOrderAction
   )
   {
   }

   public function __invoke(Product $product, $order)
   {
      $order = ($this->createOrderAction)($order);

      ($this->addProductToOrderAction)($product, $order);
   }
}
