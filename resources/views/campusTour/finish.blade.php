@extends('layouts.app')

@section('title')
    預約導覽 已完成預約
@stop

@section('content')
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <!-- BEGIN : STEPS -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-body">
                                    <div class="mt-element-step">
                                        <div class="row step-line">
                                            <div class="col-md-3 mt-step-col first done">
                                                <div class="mt-step-number bg-white">1</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">注意事項</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col done">
                                                <div class="mt-step-number bg-white">2</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">選擇日期</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col done">
                                                <div class="mt-step-number bg-white">3</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料填寫</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col last done">
                                                <div class="mt-step-number bg-white">4</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料確認</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                                <i class="icon-settings font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">已完成校園導覽預約。</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <br>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="{{route('campustour.step1')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 再次預約</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="/" id="step1next" class="btn red btn-block btn-lg m-icon-big">回到預約系統首頁 <i class="m-icon-big-swapright m-icon-white"></i></a>
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@stop

@section('customScript')

@stop