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
            [ 'url' => '#', 'display' => 'วิสัยทัศน์และพันธกิจ' ],
        ];
        $breadcrumbTitle = 'วิสัยทัศน์และพันธกิจ';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab" href="#">เกี่ยวกับหน่วยงาน</a>
                                    <a class="tab active" href="#">วิสัยทัศน์และพันธกิจ</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 xl-mt-0 lg-mt-0 md-mt-0">
                            <div class="about-02">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-02.jpg');"></div>
                                <div class="grids">
                                    <div class="grid lg-40 sm-100 mt-0">
                                        <div class="img-container">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-03.jpg');"></div>
                                        </div>
                                    </div>
                                    <div class="grid lg-60 sm-100">
                                        <h6 class="h4 fw-600 color-01">วิสัยทัศน์</h6>
                                        <p class="md">
                                            ประเทศไทยมีความมั่นคงด้านพลังงานเป็นศูนย์กลางพลังงาน
                                            ในภูมิภาคเอเชียเศรษฐกิจฐานรากมีความเข้มแข็งจากภาคพลังงาน
                                        </p>
                                        <h6 class="h4 fw-600 color-01 mt-3 pt-1">พันธกิจ</h6>
                                        <p class="md">
                                            เสริมสร้างความมั่นคงทางพลังงานเพื่อรองรับการเติบโตทาง
                                            เศรษฐกิและพัฒนาพลังงานในระดับพื้นที่ที่เป็นมิตรต่อสิ่งแวดล้อม
                                        </p>
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
