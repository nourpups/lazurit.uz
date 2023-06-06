<?php

namespace App\Http\Controllers;

use App\Actions\Cart\AddProductToOrderGroupAction;
use App\Actions\Cart\ConfirmOrderGroupAction;
use App\Actions\Cart\DeleteProductFromOrdersAction;
use App\Actions\Cart\EditOrderProductCountGroupAction;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends
   Controller
{
   private function order()
   {
      return session('order');
   }

   public function empty()
   {
      return view('partials.empty-cart');
   }

   public function cart()
   {
      $order = $this->order();

      return empty($order)
         ? view('catalog.cart')->with('no_items', true)
         : view('catalog.cart', compact('order'));
   }

   public function add(Product $product, AddProductToOrderGroupAction $addProductToOrderGroupAction)
   {
      $addProductToOrderGroupAction($product, $this->order());

      return redirect()->back()->with('success', __('Product added to cart successfully'));
   }

   public function edit_count(Request $request, EditOrderProductCountGroupAction $editOrderProductCountGroupAction)
   {
      $data = $editOrderProductCountGroupAction(request('product_id'), request('method'), $this->order());

      return response()->json($data);
   }

   public function confirm(ConfirmOrderGroupAction $confirmOrderGroupAction)
   {
      $confirmOrderGroupAction($this->order(), auth()->id());

      return redirect()->route('home')->with(
         'success',
         __('Your Order has been successfully confirmed, We will contact You soon')
      );
   }

   public function delete(Request $request, DeleteProductFromOrdersAction $deleteProductFromOrdersAction)
   {
      $data = $deleteProductFromOrdersAction(request('product_id'), $this->order());

      return response()->json($data);
   }
}
