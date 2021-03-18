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
            [ 'url' => '#', 'display' => 'ระบบสมาชิก' ],
        ];
        $breadcrumbTitle = 'ระบบสมาชิก';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid eq-padding position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="title-container with-active">
                        <div class="active-wrapper">
                            <h6 class="p lg fw-500">สมัครสมาชิก</h6>
                        </div>
                        <div class="title-wrapper">
                            <h6 class="p fw-500">เข้าสู่ระบบ</h6>
                        </div>
                        <div class="btn-wrapper">
                            <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                ย้อนกลับ
                                <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                            </a>
                        </div>
                    </div>
                    <div class="auth-01">
                        <div class="grids">
                            <div class="grid xl-40 lg-50 md-80 sm-100 mt-0">
                                <div class="grids">
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    ชื่อ
                                                </label>
                                            </div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    นามสกุล
                                                </label>
                                            </div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    รหัสผ่าน
                                                </label>
                                            </div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <input type="password" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    อีเมล
                                                </label>
                                            </div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <input type="email" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20 mt-0"></div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <div class="captcha-container mt-4">
                                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                                </div>
                                                <fieldset>
                                                    <div class="form-check sm mt-3">
                                                        <input type="checkbox" class="form-check-input" id="c_0" value="0" title="General Checkbox Input" />
                                                        <label for="c_0" class="color-gray text-left">
                                                            ฉันได้อ่าน และ 
                                                            <a class="color-01 h-color-02" href="#"><u>ยอมรับข้อกำหนด</u></a>
                                                            และ 
                                                            <a class="color-01 h-color-02" href="#"><u>เงื่อนไขดังกล่าว</u></a>
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <div class="btns width-auto mt-4">
                                                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                                                        สร้างบัญชีใหม่ <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid xl-10 lg-10 sm-100">
                                <div class="auth-sep">
                                    <div class="wrapper p fw-600 color-black">
                                        หรือ
                                    </div>
                                </div>
                            </div>
                            <div class="grid xl-20 lg-25 sm-100">
                                <div class="auth-right">
                                    <h6 class="p md fw-600 color-black text-center">
                                        สร้างบัญชีใหม่ด้วย
                                    </h6>
                                    <div class="btns text-center mt-3">
                                        <a class="btn btn-social btn-social-lg fw no-bradius" href="#">
                                            <em class="fab fa-facebook-f"></em>
                                        </a>
                                        <a class="btn btn-social btn-social-lg gg no-bradius" href="#">
                                            <em class="fab fa-google"></em>
                                        </a>
                                        <a class="btn btn-social btn-social-lg ln no-bradius" href="#">
                                            <em class="fab fa-line"></em>
                                        </a>
                                        <a class="btn btn-social btn-social-lg tw no-bradius" href="#">
                                            <em class="fab fa-twitter"></em>
                                        </a>
                                    </div>
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
