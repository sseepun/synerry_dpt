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


        .content-03 .img-container {position:relative;}
        .content-03 .img-container .img-bg {position:absolute; top:0; left:0; right:0; bottom:0; padding:100% 0 0 0; background-position:center; background-size:cover; background-repeat:no-repeat; }
        .content-03 .img-container .filter {position:absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,.45); }
        .content-03 .text-container {position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); padding:1.5rem; background: rgba(99, 51, 125, .85); width:100%; max-width: 35rem;}
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


    <section style="padding:2rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'พันธกิจ']
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
    </section>

    <section class="content-03">
            <div class="img-container" style="background-image:url('public/assets/app/images/bg/41.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; height:calc(100vh - 6rem);">
                <div class="img-bg"></div>
                <div class="filter"></div>
                <div class="container">
                    <div class="text-container color-white">
                        <h1 class="text-center">พันธกิจ</h1>
                        <p class="text-center">1. สร้างมูลค่าเพิ่มทางเศรษฐกิจ การค้า การลงทุน การท่องเที่ยว การเกษตร และอุตสาหกรรมแปรรูป เพื่อสร้างรายได้ให้ประชาชนในพื้นที่ โดยสนับสนุนปัจจัยพื้นฐานการผลิตได้แก่ การพัฒนาโครงสร้างพื้นฐาน การบริหารจัดการแหล่งน้ำเพื่อการเกษตร การพัฒนาที่ดินให้มีประสิทธิภาพ ภายใต้หลักปรัชญาเศรษฐกิจพอเพียง</p>
                    </div>
                </div>
               
            </div>
            
    </section>

    <section class="content-03">
            <div class="img-container" style="background-image:url('public/assets/app/images/bg/42.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; height:calc(100vh - 6rem);">
                <div class="img-bg"></div>
                <div class="filter"></div>
                <div class="container">
                    <div class="text-container color-white">
                        <p class="text-center">2. จรรโลงวัฒนธรรม ศาสนา ศิลปะ ทุนทางสังคมของล้านนา การพัฒนาคุณภาพชีวิต การพัฒนาทรัพยากรมนุษย์ การจัดการศึกษาและสาธารณสุขแบบบูรณาการ</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="content-03">
            <div class="img-container" style="background-image:url('public/assets/app/images/bg/43.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; height:calc(100vh - 6rem);">
                <div class="img-bg"></div>
                <div class="filter"></div>
                <div class="container">
                    <div class="text-container color-white">
                        <p class="text-center">3. บริหารจัดการทรัพยากรธรรมชาติและสิ่งแวดล้อมโดยการมีส่วนร่วมของทุกภาคส่วน</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="content-03">
            <div class="img-container" style="background-image:url('public/assets/app/images/bg/44.jpg'); background-size:cover; background-repeat:no-repeat; background-position:top right; height:calc(100vh - 6rem);">
                <div class="img-bg"></div>
                <div class="filter"></div>
                <div class="container">
                    <div class="text-container color-white">
                        <p class="text-center">4. เสริมสร้างความปลอดภัยในชีวิตและทรัพย์สินในพื้นที่ปกติและชายแดน ป้องกันและปราบปรามปัญหาของยาเสพติด และพัฒนาความร่วมมือกับประเทศเพื่อนบ้าน </p>
                    </div>
                </div>
            </div>
    </section>

    <section class="content-03">
            <div class="img-container" style="background-image:url('public/assets/app/images/bg/45.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; height:calc(100vh - 6rem);">
                <div class="img-bg"></div>
                <div class="filter"></div>
                <div class="container">
                    <div class="text-container color-white">
                        <p class="text-center">5. ส่งเสริมหลักธรรมาภิบาลในการบริหารจัดการภาครัฐเพื่อการบริหารงานจังหวัดแบบบูรณการ </p>
                    </div>
                </div>
            </div>
    </section>
        
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
