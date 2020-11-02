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
                <h2 class="fw-100 mb-0">โครงสร้างผู้บริหาร</h2>
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
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'โครงสร้างผู้บริหาร' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <div class="about-01">
                        <div class="top-container lazy-bg" data-src="public/assets/app/images/bg/58.jpg">
                            <img class="hero team-selector pos-0" data-team="0" src="public/assets/app/images/hero/14.png" alt="Hero" />
                            <img class="hero team-selector pos-1" data-team="1" src="public/assets/app/images/hero/13.png" alt="Hero" />
                            <img class="hero team-selector pos-2" data-team="2" src="public/assets/app/images/hero/12.png" alt="Hero" />
                            <img class="hero team-selector pos-3" data-team="3" src="public/assets/app/images/hero/11.png" alt="Hero" />
                            <div class="text-container lazy-bg" data-src="public/assets/app/images/bg/59.jpg">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="text-wrapper about-01-target <?php if($i==1)echo 'active'; ?>" data-team="<?php echo $i; ?>">
                                        <h1>นายสุริยะ จึงรุ่งเรืองกิจ</h1>
                                        <p>รัฐมนตรีว่าการกระทรวงอุตสาหกรรม</p>
                                        <img class="signature" src="public/assets/app/images/hero/15.png" alt="Signature" />
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="bottom-container bg-color-gray border">
                            <?php for($i=0; $i<4; $i++){?>  
                                <div class="wrapper about-01-target <?php if($i==1)echo 'active'; ?>" data-team="<?php echo $i; ?>">
                                    <div class="about-row border-bottom">
                                        <div class="table-wrapper py-0">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="about-title">ตำแหน่งปัจจุบัน</h6></td>
                                                        <td>รัฐมนตรีว่าการ กระทรวงอุตสาหกรรม</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="about-row border-bottom">
                                        <h6 class="about-title">ประวัติการทำงาน</h6>
                                        <div class="grids mt-2">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <ul class="ss-list my-0">
                                                    <li>รัฐมนตรีว่าการ กระทรวงคมนาคม</li>
                                                    <li>รองนายกรัฐมนตรี</li>
                                                    <li>รัฐมนตรีช่วยว่าการ กระทรวงอุตสาหกรรม</li>
                                                    <li>ที่ปรึกษารัฐมนตรีว่าการกระทรวงอุตสาหกรรม</li>
                                                    <li>ที่ปรึกษารัฐมนตรีช่วยว่าการ กระทรวงแรงงาน และสวัสดิการสังคม</li>
                                                    <li>ที่ปรึกษารัฐมนตรีประจำสำนักนายกรัฐมนตรี</li>
                                                    <li>ที่ปรึกษารัฐมนตรีช่วยว่าการ กระทรวงเกษตร และสหกรณ์</li>
                                                    <li>ที่ปรึกษารัฐมนตรีช่วยว่าการ กระทรวงพาณิชย์</li>
                                                    <li>กรรมการ การปิโตรเลียมแห่งประเทศไทย (ปตท.)</li>
                                                </ul>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <ul class="ss-list my-0">
                                                    <li>กรรมการ บริษัท วิทยุการบินแห่งประเทศไทย</li>
                                                    <li>ประธานกรรมการ บริษัท ซัมมิทอิเล็กทรอนิกส์ คอมโพเนนท์ จำกัด</li>
                                                    <li>ประธานกรรมการ บริษัท ซัมมิท แอดวานซ์ แมททีเรียล จำกัด</li>
                                                    <li>กรรมการผู้จัดการ บริษัท โอโดซีพ อินดัสตรี จำกัด</li>
                                                    <li>กรรมการผู้จัดการ บริษัท ซัมมิท โอโตบอดี้ อินดัสตรี จำกัด</li>
                                                    <li>กรรมการบริหาร บริษัท ซัมมิท ไพน์เฮิร์สท กอล์ฟ แอนด์ คันทรีคลับ จำกัด</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-row">
                                        <h6 class="about-title">ประวัติการศึกษา</h6>
                                        <div class="table-wrapper py-0 mt-2">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>ระดับปริญญาตรี</td>
                                                        <td>
                                                            วิศวกรรมศาสตร์บัณฑิต จากมหาวิทยาลัย แคลิฟอร์เนีย 
                                                            เบิร์กลีย์ ประเทศสหรัฐอเมริกา
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ระดับมัธยม</td>
                                                        <td>โรงเรียนเตรียมอุดมศึกษา</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
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