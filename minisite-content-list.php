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
