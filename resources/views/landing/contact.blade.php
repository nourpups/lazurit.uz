@extends('layouts.front')

@section('title', __('Contact'))

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">{{__('Contact Us')}}</h2>
            <ul data-aos="fade-up" data-aos-delay="400">
                <li><a href="index.html">{{__('Home')}}</a></li>
                <li><i class="ti-angle-right"></i></li>
                <li>{{__('Contact')}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-area pt-100 mb-30">
        <div class="container">
            <div class="section-title-4 text-center mb-50" data-aos="fade-up" data-aos-delay="200">
                <h2>{{__('Our Outlet Address')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div class="contact-us-info-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-us-info-title">
                            <h3>Lazurit Service & CO</h3>
                        </div>
                        <div class="contact-us-info">
                            <p>{{__('Bunyodkor 15/1 street, Chilonzor district, Tashkent')}}</p>
                            <p>{{__('Orientation')}} : Bunyodkor "Oltin Markazi"</p>
                            <span>{{__('Telephone Enquiry')}} : <a href="tel:+998900977020">+998900977020</a></span>
                        </div>
                        <div class="contact-us-info">
                            <p>{{__('Assistance hours')}} : 8:00 - 20:00</p>
                            <p>{{__('Open')}} : {{__('Monday')}} – {{__('Saturday')}}</p>
                            <span> {{__('Sunday')}} : {{__('Close')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="map pt-120" data-aos="fade-up" data-aos-delay="200">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa918209a947a214ecbe62d0b562d50a7c12377d5e88082aced85571ab9e90e35&amp;source=constructor" width="900" height="570" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
</div>

{{-- <div class="contact-form-area pt-90 pb-100">
    <div class="container">
        <div class="section-title-4 text-center mb-55" data-aos="fade-up" data-aos-delay="200">
            <h2>Ask Us Anything Here</h2>
        </div>
        <div class="contact-form-wrap" data-aos="fade-up" data-aos-delay="200">
            <form class="contact-form-style" id="contact-form" action="assets/php/mail.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input name="name" type="text" placeholder="Name*">
                        <input name="email" type="email" placeholder="Email*">
                        <input name="subject" type="text" placeholder="Subject*">
                        <input name="phone" type="text" placeholder="Phone*">
                    </div>
                    <div class="col-lg-8">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 contact-us-btn btn-hover">
                        <button class="submit" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
            <p class="form-messege"></p>
        </div>
    </div>
</div> --}}
@endsection
