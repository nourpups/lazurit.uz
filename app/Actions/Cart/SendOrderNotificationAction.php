<?php

namespace App\Actions\Cart;

use App\Models\Order;
use App\Services\Telegram;

use function route;

class SendOrderNotificationAction
{
   public function __invoke($order_id)
   {
      $order = Order::find($order_id);

      $customer = $order->user->name;
      $phone = $order->user->phone;
      $created_at = $order->createdAt();
      $sum = $order->formattedSum();
      $ordered_products = '';

      foreach ($order->products as $product) {
         $amount = $product->pivot->count * $product->price;
         $count = $product->pivot->count;
         $ordered_products .= " <b>$product->name</b> ✖️ <b>$count</b> 🟰 <b>$amount</b> sum\n ";
      }
      $message = "Заказ № <b>$order->id</b>
	Время оформления: <b>$created_at</b>

	Имя заказчика: <b>$customer</b>
	Телефон заказчика: <code>$phone</code>

	Заказано:

	$ordered_products
	Общая сумма: <b>$sum</b> sum";

      Telegram::sendMessageWithSingleInlineLinkButton($message, 'Смотреть заказ ↩️', route('orders'));
   }
}
