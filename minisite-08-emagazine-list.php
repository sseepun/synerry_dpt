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
            [ 'url' => '#', 'display' => 'วารสารออนไลน์' ],
            [ 'url' => '#', 'display' => 'วารสารรายเดือน' ],
        ];
        $breadcrumbTitle = 'วารสารออนไลน์';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">วารสารรายเดือน</a>
                                    <a class="tab" href="#">วารสารฉบับพิเศษ</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <?php
                                $listHeader = ['total', 'view', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="grids">

                                <div class="grid sm-100">
                                    <div class="ss-card ss-card-13 img-full">
                                        <div class="img-container">
                                            <a class="ss-img adaptive-list" href="#">
                                                <div class="img-bg mag-bg"></div>
                                                <div class="mag-container">
                                                    <img src="public/assets/app/images/content/06.jpg" alt="Magazine Cover" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-container">
                                            <div class="text-content">
                                                <a class="title p md fw-600" href="#">
                                                    Energy Plus ฉบับเดือน ตุลาคม – ธันวาคม 2556
                                                </a>
                                            </div>
                                            <div class="info-content">
                                                <div class="ss-stat">
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-2"></em> 8 มกราคม 2020
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-eye mr-2"></em> 178
                                                    </div>
                                                    <a class="stat" href="#">
                                                        <span class="p mr-2">ข้อมูลเพิ่มเติม</span>
                                                        <em class="far fa-arrow-alt-circle-right h5"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php for($i=1; $i<5; $i++){?>
                                    <div class="grid sm-100">
                                        <div class="ss-card ss-card-08 minisite">
                                            <div class="img-container">
                                                <a class="ss-img adaptive-list" href="#">
                                                    <div class="img-bg mag-bg"></div>
                                                    <div class="mag-container">
                                                        <img src="public/assets/app/images/content/0<?= $i%4+6 ?>.jpg" alt="Magazine Cover" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-content">
                                                    <a class="title p md fw-600" href="#">
                                                        Energy Plus ฉบับเดือน ตุลาคม – ธันวาคม 2556
                                                    </a>
                                                </div>
                                                <div class="info-content">
                                                    <div>
                                                        <p class="text-icon xs fw-600 mt-2">
                                                            <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                        </p>
                                                        <p class="text-icon xs fw-600">
                                                            <em class="far fa-eye mr-1"></em> 178
                                                        </p>
                                                    </div>
                                                    <div class="arrow">
                                                        <em class="far fa-arrow-alt-circle-right"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
