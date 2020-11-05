@extends('layouts.default')

@section('title')
    About Us
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
            <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
                <div class="container">
                    <div class="page-content">
                        <h3>
                        About Us
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
                                <i class="fa fa-long-arrow-right"></i> About Us
                            </div>
                        </li>
                    </ul>
                    <div class="clear-both"></div>
                    </div>
                </div>
    </section>
    <!------>
    <section class="page_about_us_video">
        <div class="about_us_video_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about_us_left">
                            <h2>
                                <span>Car Rent</span>
                                <span>Story</span>
                            </h2>
                            <p>
                                Renting a car in Egypt is your best travel option because local taxis tend to be older
                                 and slower. Because it is a big country, visiting more than one city takes time,
                                  and there is not much public transport. You have freedom and flexibility with
                                   your own rental car, which means that you can explore the country in your own time.
                                Be very careful when you encounter traffic lights, as they are often ignored by locals.
                            </p>
                            <p>
                                 Navigating the Egyptian roads is simple, since most road signs are in both English
                                  and Arabic. However, you should consider renting a SatNav from your car rental company,
                                   as some rural roads have poor signage.You are required by law to wear a seatbelt when
                                    traveling in a car in Egypt, but child safety seats are not mandatory. You are also not allowed to use your mobile phone when driving; only a hands-free kit is permitted.
                                Depending on the type of driving that you plan to do
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-1">
                        <div class="about_us_right with-video">
                            <a href="https://www.youtube.com/watch?v=CA-i6wF6b0M?showinfo=0&amp;rel=0" class="btn-circle video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!------>
    <div class="sell-body">
        <div class="body-container">
            <div class="row">
                <div class="col-md-8 col-6">
                    <div class="sell-body-left">
                        Sell your Home So <span>easy &amp; Fast</span>
                        <br>
                        With car Rent
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="sell-body-right text-center">
                        <div class="d-none">
                            <div class="fancybox-content" id="more">
                                <div class="right-body">
                                    So how do you sell your car fast?
                                     Once you’ve completed the first steps in
                                     getting your free online car valuation, you
                                     will receive your quote and then be given an
                                     option to make an appointment at your local branch
                                      of Quick Sell Your Car – our staff are very friendly
                                      and have great experience with buying used cars.
                                </div>
                            </div>
                        </div>
                        <!----->
                        <a href="#more" id="inline" class="about-body-readmore btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------>
    <section class="mission_content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="row">

                        <div class="col-md-6 col-12">
                            <div class="mission_content_image w-100">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider1.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100 two">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider2.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider3.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100 four">
                                <img class="w-100 d-block" src="{{ asset('images/slider/hover.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-12">
                    <div class="mission_content_details">
                        <h2>
                            Our
                            <span>Mission</span>                            </h2>
                        <p>
                            If selling your car fast and easily is your priority, Quick
                            Sell Your Car is the place for you. We make the whole procedure
                            incredibly simple so that our customers can have peace of mind.
                            The process of cleaning your car until it sparkles, photographing it,
                             uploading the images online and registering it with car selling websites
                        </p>
                        <p>
                              constantly checking for enquiries, arranging viewings and dealing with
                              cancellations is a bother anyone could do without. At Quick Sell Your Car,
                              we have identified this as being one of the biggest hassles of being a car
                              owner which is why we strive to take this trouble off your hands. With us,
                              all you have to do is enter your vehicle registration
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!------->
    <div class="meet_team text-center">
        <div class="container">
            <div class="meet_team_header">
                Meet Our
                <span>Team</span>                </div>
            <!----->
            <div class="row justify-content-center">
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Dr/Nisreen Saber
                        </div>
                        <div class="instr_title">
                            Project Manager
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Dr/Samah Ebrahiem
                        </div>
                        <div class="instr_title">
                            Project Manager
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Mohamed Maher
                        </div>
                        <div class="instr_title">
                            Teaching Assistant
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Mustafa Ahmed Tarek
                        </div>
                        <div class="instr_title">
                            Front End
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!----->
            <div class="row mx-auto justify-content-center">
                <div class="col-md-3 col-12">
                    <div class="instr_body matchHeight">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Mustafa Mohamed
                        </div>
                        <div class="instr_title">
                            Back End
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body matchHeight">
                        <div class="instr_image">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            hisham Ahmed
                        </div>
                        <div class="instr_title">
                            Back End
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image matchHeight">
                            <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Mohamed Mahmoud
                        </div>
                        <div class="instr_title">
                            Back Front
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!-- End Owl Carousel container -->
        </div>
        <!-- End Container -->
    </div>
    <!------->
    <div class="achivement">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="achivement-content">
                        <h3>Our's <span>achivement</span></h3>
                        <p>
                            At Quick Sell Your Car, we work to a strict time limit
                            and can buy your car on the day of your appointment. We
                            are one of the largest online car buyers and so can buy
                            cars for cash which means that you will receive your payment
                            within 24 hours of your visit. The money will be transferred
                            directly into your bank account by direct BACS payment meaning no
                            cheques or fraudulent notes to worry about; the process will be stress free.
                        </p>
                        <div class="achivement-counter">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">300</div>
                                        <div class="counter-content-title">Renter</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">125</div>
                                        <div class="counter-content-title">Rent Car</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">200</div>
                                        <div class="counter-content-title">Sell Car</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">400</div>
                                        <div class="counter-content-title">Satisfaction Client</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="achivement-exper">
                        <img src="{{ asset('images/slider/hover.jpg') }}" alt="">
                        <!-------->
                        <div class="content">
                            <p>24</p>
                            <p>Years of experience <br> in this industry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------->
    <div class="partners_content">
        <div class="container">
            <!----->
            <h3 class="partners_header">
                Our <span>Partners</span>
            </h3>
            <!------>
            <div class="our-partenrs">
                <div id="Our_Parteners" class="owl-carousel owl-theme owl-loaded">

                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/bmw.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/ford.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/jeep.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/tesla.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/vagen.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/assets/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/about.js') }}"></script>
@endsection


