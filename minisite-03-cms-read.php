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
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">ข่าวประชาสัมพันธ์</a>
                                    <a class="tab" href="#">เรื่องเด่นประเด็นดัง</a>
                                    <a class="tab" href="#">ข่าวสารรัฐมนตรี</a>
                                    <a class="tab" href="#">ข่าวสารผู้บริหาร</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="post-content sm">
                                <h6 class="h5 fw-500 lh-sm color-01 text-center sm-no-br">
                                    กระทรวงพลังงาน เร่งเครื่อง พลังงานเพื่อทุกคน <br>
                                    (Energy for All) ปี2563
                                </h6>
                                <div class="mt-2 mb-3">
                                    <?php include('component/post-header.php'); ?>
                                </div>
                                <img class="img" src="public/assets/app/images/content/10.jpg" alt="Post Content Image" />
                            </div>
                            <div class="post-content">
                                <h6 class="fw-300 color-01">
                                    “ทูตพลังงานรวมพลังพัฒนาและอนุรักษ์พลังงานสู่ความยั่งยืน รุ่นที่ 1” 
                                    จากสำนักงานพลังงานจังหวัดสมุทรปราการ สำนักงานปลัดกระทรวงพลังงาน
                                </h6>
                                <p class="mt-3 pt-1 lh-lg">
                                    เมื่อวันที่ 13 กันยายน 2562 สำนักงาน ก.พ.ร. จัดพิธีมอบรางวัลเลิศรัฐ ประจำปี พ.ศ. 2562 
                                    เพื่อเชิดชูหน่วยงานภาครัฐที่มีผลงานโดดเด่นกว่า 200 ผลงาน  โดยมี นายวิษณุ เครืองาม รองนายกรัฐมนตรี 
                                    เป็นประธานในพิธีมอบรางวัลเลิศรัฐ ประจำปี 2562 ในปีนี้มีหน่วยงานภาครัฐที่ได้รับรางวัลกว่า 219 ผลงาน 
                                    จากทั้งหมดที่ส่งเข้าประกวด 1,043 ผลงาน
                                </p>
                                <div class="grids ai-center">
                                    <div class="grid xl-40 lg-50 sm-100 mt-3 pt-1">
                                        <img class="img-content" src="public/assets/app/images/content/minisite-02.jpg" alt="Content Image" />
                                    </div>
                                    <div class="grid xl-60 lg-50 sm-100 mt-3 pt-1">
                                        <p class="lh-lg">
                                            นอกจากนี้ ยังจะมุ่งเน้นการยกระดับ ราคาสินค้าเกษตร ผ่านกลไก 3 ด้านได้แก่
                                            <ol class="p pl-4">
                                                <li class="lh-lg mt-1">
                                                    <span class="fw-600">พืชที่จะนำมาผลิตเป็นพลังงานชีวภาพ(ไบโอดีเซล เอทานอล)</span>
                                                    ที่ขณะนี้ได้กำหนดให้ดีเซลบี 10 เป็นน้ำมันพื้นฐานเริ่มต้ังแต่วันที่ 1 ม.ค.2563 ให้ช่วยดูดซับน้ำมันปาล์มดิบ(CPO) 
                                                    เพื่อยกระดับราคาปาล์ม จากน้ันจะทำเรื่องของอ้อยและมันสำปะหลังในส่วนของเอทานอล ที่จะผสมกับน้ำมันเบนซิน 
                                                    เพื่อยกระดับน้ำมันอี 20 เป็นน้ำมันพื้นฐาน
                                                </li>
                                                <li class="lh-lg mt-1">
                                                    <span class="fw-600">พืชที่จะส่งเสริมการปลูก</span>
                                                    เพื่อนำมาเป็นพลังงานโดยเฉพาะเช่น ไผ่ หญ้าเนเปียร์
                                                </li>
                                                <li class="lh-lg mt-1">
                                                    <span class="fw-600">วัสดุเหลือใช้ทางการเกษตร</span>
                                                    มาก่อให้เกิดมูลค่าเพิ่มด้านพลังงานเช่น ซังข้าวโพด
                                                </li>
                                            </ol>
                                        </p>
                                    </div>
                                </div>
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
                            <div class="mt-2 mb-3">
                                <?php
                                    $postFooter = ['tags'];
                                    include('component/post-footer-minisite.php');
                                ?>
                            </div>

                            <h6 class="fw-600 color-01 mt-4 pt-1">::: ไฟล์เอกสารที่เกี่ยวข้อง :::</h6>
                            <div class="gallery-grids mt-1">
                                <?php
                                    foreach([
                                        'pdf', 'doc', 'xls', 'ppt', 
                                        'jpg', 'gif', 'png', 'zip'
                                    ] as $d){
                                ?>
                                    <div class="grid lg-50 sm-100 mt-2">
                                        <div class="ss-file-01">
                                            <div class="icon-container">
                                                <div class="img-container">
                                                    <div class="img-wrapper">
                                                        <img src="public/assets/app/images/icon/file-<?= $d ?>.png" alt="File Icon" />
                                                    </div>
                                                </div>
                                                <p class="xs fw-200">
                                                    <span class="fw-600">0.78</span> MB
                                                </p>
                                            </div>
                                            <div class="text-container">
                                                <p class="fw-500 lh-sm color-black">
                                                    โครงการสนับสนุนการลงทุนติดตั้งใช้งาน
                                                    ระบบอบแห้งพลังงานแสงอาทิตย์
                                                </p>
                                                <div class="p xs mt-2">
                                                    <a class="color-01 h-color-02 fw-600 mr-3" href="#">
                                                        <em class="fas fa-arrow-circle-down mr-1"></em> 
                                                        ดาวน์โหลด ( <span class="color-black">109</span> )
                                                    </a>
                                                    <a class="color-gray h-color-02 fw-500" href="#">
                                                        <em class="fas fa-exclamation-triangle color-02 mr-1"></em>
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            
                            <h6 class="fw-600 color-01 mt-4 pt-2">::: รูปภาพที่เกียวข้อง :::</h6>
                            <div class="gallery-grids mt-2">
                                <div class="grid sm-40">
                                    <a class="ss-img square" href="public/assets/app/images/content/01.jpg" data-fancybox="gallery">
                                        <img class="d-none" src="public/assets/app/images/content/01.jpg" alt="Image Fancybox Preview" />
                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/01.jpg');"></div>
                                        <div class="hover-container">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid sm-60 mt-0">
                                    <div class="gallery-grids">
                                        <?php for($i=1; $i<7; $i++){?>
                                            <div class="grid sm-1-3">
                                                <a class="ss-img square" href="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" data-fancybox="gallery">
                                                    <img class="d-none" src="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" alt="Image Fancybox Preview" />
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                    <?php if($i==6){?>
                                                        <div class="hover-container op-100">
                                                            <p class="md color-white text-center">
                                                                <span class="h4 fw-500 lh-xs">40</span>
                                                                <br> ภาพ
                                                            </p>
                                                        </div>
                                                    <?php }else{?>
                                                        <div class="hover-container">
                                                            <div class="icon">
                                                                <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            
                            <h6 class="fw-600 color-01 mt-4 pt-2">::: วิดีโอไฮไลท์ :::</h6>
                            <div class="grids mt-2 pb-4">
                                <div class="grid xl-70 lg-2-3 sm-100 mt-0">
                                    <div class="post-video">
                                        <div class="wrapper">
                                            <video class="fit" controls="">
                                                <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="bg-mgray px-3 pt-3 pb-2 border bcolor-mgray">
                                        <p class="fw-300">
                                            <span class="fw-600">ชื่อคลิป:</span>
                                            วิดีโอแนะนำกระทรวงพลังงาน
                                        </p>
                                    </div>
                                </div>
                                <div class="grid xl-30 lg-1-3 sm-100 mt-2">
                                    <p class="lg fw-500 color-01">EMBED</p>
                                    <div class="mt-2">
                                        <textarea name="message" class="adaptive p xs d-block bg-fgray width-full no-bradius" rows="11" data-copy="1"><iframe id="inlineFrameExample" title="Inline Frame Example" width="300" height="200" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik"></iframe></textarea>
                                        <div class="btns text-center">
                                            <a class="btn btn-action btn-color-01 width-full no-bradius" data-copy="1" href="#">
                                                คัดลอกโค๊ด
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-control ss-border color-black mt-4">
                                <a class="list-btn color-black h-color-02" href="#">
                                    <div class="btn btn-social btn-color-06 mr-2">
                                        <em class="fas fa-arrow-left"></em>
                                    </div>
                                    <div class="text p sm lh-sm">
                                        ก.พลังงานแจงไม่ได้ยกเลิกส่งเสริม‘พลังงานชุมชน’
                                    </div>
                                </a>
                                <div class="list-icon color-01">
                                    <em class="fas fa-th-large"></em>
                                </div>
                                <a class="list-btn color-black h-color-02" href="#">
                                    <div class="text p sm lh-sm">
                                        B10 ดีเซลพื้นฐานใหม่ ช่วยเกษตรกรไทย
                                        ใส่ใจสิ่งแวดล้อม
                                    </div>
                                    <div class="btn btn-social btn-color-06 ml-2">
                                        <em class="fas fa-arrow-right"></em>
                                    </div>
                                </a>
                            </div>

                            <div class="ss-icon-title-02">
                                <div class="text-icon color-01">R</div>
                                <div class="text-wrapper">
                                    <div class="title color-01">ELATED NEWS</div>
                                    <div class="desc color-black">ข่าวที่เกี่ยวข้อง</div>
                                </div>
                            </div>
                            <div class="grids mt-2">
                                <?php for($i=0; $i<3; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <div class="ss-stat jc-space-between">
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-eye mr-1"></em> 178
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