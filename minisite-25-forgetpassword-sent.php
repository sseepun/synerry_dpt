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
            [ 'url' => '#', 'display' => 'ระบบสมาชิก' ],
        ];
        $breadcrumbTitle = 'ระบบสมาชิก';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid eq-padding position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="title-container with-active">
                        <div class="active-wrapper">
                            <h6 class="p lg fw-500">ลืมรหัสผ่าน</h6>
                        </div>
                        <div class="title-wrapper"></div>
                        <div class="btn-wrapper">
                            <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                ย้อนกลับ
                                <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                            </a>
                        </div>
                    </div>
                    <div class="grids jc-center pt-3 pb-5">
                        <div class="grid sm-100">
                            <h6 class="h6 fw-500 color-01 text-center">
                                ระบบได้ทำการจัดส่งรหัสผ่านไปที่อีเมล์ของคุณแล้ว
                            </h6>
                            <p class="color-black text-center">
                                ระบบจะกลับไปยังหน้าหลักอัตโนมัติ
                            </p>
                            <div class="btns text-center mt-4">
                                <a class="btn btn-action btn-color-02 btn-round btn-min-width" href="#">
                                    ไปยังหน้าหลัก
                                </a>
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
