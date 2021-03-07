<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
        $breadcrumbBg = 'public/assets/app/images/bg/22.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            
            <!-- Calendar Header - Month -->
            <div class="calendar-header month mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="month-selector">
                    <div class="calendar-btn p md fw-500 color-01 h-color-02" id="prev-month-btn">
                        <em class="zmdi zmdi-chevron-left h6 mr-2"></em>
                        <span>&nbsp;</span>
                    </div>
                    <h6 class="calendar-title h4 xl fw-500" id="calendar-title">&nbsp;</h6>
                    <div class="calendar-btn p md fw-500 color-01 h-color-02" id="next-month-btn">
                        <span>&nbsp;</span>
                        <em class="zmdi zmdi-chevron-right h6 ml-2"></em>
                    </div>
                </div>
                <div class="year-selector">
                    <div class="year-btn h5 fw-500 color-01 h-color-02 mr-3" id="prev-year-btn">
                        <em class="zmdi zmdi-chevron-left"></em>
                    </div>
                    <h6 class="p lg fw-500" id="calendar-year">
                        พ.ศ.<span class="h4 ml-1">&nbsp;</span>
                    </h6>
                    <div class="year-btn h5 fw-500 color-01 h-color-02 ml-3" id="next-year-btn">
                        <em class="zmdi zmdi-chevron-right"></em>
                    </div>
                </div>
            </div>

            <!-- Calendar Month -->
            <div class="scroll-x-wrapper" data-simplebar data-aos="fade-up" data-aos-delay="450">
                <div class="calendar-wrapper">
                    <div class="calendar-month">
                        <div id="calendar-month"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
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
            var calendarYear = $('#calendar-year'),
                prevYearBtn = $('#prev-year-btn'),
                nextYearBtn = $('#next-year-btn');
            
            function htmlToElement(html){
                var template = document.createElement('template');
                html = html.trim();
                template.innerHTML = html;
                return template.content.firstChild;
            }
            function updateCalendarHeader(month, year){
                var prevMonth = 0;
                var nextMonth = 0;

                if(months[month - 1]) prevMonth = months[month - 1];
                else prevMonth = months[months.length - 1];

                if(months[month + 1]) nextMonth = months[month + 1];
                else nextMonth = months[0];

                calendarTitle.html(months[month]);
                prevMonthBtn.find('> span').html(prevMonth);
                nextMonthBtn.find('> span').html(nextMonth);
                
                calendarYear.find('> span').html(year+543);
            }

            const calendarMonth = new FullCalendar.Calendar($('#calendar-month')[0], {
                plugins: [ 'interaction', 'dayGrid' ],
                defaultView: 'dayGridMonth',
                firstDay: 0,
                locale: 'th',
                contentHeight: 'auto',
                eventLimit: true,
                eventLimitText: 'กิจกรรม',
                views: {dayGrid: {eventLimit: 2}},
                events: [
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-03-08',
                        customStartTime: '12:45 น.',
                        end: '2021-03-08',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-03-08',
                        customStartTime: '12:45 น.',
                        end: '2021-03-08',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-03-09',
                        customStartTime: '12:45 น.',
                        end: '2021-03-09',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-03-09',
                        customStartTime: '09:00 น.',
                        end: '2021-03-09',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-03-09',
                        customStartTime: '09:00 น.',
                        end: '2021-03-09',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-03-10',
                        customStartTime: '09:00 น.',
                        end: '2021-03-10',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-03-10',
                        customStartTime: '09:00 น.',
                        end: '2021-03-10',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                ],
                columnHeaderText: function(date){
                    return days[date.getDay()];
                },
                datesRender: function(info){
                    var date = new Date(info.view.currentStart);
                    updateCalendarHeader(date.getMonth(), date.getFullYear());
                },
                eventRender: function(info, d){
                    var event = info.event,
                        date = new Date(event.start),
                        classer = '';
                    if(date.getFullYear()===today.getFullYear() 
                    && date.getMonth()===today.getMonth() 
                    && date.getDate()===today.getDate()){
                        classer = 'today';
                    }
                    info.el.innerHTML = '<div class="custom-event '+classer+'">'
                            +'<div class="time">'
                                +event.extendedProps.customStartTime
                                +' - '
                                +event.extendedProps.customEndTime
                            +'</div>'
                            +'<div class="title">'+event.title+'</div>'
                        +'</div>';
                    return true;
                }
            });
            calendarMonth.render();


            // Events
            prevMonthBtn.click(function(e){
                e.preventDefault();
                calendarMonth.prev();
            });
            nextMonthBtn.click(function(e){
                e.preventDefault();
                calendarMonth.next();
            });
            prevYearBtn.click(function(e){
                e.preventDefault();
                calendarMonth.prevYear();
            });
            nextYearBtn.click(function(e){
                e.preventDefault();
                calendarMonth.nextYear();
            });

        });
    </script>
</body>
</html>
