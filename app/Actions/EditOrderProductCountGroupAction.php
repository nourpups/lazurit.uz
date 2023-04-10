<?php

namespace App\Actions;

use App\Models\Order;
use Illuminate\Http\Request;

class EditOrderProductCountGroupAction
{
  public function __construct(
    private IncrementOrderProductCountAction $incrementOrderProductAction,
    private DecrementOrderProductCountAction $decrementOrderProductAction,
  )
  {
  }
  public function __invoke($request, Order $order)
  {
    $product_id = $request['product_id'];
    $status = $request['status'];

    $product = $order->products->where('id', $product_id)->first();

    if ($status == 'inc') ($this->incrementOrderProductAction)($product);
    if ($status == 'dec')
    {
      $response_data = ($this->decrementOrderProductAction)($order, $product, $product_id);

      if(isset($response_data)) return $response_data;
    }

    $total = $order->total_sum();

    return [
      'id' => $product_id,
      'count' => $product->count,
      'amount' => $product->amount,
      'total' => $total
    ];
  }
}
