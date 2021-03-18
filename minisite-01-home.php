<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <section class="banner-03">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/05.jpg');">
                        <div class="container">
                            <div class="text-container">
                                <img class="img-text animate" src="public/assets/app/images/misc/text-03.png" alt="Banner Image Text" style="--delay:.6s;" />
                                <h6 class="h4 lg fw-500 color-01 lh-xs mt-4 animate" style="--delay:.75s;">
                                    เสริมสร้างความมั่นคงทางพลังงาน
                                </h6>
                                <p class="md fw-400 color-black animate" style="--delay:.9s;">
                                    เพื่อรงอรับการเติบโตทางเศรษฐกิจ
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="arrow-wrapper">
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <section class="intro-06">
        <div class="container">
            <div class="wrapper">
                <div class="info">
                    <p class="fw-400 color-02">
                        ราคาน้ำมันขายปลีก (บ./ลิตร)
                    </p>
                </div>
                <div class="slide-container">
                    <div class="slides">
                        <?php for($i=0; $i<11; $i++){?>
                            <div class="slide">
                                <p class="xs fw-400 color-white">
                                    แก๊สโซฮอล์ 95
                                    <span class="fw-600 color-01 ml-1">24.05</span>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-05">
        <div class="wrapper">
            <div class="intro-cards">
                <div class="intro-card bg-01 border bcolor-01" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrapper color-white">
                        <img class="img-pattern" src="public/assets/app/images/icon/fire.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-500 lh-xs">ราคาเชื้อเพลิง</h6>
                            <p class="xs fw-500 lh-xs">PTTNGV</p>
                            <p class="h3 fw-600 lh-xs">15.31</p>
                        </div>
                    </div>
                </div>
                <div class="intro-card bg-02 border bcolor-02" data-aos="fade-up" data-aos-delay="150">
                    <div class="wrapper color-black">
                        <img class="img-pattern" src="public/assets/app/images/icon/give.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-600 lh-xs">ราคาหุ้น</h6>
                            <p class="xs fw-600 lh-xs">ราคาล่าสุด</p>
                            <p class="h3 fw-600 lh-xs">39.25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="intro-07 section-minisite section-padding pt-0" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="ss-box width-full position-relative px-0">
                <div class="ss-box-shadow xl"></div>
                <div class="box-content">
                    <div class="icon-blocks bcolor-sgray">
                        <?php
                            foreach([
                                'จัดซื้อจัดจ้าง', 'ราคาน้ำมันวันนี้', 'โครงสร้างราคาน้ำมัน', 'ฐานะกองทุนน้ำมัน',
                                'การใช้ไฟฟ้า ณ ปัจจุบัน', 'แบบสอบถาม', 'คำถามที่พบบ่อย'
                            ] as $i=>$d){
                        ?>
                            <a class="block bcolor-sgray" href="#">
                                <div class="wrapper">
                                    <div class="img-icon">
                                        <img src="public/assets/app/images/icon/minisite-0<?= $i+1 ?>.png" alt="icon">
                                    </div>
                                    <p class="fw-600 lh-sm">
                                        <?= $d ?>
                                    </p>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                    
                    <?php $categories = ['ข่าวประชาสัมพันธ์', 'เรื่องเด่นประเด็นดัง', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร']; ?>
                    <div class="tab-container px-4 pt-5 pb-4">
                        <div class="d-flex ai-center jc-space-between fw-wrap">
                            <div class="ss-icon-title-02 ws-nowrap mt-0">
                                <div class="text-icon color-01">E</div>
                                <div class="text-wrapper">
                                    <div class="title color-01">NERGY NEWS</div>
                                    <div class="desc color-black">อัพเดทข่าวพลังงาน</div>
                                </div>
                            </div>
                            <div class="tabs tabs-05 width-auto my-2">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?> btn btn-action btn-color-01 btn-sm btn-round mt-1" 
                                    href="#" data-tab="<?= $j ?>">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="tab-contents mt-1">
                            <?php foreach($categories as $j=>$k){?>
                                <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                    <div class="slide-container">
                                        <div class="slides">
                                            <?php for($i=0; $i<6; $i++){?>
                                                <div class="slide">
                                                    <div class="ss-card ss-card-06">
                                                        <a class="ss-img square" href="#">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                            <div class="hover-container">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="text-container">
                                                            <div class="ss-stat jc-space-between">
                                                                <div class="stat">
                                                                    <em class="far fa-clock mr-1"></em> 28 เมษายน 2564
                                                                </div>
                                                                <div class="stat">
                                                                    <em class="far fa-eye mr-1"></em> 200
                                                                </div>
                                                            </div>
                                                            <a class="title p md fw-600" href="#">
                                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                            </a>
                                                            <p class="xs desc">
                                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                                HR Forum 2020, Big Data
                                                            </p>
                                                            <div class="arrow">
                                                                <em class="far fa-arrow-alt-circle-right"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="arrows"></div>
                                        <a class="learn-more p fw-500 color-black h-color-02" href="#">
                                            ดูทั้งหมด
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="intro-08 section-padding" style="background-image:url('public/assets/app/images/bg/minisite-09.jpg');">
        <div class="container">
            <div class="ss-icon-title-02 ws-nowrap mt-0">
                <div class="text-icon color-01">E</div>
                <div class="text-wrapper">
                    <div class="title color-01">NERGY STATISTICS</div>
                    <div class="desc color-black">สถิติพลังงาน</div>
                </div>
            </div>
            <div class="gallery-grids">
                <div class="grid md-50 sm-100">
                </div>
                <div class="grid md-50 sm-100">
                </div>
                <div class="grid md-100 sm-100">
                </div>
            </div>
        </div>
    </section>

    <style>
        .announcement-01 .grids.cards{
            justify-content: flex-end;
        }
        .announcement-01 .grids > .grid.card{
            margin: 0 0 0 auto; border-left: 2px solid #000;
        }
        @media screen and (max-width: 991.98px){
            .announcement-01 .grids > .grid.card{
                margin-left:0;
            }
            .announcement-01 .grids.cards{
                justify-content: flex-start;
            }
        }
    </style>
    <section class="section-minisite section-padding announcement-01" style="background-image:url('public/assets/app/images/bg/minisite-09.jpg');">
        <div class="container">
            <div class="ss-icon-title-02 ws-nowrap mt-0">
                <div class="text-icon color-01">A</div>
                <div class="text-wrapper">
                    <div class="title color-01">NNOUNCEMENTS</div>
                    <div class="desc color-black">ข่าวประกาศ</div>
                </div>
            </div>

            <div class="grids">
                <div class="grid lg-40 sm-100">
                    <div class="btns">
                        <a href="#" class="btn btn-round btn-sm bcolor-sgray">
                            สมัครงาน
                        </a>
                        <a href="#" class="btn btn-round btn-sm bcolor-sgray">
                            ประกาศจัดซื้อจัดจ้าง
                        </a>
                    </div>
                </div>
            </div>

            <div class="grids cards">
                <?php for($i=0; $i < 5; $i++){?>
                    <div class="grid xl-60 lg-70 md-100 sm-100 card pt-3 pb-2 pl-5 pr-2 mt-2">
                        <p>
                            <em class="far fa-clock color-01 mr-1"></em> 8 มกราคม 2020
                        </p>
                        <div class="grids no-gap ai-center">
                            <div class="grid md-50 sm-100 mt-0">
                                <p class="fw-600 color-01">ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)</h6>
                            </div>
                            <div class="grid md-30 sm-100 mt-0">
                                <p class="fw-400">จำนวน <span class="color-01 fw-600 mx-1">10</span> ตำแหน่ง</p>
                            </div>
                            <div class="grid md-20 sm-100 mt-0">
                                <a href="#" class="d-flex ai-center p fw-300">
                                    ข้อมูลเพิ่มเติม
                                    <em class="far fa-arrow-alt-circle-right color-01 h4 ml-2"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>


    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
