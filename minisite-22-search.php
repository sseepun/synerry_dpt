<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'ค้นหาข้อมูลภายในเว็บไซต์' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <form action="" method="GET">
                        <div class="pt-3 pb-4 px-3 mb-5 bg-color-09 color-white border">
                            <div class="row">

                                <div class="col-lg-12 col-md-6 mb-3">
                                    <h6 class="fw-300">
                                        <span class="text-sm">ค้นหาโดย Keyword</span>
                                    </h6>
                                    <div class="search-container">
                                        <input type="text" name="search" placeholder="ค้นหา" required />
                                        <button type="submit">
                                            <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <h6 class="fw-300">
                                        <span class="text-sm">ค้นหาตามประเภทเนื้อหา</span>
                                    </h6>
                                    <div class="mt-2">
                                        <?php foreach(['ข่าว', 'เอกสาร', 'รูปภาพ', 'วีดีโอ'] as $i=>$d){?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cb_<?= $i ?>" />
                                                <label class="form-check-label color-white" for="cb_<?= $i ?>">
                                                    <?= $d ?>
                                                </label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <h6 class="fw-300">
                                        <span class="text-sm">ค้นหาตามหมวดหมู่</span>
                                    </h6>
                                    <div class="select-wrapper width-full">
                                        <select class="width-full">
                                            <option value="">เลือกหมวดหมู่</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <h6 class="fw-300">
                                        <span class="text-sm">ค้นหาตามช่วงเวลา</span>
                                    </h6>
                                    <div class="date-selectors single mt-2">
                                        <div class="date-selector">
                                            <label>เริ่ม</label>
                                            <input type="text" class="date-picker" />
                                            <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="date-selectors single mt-2">
                                        <div class="date-selector">
                                            <label>สิ้นสุด</label>
                                            <input type="text" class="date-picker" />
                                            <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="btns text-center pt-3">
                                <button type="submit" class="btn custom-btn-04 btn-md">
                                    ค้นหา <i class="fas fa-search ml-2"></i>
                                </button>
                                <a class="btn custom-btn-gray btn-form-clear btn-md" href="#">
                                    ล้างข้อมูล <i class="fas fa-times ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-xl-9 col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="600">
                    <h4 class="color-09 mb-0 fw-300 border-bottom-4 pb-3" style="border-color:#ad56ac!important;">
                        คำที่ค้น <span class="fw-600 text-2xl">6</span> รายการ
                    </h4>
                    <div class="grids mt-3 pb-5">
                        <?php for($i=0; $i<6; $i++){?>
                            <div class="grid sm-100 my-0 py-3 border-bottom">
                                <div class="ss-card-02 img-sm btn-on-hover">
                                    <div class="block">
                                        <a class="ss-img bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= ($i%7) +1; ?>.jpg"></div>
                                            <div class="hover-container">
                                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="block">
                                        <div class="post-card post-card-06 no-border">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    ร่วมตรวจประเมินสถานประกอบการตามโครงการ กลุ่มบริหารจัดการลุ่มน้ำและ วางระบบธรรมาภิบาลสิ่งแวดล้อม...
                                                </a>
                                                <a class="color-04" href="#">
                                                    http://www.industry.go.th/chiangrai/index.php/procurement/announce-purchase
                                                </a>
                                            </div>
                                            <div class="post-stats-02 mt-2">
                                                <div class="block">
                                                    <i class="fas fa-camera color-07 mr-1"></i>
                                                    ข่าวประชาสัมพันธ์
                                                    <span class="sep"></span>
                                                    24-08-2563
                                                    <span class="sep"></span>
                                                    เปิดดู : 130
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
