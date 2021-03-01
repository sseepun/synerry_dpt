<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'โครงสร้างส่วนราชการ' ],
        ];
        $breadcrumbTitle = 'โครงสร้างส่วนราชการ';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-14.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="org-01 round section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="scroll-x-wrapper" data-simplebar>
                <div class="tree">

                    <div class="node root">
                        <img class="icon" src="public/assets/app/images/logo-text.png" alt="Tree Root Icon" />
                        <div class="node-container bradius-round ovf-hidden">
                            <div class="node-title text-center">
                                <h6 class="p md fw-400">
                                    รัฐมนตรีว่าการกระทรวงพลังงาน
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="node-grids">
                        <div class="node-grid">

                            <div class="node node-01">
                                <div class="node-container bradius-round ovf-hidden">
                                    <div class="node-title">
                                        <h6 class="p">
                                            องค์กรอิสระ
                                        </h6>
                                    </div>
                                    <div class="children text-center bradius-round">
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                คณะกรรมการกำกับกิจการพลังงาน
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                สำนักงานคณะกรรมการกำกับกิจการพลังงาน
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="node node-02">
                                <div class="node-container bradius-round ovf-hidden">
                                    <div class="node-title">
                                        <h6 class="p">
                                            องค์กรในกำกับรัฐมนตรีว่าการกระทรวง
                                        </h6>
                                    </div>
                                    <div class="children text-center bradius-round">
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                สำนักงานกองทุนน้ำมันเชื้อเพลิง
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="node node-03">
                                <div class="node-container bradius-round ovf-hidden">
                                    <div class="node-title">
                                        <h6 class="p">
                                            รัฐวิสาหกิจและบริษัทมหาชนในกำกับดูแล
                                        </h6>
                                    </div>
                                    <div class="children text-center bradius-round">
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                การไฟฟ้าฝ่ายผลิตแห่งประเทศไทย (กฟผ.)
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                บริษัท ปตท. จำกัด (มหาชน)
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="node-grid">

                            <div class="node node-04">
                                <div class="node-container bradius-round ovf-hidden">
                                    <div class="node-title">
                                        <h6 class="p">
                                            หน่วยงานราชการ
                                        </h6>
                                    </div>
                                    <div class="children text-center bradius-round">
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                สำนักงานรัฐมนตรี
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                สำนักงานปลัดกระทรวง
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                กรมเชื้อเพลิงธรรมชาติ
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                กรมธุรกิจพลังงาน
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน
                                            </p>
                                        </a>
                                        <a class="child bradius-round btn-popup-toggle" data-popup="0" href="#">
                                            <p class="sm bradius-round">
                                                สำนักงานนโยบายและแผนพลังงาน
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="popup-container round" data-popup="0">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="0"></div>
            <div class="popup-box">
                <div class="content-container bradius-round">
                    <div class="grids">
                        <div class="grid md-40 sm-100 mt-0">
                            <div class="img-container bradius-round ovf-hidden">
                                <div class="fit img-fill" style="background-image:url('public/assets/app/images/content/01.jpg');"></div>
                            </div>
                        </div>
                        <div class="grid md-60 sm-100 mt-md-0">
                            <h5 class="h5 fw-600 lh-xs color-01">
                                กรมเชื้อเพลิงธรรมชาติ
                            </h5>
                            <h6 class="fw-500 lh-xs color-black">
                                กระทรวงพลังงาน
                            </h6>
                            <p class="sm lh-lg mt-3 op-80">
                                เป็นหน่วยงานระดับกรม มีหน้าที่หลักในภารกิจสำคัญ ด้านพลังงานของกระทรวงพลังงาน 
                                ตลอดระยะเวลาแห่งการดำเนินงานตั้งแต่ปี 2545 ได้ส่งเสริม สนับสนุน 
                                และเร่งรัดการจัดหาพลังงานด้วยการสำรวจและพัฒนาแหล่งเชื้อเพลิงธรรมชาติในประเทศ 
                                พร้อมทั้งแสวงหาความร่วมมือด้านพลังงานกับประเทศเพื่อนบ้านด้วยความมุ่งมั่น
                            </p>
                            <div class="btns mt-4">
                                <a class="btn btn-action btn-color-01 btn-round" href="#">
                                    เข้าสู่เว็บไซต์ 
                                    <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn-close btn-popup-toggle bradius-round" data-popup="0" href="#">
                    <em class="zmdi zmdi-close"></em>
                </a>
            </div>
        </div>
    </div>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
