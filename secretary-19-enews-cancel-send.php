<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'ยกเลิกการรับข่าวสาร' ],
        ];
        $breadcrumbTitle = 'ยกเลิกการรับข่าวสาร';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-12.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="450">
                <h6 class="h4 lg fw-600 text-center">
                    แบบฟอร์มยกเลิกการรับข่าวสาร 
                </h6>
                <p class="md text-center mt-1">
                    ระบบได้ทำการยกเลิกการสมัครรับจดหมายของคุณเรียบร้อยแล้ว
                </p>
            </div>
            <div class="ss-box mt-4 pt-1" data-aos="fade-up" data-aos-delay="600">
                <div class="btns text-center">
                    <a class="btn btn-action btn-color-01 btn-round" href="#">
                        กลับไปยังหน้าแรก 
                        <em class="far fa-arrow-alt-circle-right ml-1"></em>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
