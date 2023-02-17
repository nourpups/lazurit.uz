<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function cart()
    {
        $order_id = session('order_id');
        $isCartEmpty = OrderProduct::where('order_id', session('order_id'))->count() == 0;

        if($isCartEmpty)
        {
            return view('catalog.cart')
            ->with('no_items', 'empty cart');
        }

        $order = Order::find($order_id);

        return view('catalog.cart')
        ->with('order', $order);
    }
    public function add($product_id)
    {
        $order_id = session('order_id');
            if(is_null($order_id))
            {
                $order = Order::create([]);
                session(['order_id' => $order->id]);
            }
            else
            {
                $order = Order::find($order_id);
            }

        if($order->products->contains($product_id))
        {
            $pivot_table =  $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivot_table->count++;
            $pivot_table->update();
        }
        else
        {
            $order->products()->attach($product_id);

        }

        return redirect()->back()->with('success', __('Product added to cart successfully'));
    }
    public function edit_count($product_id, $status)
    {

        $order_id = session('order_id');
        $order = Order::find($order_id);

        if($status == 'inc')
        {
            $pivot_table = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivot_table->count++;
            $pivot_table->update();
        }

        if($status == 'dec')
        {
            $pivot_table = $order->products()->where('product_id', $product_id)->first()->pivot;
            if($pivot_table->count == 1)
            {
                $order->products()->detach($product_id);
            }
             else
            {
                $pivot_table->count--;
                $pivot_table->update();
            }
        }
        return redirect()->back();
    }
    public function confirm(Request $request)
    {
        $order_id = session('order_id');
        $order = Order::find($order_id);

        if($order->status == 0 )
        {

            if(Auth::check())
            {
                $order->user_id = Auth::user()->id;
                $order->status = 1;
                $order->created_at = Carbon::now();
                $order->save();
                session()->forget('order_id');
            }

        }

        return redirect()->route('home')->with('success', __('Your Order has been successfully confirmed, We will contact You soon'));
    }
    public function delete($product_id)
    {
        $order_id = session('order_id');
        $order = Order::find($order_id);
        $order->products()->detach($product_id);

    return redirect()->back()->with('warning', __('You have removed the product from the cart'));
    }
}
