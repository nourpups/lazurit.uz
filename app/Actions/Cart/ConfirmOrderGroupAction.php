<?php

namespace App\Actions\Cart;

class ConfirmOrderGroupAction
{
   public function __construct(
      private ConfirmOrderAction $confirmOrderAction,
      private SendOrderNotificationAction $sendOrderNotificationAction
   )
   {
   }

   public function __invoke($order, $user_id)
   {
      ($this->confirmOrderAction)($order, $user_id);
      ($this->sendOrderNotificationAction)($order->id);
   }
}
