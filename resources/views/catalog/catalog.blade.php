@extends('layouts.front')


@section('title',$category->name . ' | ' . __('Catalog') ." | ". __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones'))

@section('meta_tags')
   <meta name="description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day') }}">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
@endsection

@section('meta_og_tags')
   <meta property="og:type" content="website"/>
   <meta property="og:title"
         content="{{ __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones') }}"/>
   <meta property="og:url" content="https://lazurit.uz"/>
   <meta property="og:site_name" content="https://lazurit.uz"/>
   <meta property="og:image" content="#"/>
   <meta property="og:description"
         content="{{ __('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day') }}"/>
@endsection

@section('content')

   <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">{{$category->name}}</h2>
            <ul data-aos="fade-up" data-aos-delay="400">
               <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
               <li><i class="ti-angle-right"></i></li>
               <li>{{$category->name}}</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="shop-area pb-100">
      <div class="container">
         <div class="row flex-row-reverse">
            <div class="col-12">
               <div class="shop-topbar-wrapper mb-40">
                  <div class="shop-topbar-left" data-aos="fade-up" data-aos-delay="200">
                     <div class="showing-item">
                        <span>{{ $products->count() }} {{ __('results') }}</span>
                     </div>
                  </div>
                  <div class="shop-topbar-right" data-aos="fade-up" data-aos-delay="400">
                     <form method="GET" action="{{route('catalog', $category)}}" id="sort_form">
                        <div class="shop-sorting-area-my">
                           <select name="sort" id="sort_catalog">
                              <option {{request('sort') == 'relevance' ? 'selected': ''}} value="relevance">
                                 {{__('Relevance')}}
                              </option>
                              <option {{request('sort') == 'asc' ? 'selected': ''}} value="asc">
                                 {{__('Name (A-Z)')}}
                              </option>
                              <option {{request('sort') == 'desc' ? 'selected': ''}} value="desc">
                                 {{__('Name (Z-A)')}}
                              </option>
                           </select>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="shop-bottom-area">
                  <div class="tab-content jump">
                     <div id="shop-1" class="tab-pane active">
                        <div class="row">
                           @foreach ($products as $product)
                              @include('partials.card', ['product' => $product])
                           @endforeach
                        </div>
                        {{$products->WithQueryString()->links('pagination::bootstrap-4-catalog')}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


@endsection
