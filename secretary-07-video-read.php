<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'วิดีโอ' ],
        ];
        $breadcrumbTitle = 'วิดีโอ';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-07.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black">
                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม 
                ประจำปี พ.ศ. 2562
            </h6>
            <div class="mt-2 mb-3">
                <?php include('component/post-header.php'); ?>
            </div>
            <div class="post-video width-full bradius-round ovf-hidden">
                <div class="wrapper">
                    <video class="fit" controls="">
                        <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="mb-3">
                <?php
                    $postFooter = ['icon-social'];
                    include('component/post-footer.php');
                ?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-film"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        วิดีโอที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids mt-2">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-04">
                            <a class="ss-img square" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                <a class="title p md fw-600" href="#">
                                    รายการเดินหน้าประเทศไทย ดีเซล B20 รหัสความสุข
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
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
