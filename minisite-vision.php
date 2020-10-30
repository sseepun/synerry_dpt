<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        
        .content-04 .img-container {position:relative;}
        .content-04 .img-container .img-bg {position:absolute; top:0; left:0; right:0; bottom:0; padding:100% 0 0 0; background-position:center; background-size:cover; background-repeat:no-repeat; }
        .content-04 .img-container .filter {position:absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,.6); }
        .content-04 .text-container {position:absolute; top:50%; left:35%; transform: translate(-50%, -50%); padding:1.5rem; background: transparent; width:100%; max-width:22.5rem;}
        .content-04 .text-container h3{font-size: 3.75rem; font-weight:100;}
        .content-04 .text-container p {font-size: 1rem; font-weight:100; }
        @media screen and (max-width: 767.98px) {
            .content-04 .text-container {left:50%; }
        } 
    
    
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section style="padding:2rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'วิสัยทัศน์']
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
    </section>

    <section class="content-04">
        <div class="img-container" style="background-image:url('public/assets/app/images/bg/48.jpg'); background-size:cover; background-repeat:no-repeat; background-position:top right; height:calc(100vh - 6rem);">
            <div class="img-bg"></div>
            <div class="filter"></div>
            <div class="container">
                <div class="text-container color-white text-center">
                    <h3>วิสัยทัศน์</h3>
                    <p>"เป็นองค์กรขับเคลื่อนการพัฒนาอุตสาหกรรมและผู้ประกอบการให้มีศักยภาพที่</p>
                    <p>เข้มแข็งและพัฒนาอย่างต่อเนื่องรวมถึงการรักษาสิ่งแวดล้อมอย่างยั่งยืน</p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>