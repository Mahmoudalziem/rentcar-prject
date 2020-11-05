@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="seller-container">
        <div class="container">
            <div class="col-md-8 col-12 mx-auto">
                {!! Form::open(['action' => 'sellerController@store','method' => 'post','name' => 'add_seller']) !!}
                {!! Form::hidden('_method','POST',['class' => 'method']) !!}
                    <div class="validate_error d-none"></div>
                    <div class="row">
                        <div class="col-md-4 col-12 align-self-center">
                            <div class="seller_image_container">
                                <div class="seller_image">
                                    <i class="fa fa-picture-o"></i>
                                    <img class="d-none" alt="seller_image" src="#">
                                </div>
                                <input type="file" class="import_images d-none" data-type="image" name="image" id="import_csv_file" accept=".jpg,.jpeg,.png" accept=".jpg,.jpeg,.png">
                                <button class="add_seller_image" type="button">Upload Image</button>
                                <div class="error_upload_image d-none"></div>
                            </div>
                        </div>
                        <!------->
                        <div class="col-md-8 col-12">
                            <div class="seller_content">
                                <div class="seller_handle_error d-none"></div>
                                <div>
                                    <input type="text" placeholder="Full Name" name="name" minlength="5" required autofocus autocomplete="on">
                                </div>
                                <!----->
                                <div>
                                    <input type="email" placeholder="E-Mail" name="email" required autocomplete="on">
                                </div>
                                <!----->
                                <div>
                                    <input type="phone" placeholder="phone" name="phone" minlength="11" maxlength="12" required autocomplete="on">
                                </div>
                                <!----->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="seller_descri">
                                <textarea id="seller_descri" rows="10" cols="40"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_submit">
                                <button type="submit" class="btn">Add Seller</button>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/seller/addseller.css') }}">
@stop

@section('js')
    <script src="{{asset('js/cars/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/seller/addseller.js') }}"></script>
@stop
