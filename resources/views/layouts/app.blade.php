<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | 亞洲大學服務學習組</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon-32x32.png" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <!-- BEGIN HEADER -->
            <div class="page-header">
                <!-- BEGIN HEADER TOP -->
                <div class="page-header-top">
                    <div class="container">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="http://sls.asia.edu.tw">
                                <img src="img/logo_sls_1.5x.png" alt="logo" class="">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="javascript:;" class="menu-toggler"></a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                    </div>
                </div>
                <!-- END HEADER TOP -->
                <!-- BEGIN HEADER MENU -->
                <div class="page-header-menu">
                    <div class="container">
                        <!-- BEGIN MEGA MENU -->
                        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                        <div class="hor-menu  ">
                            <ul class="nav navbar-nav">
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                    <a href="javascript:;"> 預約系統
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="javascript:;"> 預約查詢
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                    <a href="javascript:;"> 預約取消
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MEGA MENU -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!-- END HEADER -->
        </div>
    </div>
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                @yield('content')

            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <!-- BEGIN FOOTER -->
            <!-- BEGIN INNER FOOTER -->
            <div class="page-footer">
                <div class="container"> &copy; 2001-<?php echo date("Y"); ?> <a target="_blank" href="http://sls.asia.edu.tw/">亞洲大學服務學習組 Asia University, Taiwan.</a> All Rights Reserved. <br>
                    Site by <a target="_blank" href="https://tingsyuanwang.github.io/blogs/">TingSyuanWang</a>
                </div>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
            <!-- END INNER FOOTER -->
            <!-- END FOOTER -->
        </div>
    </div>
</div>

<!--[if lt IE 9]>
<script src="{{asset('js/ie9.js')}}"></script>
<![endif]-->
<script src="{{asset('js/libs.js')}}"></script>
</body>

</html>