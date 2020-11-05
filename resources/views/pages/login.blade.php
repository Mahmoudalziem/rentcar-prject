@extends('layouts.default')

@section('title')
    Login
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}" />
@endsection

@section('content')
    <section class="login_section">
        <div class="container-fluid">
            <div class="mx-auto">
                <div class="login_content">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-12 d-lg-block d-none">
                            <div class="login_page">
                            <img alt="login_image" class="d-block" src="{{ asset('images/slider/hover.jpg') }}">
                                <svg class="first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="#fff" fill-opacity="1" d="M0,288L17.1,288C34.3,288,69,288,103,256C137.1,224,171,160,206,128C240,96,274,96,309,106.7C342.9,117,377,139,411,133.3C445.7,128,480,96,514,101.3C548.6,107,583,149,617,138.7C651.4,128,686,64,720,69.3C754.3,75,789,149,823,160C857.1,171,891,117,926,117.3C960,117,994,171,1029,192C1062.9,213,1097,203,1131,176C1165.7,149,1200,107,1234,122.7C1268.6,139,1303,213,1337,250.7C1371.4,288,1406,288,1423,288L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
                                </svg>
                                <svg class="second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="#fff" fill-opacity="1" d="M0,288L17.1,288C34.3,288,69,288,103,256C137.1,224,171,160,206,128C240,96,274,96,309,106.7C342.9,117,377,139,411,133.3C445.7,128,480,96,514,101.3C548.6,107,583,149,617,138.7C651.4,128,686,64,720,69.3C754.3,75,789,149,823,160C857.1,171,891,117,926,117.3C960,117,994,171,1029,192C1062.9,213,1097,203,1131,176C1165.7,149,1200,107,1234,122.7C1268.6,139,1303,213,1337,250.7C1371.4,288,1406,288,1423,288L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="login_details">
                                <div class="login_details_signup">
                                    <!----->
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="site_logo">
                                            <a href="/" target="_self">
                                                <img src="{{ asset('images/logo/logo.jpg') }}" alt="site_log">
                                            </a>
                                        </span>
                                        <span>Don't have an account ? </span>
                                        <span class="signup_button">
                                            <a href="register" target="_self">Register</a>
                                        </span>
                                    </div>
                                    <!----->
                                </div>

                                <div class="login_head">
                                    <h3>Welcome</h3>
                                    <p>
                                        Welcome back, please login to your account.
                                    </p>
                                </div>
                                <!------->
                                {!! Form::open(['method' => 'POST','action' => 'loginController@access','name'=>'form_login','class'=>'form_login']) !!}
                                    {{ Form::hidden('_method','POST',['class' => '_method']) }}
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <div class="error">{{ $error }}</div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-primary">
                                            <div class="error">{{ session('error') }}</div>
                                        </div>
                                    @endif
                                    <div class="group_input" data-validate="E-Mail Required">
                                        <input type="email" class="input_100" name="email" placeholder="E-Mail" value="{{ old('email') }}">
                                        <i class="fa fa-envelope"></i>
                                    </div>

                                    <div class="group_input" data-validate="Password Required">
                                        <input type="password" class="input_100" name="password" placeholder="Password" autocomplete="off" value="{{ old('password') }}">
                                        <i class="fa fa-lock"></i>
                                        <span class="show_password">
                                            <i class="fa fa-eye" onclick="showPassword(this)"></i>
                                        </span>
                                    </div>

                                    <div class="group_forget_remember">

                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input remember" name="remember" id="custom_check">
                                            <label class="custom-control-label mt-0" for="custom_check">
                                                Remember Me
                                            </label>
                                        </div>

                                        <div class="forget_password">
                                            <a href="/forget">Forget Password ?</a>
                                        </div>

                                    </div>

                                    <div class="form_submit_button">
                                        <button type="submit" class="btn submit_form">
                                            Login
                                            <i class="fa fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {{ Html::script(asset('js/pages/login.js')) }}
@endsection
