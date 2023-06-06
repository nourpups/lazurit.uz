<?php

namespace App\Actions\Cart;

use App\Models\Order;

class SendOrderNotificationGroupAction
{
public function __construct( public SendOrderNotificationAction $sendOrderNotificationAction, public GetOrderProductsAction $getOrderProductsAction
)
{
}
public function __invoke($order) {

    $renderedOrderProducts = ($this->getOrderProductsAction)($order->products);

    ($this->sendOrderNotificationAction)($order, $renderedOrderProducts);
}
}