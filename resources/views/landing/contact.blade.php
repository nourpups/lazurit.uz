@extends('layouts.front')

@section('title', __('Contact Us'). " | " .__('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
   <meta name="description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection

@section('meta_og_tags')
   <meta property="og:type" content="website"/>
   <meta property="og:title" content="{{ __('Lazurit jewelry brand - jewelry made of precious metals and stones') }}"/>
   <meta property="og:url" content="https://lazurit.uz"/>
   <meta property="og:site_name" content="{{ __('Lazurit - a feel of luxury') }}"/>
   <meta property="og:image" content="#"/>
   <meta property="og:description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}"/>
@endsection

@section('content')
   <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">{{__('Contact Us')}}</h2>
            <ul data-aos="fade-up" data-aos-delay="400">
               <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
               <li><i class="ti-angle-right"></i></li>
               <li>{{__('Contact')}}</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="contact-us-area p-sm-5 mb-30">
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
                  <div class="open-time">
                     <p>{{__('Open')}} : {{__('Monday')}} – {{__('Saturday')}}</p>
                     <p>{{__('Close')}} : {{__('Sunday')}}</p>
                     <p>{{__('Assistance hours')}} : <span>8:00</span> - <span>20:00</span></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="map pt-120" data-aos="fade-up" data-aos-delay="200">
                  <iframe
                     title='{{__("Our Location")}}: {{__("Bunyodkor 15/1 street")}} {{__("Chilonzor district, Tashkent")}}, {{__("Orientation")}}: Bunyodkor "Oltin Markazi"'
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.1173125877754!2d69.22374691886017!3d41.29238199084395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a4c6b819a5d%3A0x47032473c74b43!2z0JPQvtC70LQg0KbQtdC90YLRgA!5e1!3m2!1sru!2s!4v1677096770093!5m2!1sru!2s"
                     style="border:0;" allowfullscreen="" loading="auto"
                     referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
