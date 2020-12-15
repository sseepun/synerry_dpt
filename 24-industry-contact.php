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
                <h2 class="fw-100 mb-0">ติดต่อเรา</h2>
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
                            [ 'url' => '#', 'name' => 'ติดต่อเรา' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <div class="grids">
                        <div class="grid xl-1-3 sm-100 mt-0">
                            <h3 class="color-07 mb-0">กระทรวงอุตสาหกรรม</h3>
                            <p class="text-nm color-dark mt-1 mb-2">
                                75/6 ถนนพระรามที่ 6 แขวงทุ่งพญาไท <br>
                                ราชเทวี กรุงเทพมหานคร 10400
                            </p>
                            <div class="social-btns mb-1">
                                <!-- <a class="btn-social" href="#">
                                    <img src="public/assets/app/images/social/fb.png" alt="Social Icon" />
                                </a>
                                <a class="btn-social" href="#">
                                    <img src="public/assets/app/images/social/tw.png" alt="Social Icon" />
                                </a>
                                <a class="btn-social" href="#">
                                    <img src="public/assets/app/images/social/ln.png" alt="Social Icon" />
                                </a> -->
                                <a class="btn-social dark btn-social-fw" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn-social dark btn-social-tw" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn-social dark btn-social-yt" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a class="btn-social dark btn-social-ln" href="#">
                                    <i class="fab fa-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid xl-2-3 sm-100 lg-mt-0 md-mt-0 sm-mt-0 xs-mt-0">
                            <div class="gallery-grids">
                                <div class="grid md-1-3">
                                    <!-- <div class="contact-card lazy-bg" data-src="public/assets/app/images/bg/53.jpg"> -->
                                    <div class="contact-card">
                                        <div class="tag"><i class="fas fa-phone"></i></div>
                                        <p>โทรศัพท์</p>		
                                        <h6><a href="tel:022023000">02-2023000</a></h6>
                                    </div>
                                </div>
                                <div class="grid md-1-3">
                                    <!-- <div class="contact-card lazy-bg" data-src="public/assets/app/images/bg/54.jpg"> -->
                                    <div class="contact-card">
                                        <div class="tag"><i class="fas fa-fax"></i></div>
                                        <p>โทรสาร</p>		
                                        <h6><a href="tel:022023048">02-2023048</a></h6>
                                    </div>
                                </div>
                                <div class="grid md-1-3">
                                    <!-- <div class="contact-card lazy-bg" data-src="public/assets/app/images/bg/55.jpg"> -->
                                    <div class="contact-card">
                                        <div class="tag"><i class="fas fa-envelope"></i></div>
                                        <p>อีเมล์</p>		
                                        <h6><a class="text-sm" href="mailto:info@industry.go.th">
                                            info@industry.go.th
                                        </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="" method="POST" class="ss-box ss-box-03 ss-box-center">
                        <h3 class="color-07 text-center mt-5 mb-0">แบบฟอร์มติิดต่อ</h3>
                        <p class="nm text-center color-dark sm-no-br mt-1">
                            หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้
                            <br> ทางเจ้าหน้าที่ะคำเนินการตามคำขอโดยเร็วที่สุด
                        </p>
                        <p class="text-sm text-center color-dark mt-1">
                            กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย *
                        </p>
                        <div class="row mt-4">
                            <div class="col-sm-6 form-group">
                                <label>เลือกหน่วยงาน <span class="color-07">*</span></label>
                                <div class="select-wrapper">
                                    <select class="form-control no-bradius" required>
                                        <option value="">เลือกหน่วยงาน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>ชื่อและนามสกุล <span class="color-07">*</span></label>
                                <input type="text" class="form-control no-bradius" required />
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>หมายเลขโทรศัพท์ <span class="color-07">*</span></label>
                                <input type="text" class="form-control no-bradius" required />
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>อีเมล์ <span class="color-07">*</span></label>
                                <input type="email" class="form-control no-bradius" required />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>ข้อความ <span class="color-07">*</span></label>
                                <textarea rows="4" class="form-control no-bradius" required></textarea>
                            </div>
                        </div>

                        <div class="d-flex ai-center jc-space-between fw-wrap">
                            <div class="captcha-container mr-2">
                                <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                            </div>
                            <div class="btns my-3">
                                <button type="submit" class="btn btn-round custom-btn-09">
                                    ส่งข้อความ <i class="far fa-arrow-alt-circle-right ml-2"></i>
                                </button>
                                <a class="btn btn-round custom-btn-gray btn-form-clear" href="#">
                                    ล้างข้อมูล <i class="fas fa-times ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="map-container mt-4">
                        <img class="img" src="public/assets/app/images/bg/56.jpg" alt="Map" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
