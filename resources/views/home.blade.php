@extends('layouts.front')

@section('title', "Main Page")

@section('content')
<div class="slider-area section-padding-2">
    <div class="container-fluid">
        <div class="slider-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1 slider-overly" style="background-image:url({{asset('assets/images/slider/home-banner-5.avif')}})">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6 col-12">
                                    <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                                        <h1 class="animated">{{__('Ignite Your Dreams')}}</h1>
                                        <div class="slider-btn btn-hover">
                                            <a href="{{route('catalog', 'Bracelets')}}" class="btn animated">
                                                {{__('Show Catalog')}} <i class=" ti-arrow-right "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1 slider-overly" style="background-image:url({{asset('assets/images/slider/home-banner-4.avif')}});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5 offset-lg-7 offset-md-7 col-md-6 col-12">
                                    <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                                        <h1 class="animated">{{__('Ignite Your Dreams')}}</h1>
                                        <div class="slider-btn btn-hover">
                                            <a href="{{route('catalog', 'Necklaces')}}" class="btn animated">
                                                {{__('Show Catalog')}} <i class=" ti-arrow-right "></i>
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

<div class="banner-area section-padding-2 pt-30 pb-30">
    <div class="container-fluid">
        <div class="row">

            @include('components.home_categories_list', $categories)

        </div>
    </div>
</div>
<div class="banner-area section-padding-2 pb-95">
    <div class="container-fluid">
        <div class="bg-img bg-padding-3" style="background-image:url({{asset('assets/images/slider/home-banner-3.avif')}})">
            <div class="banner-content-5 banner-content-5-static banner-content-5-home">
                <h1 class="font-montserrat" data-aos="fade-up" data-aos-delay="400">{{__('Celebrate all the love')}}</h1>
                <p data-aos="fade-up" data-aos-delay="600">{{__('We have the perfect gift for everyone you cherish')}} </p>
                <div class="btn-style-3 btn-hover" data-aos="fade-up" data-aos-delay="800">
                    <a class="btn border-radius-none" href="{{route('catalog', 'Necklaces')}}">{{__('Show Gifts')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-95">
    <div class="container">
        <h1 class="animated text-center">{{__('Brands')}}</h1>
        <div class="brand-logo-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/Cartier-150x150.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="400">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/13-150x150.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="600">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/Fontana-150x150.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="800">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/Bvlgari_1200x1200%20(1)-150x150.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1000">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/01-150x150.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1200">
                        <a href="#"><img src="https://diamant.uz/image/cache/catalog/brands/tiffany-co-logo-png-transparent-150x150.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

