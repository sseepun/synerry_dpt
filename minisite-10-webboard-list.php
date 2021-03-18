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
            [ 'url' => '#', 'display' => 'กระดานถามตอบ' ],
            [ 'url' => '#', 'display' => 'ถามตอบกรมธุรกิจพลังงาน' ],
        ];
        $breadcrumbTitle = 'กระดานถามตอบ';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
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
                                    <a class="tab active" href="#">ถาม-ตอบ กรมธุรกิจพลังงาน</a>
                                    <a class="tab" href="#">ประชาพิจารณ์</a>
                                    <a class="tab" href="#">การบริการของหน่วยงาน</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <?php
                                $listHeader = ['total', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <div class="d-flex fw-wrap jc-space-between mt-2">
                                <h6 class="h5 fw-600 color-01 mr-2">
                                    กระดาน ถาม-ตอบ กรมธุรกิจพลังงาน
                                </h6>
                                <div class="d-flex ai-center fw-wrap ws-nowrap">
                                    <a class="p sm fw-500 color-black h-color-01" href="#">
                                        ข้อมูลสมาชิก
                                    </a>
                                    <div class="border-left-4 bcolor-01 mx-2">&nbsp;</div>
                                    <a class="p sm fw-500 color-black h-color-01 mr-3" href="#">
                                        ออกจากระบบ
                                    </a>
                                    <button class="btn btn-action btn-color-01 btn-round btn-sm">
                                        ตั้งกระทู้ใหม่ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                    </button>
                                </div>
                            </div>
                            <div class="scroll-x-wrapper mt-3" data-simplebar>
                                <table class="table table-05 color-black">
                                    <thead>
                                        <tr>
                                            <th style="min-width:3rem;">หมายเลข</th>
                                            <th style="min-width:20rem;">หัวข้อกระทู้</th>
                                            <th style="min-width:8rem;">ผู้ตอบล่าสุด</th>
                                            <th style="min-width:4rem;">อ่าน</th>
                                            <th style="min-width:4rem;">ตอบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0; $i<5; $i++){?>
                                            <tr>
                                                <td class="col-ribbon">
                                                    <?= sprintf('%2d', 1140-$i*2+1) ?>
                                                    <img src="public/assets/app/images/icon/ribbon.png" alt="Ribbon Icon" />
                                                </td>
                                                <td>
                                                    ห้ามเก็บภาชนะบรรจุน้ำมันเชื้อเพลิงไว้ต่ำกว่าระดับพื้นดิน
                                                    <div class="p xs fw-500">
                                                        ตั้งกระทู้โดย
                                                        <a class="fw-600 color-01 h-color-02" href="#">
                                                            <u>ปภัสรา</u>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profile-card">
                                                        <div class="profile-icon">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                                        </div>
                                                        <div class="text-container">
                                                            <div class="name fw-500">
                                                                อรอุมา ชาญณรงค์
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-500">800</td>
                                                <td class="fw-500">200</td>
                                            </tr>
                                            <tr>
                                                <td class="col-ribbon">
                                                    <?= sprintf('%2d', 1140-$i*2+1) ?>
                                                </td>
                                                <td>
                                                    โรงงานผู้ผลิตรถยนต์ที่รองรับไบโอดีเซล B20 สามารถเติมไบโอดีเซล 
                                                    ไม่เกิน B20ในรถใหม่ที่ผลิตจากโรงงานเพื่อขายให้กับลูกค้าภายในประเทศและรถที่ส่งออกได้หรือไม่
                                                    <div class="p xs fw-500">
                                                        ตั้งกระทู้โดย
                                                        <a class="fw-600 color-01 h-color-02" href="#">
                                                            <u>ศรจักร</u>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profile-card">
                                                        <div class="profile-icon">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                                        </div>
                                                        <div class="text-container">
                                                            <div class="name fw-500">
                                                                อรอุมา ชาญณรงค์
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-500">800</td>
                                                <td class="fw-500">200</td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
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
