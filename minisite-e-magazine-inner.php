<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        /* Custom CSS */
        .intro-02 {
            padding-bottom: 0;
        }
        .intro-02 .text-container-banner {
            padding: 1rem 0 .75rem 0;
            position:relative;
            display:inline-block;
        }
        .intro-02 .text-container-banner::after{
            content:''; position:absolute; top:0; left:-50%; width:165%; height:100%; z-index:-1; 
            -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,0),  rgba(33, 44, 67, .65), rgba(33, 44, 67, .9), rgba(33, 44, 67, .9),rgba(33, 44, 67, .65), rgba(0,0,0,0));
            background-color: #212c43;
        }

        /* Custom CSS */
        .img-container {
            position:relative;
            width:calc(100% - 1.5rem);
            margin: 0 auto;
            padding: 150% 0 0 0;
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            transition: all .4s;
        }
        .img-container .img-bg {position:absolute; top:0; left:0; bottom:0; right:0; background-position:center; background-size:cover; background-repeat: no-repeat; }
        .img-container .hover-container {
            position:absolute; top:0; left:0; bottom:0 ; right:0; opacity:0; pointer-events:none; transition: all .4s;
        } 


        /* Hover effect */
        .img-container .hover-container > .wrapper {position:relative; height:100%; padding: 2rem 1.5rem 1.5rem 1.5rem; background: rgba(255, 255, 255, 0.4);}
        .img-container:hover{
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
        }
        .img-container:hover .hover-container {
            opacity:1; pointer-events: auto;
        }
        .img-container .hover-container a:hover i{
            background:#cc74db;
        }

        /* End Hover effect */


        .img-container .hover-container a{margin: 1.5rem 1.25rem 0 0;}
        .img-container .hover-container a i{width:3rem; height:3rem; text-align:center; line-height: 3rem; font-size: 1.375rem; color:white; background:#63337d; transition: background .4s;}
        
        /* hover-container blocks */
        .img-container .hover-container .blocks {display:inline-block; position:absolute; bottom: 1rem; left:50%; transform: translateX(-50%); min-width:fit-content;}
        .img-container .hover-container .blocks .block {display:inline-block;}
        .img-container .hover-container .blocks .block:nth-child(2){
            border-left: 1px solid transparent; border-right: 1px solid transparent; 
            border-color:#63337d; padding: 0 .25rem;
        }


        /* Imported from block.css */
        /* Banner 01 */
        .banner-02{position:relative; width:100%;}
        .banner-02 > .slide-container{position:relative; width:100%; padding:0;}
        .banner-02 .slides .slick-list {margin: 0 5rem;}
        .banner-02 .slide{
            min-height:450px; display:flex; align-items:center; text-align:center; line-height:1;
            background-size:cover; background-position:center; background-repeat:no-repeat;
            padding:0;
        }
        .banner-02 .arrows{
            position:absolute; display:flex; justify-content:space-between; align-items:center;
            top:0; bottom:0; left:0; right:0; padding:0 1rem; pointer-events:none;
        }
        .banner-02 .arrows > .slick-prev, .banner-02 .arrows > .slick-next{
            display:block; width:2.5rem; height:2.5rem; pointer-events:auto; cursor:pointer; opacity:0;
            text-align:center; line-height:2.75rem; outline:none; font-size:0; background:transparent;
            box-shadow:none; border:0; transition:opacity .3s, transform .3s; 
        }
        .banner-02 .arrows > .slick-prev{transform:translateX(-.625rem);}
        .banner-02 .arrows > .slick-next{transform:translateX(.625rem);}
        .banner-02 .slide-container:hover .arrows > .slick-prev, 
        .banner-02 .slide-container:hover .arrows > .slick-next{
            opacity:.8; transform:translateX(0);
        }
        .banner-02 .arrows > .slick-prev:hover, .banner-02 .arrows > .slick-next:hover{opacity:1;}
        .banner-02 .arrows > .slick-prev::before, .banner-02 .arrows > .slick-next::before{
            font-family:'Font Awesome 5 Free'; font-weight:900; font-size:2.5rem;
        }
        .banner-02 .arrows > .slick-prev::before{content:'\f053';}
        .banner-02 .arrows > .slick-next::before{content:'\f054';}

        @media screen and (max-width:767.98px){
            .banner-02 .slide-container{padding:0 0 2.5rem 0;}
            .banner-02 .arrows{bottom:calc(2.625rem + 10vw);}
        }


    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container-banner color-white" data-aos="fade-up" data-aos-delay="0">
                <p class="font-01 text-sm fw-200">
                    เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                    ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                    ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
                </p>
            </div>
        </div>
    </div>


    <section class="section-padding" style="background: #dcdcdc;">
        <div class="container">
            <h3 class="text-center color-02">วารสารออนไลน์ล่าสุด</h3>
            <div class="banner-02 mt-4">
                <div class="slide-container">
                    <div class="slides">
                        <?php for($i=0; $i< 8; $i++){?>

                            <div class="slide">
                                <div class="img-container">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
                                    <div class="hover-container">
                                        <div class="wrapper">
                                            <p class="text-md mt-0">รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรมประจำปีงบประาณ พ.ศ. 2562</p>
                                            <div class="d-flex ai-center jc-center">
                                                <a href="#"><i class="fas fa-search"></i></a>
                                                <a href="#"><i class="fas fa-arrow-down"></i></a>
                                            </div>
                                            <div class="blocks">
                                                <div class="block text-sm color-02">
                                                    24-08-2563
                                                </div>
                                                <div class="block text-sm color-02">
                                                    เปิดดู : 130
                                                </div>
                                                <div class="block text-sm color-02">
                                                    80 หน้า
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }?>
                        
                    </div>
                    <div class="arrows"></div>
                </div>
            
            </div>
            
        
        </div>

    </section>
     

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>
        var banner02 = $('.banner-02');
        if(banner02.length){

            banner02.each(function(){
                var self=  $(this),
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 3, 
                    focusOnSelect: true, autoplay: false,
                    arrows: true, appendArrows: self.find('.arrows'),
                    responsive: [
                        {
                            breakpoint: 991.98,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 767.98,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                    ]
                };

                console.log(self);

                self.find('.slides').slick(options);

            });
        }
    
    </script>
</body>
</html>
