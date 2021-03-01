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
            [ 'url' => '#', 'display' => 'สมัครสมาชิก' ],
        ];
        $breadcrumbTitle = 'สมัครสมาชิก';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-15.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div class="ss-box" data-aos="fade-up" data-aos-delay="600">
                <div class="d-flex ai-center jc-space-between fw-wrap">
                    <div class="ss-icon-title width-auto mt-0 mr-3 pt-0">
                        <em class="far fa-address-book"></em>
                        <div class="text-wrapper">
                            <h6 class="h5 sm fw-600 color-black ws-nowrap">
                                สมัครสมาชิก
                            </h6>
                        </div>
                    </div>
                    <p class="color-gray my-2 ws-nowrap">
                        เป็นสมาชิกแล้ว? 
                        <a class="color-01 h-color-02" href="#">
                            เข้าสู่ระบบ
                        </a>
                    </p>
                </div>
                <form action="/" method="POST">
                    <div class="form-group mt-3">
                        <label class="p">ชื่อ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control no-bradius" required title="General Text Input" />
                    </div>
                    <div class="form-group">
                        <label class="p">นามสกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control no-bradius" required title="General Text Input" />
                    </div>
                    <div class="form-group">
                        <div class="d-flex ai-center jc-space-between fw-wrap">
                            <label class="p ws-nowrap mr-2">รหัสผ่าน <span class="text-danger">*</span></label>
                            <p class="xs fw-400 color-gray">
                                รหัสผ่านจะต้องมีตัวอักษรอย่างน้อย 8 ตัวอักษร
                            </p>
                        </div>
                        <input type="password" class="form-control no-bradius" required title="General Text Input" />
                    </div>
                    <div class="password-level level-3">
                        <div class="levels">
                            <div></div><div></div><div></div><div></div>
                        </div>
                        <p class="sm fw-300 color-black">
                            ระดับความยากของรหัสผ่าน : <span class="fw-600">คาดเดายาก</span>
                        </p>
                    </div>
                    <fieldset>
                        <div class="form-check sm mt-4">
                            <input type="checkbox" class="form-check-input" id="c_0" value="0" title="General Checkbox Input" />
                            <label for="c_0" class="color-gray">
                                ข้าพเจ้ายอมรับ และได้อ่านข้อความในข้อตกลงและเงื่อนไขนี้เข้าใจโดยละเอียดแล้ว
                            </label>
                        </div>
                    </fieldset>
                    <div class="captcha-container mt-4 pt-1">
                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                    </div>
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                            <em class="far fa-check-circle mr-1"></em> ยืนยันการลงทะเบียน
                        </button>
                        <button type="reset" class="btn btn-action btn-color-02 btn-round btn-min-width">
                            <em class="far fa-times-circle mr-1"></em> ล้างข้อมูล
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
