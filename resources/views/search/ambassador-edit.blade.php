@extends('layouts.app-search')

@section('title')
    修改內容
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
                                {!! Form::model($ambassadorFormData, ['method'=>'PATCH', 'action'=>['SearchController@ambassadorUpdate', $ambassadorFormData->uuid]]) !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <!-- BEGIN SAMPLE FORM PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption font-red-sunglo">
                                                        <i class="icon-settings font-red-sunglo"></i>
                                                        <span class="caption-subject bold uppercase">請修改您需要修改的資料。</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body form">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label><i class="fa fa-calendar-check-o"></i> 您所選擇的時間</label>
                                                                {!! Form::text('ambassadorDate', $ambassadorFormData['ambassadorDate'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>服務內容<span class="required"> * </span></label>
                                                                {!! Form::textarea('serviceContent', $ambassadorFormData['serviceContent'], ['class'=>'form-control input-lg', 'rows'=>'3']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>服務地點<span class="required"> * </span></label>
                                                                {!! Form::text('serviceLocation', $ambassadorFormData['serviceLocation'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>需要親善大使人數(至多10人)<span class="required"> * </span></label>
                                                                {!! Form::text('reserveCount', $ambassadorFormData['reserveCount'], ['class'=>'form-control input-lg', 'id'=>'touchspin_6']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>單位名稱<span class="required"> * </span></label>
                                                                {!! Form::text('categoryName', $ambassadorFormData['categoryName'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>姓名<span class="required"> * </span></label>
                                                                {!! Form::text('name', $ambassadorFormData['name'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>性別<span class="required"> * </span></label>
                                                                {!! Form::select('gender', [''=>'請選擇', '男'=>'男', '女'=>'女'], $ambassadorFormData['gender'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>行動電話<span class="required"> * </span></label>
                                                                {!! Form::text('phoneNumber', $ambassadorFormData['phoneNumber'], ['class'=>'form-control input-lg', 'id'=>'mask_phone']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)')<span class="required"> * </span></label>
                                                                {!! Form::text('email', $ambassadorFormData['email'], ['class'=>'form-control input-lg', 'id'=>'mask_email']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>聯絡時間(例假日及六、日不撥打)<span class="required"> * </span></label>
                                                                {!! Form::select('contactTime', [''=>'請選擇', '上午 9:00-12:00'=>'上午 9:00-12:00', '下午 13:00-17:00'=>'下午 13:00-17:00'], $ambassadorFormData['contactTime'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>其它備註<span class="required"> * </span></label>
                                                                {!! Form::text('message', $ambassadorFormData['message'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{csrf_field()}}
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="text-center">
                                                {{Form::button('修改預約內容 <i class="m-icon-big-swapright m-icon-white"></i>', array('type' => 'submit', 'id' => 'submitButton', 'class' => 'btn green-jungle btn-block btn-lg m-icon-big'))}}
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <!-- END Portlet PORTLET-->
                                    </div>
                                </div>
                                {!! Form::close() !!}
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
<script>
    $('#submitButton').click(function(){
        var countValue = $('#touchspin_6').val();
        var FormDataCount = {{$ambassadorFormData['reserveCount']}};
        if (countValue > FormDataCount){
            swal("需要親善大使人數過多！", "您所需要親善大使人數不能超過一開始預約的人數", "error");
            return false;
        } else {
            return true;
        }
    });
</script>
@stop