@extends('layouts.front')

@section('title', __('About'). " | " .__('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
  <meta name="description" content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
  <meta name="keywords" content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
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
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
          <div class="breadcrumb-content text-center">
              <h2 data-aos="fade-up" data-aos-delay="200">{{__('About Us')}}</h2>
              <ul data-aos="fade-up" data-aos-delay="400">
                  <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
                  <li><i class="ti-angle-right"></i></li>
                  <li>{{__('About')}}</li>
              </ul>
          </div>
      </div>
  </div>
  <div class="about-us-area pt-100 pb-100">
          <div class="row align-items-center mx-md-5 mx-1">
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="about-img" data-aos="fade-up" data-aos-delay="400">
                      <img src="{{asset('assets/images/banner/about-us-4.webp')}}" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="about-content text-center">
                      <h2 data-aos="fade-up" data-aos-delay="200">{{__('Jewelry')}}</h2>
                      <h1 data-aos="fade-up" data-aos-delay="300">{{__('The best jewelry')}}</h1>
                      <p data-aos="fade-up" data-aos-delay="400">
                          {{__('In the world of jewelry art, there are brands that simply continue to exist, and there are those that are an inspiration for many. One of these brands is our jewelry brand, which has been a major player in the market for many years and has a huge base of satisfied customers  ')}}.
                      </p>
                      <p data-aos="fade-up" data-aos-delay="400">
                          {{__('Our brand loves what it does and is always striving for improvement. Each product created by our craftsmen is a real masterpiece that combines beauty, elegance and the highest quality')}}.
                      </p>

                  </div>
              </div>
          </div>
  </div>
  <div class="banner-area pb-100">
      <div class="bg-img bg-padding-2" style="background-image:url({{asset('assets/images/banner/about-us-2.webp')}});">
        <div class="back-blur">
          <div class="container">
              <div class="banner-content-5 banner-content-5-static">
                      <h1 data-aos="fade-up" data-aos-delay="400">{{__('What is the peculiarity of "Lazurit"')}}?</h1>
                      <p class="about-p" data-aos="fade-up" data-aos-delay="300">
                          {{__('We constantly monitor new trends in the world of jewelry art and introduce them into our production process. But at the same time, we do not forget about our uniqueness and individuality, which make our brand truly unique')}}.
                      </p>
              </div>
          </div>
        </div>
      </div>
  </div>
  <div class="about-us-area pb-100">
      <div class="container">
          <div class="row align-items-center ">
              <div class="col-lg-6">
                  <div class="about-content text-center">
                      <h2 data-aos="fade-up" data-aos-delay="200">{{__('Goal')}}</h2>
                      <h1 data-aos="fade-up" data-aos-delay="300">{{__('Our Goal')}}</h1>
                      <p data-aos="fade-up" data-aos-delay="400">
                          {{__('Our goal is not just to sell jewelry, but to create real works of art that will accompany our customers throughout their lives. We are proud that our brand has become a symbol of beauty and elegance for many people, and we strive to maintain this status for many years')}}
                      </p>
                      <p data-aos="fade-up" data-aos-delay="400">
                          {{__('We are grateful to our customers for the trust they place in us, and we are always happy to help them choose the perfect decoration for any occasion. Our team of professionals is always ready to answer any questions and help with the selection of jewelry that will emphasize the individuality and beauty of each of our clients')}}
                      </p>
                      <p data-aos="fade-up" data-aos-delay="400">
                          {{__('All this makes our brand truly unique and inimitable, and we will continue to delight our customers for many years')}}.
                      </p>
                      <p class="fw-bold" data-aos="fade-up" data-aos-delay="400">
                          {{__('Jewelry brand «Lazurit» — a feel of luxury!')}}
                      </p>

                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about-img" data-aos="fade-up" data-aos-delay="400">
                      <img src="{{asset('assets/images/banner/about-us-5.avif')}}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{-- <div class="funfact-area bg-img pt-100 pb-70 mb-50" style="background-image:url({{asset('assets/images/bg/about-us-facts.webp')}})">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <div class="single-funfact text-center mb-30" data-aos="fade-up" data-aos-delay="200">
                      <div class="funfact-img">
                          <img src="{{asset('assets/images/icon-img/client.png')}}" alt="">
                      </div>
                      <div class="d-flex justify-content-center">
                          <h2 class="count">70</h2>
                          <h2>+</h2>
                      </div>
                      <span>{{__('Happy Clients')}}</span>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <div class="single-funfact text-center mb-30" data-aos="fade-up" data-aos-delay="400">
                      <div class="funfact-img">
                          <img src="{{asset('assets/images/icon-img/award.png')}}" alt="">
                      </div>
                      <div class="d-flex justify-content-center">
                          <h2 class="count">5</h2>
                      </div>
                      <span>{{__('No Idea Yet')}}</span>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <div class="single-funfact text-center mb-30" data-aos="fade-up" data-aos-delay="600">
                      <div class="funfact-img">
                          <img src="{{asset('assets/images/icon-img/item.png')}}" alt="">
                      </div>
                      <div class="d-flex justify-content-center">
                          <h2 class="count">150</h2>
                          <h2>+</h2>
                      </div>
                      <span>{{__('Total Items')}}</span>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <div class="single-funfact text-center mb-30 mrgn-none" data-aos="fade-up" data-aos-delay="800">
                      <div class="funfact-img">
                          <img src="{{asset('assets/images/icon-img/cup.png')}}" alt="">
                      </div>
                      <div class="d-flex justify-content-center">
                          <h2 class="count">300</h2>
                          <h2>+</h2>
                      </div>
                      <span>{{__('Chosen By')}}</span>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
@endsection
