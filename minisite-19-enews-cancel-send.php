<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
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
                <div class="ss-box-shadow xxl"></div>
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
                            <div class="about-06 img-middle mt-2">
                                <img class="img-bg" src="public/assets/app/images/bg/minisite-07.jpg" alt="Image Background" />
                                <div class="position-relative">
                                    <h6 class="h5 sm fw-500 color-01">
                                        การยกเลิกการสมัครรับข้อมูลจดหมายข่าวอิเล็กทรอนิกส์
                                    </h6>
                                    <div class="gallery-grids mt-3 pt-1">
                                        <div class="grid xl-60 lg-2-3 md-70 sm-80 mt-0">
                                            <div class="block-quote">
                                                <p class="fw-300">
                                                    ระบบได้ทำการยกเลิกการรับข้อมูลจดหมายข่าวอิเล็กทรอนิกส์เรียบนร้อยแล้ว 
                                                    รอสักครู่ระบบกำลังพาคุณไปยังหน้าแรก หรือ 
                                                    <a class="fw-600 color-01 h-color-02" href="#">
                                                        คลิกที่นี่
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
