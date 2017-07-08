@extends('layouts.app-search')

@section('title')
    校園導覽預約內容
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
                                {!! Form::model($campustourFormData, ['method'=>'PATCH', 'action'=>['SearchController@index', $campustourFormData->uuid]]) !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <!-- BEGIN SAMPLE FORM PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption font-red-sunglo">
                                                        <i class="icon-settings font-red-sunglo"></i>
                                                        <span class="caption-subject bold uppercase">您所申請的預約資料如下。</span>
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
                                                                {!! Form::text('reserveCount', $campustourFormData['reserveCount'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>姓名</label>
                                                                {!! Form::text('name', $campustourFormData['name'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>性別</label>
                                                                {!! Form::text('gender', $campustourFormData['gender'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">行動電話</label>
                                                            {!! Form::text('phoneNumber', $campustourFormData['phoneNumber'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                {!! Form::text('email', $campustourFormData['email'], ['class' => 'form-control input-lg', 'readonly']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{csrf_field()}}
                                        <div class="col-md-6">
                                            <div class="text-center">
                                                <a href="#" id="cancelButton" class="btn red btn-block btn-lg m-icon-big mt-sweetalert"><i class="fa fa-ban"></i> 取消預約</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center">
                                                <a href="{{route('search.campustour.edit', $campustourFormData['uuid'])}}" class="btn blue btn-block btn-lg m-icon-big"><i class="fa fa-pencil"></i> 編輯預約</a>
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
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
    <!-- END CONTENT -->
@stop

@section('customScript')
<script>
    $('#cancelButton').click(function(){
        swal({
                title: "您確定要取消預約？",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: "btn-info",
                cancelButtonText: "否，回到頁面",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "是，取消預約",
                closeOnConfirm: false
            },
            function (isConfirm) {
                if (!isConfirm) return;
                $.ajax({
                    url: "{{url('/search/campustour/delete')}}",
                    type: "get",
                    data: {
                        uuid: '{{$campustourFormData->uuid}}'
                    },
                    dataType: "html",
                    success: function () {
                        swal({
                            title: "已取消預約！",
                            text: "頁面將於五秒後導向首頁",
                            type: "success",
                            timer: 5000,
                            showConfirmButton: false
                        }, function(){
                            window.location.href = "/";
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal("無法刪除", "請再試一次！", "error");
                        console.log("xhr=" + xhr + " b=" + ajaxOptions + " c=" + thrownError);
                    }
                });
            });
    });
</script>
@stop