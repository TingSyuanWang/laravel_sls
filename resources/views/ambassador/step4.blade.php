@extends('layouts.app')

@section('title')
    親善大使預約 步驟四
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
                                            <div class="col-md-3 mt-step-col last active">
                                                <div class="mt-step-number bg-white">4</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料確認</div>
                                            </div>
                                        </div>
                                        {!! Form::open(['method'=>'POST', 'action'=>'AmbassadorStep4Controller@store']) !!}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                                <i class="icon-settings font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">請確定以下資料正確。</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label><i class="fa fa-calendar-check-o"></i> 您所選擇的時間</label>
                                                                        {!! Form::text('ambassadorDate', $date, ['class' => 'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>服務內容<span class="required"> * </span></label>
                                                                        {!! Form::textarea('serviceContent', $ambassadorFormData['serviceContent'], ['class'=>'form-control input-lg', 'rows'=>'3', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>服務地點<span class="required"> * </span></label>
                                                                        {!! Form::text('serviceLocation', $ambassadorFormData['serviceLocation'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>需要親善大使人數(至多10人)<span class="required"> * </span></label>
                                                                        {!! Form::text('reserveCount', $ambassadorFormData['reserveCount'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>單位名稱<span class="required"> * </span></label>
                                                                        {!! Form::text('categoryName', $ambassadorFormData['categoryName'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>姓名<span class="required"> * </span></label>
                                                                        {!! Form::text('name', $ambassadorFormData['name'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>性別<span class="required"> * </span></label>
                                                                        {!! Form::text('gender', $ambassadorFormData['gender'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>行動電話<span class="required"> * </span></label>
                                                                        {!! Form::text('phoneNumber', $ambassadorFormData['phoneNumber'], ['class'=>'form-control input-lg', 'id'=>'mask_phone', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)')<span class="required"> * </span></label>
                                                                        {!! Form::text('email', $ambassadorFormData['email'], ['class'=>'form-control input-lg', 'id'=>'mask_email', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>聯絡時間(例假日及六、日不撥打)<span class="required"> * </span></label>
                                                                        {!! Form::text('contactTime', $ambassadorFormData['contactTime'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>其它備註<span class="required"> * </span></label>
                                                                        {!! Form::text('message', $ambassadorFormData['message'], ['class'=>'form-control input-lg', 'readonly']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                {{csrf_field()}}
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="{{route('ambassador.step3')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 上一步</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        {{Form::button('完成預約 <i class="m-icon-big-swapright m-icon-white"></i>', array('type' => 'submit', 'class' => 'btn green-jungle btn-block btn-lg m-icon-big'))}}
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
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
    <!-- END CONTENT -->
@stop

@section('customScript')

@stop