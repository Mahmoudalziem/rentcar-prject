@extends('layouts.default')

@section('title')
    Profile
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/assets/croppie.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/renter/renter.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
<div class="profile_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-12 p-0 pr-3 d-none d-md-block">
                <div class="profile_container_content_left">
                    <div class="profile_content_image">
                        <div class="profile_content_image_background">
                            <img class="user_image_background d-block" src="{{asset('images/slider/slider3.jpg')}}">
                            <!------>
                        </div>
                        <div class="profile_content_image_avater">
                            <div class="profile_content_image_avater_content">
                                <input type="file" class="image_user_content d-none" name="image_user_content">
                                <!----->
                                <img class="user_image_avater d-block" src="{{ Auth::guard('web')->user()->avatar != '' ? asset(Auth::guard('web')->user()->avatar) : 'images/team/user.png'}}">
                                <!----->
                                <span class="user_image_upload">
                                    <i class="fa fa-picture-o"></i>
                                </span>
                            </div>
                            <!------>
                        </div>
                    </div>
                    <!----->
                    <div class="user_name">{{ Auth::guard('web')->user()->name }}</div>
                    <!----->
                    <ul class="nav nav-tabs nav_buttons p-0 mx-auto" role="tablist">

                        <li class="nav_item">
                            <a class="nav-link active show" data-toggle="tab" href="#myCourses" role="tab">
                                My cars                                    </a>
                        </li>
                        <!---->
                        <li class="nav_item">
                            <a class="nav-link" data-toggle="tab" href="#edit_profile" role="tab">
                                Edit Profile                                    </a>
                        </li>

                        <li class="nav_item">
                            <a class="nav-link logout_student_form" href=" {{ url('user/logout') }}">
                                logOut                                    </a>
                        </li>
                        <!----->
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-12 ml-md-5 mr-md-5 mr-0">
                <div class="items_responsive_buttons d-md-none d-block">
                    <!------>
                    <ul class="nav nav-tabs nav_buttons p-0 mx-auto" role="tablist">
                        <li class="nav_item">
                            <a class="nav-link active show" data-toggle="tab" href="#myCourses" role="tab">
                                My Cars
                            </a>
                        </li>
                        <!---->
                        <li class="nav_item">
                            <a class="nav-link" data-toggle="tab" href="#edit_profile" role="tab">
                                Edit Profile                                    </a>
                        </li>
                    </ul>
                    <!------>
                </div>
                <!----->
                <div class="profile_container_content_right">
                    <div class="course_show_tab_body tab-content">
                        <div class="tab-pane fade show active" id="myCourses" role="tabpanel">
                            <div class="user_course_container">
                                <div class="container">
                                    <!------>
                                    <div class="search_course clear-both">
                                        <i class="fa fa-search"></i>
                                        <input type="search" class="" name="" placeholder="Search for car by name">
                                    </div>
                                    <!---->
                                    <div class="row">
                                        <!----->
                                        @if(!empty($cars[0]))
                                            @for($i=0;$i<count($cars);$i++)
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="car-body">
                                                        <div class="car-body-content">
                                                            <div class="body-image owl-carousel owl-loaded owl-theme owl-drag" id="body-image">
                                                                @foreach($images as $image)
                                                                    @if($image->course_id == $cars[$i]->id)
                                                                        <div class="item">
                                                                            <img src="{{ asset($image->path) }}" alt="Slider Image">
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <!----->
                                                            <div class="body-price">{{ $cars[$i]->price }} EGB</div>
                                                            <!------>
                                                            <div class="body-content">
                                                                <div class="body-content-title">
                                                                    <a href="car/{{ str_replace(' ','_',$cars[$i]->title) }}">
                                                                        {{ $cars[$i]->title }}
                                                                    </a>
                                                                </div>
                                                                <!----->
                                                                <div class="body-content-location">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    {{ $cars[$i]->location }}
                                                                </div>
                                                                <!------>
                                                                <div class="body-content-details">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="info">
                                                                                {{ $cars[$i]->bedroom }} Bed
                                                                            </div>
                                                                        </div>
                                                                        <!------>
                                                                        <div class="col-4">
                                                                            <div class="info">
                                                                                {{ $cars[$i]->bathroom }} Bath
                                                                            </div>
                                                                        </div>
                                                                        <!------>
                                                                        <div class="col-4">
                                                                            <div class="info border-0">
                                                                                {{ $cars[$i]->sqft }} sqft
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        @else
                                            <div class="mt-5 p-5">
                                                <img class="responsive w-100" src="{{ asset('images/profile/empty.svg') }}" alt="empty image">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------>
                        <div class="tab-pane fade" id="edit_profile" role="tabpanel">
                            <div class="col-md-8 mx-auto col-12">
                                {!! Form::open(['action' => 'userController@update','method' => 'post', 'name' => 'formUpdate', 'class' => 'form_signup'])!!}
                                    {!! Form::hidden('_method','POST',['class' => 'method'])!!}
                                    <div class="validate_error d-none"></div>
                                    <label>Full Name *</label>
                                    <div class="group_input" data-validate="Name Required">
                                        <input type="text" class="input_100" name="name" placeholder="Full Name" value="{{ Auth::guard()->user()->name }}" autofocus required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <!---->
                                    <label>Password *</label>
                                    <div class="group_input" data-validate="Password Required">
                                        <input type="password" name="password" placeholder="Password" minlength="6" maxlength="30" required>
                                        <i class="fa fa-lock"></i>
                                    </div>

                                    <label>Confirm Password *</label>
                                    <div class="group_input" data-validate="Confirm Required">
                                        <input type="password" minlength="6" maxlength="30" name="confirm_password" placeholder="Confirm Password" maxlength="30" required>
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <!----->
                                    <div class="form_submit_button">
                                        <button type="submit" class="btn submit_form">
                                            Update Info
                                            <i class="fa fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                {!! Form::close()!!}
                            </div>
                        </div>
                        <!------>
                    </div>
                </div>
                <!------>
                <div class="modal fade ml-0 pl-0" id="user_image" aria-hidden="true">
                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h5>Corp Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="error validate"></div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div id="image_crop_avater"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center text-center">
                                <button  type="button" class="btn btn-primary crop_user_image" data-action="{{url('profile/image')}}">Import Image</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!------>
        </div>
        <!------->
    </div>
    <!------>
</div>
@endsection

@section('scripts')
    {{ Html::script(asset('js/assets/croppie.min.js')) }}
    {{ Html::script(asset('js/renter/renter.js')) }}
@endsection
