<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>


</style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    
    <section class="banner-01 img-only">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide">
                        <img src="public/assets/app/images/banner/07.jpg" alt="Banner <?= $i; ?>" />
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h4 class="text-center mb-0" data-aos="fade-up" data-aos-delay="0">
                ข่าวกระทรวงอุตสาหกรรม
            </h4>
            <h1 class="text-center mb-0" data-aos="fade-up" data-aos-delay="150">
                เปิดโลกทัศน์ด้านอุตสาหกรรมให้กับตัวคุณ
            </h1>
            <h2 class="text-center mb-0 fw-200" data-aos="fade-up" data-aos-delay="300">
                ด้วยการอัพเดทข่าวสารกับเราได้ที่นี่
            </h2>
            
            <!-- Tab 2 -->
            <div class="tab-container tab-container-01">
                <div class="tabs" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab active" data-tab="1">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-01.png" alt="Tab Icon 1" />
                        </div>
                        <h5 class="text-center">
                            <span>ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="2">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-02.png" alt="Tab Icon 2" />
                        </div>
                        <h5 class="text-center">
                            <span>รายงานกิจกรรมต่างๆ</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="3">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-03.png" alt="Tab Icon 3" />
                        </div>
                        <h5 class="text-center">
                            <span>ข่าวประกาศภายใต้กระทรวงอุตสาหรกรรม</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="4">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-04.png" alt="Tab Icon 4" />
                        </div>
                        <h5 class="text-center">
                            <span>ผลการจัดซื้อจัดจ้าง</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="5">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-05.png" alt="Tab Icon 5" />
                        </div>
                        <h5 class="text-center">
                            <span>ภาพงานกิจกรรม</span>
                        </h5>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">

                    <div class="tab-content active" data-tab="1">
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/09.jpg"></div>
                        <div class="contents">
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3">
                                        <div class="post-card">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    ปฏิรูปโครงสร้างศก
                                                </a>
                                                <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                            </div>
                                            <p class="date">21. 09.2563</p>
                                            <div class="ss-img bradius-0">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a class="social social-fw" href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a></li>
                                                        <li><a class="social social-tw" href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a></li>
                                                        <li><a class="social social-ln" href="#">
                                                            <i class="fab fa-line"></i>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" data-tab="2">
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/10.jpg"></div>
                        <div class="contents pl-0">
                            <div class="grids no-gap">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3">
                                        <div class="post-card post-card-02">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    ปฏิรูปโครงสร้างศก
                                                </a>
                                                <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                            </div>
                                            <p class="date">21. 09.2563</p>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                            </p>
                                            <div class="ss-img bradius-0">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/02.jpg"></div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a class="social social-fw" href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a></li>
                                                        <li><a class="social social-tw" href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a></li>
                                                        <li><a class="social social-ln" href="#">
                                                            <i class="fab fa-line"></i>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="pagination mt-5" data-aos="fade-up" data-aos-delay="0">
                <div class="wrapper">
                    <a href="#" class="page-btn page-prev disabled"></a>
                    <a href="#" class="page-btn active">01</a>
                    <a href="#" class="page-btn">02</a>
                    <a href="#" class="page-btn">03</a>
                    <a href="#" class="page-btn">04</a>
                    <a href="#" class="page-btn">05</a>
                    <a href="#" class="page-btn page-next"></a>
                    <a class="btn btn-round custom-btn-dark btn-sm" href="#">
                        อ่านข่าวทั้งหมด
                    </a>
                </div>
            </div>
        </div>
    </section>

    <img src="public/assets/app/images/mockup.jpg" style="display:block; width:100%; height:auto;" />
    

    <!-- Custom CSS -->
    <style>
        .card.border-none {border: none !important;}
        .icon-container i {font-size:2rem;}

        /* Intro 01 */
        .intro-01{background-position:center; background-size:cover; background-repeat:no-repeat;}
        .intro-01 > .container{position:relative; padding-top:8rem; padding-bottom:8rem;}
        .intro-01 .float-img{
            display:block; width:auto; height:calc(100% - .5rem); position:absolute; bottom:0; right:0;
        }
        @media screen and (max-width:991.98px){
            /* .intro-01 > .container{padding-top:3rem; padding-bottom:3rem;} */
            .intro-01 .float-img{height:calc(100% - 1.5rem);}
            .intro-01 .float-img.type-2{right:10rem;}
            .intro-01 .float-img.type-3{height:calc(100% + 3rem);}
        }
        @media screen and (max-width:767.98px){
            /* .intro-01 > .container{padding-bottom:0;} */
            .intro-01 .float-img{
                position:relative; margin:1.5rem auto 0 auto; width:100%; max-width:350px; height:auto;
                right:auto!important;
            }
        }
        @media screen and (max-width:575.98px){
            /* .intro-01 > .container{padding-top:2.5rem;} */
            .intro-01 .float-img{max-width:280px;}
        }


            
    
    .banner-01 .slide-container {position:relative; padding: 0 5rem; width:100%;}
    .banner-01 .slide-container .arrows {
        position:absolute; display:flex; justify-content:space-between; align-items:center;
        top:0; bottom:0; left:0; right:0;
    }
    .banner-01 .slide-container .arrows > .prev, .banner-01 .slide-container .arrows > .next  {
        display:block; pointer-events:auto; cursor:pointer;
        text-align:center;  font-size:2.5rem;
    }

    .banner-01 .slide-container .slide .card-body {text-align:left;}

    .socials{
        position:relative;
        display:flex; align-items:center; justify-content:flex-start; 
    }
    .socials ul{margin:0; padding:0; list-style:none; display:block;}
    .socials li{display:inline-block; margin:.0625rem;}
    .socials .social{
        display:block; text-decoration:none; width:1.5rem; height:1.5rem; border-radius:50%;
        color:#fff; text-align:center; line-height:1.75rem; font-size:.625rem;
    }
    .socials .social.social-fw{background:#3b5999;}
    .socials .social.social-tw{background:#40cce5;}
    .socials .social.social-ln{background:#00B900;}
    .btns
    {
       margin-top: .25rem; width:100%; padding: .625rem 0; border-top: 1px solid transparent;border-bottom: 1px solid transparent; border-color:#000;
    }
    .btns .card-link{text-decoration: none; color:#000;}
    .btns .card-link i{ display:inline-block; width:1.5rem; height:1.5rem; border-radius:50%;
        color:#fff; text-align:center; line-height:1.5rem; font-size:.625rem; background-color:#000; vertical-align:middle;
    }

    /* Slick active Styling */
    .banner-01 .slide-container .slide.slick-current.slick-active .card-body {
        background:#000; color:#fff;
    }
    .banner-01 .slide-container .slide.slick-current.slick-active .card-body .date {
        color:var(--color1);
    }
    .banner-01 .slide-container .slide.slick-current.slick-active .btns .card-link {
        color: #fff;
    }
    .banner-01 .slide-container .slide.slick-current.slick-active .btns .card-link i {
        color:#000; background-color:#fff;
    }
    </style>
    <section class="section-padding">
        <div class="container">
            <h4 class="text-center mb-0">ข่าวกระทรวงอุตสาหกรรมสำหรับคุณ</h4>
            <h1 class="text-center mb-0">คุณคือผู้ผลักดัน <span class="font-weight-light">มาร่วมเป็นส่วนหนึ่งในการพัฒนาวงการอุตสาหกรรมไปกับเรา</span></h1>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card border-none">
                        <div class="icon-container text-center">
                            <i class="fas fa-rocket" style="color:var(--color2);"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text font-weight-bold">ผู้ประกอบการ / SME</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-none">
                        <div class="icon-container text-center">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text">นักลงทุน</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-none">
                        <div class="icon-container text-center">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text">นักวิชาการ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-none">
                        <div class="icon-container text-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text">บุคคลทั่วไป</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding banner-01">
        <div class="intro-01 lazy-bg" data-src="public/assets/app/images/banner/08.jpg">
            <div class="container">
                <!-- <img class="float-img type-2" src="public/assets/app/images/hero/02.png" alt="Hero Float" /> -->
            </div>   
        </div>

        <div class="container">

            

            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0;$i< 15; $i++){?>
                        <div class="slide">
                            <div class="card border-none">
                                <div class="card-body">
                                    <h5 class="card-title">สุริยะฯ ดันแผนพัฒนาอุตฯ เครื่องจักรกลเต็มสูบ มุ่งสนับสนุนเกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ</h5>
                                    <h6 class="card-subtitle mb-2">เขียนโดย : <span class="font-weight-bold">สำนักบริหารกลาง</span></h6>
                                    <div class="date">21.09.2563</div>
                                    <p class="card-text">กระทรวงอุตสาหกรรม (ิอก.) ผลักดันแผนอุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรมสนับสนุนเพิ่มขีดความสามารถการผลิตทั้งภาคอุตสาหกรรมและภาคเกษตรกรรม...</p>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#" class="social social-fw">
                                                <i class="fab fa-facebook f"></i>
                                            </a></li>
                                            <li><a href="#" class="social social-tw">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                            <li><a href="#" class="social social-ln">
                                                <i class="fab fa-line"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                    <div class="btns">
                                        <a href="#" class="card-link">
                                            <i class="fas fa-chevron-right"></i>
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                                
                        </div>
                    <?php }?>
                </div>
                <div class="arrows">
                    <div class="prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>

        </div>


    </section>
    
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>
        if($('section.banner-01').length){
            $('section.banner-01 .slide-container').each(function(){
                var self = $(this);
                self.find('> .slides').slick({
                    slidesToShow: 3, focusOnSelect:true, dots: false, arrows: true, appendArrows: self.find('.arrows'), prevArrow: self.find('.arrows > .prev'), nextArrow: self.find('.arrows > .next'),
                    responsive: [
                            {
                              breakpoint: 991.98,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 767.98,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }

                          ]
                
                });
            });
        }
    </script>

</body>
</html>
