@extends('layouts.front')

@section('title', __('Cart') . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
  <meta name="description"
    content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
  <meta name="keywords"
    content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection

@section('meta_og_tags')
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:title" content="{{ $product->name }}" />
  <meta property="og:description"
    content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}" />
  <meta property="og:keywords" content="{{ $product->name }}, {{ $product->category->name }}" />
@endsection

@section('content')

  <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">{{ $product->name }}</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li><a href="{{ route('catalog', $product->category->name) }}">{{ $product->category->name }}</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>{{ $product->name }}</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="product-details-area pb-35 pt-30">
    <div class="container">
      <div class="row">
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
            <h2>{{ $product->name }}</h2>
            <div class="product-details-price my-3">
              <span class="new-price fs-3">{{ number_format($product->price, 0, '', ' ') }} sum</span>
            </div>
            <div class="product-details-action-wrap">
              <div class="single-product-cart btn-hover">
                <a href="{{ route('add_to_cart', [$product]) }}">{{ __('Add to Cart') }}</a>
              </div>
            </div>
            <div class="product-details-meta">
              <ul>
                <li><span class="title">ID:</span>{{ $product->id }}</li>
                <li><span class="title">{{ __('Category') }}:</span>
                  <ul>
                    <li>
                      <a href="{{ route('catalog', $product->category->name) }}">{{ $product->category->name }}</a>
                    </li>
                  </ul>
                </li>
                <li><span class="title">{{ __('Sample') }}: </span>585</li>
              </ul>
            </div>
            <h5>
              {{ $product->description }}
            </h5>
            {{-- <div class="social-icon-style-4">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 496 512">
                                    <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                </svg>
                            </a>
                        </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="related-product-area pb-5">
    <div class="container">
      <div class="section-title-2 st-border-center text-center" data-aos="fade-up" data-aos-delay="200">
        <h2>{{ __('Related Products') }}</h2>
      </div>
      <div class="related-product-active swiper-container">
        <div class="swiper-wrapper pt-5">
          @foreach ($related_products as $related_product)
            <div class="swiper-slide">
              <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="product-img img-zoom mb-25">
                  <a href="{{ route('product', $related_product) }}">
                    <img src="{{ asset('storage/' . $related_product->image) }}" alt="{{ $related_product->name }}">
                  </a>
                </div>
                <div class="product-content">
                  <h3><a href="{{ route('product', $related_product) }}">{{ $related_product->name }}</a></h3>
                  <div class="product-price">
                    {{-- <span class="old-price">${{ceil($related_product->price*1.2)}}</span> --}}
                    <span class="new-price">{{ number_format($related_product->price, 0, '', ' ') }} sum</span>
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
