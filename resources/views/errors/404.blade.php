@extends('layouts.app')

@section('title')
    404 錯誤
@stop

@section('content')
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="page-content-inner">
        <div class="row">
            <div class="col-md-12 page-404">
                <div class="number font-green"> 404 </div>
                <div class="details">
                    <h3>挖！您迷路了！</h3>
                    <p> 我們找不到您所尋找的頁面，請回到首頁吧！</p>
                    <a href="/" class="btn red">
                        <i class="fa fa-home"></i>
                        回首頁
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
@stop