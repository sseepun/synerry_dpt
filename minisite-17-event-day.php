<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
            [ 'url' => '#', 'display' => 'กิจกรรมรวมทั้งหมด' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">สัมนาวิชาการ</a>
                                    <a class="tab" href="#">กิจกรรมเพื่อสังคม</a>
                                    <a class="tab" href="#">นิทรรศการประชาสัมพันธ์</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">

                            <!-- Calendar Header Minisite - Day -->
                            <div class="calendar-header-minisite day mb-3">
                                <div class="float-choice-wrapper color-black">
                                    <div class="wrapper">
                                        <p class="xs fw-500 mr-1">มุมมอง</p>
                                        <div class="select-wrapper">
                                            <select class="no-bradius">
                                                <option value="0">ดูทั้งหมด</option>
                                                <option value="1">รายเดือน</option>
                                                <option value="2">รายสัปดาห์</option>
                                                <option value="3" selected>รายวัน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="calendar-title fw-600" id="calendar-title">
                                    <span class="month color-01">&nbsp;</span>
                                    <span class="year">&nbsp;</span>
                                </h6>
                                <div class="arrows">
                                    <div class="arrow calendar-btn" id="prev-month-btn">
                                        <em class="zmdi zmdi-chevron-left"></em>
                                    </div>
                                    <div class="arrow calendar-btn" id="next-month-btn">
                                        <em class="zmdi zmdi-chevron-right"></em>
                                    </div>
                                </div>
                            </div>

                            <!-- Calendar Day -->
                            <div class="scroll-x-wrapper" data-simplebar>
                                <div class="calendar-wrapper minisite">
                                    <div class="calendar-day minisite">
                                        <div id="calendar-day"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>
    <script>
        $(function(){ 'use strict';

            // Calendar Variables
            var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
            var months = [
                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
            ];
            var today = new Date();


            // Calendar Month
            var calendarTitle = $('#calendar-title'),
                prevMonthBtn = $('#prev-month-btn'),
                nextMonthBtn = $('#next-month-btn');
            
            function htmlToElement(html){
                var template = document.createElement('template');
                html = html.trim();
                template.innerHTML = html;
                return template.content.firstChild;
            }
            function updateCalendarHeaderDay(view){
                var title = view.title;
                calendarTitle.find('.month').html(title.substr(0, title.length - 5));
                calendarTitle.find('.year').html(title.substr(title.length - 5));
            }

            const calendarDay = new FullCalendar.Calendar($('#calendar-day')[0], {
                plugins: [ 'interaction', 'timeGrid'],
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                defaultView: 'timeGridDay',
                firstDay: 1,
                locale: 'th',
                contentHeight: 'auto',
                slotDuration: '01:00:00',
                events: [
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-03-16T10:00:00',
                        end: '2021-03-16T18:00:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564 2',
                        start: '2021-03-17T12:00:00',
                        end: '2021-03-17T21:00:00',
                        url: '#',
                    },
                ],
                datesRender: function(info){
                    updateCalendarHeaderDay(info.view);
                },
            });
            calendarDay.render();


            // Events
            prevMonthBtn.click(function(e){
                e.preventDefault();
                calendarDay.prev();
            });
            nextMonthBtn.click(function(e){
                e.preventDefault();
                calendarDay.next();
            });

        });
    </script>
</body>
</html>
