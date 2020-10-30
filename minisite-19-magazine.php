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
                    [ 'url' => '#', 'name' => 'วารสารออนไลน์' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-06 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>
        <div class="container pb-4 position-relative">
            <h3 class="text-center color-white">
                วารสารออนไลน์
            </h3>
        </div>

        <div class="ss-search-container bg-color-white pt-4 pb-4 mb-4">
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
        </div>

        <div class="container">
            <?php include_once('component/list-header.php'); ?>
            <div class="grids">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="grid xl-25 lg-1-3 md-50 sm-100 box-shadow">
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
            <?php include_once('component/list-footer.php'); ?>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
