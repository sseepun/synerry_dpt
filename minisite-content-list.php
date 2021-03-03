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
    [ 'url' => '#', 'display' => 'วิสัยทัศน์และพันธกิจ' ],
];
$breadcrumbTitle = 'วิสัยทัศน์และพันธกิจ';
$breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
$breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
include('component/breadcrumb-minisite.php');
?>

<section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
    <div class="container">
        <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
            <div class="ss-box-shadow lg"></div>
            <div class="box-content">
                <div class="grids">
                    <div class="grid lg-25 md-30 sm-100 mt-0">
                        <div class="tab-container">
                            <div class="tabs tabs-02">
                                <a class="tab tab-header" href="#">
                                    เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                </a>
                                <a class="tab" href="#">เกี่ยวกับหน่วยงาน</a>
                                <a class="tab active" href="#">วิสัยทัศน์และพันธกิจ</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg-75 md-70 sm-100 xl-mt-0 lg-mt-0 md-mt-0">
                        <div class="container">
                            <div class="filter-year-box">
                                <div class="aos-init aos-animate" id="accordion">
                                    <div class="card card_active">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    ข้อมูลพื้นฐาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-1" class="collapse show" data-parent="accordion" id="collapse_1" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O1 - โครงสร้าง</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O2 - ข้อมูลผู้บริหาร</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O3 - อำนาจหน้าที่</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O4 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O5 - ข้อมูลการติดต่อ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O6 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">พระราชบัญญัติเขตพัฒนาพิเศษภาคตะวันออก</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">กฎหมายลำดับรองที่เกี่ยวข้อง</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">EEC PPP Track</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_2">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_2" aria-expanded="true" class="btn"
                                                        data-target="#collapse_2" data-toggle="collapse">
                                                    การประชาสัมพันธ์
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-2" class="collapse show" data-parent="accordion" id="collapse_2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O7 - ข่าวประชาสัมพันธ์</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_3">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_3" aria-expanded="true" class="btn"
                                                        data-target="#collapse_3" data-toggle="collapse">
                                                    การปฏิสัมพันธ์ข้อมูล
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-3" class="collapse show" data-parent="accordion" id="collapse_3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O8 - Q&A</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">09 - Social Network</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">Facebook</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Website</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_4">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_4" aria-expanded="true" class="btn"
                                                        data-target="#collapse_4" data-toggle="collapse">
                                                    การดำเนินงาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-4" class="collapse show" data-parent="accordion" id="collapse_4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">010 - แผนดำเนินงานประจำปี</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">011 - รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O12 - รายงานผลการดำเนินงานประจำปี</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_5">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_5" aria-expanded="true" class="btn"
                                                        data-target="#collapse_5" data-toggle="collapse">
                                                    การปฏิบัติงาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-5" class="collapse show" data-parent="accordion" id="collapse_5">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O13 - คู่มือหรือมาตรฐานการปฏิบัติงาน</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    การให้บริการ
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-6" class="collapse show" data-parent="accordion" id="collapse_6">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O14 - คู่มือหรือมาตรฐานการให้บริการ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O15 - ข้อมูลเชิงสถิติการให้บริการ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O16 - รายงานผลการสำรวจความพึงพอใจการให้บริการ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O17 - E-Service</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_7">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_7" aria-expanded="true" class="btn"
                                                        data-target="#collapse_7" data-toggle="collapse">
                                                    แผนการใช้จ่ายงบประมาณประจำปี
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-7" class="collapse show" data-parent="accordion" id="collapse_7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O18 - แผนการใช้จ่ายงบประมาณประจำปี</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O19 - รายงานการกำกับติดตามการใช้จ่ายงบประมาณรอบ 6 เดือน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O20 - รายงานผลการใช้จ่ายงบประมาณประจำปี</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    ข้อมูลพื้นฐาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-1" class="collapse show" data-parent="accordion" id="collapse_1" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O1 - โครงสร้าง</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O2 - ข้อมูลผู้บริหาร</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O3 - อำนาจหน้าที่</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O4 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O5 - ข้อมูลการติดต่อ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O6 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">พระราชบัญญัติเขตพัฒนาพิเศษภาคตะวันออก</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">กฎหมายลำดับรองที่เกี่ยวข้อง</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">EEC PPP Track</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    ข้อมูลพื้นฐาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-1" class="collapse show" data-parent="accordion" id="collapse_1" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O1 - โครงสร้าง</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O2 - ข้อมูลผู้บริหาร</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O3 - อำนาจหน้าที่</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O4 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O5 - ข้อมูลการติดต่อ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O6 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">พระราชบัญญัติเขตพัฒนาพิเศษภาคตะวันออก</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">กฎหมายลำดับรองที่เกี่ยวข้อง</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">EEC PPP Track</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    ข้อมูลพื้นฐาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-1" class="collapse show" data-parent="accordion" id="collapse_1" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O1 - โครงสร้าง</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O2 - ข้อมูลผู้บริหาร</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O3 - อำนาจหน้าที่</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O4 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O5 - ข้อมูลการติดต่อ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O6 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">พระราชบัญญัติเขตพัฒนาพิเศษภาคตะวันออก</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">กฎหมายลำดับรองที่เกี่ยวข้อง</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">EEC PPP Track</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading_1">
                                            <h5 class="mb-0">
                                                <button area-controls="collapse_1" aria-expanded="true" class="btn"
                                                        data-target="#collapse_1" data-toggle="collapse">
                                                    ข้อมูลพื้นฐาน
                                                </button>
                                            </h5>
                                        </div>
                                        <div aria-labelledby ="heading-1" class="collapse show" data-parent="accordion" id="collapse_1" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12" style="">
                                                        <p style="font-size: 24px;">
                                                            <a href="#">O1 - โครงสร้าง</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O2 - ข้อมูลผู้บริหาร</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O3 - อำนาจหน้าที่</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O4 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O5 - ข้อมูลการติดต่อ</a></p>
                                                        <p style="font-size: 24px;">
                                                            <a href="#" target="_blank">O6 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                        <ul style="margin: top -0.7rem; line-height: 1.8rem; font-size: 22px;">
                                                            <li>
                                                                <a href="#">พระราชบัญญัติเขตพัฒนาพิเศษภาคตะวันออก</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">กฎหมายลำดับรองที่เกี่ยวข้อง</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">EEC PPP Track</a>
                                                            </li>
                                                        </ul>
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
        </div>
    </div>
</section>

<?php include_once('include/footer-minisite.php'); ?>
<?php include_once('include/script.php'); ?>
</body>
</html>
