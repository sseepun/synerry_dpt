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
            [ 'url' => '#', 'display' => 'ผลการค้นหา' ],
        ];
        $breadcrumbTitle = 'ผลการค้นหา';
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
                                    <div class="search-wrapper width-full">
                                        <input type="text" class="width-full no-bradius" placeholder="ค้นหา" />
                                    </div>
                                    <div class="color-white py-3 px-3">
                                        <p class="fw-600">ประเภทข้อมูล</p>
                                        <?php
                                            foreach([
                                                'ข่าวประชาสัมพันธ์', 'ถามตอบ', 'คลังภาพ', 'วิดีโอ',
                                                'ไฟล์เอกสาร', 'วารสาร', 'เนื้อหาเว็บไซต์'
                                            ] as $i=>$d){
                                        ?>
                                            <div class="form-check px-0">
                                                <input type="checkbox" name="c_0[]" id="c_0_<?= $i ?>" value="<?= $i ?>" title="General Radio Input" />
                                                <label for="c_0_<?= $i ?>" class="color-white pl-1"><?= $d ?></label>
                                            </div>
                                        <?php }?>

                                        <p class="fw-600 mt-3">ช่วงเวลา</p>
                                        <div class="d-flex ai-center jc-space-between mt-1">
                                            <p>จาก</p>
                                            <div class="date-wrapper" style="width:calc(100% - 2.5rem);">
                                                <input type="text" class="date-picker form-control no-bradius" required title="General Text Input" />
                                            </div>
                                        </div>
                                        <div class="d-flex ai-center jc-space-between mt-1">
                                            <p>ถึง</p>
                                            <div class="date-wrapper" style="width:calc(100% - 2.5rem);">
                                                <input type="text" class="date-picker form-control no-bradius" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-black py-3 px-3">
                                    <p class="fw-600">คำค้นหายอดนิยม</p>
                                    <div class="tab-container">
                                        <div class="tabs tabs-05">
                                            <a class="tab active btn btn-action btn-color-01 btn-sm btn-round mt-1" href="#" data-tab="0">
                                                รายเดือน
                                            </a>
                                            <a class="tab btn btn-action btn-color-01 btn-sm btn-round mt-1" href="#" data-tab="1">
                                                รายสัปดาห์
                                            </a>
                                        </div>
                                        <div class="tab-contents mt-2">
                                            <?php for($i=0; $i<2; $i++){?>
                                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                                    <ol class="pl-3">
                                                        <li class="p sm fw-400 pt-1 pl-2">พลังงานทดแทน</li>
                                                        <li class="p sm fw-400 pt-1 pl-2">โครงการสนับสุนการลงทุน</li>
                                                        <li class="p sm fw-400 pt-1 pl-2">รหัสความสุข</li>
                                                        <li class="p sm fw-400 pt-1 pl-2">แนวโน้มการผลิตพลังงาน</li>
                                                        <li class="p sm fw-400 pt-1 pl-2">พลังงานทดแทน</li>
                                                    </ol>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
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
                            <div class="grids pt-3 pb-4">
                                <?php for($i=0; $i<8; $i++){?>
                                    <div class="grid sm-100 mt-3">
                                        <div class="ss-card ss-card-15">
                                            <div class="img-container">
                                                <a class="ss-img adaptive-list" href="#">
                                                    <?php if($i%2==0){?>
                                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                        <div class="hover-container">
                                                            <div class="icon">
                                                                <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                            </div>
                                                        </div>
                                                    <?php }else{?>
                                                        <div class="img-bg mag-bg"></div>
                                                        <div class="mag-container">
                                                            <img src="public/assets/app/images/content/0<?= $i%4+6 ?>.jpg" alt="Magazine Cover" />
                                                        </div>
                                                    <?php }?>
                                                </a>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-content">
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <p class="xs desc mt-2">
                                                        กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                        (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                        HR Forum 2020, Big Data
                                                    </p>
                                                    <div class="menu-tag d-flex ai-center fw-wrap">
                                                        <p class="xs fw-400 mr-2">เมนู</p>
                                                        <div class="p xs fw-400 ws-nowrap bg-11 border bcolor-11 py-1 px-2">
                                                            ปฏิทินกิจกรรม
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-content">
                                                    <div class="header">
                                                        <p class="fw-600">ประเภท</p>
                                                        <p class="xs fw-500">ข่าวประชาสัมพันธ์</p>
                                                    </div>
                                                    <div class="body">
                                                        <div class="ss-stat style-calendar d-block">
                                                            <div class="stat">
                                                                <em class="far fa-clock mr-2"></em> 
                                                                <span class="fw-500">19 เมษายน  2564</span>
                                                            </div>
                                                            <div class="stat">
                                                                <em class="far fa-eye mr-2"></em> 
                                                                <span class="fw-500">98</span>
                                                            </div>
                                                            <div class="stat">
                                                                <em class="far fa-share-square mr-2"></em> 
                                                                <span class="fw-500">120</span>
                                                            </div>
                                                        </div>
                                                        <div class="arrow">
                                                            <em class="far fa-arrow-alt-circle-right"></em>
                                                        </div>
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
