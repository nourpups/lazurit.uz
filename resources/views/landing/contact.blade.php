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
<div class="contact-us-area pt-50 mb-30">
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
                            <p>{{__('Bunyodkor 15/1 street')}}, {{('Chilonzor district, Tashkent')}}</p>
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
                        <iframe title='{{__("Our Location")}}: {{__("Bunyodkor 15/1 street")}} {{__("Chilonzor district, Tashkent")}}, {{__("Orientation")}}: Bunyodkor "Oltin Markazi"' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.1173125877754!2d69.22374691886017!3d41.29238199084395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a4c6b819a5d%3A0x47032473c74b43!2z0JPQvtC70LQg0KbQtdC90YLRgA!5e1!3m2!1sru!2s!4v1677096770093!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe title='{{__("Our Location")}}: {{__("Bunyodkor 15/1 street")}} {{__("Chilonzor district, Tashkent")}}, {{__("Orientation")}}: Bunyodkor "Oltin Markazi"' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.4081110623065!2d69.22386183682974!3d41.29258512933488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a4c6b819a5d%3A0x47032473c74b43!2z0JPQvtC70LQg0KbQtdC90YLRgA!5e0!3m2!1sru!2s!4v1677096971720!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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
