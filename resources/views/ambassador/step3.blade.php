@extends('layouts.app')

@section('title')
    親善大使預約 步驟三
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
                                            <div class="col-md-3 mt-step-col active">
                                                <div class="mt-step-number bg-white">3</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料填寫</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col last">
                                                <div class="mt-step-number bg-white">4</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料確認</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                                    <div class="portlet light">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                                <i class="icon-settings font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">請完成以下資料的填寫，<span class="required"> * </span>為必填欄位。</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row">
                                                                @include('includes.form_error')
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                    <label><i class="fa fa-calendar-check-o"></i> 您所選擇的時間</label>
                                                                    {!! Form::open() !!}
                                                                    {!! Form::text('ambassadorDate', $date, ['class' => 'form-control input-lg', 'disabled']) !!}
                                                                    {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            {!! Form::open(['method'=>'POST', 'action'=>'AmbassadorStep3Controller@store']) !!}
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {!! Form::label('serviceContent', '服務內容'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::textarea('serviceContent', $ambassadorFormData['serviceContent'], ['class'=>'form-control input-lg', 'rows'=>'3']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('serviceLocation', '服務地點'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('serviceLocation', $ambassadorFormData['serviceLocation'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('reserveCount', '需要親善大使人數(至多10人)'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('reserveCount', $ambassadorFormData['reserveCount'], ['class'=>'form-control input-lg', 'id'=>'touchspin_6']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('categoryName', '單位名稱'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('categoryName', $ambassadorFormData['categoryName'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('name', '姓名'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('name', $ambassadorFormData['name'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        {!! Form::label('gender', '性別'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::select('gender', [''=>'請選擇', '男'=>'男', '女'=>'女'], $ambassadorFormData['gender'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('phoneNumber', '行動電話'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('phoneNumber', $ambassadorFormData['phoneNumber'], ['class'=>'form-control input-lg', 'id'=>'mask_phone']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {!! Form::label('email', 'Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('email', $ambassadorFormData['email'], ['class'=>'form-control input-lg', 'id'=>'mask_email']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('contactTime', '聯絡時間(例假日及六、日不撥打)'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::select('contactTime', [''=>'請選擇', '上午 9:00-12:00'=>'上午 9:00-12:00', '下午 13:00-17:00'=>'下午 13:00-17:00'], $ambassadorFormData['contactTime'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('message', '其它備註') !!}
                                                                        {!! Form::text('message', $ambassadorFormData['message'], ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>


                                                                {{csrf_field()}}

                                                                <br>
                                                                <div class="form-actions">
                                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                                        <div class="text-center">
                                                                            <a href="{{route('ambassador.step2')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 上一步</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                                        <div class="text-center">
                                                                            {{Form::button('下一步 <i class="m-icon-big-swapright m-icon-white"></i>', array('type' => 'submit', 'class' => 'btn green-jungle btn-block btn-lg m-icon-big'))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {!! Form::close() !!}
                                                            </div>
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