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
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                                <i class="icon-settings font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">請完成以下資料的填寫，全部為必填欄位。</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                    <label><i class="fa fa-calendar-check-o"></i> 您所選擇的時間</label>
                                                                    <input type="text" class="form-control input-lg" placeholder="2017/06/30 10:00" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>團體或個人</label>
                                                                        <select class="form-control input-lg">
                                                                            <option>請選擇</option>
                                                                            <option>團體</option>
                                                                            <option>個人</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>團體(代表人)名稱</label>
                                                                        <input type="text" class="form-control input-lg" placeholder="必填">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>預約參觀人數</label>
                                                                        <div class="input-group input-group-lg">
                                                                            <input class="input-lg" id="touchspin_5" type="text" value="" name="demo_vertical"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>姓名</label>
                                                                        <input type="text" class="form-control input-lg" placeholder="必填">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>性別</label><br>
                                                                        <input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success" data-on-text="男" data-off-text="女" data-size="large">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">行動電話</label>
                                                                    <div>
                                                                        <input class="form-control input-lg" id="mask_phone" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)</label>
                                                                        <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </span>
                                                                            <input type="text" class="form-control input-lg" id="mask_email" placeholder="Email Address"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <br>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="{{route('campustour.step2')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 上一步</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="/" id="step1next" class="btn green-jungle btn-block btn-lg m-icon-big">下一步 <i class="m-icon-big-swapright m-icon-white"></i></a>
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