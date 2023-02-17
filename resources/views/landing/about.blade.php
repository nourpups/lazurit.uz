@extends('layouts.front')

@section('title', __('About'))

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
        <div class="row align-items-center mx-md-5">
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
                        {{__('Who of the girls and women does not dream of having an expensive, beautiful and elegant decoration? Everyone wants to look great, and silver and gold jewelry can complement the image. You can buy rings, earrings, diamonds, pendants, necklaces, bracelets, chains, etc. in the jewelry store «Lazurit» where customers are offered favorable terms of cooperation and a wide range of products for every taste and purse.')}}
                    </p>
                    <p data-aos="fade-up" data-aos-delay="400">
                        {{__('Who of the girls and women does not dream of having an expensive, beautiful and elegant decoration? Everyone wants to look great, and silver and gold jewelry can complement the image. You can buy rings, earrings, diamonds, pendants, necklaces, bracelets, chains, etc. in the jewelry store «Lazurit» where customers are offered favorable terms of cooperation and a wide range of products for every taste and purse.')}}
                    </p>

                </div>
            </div>
        </div>
</div>
<div class="banner-area pb-100">
    <div class="bg-img bg-padding-2" id="blurred-banner" style="background-image:url({{asset('assets/images/banner/about-us-2.webp')}});">
        <div class="container">
            <div class="banner-content-5 background-filter banner-content-5-static">
                {{-- <span data-aos="fade-up" data-aos-delay="200">Ассортимент</span> --}}
                    <h1 data-aos="fade-up" data-aos-delay="400">{{__('What «Lazurit» has to offer')}}</h1>
                    <p class="about-p" data-aos="fade-up" data-aos-delay="300">
                        {{__('The assortment of our online jewelry store Lazurit is very large: rings, earrings, pendants, necklaces, bracelets, chains, etc. Jewelry from the jewelry store catalog is made of gold, silver, can be with diamonds, other precious and semi-precious stones. Here you will find both strict classical models and brutal modern versions of unusual shapes with a unique decor in the form of carvings or placers of stones. You can pick up jewelry sets from us, in which there are several elements – earrings, a ring, a necklace, a bracelet. This option is relevant for those women who do not want to waste time and pick up different products. After all, it will be much simpler and more beautiful to look at a set whose elements have a single style, shape, shade.')}}
                    </p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="testimonial-area pb-100">
    <div class="container">
        <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
            <h2>Testimonial</h2>
        </div>
        <div class="testimonial-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-testimonial" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/testimonial/client-1.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore.</p>
                        <div class="testimonial-info">
                            <h4>Amrita Sha</h4>
                            <span> Our Client.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial" data-aos="fade-up" data-aos-delay="400">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/testimonial/client-2.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore.</p>
                        <div class="testimonial-info">
                            <h4>Andi Lane</h4>
                            <span> Designer.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial" data-aos="fade-up" data-aos-delay="600">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/testimonial/client-1.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore.</p>
                        <div class="testimonial-info">
                            <h4>Ted Ellison</h4>
                            <span> Developer.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/testimonial/client-2.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore.</p>
                        <div class="testimonial-info">
                            <h4>Aliah Pitts</h4>
                            <span> Customer.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="about-us-area pb-100">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-6">
                <div class="about-content text-center">
                    <h2 data-aos="fade-up" data-aos-delay="200">{{__('Goal')}}</h2>
                    <h1 data-aos="fade-up" data-aos-delay="300">{{__('Our Goal')}}</h1>
                    <p data-aos="fade-up" data-aos-delay="400">
                        {{__('Back in 2010, when creating the «Lazurit» brand, we clearly imagined that we wanted to offer our customers a new concept of a jewelry brand, a new format, a new sample of a jewelry store for discerning people who value their time, desires, needs and individuality')}}</p>
                    <p data-aos="fade-up" data-aos-delay="400">
                        {{__('Our clients are people who do not compromise when it comes to the quality of life of their loved ones and themselves. We have built and are building ambitious development plans, becoming a trendsetter, an indisputable authority in providing services in the selection of exclusive jewelry for our clients')}}
                    </p>
                    <p data-aos="fade-up" data-aos-delay="400">
                        {{__('Time has proved its loyalty to the chosen approach aimed at maximum satisfaction of customers who appreciate attention, have special requirements for comfort, service and tranquility, who know the value of luxury items such as exclusive jewelry.')}}
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
<div class="funfact-area bg-img pt-100 pb-70 mb-50" style="background-image:url({{asset('assets/images/bg/about-us-facts.webp')}})">
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
                        {{-- <h2>+</h2> --}}
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
</div>
{{-- <div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
            <h2>Our Staff</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="single-team-wrap text-center mb-30" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/images/team/team-1.png')}}" alt="">
                    <div class="team-info-position">
                        <div class="team-info">
                            <h3>Kari Rasmus</h3>
                            <span>Sales Man</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="single-team-wrap text-center mb-30" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{asset('assets/images/team/team-2.png')}}" alt="">
                    <div class="team-info-position">
                        <div class="team-info">
                            <h3>Kari Rasmus</h3>
                            <span>Sales Man</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="single-team-wrap text-center mb-30" data-aos="fade-up" data-aos-delay="600">
                    <img src="{{asset('assets/images/team/team-3.png')}}" alt="">
                    <div class="team-info-position">
                        <div class="team-info">
                            <h3>Kari Rasmus</h3>
                            <span>Sales Man</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subscribe-area pb-100">
    <div class="container">
        <div class="section-title-3 text-center mb-55" data-aos="fade-up" data-aos-delay="200">
            <h2>Join With Us!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore </p>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div id="mc_embed_signup" class="subscribe-form" data-aos="fade-up" data-aos-delay="400">
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
