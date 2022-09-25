@extends('livewire.web.base.base_extends')

@section('content')


<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Login</h2>
    
                        <p class="woocommerce-register">
                            Don't have an account yet? <a href="#" class="text-decoration-underline">Sign Up for Free</a>
                        </p>
                    </div>
                    <form class="woocommerce-form woocommerce-form-login login" method="POST" action="{{ route('login') }}">
                    	@csrf

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Email address&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" id="email" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" id="password" type="password" name="password" required autocomplete="current-password"  placeholder="Password">
                        </p>
                       
                       <div class="d-flex align-items-center justify-content-between py-2">
                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    {{-- <input class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" id="remember_me" name="remember" value="forever"> <span>Remember me</span> --}}

                                    <x-jet-checkbox class="woocommerce-form__input woocommerce-form__input-checkbox" id="remember_me" name="remember" />
                    				<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

                                </label>
                                
                            </p>
    
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Forgot password?</a>
                            </p>
                       </div>
    
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category end-->



@endsection