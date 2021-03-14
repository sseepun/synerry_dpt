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
            [ 'url' => '#', 'display' => 'RSS' ],
        ];
        $breadcrumbTitle = 'RSS';
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
                            <div class="">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="ss-card ss-card-01 lg">
                                        <div class="icon-container">
                                            <div class="icon">
                                                <em class="zmdi zmdi-rss"></em>
                                            </div>
                                        </div>
                                        <div class="text-container border-bottom bcolor-sgray">
                                            <a class="title p fw-600" href="#">
                                                ประกาศกระทรวงพลังงาน NO GIFT POLICY “งดรับ งดให้ ของขวัญ ของกำนัลทุกชนิด”
                                            </a>
                                            <h6 class="p sm fw-600 color-01">
                                                20.01.2564
                                            </h6>
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
