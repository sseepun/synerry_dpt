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
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
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

                                <div class="grid xl-2-3 sm-100">
                                    <div class="ss-card ss-card-06 lg stat-bottom">
                                        <a class="ss-img square-grid-01" href="#">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/01.jpg');"></div>
                                            <div class="hover-container">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-container">
                                            <a class="title h6 sm fw-500" href="#">
                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                            </a>
                                            <p class="xs desc">
                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                HR Forum 2020, Big Data
                                            </p>
                                            <div class="ss-stat">
                                                <div class="stat">
                                                    <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                </div>
                                                <div class="stat">
                                                    <em class="far fa-eye mr-1"></em> 178
                                                </div>
                                                <div class="stat">
                                                    <em class="fas fa-images mr-1"></em> 600
                                                </div>
                                                <a class="stat" href="#">
                                                    <em class="far fa-arrow-alt-circle-right h4 xl"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid xl-1-3 lg-50 sm-50">
                                    <div class="ss-card ss-card-06 stat-bottom">
                                        <a class="ss-img square" href="#">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
                                            <div class="hover-container">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-container">
                                            <div class="ss-stat jc-space-between">
                                                <div class="stat">
                                                    <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                </div>
                                                <div class="stat">
                                                    <em class="far fa-eye mr-1"></em> 178
                                                </div>
                                            </div>
                                            <a class="title p md fw-600" href="#">
                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                            </a>
                                            <p class="xs desc">
                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                HR Forum 2020, Big Data
                                            </p>
                                            <div class="ss-stat">
                                                <div class="stat">
                                                    <em class="fas fa-images mr-1"></em> 600
                                                </div>
                                                <a class="stat" href="#">
                                                    ข้อมูลเพิ่มเติม
                                                    <em class="far fa-arrow-alt-circle-right h6 ml-1"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php for($i=2; $i<8; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <div class="ss-stat jc-space-between">
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-eye mr-1"></em> 178
                                                    </div>
                                                </div>
                                                <a class="title p md fw-600" href="#">
                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                </a>
                                                <p class="xs desc">
                                                    กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                    (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                    HR Forum 2020, Big Data
                                                </p>
                                                <div class="arrow">
                                                    <em class="far fa-arrow-alt-circle-right"></em>
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
