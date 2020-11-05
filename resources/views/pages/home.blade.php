
@extends('layouts.default')

@section('title')
    Home
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <div class="slider-content">
        <section class="home-slider owl-carousel owl-loaded owl-theme owl-drag" id="home-slider">
            <div class="item">
                <div class="slider-body carousel-item active">
                    <div class="slider-body-image">
                        <img class="d-block w-100" src="{{  asset('images/slider/slider.jpg')}}" alt="First slide">
                    </div>
                    <!------>
                    <div class="slider-body-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="body-content">
                                        <h5>
                                            All what you want is here in this site don’t worry
                                        </h5>
                                        <p>
                                             Rent Car Sell Your Car is the place for you.
                                              We make the whole procedure incredibly simple
                                              so that our customers can have peace of mind.
                                        </p>
                                        <a href="/register" class="btn">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
            </div>
            <!----->
            <div class="item">
                <div class="slider-body carousel-item active">
                    <div class="slider-body-image">
                        <img class="d-block w-100" src="{{  asset('images/slider/slider1.jpg')}}" alt="First slide">
                    </div>
                    <!------>
                    <div class="slider-body-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="body-content">
                                        <h5>
                                            Sell your Car So easy & Fast With car Rent
                                        </h5>
                                        <p>
                                            Once you’ve completed the first steps in getting
                                             your free online car valuation, you will receive
                                             your quote and then be given an option to make an
                                             appointment at your local branch of Quick Sell
                                        </p>
                                        <a href="/register" class="btn">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!------->
            <div class="item">
                <div class="slider-body carousel-item active">
                    <div class="slider-body-image">
                        <img class="d-block w-100" src="{{  asset('images/slider/slider2.jpg')}}" alt="First slide">
                    </div>
                    <!------>
                    <div class="slider-body-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="body-content">
                                        <h5>
                                            Our Goal aim is to satisfy customers
                                        </h5>
                                        <p>
                                            Our company aims to satisfy customers with honesty and sincerity while taking into account the fedpak of tenants
                                        </p>
                                        <a href="/register" class="btn">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!----->
        </section>
        <!---->
        <div class="slider-info">
            <div class="container">
                <div class="col-md-9 mx-auto">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="mail info">
                                Email : mostafatarek@gmail.com
                            </div>
                        </div>
                        <!----->
                        <div class="col-md-4 col-12">
                            <div class="phone info">
                                Phone : <span>(020) 012 764 115 89</span>
                            </div>
                        </div>
                        <!----->
                        <div class="col-md-4 col-12">
                            <div class="socail info">
                                Follow us :
                                <ul class="info-social">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitch"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!----->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------>
    <div class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Free Instant Valuation</h3>
                            <p>
                                Type in your car registration number and details
                                 into the bar to receive your instant free car valuation.
                                 Quick, easy and simple – there are no lengthy forms to complete.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact">
                                    <div class="content-body">
                                        Type in your car registration number and details
                                        into the bar to receive your instant free car valuation.
                                        Quick, easy and simple – there are no lengthy forms to complete.
                                    </div>
                                </div>
                            </div>
                            <!---- FancyBox Link -->
                                <a href="#exact" id="inline" class="about-body-readmore">Learn More</a>
                            <!---- FancyBox Link -->
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-md-4 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Car Inspection</h3>
                            <p>
                                Choose a time that’s most convenient for you
                                to go and visit your local branch of Quick Sell
                                Your Car so that we can inspect your car for an accurate valuation.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact2">
                                    <div class="content-body">
                                        Choose a time that’s most convenient for you
                                        to go and visit your local branch of Quick Sell
                                        Your Car so that we can inspect your car for an accurate valuation.
                                    </div>
                                </div>
                            </div>
                            <!------->
                            <a href="#exact2" class="about-body-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-md-4 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Mony In Your Bank</h3>
                            <p>
                                Sold! Once we've checked your documentation and
                                appraised the vehicle, we will confirm the valuation,
                                finish off the paperwrok and organise a cash payment
                                straight into your account.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact3">
                                    <div class="content-body">
                                        Sold! Once we've checked your documentation and
                                        appraised the vehicle, we will confirm the valuation,
                                        finish off the paperwrok and organise a cash payment
                                        straight into your account.
                                    </div>
                                </div>
                            </div>
                            <!-------->
                            <a href="#exact3" class="about-body-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------->
    <div class="feature">
        <div class="container">
            <div class="feature-body">
                <h3> Featured <span>Brand Name</span> in World</h3>
                <!----->
                <div class="feature-container">
                    <div class="feature-container-filter">
                        <button type="button" data-filter="all">All</button>
                        <button type="button" data-filter=".chevrolet">Chevrolet</button>
                        <button type="button" data-filter=".Jaguar">Jaguar</button>
                        <button type="button" data-filter=".ford">Ford</button>
                        <button type="button" data-filter=".bmw">BMW</button>
                        <button type="button" data-filter=".audi">Audi</button>
                    </div>
                    <!------>
                    <div class="feature-container-body">
                        <div class="row">
                            @foreach ($cars as $car)
                                <div class="col-lg-3 col-md-4 col-12 mix {{$car->property}}">
                                    <div class="car-body">
                                        <div class="car-body-content">
                                            <div class="body-image owl-carousel owl-loaded owl-theme owl-drag" id="body-image">
                                                @foreach ($images as $image)
                                                    @if($car->id == $image->course_id)
                                                        <div class="item">
                                                            <img src="{{ $image->path }}" alt="Slider Image">
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!------->
                                            </div>
                                            <!----->
                                            <div class="body-price">{{ $car->price }} EGB</div>
                                            <!------>
                                            <div class="body-content">
                                                <div class="body-content-title">
                                                    <a href="car/{{ str_replace(' ','_',$car->title) }}">
                                                        {{ $car->title }}
                                                    </a>
                                                </div>
                                                <!----->
                                                <div class="body-content-location">
                                                    <i class="fa fa-map-marker"></i>
                                                    {{ $car->location }}
                                                </div>
                                                <!------>
                                                <div class="body-content-details">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="info">
                                                                {{ $car->type }}
                                                            </div>
                                                        </div>
                                                        <!------>
                                                        <div class="col-4">
                                                            <div class="info">
                                                                {{ $car->color }}
                                                            </div>
                                                        </div>
                                                        <!------>
                                                        <div class="col-4">
                                                            <div class="info border-0">
                                                                {{ $car->sqft }} KM
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!----->
                        </div>
                    </div>
                    <!------->
                </div>
            </div>
        </div>
    </div>
    <!------>
    <div class="sell-body">
        <div class="body-container">
            <div class="row">
                <div class="col-md-8 col-6">
                    <div class="sell-body-left">
                        Sell your Car So <span>easy & Fast</span>
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
    <!-------->
    <div class="testmonials">
        <div class="testmoni-body">
            <h3>More <span>25,600</span> Happy Clients</h3>
            <div class="container">
                <div class="owl-carousel owl-loaded owl-theme owl-drag" id="testmonials">
                    <div class="item">
                        <div class="body-content">
                            <div class="content-image">
                                <img src="{{ asset('images/testmonials/1.jpg') }}" alt="testmonials image">
                            </div>
                            <div class="content-qoute">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="content-name">
                                Eng /Enas <span>Software Engineer</span>
                            </div>
                            <div class="content-details">
                                Excellent and prompt  customer service.
                                 A truly professional car rental company.
                                 Cars are in up-to-date condition. In case of emergency,
                                 the response from the team is quick,
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="item">
                        <div class="body-content">
                            <div class="content-image">
                                <img src="{{ asset('images/testmonials/2.jpg') }}" alt="testmonials image">
                            </div>
                            <div class="content-qoute">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="content-name">
                                Ameya Namjoshi / <span>Android Developper</span>
                            </div>
                            <div class="content-details">
                                The availability of customer support service is 24x7
                                . All payment, contract terms and transactions are transparent.
                                Great promotions and support from sales team helped me get a brand
                                new SUV
                            </div>
                        </div>
                    </div>
                    <!------>
                    <div class="item">
                        <div class="body-content">
                            <div class="content-image">
                                <img src="{{ asset('images/testmonials/3.jpg') }}" alt="testmonials image">
                            </div>
                            <div class="content-qoute">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="content-name">
                                Vasilis Giorgas / <span>PenTest Enginner</span>
                            </div>
                            <div class="content-details">
                                I would like to express my appreciation to one of your representatives
                                 in Egypt, Mr Jai Bhagwan.I rented a vehicle from the Mall of the Emirates
                                  and  after a couple of days a problem with the battery came
                                 up
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="item">
                        <div class="body-content">
                            <div class="content-image">
                                <img src="{{ asset('images/testmonials/4.jpg') }}" alt="testmonials image">
                            </div>
                            <div class="content-qoute">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="content-name">
                                Mustafa Tarek / <span>Front End Enginner</span>
                            </div>
                            <div class="content-details">
                                Great Service, Absolutely Terrific staff, extremely professional!!!
                                This was my first ever Car Renting experience, Awesome!! keep up this very
                                 good services and i see you the best in car rental fields thanks best regards
                            </div>
                        </div>
                    </div>
                    <!------->
                </div>
            </div>
        </div>
    </div>
    <!-------->
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
    <script type="text/javascript" src="{{ asset('js/pages/home.js') }}"></script>
@endsection


