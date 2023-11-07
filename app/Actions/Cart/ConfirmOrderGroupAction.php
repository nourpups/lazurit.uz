<?php

namespace App\Actions\Cart;

use App\Models\Order;

class ConfirmOrderGroupAction
{
   public function __construct(
      private ConfirmOrderAction $confirmOrderAction,
      private SendOrderNotificationGroupAction $sendOrderNotificationGroupAction
   )
   {
   }

   public function __invoke($order)
   {
      ($this->confirmOrderAction)($order);
      $order->refresh();
      ($this->sendOrderNotificationGroupAction)($order);
   }
}
