@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="add-cars">
        <div class="container">
            <div class="controlling_car d-none">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="controlling_course_left">
                            <h3>Publish &amp;&amp; Delete</h3>
                            <p>
                                <span class="d-block">
                                    Publish or unpublish your course.
                                </span>
                                <!------>
                                <span class="d-block">
                                    Permanently delete all course content, including student enrollment records.
                                </span>
                                <!----->
                            </p>
                        </div>
                        <!----->
                    </div>
                    <!---->
                    <div class="col-md-9 col-12">
                        <div class="controlling_car_right">
                            <!------>
                            <button class="btn_button unpublish_course"><i class="fa fa-eye-slash"></i>UnPublish Course</button>
                            <!------>
                            <button class="delete_course btn_button">
                                <i class="fa fa-trash"></i>
                                Delete Course
                            </button>
                            <!------->
                        </div>
                    </div>
                </div>
            </div>
            <!------>
            <div class="form_add_car">
                {!! Form::open(['action' => 'carsController@store','method' => 'POST','name' => 'form_car', 'class' => 'form_information_car' ,'enctype'=>"multipart/form-data"]) !!}
                    {!! Form::hidden('_method','POST',['class' => 'form_method']) !!}
                    <div class="validate_error d-none"></div>
                    <div class="car_information_details">
                        <div class="row">
                            <!----->
                            <div class="col-md-3 col-12">
                                <div class="car_information_left">
                                    <h3>Information car</h3>
                                    <p>
                                        <span class="d-block">
                                            Add basic information about car and
                                            seller name.
                                        </span>
                                        <!------>
                                        <span class="d-block">
                                            Add basic information about the car and
                                            price.
                                        </span>
                                        <!---->
                                        <span class="d-block">
                                            Change information about your car.
                                        </span>
                                        <!----->
                                    </p>
                                </div>
                                <!----->
                            </div>
                            <!---->
                            <div class="col-md-9 col-12">
                                <div class="car_information_right">
                                    <div class="course_handling d-none"></div>
                                    <!----->
                                    <div class="form_course_title">
                                        <label>Car Title</label>
                                        <input type="text" name="title" placeholder="e.g. 'Charming  pentcar for rent in zamalek'" required />
                                    </div>
                                    <!---->
                                    <div class="form_course_subtitle">
                                        <label>Car Location</label>
                                        <input type="text" name="location" placeholder="e.g. 'El Gezirah St., Zamalek, Cairo'" required />
                                    </div>
                                    <!---->
                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>Car Price</label>
                                                <input type="text" onkeypress="return isNumberKey(event)" name="price" placeholder="car Price" maxlength="7" required>
                                            </div>
                                        </div>
                                        <!------->
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>Car Latitude</label>
                                                <input type="text"  name="lat" onkeypress="return isNumberKey(event)" placeholder="car Latitude" required />
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>Car Longitude</label>
                                                <input type="text"  name="log" onkeypress="return isNumberKey(event)" placeholder="car Longitude" required />
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>car KiloMeters</label>
                                                <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="sqft" placeholder="car kiloMeters" required />
                                            </div>
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form_seller">
                                                <label>Seller</label>
                                                <!---->
                                                <select name="seller" required>
                                                        @foreach($sellers as $seller)
                                                            <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                                        @endforeach
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-6 col-12">
                                            <div class="property">
                                                <label>Vehicle Type</label>
                                                <!---->
                                                <select name="property" required>
                                                    <option value="chevrolet">Chevrolet</option>
                                                    <option selected value="jaguar">Jaguar</option>
                                                    <option value="ford">ford</option>
                                                    <option value="bmw">bmw</option>
                                                    <option value="audi">audi</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                    </div>
                                    <!------>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="type">
                                                <label>Car Type</label>
                                                <!---->
                                                <select name="type" required>
                                                    <option value="manual">manual</option>
                                                    <option value="automatic" selected>Automatic</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-6 col-12">
                                            <div class="color">
                                                <label>Car Color</label>
                                                <!---->
                                                <select name="color" required>
                                                    <option value="white">White</option>
                                                    <option value="black" selected>Black</option>
                                                    <option value="yellow">yellow</option>
                                                    <option value="blue">blue</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="form_course_descri_content">
                                        <!---->
                                        <div class="form_course_descri_content_head">
                                            <span>Car Description</span>
                                            <span>
                                                <i class="fa fa-angle-down icon-arrow-down"></i>
                                            </span>
                                        </div>
                                        <!---->
                                        <div class="form_course_descri">
                                            <div class="container_content">
                                                <textarea id="form_course_descri" rows="10"
                                                    cols="80"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <!----->
                                    </div>
                                    <!----->
                                </div>
                                <!----->
                            </div>
                            <!----->
                        </div>
                        <!----->
                    </div>
                    <!------>
                    <div class="car_information_branding border-bottom-0">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="car_information_branding_left">
                                    <h3>Branding</h3>
                                    <p>
                                        Brand your car by setting a custom thumbnail
                                        image.
                                        You can set different images to use on the iOS app
                                        (as different dimensions are recommended).
                                    </p>
                                </div>
                                <!---->
                            </div>
                            <!---->
                            <div class="col-md-9 col-12">
                                <div class="car_information_branding_right">
                                    <!---->
                                    <div class="information_branding_right_image">
                                        <div class="box_uploads" id="holder">
                                            <h1>Drag Images here</h1>
                                            <p>- or -</p>
                                            <input type="file" class="import_images d-none" data-type="image" name="images[]" id="import_csv_file" accept=".jpg,.jpeg,.png" multiple>
                                            <button class="btn btn--primary import_images_button" type="button" for="import_csv_file">Choose Images</button>
                                        </div>
                                        <!------>
                                        <div class="box_upload_content">
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="information_branding_right_video">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <div class="branding_video_container">
                                                    <a href="#" title="course_prom" target="_self" class="video">
                                                        <i class="fa fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!------>
                                            <div class="col-md-4 col-lg-3">
                                                <div class="branding_video_details">
                                                    <div class="branding_video_details_upload" data-toggle="modal" data-target="#video_modaling">
                                                        <span class="button_update_video">upload Video</span>
                                                    </div>
                                                    <!---->
                                                    <div class="half_opaque">
                                                        <span>
                                                            Recommended format
                                                        </span>
                                                        <!------>
                                                        <ul>
                                                            <li>MP4, M4V, AVI</li>
                                                            <li>640-1280px wide</li>
                                                            <li>Compress as much as possible
                                                            </li>
                                                        </ul>
                                                        <!------>
                                                    </div>
                                                    <!------>
                                                </div>
                                                <!------>
                                            </div>
                                        </div>
                                    </div>
                                    <!------>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <div class="course_push_button text-center border-0">
                        <button class="btn" type="submit">
                            <span class="d-none">
                                <i class="fa fa-spinner"></i>
                            </span>
                            <!----->
                            <span>
                                Add Car
                            </span>
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!---- Modaling ---->
    <div class="modal video_modaling fade" tabindex="-1" role="dialog" id="video_modaling" aria-labelledby="video_modaling" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adding Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body mt-0">
                        <div class="container">
                            <!----->
                            <div class="video_url_content">
                                <div class="group_input" data-validate="Video Url Required">
                                    <input type="text" class="input_100" name="video"
                                        placeholder="https://www.youtube.com">
                                </div>
                            </div>
                            <!----->
                        </div>
                    </div>
                    <!---->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Video</button>
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                    </div>
                    <!----->
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cars/addcar.css') }}">
@stop

@section('js')
    <script src="{{asset('js/cars/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/cars/addcar.js') }}" async></script>
    <script>

        function isNumberKey(evt) {

            var charCode = (evt.which) ? evt.which : evt.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@stop
