@extends('layouts.app-search')

@section('title')
    查詢結果-親善大使
@stop

@section('content')
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="col-lg-12">
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">查詢結果</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                @if ($ambassadorModelData->isEmpty())
                                    <h3 class="text-center">查無任何資料！請重新查詢！</h3>
                                @else
                                    @foreach($ambassadorModelData as $ambassadorModelDatum)
                                    <div class="col-md-4">
                                        <div class="mt-element-ribbon bg-grey-steel">
                                            <div class="ribbon ribbon-shadow ribbon-color-success uppercase">預約時間：{{$ambassadorModelDatum->ambassadorDate}}</div>
                                            <h4 class="ribbon-content">團體或個人名稱：{{$ambassadorModelDatum->categoryName}}</h4>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="{{route('search')}}" class="btn red btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 重新查詢預約</a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
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