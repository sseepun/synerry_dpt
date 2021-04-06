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
                        <div class="title fw-400 color-03">อมูลขาวสารประชาสัมพันธ์</div>
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
                            <?= $i ?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <?php $categories = ['ข่าวสาร สนร.', 'ข่าวทั่วไป', 'รับสมัครทุน', 'รับสมัครภาค ก.']; ?>
    <section class="section-padding">
        <div class="container">
            <div class="tab-container">
                <div class="d-flex ai-center jc-space-between fw-wrap">
                    <h6 class="h3 fw-600" data-aos="fade-up" data-aos-delay="0">
                        อัพเดทข่าวสาร สนร.
                    </h6>
                    <div class="tabs tabs-03 width-auto px-0 py-2" data-aos="fade-up" data-aos-delay="150">
                        <?php foreach($categories as $j=>$k){?>
                            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                <?= $k ?>
                            </a>
                        <?php }?>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach($categories as $j=>$k){?>
                        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                            <div class="grids">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="grid xl-25 lg-50 sm-50">
                                        <div class="ss-card ss-card-04">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <div class="card-tag"><?= $k ?></div>
                                                <a class="title p md fw-600" href="#">
                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                </a>
                                                <div class="ss-stat jc-start">
                                                    <div class="stat">
                                                        8 มกราคม 2020
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-eye mr-1"></em> 178
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="btns text-center mt-4 pt-2">
                                <a class="btn btn-action btn-color-p-inverse btn-md btn-min-width" href="#">
                                    ดูทั้งหมด
                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-fgray border-top bcolor-fgray">
        <div class="container">
            <h6 class="h3 fw-600" data-aos="fade-up" data-aos-delay="0">
                ติดต่อ สนร.
            </h6>
            <div class="grids mt-3">
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                    <p class="md">
                        1906 23rd Street, N.W., Washington D.C. 20008
                    </p>
                    <p class="sm mt-4">
                        หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้
                        ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                    </p>
                    <div class="mt-2" data-aos="fade-up" data-aos-delay="300">
                        <form action="/" method="POST">
                            <div class="grids">
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">อีเมล <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">เนื้อเรื่อง <span class="text-danger">*</span></label>
                                        <input type="text" name="subject" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">ข้อความ <span class="text-danger">*</span></label>
                                        <textarea name="message" rows="5" class="form-control" required title="General Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-3">
                                <button type="submit" class="btn btn-action btn-color-p btn-min-width">
                                    ส่งข้อความ
                                </button>
                                <button type="reset" class="btn btn-action btn-color-p-inverse btn-min-width">
                                    ล้างข้อมูล
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="grid lg-50 sm-100 xl-mt-0 lg-mt-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="map-container">
                        <div class="fit img-fill" style="background-image:url('public/assets/app/images/misc/map.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="popup-container simple" data-popup="subscribe">
        <div class="wrapper">
            <div class="popup-box border bcolor-white bg-white px-2 py-2">
                <div class="img-container">
                    <img src="public/assets/app/images/misc/popup-01.jpg" alt="Popup Banner">
                </div>
                <div class="d-flex ai-center jc-center mt-2">
                    <div class="form-check sm mr-4">
                        <input type="checkbox" class="form-check-input" id="show-toggle" value="1" title="General Checkbox Input" />
                        <label for="show-toggle">ไม่ต้องแสดงอีก</label>
                    </div>
                    <a class="btn btn-action btn-color-01 btn-round btn-sm btn-popup-toggle px-5" href="#" data-popup="subscribe">
                        <i class="far fa-times-circle color-white mr-1"></i> ปิด
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
