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
                <h2 class="fw-100 mb-0">ข่าวประชาสัมพันธ์</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="grids">

                <div class="grid lg-25 md-35 sm-100 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="grid lg-75 md-65 sm-100 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    <?php include_once('component/list-header.php'); ?>

                    <div class="grids">
                        <?php for($i=0; $i<6; $i++){?>
                            <div class="grid sm-100 mt-4">
                                <div class="ss-card-02">
                                    <div class="block">
                                        <a class="ss-img square bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= ($i%7) +1; ?>.jpg"></div>
                                            <div class="hover-container">
                                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="block">
                                        <div class="post-card post-card-06 btn-on-hover">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    “สุริยะ” เดินหน้าเยียวยาผู้ประกอบการกระทบโควิด เว้นค่าธรรมเนียมใบอนุญาต มอก. 
                                                    กว่า 10,000 ราย เริ่ม 10 ตุลาคม 2563 นี้ 
                                                </a>
                                            </div>
                                            <div class="d-flex ai-center stats">
                                                <div class="date mr-4">13.08.2563</div>
                                                <div class="d-flex view">
                                                    <div class="icon"><i class="fas fa-eye"></i></div>
                                                    268
                                                </div>
                                            </div>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม เร่งให้ความช่วยเหลือผู้ประกอบการที่ได้รับผลกระทบจากโควิด  หลัง ครม. เห็นชอบมาตรการเยียวยายกเว้นค่าธรรมเนียมต่างๆ 
                                                ของ สมอ. เริ่ม 10 ตุลาคม 2563 นี้ ถึงวันที่ 30 เมษายน 2564 นายสุริยะ จึงรุ่งเรืองกิจ รัฐมนตรีว่าการกระทรวงอุตสาหกรรม เปิดเผยว่า 
                                                ได้มอบหมายให้ สมอ. เสนอมาตรการเยียวยาผู้ประกอบการที่ได้รับผลกระทบจากโควิด 19 โดยให้ยกเว้นค่าธรรมเนียมใบอนุญาต มอก. 
                                                และค่าธรรมเนียมใบรับรองระบบงาน ISO เพื่อให้ความช่วยเหลือผู้ประกอบการกว่า 10,000 ราย รวมมูลค่ากว่า 110 ล้านบาท ซึ่ง ครม. 
                                                ได้เห็นชอบเมื่อวันที่ 21 กรกฎาคม 2563 ที่ผ่านมา โดยจะมีผลบังคับใช้ตั้งแต่วันที่ 10 ตุลาคม 2563 นี้ จนถึง
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
