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
            [ 'url' => '#', 'display' => 'แบบสำรวจออนไลน์' ],
        ];
        $breadcrumbTitle = 'แบบสำรวจออนไลน์';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0">
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
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <?php
                                $listHeader = ['total', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="faq-02 style-custom mt-2">
                                <?php for($i=0; $i<10; $i++){?>
                                    <a class="faq" href="#">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <div class="wrapper">
                                                    <p class="sm fw-600 lh-xs">หมายเลข</p>
                                                    <p class="h6 fw-600 lh-xs"><?= '022'.$i ?></p>
                                                </div>
                                            </div>
                                            <div class="text-container fw-wrap">
                                                <h6 class="p fw-500">
                                                    แบบสำรวจเพื่อจัดการทำข้อเสนอการบริหารและพัฒนาผู้ปฎิบัติงานด้านเทคโนโลยรดิจิทัลภาครัฐ (ระดับบุคคล)
                                                </h6>
                                                <div class="stat ml-3">
                                                    <p class="xs fw-500">
                                                        <em class="far fa-clock color-01 mr-1"></em> 8 มกราคม 2020
                                                    </p>
                                                    <p class="xs fw-500">
                                                        <em class="far fa-eye color-01 mr-1"></em> 98
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                            </div>
                            <?php
                                $listFooter = ['pagination', 'pp'];
                                include('component/list-footer-minisite.php');
                            ?>
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
