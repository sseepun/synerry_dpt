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
            [ 'url' => '#', 'display' => 'เว็บลิงค์' ],
        ];
        $breadcrumbTitle = 'เว็บลิงค์';
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
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <?php
                                $listHeader = ['total', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="grids pb-2">
                                <?php for($i=0; $i<12; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-14">
                                            <div class="img-container">
                                                <a class="ss-img" href="#">
                                                    <div class="img-bg bg-mgray"></div>
                                                    <div class="logo-container">
                                                        <img src="public/assets/app/images/client/minisite-0<?= $i%4+1 ?>.png" alt="Client Icon" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-container">
                                                <a class="title p fw-500 text-center" href="#">
                                                    กรมการค้าต่างประเทศ (คต.)
                                                </a>
                                            </div>
                                            <a class="icon-container p sm fw-500 color-black h-color-01" href="#">
                                                ไปที่เว็บไซต์ <em class="fas fa-arrow-alt-circle-right h5 sm fw-900 color-01 ml-2"></em>
                                            </a>
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
