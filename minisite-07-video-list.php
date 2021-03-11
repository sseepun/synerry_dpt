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
            [ 'url' => '#', 'display' => 'วิดีทัศน์' ],
            [ 'url' => '#', 'display' => 'วิดีทัศน์เกี่ยวกับองค์กร' ],
        ];
        $breadcrumbTitle = 'วิดีทัศน์';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
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
                                    <a class="tab active" href="#">ข่าวประชาสัมพันธ์</a>
                                    <a class="tab" href="#">เรื่องเด่นประเด็นดัง</a>
                                    <a class="tab" href="#">ข่าวสารรัฐมนตรี</a>
                                    <a class="tab" href="#">ข่าวสารผู้บริหาร</a>
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
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/05.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                                <div class="video-info">
                                                    <div class="duration">10:20:08</div>
                                                    <em class="fas fa-play-circle"></em>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-container">
                                            <div class="text-content">
                                                <a class="title p md fw-600" href="#">
                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                </a>
                                                <p class="xs desc mt-2">
                                                    กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                    (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                    HR Forum 2020, Big Data
                                                </p>
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
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-content">
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <div class="video-info">
                                                        <div class="duration">10:20:08</div>
                                                        <em class="fas fa-play-circle"></em>
                                                    </div>
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
