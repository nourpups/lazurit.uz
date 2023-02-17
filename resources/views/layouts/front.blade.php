<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Urdan - Minimal eCommerce HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Urdan - Minimal eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description"
        content="Еще в 2010 году, создавая бренд «Lazurit» мы отчетливо представляли, что хотим предложить нашим клиентам новую концепцию ювелирного бренд, новый формат, новый образец ювелирного магазина для взыскательных людей, ценящих свое время, желания, потребности и индивидуальностья" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Add site Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/favicon/cropped-favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/cropped-favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/cropped-favicon-270x270.png') }}" />

    <!-- All CSS is here
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slinky.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>

    <div class="main-wrapper main-wrapper-2">
        <header class="header-area header-responsive-padding header-height-2 section-padding-2">
            <div class="header-bottom sticky-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="text-uppercase" href="{{ route('home') }}">{{__('Home')}}</a>
                                        </li>
                                        <li>
                                            <a class="text-uppercase" href="#">{{__('Catalog')}}</a>
                                            <ul class="mega-menu-style mega-menu-mrg-1">
                                                <li>
                                                    <ul>
                                                        @include('layouts.partials.header_nav', $categories)
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="text-uppercase" href="{{ route('about') }}">{{__('About')}}</a>
                                        </li>
                                        <li>
                                            <a class="text-uppercase" href="{{ route('contact') }}">{{__('Contact')}}</a>
                                        </li>
                                        <li>
                                            @include('layouts.partials.locales')
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="header-action-wrap">
                                <div class="header-action-style header-search-1">
                                    <a class="search-toggle" href="#">
                                        <i class="pe-7s-search s-open"></i>
                                    </a>
                                </div>
                                <div class="header-action-style">
                                    @guest
                                        <a title="{{__('Login')}} {{__('or')}} {{__('Register')}}" href="{{ route('login') }}"><i
                                                class="pe-7s-user"></i></a>
                                    @endguest
                                    @auth
                                        <a title="{{__('Logout')}}" href="{{ route('logout') }}"><i class="fa fa-sign-out"></i></a>
                                    @endauth
                                </div>
                                <div class="header-action-style header-action-cart">
                                    <a class="cart-active" href="#"><i
                                            class="pe-7s-shopbag"></i>
                                            @if (!empty($cart))
                                                <span class="product-count bg-black">{{$cart->quantity()}}</span>
                                            @endif
                                    </a>
                                </div>
                                @auth

                                    @if(auth()->user()->is_admin())
                                        <div class="header-action-style">
                                            <a class="" title="Admin Panel" href="{{ route('products') }}">
                                                <i class="pe-7s-plugin"></i>
                                            </a>
                                        </div>
                                    @endif

                                @endauth
                                <div class="header-action-style d-block d-lg-none">
                                    <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="predictive__search--box" id="search_box">
                <div class="predictive__search--box__inner">

                <input class="predictive__search--input" placeholder="{{__('Search')}}..." type="text"
                    id="search" name="search">

                </div>
                <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas="">
                    <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                        height="30.443" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                    </svg>
                </button>
                <div class="search-menu">
                    <div class="search-related">
                        <div class="row append_search_result" id="search_result">

                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
@if(!empty($cart))
        @if ($cart->quantity() != 0)
        <div class="cart-content">
                <h3>{{__('Cart')}}</h3>
                <ul>
                        @foreach ($cart->products as $product)
                            <li>
                                <div class="cart-img">
                                    <a href="#"><img src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}"></a>
                                </div>
                                <div class="cart-title">
                                    <h4><a href="#">{{$product->name}}</a></h4>
                                    <span> {{$product->pivot->count}} × ${{$product->price}}</span>
                                </div>
                                <div class="cart-delete">
                                    <form action="{{route('cart.delete', $product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn cart-delete-btn">×</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach


                </ul>
                <div class="cart-total">
                        <h4>{{__('Subtotal')}} : <span>${{$cart->total_sum()}}</span></h4>
                </div>
                <div class="cart-btn btn-hover">
                    <a class="theme-color" href="{{route('cart')}}">{{__('View Cart')}}</a>
                </div>
                <div class="checkout-btn btn-hover">
                    <a class="theme-color" href="{{route('cart.confirm')}}">{{__('Confirm Order')}}</a>
                </div>
            </div>
        @endif
        @else
        <i>Ваша корзина пуста.</i>
    @endif
    </div>
</div>
<div class="container">
    @if (session('success'))
    <div class="alert alert-success text-center fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if (session('warning'))
    <div class="alert alert-warning text-center fade show" role="alert">
        {{ session('warning') }}
    </div>
    @endif
    @if (session('login'))
    <div class="alert alert-success text-center fade show" role="alert">
        {{ session('login') }}
    </div>
    @php
        session()->forget('login')
    @endphp
    @endif

</div>
        @yield('content')

        <footer class="footer-area footer-area-margin-lr">
            <div class="bg-gray-2">
                <div class="container">
                    <div class="footer-top pt-80 pb-35">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-about mb-40">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                                    </div>
                                    <p>a feel of luxury</p>
                                    {{-- <div class="payment-img">
                                    <a href="#"><img src="{{asset('assets/images/icon-img/payment.png')}}" alt="logo"></a>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <h3 class="footer-title">{{__('Information')}}</h3>
                                    <ul>
                                        <li><a href="{{ route('about') }}">{{__('About')}}</a></li>
                                        <li><a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                                @include('layouts.partials.footer_nav', $categories)
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-widget-margin-2 footer-address mb-40">
                                    <h3 class="footer-title">{{__('Get in touch')}}</h3>
                                    <ul>
                                        <li><span>{{__('Address')}}: </span>{{__('Bunyodkor 15/1 street')}},<br> {{__('Chilonzor district, Tashkent')}}</li>
                                        <li><span>{{__('Telephone Enquiry')}}:</span> <a href="tel:+998900977020">+998900977020</a></li>
                                    </ul>
                                    <div class="open-time">
                                        <p>{{__('Assistance hours')}} : <span>8:00 </span> - <span>20:00 </span></p>
                                        <p>{{__('Open')}} : {{__('Monday')}} - {{__('Saturday')}}</p>
                                        <p>{{__('Sunday')}} : {{__('Close')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer-bottom copyright text-center">
                    <p>Copyright  <b>lazurit.uz</b>  ©2023 All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- Product Modal start -->
        <div class="modal fade quickview-modal-style" id="confirm_order" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                class=" ti-close "></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="login-register-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 offset-lg-2">
                                        <div class="login-register-wrapper">
                                            <div class="login-register-tab-list nav">
                                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                                    <h4> {{__('Login')}} </h4>
                                                </a>
                                                <a data-bs-toggle="tab" href="#lg2">
                                                    <h4> {{__('Register')}} </h4>
                                                </a>
                                            </div>
                                            <h5 class="mb-3">{{__("Please login or register first, to confirm your order")}}</h5>
                                            <div class="tab-content">
                                                <div id="lg1" class="tab-pane active">
                                                    <div class="login-form-container">
                                                        <div class="login-register-form">

                                                            <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                                <input type="text" name="login"
                                                                    class="@error('login') is-invalid @enderror"
                                                                    value="{{ old('login') }}"
                                                                    placeholder="{{ __('Phone') }} {{__('or')}} {{__('Name')}}"
                                                                    required
                                                                    autofocus>
                                                                <input id="password" name="password" type="password"
                                                                    class="@error('password') is-invalid @enderror"
                                                                    placeholder="{{ __('Password') }}"
                                                                    required>
                                                                <div class="button-box btn-hover">
                                                                    <button>{{__('Login')}}</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="lg2" class="tab-pane">
                                                    <div class="login-form-container">
                                                        <div class="login-register-form">
                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf
                                                                <input type="text" name="name"
                                                                    class="@error('name') is-invalid @enderror"
                                                                    value="{{ old('name') }}"
                                                                    placeholder="{{ __('Name') }}" required
                                                                    autofocus>
                                                                <input type="text" name="phone"
                                                                    class="@error('phone') is-invalid @enderror"
                                                                    value="{{ old('phone') }}"
                                                                    placeholder="{{ __('Phone') }}" required>
                                                                <input type="password" name="password"
                                                                    class="@error('password') is-invalid @enderror"
                                                                    placeholder="{{ __('Password') }}" required>
                                                                <input type="password" name="password_confirmation"
                                                                    placeholder="{{ __('Confirm password') }}"
                                                                    required>
                                                                <div class="button-box btn-hover">
                                                                    <button>{{__('Register')}}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Modal end -->
        <!-- Mobile Menu start -->
        <div class="off-canvas-active">
            <a class="off-canvas-close"><i class=" ti-close "></i></a>
            <div class="off-canvas-wrap">
                {{-- <div class="welcome-text off-canvas-margin-padding">
                    <p>Default Welcome Msg! </p>
                </div> --}}
                <div class="mobile-menu-wrap off-canvas-margin-padding-2">
                    <div id="mobile-menu" class="slinky-mobile-menu text-left">
                        <ul>
                            <li>
                                <a class="text-uppercase" href="{{ route('home') }}">{{__('Home')}}</a>
                            </li>
                            <li>
                                <a class="text-uppercase" href="#">{{__('Catalog')}}</a>
                                <ul>
                                    @include('layouts.partials.header_nav', $categories)
                                </ul>
                            </li>
                            <li>
                                <a class="text-uppercase" href="{{ route('about') }}">{{__('About')}}</a>
                            </li>
                            <li>
                                <a class="text-uppercase" href="{{ route('contact') }}">{{__('Contact')}}</a>
                            </li>
                            <li>
                                @include('layouts.partials.locales')
                            </li>

                        </ul>
                        {{-- <ul>
                            <li>
                                <a href="#">HOME</a>
                                <ul>
                                    <li><a href="index.html">Home version 1 </a></li>
                                    <li><a href="index-2.html">Home version 2</a></li>
                                    <li><a href="index-3.html">Home version 3</a></li>
                                    <li><a href="index-4.html">Home version 4</a></li>
                                    <li><a href="index-5.html">Home version 5</a></li>
                                    <li><a href="index-6.html">Home version 6</a></li>
                                    <li><a href="index-7.html">Home version 7</a></li>
                                    <li><a href="index-8.html">Home version 8</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">SHOP</a>
                                <ul>
                                    <li>
                                        <a href="#">Shop Layout</a>
                                        <ul>
                                            <li><a href="shop.html">Standard Style</a></li>
                                            <li><a href="shop-sidebar.html">Shop Grid Sidebar</a></li>
                                            <li><a href="shop-list.html">Shop List Style</a></li>
                                            <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-location.html">Store Location</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">ABOUT US</a>
                            </li>
                            <li>
                                <a href="contact-us.html">CONTACT US</a>
                            </li>
                        </ul>--}}
                    </div>
                </div>
                {{--<div class="language-currency-wrap language-currency-wrap-modify">
                    <div class="currency-wrap border-style">
                        <a class="currency-active" href="#">$ Dollar (US) <i class=" ti-angle-down "></i></a>
                        <div class="currency-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                <li><a href="#">Riyal (SAR) </a></li>
                                <li><a href="#">Rupee (INR) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="language-wrap">
                        <a class="language-active" href="#"><img
                                src="{{ asset('assets/images/icon-img/flag.png') }}" alt=""> English <i
                                class=" ti-angle-down "></i></a>
                        <div class="language-dropdown">
                            <ul>
                                <li><a href="#"><img src="{{ asset('assets/images/icon-img/flag.png') }}"
                                            alt="">English </a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/icon-img/spanish.png') }}"
                                            alt="">Spanish</a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/icon-img/arabic.png') }}"
                                            alt="">Arabic </a></li>
                            </ul>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- All JS is here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slinky.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
<script>
       $(document).ready(function() {
        setTimeout(function() {
            $(".alert").alert('close');
        }, 6000);
    });

    $(document).ready(function() {
        $('#sort_catalog').on('change', function() {
            document.forms['sort_form'].submit();

        });
    });

    $('#search_box').on('keyup', '#search', function() {
        var search_query = $(this).val();
        if(search_query.length >= 2)
        {
            $.ajax({
                method: 'POST',
                url: "{{ route('search') }}",
                data: {
                    '_token': '{{ csrf_token() }}',
                    search: search_query,
                },
                success: function(res) {
                    $('#search_result').html(res);
                }
            });
        } else {
            $('#search_result').html('');
        }
    });
    $(function() {
        $(document).on("click","#pagination a",function(){

          //get url and make final url for ajax
          var url=$(this).attr("href");
          var append=url.indexOf("?")==-1?"?":"&";
          var finalURL=url+append+$("#search").serialize();

          $.post(finalURL,{'_token': '{{ csrf_token() }}'},function(data){
            $("#search_result").html(data);
          });
          return false;
        })

      });
</script>
</body>

</html>
