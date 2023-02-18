
@extends('layouts.front')

@section('content')

    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">{{$product->name}}</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li><a href="{{route('catalog', $product->category->name)}}">{{$product->category->name}}</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>{{$product->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="easyzoom-style">
                            <div class="easyzoom">
                                <a href="#">
                                    <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{asset('storage/'.$product->image)}}">
                                <i class="pe-7s-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                        <h2>{{$product->name}}</h2>
                        <div class="product-details-price">
                            <span class="old-price">$ {{ceil($product->price*1.2)}} </span>
                            <span class="new-price">$ {{$product->price}}</span>
                        </div>
                        <div class="product-details-action-wrap">
                            <div class="single-product-cart btn-hover">
                                <a href="{{route('add_to_cart', $product->id)}}">{{__('Add to Cart')}}</a>
                            </div>
                            {{-- <div class="single-product-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="single-product-compare">
                                <a title="Compare" href="#"><i class="pe-7s-shuffle"></i></a>
                            </div> --}}
                        </div>
                        <div class="product-details-meta">
                            <ul>
                                <li><span class="title">ID:</span>{{$product->id}}</li>
                                <li><span class="title">{{__('Category')}}:</span>
                                    <ul>
                                        <li><a href="#">{{$product->category->name}}</a></li>
                                    </ul>
                                </li>
                                {{-- <li><span class="title">Tags:</span>
                                    <ul class="tag">
                                        <li><a href="#">Furniture</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="social-icon-style-4">
                            <a href="#"><i class="fa fa-telegram"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-85">
        <div class="container">
            <div class="description-review-topbar nav" data-aos="fade-up" data-aos-delay="200">
                <a class="active" data-bs-toggle="tab" href="#des-details1"> {{__('Description')}} </a>
                <a data-bs-toggle="tab" href="#des-details2" class=""> {{__('Information')}} </a>
            </div>
            <div class="tab-content">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-content text-center">
                        <p data-aos="fade-up" data-aos-delay="400"> {{$product->description}} </p>
                        {{-- <p data-aos="fade-up" data-aos-delay="600">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p> --}}
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="specification-wrap table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="width1">{{__('Sample')}}</td>
                                    <td>585</td>
                                </tr>
                                <tr>
                                    <td class="width1">{{__('Weight')}}</td>
                                    <td>2.3 {{__('gr')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area pb-95">
        <div class="container">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>{{__('Related Products')}}</h2>
            </div>
            <div class="related-product-active swiper-container">
                <i>
                    Slider
                </i>
                <div class="swiper-wrapper">

                    @foreach($related_products as $related_product)
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="{{route('product', $related_product)}}">
                                    <img src="{{asset('storage/'.$related_product->image)}}" alt="{{ $related_product->name }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('product', $related_product)}}">{{$related_product->name}}</a></h3>
                                <div class="product-price">
                                    <span class="old-price">${{ceil($related_product->price*1.2)}}</span>
                                    <span class="new-price">${{$related_product->price}}</span>
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
