@extends('layouts.app')

@section('title')
    預約導覽 步驟一
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
                                            <div class="col-md-3 mt-step-col first active">
                                                <div class="mt-step-number bg-white">1</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">注意事項</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col">
                                                <div class="mt-step-number bg-white">2</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">選擇日期</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col">
                                                <div class="mt-step-number bg-white">3</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料填寫</div>
                                            </div>
                                            <div class="col-md-3 mt-step-col last">
                                                <div class="mt-step-number bg-white">4</div>
                                                <div class="mt-step-title uppercase font-grey-cascade">資料確認</div>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">請同意注意事項...</div>
                                                    </div>
                                                    <div class="well well-large">
                                                        <h4>1. 請於 2 週前申請預約。</h4>
                                                        <h4>2. 導覽地點由本校導覽人員負責規劃，不含亞洲大學現代美術館。</h4>
                                                        <h4>3. 預約完畢後，請確認基本資料無誤後再送出。</h4>
                                                        <h4>4. 預約成功後，將由專人與您聯繫 (工作時間 2-3 天，不含例假日及六、日)。</h4>
                                                        <div class="form-group form-md-checkboxes">
                                                            <div class="md-checkbox-list">
                                                                <div class="md-checkbox has-error">
                                                                    <input type="checkbox" id="agreeCheckbox" class="md-check">
                                                                    <label for="agreeCheckbox">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> 我同意以上服務條款 </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="text-center">
                                                            <a href="{{route('homepage')}}" class="btn red btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 回首頁</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="text-center">
                                                            <a href="{{route('campustour.step2')}}" id="step1next" class="btn green-jungle btn-block btn-lg m-icon-big">下一步 <i class="m-icon-big-swapright m-icon-white"></i></a>
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
    <script>
        $('#step1next').click(function() {
            if($('#agreeCheckbox').is(':checked')){
                return true;
            } else {
                swal("請同意服務條款","", "error");
                return false;
            }
        });
    </script>
@stop