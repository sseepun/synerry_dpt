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
        topnav.find('#topnav-menu .submenu-container').each(function(){
            new SimpleBar($(this)[0], {  });
        });

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
            .from('.global-search-container h3', .6, {
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
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+$(this).data('theme'));
    });


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });


    // Button Toggle
    $('.btn-toggle').click(function(e){
        e.preventDefault();
        $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').toggleClass('active');
    });

    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });

    // Button Copy
    var copyReady = true;
    $('a[data-copy]').click(function(e){
        e.preventDefault();
        var self = $(this),
            target = $('textarea[data-copy="'+self.data('copy')+'"]');
        if(copyReady && target.length){
            copyReady = false;
            target[0].select();
            target[0].setSelectionRange(0, target[0].value.length);
            document.execCommand('copy');
            target.blur();
            self.html('<em class="fas fa-check mr-1"></em> คัดลอกโค๊ดสำเร็จ');
            setTimeout(function(){
                copyReady = true;
                self.closest('.toggle-target').removeClass('active');
                self.html('คัดลอกโค้ด');
            }, 2000);
        }
    });
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs > .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                e.preventDefault();
                tabs.removeClass('active');
                $(this).addClass('active');
                tabContents.removeClass('active');
                tabContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');
                AOS.refresh();
            });
        });
    }

    
    // FAQ 01
    var faq01 = $('.faq-01');
    if(faq01.length){
        faq01.each(function(){
            $(this).find('.faq > .question').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                if(parent.hasClass('active')){
                    parent.removeClass('active');
                    parent.find('> .answer').slideUp();
                }else{
                    parent.addClass('active');
                    parent.find('> .answer').slideDown();
                }
            });
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
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });

});
