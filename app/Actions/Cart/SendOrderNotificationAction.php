<?php

namespace App\Actions\Cart;

use App\Models\Order;
use App\Services\Telegram;

use function route;

class SendOrderNotificationAction
{
   public function __invoke($order, $renderedOrderProducts)
   {
       $message = view('telegram.order-message')
          ->with('order', $order)
          ->with('orderProducts', $renderedOrderProducts)
          ->render();

      Telegram::sendMessageInlineLinkButton($message, 'Смотреть заказ ↩️', route('orders'));

   }
}
