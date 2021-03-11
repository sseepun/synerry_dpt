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
        $breadcrumbTitle = 'ผู้บริหารระดับสูง';
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
                                    <a class="tab active" href="#">ผู้บริหารระดับสูง</a>
                                    <a class="tab" href="#">โครงสร้างองค์กร</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <?php
                                $listHeader = ['total', 'view', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="grids">

                                <?php for($i=1; $i<10; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/team/03.jpg')"></div>
                                            </a>
                                            <div class="text-container">
                                                <a class="color-01 p md fw-600" href="#">
                                                    นายอรรถพล ฤกษ์พิบูลย์
                                                </a>
                                                <p class="desc fw-300 sm-no-br">
                                                    ประธานเจ้าหน้าที่บริหารและกรรมการผู้จัดการใหญ่ บริษัท ปตท.จำกัด (มหาชน)
                                                </p>
                                                <div class="arrow">
                                                    <em class="far fa-arrow-alt-circle-right"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

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
