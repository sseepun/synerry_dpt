$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavSecretary = $('nav.topnav-secretary');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggle = $('nav.topnav .sidenav-toggle, nav.topnav-secretary .sidenav-toggle, nav.sidenav .sidenav-toggle');

    if(topnav.length){
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
    }

    if(topnavSecretary.length){
        // Generate Sidenav
        sidenavMenus.html( topnavSecretary.find('#topnav-menu').html() );
        sidenavMenus.find('.num, .title, .submenu-title').remove();
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });
    }

    // Sidenav Toggle
    sidenavToggle.click(function(e){
        e.preventDefault();
        if($('body').hasClass('sidenav-opened')){
            $('html, body').removeClass('sidenav-opened');
            sidenavToggle.find('> *').removeClass('active');
            sidenav.removeClass('active');
        }else{
            $('html, body').addClass('sidenav-opened');
            sidenavToggle.find('> *').addClass('active');
            sidenav.addClass('active');
        }
    });
    $('.sidenav-filter').click(function(e){
        e.preventDefault();
        $('html, body').removeClass('sidenav-opened');
        sidenavToggle.find('> *').removeClass('active');
        sidenav.removeClass('active');
    });

    // Back to Top
    var backToTop = $('.back-to-top');
    backToTop.click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({ scrollTop: 0 }, 800 );
    });

    // Global Search Container
    var globalSearchContainer = $('.global-search-container'),
        globalSearchToggles = $('.global-search-toggle');
    if(globalSearchContainer.length && globalSearchToggles.length){
        globalSearchToggles.click(function(e){
            e.preventDefault();
            globalSearchToggles.toggleClass('active');
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
                $('html, body').addClass('global-search-opened');
            }else{
                $('html, body').removeClass('global-search-opened');
            }
        });
    }

    // Accessibility Container
    var accessibilityContainer = $('.accessibility-container'),
        accessibilityToggles = $('.accessibility-toggle');
    if(accessibilityContainer.length && accessibilityToggles.length){
        accessibilityToggles.click(function(e){
            e.preventDefault();
            accessibilityToggles.toggleClass('active');
            accessibilityContainer.toggleClass('active');
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

    // Themes
    $('.theme-btn').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+$(this).data('theme'));
    });

    
    // Check on Scroll
    function checkOnScroll(st){
        if(st > 4*bodySize){
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
        if(st > 16*bodySize){
            topnavSecretary.addClass('sticky');
        }else{
            topnavSecretary.removeClass('sticky');
        }
    }
    checkOnScroll( $(window).scrollTop() );
    $(window).scroll(function(){
        checkOnScroll( $(this).scrollTop() );
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
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    slideContainers = target.find('.slide-container');
                if(target.length){
                    e.preventDefault();
                    tabs.removeClass('active');
                    $(this).addClass('active');

                    tabContents.removeClass('active');
                    target.addClass('active');
                    
                    if(slideContainers.length){
                        slideContainers.each(function(){
                            $(this).find('.slides').slick('setPosition');
                        });
                    }
    
                    AOS.refresh();
                }
            });
        });
    }

    
    // Special Card 05
    var ssCard05 = $('.ss-card-05.use-slick');
    if(ssCard05.length){
        ssCard05.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-container'),
                slides = slideContainer.find('> .slides'),
                imageWrappers = self.find('.img-wrapper');
            slides.slick({
                centerMode: false, infinity: true, centerPadding: 0, slidesToShow: 1, 
                focusOnSelect: true, autoplay: false, autoplaySpeed: 4000, speed: 600,
                arrows: true, appendArrows: slideContainer.find('.arrows'), dots: false
            });
            slides.on('beforeChange', function(e, s, c, i){
                imageWrappers.removeClass('active');
                imageWrappers.filter('[data-i="'+i+'"]').addClass('active');
            });
        });
    }


    // Footer Minisite
    var fooerMinisite = $('nav.footer-minisite');
    if(fooerMinisite.length){
        fooerMinisite.find('.slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                centerMode: false, infinity: true, centerPadding: 0, slidesToShow: 5, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                arrows: true, appendArrows: self.find('> .arrows'), dots: false,
                swipeToSlide: true,
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 2, } },
                ]
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
