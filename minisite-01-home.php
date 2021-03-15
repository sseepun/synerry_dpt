<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        /* Banner 03 */
        .banner-03{position:relative; width:100%;}
        .banner-03 .slide-container{display:block; position:relative; width:100%;}
        .banner-03 .slide{
            display:flex; align-items:center; position:relative; width:100%; height:auto;
            background-size:cover; background-position:center;
        }
        .banner-03 .arrows{
            position:absolute; top: calc(50% - 2.5rem); z-index:2;
            width:100%; display:block; 
            pointer-events:none; padding:0 3rem;
        }
        .banner-03 .arrows .arrow{
            display:block; background:none; box-shadow:none; text-decoration:none; outline:none;
            width:2.25rem; height:2.25rem; line-height:2.25rem; border-radius:50%; text-align:center;
            border:0; font-size:0; padding:0; margin:0; pointer-events:auto; transition:opacity .25s;
            color: #fff; margin: 0 0 0 auto; cursor: pointer;
        }
        .banner-03 .arrows .arrow:hover{opacity:.7;}
        .banner-03 .arrows .arrow::before{
            font:normal normal normal 14px/1 'Material-Design-Iconic-Font';
            font-size:1.625rem; line-height:2.375rem; 
        }
        .banner-03 .arrows .arrow.arrow-next{background: #ff4917;}
        .banner-03 .arrows .arrow.arrow-prev{background: #a7a7a7; margin-top: .5rem; }
        .banner-03 .arrows .arrow.arrow-prev::before{content:'\f2fa';}
        .banner-03 .arrows .arrow.arrow-next::before{content:'\f2fb';}
        .banner-03 .slide .content {
            padding: 6rem 0 7.5rem 6rem;
        }
        .banner-03 .slide .img-text{
            display:block; width:auto; max-width:32rem; height:auto; max-height:calc(80vh - 8rem);
        }
        @media screen and (max-width:1199.98px){
            .banner-03 .slide{padding:0; height:auto;}
            .banner-03 .slide .img-text{max-width:28rem;}
        }
        @media screen and (max-width:991.98px){
            .banner-03 .slide{padding:0;}
            .banner-03 .slide .img-text{max-width:24rem;}
            .banner-03 .arrows{padding:0 2.5rem;}
        }
        @media screen and (max-width:767.98px){
            .banner-03 .slide .img-text{max-width:22rem;}
            .banner-03 .slide .content {
                padding: 4rem 0;
            }
        }
        @media screen and (max-width:575.98px){
            .banner-03 .slide .img-text{max-width:70%;}
        }
        .banner-03 .slide .animate{
            opacity:0; transform:translateY(4rem); transition:all ease-in-out .75s;
        }
        .banner-03 .slide.slick-active .animate{opacity:1; transform:none; transition-delay:var(--delay);}
        .loading .banner-03 .slide .animate{opacity:0!important; transform:translateY(4rem)!important;}


        /* Intro 05 */
        .intro-05{display:block; position:relative; width:100%;}
        .intro-05 > .wrapper{display:block; position:relative; width:100%;}
        .intro-05 .intro-card{display:block; width:12rem; height:6rem;}
        .intro-05 .intro-card.lg{width:16rem; height:auto; border:1px solid transparent;}
        .intro-05 .intro-card.lg > .wrapper{
            display:block; position:relative; width:100%; padding:.75rem .75rem .375rem .75rem;
        }
        .intro-05 .intro-card > .wrapper{
            display:block; position:relative; width:100%; height:100%; padding:.625rem .75rem;
        }
        .intro-05 .intro-card .img-pattern{
            display:block; width:1.75rem; height:auto; position:absolute; top:.625rem; left:.625rem;
        }
        .intro-05 .intro-card .text-container {
            display:block; padding-left: 2.25rem;
        }
        .intro-05 .intro-card .img-bg{
            position:absolute; top:0; bottom:0; left:0; right:0; background-size:cover;
            background-position:center;
        }
        .intro-05 .intro-card .img-content{
            display:block; width:100%; height:auto; position:absolute; bottom:0; right:0;
            border-radius:0 0 1rem 1rem;
            -webkit-mask-image:linear-gradient(to bottom, #000, #000, #000,
                #000, #000, #000, #000, #000, #000, #000, #000,
                rgba(0,0,0,.75), rgba(0,0,0,.5), rgba(0,0,0,.25), rgba(0,0,0,0));
        }
        .intro-05 .intro-card .margin-01{margin:1.875rem 0 0 0;}
        .intro-05 .intro-card .margin-02{font-size:.625rem; margin:75% 0 0 0;}
        .intro-05 .intro-card .margin-03{font-size:.625rem; margin:70% 0 0 0;}
        @media screen and (min-width:1200px){
            .intro-05{display:block; position:absolute; top:13.5em; width:100%; z-index:1;}
        }
        @media screen and (max-width:1199.98px){
            .intro-05{padding:.5rem 0 1.75rem 0;}
            .intro-05 .intro-cards{
                width:100%; display:flex; justify-content:center; align-items:flex-end; flex-wrap:wrap;
            }
            .intro-05 .intro-card{margin:1.25rem .375rem 0 .375rem;}
            .intro-05 .sep{width:100%;}
        }
        @media screen and (max-width:575.98px){
            .intro-05{padding:0 0 1.25rem 0;}
        }
        /* Intro 06 */
        .intro-06 {
            display: block; position:relative; width:100%;
        }
        .intro-06 .wrapper {
            position:relative;
        }
        .intro-06 .info {
            width: 12rem; position: relative; z-index:2; padding: 1.25rem 0;
            background: linear-gradient(to right, #000, #000, #222, #454545, #454545);
  
        }
        .intro-06 .slide-container {
            position:absolute; width:100vw; top: 1.35rem; z-index:1;
        }
        .intro-06 .slide-container .slides .slide {
            display:flex;
        }
        /* Intro 07 */
        .intro-07{
            display:block; position:relative; width:100%; 
        }
        .intro-07 .blocks{
            display:flex; justify-content:center; flex-wrap:wrap; border-left: 1px solid transparent; border-right: 1px solid transparent;
        }
        .intro-07 .blocks .block {
            width: calc(100% / 7); display:inline-block; position:relative; text-align: center; padding: 2.5rem 0 1rem 0; background-image:none;
            z-index:2;
        }
        .intro-07 .blocks .block::after {
            content:''; position:absolute; top:0; left:0; right:0; bottom:0;
            width:100%; background-image: url('public/assets/app/images/bg/minisite-08.jpg');
            filter: drop-shadow(0 1.75rem 1.5rem #faf1d0);
            opacity:0; transition: opacity .3s ease-in-out; z-index:-1;
        }
        .intro-07 .blocks .block h6 { color: #000; }
        .intro-07 .blocks .block{
            border-left: 1px solid transparent;
        }
        .intro-07 .blocks .block:last-child{
            border-right: 1px solid transparent;
        }
        .intro-07 .blocks .block .wrapper {
            width: 4.5rem; margin:0 auto;
        }
        .intro-07 .blocks .block .img-icon {
            background: #ff4917; width: 4rem; height: 4rem; border-radius: 50%; margin:0 auto; text-align:center; line-height: 4rem;
            transition: transform .3s ease-in-out; 
        }
        .intro-07 .blocks .block .img-icon img {
            width: 1.75rem; height:auto;        
        }
        .intro-07 .blocks .block:hover{
            cursor: pointer; 
        }
        .intro-07 .blocks .block:hover::after{
            opacity:1;
        }
        .intro-07 .blocks .block:hover h6 {color: #fff;}
        .intro-07 .blocks .block:hover .img-icon {
            background: transparent; transform: scale(1.35);
        }
        @media screen and (max-width:991.98px){
            .intro-07 .blocks .block {
                width: calc(100% / 5);
            }
            .intro-07 .blocks .block:nth-child(5){
                border-right: 1px solid transparent;
            }
        }
        @media screen and (max-width:767.98px){
            .intro-07 .blocks .block {
                width: calc(100% / 4);
            }
            .intro-07 .blocks .block:nth-child(4){
                border-right: 1px solid transparent;
            }
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <section class="banner-03">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/05.jpg');">
                        <div class="container">
                            <div class="content animate">
                                <img class="img-text" src="public/assets/app/images/misc/text-03.png" alt="Banner Image Text" style="--delay:.75s;" />
                                <h3 class="color-01 fw-400 mt-4">เสริมสร้างความมั่นคงทางพลังงาน</h3>
                                <h6 class="color-black">เพื่อรงอรับการเติบโตทางเศรษฐกิจ</h6>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="arrows">
                <div class="arrow arrow-next"></div>
                <div class="arrow arrow-prev"></div>
            </div>
        </div>
    </section>
    <section class="intro-06 bg-black">
        <div class="container">
            <div class="wrapper">
                <div class="info">
                    <p class="color-02">ราคาน้ำมันขายปลีก (บ./ลิตร)</p>
                </div>
                <div class="slide-container">
                    <div class="slides">
                        <?php for($i=0; $i<11; $i++){?>
                            <div class="slide">
                                <p class="sm color-white">แก๊สโซฮอล์ 95</p>
                                <p class="sm color-01 ml-3">24.05</p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-05 pos-main">
        <div class="wrapper">
            <div class="intro-cards">
                <div class="intro-card bg-01" data-aos="fade-up" data-aos-delay="150">
                    <div class="wrapper color-white">
                        <img class="img-pattern" src="public/assets/app/images/icon/fire.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-500">ราคาเชื้อเพลิง</h6>
                            <p class="sm fw-400">PTTNGV</p>
                            <p class="h3 fw-600 lh-2xs">15.31</p>
                        </div>
                    </div>
                </div>
                <div class="intro-card bg-02" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrapper color-black">
                        <img class="img-pattern" src="public/assets/app/images/icon/give.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-500">ราคาหุ้น</h6>
                            <p class="sm fw-400">ราคาล่าสุด</p>
                            <p class="h3 fw-600 lh-2xs">39.25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-07 bg-white">
        <div class="container">
            <div class="blocks">
                <?php for($i=1; $i<8; $i++){?>
                    <div class="block text-center border-top border-bottom bcolor-sgray">
                        <div class="wrapper">
                            <div class="img-icon">
                                <img src="public/assets/app/images/icon/minisite-0<?= $i;?>.png" alt="icon">
                            </div>
                            <h6 class="p mt-2 fw-600">
                                โครงสร้างราคาน้ำมัน
                            </h6>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    <style>
        .intro-08 .title-container .big{ 
            float:left; font-size: 5rem; line-height: 5rem;
            font-weight:600;
        }
        .intro-08 .title-container h6{
            line-height: 1rem;
        }
        .tab-container .tabs.tabs-05{
            display:flex; flex-wrap:wrap; 
        }
        .tab-container .tabs.tabs-05 .tab {
            display:block; position:relative; white-space:nowrap; margin:0 1.5rem .875rem 0;
            padding:.125rem 0; font-size:.9375rem; font-weight:300; transition:color .25s;
        }
    </style>
    <section class="intro-08">
        <div class="container">
            <div class="grids">
                <div class="grid sm-30">
                    <div class="title-container">
                        <div class="big color-01">E</div>
                        <h4 class="color-01 lg fw-400">NERGY NEWS</h4>
                        <h6 class="color-black fw-400">อัพเดทข่าวพลังงาน</h6>
                    </div>
                </div>
                <div class="grid sm-70">
                </div>

            </div>
        </div>

    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script>
        // Banner 03
        var banner03 = $('.banner-03');
        if(banner03.length){
            banner03.each(function(){
                var self = $(this),
                    options = {
                        centerMode: true, centerPadding: 0, slidesToShow: 1, swipeToSlide: true,
                        focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                        arrows: true, prevArrow: self.find('.arrow-prev'), nextArrow: self.find('.arrow-next'),
                        
                    };
                self.find('.slides').slick(options);
            });
        }
        // Intro 06
        var intro06 = $('.intro-06');
        if(intro06.length){
            intro06.each(function(){
                var self = $(this),
                    options = {
                        centerMode: true, centerPadding: 0, slidesToShow: 7, swipeToSlide: true,
                        focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                        arrows: false, dots: false,
                        responsive: [
                            { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                            { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                        ]
                    };
                self.find('.slides').slick(options);
            });
        }
    </script>
</body>
</html>
