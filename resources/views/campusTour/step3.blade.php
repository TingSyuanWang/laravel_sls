@extends('layouts.app')

@section('title')
    預約導覽 步驟三
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
                                                                <span class="caption-subject bold uppercase">請完成以下資料的填寫，全部為必填欄位。</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row">
                                                                @include('includes.form_error')
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                    <label><i class="fa fa-calendar-check-o"></i> 您所選擇的時間</label>
                                                                    {!! Form::open() !!}
                                                                    {!! Form::text('campustourdate', $date, ['class' => 'form-control input-lg', 'disabled']) !!}
                                                                    {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            {!! Form::open(['method'=>'POST', 'action'=>'CampusTourStep3Controller@store']) !!}
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('category', '團體或個人'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::select('category', [''=>'請選擇', '團體'=>'團體', '個人'=>'個人'], null, ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('categoryName', '團體或個人名稱'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('categoryName', null, ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('reserveCount', '預約參觀人數'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('reserveCount', null, ['class'=>'form-control input-lg', 'id'=>'touchspin_5']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        {!! Form::label('name', '姓名'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('name', null, ['class'=>'form-control input-lg']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        {!! Form::label('gender', '性別'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::select('gender', [''=>'請選擇', '男'=>'男', '女'=>'女'], null, ['class'=>'form-control input-lg']) !!}
{{--                                                                        {!! Form::checkbox('gender', null, true, ['class'=>'make-switch', 'data-on-color'=>'info', 'data-off-color'=>'success', 'data-on-text'=>'男', 'data-off-text'=>'女', 'data-size'=>'large']) !!}--}}
                                                                        {{--<input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success" data-on-text="男" data-off-text="女" data-size="large" name="gender">--}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('phoneNumber', '行動電話'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('phoneNumber', null, ['class'=>'form-control input-lg', 'id'=>'mask_phone']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {!! Form::label('email', 'Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)'), '<span class="required"> * </span>' !!}
                                                                        {!! Form::text('email', null, ['class'=>'form-control input-lg', 'id'=>'mask_email']) !!}
                                                                    </div>
                                                                </div>

                                                                {{csrf_field()}}

                                                                <br>
                                                                <div class="form-actions">
                                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                                        <div class="text-center">
                                                                            <a href="{{route('campustour.step2')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 上一步</a>
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