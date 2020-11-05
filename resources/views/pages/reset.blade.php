@extends('layouts.default')

@section('title')
    Reset {{ $name }}
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/reset.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
        <div class="reset_password_account">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-12 justify-content-center">
                        <div class="logo-site mx-auto">
                            <a href="/" target="_self">
                                <img src="{{ asset('images/logo/logo.jpg') }}" class="align-item-center" alt="site_log">
                            </a>
                        </div>
                        {!! Form::open(['action' => 'userController@updatePassword','method' => 'post','class' => 'form_rest_password','name' => 'form_rest_password']) !!}
                            {!! Form::hidden('_method','post',['class' => 'method']) !!}

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            <div class="validate_error d-none"></div>
                            <div>
                                <label>New Password *</label>
                                <div class="username-input" data-validate="password Required">
                                    <input placeholder="New Password" type="password"
                                        name="password" minlength="6" autocomplete="off" required autofocus>
                                </div>
                            </div>

                            <div>
                                <label>Confirm Password *</label>
                                <div class="password-input" data-validate="Confirm Required">
                                    <input type="password" required placeholder="Confirm Password"
                                        name="confirm_password" minlength="6" autocomplete="off">
                                </div>
                            </div>

                            <div class="rest_password text-center">
                                <input type="submit" value="Reset Password" name="reset_password_button">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/pages/reset.js') }}"></script>
@endsection
