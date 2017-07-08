@extends('layouts.app')

@section('title')
    預約系統
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
                            <div class="col-md-4">
                                <!-- BEGIN WIDGET THUMB -->
                                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                    <h4 class="widget-thumb-heading">校園導覽已完成服務</h4>
                                    <div class="widget-thumb-wrap">
                                        <i class="widget-thumb-icon bg-blue icon-layers"></i>
                                        <div class="widget-thumb-body">
                                            <span class="widget-thumb-subtitle">場次：</span>
                                            @if (count($campustourCounts) === 0)
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="0">0</span>
                                            @else
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{count($campustourCounts['id'])}}">0</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- END WIDGET THUMB -->
                            </div>
                            <div class="col-md-4">
                                <!-- BEGIN WIDGET THUMB -->
                                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                    <h4 class="widget-thumb-heading">親善大使已完成服務</h4>
                                    <div class="widget-thumb-wrap">
                                        <i class="widget-thumb-icon bg-red fa fa-area-chart"></i>
                                        <div class="widget-thumb-body">
                                            <span class="widget-thumb-subtitle">場次：</span>
                                            @if (count($ambassadorCounts) === 0)
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="0">0</span>
                                            @else
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{count($ambassadorCounts['id'])}}">0</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- END WIDGET THUMB -->
                            </div>
                            <div class="col-md-4">
                                <!-- BEGIN WIDGET THUMB -->
                                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                    <h4 class="widget-thumb-heading">其它已完成服務</h4>
                                    <div class="widget-thumb-wrap">
                                        <i class="widget-thumb-icon bg-purple icon-bar-chart"></i>
                                        <div class="widget-thumb-body">
                                            <span class="widget-thumb-subtitle">場次：</span>
                                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="尚無服務">0</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WIDGET THUMB -->
                            </div>
                        </div>
                        <!-- END row wiget-row -->
                    </div>
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-bookmark"></i>
                                <span class="caption-subject font-blue-chambray bold"> 請選擇您要預約的項目...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="pricing-content-1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="price-column-container border-active">
                                            <div class="price-table-head bg-blue">
                                                <h2 class="no-margin">校園導覽預約</h2>
                                            </div>
                                            <div class="arrow-down border-top-blue"></div>
                                            <div class="price-table-pricing">
                                                <h3>
                                                    <sup class="price-sign">導覽時間 </sup>2 hr</h3>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-calendar-check-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">請於 2 週前申請預約</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">導覽地點由本校導覽人員負責規劃，不含亞洲大學現代美術館</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約完畢後，請確認基本資料無誤後再送出</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-phone-square"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約成功後，將由專人與您聯繫<br>(工作時間 2-3 天，不含例假日及六、日)</div>
                                                </div>
                                            </div>
                                            <div class="arrow-down arrow-grey"></div>
                                            <div class="price-table-footer">
                                                <a href="{{route('campustour.step1')}}" class="btn blue btn-outline sbold uppercase price-button">我要預約</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price-column-container border-active">
                                            <div class="price-table-head bg-red">
                                                <h2 class="no-margin">親善大使預約</h2>
                                            </div>
                                            <div class="arrow-down border-top-red"></div>
                                            <div class="price-table-pricing">
                                                <h3>
                                                    <sup class="price-sign">服務時間 </sup>2 hr</h3>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-calendar-check-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">請於 15 天前申請預約</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約完畢後，請確認基本資料無誤後再送出</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-phone-square"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約成功後，將由專人與您聯繫<br>(工作時間 2-3 天，不含例假日及六、日)</div>
                                                </div>
                                            </div>
                                            <div class="arrow-down arrow-grey"></div>
                                            <div class="price-table-footer">
                                                <a href="{{route('ambassador.step1')}}" class="btn red btn-outline sbold uppercase price-button">我要預約</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price-column-container border-active">
                                            <div class="price-table-head bg-purple">
                                                <h2 class="no-margin">其它預約</h2>
                                            </div>
                                            <div class="arrow-down border-top-purple"></div>
                                            <div class="price-table-pricing">
                                                <h3>
                                                    <sup class="price-sign">服務時間 </sup>未定</h3>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-calendar-check-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">請於 ** 天前申請預約</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約完畢後，請確認基本資料無誤後再送出</div>
                                                </div>
                                                <div class="row mobile-padding">
                                                    <div class="col-xs-3 text-right mobile-padding">
                                                        <i class="fa fa-phone-square"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-left mobile-padding">預約成功後，將由專人與您聯繫<br>(工作時間 2-3 天，不含例假日及六、日)</div>
                                                </div>
                                            </div>
                                            <div class="arrow-down arrow-grey"></div>
                                            <div class="price-table-footer">
                                                <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">暫不開放</button>
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
@stop