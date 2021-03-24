<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbBg = 'public/assets/app/images/bg/01.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="ss-box xxl">  
                <h6 class="h4 fw-500 lh-sm color-black">
                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม 
                    ประจำปี พ.ศ. 2562
                </h6>
                <div class="mt-2 mb-3">
                    <?php include('component/post-header.php'); ?>
                </div>
                <img class="img bradius-round" src="public/assets/app/images/content/10.jpg" alt="Post Content Image" />
                <div class="mt-4">
                    <h6 class="fw-500">
                        “ทูตพลังงานรวมพลังพัฒนาและอนุรักษ์พลังงานสู่ความยั่งยืน รุ่นที่ 1” 
                        จากสำนักงานพลังงานจังหวัดสมุทรปราการ สำนักงานปลัดกระทรวงพลังงาน
                    </h6>
                    <p class="mt-3 pt-1 lh-lg">
                        เมื่อวันที่ 13 กันยายน 2562 สำนักงาน ก.พ.ร. จัดพิธีมอบรางวัลเลิศรัฐ ประจำปี พ.ศ. 2562 
                        เพื่อเชิดชูหน่วยงานภาครัฐที่มีผลงานโดดเด่นกว่า 200 ผลงาน  โดยมี นายวิษณุ เครืองาม รองนายกรัฐมนตรี 
                        เป็นประธานในพิธีมอบรางวัลเลิศรัฐ ประจำปี 2562 ในปีนี้มีหน่วยงานภาครัฐที่ได้รับรางวัลกว่า 219 ผลงาน 
                        จากทั้งหมดที่ส่งเข้าประกวด 1,043 ผลงาน
                    </p>
                    <p class="mt-3 pt-1 lh-lg">
                        โดยสำนักงานปลัดกระทรวงพลังงาน ส่งผลงาน “ทูตพลังงานรวมพลังพัฒนาและอนุรักษ์พลังงานสู่ความยั่งยืน 
                        รุ่นที่ 1” จากสำนักงานพลังงานจังหวัดสมุทรปราการ และได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม 
                        ประเภทรางวัล สัมฤทธิผลประชาชนมีส่วนร่วม (Effective Change) ระดับดี
                    </p>
                    <p class="mt-3 pt-1 lh-lg">
                        สำหรับผลงานที่ได้รับรางวัลเลิศรัฐในปีนี้ แบ่งเป็น 3 สาขาได้แก่ 
                        สาขาบริการภาครัฐมอบให้แก่หน่วยงานรัฐที่มีผลการพัฒนาคุณภาพการให้บริการประชาชนด้วยบริการที่สะดวกรวดเร็ว 
                        โปร่งใส เป็นธรรม และเป็นที่พึงพอใจ จำนวน 123 รางวัล 
                        สาขาคุณภาพการบริหารจัดการภาครัฐมอบให้แก่หน่วยงานรัฐที่มีการพัฒนาคุณภาพการบริหารจัดการได้ทัดเทียมมาตรฐานสากลจำนวน 
                        24 รางวัล และสาขาการบริหารราชการแบบมีส่วนร่วมมอบให้แก่หน่วยงานรัฐที่มีความมุ่งมั่นตั้งใจในการพัฒนาประสิทธิภาพการบริหารราชการบนพื้นฐานความรับผิดชอบ 
                        และการมีส่วนร่วมของประชาชน จำนวน 66 รางวัล
                    </p>
                </div>
            </div>

            <div class="ss-icon-title">
                <em class="far fa-images"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        รูปภาพที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="gallery-grids pt-2 pb-3">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="grid lg-25 md-1-3">
                        <a class="ss-img horizontal bradius-round" href="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" data-fancybox="gallery">
                            <img class="d-none" src="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" alt="Image Fancybox Preview" />
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-book"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ข่าวที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids mt-2">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-04">
                            <a class="ss-img square" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                <a class="title p md fw-600" href="#">
                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                </a>
                                <div class="ss-stat">
                                    <div class="stat">
                                        8 มกราคม 2020
                                    </div>
                                    <div class="stat">
                                        <em class="far fa-eye mr-1"></em> 178
                                    </div>
                                </div>
                                <div class="arrow">
                                    <em class="far fa-arrow-alt-circle-right"></em>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
