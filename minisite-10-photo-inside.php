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
                    [ 'url' => '#', 'name' => 'คลังภาพ' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-04">
        <div class="top-container" data-aos="fade-up" data-aos-delay="300" 
        style="background-image:url('public/assets/app/images/bg/32.jpg')">
            <div class="container">
                <div class="ss-box-02 width-full no-bradius box-shadow bg-color-white">
                    <h3 class="fw-200">
                        รวมสถานที่ท่องเที่ยวจังหวัดเชียงราย วันที่ 8 กรกฎาคม 2563 
                    </h3>
                    <div class="d-flex jc-space-between ai-center fw-wrap pb-2">
                        <p class="mt-0 mr-3 color-dgray text-nm">
                            24-08-2563
                            <span class="sep">|</span>
                            เปิดดู : 130
                            <span class="sep">|</span>
                            77 หน้า
                        </p>
                        <div class="social-btns mt-2">
                            <a class="btn-social" href="#">
                                <img src="public/assets/app/images/social/fb.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#">
                                <img src="public/assets/app/images/social/tw.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#">
                                <img src="public/assets/app/images/social/ln.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#">
                                <img src="public/assets/app/images/social/link.png" alt="Social Icon">
                            </a>
                        </div>
                    </div>

                    <div class="border">
                        <div class="d-flex ai-center fw-wrap py-3 px-3">
                            <a class="btn custom-btn-blue btn-xl no-bradius mr-3" href="#">
                                <i class="fas fa-download mr-2 text-2xs"></i>
                                ดาวน์โหลด
                            </a>
                            <p class="mt-0">
                                <div class="color-dgray text-sm">
                                    รูปภาพ : 
                                    <span class="fw-600 color-09">18</span>
                                    <span class="sep">|</span>
                                    ขนาดไฟล์ : 
                                    <span class="fw-600 color-09">810.84 KB</span>
                                </div>
                            </p>
                        </div>
                        <div class="shortcode bg-color-gray">
                            <div class="wrapper">
                                <label>Embed code</label>
                                <input type="text" value="Test code" />
                                <button class="btn">Copy</button>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-grids my-4">
                        <?php for($i=0; $i<16; $i++){?>
                            <div class="grid lg-25 md-1-3 sm-50">
                                <a class="ss-img bradius-0" href="public/assets/app/images/banner/01.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-container">
                                        <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ss-search-container" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาคลังภาพ" autocomplete="off" required />
                    <button type="submit">
                        <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                    </button>
                    <div class="suggestion">
                        <div class="scroll-wrapper" data-simplebar>
                            <?php for($i=0; $i<8; $i++){?>
                                <a class="item" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="text">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                        กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="content-03 section-padding bg-color-gray">
        <div class="container" data-aos="fade-up" data-aos-delay="0">
            <h3 class="text-center color-02 mb-3">คลังภาพล่าสุด</h3>
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<8; $i++){?>
                        <div class="slide">
                            <a class="ss-img bradius-0" href="#">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                <div class="card-hover-container type-02">
                                    <div class="wrapper">
                                        <div class="icon"><i class="fas fa-camera"></i></div>
                                        <h6 class="title">
                                            รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรมประจำปีงบประาณ พ.ศ. 2562
                                        </h6>
                                        <div class="stats">
                                            24-08-2563
                                            <span class="sep"></span>
                                            เปิดดู : 130
                                            <div class="btn-float">อ่านเพิ่ม</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
