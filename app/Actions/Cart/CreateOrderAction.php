<?php

namespace App\Actions\Cart;

use App\Models\Order;

use function session;

class CreateOrderAction
{
   public function __invoke($order)
   {
      if (is_null($order)) {
         $order = new Order([]);
         session(['order' => $order]);
      }
      return $order;
   }
}
