$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavFilter = $('.topnav-filter'),
        sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavBtns = $('nav.topnav .sidenav-btn, nav.sidenav .sidenav-btn');
    var backToTop = $('.back-to-top');
    if(topnav.length){

        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        // Topnav Filter
        topnav.find('.menu.has-children').mouseenter(function(){
            topnavFilter.addClass('active');
        });
        topnav.find('.menu.has-children').mouseleave(function(){
            topnavFilter.removeClass('active');
        });

        // Sidenav buttons
        sidenavBtns.click(function(e){
            e.preventDefault();
            if($('body').hasClass('sidenav-opened')){
                $('html, body').removeClass('sidenav-opened');
                sidenavBtns.find('> *').removeClass('active');
                sidenav.removeClass('active');
            }else{
                $('html, body').addClass('sidenav-opened');
                sidenavBtns.find('> *').addClass('active');
                sidenav.addClass('active');
            }
        });
        $('.sidenav-filter').click(function(e){
            e.preventDefault();
            $('html, body').removeClass('sidenav-opened');
            sidenavBtns.find('> *').removeClass('active');
            sidenav.removeClass('active');
        });

        // Generate sidenav
        sidenavMenus.html( topnav.find('#topnav-menu').html() );
        sidenavMenus.find('.menu.menu-icon').remove();
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><i class="fas fa-chevron-right"></i></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });

        // Back to Top
        backToTop.click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({ scrollTop: 0 }, 800 );
        });
    }

    // Global Search
    var globalSearchContainer = $('.global-search-container');
    if(globalSearchContainer.hasClass('use-gsap')){
        var globalSearchTl =  new TimelineMax({paused: true})
            .to('.global-search-container', .6, {
                autoAlpha: 1, ease: Power3.easeInOut
            })
            .from('.global-search-container .hamburger', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .from('.global-search-container h1', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .from('.global-search-container .input-container', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .reverse();
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchTl.reversed( !globalSearchTl.reversed() );
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
                $('html, body').addClass('global-search-opened');
            }else{
                $('html, body').removeClass('global-search-opened');
            }
        });
    }else{
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
                $('html, body').addClass('global-search-opened');
            }else{
                $('html, body').removeClass('global-search-opened');
            }
        });
    }

    // Font Sizes
    var bodySize = 16;
    $('.btn.font-size-btn').click(function(e){
        e.preventDefault();
        var s = Number($(this).data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');
    });
    
    // Check on Scroll
    function checkOnScroll(st){
        if(st > 3.0625*bodySize){
            topnav.addClass('sticky');
            backToTop.addClass('active');
        }else{
            topnav.removeClass('sticky');
            backToTop.removeClass('active');
        }
    }

    // Themes
    $('.theme-btn').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css'); 
    });


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });
    
    // Calendar
    var calendar;
    if($('.calendar-container > .calendar-wrapper').length){
        if(!$('.banner-event').length){
            $('.calendar-container > .calendar-wrapper').simpleCalendar({
                months: [
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ],
                days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                displayYear: false,
                fixedStartDay: 0,
                displayEvent: true,
                disableEventDetails: false,
                disableEmptyDetails: true,
                events: [
                    {
                        startDate: new Date('08-18-2020'),
                        endDate: new Date('08-18-2020'),
                        summary: 'กิจกรรมที่ 1'
                    }
                ]
            });
        }else{
            calendar = $('.calendar-container > .calendar-wrapper').simpleCalendar({
                months: [
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ],
                days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                displayYear: false,
                fixedStartDay: 0,
                displayEvent: true,
                disableEventDetails: false,
                disableEmptyDetails: true,
                events: [
                    {
                        startDate: new Date('08-18-2020'),
                        endDate: new Date('08-18-2020'),
                        summary: 'กิจกรรมที่ 1'
                    }
                ],
                onMonthChange: function(month, year){
                    $('.banner-event').find('.slides').css('--month', month);
                    $('.banner-event').find('.slide').removeClass('active');
                    $('.banner-event').find('.slide[data-month="'+month+'"]').addClass('active');
                }
            });
        }
    }

    // Banner Event
    if($('.banner-event').length){
        $('.banner-event').each(function(){
            var bannerSlides = $(this).find('.slides'),
                bannerEvents = bannerSlides.find('.slide');
            bannerEvents.click(function(e){
                e.preventDefault();
                bannerSlides.css('--month', $(this).data('month'));
                bannerEvents.removeClass('active');
                $(this).addClass('active');
                if(calendar!==undefined){
                    var currentMonth = calendar.data('plugin_simpleCalendar').currentDate.getMonth();
                    calendar.data('plugin_simpleCalendar').changeMonth(
                        $(this).data('month') - currentMonth
                    );
                }
            });
        });
    }

    // Toggle Box
    if($('.toggle-box').length){
        $('.toggle-box').each(function(){
            $(this).find('> .toggle-title').click(function(e){
                e.preventDefault();
                $(this).toggleClass('active');
                $(this).next().slideToggle();
            });
        });
    }

    // Button Clear
    $('.btn-clear').click(function(e){
        e.preventDefault();
        var target = $(this).closest('.control').find('> input');
        if(target.length) target.val('');
    });

    // Button Toggle
    $('.btn-toggle').click(function(e){
        e.preventDefault();
        $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').slideToggle();
    });

    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });


    // Banner 01
    if($('section.banner-01').length){
        if($('section.banner-01').hasClass('img-only')){
            $('section.banner-01 > .slide-container').each(function(){
                var self = $(this);
                self.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 1, 
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                    arrows: true, appendArrows: self.find('.arrows'),
                    dots: true, appendDots: self.find('.dots'),
                    adaptiveHeight: true
                });
            });
        }else{
            $('section.banner-01 > .slide-container').each(function(){
                var self = $(this);
                self.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 1, 
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                    arrows: false, dots: true, appendDots: self.find('.dots')
                });
            });
        }
    }
    

    // Tab Container
    if($('.tab-container').length){
        $('.tab-container').each(function(){
            var self = $(this),
                tabs = self.find('> .tabs > .tab'),
                tabContents = self.find('> .tab-contents > .tab-content');
            tabs.click(function(e){
                e.preventDefault();
                tabs.removeClass('active');
                $(this).addClass('active');
                tabContents.removeClass('active');
                tabContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');

                if(self.hasClass('tab-container-02')){
                    self.find('.slides').slick('setPosition');
                }
            });

            // Tab Container 02
            if(self.hasClass('tab-container-02')){
                self.find('.slide-container').each(function(){
                    var self2 = $(this);
                    self2.find('> .slides').slick({
                        centerMode: false, centerPadding: 0, slidesToShow: 3, slidesToScroll: 1,
                        focusOnSelect: true, autoplay: false, swipeToSlide: true,
                        arrows: true, appendArrows: self2.find('.arrows'), dots: false,
                        responsive: [
                            { breakpoint: 991.98, settings: { slidesToShow: 2, } },
                            { breakpoint: 767.98, settings: { slidesToShow: 1, } },
                        ]
                    });
                });
            }
        });
    }


    // Page Loader
    if($('.page-loader').length){
        window.onload = function(){
            $('.page-loader').addClass('fade-out');
            setTimeout(function(){
                $('.page-loader').remove();
                $('body').removeClass('loading');
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
    }

    
    // AOS Animation
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });

});
