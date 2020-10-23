<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">พันธกิจ</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/08.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'พันธกิจ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <div class="mission-01 lazy-bg mt-3" data-src="public/assets/app/images/bg/27.jpg">
                        <div class="text-wrapper">
                            <ul>
                                <li>
                                    ขับเคลื่อนและบูรณาการนโยบายและ
                                    ยุทธศาสตร์ เพื่อยกระดับอุตสาหกรรมไทยสู่
                                    อุตสาหกรรม 4.0
                                </li>
                                <li>
                                    กำกับ ดูแล ส่งเสริมและพัฒนาศักยาภาพทาง
                                    การแข่งขันของภาคอุตสาหกรรมไทย
                                </li>
                                <li>
                                    เพิ่มผลิตภาพปัจจัยการผลิตรวมของ
                                    อุตสหกรรมเป้าหมาย
                                </li>
                                <li>
                                    ยกระดับศักยภาพธุรกิจอุตสาหกรรมให้
                                    สามารถแข่งขันและอยู่ร่วมกับสังคมและ
                                    ชุมชนได้
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
