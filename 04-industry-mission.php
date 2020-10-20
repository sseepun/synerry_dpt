<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/26.jpg">
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
                            [ 'url' => '#', 'name' => 'พันธกิจ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <div class="mission-01 lazy-bg mt-3" data-src="public/assets/app/images/bg/27.jpg">
                        <div class="text-wrapper">
                            <ul>
                                <li>
                                    ส่งเสริมและพัฒนาศักยภาพของผู้ประกอบการ
                                    ให้มีความเข้มแข็ง และสามารถแข่งขันได้ใน
                                    ตลาดโลก
                                </li>
                                <li>
                                    ขับเคลื่อนและพัฒนาระบบนิเวศอุตสาหกรรม
                                    (Ecosystem) เพื่อเปลี่ยนผ่านอุตสาหกรรม
                                    ไทยสู่อุตสาหกรรม 4.0
                                </li>
                                <li>
                                    ส่งเสริมการประกอบกิจการอุตสาหกรรมให้เป็นมิตรกับสิ่งเแวดล้อม
                                </li>
                                <li>
                                    บูรณาการดำเนินงานหน่วยงานภายในและ
                                    ภายนอกกระทรวง เพื่อให้บรรลุผลสัมฤทธิ์ตาม เป้าหมาย
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
