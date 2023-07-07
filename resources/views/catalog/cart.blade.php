@extends('layouts.front')

@section('title', __('Cart') . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
   <meta name="description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection
@section('meta_og_tags')
   <meta property="og:type" content="website"/>
   <meta property="og:title"
         content="{{ __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones') }}"/>
   <meta property="og:url" content="https://lazurit.uz"/>
   <meta property="og:site_name" content="https://lazurit.uz"/>
   <meta property="og:image" content="#"/>
   <meta property="og:description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}"/>
@endsection
@section('content')

   <div class="breadcrumb-area cart bg-gray-4 breadcrumb-padding-1">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2>Cart</h2>
            <ul>
               <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
               <li><i class="ti-angle-right"></i></li>
               <li>{{ __('Cart') }}</li>
            </ul>
         </div>
      </div>
   </div>

   <div class="cart-area pb-100 pt-3">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="cart-table-content">
                  <div class="table-content table-responsive">
                     <table>
                        <thead>
                        <tr>
                           <th class="width-thumbnail"></th>
                           <th class="width-name">{{ __('Product') }}</th>
                           <th class="width-price"> {{ __('Price') }}</th>
                           <th class="width-quantity">{{ __('Quantity') }}</th>
                           <th class="width-subtotal">{{ __('Amount') }}</th>
                           <th class="width-remove"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->products as $product)
                           <tr class="product_{{ $product->id }}">
                              <td class="product-thumbnail">
                                 <a href="{{ route('product', [$product->category, $product]) }}"><img
                                       src="{{ 'storage/' . $product->image }}"
                                       alt="{{ $product->name }} {{$product->art}}"></a>
                              </td>
                              <td class="product-name">
                                 <h5><a
                                       href="{{ route('product', [$product->category, $product]) }}">{{ $product->name }} {{$product->art}}</a>
                                 </h5>
                                 <a href="{{ route('catalog', $product->category) }}"
                                    class="text-muted">{{ $product->category->name }}</a>
                              </td>
                              <td class="product-cart-price">
                          <span class="amount price-format">{{$product->price }} sum
                          </span>
                              </td>
                              <td class="cart-quality">
                                 <div class="product-quality">

                                    <div class="dec qtybutton" onclick="edit_count({{ $product->id }}, 'dec')">-
                                    </div>

                                    <input disabled
                                           class="cart-plus-minus-box input-text qty text count_{{ $product->id }}"
                                           value="{{ $product->count }}">

                                    <div class="inc qtybutton" onclick="edit_count({{ $product->id }}, 'inc')">+
                                    </div>

                                 </div>
                              </td>
                              <td class="product-total">
                          <span
                             class="amount_{{ $product->id }} price-format">{{ $product->amount }}
                            sum
                          </span>
                              </td>
                              <td class="product-remove">
                                 <button class="btn btn-outline-dark" onclick="delete_product({{ $product->id }})">
                                    <i class="ti-trash"></i>
                                 </button>
                              </td>
                           </tr>
                        @endforeach

                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                                          <div class="cart-shiping-update-wrapper">
                                             <div class="cart-shiping-update btn-hover">
                                                <a href="{{ route('catalog', $product->category) }}">{{ __('Continue Shopping') }}</a>
                                             </div>
                                          </div>
                  </div>
                  <div class="col-lg-4 offset-lg-2 col-md-12">
                     <div class="grand-total-wrap">
                        <div class="grand-total-content">
                           <h3>
                              {{ __('Subtotal') }} <span class="subtotal price-format">{{ $order->totalSum() }}
                        sum</span>
                           </h3>
                           <div class="grand-shipping">
                           </div>
                           <div class="grand-total">
                              <h4>{{ __('Total') }} <span class="total price-format">{{ $order->totalSum() }}
                          sum </span>
                              </h4>
                           </div>
                        </div>
                        <div class="grand-total-btn btn-hover">
                           @guest
                              <a class="btn btn-outline-dark" data-bs-toggle="modal"
                                 data-bs-target="#confirm_order">{{ __('Proceed to checkout') }}</a>
                           @endguest
                           @auth
                              <a href="{{route('cart.confirm')}}" class="btn btn-outline-dark">
                                 {{ __('Proceed to checkout') }}
                              </a>
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
@endsection
@section('modals')

<div class="modal fade quickview-modal-style" id="confirm_order" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="ti-close"></i></a>
         </div>
         <div class="modal-body">
            <div class="login-register-area">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="login-register-wrapper">
                           <div class="login-register-tab-list nav">
                              <a class="active" data-bs-toggle="tab" href="#lg1">
                                 <h4 class="h6"> {{ __('Login') }} </h4>
                              </a>
                              <a data-bs-toggle="tab" href="#lg2">
                                 <h4 class="h6"> {{ __('Register') }} </h4>
                              </a>
                           </div>
                           <p class="h-5 mb-3">
                              {{ __('Please login or register first, to confirm your order') }}</p>
                           <div class="tab-content">
                              <div id="lg1" class="tab-pane active">
                                 <div class="login-form-container">
                                    <div class="login-register-form">

                                       <form method="POST" class="login" action="{{ route('login') }}"
                                             id="auth_form">
                                          @csrf
                                          <label for="">{{ __('Name') }} {{ __('or') }}
                                             {{ __('Phone') }}</label>
                                          <input type="text" name="name" value="{{ old('name') }}"
                                                 placeholder="{{ __('Jhon Wick') }} {{ __('or') }} +998 99 123 45 67"
                                                 autofocus>
                                          <label for="">{{ __('Password') }}</label>
                                          <input type="text" name="password"
                                                 value="{{ old('password') }}"
                                                 placeholder="{{ __('jhonny434') }}">
                                          <input type="hidden" name="confirm_order" value="true">
                                          <div class="button-box btn-hover">
                                             <button type="submit">{{ __('Login') }}</button>
                                          </div>
                                       </form>

                                    </div>
                                 </div>
                              </div>
                              <div id="lg2" class="tab-pane">
                                 <div class="login-form-container">
                                    <div class="login-register-form">
                                       <form method="POST" class="register"
                                             action="{{ route('register') }}"
                                             id="auth_form">
                                          @csrf
                                          <label for="">{{ __('Name') }}</label>
                                          <input type="text" name="name" value="{{ old('name') }}"
                                                 placeholder="{{ __('Jhon Wick') }}" autofocus>
                                          <label for="">{{ __('Phone') }}</label>
                                          <input type="text" name="phone" value="{{ old('phone') }}"
                                                 placeholder="+998 99 123 45 67">
                                          <label for="">{{ __('Password') }}</label>
                                          <input type="text" value="{{ old('login') }}"
                                                 name="password"
                                                 placeholder="{{ __('jhonny434') }}">
                                          <input type="hidden" name="confirm_order" value="true">
                                          <div class="button-box btn-hover">
                                             <button>{{ __('Register') }}</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('js')
   <script>
      function edit_count(product_id, method) {

         $.ajax({
            url: "{{ route('cart.edit_count') }}",
            type: 'GET',
            data: {
               product_id: product_id,
               method: method
            },
            success: function (res) {
               // toLocaleString('fr) for displaying numbers with spaces (formatting): "x xxx xxx".

               if (res.total == 0) {
                  $('.cart-area').remove()
                  empty_cart = `
                        <div class="w-100 d-flex justify-content-center align-items-end"
                          style="background: url({{ asset('assets/images/cart/empty-cart.png') }}) center no-repeat; height:75vh">
                          <a class="btn btn-dark mb-4" href="{{ route('home') }}">{{ __('Go to Home') }}</a>
                          </div>
                        `
                  $('.breadcrumb-area').after(empty_cart)
               }
               if (res.deleted) {
                  $('.product_' + res.id).remove()
               } else {
                  $('.count_' + res.id).val(res.count)
                  $('.amount_' + res.id).html(res.amount.toLocaleString('fr') + ' sum')
               }
               $('.flashs').html(res.flash)

               setTimeout(() => {
                  $(".alert").alert('close');
               }, 4000);

               // $('.product-count').html(res.count)
               $('.subtotal').html(res.total.toLocaleString('fr') + ' sum')
               $('.total').html(res.total.toLocaleString('fr') + ' sum')
            }
         })
      }
   </script>
@endsection
