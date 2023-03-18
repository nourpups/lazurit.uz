@extends('layouts.front')

@section('content')
<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" href="{{route('login.post')}}">
                            <h4> {{__('Login')}} </h4>
                        </a>
                        <a  href="{{route('register')}}">
                            <h4> {{__('Register')}} </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <div id="error-list">

                                    </div>
                                    <form method="POST" action="{{ route('login') }}"id="auth_form">
                                        @csrf
                                        <input type="text" name="login" value="{{ old('login') }}" placeholder="{{ __('Phone')}} {{__('or')}} {{ __('Name') }}" autofocus autocomplete="username">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                        <input id="password" name="password" type="password"  placeholder="{{ __('Password') }}" autocomplete="current-password">
                                        @error('password')
                                        {{$message}}
                                        @enderror
                                        <div class="button-box btn-hover">
                                            <button type="submit">{{__('Login')}}</button>
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
