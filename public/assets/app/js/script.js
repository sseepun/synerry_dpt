$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav');


    // Topnav Dropdown
    var topnavDropdown = $('.topnav-dropdown'),
        topnavDropdownToggle = $('.topnav-dropdown-toggle');
    topnavDropdownToggle.click(function(e){
        e.preventDefault();
        if(topnavDropdown.hasClass('active')){
            topnavDropdown.removeClass('active');
            topnavDropdownToggle.find('.hamburger').removeClass('active');
            $('html, body').removeClass('topnav-dropdown-opened');
        }else{
            topnavDropdown.addClass('active');
            topnavDropdownToggle.find('.hamburger').addClass('active');
            $('html, body').addClass('topnav-dropdown-opened');
        }
    });

    // Back to Top
    var backToTop = $('.back-to-top');
    backToTop.click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({ scrollTop: 0 }, 800 );
    });

    // Global Search
    var globalSearchContainer = $('.global-search-container');
    if(globalSearchContainer.length){
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
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
    }
    checkOnScroll( $(window).scrollTop() );
    $(window).scroll(function(){
        checkOnScroll( $(this).scrollTop() );
    });

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
