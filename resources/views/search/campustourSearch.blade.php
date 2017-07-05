@extends('layouts.app-search')

@section('title')
    預約查詢-校園導覽
@stop

@section('content')
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <!-- BEGIN PORTLET -->
                <div class="portlet light portlet-fit ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-bookmark"></i>
                            <span class="caption-subject font-blue-chambray bold"> 請輸入您的資訊來查詢您所預約的場次...</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            {!! Form::open(['method'=>'POST', 'action'=>'SearchController@campustourShow']) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phoneNumber', '行動電話'), '<span class="required"> * </span>' !!}
                                    {!! Form::text('phoneNumber', null, ['class'=>'form-control input-lg', 'id'=>'mask_phone']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email'), '<span class="required"> * </span>' !!}
                                    {!! Form::text('email', null, ['class'=>'form-control input-lg', 'id'=>'mask_email']) !!}
                                </div>
                            </div>
                            {{csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="{{route('search')}}" class="btn red btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 查詢其他預約</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::button('查詢<i class="m-icon-big-swapright m-icon-white"></i>', array('type' => 'submit', 'class' => 'btn green-jungle btn-block btn-lg m-icon-big'))}}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>


            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
@stop