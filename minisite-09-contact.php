<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ติดต่อหน่วยงาน' ],
        ];
        $breadcrumbTitle = 'ติดต่อหน่วยงาน';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab" href="#">คำถามที่พบบ่อย</a>
                                    <a class="tab active" href="#">ติดต่อหน่วยงาน</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 xl-mt-0 lg-mt-0 md-mt-0">
                            
                            <div class="contact-01 color-black pb-2">
                                <div class="grids">
                                    <div class="grid lg-50 sm-100">
                                        <h6 class="h5 fw-500 color-01 text-center">
                                            กระทรวงพลังงาน
                                        </h6>
                                        <p class="text-center sm-no-br mt-1">
                                            อาคาร บี ศูนย์เอนเนอร์ยี่ คอมเพล็กซ์ 555/2 ถนนวิภาวดีรังสิต <br>
                                            แขวงจตุจักร เขตจตุจักร กรุงเทพฯ 10900
                                        </p>
                                        <div class="icon-container mt-3">
                                            <div class="icon-wrapper">
                                                <div class="icon-card">
                                                    <div class="icon">
                                                        <em class="fas fa-mobile-alt color-01"></em>
                                                    </div>
                                                    <div class="text-wrapper">
                                                        <a class="p fw-600 color-black h-color-02" href="">
                                                            02 140-6000
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="icon-card">
                                                    <div class="icon">
                                                        <em class="fas fa-print color-01"></em>
                                                    </div>
                                                    <div class="text-wrapper">
                                                        <a class="p fw-600 color-black h-color-02" href="">
                                                            02 140-6288
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="icon-card">
                                                    <div class="icon">
                                                        <em class="fas fa-envelope color-01"></em>
                                                    </div>
                                                    <div class="text-wrapper">
                                                        <a class="p fw-600 color-black h-color-02" href="">
                                                            servicelink@energy.go.th
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btns text-center mt-3">
                                            <span class="p fw-500 mr-2">ติดตามผ่าน</span>
                                            <a class="btn btn-social btn-social-lg btn-color-06" href="#">
                                                <em class="fab fa-facebook-f"></em>
                                            </a>
                                            <a class="btn btn-social btn-social-lg btn-color-06" href="#">
                                                <em class="fab fa-line"></em>
                                            </a>
                                            <a class="btn btn-social btn-social-lg btn-color-06" href="#">
                                                <em class="fab fa-youtube"></em>
                                            </a>
                                            <a class="btn btn-social btn-social-lg btn-color-06" href="#">
                                                <em class="fab fa-instagram"></em>
                                            </a>
                                            <a class="btn btn-social btn-social-lg btn-color-06" href="#">
                                                <em class="fab fa-twitter"></em>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid lg-50 sm-100 mt-0">
                                        <div class="img-container">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-04.jpg');"></div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="map-container">
                                            <div class="fit img-fill" style="background-image:url('public/assets/app/images/misc/map-minisite.jpg');"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-02">
                                <img class="img-float" src="public/assets/app/images/misc/car.png" alt="Float Image" />
                                <h6 class="h5 fw-500 color-01">แบบฟอร์มติดต่อ</h6>
                                <p class="color-black sm-no-br mt-1">
                                    หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ <br>
                                    ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                                </p>
                                <p class="xs color-black">
                                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                                    <span class="text-danger">*</span> 
                                </p>
                                <div class="mt-4">
                                    <form action="/" method="POST">
                                        <div class="grids">
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">เลือกหน่วยงาน <span class="text-danger">*</span></label>
                                                    <div class="select-wrapper">
                                                        <select name="department" class="form-control no-bradius bg-fgray" required>
                                                            <option value="">เลือกหน่วยงาน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">อีเมล <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-100 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ข้อความ <span class="text-danger">*</span></label>
                                                    <textarea name="message" rows="5" class="form-control no-bradius bg-fgray" required title="General Textarea" 
                                                    style="border-top-color:#fe4d01!important;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex ai-center jc-space-between fw-wrap mt-1 pb-1">
                                            <div class="captcha-container mt-3">
                                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                            </div>
                                            <div class="btns width-auto mt-3">
                                                <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                                    แสดงความคิดเห็น <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                </button>
                                                <button type="reset" class="btn btn-action btn-color-02 btn-round">
                                                    ยกเลิก <em class="far fa-times-circle ml-1"></em>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
