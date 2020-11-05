@extends('layouts.default')

@section('title')
    {{str_replace('_',' ',$car[0]->title)}}
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/show.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/assets/jssocials-theme-flat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/assets/jssocials-theme-plain.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
        <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
        <div class="container">
            <div class="page-content">
                <h3>
                car Details
            </h3>
            <ul class="content-nav">
                <li>
                <a href="/" target="_self">
                    <i class="fa fa-home"></i> Home
                </a>
                </li>
                <!------>
                <li>
                    <div>
                        <i class="fa fa-long-arrow-right"></i> car
                    </div>
                </li>
            </ul>
            <div class="clear-both"></div>
            </div>
        </div>
    </section>
    <!------>
    <div class="car_container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 order-md-1 order-2">
                    <div class="car_container_left">
                        <div class="car_show_tab_buttons pt-4">
                            <ul class="nav nav-tabs nav_buttons col-11 p-0 mx-auto" id="myTab" role="tablist">
                                <li class="list_item_tab_button nav_item col">
                                    <a class="nav-link active show" data-toggle="tab" href="#description" role="tab" aria-selected="true">
                                        Description
                                    </a>
                                </li>
                                <!------>
                                <li class="list_item_tab_button nav_item col">
                                    <a class="nav-link" data-toggle="tab" href="#seller" role="tab" aria-selected="false">
                                        Seller
                                    </a>
                                </li>
                                <!------>
                                <li class="list_item_tab_button nav_item col">
                                    <a class="nav-link" data-toggle="tab" href="#Reviews" role="tab" aria-selected="true">
                                        Reviews
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!------->
                        <div class="car_show_tab_body tab-content pt-4">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="car_descri">
                                    <div class="car_images">
                                        <div class="car_images_left">
                                            <div class="icon">
                                                <i class="fa fa-search-plus"></i>
                                            </div>
                                            <a href="{{ asset($images[0]->path) }}" data-fancybox="gallery" class="fancybox">
                                                <img src="{{ asset($images[0]->path) }}" alt="car_image"  class="responsive" />
                                            </a>
                                        </div>
                                        <!------>
                                        <div class="car_images_right">
                                            <ul>
                                                @foreach($images as $image)
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-search-plus"></i>
                                                        </div>
                                                        <a href="{{ asset($image->path) }}" data-fancybox="gallery" class="fancybox">
                                                            <img src="{{ asset($image->path) }}" alt="car_image"  class="responsive" />
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!------>
                                    <div class="car_descri_body">
                                        <h3>car Description</h3>
                                        <p>
                                            {!! $car[0]->descri !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!------->
                            <div class="tab-pane fade" id="seller" role="tabpanel">
                                <div class="car_seller_info">
                                    <div class="seller_info d-flex">
                                        <div class="seller_image_name">
                                            <div class="seller_image">
                                                <img src="{{asset($seller[0]->image)}}">
                                            </div>
                                            <div class="seller_name">
                                                {{$seller[0]->name}}
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="seller_details">
                                            {!! $seller[0]->descri !!}
                                        </div>
                                    </div>
                                    <!------->
                                    <div class="col-md-8 col-12 mx-auto">
                                        <!------>
                                        <div class="seller_content">
                                            @php
                                                function hide_mail($email) {

                                                    $mail_part = explode("@", $email);

                                                    $mail_part[0] = str_repeat("*", strlen($mail_part[0]));

                                                    return implode("@", $mail_part);
                                                }

                                                function hide_mobile($mobile) {

                                                    return substr($mobile, 0, -6) . "******";
                                                }

                                            @endphp
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    @guest
                                                        <div class="info" data-toggle="tooltip" data-placement="top" title="Login To view Mail">{{ hide_mail($seller[0]->email) }}</div>
                                                    @else
                                                        <div class="info">{{ $seller[0]->email }}</div>
                                                    @endguest
                                                </div>
                                                <!-------->
                                                <div class="col-md-6 col-12">
                                                    @guest
                                                        <div class="info" data-toggle="tooltip" data-placement="top" title="Login to view Phone">{{ hide_mobile($seller[0]->phone) }}</div>
                                                    @else
                                                        <div class="info">{{ $seller[0]->phone }}</div>
                                                    @endguest
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------->
                                </div>
                            </div>
                            <!------->
                            <div class="tab-pane fade" id="Reviews" role="tabpanel">
                                <div class="car_review">
                                    <div class="row no-gutters">
                                        <!----->
                                        <div class="col-md-5 col-12 order-md-1 order-2 column_review text-center">
                                            <div class="review mt-md-4">
                                                <h5 class="number_rating">
                                                    {{ $rating['ratingSum'] }}
                                                </h5>
                                            </div>
                                            <div class="review mt-md-5">
                                                <p>Review</p>
                                                <div class="rate" data-action="{{ url('car/rate') }}" data-id="{{ $car[0]->id }}">
                                                    <div id="1" class="btn-1 rate-btn"></div>
                                                    <div id="2" class="btn-2 rate-btn"></div>
                                                    <div id="3" class="btn-3 rate-btn"></div>
                                                    <div id="4" class="btn-4 rate-btn"></div>
                                                    <div id="5" class="btn-5 rate-btn"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <!------>
                                        <div class="col-md-7 col-12 order-md-2 order-1 column_review">

                                            <div class="review_number_count">
                                                <span class="count_review" id="review_5">
                                                    {{ $rating['rating'][4] }}
                                                </span>
                                                <div class="result_review_count d-inline-block">
                                                    <div class="rate-bg1" style="width: 100%;"></div>
                                                    <div class="rate-stars1"></div>
                                                </div>
                                                <div class="percent d-inline-block">100%</div>
                                            </div>

                                            <div class="review_number_count">
                                                <span class="count_review" id="review_4">
                                                    {{ $rating['rating'][3] }}
                                                </span>
                                                <div class="result_review_count d-inline-block">
                                                    <div class="rate-bg1" style="width: 80%;"></div>
                                                    <div class="rate-stars1"></div>
                                                </div>
                                                <div class="percent d-inline-block">80%</div>
                                            </div>

                                            <div class="review_number_count">
                                                <span class="count_review" id="review_3">
                                                    {{ $rating['rating'][2] }}
                                                </span>
                                                <div class="result_review_count d-inline-block">
                                                    <div class="rate-bg1" style="width: 60%;"></div>
                                                    <div class="rate-stars1"></div>
                                                </div>
                                                <div class="percent d-inline-block">60%</div>
                                            </div>

                                            <div class="review_number_count">
                                                <span class="count_review" id="review_2">
                                                    {{ $rating['rating'][1] }}
                                                </span>
                                                <div class="result_review_count d-inline-block">
                                                    <div class="rate-bg1" style="width: 40%;"></div>
                                                    <div class="rate-stars1"></div>
                                                </div>
                                                <div class="percent d-inline-block">40%</div>
                                            </div>

                                            <div class="review_number_count">
                                                <span class="count_review" id="review_1">
                                                    {{ $rating['rating'][0] }}
                                                </span>
                                                <div class="result_review_count d-inline-block">
                                                    <div class="rate-bg1" style="width: 20%;"></div>
                                                    <div class="rate-stars1"></div>
                                                </div>
                                                <div class="percent d-inline-block">20%</div>
                                            </div>

                                        </div>
                                        <!----->
                                    </div>
                                    <!----->
                                    <div class="col-12">
                                        <div class="comment_review_container d_none"></div>
                                    </div>
                                    <!----->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="text-center col-md-4 col-12 order-md-2 order-1">
                    <div class="car_container_right">
                        <div class="car_video">
                            <iframe type="text/html"
                                    src="{{$car[0]->promo}}"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                            </iframe>
                        </div>
                        <!------->
                        @auth
                            <div class="add_car btn" data-toggle="tooltip" data-placement="bottom" title="Add To Profile" data-action="{{ url('profile/enroll') }}" data-id="{{ $car[0]->id }}">
                                Add To Profile
                            </div>
                        @endauth
                        <!------->
                        <div class="car_info">
                            <div class="car_info_body">
                                <!----->
                                <div class="link_container d-none"></div>
                                <!---->
                                <ul class="car_include_content">
                                    <li class="course_include_item">
                                        <i class="fa fa-snowflake-o"></i>
                                        <span class="course_hour">
                                            {{ $car[0]->property}}
                                        </span>
                                    </li>
                                    <li class="course_include_item">
                                        <i class="fa fa-snowflake-o"></i>
                                        <span class="course_hour">
                                            {{ $car[0]->type}}
                                        </span>
                                    </li>
                                    <li class="course_include_item">
                                        <i class="fa fa-snowflake-o"></i>
                                        <span class="course_hour">
                                            {{ $car[0]->color}}
                                        </span>
                                    </li>

                                    <li class="course_include_item">
                                        <i class="fa fa-money"></i>
                                        <span class="course_hour">
                                            {{ $car[0]->price}} EGP
                                        </span>
                                    </li>

                                    <li class="course_inclu de_item">
                                        <i class="fa fa-snowflake-o"></i>
                                        <span class="course_hour">
                                        {{ $car[0]->sqft}} KM
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!------->
                        <div class="social_share">
                            <div id="shareIcons" class="jssocials"></div>
                            <div class="qr_code mx-auto">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data={{$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']}}" alt="question_qrcode">
                            </div>
                        </div>
                        <!----->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('js/assets/jssocials.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/show.js') }}"></script>
@endsection
