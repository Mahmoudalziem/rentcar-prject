@extends('layouts.default')

@section('title')
    Contact Us
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
            <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
                <div class="container">
                    <div class="page-content">
                        <h3>
                            Contact Us
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
                                <i class="fa fa-long-arrow-right"></i> Contact Us
                            </div>
                        </li>
                    </ul>
                    <div class="clear-both"></div>
                    </div>
                </div>
    </section>
    <!------->
    <section class="contact_content">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-4">
                    <div class="contact_content_left">
                        <ul class="contact-info">
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Address</h4>
                                    <p>
                                        Faculty Of Computer And Information
                                        <br>
                                        Zagazig University
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Phone</h4>
                                    <p>Mobile : +02 01276411589 <br>
                                </p></div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>E-Mail</h4>
                                    <p>
                                        Mail : mostafatarekkhalafh26@gmail.com
                                        <br>
                                        Mail : mbdalzym376@gmail.com
                                    </p>
                                </div>
                            </li>
                            <li>
                                <ul class="social_items">

                                    <li class="social_links">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>

                                    <li class="social_links">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>

                                    <li class="social_links">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>

                                    <li class="social_links">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="contact_content_right">
                        {!! Form::open(['action' => 'pagesController@contactForm','method' => 'POST','class' => 'contact_form' , 'name' => 'contact']) !!}
                            {!! Form::hidden('_method','POST',['class' => 'method']) !!}

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-primary">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            @if(session()->has('success'))
                                <div class="alert alert-primary">
                                        {{ session('success') }}
                                    </div>
                            @endif
                            <div class="col-12">
                                <div class="group-input" data-validate="Name Required">
                                    <input type="text" name="name" placeholder="Name *" required minlength="6">
                                    <i class="fa fa-user"></i>
                                </div>

                                <div class="group-input" data-validate="E-Mail Required">
                                    <input type="email" name="email" placeholder="E-Mail *" required>
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="group-input" data-validate="Subject Required">
                                    <input type="text" name="subject" placeholder="Subject *" required minlength="10">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="message_content" data-validate="Message Required">
                                    <textarea name="message" placeholder="Message" cols="30" required="" rows="10" required minlength="30"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="submit_contact_form" type="submit">
                                    Send
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------->
    <section class="goolge_map_content">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3434.6742239822743!2d31.52691748537548!3d30.586740681688255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7f1257722a25f%3A0xe25f8a84b4f705c6!2z2YPZhNmK2Kkg2K3Yp9iz2KjYp9iqINmI2YXYudmE2YjZhdin2Kog2KfZhNiy2YLYp9iy2YrZgg!5e0!3m2!1sar!2seg!4v1591462194771!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    @include('layouts.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/pages/contact.js') }}"></script>
@endsection


