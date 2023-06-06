@extends('layouts.front')

@section('title', $product->name.' '. $product->art . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
   <meta name="description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection

@section('meta_og_tags')
   <meta property="og:type" content="website"/>
   <meta property="og:url" content="{{ url()->current() }}"/>
   <meta property="og:title" content="{{ $product->name }} {{$product->art}}"/>
   <meta property="og:description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}"/>
   <meta property="og:keywords" content="{{ $product->name }}, {{ $product->category->name }}"/>
   <meta property="og:image" content="{{asset('storage/'.$product->image)}}"/>
@endsection

@section('content')

   <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">{{ $product->name}} {{$product->art}} </h2>
            <ul data-aos="fade-up" data-aos-delay="400">
               <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
               <li><i class="ti-angle-right"></i></li>
               <li><a href="{{ route('catalog', $product->category) }}">{{ $product->category->name }}</a></li>
               <li><i class="ti-angle-right"></i></li>
               <li>{{ $product->name }} {{$product->art}}</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="product-details-area pb-35 pt-30">
      <div class="container">
         <div class="row p-sm-4">
            <div class="col-lg-6">
               <div class="product-details-img-wrap" data-aos="fade-up" data-aos-delay="200">
                  <div class="easyzoom-style">
                     <div class="easyzoom">
                        <a href="javascript:void(0)">
                           <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        </a>
                     </div>
                     <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/' . $product->image) }}">
                        <i class="pe-7s-search"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                  <div class="product-details-price mb-3">
                     <span class="new-price fs-3">{{ $product->formattedPrice() }} sum</span>
                  </div>
                  <div class="product-details-action-wrap">
                     <div class="single-product-cart btn-hover">
                        <a href="{{ route('add_to_cart', $product) }}">{{ __('Add to Cart') }}</a>
                     </div>
                  </div>
                  <div class="product-details-meta">
                     <ul>
                        <li><span class="title">Art:</span>{{ $product->art }}</li>
                        <li>
                           <span class="title">{{ __('Category') }}: </span>
                           <a href="{{ route('catalog', $product->category) }}">{{ $product->category->name }}</a>
                        </li>
                        <li><span
                              class="title">{{ __('Sample: :sample gold of the highest quality', ['sample' => 585]) }}</span>
                        </li>
                     </ul>
                  </div>
                  <hr>
                  <div class="product-details-meta">
                     <ul>
                        <li><span class="fw-bold">{{__('Payment')}}:</span>
                        <li><span class="title">{{__('Cash or Online')}}: Click, Payme, Visa, Mastercard</span>
                        </li>
                        <li>
                           <span class="fw-bold">{{__('For any questions')}}:</span>
                        </li>
                        <li>
                           <span class="d-flex align-items-center title py-1">{{__('Call')}}:
                              <a class="fs-3 px-1" href="tel:+998900977020"> +998 90 097 70 20</a>
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="related-product-area pt-5 pb-5">
      <div class="container">
         <div class="section-title-2 st-border-center text-center" data-aos="fade-up" data-aos-delay="200">
            <h2>{{ __('Related Products') }}</h2>
         </div>
         <div class="related-products-active swiper-container">
            <div class="swiper-wrapper pt-5">
               @foreach ($relatedProducts as $relatedProduct)
                  <div class="swiper-slide">
                     <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                           <a href="{{ route('product', [$relatedProduct->category, $relatedProduct]) }}">
                              <img src="{{ asset('storage/' . $relatedProduct->image) }}"
                                   alt="{{ $relatedProduct->name }}">
                           </a>
                        </div>
                        <div class="product-content">
                           <h3><a href="{{ route('product', [$relatedProduct->category, $relatedProduct]) }}">{{ $relatedProduct->name }} {{$relatedProduct->art}}</a></h3>
                           <div class="product-price">
                                {{--<span class="new-price">{{ $relatedProduct->formattedPrice() }} sum</span --}}
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
@endsection
