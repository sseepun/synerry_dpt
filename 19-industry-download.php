<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">ดาวโหลดเอกสาร</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="grids">

                <div class="grid lg-25 md-35 sm-100 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="grid lg-75 md-65 sm-100 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'ดาวโหลดเอกสาร' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    
                    <div class="list-header">
                        <div class="block">
                            <div class="text-wrapper">
                                <div class="search-container">
                                    <input type="text" name="search" placeholder="ค้นหา" />
                                    <button type="submit">
                                        <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="text-wrapper">
                                <select class="category">
                                    <option value="" disabled selected>แบ่งตามหมวดหมู่</option>
                                    <option value="newest">แบ่งตามหมวดหมู่</option>
                                </select>
                            </div>
                            <div class="text-wrapper">
                                <select class="order">
                                    <option value="" disabled selected>เรียงลำดับข้อมูล</option>
                                    <option value="newest">เรียงลำดับข้อมูล</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="table-wrapper mt-3" data-simplebar>
                        <table class="table table-download">
                            <tbody>
                                <?php for($i=0; $i<2; $i++){?>
                                    <tr class="row-sep">
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="row-title">
                                        <td colspan="4">
                                            <h6>แผนงานโครงการงบประมาณรายจ่ายประจำปี</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="file-icon pdf"></div>
                                        </td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-sm fw-500">
                                                ขนาดไปล์ <span class="fw-600 color-04">1.3 MB</span>
                                            </div>
                                            <div class="text-sm fw-500">
                                                ดาวน์โหลด <span class="fw-600 color-04">23 ครั้ง</span>
                                            </div>
                                        </td>
                                        <td style="width:160px;">
                                            <div class="d-flex ai-center jc-end">
                                                <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                    ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                </a>
                                                <div class="v-sep"></div>
                                                <a class="btn-icon" href="#">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row-sep">
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="file-icon doc"></div>
                                        </td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-sm fw-500">
                                                ขนาดไปล์ <span class="fw-600 color-04">1.3 MB</span>
                                            </div>
                                            <div class="text-sm fw-500">
                                                ดาวน์โหลด <span class="fw-600 color-04">23 ครั้ง</span>
                                            </div>
                                        </td>
                                        <td style="width:160px;">
                                            <div class="d-flex ai-center jc-end">
                                                <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                    ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                </a>
                                                <div class="v-sep"></div>
                                                <a class="btn-icon" href="#">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row-sep">
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="row-title">
                                        <td colspan="4">
                                            <h6>แผนงานโครงการงบประมาณรายจ่ายประจำปี</h6>
                                        </td>
                                    </tr>
                                    <?php foreach(['doc', 'img', 'pdf', 'ppt', 'xls', 'zip'] as $f){?>
                                        <tr class="<?php if($i%2==0)echo 'selected'; ?>">
                                            <td>
                                                <div class="file-icon <?php echo $f; ?>"></div>
                                            </td>
                                            <td>
                                                การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                            </td>
                                            <td>
                                                <div class="text-sm fw-500">
                                                    ขนาดไปล์ <span class="fw-600 color-04">1.3 MB</span>
                                                </div>
                                                <div class="text-sm fw-500">
                                                    ดาวน์โหลด <span class="fw-600 color-04">23 ครั้ง</span>
                                                </div>
                                            </td>
                                            <td style="width:160px;">
                                                <div class="d-flex ai-center jc-end">
                                                    <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                        ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                    </a>
                                                    <div class="v-sep"></div>
                                                    <a class="btn-icon" href="#">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
