<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        .block-quote {position:relative; display:inline-block; padding:1.5rem 2.5rem;}
        .block-quote::before, .block-quote::after{
            position:absolute; font-size:1rem; font-weight:900; font-family:'Font Awesome 5 Free';
        }
        .block-quote::before{
            content: "\f10d"; top:calc(50% - 1rem); left:.5rem;
        }
        .block-quote::after{
            content: "\f10e"; top:calc(50% - 1rem); right:.5rem;
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'สมัครรับข่าวสาร' ],
        ];
        $breadcrumbTitle = 'สมัครรับข่าวสาร';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0">
        <div class="container">
            <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <div class="mt-4 pt-1" data-aos="fade-up" data-aos-delay="600">
                                <h6 class="color-01 lg fw-400">การยกเลิกการสมัครรับข้อมูลจดหมายข่าวอิเล็กทรอนิกส์</h6>
                                <div class="block-quote">
                                    <p class="desc">ระบบได้ทำการยกเลิกการรับข้อมูลจดหมายข่าวอิเล็กทรอนิกส์เรียบนร้อยแล้ว รอสักครู่ระบบกำลังพาคุณไปยังหน้าแรก หรือ <a href="#" class="color-01">คลิกที่นี่</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
