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
            [ 'url' => '#', 'display' => 'ข้อมูลของฉัน' ],
        ];
        $breadcrumbTitle = 'ข้อมูลของฉัน';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-15.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div class="ss-box lg" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-icon-title width-auto mt-0 pt-0">
                    <em class="far fa-address-card"></em>
                    <div class="text-wrapper">
                        <h6 class="h5 sm fw-600 color-black ws-nowrap">
                            ข้อมูลของฉัน
                        </h6>
                    </div>
                </div>
                <form action="/" method="POST">
                    <div class="grids mt-2">
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">อีเมล <span class="text-danger">*</span></label>
                                <input type="email" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">หมายเลขติดต่อ</label>
                                <input type="text" class="form-control no-bradius" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <div class="d-flex ai-center jc-space-between fw-wrap">
                                    <label class="p ws-nowrap mr-2">รหัสผ่าน <span class="text-danger">*</span></label>
                                    <p class="xs fw-400 color-gray">
                                        จะต้องมีตัวอักษรอย่างน้อย 8 ตัวอักษร
                                    </p>
                                </div>
                                <input type="password" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                            <div class="password-level level-3 mb-2">
                                <div class="levels">
                                    <div></div><div></div><div></div><div></div>
                                </div>
                                <p class="sm fw-300 color-black">
                                    ระดับความยากของรหัสผ่าน : <span class="fw-600">คาดเดายาก</span>
                                </p>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                                <input type="password" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">ระบุวันเกิด <span class="text-danger">*</span></label>
                                <div class="date-wrapper">
                                    <input type="text" class="date-picker form-control no-bradius" required title="General Text Input" />
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p">ระบุเพศ <span class="text-danger">*</span></label>
                                <fieldset>
                                    <div class="d-flex ai-center fw-wrap">
                                        <div class="form-check mr-5">
                                            <input type="radio" name="c" class="form-check-input" id="c_0" value="0" title="General Radio Input" />
                                            <label for="c_0">ชาย</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="c" class="form-check-input" id="c_1" value="1" title="General Radio Input" />
                                            <label for="c_1">หญิง</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <p class="sm fw-600 mt-4 pt-1">หมายเหตุ</p>
                    <p class="xs fw-400">
                        ข้อสำคัญ: ชื่อที่ลิงก์กับอีเมลของคุณจะไม่ใช่ชื่อผู้ใช้ โดยคุณจะเปลี่ยนชื่อผู้ใช้หรืออีเมลไม่ได้
                    </p>
                    <div class="captcha-container mt-4 pt-1">
                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                    </div>
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                            <em class="far fa-check-circle mr-1"></em> อัพเดทข้อมูล
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
