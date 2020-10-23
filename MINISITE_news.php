<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style_MINISITE.css" />
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
        
        .post-card {
            transform: translateY(0); transition: all ease-in-out .2s; 
        }
        .post-card > .text-wrapper {padding: 0 .5rem 0 .75rem; 
        }
        .post-card .stat-info {padding: 0 .5rem 0 .75rem;}
        .post-card .btn-rb {margin-left: .5rem; text-decoration: none;  color: #fff; background: #502683; display:block; padding: .25rem .375rem .25rem .25rem; }
        .post-card:hover {
            transform: translateY(-1rem);
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
        }
        .spacing {
            padding: 3rem 0;
        }

        @media screen and (max-width: 991.98px) {
            .spacing {
                padding: 2rem 0;
            }
        }

        @media screen and (max-width: 767.98px) {
            .spacing {
                padding:0;
            }
        }

        @media screen and (max-width: 575.98px) {
            
        }
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav_MINISITE.php'); ?>
    
    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container-banner color-white" data-aos="fade-up" data-aos-delay="0">
                <p class="font-01 text-sm">
                    เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                    ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                    ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
                </p>
            </div>
        </div>
    </div>


    <section style="padding:3rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
        
    </section>

    <section class="section-padding" style="background-image:url('public/assets/app/images/bg/32.jpg'); background-size:cover; background-position:center; background-repeat:no-repeat;">
        <div class="container">
            <h3 class="text-center color-white">ไฮไลท์ - ข่าวประชาสัมพันธ์</h3>
            <div class="grids">
            <?php for($i=0; $i<3; $i++){?>
                <div class="grid lg-1-3 md-50 sm-100">
                    <div class="post-card bg-color-white">
                        <a class="ss-img bradius-0" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                            <div class="hover-container">
                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                            </div>
                        </a>
                        <div class="text-wrapper">
                            <p class="desc font-01 fw-100 text-md">
                            วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ หลักสูตร "การยกระดับมาตรฐาน...
                            </p>
                        </div>
                        <div class="d-flex fw-wrap ai-center jc-space-between">
                            <div class="stat-info font-01 fw-100 mt-2">24-08-2563 | เปิดดู : 130</div>
                            <a href="#" class="btn-rb mt-2">อ่านเพิ่ม</a>
                        </div>
                        
                    </div>
                </div>
            <?php }?>
                
            </div>

        </div>
    </section>

    <div class="spacing"></div>


    <section class="section-padding" style="background-image:url('public/assets/app/images/bg/33.jpg'); background-size:cover; background-position:center; background-repeat:no-repeat;">
        <div class="container">
            <h3 class="text-center color-02">ข่าวประชาสัมพันธ์ </h3>
            <div class="grids">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="grid lg-25 md-50 sm-100">
                        <div class="post-card bg-color-white">
                            <a class="ss-img bradius-0" href="#">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                <div class="hover-container">
                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                </div>
                            </a>
                            <div class="text-wrapper">
                                <p class="desc font-01 fw-100 text-md">
                                วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ หลักสูตร "การยกระดับมาตรฐาน...
                                </p>
                            </div>
                            <div class="d-flex fw-wrap ai-center jc-space-between">
                                <div class="stat-info font-01 fw-100 mt-2">24-08-2563 | เปิดดู : 130</div>
                                <a href="#" class="btn-rb mt-2">อ่านเพิ่ม</a>
                            </div>
                            
                        </div>
                    </div>
                <?php }?>
                
            </div>
        </div>
        
    </section>


    <section class="call-02">
        <div class="container">
            <h1 class="text-center color-white mb-0" data-aos="fade-up" data-aos-delay="0">
                เรารับฟังความคิดเห็นของคุณ
            </h1>
            <h4 class="text-center color-white fw-300 mt-0 mb-0" data-aos="fade-up" data-aos-delay="150">
                เกี่ยวกับความรับผิดชอบของกระทรวงอุตสาหกรรม
            </h4>
            <div data-aos="fade-up" data-aos-delay="300">
                <img class="subject lazy-img" data-src="public/assets/app/images/hero/03.png" alt="Call 02" />
            </div>
            <form action="/" method="POST" data-aos="fade-up" data-aos-delay="600">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="สมัครรับข่าวสารกับกระทรวงอุตสาหกรรม" required />
                    <div class="input-group-append">
                        <button class="btn custom-btn-warning" type="submit">
                            สมัครรับข่าว
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="call-container mt-5" style="background-image:url('public/assets/app/images/bg/20.jpg');">
            <div class="container" data-aos="fade-up" data-aos-delay="0">
                <div class="call-text text-center title">
                    ปฏิรูปอุตสาหกรรมสู่ 4.0
                </div>
                <div class="call-text text-center desc">
                    เพิ่มมูลค่าเศรษฐกิจอุตสาหกรรมของไทยให้เติบโตไม่น้อยกว่าร้อยละ 4.5
                </div>
                <div class="call-text text-center desc desc-lg">
                    ภายในปี พ.ศ.2564
                </div>
                <div class="slide-container mt-5">
                    <div class="slides">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="slide">
                                <div class="wrapper">
                                    <div class="client lazy-bg" data-src="public/assets/app/images/client/01.jpg"></div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer_MINISITE.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
