<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
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
                    [ 'url' => '#', 'name' => 'วารสารออนไลน์' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="ss-search-container bg-color-sgray pt-3 pb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาข่าวประชาสัมพันธ์" autocomplete="off" required />
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
        
    <div class="container" data-aos="fade-up" data-aos-delay="600">
        <div class="book-container">
            <div class="wow-book" id="wow-book">
                <?php for($i=1; $i<7; $i++){?>
                    <div><img src="public/assets/app/images/banner/0<?= $i ?>.jpg" alt="Page <?= $i ?>" /></div>
                <?php }?>
            </div>
        </div>
    </div>

    <section class="section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="ss-box-02 box-shadow no-bradius width-full">
                <h3 class="fw-200 mb-0">
                    รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรม ประจำปีงบประมาณ พ.ศ. 2558
                </h3>
                <div class="d-flex jc-space-between ai-center fw-wrap border-bottom pb-2">
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
                <div class="d-flex ai-center fw-wrap py-3">
                    <a class="btn custom-btn-blue btn-xl no-bradius mr-3" href="#">
                        <i class="fas fa-download mr-2 text-2xs"></i>
                        ดาวน์โหลด
                    </a>
                    <p class="color-dgray mt-0">
                        <span class="text-sm">ขนาดไฟล์ : 81.91 MB</span>
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
        </div>
    </section>
     
    <section class="content-03 section-padding bg-color-gray">
        <div class="container" data-aos="fade-up" data-aos-delay="0">
            <h3 class="text-center color-02 mb-3">วารสารออนไลน์ล่าสุด</h3>
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<8; $i++){?>
                        <div class="slide">
                            <div class="ss-img vertical bradius-0">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
                                <div class="card-hover-container">
                                    <div class="wrapper">
                                        <h6 class="title">
                                            รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรมประจำปีงบประาณ พ.ศ. 2562
                                        </h6>
                                        <div class="btns">
                                            <a class="btn" href="#">
                                                <i class="fas fa-search"></i>
                                            </a>
                                            <a class="btn" href="#">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                        <div class="stats">
                                            24-08-2563
                                            <span class="sep"></span>
                                            เปิดดู : 130
                                            <span class="sep"></span>
                                            80 หน้า
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="public/assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
