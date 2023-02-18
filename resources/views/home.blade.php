@extends('layouts.front')

@section('title', "Main Page")

@section('content')
<div class="slider-area section-padding-2">
    <div class="container-fluid">
        <div class="slider-active swiper-container">
            <div class="swiper-wrapper">
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

                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1 slider-overly" style="background-image:url({{asset('assets/images/slider/home-banner.avif')}})">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6 col-12">
                                    <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                                        <h1 class="animated">{{__('Ignite Your Dreams')}}</h1>
                                        <div class="slider-btn btn-hover">
                                            <a href="{{route('catalog', 'Rings')}}" class="btn animated">
                                                {{__('Show Catalog')}} <i class=" ti-arrow-right "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slider-prev2 main-slider-nav2"><i class="fa fa-angle-left"></i></div>
                <div class="home-slider-next2 main-slider-nav2"><i class="fa fa-angle-right"></i></div>
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
{{-- <div class="product-area pb-95">
    <div class="container">
        <div class="section-border section-border-margin-1" data-aos="fade-up" data-aos-delay="200">
            <div class="section-title-timer-wrap bg-white">
                <div class="section-title-1">
                    <h2>Deal Of The Day</h2>
                </div>
                <div id="timer-1-active" class="timer-style-1">
                    <span>End In: </span>
                    <div data-countdown="2023/01/30"></div>
                </div>
            </div>
        </div>
        <div class="product-slider-active-1 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{asset('assets/images/product/product-1.png')}}" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span>-10%</span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">New Modern Sofa Set</a></h3>
                            <div class="product-price">
                                <span class="old-price">$25.89 </span>
                                <span class="new-price">$20.25 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-prev-1 product-nav-1" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-angle-left"></i></div>
            <div class="product-next-1 product-nav-1" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>
</div> --}}
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
{{-- <div class="product-area pb-60">
    <div class="container">
        <div class="section-title-3 text-center mb-55" data-aos="fade-up" data-aos-delay="200">
            <h2>Hot Products</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore </p>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop.html"><img src="{{asset('assets/images/banner/banner-23.png')}}" alt=""></a>
                    <div class="banner-content-10-position top-inc">
                        <div class="banner-content-10 banner-content-10-responsive">
                            <h3>Exceptional</h3>
                            <h4>Officr Chair</h4>
                        </div>
                    </div>
                    <div class="banner-btn-1">
                        <a href="shop.html">21 Products</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/product/product-7.png')}}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Round Standard Chair</a></h3>
                                <div class="product-price">
                                    <span>$30.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="400">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/product/product-5.png')}}" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Interior moderno render</a></h3>
                                <div class="product-price">
                                    <span class="old-price">$25.89 </span>
                                    <span class="new-price">$20.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="600">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/product/product-3.png')}}" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Easy Modern Chair</a></h3>
                                <div class="product-price">
                                    <span class="old-price">$45.00 </span>
                                    <span class="new-price">$40.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="800">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/product/product-9.png')}}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Modern Lounge Chairs</a></h3>
                                <div class="product-price">
                                    <span>$30.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
{{-- <div class="subscribe-area pb-100">
    <div class="container">
        <div class="section-title-3 text-center mb-55">
            <h2 data-aos="fade-up" data-aos-delay="200">Join With Us!</h2>
            <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore </p>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div id="mc_embed_signup" class="subscribe-form" data-aos="fade-up" data-aos-delay="600">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Email address…" name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe Now">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

