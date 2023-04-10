@extends('layouts.front')

@section('title', __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
  <meta name="description"
    content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
  <meta name="keywords"
    content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection

@section('meta_og_tags')
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ __('Lazurit jewelry brand - jewelry made of precious metals and stones') }}" />
  <meta property="og:url" content="http://lazurit.uz" />
  <meta property="og:site_name" content="{{ __('Lazurit - a feel of luxury') }}" />
  <meta property="og:image" content="#" />
  <meta property="og:description"
    content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}" />
@endsection

@section('content')
  <div class="slider-area section-padding-2">
    <div class="container-fluid">
      <div class="slider-active swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1 slider-overly"
              style="background-image:url({{ asset('assets/images/slider/home-banner-5.avif') }})">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-5 col-md-6 col-12">
                    <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                      <h1 class="animated">{{ __('Ignite Your Dreams') }}</h1>
                      <div class="slider-btn btn-hover">
                        <a href="{{ route('catalog', $categories[1]['name']) }}" class="btn animated">
                          {{ __('Show Catalog') }} <i class="ti-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1 slider-overly"
              style="background-image:url({{ asset('assets/images/slider/home-banner-4.avif') }});">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-5 offset-lg-7 offset-md-7 col-md-6 col-12">
                    <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                      <h1 class="animated">{{ __('Ignite Your Dreams') }}</h1>
                      <div class="slider-btn btn-hover">
                        <a href="{{ route('catalog', $categories[0]['name']) }}" class="btn animated">
                          {{ __('Show Catalog') }} <i class="ti-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="home-slider-prev2 main-slider-nav2"><i class="ti-angle-left"></i></div>
          <div class="home-slider-next2 main-slider-nav2"><i class="ti-angle-right"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="banner-area section-padding-2 py-3">
    <div class="container-fluid">

      @include('partials.home_categories_list', $categories)
    </div>
  </div>

  <div class="banner-area section-padding-2 pb-95">
    <div class="container-fluid">
      <div class="bg-img bg-padding-3"
        style="background-image:url({{ asset('assets/images/slider/home-banner-3.avif') }})">
        <div class="banner-content-5 banner-content-5-static banner-content-5-home">
          <h1 class="font-montserrat" data-aos="fade-up" data-aos-delay="400">{{ __('Celebrate all the love') }}</h1>
          <p data-aos="fade-up" data-aos-delay="600">{{ __('We have the perfect gift for everyone you cherish') }} </p>
          <div class="btn-style-3 btn-hover" data-aos="fade-up" data-aos-delay="800">
            <a class="btn border-radius-none"
              href="{{ route('catalog', $categories[0]['name']) }}">{{ __('Show Gifts') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="brand-logo-area pb-95">
    <div class="container">
      <h1 class="animated text-center">{{ __('Brands') }}</h1>
      <div class="brand-logo-active swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="200">
              <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/Cartier-150x150.jpg"
                  alt=""></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="400">
              <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/13-150x150.jpg"
                  alt=""></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="600">
              <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/Fontana-150x150.jpg"
                  alt=""></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="800">
              <a href="#"><img
                  src="https://diamant.uz/image/cache/catalog/brands/Bvlgari_1200x1200%20(1)-150x150.jpg"
                  alt=""></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1000">
              <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/01-150x150.jpg"
                  alt=""></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1200">
              <a href="#"><img
                  src="https://diamant.uz/image/cache/catalog/brands/tiffany-co-logo-png-transparent-150x150.png"
                  alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
