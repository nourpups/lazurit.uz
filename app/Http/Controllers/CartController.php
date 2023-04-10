<?php

namespace App\Http\Controllers;

use App\Actions\AddProductToOrderGroupAction;
use App\Actions\ConfirmOrderAction;
use App\Actions\DeleteProductFromOrdersAction;
use App\Actions\EditOrderProductCountGroupAction;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function order()
  {
    return session('order');
  }
  public function cart()
  {
    $order = $this->order();

    if (empty($order)) return view('catalog.cart')->with('no_items', true);

    return view('catalog.cart')->with('order', $order);
  }
  public function add(Product $product, AddProductToOrderGroupAction $addProductToOrderGroupAction)
  {

    $addProductToOrderGroupAction($product, $this->order());

    return redirect()->back()->with('success', __('Product added to cart successfully'));
  }
  public function edit_count(Request $request, EditOrderProductCountGroupAction $editOrderProductCountGroupAction)
  {
    $data = $editOrderProductCountGroupAction($request->all(), $this->order());

    return response()->json($data);
  }
  public function confirm(Request $request, ConfirmOrderAction $confirmOrderAction)
  {
    $confirmOrderAction($this->order());

    return redirect()->route('home')->with('success', __('Your Order has been successfully confirmed, We will contact You soon'));
  }
  public function delete(Request $request, DeleteProductFromOrdersAction $deleteProductFromOrdersAction)
  {
    $data = $deleteProductFromOrdersAction($request->all(), $this->order());

    return response()->json($data);
  }
}
