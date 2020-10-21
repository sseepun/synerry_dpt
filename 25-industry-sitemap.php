<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">แผนผังเว็บไซต์</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section class="sitemap-01">
        <div class="container">
            <?php for($i=0; $i<8; $i++){?>
                <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon bg-color-07 color-white">0<?= $i ?></div>
                    <h4 class="fw-600">หน้าแรก</h4>
                </div>
                <div class="sitemap-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="grids">
                        <div class="grid lg-1-3 mt-0">
                            <div class="title">
                                <a href="#">ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม</a>
                            </div>
                            <ul>
                                <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
                                <li><a href="#">ข่าวอุตสาหกรรมจังหวัด</a></li>
                                <li><a href="#">อินโฟกราฟฟิก</a></li>
                            </ul>
                        </div>
                        <div class="grid lg-1-3 mt-0">
                            <div class="title">
                                <a href="#">ข่าวจัดซื้อจัดจ้าง/รับสมัครงาน</a>
                            </div>
                            <ul>
                                <li><a href="#">ประกาศจัดซื้อจัดจ้าง</a></li>
                                <li><a href="#">ร่าง TOR/TOR และราคากลาง</a></li>
                                <li><a href="#">ผลการจัดซื้อจัดจ้าง</a></li>
                            </ul>
                        </div>
                        <div class="grid lg-1-3 mt-0">
                            <div class="title">
                                <a href="#">ข่าวรับสมัครงาน</a>
                            </div>
                            <div class="title">
                                <a href="#">รวมข่าวสารจากเว็บไซต์ภายใต้ สป. อุตสาหกรรม</a>
                            </div>
                            <div class="title">
                                <a href="#">รวมข่าวสารจากสำนักงานอุตสาหกรรมจังหวัด</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/31.jpg"></div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
