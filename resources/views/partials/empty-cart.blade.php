@extends('layouts.front')

@section('title', '')

@section('content')
   <div class="w-100 d-flex justify-content-center align-items-end"
        style="background: url({{ asset('assets/images/cart/empty-cart.png') }}) center no-repeat; height:75vh">
      <a class="btn btn-dark mb-4" href="{{ route('home') }}">{{ __('Go to Home') }}</a>
   </div>
@endsection
