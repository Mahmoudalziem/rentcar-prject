@extends('layouts.default')

@section('title')
    Services
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/services.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
            <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
                <div class="container">
                    <div class="page-content">
                        <h3>
                        Services
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
                                <i class="fa fa-long-arrow-right"></i> Services
                            </div>
                        </li>
                    </ul>
                    <div class="clear-both"></div>
                    </div>
                </div>
    </section>
    <!------>
    <div  class="cars-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="cars-container-filter">
                        <div class="search_car clear-both">
                            <input type="search" placeholder="Search for your car">
                            <i class="fa fa-search"></i>
                        </div>
                        <!------>
                        <div class="filter-body">
                            {!! Form::open(['method' => 'POST','action' => 'pagesController@filter','class' => 'filter','name' => 'filter']) !!}
                                {!! Form::hidden('_method','post',['class' => 'method']) !!}
                                <label data-target="#property" data-toggle="collapse" aria-expanded="false" aria-controls="property">
                                    <span>property type</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="property" class="collapse show">
                                    <select name="property" required>
                                        <option value="chevrolet">Chevrolet</option>
                                        <option selected value="jaguar">Jaguar</option>
                                        <option value="ford">ford</option>
                                        <option value="bmw">bmw</option>
                                        <option value="audi">audi</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#type" data-toggle="collapse" aria-expanded="false" aria-controls="type">
                                    <span>Vehicle Type</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="type" class="collapse show">
                                    <select name="type" required>
                                        <option value="manual">manual</option>
                                        <option value="automatic" selected>Automatic</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#color" data-toggle="collapse" aria-expanded="false" aria-controls="color">
                                    <span>Car Color</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="color" class="collapse show">
                                    <select name="color" required>
                                        <option value="white">White</option>
                                        <option value="black" selected>Black</option>
                                        <option value="yellow">yellow</option>
                                        <option value="blue">blue</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#price" data-toggle="collapse" aria-expanded="false" aria-controls="price">
                                    <span>Price</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="price" class="collapse show">
                                    <div class="body-start">
                                        <div class="start">
                                            <span class="curr">EGP</span>
                                            <input aria-label="Minimum price" min="0" maxlength="5" type="text" name="min_price"  placeholder="1000" value="{{ old('min_price') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        <span class="space">-</span>
                                        <div class="end">
                                            <span class="curr">EGP</span>
                                            <input aria-label="Maximum price" min="0" maxlength="6" type="text" name="max_price" placeholder="60000" value="{{ old('max_price') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <!------->
                                <label data-target="#sqft" data-toggle="collapse" aria-expanded="false" aria-controls="sqft">
                                    <span>KILOMETERS</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="sqft" class="collapse show">
                                    <div class="body-start">
                                        <div class="start">
                                            <span class="sqft">min</span>
                                            <input aria-label="Minimum sqft" min="0" maxlength="9" type="text" name="min_sqft" class="sqft" placeholder="1000" value="{{ old('min_sqft') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        <span class="space">-</span>
                                        <div class="end">
                                            <span class="sqft">max</span>
                                            <input aria-label="Maximum sqft" min="0" maxlength="10" type="text" name="max_sqft" class="sqft" placeholder="70000" value="{{ old('max_sqft') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <!------->
                                <input type="submit" class="btn" value="FILTER" />
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="cars-container-content">
                        <!------>
                        @Auth
                        <div class="access-location float-right btn" style="border:1px solid limegreen;margin-top:-50px" data-action="{{ url('services/access') }}">
                            Access Location
                        </div>
                        @endauth
                        <div class="clearfix"></div>
                        <!------>
                        <div class="row">
                            <!----->
                            @if(session()->has('cars'))
                                @foreach(session('cars') as $car)
                                    <div class="col-lg-4 col-md-6 col-12">
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
                                                    <!------>
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
                            @else
                                @foreach ($cars as $car)
                                    <div class="col-lg-4 col-md-6 col-12">
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
                                                    <!------>
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
                            @endif
                            <!----->
                        </div>
                        <section class="pagination">
                            {{ $cars->links() }}
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------->
    @include('layouts.footer')
@endsection

@section('scripts')
    {{ Html::script(asset('js/pages/services.js')) }}
    <script>

        function isNumberKey(evt) {

            var charCode = (evt.which) ? evt.which : evt.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection

