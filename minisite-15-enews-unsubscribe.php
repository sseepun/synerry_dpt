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
                                <form action="/" method="POST">
                                    <div class="form-group">
                                        <h6 class="color-01 lg fw-400">การยกเลิกการสมัครรับข้อมูลจดหมายข่าวอิเล็กทรอนิกส์</h6>
                                        <p class="sm desc">ป้อนอีเมลของคุณและเลือกจดหมายข่าวสารที่คุณต้องการยกเลิกการสมัครรับข้อมูล</p>
                                        <label class="p mt-2">ระบุอีเมลของคุณ <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control round" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" 
                                        required title="General Text Input" />
                                    </div>
                                    <div class="captcha-container mt-4">
                                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                    </div>
                                    <div class="btns mt-3 pt-3 border-top bcolor-sgray">
                                        <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                            ยกเลิกการสมัคร <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                        </button>
                                    </div>
                                </form>
                                <div class="mt-4">
                                    <p class="desc sm">หากท่านต้องการยกเลิกจดหมายข่าวจากกระทรวงพลังงาน ขอให้ระบุอีเมลเดียวกันกับที่ใช้สมัครรับจดมหายข่าวและกดปุ่มยกเลิกจดหมายข่าวตามลำดับ</p>
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
