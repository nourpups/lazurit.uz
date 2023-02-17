@extends('layouts.front')

@section('title', __('Cart'))

@section('content')

<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Cart</h2>
            <ul>
                <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
                <li><i class="ti-angle-right"></i></li>
                <li>{{__('Cart')}}</li>
            </ul>
        </div>
    </div>
</div>
@if(isset($no_items))

    <div class="w-100 d-flex justify-content-center align-items-end" style="background: url({{asset('assets/images/cart/empty-cart.png')}}) center no-repeat; height:75vh">
        <a class="btn btn-dark mb-4" href="{{route('home')}}">{{__('Go to Home')}}</a>
    </div>
@else

<div class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">{{__('Product')}}</th>
                                        <th class="width-price"> {{__('Price')}}</th>
                                        <th class="width-quantity">{{__('Quantity')}}</th>
                                        <th class="width-subtotal">{{__('Amount')}}</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->products as $product)

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{route('product', $product->id)}}"><img src="{{'storage/'.$product->image}}" alt="{{$product->name}}"></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="{{route('product', $product->id)}}">{{$product->name}}</a></h5>
                                            <a href="{{route('catalog', $product->category->name)}}" class="text-muted">{{$product->category->name}}</a>
                                        </td>
                                        <td class="product-cart-price"><span class="amount">${{$product->price}}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-quality">
                                               <a href="{{route('cart.edit_count', [$product->id, 'dec'])}}"><div class="dec qtybutton">-</div></a>
                                                <input disabled class="cart-plus-minus-box input-text qty text" name="qtybutton" value="{{$product->pivot->count}}">
                                                <a href="{{route('cart.edit_count', [$product->id, 'inc'])}}"><div class="inc qtybutton">+</div></a>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>${{$product->price_for_count()}}</span></td>
                                        <form action="{{route('cart.delete', $product->id)}}" method="POST">
                                            <td class="product-remove">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-dark"> <i class=" ti-trash "></i></button>
                                            </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6  col-md-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update btn-hover">
                                        <a href="{{route('catalog', $product->category->name)}}">{{__('Continue Shopping')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-2 col-md-12">
                                <div class="grand-total-wrap">
                                    <div class="grand-total-content">
                                        <h3>{{__('Subtotal')}} <span>${{$order->total_sum()}}</span></h3>
                                            <div class="grand-shipping">
                                                {{-- <span>Shipping</span>
                                                <ul>
                                                    <li><input type="radio" name="shipping" value="info"><label>Pickup</label></li>
                                                    <li><input type="radio" name="shipping" value="info"><label>Delivery: <span>$10</span></label></li>
                                                </ul> --}}
                                            </div>
                                        <div class="grand-total">
                                            <h4>{{__('Total')}} <span>${{$order->total_sum()}}</span></h4>
                                        </div>
                                    </div>
                                    <div class="grand-total-btn btn-hover">
                                        @guest
                                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#confirm_order">{{__('Proceed to checkout')}}</button>
                                        @endguest
                                        @auth
                                            <a href="{{route('cart.confirm')}}" class="btn btn-outline-dark">{{__('Proceed to checkout')}}</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
