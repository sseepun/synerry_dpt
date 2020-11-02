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
                <h2 class="fw-100 mb-0">ผลการค้นหา</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
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

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'ผลการค้นหา' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <form action="" method="GET">
                        <div class="pb-4 my-3 border-bottom">
                            <div class="search-container">
                                <input type="text" name="search" placeholder="ค้นหา" required />
                                <button type="submit">
                                    <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                </button>
                            </div>
                            <div class="date-selectors mt-2">
                                <div class="date-selector">
                                    <label>ตั้งแต่</label>
                                    <input type="text" class="date-picker" />
                                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <div class="date-selector">
                                    <label>ถึง</label>
                                    <input type="text" class="date-picker" />
                                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <div class="ss-checkbox mt-3">
                                <div class="group-label">
                                    <label>ประเภทข้อมูล</label>
                                </div>
                                <div class="checkboxes">
                                    <?php
                                        foreach([
                                            'ข่าวประชาสัมพันธ์', 'คลังภาพ', 'วิดีโอ', 'ไฟล์เอกสาร',
                                            'เนื้อหาเว็บไซต์', 'วารสารออนไลน์', 'เว็บไซต์ย่อย', 'ทั้งหมด',
                                        ] as $i=>$d){
                                    ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="c_<?= $i ?>" />
                                            <label class="form-check-label" for="c_<?= $i ?>">
                                                <?= $d ?>
                                            </label>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="btns text-center mt-3">
                                <a class="btn btn-round custom-btn-gray btn-form-clear" href="#">
                                    <span class="text-xs">
                                        ล้างข้อมูล <i class="fas fa-times ml-2"></i>
                                    </span>
                                </a>
                                <button type="submit" class="btn btn-round custom-btn-09">
                                    <span class="text-xs">
                                        ค้นหา <i class="fas fa-search ml-2"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <h1 class="color-09 pt-4 mb-0">
                        <span class="fw-200 color-black">ผลการค้นหา</span>
                        “ผู้ประกอบการ”
                    </h1>
                    <p class="mt-0">จำนวน <span class="fw-600">12</span> รายการ</p>

                    <div class="grids">
                        <?php for($i=0; $i<6; $i++){?>
                            <div class="grid sm-100 mt-4 pt-3">
                                <div class="ss-card-02 img-sm btn-on-hover">
                                    <div class="block">
                                        <a class="ss-img square bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= ($i%7) +1; ?>.jpg"></div>
                                            <div class="hover-container">
                                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="block">
                                        <div class="post-card post-card-06">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    ปลัดกอบชัยฯ เยี่ยมและให้กำลังใจผู้ประกอบการในโครงการ Cloud Kitchen Food Truck 
                                                    ออกร้าน ณ อิมแพ็ค เมืองทองธานี
                                                </a>
                                            </div>
                                            <p class="text-sm mt-2">
                                                หมวด : <span class="color-09 fw-500">อัลบั้มรูปภาพ</span> 
                                                <br> <span class="color-09 fw-500">12.05.2563</span>
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
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
