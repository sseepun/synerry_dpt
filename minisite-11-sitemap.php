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
                    [ 'url' => '#', 'name' => 'โครงสร้างเว็บไซต์' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="sitemap-02" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="title-wrapper">
                <h1 class="title">โครงสร้างเว็บไซต์</h1>
            </div>
            <div class="grids">

                <div class="grid lg-1-3 md-50 sm-50">
                    <div class="sitemap-title">
                        <div class="num">01</div>
                        เกี่ยวกับสำนักงาน
                    </div>
                    <ul>
                        <li><a href="#">วิสัยทัศน์</a></li>
                        <li><a href="#">พันธกิจ</a></li>
                        <li><a href="#">ยุทธศาสตร์</a></li>
                        <li><a href="#">โครงสร้างบุคลากร</a></li>
                        <li><a href="#">โครงสร้างองค์กร</a></li>
                    </ul>
                </div>

                <div class="grid lg-1-3 md-50 sm-50">
                    <div class="sitemap-title">
                        <div class="num">02</div>
                        กฏ ระเบียบ
                    </div>
                    <ul>
                        <li><a href="#">กฏ ระเบียบ</a></li>
                        <li><a href="#">ประกาศ</a></li>
                        <li><a href="#">คำสั่ง</a></li>
                    </ul>
                </div>

                <div class="grid lg-1-3 md-50 sm-50">
                    <div class="sitemap-title">
                        <div class="num">03</div>
                        คู่มือประชาชน
                    </div>
                    <ul>
                        <li><a href="#">คู่มือประชาชน</a>
                            <ul>
                                <li><a href="#">กลุ่มนโยบายและแผนงาน</a></li>
                                <li><a href="#">กลุ่มส่งเสริมและพัฒนาอุตสาหกรรม</a></li>
                                <li><a href="#">กลุ่มอุตสาหกรรมพื้นฐานและการเหมืองแร่</a></li>
                                <li><a href="#">กลุ่มโรงงานอุตสาหกรรม</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="grid lg-1-3 md-50 sm-50">
                    <div class="sitemap-title">
                        <div class="num">04</div>
                        นโยบายแผนและรายงานผล
                    </div>
                    <ul>
                        <li><a href="#">แผนงาน</a></li>
                        <li><a href="#">รายงานผล</a>
                            <ul>
                                <li><a href="#">รายงานงบการเงิน</a></li>
                                <li><a href="#">รายงานผลการปฏิบัติงาน</a></li>
                                <li><a href="#">รายงานอื่นๆ</a></li>
                            </ul>
                        </li>
                        <li><a href="#">การส่งเสริมความโปร่งใส</a>
                            <ul>
                                <li><a href="#">จัดซื้อจัดจ้าง</a></li>
                                <li><a href="#">การมีส่วนร่วม</a></li>
                                <li><a href="#">มาตรการ</a></li>
                            </ul>
                        </li>
                        <li><a href="#">การส่งเสริมจริยธรรม</a></li>
                        <li><a href="#">คู่มือ</a></li>
                        <li><a href="#">การจัดการเรื่องร้องเรียน</a></li>
                    </ul>
                </div>

                <div class="grid lg-1-3 md-50 sm-50">
                    <div class="sitemap-title">
                        <div class="num">05</div>
                        ติดต่อสำนักงาน
                    </div>
                    <ul>
                        <li><a href="#">ติดต่อสำนักงาน</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
