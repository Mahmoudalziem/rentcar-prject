@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="container">
        <div class="table-seller">
            <div class="container">
                <table class="hover table table-striped table-bordered dataTable no-footer"
                    style="width:100%">
                    <!----->
                    <thead>
                        <tr role="row">
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="table_student_content">
                        @foreach($sellers as $seller)
                            <tr data-id="{{ $seller->id }}">
                                <!----->
                                <td class="sorting_1">
                                    <div class="text-left">
                                        <img src="{{asset($seller->image)}}" alt="seller_image">
                                        <span>{{$seller->name}}</span>
                                    </div>
                                </td>
                                <!----->
                                <td>
                                    <div class="mail_account">
                                        {{$seller->email}}
                                    </div>
                                </td>
                                <!----->
                                <td>
                                    {{$seller->phone}}
                                </td>
                                <!-------> 
                                <td>
                                    <div class="actions">
                                        <a href="javascript:void(0)" class="fa fa-trash" target="_self" data-toggle="modal" data-target="#deleteing_row" data-id="{{$seller->id}}"></a>
                                        <a href="updateseller/{{str_replace(' ','_',$seller->name)}}" class="fa fa-pencil" target="_self"></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                        <span>Seller</span>
                    </div>
                </div>
                <!----->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" type="button" data-id="" data-action="{{ url('admin/deleteseller') }}">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/seller/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seller/viewseller.css') }}">
@stop

@section('js')
    <script type="text/javascript" src="{{asset('js/seller/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/seller/viewseller.js')}}"></script>
@stop
