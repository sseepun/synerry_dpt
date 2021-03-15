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
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
            [ 'url' => '#', 'display' => 'กิจกรรมรวมทั้งหมด' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
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
                                    <a class="tab active" href="#">สัมนาวิชาการ</a>
                                    <a class="tab" href="#">กิจกรรมเพื่อสังคม</a>
                                    <a class="tab" href="#">นิทรรศการประชาสัมพันธ์</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <?php
                                $listHeader = ['total', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="position-relative mt-2">
                                <div class="float-choice-wrapper color-black">
                                    <div class="wrapper">
                                        <p class="xs fw-500 mr-1">มุมมอง</p>
                                        <div class="select-wrapper">
                                            <select class="no-bradius">
                                                <option value="">ดูทั้งหมด</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="h5 sm fw-600 color-01 text-center">
                                    งานกิจกรรมเร็วๆนี้
                                </h6>
                            </div>
                            <div class="grids">
                                <?php for($i=0; $i<8; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/event-0<?= $i%3+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <a class="title p md fw-600" href="#">
                                                    โครงการอบรม เรื่อง การจัดทำระบบบัญชีข้อมูล (Data Catalog) 
                                                    เพื่อนำไปสู่การเปิดเผยข้อมูลภาครัฐ (Open Data)
                                                </a>
                                                <div class="ss-stat style-calendar mt-2 mb-0">
                                                    <div class="stat">
                                                        <em class="far fa-calendar mr-2"></em> 
                                                        <span class="fw-500">12 เมษายน 2564</span>
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-2"></em> 
                                                        <span class="fw-500">12.45 - 15.00</span>
                                                    </div>
                                                    <div class="stat">
                                                        <em class="fas fa-map-marker-alt mr-2"></em>
                                                        <span class="fw-500">
                                                            618 ถนนนิคมมักกะสัน <br>
                                                            เเขวงมักกะสัน เขตราชเทวี <br>
                                                            กรุงเทพมหานคร
                                                        </span>
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
