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
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'เข้าสู่ระบบ' ],
        ];
        $breadcrumbTitle = 'เข้าสู่ระบบ';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-15.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div class="ss-box" data-aos="fade-up" data-aos-delay="600">
                <div class="d-flex ai-center jc-space-between fw-wrap">
                    <div class="ss-icon-title width-auto mt-0 mr-3 pt-0">
                        <em class="far fa-user"></em>
                        <div class="text-wrapper">
                            <h6 class="h5 sm fw-600 color-black ws-nowrap">
                                เข้าสู่ระบบ
                            </h6>
                        </div>
                    </div>
                    <p class="my-2 ws-nowrap">
                        <a class="color-gray h-color-01" href="#">
                            ลืมรหัสผ่าน
                        </a>
                        <span class="p xs color-mgray mx-1">|</span>
                        <a class="color-01 h-color-02" href="#">
                            สมัครสมาชิก
                        </a>
                    </p>
                </div>
                <form action="/" method="POST">
                    <div class="form-group mt-3">
                        <label class="p">อีเมล / ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control no-bradius" required title="General Text Input" />
                    </div>
                    <div class="form-group">
                        <label class="p">รหัสผ่าน <span class="text-danger">*</span></label>
                        <input type="password" class="form-control no-bradius" required title="General Text Input" />
                    </div>
                    <fieldset>
                        <div class="form-check sm mt-3">
                            <input type="checkbox" class="form-check-input" id="c_0" value="0" title="General Checkbox Input" />
                            <label for="c_0" class="color-gray">จดจำฉันไว้</label>
                        </div>
                    </fieldset>
                    <div class="captcha-container mt-4 pt-1">
                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                    </div>
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                            <em class="far fa-check-circle mr-1"></em> เข้าสู่ระบบ
                        </button>
                    </div>
                </form>
                <div class="ss-sep-01 mb-3">
                    <p class="fw-500 color-gray">หรือ</p>
                </div>
                <div class="btn-socials">
                    <a href="#" class="btn btn-social-custom fw">
                        <em class="fab fa-facebook-f"></em> 
                        <div class="text">เข้าสู่ระบบด้วย Facebook</div>
                    </a>
                    <a href="#" class="btn btn-social-custom gg">
                        <em class="fab fa-google"></em> 
                        <div class="text">เข้าสู่ระบบด้วย Google</div>
                    </a>
                    <a href="#" class="btn btn-social-custom ln">
                        <em class="fab fa-line"></em> 
                        <div class="text">เข้าสู่ระบบด้วย Line</div>
                    </a>
                    <a href="#" class="btn btn-social-custom tw">
                        <em class="fab fa-twitter"></em> 
                        <div class="text">เข้าสู่ระบบด้วย Twitter</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
