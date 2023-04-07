<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function order_id()
  {
    return session('order_id');
  }
  public function cart()
  {
    $is_cart_empty = OrderProduct::where('order_id', session('order_id'))->count() == 0;

    if ($is_cart_empty) {
      return view('catalog.cart')
        ->with('no_items', true);
    }

    $order = Order::find($this->order_id());
    return view('catalog.cart')
      ->with('order', $order);
  }
  public function add($product_id)
  {
    $order = Order::find($this->order_id());
    if (is_null($this->order_id())) {
      $order = Order::create([]);
      session(['order_id' => $order->id]);
    }


    if ($order->products->contains($product_id)) {
      $product = $order->products()->where('product_id', $product_id)->first();
      $count = $product->pivot->count++;
      $product->pivot->amount = $product->price * $count;
      $product->pivot->save();
    } else {
      $attaching_product_price = Product::find($product_id)->price;
      $order->products()->attach($product_id, ['amount' => $attaching_product_price]);
    }

    return redirect()->back()->with('success', __('Product added to cart successfully'));
  }
  public function edit_count(Request $request)
  {
    $product_id = $request['product_id'];
    $status = $request['status'];

    $order = Order::find($this->order_id());
    $product = $order->products()->where('product_id', $product_id)->first();

    if ($status == 'inc') {
      $count = --$product->pivot->count;
      $product->pivot->amount = $product->price * $count;
      $product->pivot->save();
    }
    // dd($product);
    if ($status == 'dec') {
      
      $last_product = $product->pivot->count == 1;

      if ($last_product) {

        $order->products()->detach($product_id);

        $order = Order::find($this->order_id());
        $total = $order->total_sum();

        return response()->json([
          'id' => $product_id,
          'deleted' => true,
          'total' => $total
        ]);

      } else {
        $count = --$product->pivot->count;
        $product->pivot->amount = $product->price * $count;
        $product->pivot->save();
      }
    }
    $product = OrderProduct::where('product_id', $product_id)->first();
    $total = $order->total_sum();

    return response()->json([
      'id' => $product_id,
      'count' => $product->count,
      'amount' => $product->amount,
      'total' => $total,
    ]);
  }
  public function confirm(Request $request)
  {
    $order = Order::find($this->order_id());

    if ($order->status == 0) {
      if (Auth::check()) {
        $order->user_id = Auth::user()->id;
        $order->status = 1;
        $order->created_at = Carbon::now();
        $order->save();
        session()->forget('order_id');
      }
    }

    return redirect()->route('home')->with('success', __('Your Order has been successfully confirmed, We will contact You soon'));
  }
  public function delete(Request $request)
  {
    $product_id = $request['product_id'];
    $order = Order::find($this->order_id());

    $order->products()->detach($product_id);

    $order = Order::find($this->order_id());
    $count = $order->products()->count();
    $total = $order->total_sum();

    return response()->json([
      'count' => $count,
      'total' => $total,
    ]);
  }

}
