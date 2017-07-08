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
                                {!! Form::model($campustourFormData, ['method'=>'PATCH', 'action'=>['SearchController@campustourUpdate', $campustourFormData->uuid]]) !!}
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
                                                                {!! Form::text('campustourdate', $campustourFormData['campustourdate'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>團體(代表人)名稱</label>
                                                                {!! Form::text('category', $campustourFormData['category'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>團體(代表人)名稱</label>
                                                                {!! Form::text('categoryName', $campustourFormData['categoryName'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>預約參觀人數</label>
                                                                {!! Form::text('reserveCount', $campustourFormData['reserveCount'], ['class'=>'form-control input-lg', 'id'=>'touchspin_5']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>姓名</label>
                                                                {!! Form::text('name', $campustourFormData['name'], ['class' => 'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>性別</label>
                                                                {!! Form::select('gender', [''=>'請選擇', '男'=>'男', '女'=>'女'], $campustourFormData['gender'], ['class'=>'form-control input-lg']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">行動電話</label>
                                                            {!! Form::text('phoneNumber', $campustourFormData['phoneNumber'], ['class'=>'form-control input-lg', 'id'=>'mask_phone']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Email (google 帳戶請使用 gmail.com，yahoo 帳戶請使用 yahoo.com.tw)</label>
                                                                {!! Form::text('email', $campustourFormData['email'], ['class'=>'form-control input-lg', 'id'=>'mask_email']) !!}
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
                                                {{Form::button('修改預約內容 <i class="m-icon-big-swapright m-icon-white"></i>', array('type' => 'submit', 'id'=>'submitButton', 'class' => 'btn green-jungle btn-block btn-lg m-icon-big'))}}
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
        var countValue = $('#touchspin_5').val();
        var FormDataCount = "{{$campustourFormData['reserveCount']}}";
        if (countValue > FormDataCount){
            swal("預約參觀人數過多！", "您所選擇的預約人數不能超過一開始預約的人數", "error");
            return false;
        } else {
            return true;
        }
    });
</script>
@stop