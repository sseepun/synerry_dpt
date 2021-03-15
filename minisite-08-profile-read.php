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
            [ 'url' => '#', 'display' => 'ผู้บริหารระดับสูง' ],
        ];
        $breadcrumbTitle = 'ผู้บริหารระดับสูง';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow xl"></div>
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
                            <div class="d-flex jc-end">
                                <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                    ย้อนกลับ
                                    <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                                </a>
                            </div>    
                            <div class="grids">
                                <div class="grid xl-1-3 lg-40 sm-100">
                                    <div class="ss-img square">
                                        <div class="img-bg mag-bg"></div>
                                        <div class="profile-container">
                                            <img src="public/assets/app/images/team/hero-02.png" alt="Profile Image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid xl-2-3 lg-60 sm-100 color-black">
                                    <h6 class="h4 fw-400 color-01">
                                        นายอรรถพล ฤกษ์พิบูลย์
                                    </h6>
                                    <p class="p md fw-500">
                                        ประธานเจ้าหน้าที่บริหารและกรรมการผู้จัดการใหญ่ <br>
                                        บริษัท ปตท.จำกัด (มหาชน)
                                    </p>

                                    <div class="d-flex jc-space-between ai-center fw-wrap mt-3 pt-1">
                                        <div class="d-flex ai-center ws-nowrap mr-3">
                                            <div class="h6 color-01 mr-3">
                                                <em class="fas fa-mobile-alt"></em>
                                            </div>
                                            <a class="p fw-600 color-black h-color-01" href="#">
                                                089 140- 6000
                                            </a>
                                        </div>
                                        <div class="d-flex ai-center ws-nowrap">
                                            <div class="h6 color-01 mr-3">
                                                <em class="fas fa-envelope"></em>
                                            </div>
                                            <a class="p fw-600 color-black h-color-01" href="#">
                                                089 140- 6000
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="header ss-border py-1 mt-2">
                                        <h6 class="sm fw-500 color-01">
                                            ประสบการณ์การทำงาน
                                        </h6>
                                    </div>
                                    <p class="fw-600 mt-2">บริษัท บางจาก คอร์ปอเรชั่น จำกัด (มหาชน)</p>
                                    <div class="history-01">
                                        <div class="info-container">
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2563</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        รักษาการรองกรรมการผู้จัดการใหญ่ <br>
                                                        บริษัท บางจาก คอร์ปอเรชั่น จำกัด (มหาชน) <br>
                                                        ประธานเจ้าหน้าที่บริหาร บริษัท บีบีจีไอ จำกัด (มหาชน)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2562 - 2563</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        ผู้ช่วยกรรมการผู้จัดการใหญ่ <br>
                                                        บริษัท บางจาก คอร์ปอเรชั่น จำกัด (มหาชน) <br>
                                                        รองกรรมการผู้จัดการใหญ่  <br>
                                                        ธุรกิจไบโอดีเซลและธุรกิจใหม่ บริษัท บีบีจีไอ จำกัด (มหาชน)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2563 - ปัจจุบัน</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        กรรมการผู้จัดการ บริษัท บางจากไบโอฟูเอล จำกัด
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fw-600 mt-2">อื่นๆ</p>
                                    <div class="history-01">
                                        <div class="info-container">
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2558 - 2563</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        นายกสมาคมอุตสาหกรรมพลาสติกชีวภาพไทย
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2558 - 2562</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        Vice President - Downstream Market Development <br>
                                                        บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="time">
                                                    <p class="sm fw-600 color-01">2557 - 2561</p>
                                                </div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        กรรมการผู้จัดการ <br>
                                                        บริษัท โซลูชั่น ครีเอชั่น จำกัด (บริษัทในเครือ PTTGC)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="header ss-border py-1 mt-4">
                                        <h6 class="sm fw-500 color-01">
                                            คุณวุฒิการศึกษา/การอบรม
                                        </h6>
                                    </div>
                                    <div class="history-01">
                                        <div class="info-container">
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        Master of Business Administration (MBA), <br>
                                                        University of Dallas, Texas, USA
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        ปริญญาตรี วิทยาศาสตรบัณฑิต เคมีวิศวกรรม <br>
                                                        จุฬาลงกรณ์มหาวิทยาลัย
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="dot"></div>
                                                <div class="detail">
                                                    <p class="xs fw-500">
                                                        Director Certification Program (DCP 191/2014) <br>
                                                        สมาคมส่งเสริมสถาบันกรรมการบริษัทไทย
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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
