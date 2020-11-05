@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <section class="cars-section">
        <div class="container">
            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="car-body" data-id="{{$car->id}}">
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
                                        {{ $car->title }}
                                        <span class="edit-cars">
                                            <a href="admin/updatecar/{{ str_replace(' ','_',$car->title)}}">
                                                <span class="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                            </a>
                                            <!----->
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteing_row" data-id="{{$car->id}}">
                                                <span class="delete">
                                                    <i class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                            <!----->
                                        </span>
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
                <!------->
            </div>
        </div>
    </section>
    <!------>
    <section class="pagination">
        {{ $cars->links() }}
    </section>
    <!------>
    <div class="modal deleteing_row fade" tabindex="-1" role="dialog" id="deleteing_row"
        aria-labelledby="deleteing_row" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!----->
                <div class="modal-body">
                    <div class="modal_body_content">
                        <span>Do you want To Delete</span>
                        <span>car</span>
                    </div>
                </div>
                <!----->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" type="button" data-id="" data-action="{{ url('admin/deletecar') }}">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
@stop


