<?php

namespace App\Actions;

use App\Models\Order;
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
