<?php

namespace App\Actions;
use App\Models\Order;
use Carbon\Carbon;

class ConfirmOrderAction
{
  public function __invoke(Order $order)
  {
    
      $order->user_id = auth()->user()->id;
      $order->status = 1;
      $order->created_at = Carbon::now();
      $order->sum = $order->total_sum();
      $order->save();

      foreach ($order->products as $order_product) {
        $order->products()->attach($order_product, [
          'count' => $order_product->count,
          'amount' => $order_product->amount
        ]);
      }
      session()->forget('order');
    }

}
