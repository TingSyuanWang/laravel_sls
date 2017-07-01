@extends('layouts.app')

@section('title')
    預約導覽 步驟二
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
                                            <div class="col-md-3 mt-step-col active">
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
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet light portlet-fit calendar">
                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12">
                                                                <div id="campustourcalendar" class="has-toolbar"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <a href="{{route('campustour.step1')}}" class="btn blue btn-block btn-lg m-icon-big"><i class="m-icon-big-swapleft m-icon-white"></i> 上一步</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="text-center">
                                                        <button id="step2Submit" class="btn green-jungle btn-block btn-lg m-icon-big">下一步 <i class="m-icon-big-swapright m-icon-white"></i></button>
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
        var AppCalendar = function() {

            return {
                //main function to initiate the module
                init: function() {
                    this.initCalendar();
                },

                initCalendar: function() {

                    if (!jQuery().fullCalendar) {
                        return;
                    }

                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    var h = {};

                    if (App.isRTL()) {
                        if ($('#campustourcalendar').parents(".portlet").width() <= 720) {
                            $('#campustourcalendar').addClass("mobile");
                            h = {
                                right: 'title, prev, next',
                                center: '',
                                left: 'month, today'
                            };
                        } else {
                            $('#campustourcalendar').removeClass("mobile");
                            h = {
                                right: 'title',
                                center: '',
                                left: 'month, today, prev,next'
                            };
                        }
                    } else {
                        if ($('#campustourcalendar').parents(".portlet").width() <= 720) {
                            $('#campustourcalendar').addClass("mobile");
                            h = {
                                left: 'title, prev, next',
                                center: '',
                                right: 'today,month'
                            };
                        } else {
                            $('#campustourcalendar').removeClass("mobile");
                            h = {
                                left: 'title',
                                center: '',
                                right: 'prev,next,today,month'
                            };
                        }
                    }

                    var addEvent = function(title) {
                        title = title.length === 0 ? "Untitled Event" : title;
                        var html = $('<div class="external-event label label-default">' + title + '</div>');
                        jQuery('#event_box').append(html);
                    };

                    $('#event_add').unbind('click').click(function() {
                        var title = $('#event_title').val();
                        addEvent(title);
                    });

                    //predefined events
                    $('#event_box').html("");
                    addEvent("第一場次 8-10");
                    addEvent("第二場次 10-12");
                    addEvent("第三場次 13-15");
                    addEvent("第四場次 15-17");

                    $('#campustourcalendar').fullCalendar('destroy'); // destroy the calendar
                    $('#campustourcalendar').fullCalendar({ //re-initialize the calendar
                        weekends: false,
                        minTime: "08:00:00",
                        maxTime: "17:00:00",
                        header: h,
                        defaultView: 'month', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/ 
                        editable: false,
                        events: [{
                            title: '第一場次 8-10',
                            start: new Date(y, m, d, 8, 0),
                            end: new Date(y, m, d, 10, 0),
                            dow: [1, 2, 3, 4, 5],
                            allDay: false,
                            backgroundColor: App.getBrandColor('yellow')
                        }, {
                            title: '第二場次 10-12',
                            start: new Date(y, m, d, 10, 0),
                            end: new Date(y, m, d, 12, 0),
                            dow: [1, 2, 3, 4, 5],
                            allDay: false,
                            backgroundColor: App.getBrandColor('green')
                        }, {
                            title: '第三場次 13-15',
                            start: new Date(y, m, d, 13, 0),
                            end: new Date(y, m, d, 15, 0),
                            dow: [1, 2, 3, 4, 5],
                            allDay: false,
                            backgroundColor: App.getBrandColor('grey')
                        }, {
                            title: '第四場次 15-17',
                            start: new Date(y, m, d, 15, 0),
                            end: new Date(y, m, d, 17, 0),
                            dow: [1, 2, 3, 4, 5],
                            allDay: false,
                            backgroundColor: App.getBrandColor('purple')
                        }],
                        eventRender: function(event, element, view){
                            var m = moment().add(13, 'days').add(15, 'hours');
                            if (event.start.format() < m.format()) {
                                return false;
                            }
                            @foreach($campustourEvents as $campustourEvent)
                            if (event.start.format('YYYY/MM/DD hh:mm') === '{{ $campustourEvent->campustourdate }}') {
                                return false;
                            }
                            @endforeach
                        },
                        eventClick: function(calEvent, jsEvent, view) {
                            var selectedContainer = jsEvent.currentTarget.firstChild;
                            $(".fc-state-highlight").removeClass("fc-state-highlight");
                            $(selectedContainer).addClass("fc-state-highlight");
                            window.selectedDate = moment(calEvent.start).format('YYYY/MM/DD hh:mm');
                        }
                    });
                }
            };

        }();

        jQuery(document).ready(function() {
            AppCalendar.init();

            $('#step2Submit').click(function(){
                var findChecked = document.getElementsByClassName("fc-state-highlight")[0];
                if (findChecked === 'fc-content fc-state-highlight'){
                    $.ajax({
                        url: 'step2getdate',
                        type: "get",
                        data: {date: selectedDate},
                        success: function(data){
//                            jQuery("body").html(data);
                        },
                        error: function (xhr, b, c) {
                            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
                        }
                    });
                    window.location.href = "/campustour/step3";
                } else {
                    swal("您尚未選擇日期","", "error");
                    return false;
                }
            });
        });

    </script>
@stop