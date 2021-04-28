<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<5; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/<?= sprintf('%02d', $i%2+1) ?>.jpg');">
                        <div class="container text-center">
                            <h6 class="h1 fw-500 color-02 animate" style="--delay:.75s;">
                                <span class="font-01">สถาปนิกหลวง</span>
                            </h6>
                            <p class="h6 fw-400 animate" style="--delay:.9s;">
                                <span class="font-01">
                                    ในฐานะช่างของแผ่นดิน เรามุ่งให้บริการงานช่างและให้คำปรึกษาด้านช่างทุกระดับ
                                </span>
                            </p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="pattern-container">
                <div class="container">
                    <div class="pattern" style="background-image:url('public/assets/app/images/misc/pattern-01.png');"></div>
                </div>
            </div>
            <div class="bullet">
                <div class="bullet-wrapper">
                    <div class="dots"></div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-01" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="contents">
                <?php
                    foreach([
                        [ 'num' => '๑', 'title' => 'การบริการประชาชน' ],
                        [ 'num' => '๒', 'title' => 'ข่าวสารประชาสัมพันธ์' ],
                        [ 'num' => '๓', 'title' => 'กฏหมายแบบฟอร์ม' ],
                        [ 'num' => '๔', 'title' => 'เผยแพร่ความรู้' ],
                        [ 'num' => '๕', 'title' => 'ติดต่อสอบถาม' ],
                        [ 'num' => '๖', 'title' => 'แผนงาน / รายงานผล' ],
                    ] as $i=>$d){
                ?>
                    <a class="content" href="#">
                        <div class="bg-container clip-path-01">
                            <div class="wrapper">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/intro-<?= sprintf('%02d', $i+1) ?>.jpg');"></div>
                                <div class="filter"></div>
                                <div class="gross"></div>
                            </div>
                        </div>
                        <div class="icon-container">
                            <img src="public/assets/app/images/icon/handling.png" alt="Image Icon" />
                        </div>
                        <div class="text-container">
                            <div class="wrapper">
                                <div class="num h2 lg fw-500">
                                    <span class="font-01"><?= $d['num'] ?>.</span>
                                </div>
                                <h6 class="title p"><?= $d['title'] ?></h6>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="section-padding ovf-hidden">
        <div class="container">
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
                <div class="ss-icon-title-01">
                    <div class="text-icon fw-400 color-03">ข้</div>
                    <div class="text-wrapper">
                        <div class="title fw-400 color-03">อมูลข่าวสารประชาสัมพันธ์</div>
                        <div class="desc fw-200 color-dark">
                            กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-container mt-2" data-aos="fade-up" data-aos-delay="150">
                <div class="tabs tabs-01">
                    <?php
                        foreach([
                            'ข่าวกิจกรรม', 'ข่าวประชาสัมพันธ์', 'ข่าวตัดจากหนังสือพิมพ์',
                            'ข่าวกรม', 'วารสารกรมฯ', 'คลังข่าวมหาดไทย' 
                        ] as $i=>$d){
                    ?>
                        <a class="tab <?php if($i==0)echo 'active'; ?>" href="#" data-tab="<?= $i ?>">
                            <?= $d ?>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php for($i=0; $i<6; $i++){?>
                        <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                            <div class="grids">
                                <?php for($k=0; $k<4; $k++){ $j = ($i+$k)%4+1;?>
                                    <div class="grid lg-25">
                                        <?php include('component/ss-card-01.php'); ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                    <div class="d-flex jc-center mt-5">
                        <?php include('component/pagination-01.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-01" style="background-image:url('public/assets/app/images/bg/about-01.jpg');">
        <div class="container">
            <div class="d-flex jc-center">
                <div class="text-container">
                    <h6 class="h3 fw-500" data-aos="fade-up" data-aos-delay="0">
                        เราทำความ ดี ด้วยหัวใจ
                    </h6>
                    <p class="lg" data-aos="fade-up" data-aos-delay="150">
                        <span class="font-01">
                            เพื่อชุมชนและสังคม พัฒนาด้านแหล่งน้ำและปรับปรุงภูมิทัศน์
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <img class="hero" src="public/assets/app/images/hero/01.png" alt="Image Hero" data-aos="fade-left" data-aos-delay="300" />
    </section>
    
    <section class="section-padding">
        <div class="container">
            <div class="grids">

                <div class="grid md-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="tab-container">
                        <div class="tabs tabs-02">
                            <a class="tab active" href="#" data-tab="0">
                                จัดซื้อจัดจ้าง (RSS บัญชีกลาง)
                            </a>
                            <a class="tab" href="#" data-tab="1">
                                จัดซื้อจัดจ้าง กรมโยธาและผังเมือง
                            </a>
                        </div>
                        <div class="tab-contents">
                            <?php for($i=0; $i<2; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <?php for($j=0; $j<8; $j++){?>
                                        <?php include('component/ss-card-02.php'); ?>
                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="btns text-right mt-3">
                                <a class="btn btn-more" href="#">
                                    ดูทั้งหมด
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="grids">
                        <div class="grid md-100 lg-50 mt-0">
                            <div class="grids">
                                <div class="grid sm-100 xl-mt-0 lg-mt-0 md-mt-0">
                                    <div class="ss-slot clip-path-01 border bg-04 bcolor-04">
                                        <div class="wrapper color-white">
                                            <p class="xxs fw-100">กรมโยธาธิการและผังเมือง</p>
                                            <p class="md fw-200">ปิดประกาศ</p>
                                            <p class="h6 fw-600 mt-4">
                                                <span class="color-01 text-4xl">60</span> วัน
                                            </p>
                                        </div>
                                        <div class="pattern-container">
                                            <img src="public/assets/app/images/icon/pattern-01.png" alt="Image Pattern" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100">
                                    <div class="ss-slot clip-path-01 border bg-05 bcolor-04">
                                        <div class="wrapper color-white">
                                            <p class="xxs fw-100">กรมโยธาธิการและผังเมือง</p>
                                            <p class="md fw-200">ปิดประกาศ</p>
                                            <p class="h6 fw-600 mt-4">
                                                <span class="color-01 text-4xl">15</span> วัน
                                            </p>
                                        </div>
                                        <div class="pattern-container">
                                            <img src="public/assets/app/images/icon/pattern-02.png" alt="Image Pattern" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid md-100 lg-50 xl-mt-0 lg-mt-0">
                            <div class="ss-slot adaptive clip-path-01 border bg-06 bcolor-06">
                                <div class="wrapper color-white">
                                    <p class="sm fw-100">กรมโยธาธิการและผังเมือง</p>
                                    <p class="h6 sm fw-200">ปิดประกาศ</p>
                                    <p class="h4 fw-600 mt-4">
                                        <span class="color-01 text-4xl">90</span>
                                    </p>
                                    <p class="h6 fw-200">วัน</p>
                                </div>
                                <div class="pattern-container">
                                    <img src="public/assets/app/images/icon/pattern-03.png" alt="Image Pattern" />
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-100">
                            <div class="d-flex">
                                <div class="ss-tab">ชวนดูวีดีโอ</div>
                            </div>
                            <div class="slide-container slide-container-01">
                                <div class="slides">
                                    <?php for($j=0; $j<4; $j++){?>
                                        <div class="slide">
                                            <?php include('component/ss-card-03.php'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="dots"></div>
                                <div class="btns-absolute">
                                    <a class="btn btn-more" href="#">
                                        ดูทั้งหมด
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pt-4">
        <div class="tab-container">
            <div class="container">
                <div class="tabs jc-start tabs-01" data-aos="fade-up" data-aos-delay="0">
                    <a class="tab active" href="#" data-tab="0">
                        หน่วยงานภายใน
                    </a>
                    <a class="tab" href="#" data-tab="1">
                        หน่วยงานภายนอก
                    </a>
                </div>
            </div>
            <div class="tab-contents"data-aos="fade-up" data-aos-delay="150">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                        <div class="slide-container slide-container-02">
                            <div class="slides">
                                <?php for($j=0; $j<8; $j++){?>
                                    <div class="slide">
                                        <a class="ss-card ss-card-04" href="#">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/client/<?= sprintf('%02d', $j%6+1) ?>.jpg');"></div>
                                            <div class="text-container">
                                                <h6 class="p xs fw-400 color-white">
                                                    ระเบียบกรมโยธาธิการ <br> และผังเมืองว่าด้วยการ
                                                </h6>
                                                <p class="xxs fw-200 color-white mt-1">
                                                    ให้บริการวิเคราะห์วิจัยและทดสอบวัสดุ
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>
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
