@extends('layouts.app-search')

@section('title')
    預約查詢
@stop

@section('content')
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="mt-content-body">
                    <!-- BEGIN row wiget-row -->
                    <div class="row widget-row">
                        <div class="col-md-6">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h3 class="text-center">校園導覽預約服務查詢</h3>
                                <br>
                                <a href="{{route('search.campustour')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapright m-icon-white"></i> 我要查詢</a>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h3 class="text-center">親善大使預約服務查詢</h3>
                                <br>
                                <a href="{{route('search.ambassador')}}" class="btn red btn-block btn-lg m-icon-big"><i class="m-icon-big-swapright m-icon-white"></i> 我要查詢</a>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>
                    <!-- END row wiget-row -->
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
@stop