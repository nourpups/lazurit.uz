@extends('layouts.front')

@section('content')
<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a href="{{route('login')}}">
                            <h4> {{__('Login')}} </h4>
                        </a>
                        <a class="active" href="{{route('register')}}">
                            <h4> {{__('Register')}} </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                            <div class="login-register-form">
                                <form method="POST" action="{{ route('register') }}" id="auth_form">
                                    @csrf
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}"  autofocus>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}">
                                    <input type="password" name="password" placeholder="{{ __('Password') }}">
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
@endsection

