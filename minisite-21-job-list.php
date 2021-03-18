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
            [ 'url' => '#', 'display' => 'ประกาศสมัครงาน' ],
        ];
        $breadcrumbTitle = 'ประกาศสมัครงาน';
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
                            <div class="d-flex ai-center fw-wrap">
                                <h6 class="h5 sm fw-500 color-black mr-2">ค้นหา</h6>
                                <div class="h5 sm fw-500 color-01 bg-11 border bcolor-11 pt-1 px-2">
                                    “ระบบพลังานไฟฟ้า”
                                </div>
                            </div>
                            <p class="sm fw-400 color-black mt-1">
                                ผลลัพธ์การค้นหา
                                <span class="text-xl fw-600 color-01">20</span>
                                รายการ
                            </p>
                            <div class="mt-4">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="ss-card ss-card-16">
                                        <div class="wrapper color-black">
                                            <div class="ss-stat my-0">
                                                <div class="stat my-0">
                                                    <em class="far fa-clock color-01 mr-2"></em> 
                                                    <span class="fw-500">22 มกราคม  2564</span>
                                                </div>
                                            </div>
                                            <div class="info-container">
                                                <div class="info">
                                                    <a class="p lg fw-600 color-01 h-color-02 lh-xs" href="#">
                                                        ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <p class="sm fw-500">
                                                        จำนวน 
                                                        <span class="fw-600 color-01 text-xl mx-1">10</span> 
                                                        ตำแหน่ง
                                                    </p>
                                                </div>
                                                <div class="info">
                                                    <a class="d-flex ai-center jc-end p sm fw-500 h-color-01" href="#">
                                                        ข้อมูลเพิ่มเติม
                                                        <span class="h5 color-01 ml-2">
                                                            <em class="far fa-arrow-alt-circle-right"></em>
                                                        </span>
                                                    </a>
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
