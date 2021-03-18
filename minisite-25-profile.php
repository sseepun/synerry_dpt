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
                            <h6 class="p lg fw-500">ข้อมูลสมาชิก</h6>
                        </div>
                        <div class="title-wrapper jc-end">
                            <a class="p fw-400 color-white h-color-02" href="#">
                                ออกจากระบบ
                            </a>
                        </div>
                        <div class="btn-wrapper">
                            <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                ย้อนกลับ
                                <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                            </a>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grid xl-20 lg-25 md-30 sm-40 xs-50">
                            <div class="ss-img square no-hover border-4 bcolor-black">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/team/01.jpg');"></div>
                            </div>
                            <a class="d-flex jc-center ai-center p sm fw-500 color-black h-color-01 mt-2" href="#">
                                <div class="h4 xl color-01 mr-2">
                                    <em class="fas fa-user-circle"></em>
                                </div>
                                แก้ไขรูปภาพ
                            </a>
                        </div>
                        <div class="grid lg-2-3 sm-100 xs-mt-0">
                            <form action="/" method="POST">
                                <div class="grids">
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    ชื่อและนามสกุล
                                                </label>
                                            </div>
                                            <div class="grid lg-80 sm-75 mt-0">
                                                <div class="gallery-grids mt-0">
                                                    <div class="grid lg-20 sm-1-3 mt-0">
                                                        <select class="form-control no-bradius fgray" title="General Select Input">
                                                            <option value="">นางสาว</option>
                                                        </select>
                                                        <p class="xs fw-400 color-black my-1">ชื่อนำหน้า</p>
                                                    </div>
                                                    <div class="grid lg-40 sm-1-3 mt-0">
                                                        <input type="text" class="form-control no-bradius fgray" title="General Text Input" />
                                                        <p class="xs fw-400 color-black my-1">ชื่อ</p>
                                                    </div>
                                                    <div class="grid lg-40 sm-1-3 mt-0">
                                                        <input type="text" class="form-control no-bradius fgray" title="General Text Input" />
                                                        <p class="xs fw-400 color-black my-1">นามสกุล</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    หมายเลขโทรศัพท์
                                                </label>
                                            </div>
                                            <div class="grid lg-50 sm-75 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    หมายเลขบัตรประชาชน <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="grid lg-50 sm-75 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    อีเมล <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="grid lg-50 sm-75 mt-0">
                                                <input type="email" class="form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0">
                                                <label class="p sm fw-500 color-black mt-2">
                                                    รหัสผ่าน <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="grid lg-50 sm-75 mt-0">
                                                <input type="password" class="form-control no-bradius fgray" required title="General Text Input" />
                                                <div class="password-level level-3">
                                                    <div class="levels">
                                                        <div></div><div></div><div></div><div></div>
                                                    </div>
                                                    <p class="xs fw-400 color-black">
                                                        ระดับความยากของรหัสผ่าน : <span class="fw-600">คาดเดายาก</span>
                                                    </p>
                                                    <p class="xs fw-400 color-black">
                                                        หากไม่ต้องการเปลี่ยนให้เว้นว่าง
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0"></div>
                                            <div class="grid lg-60 sm-75 mt-0">
                                                <p class="xs fw-400 color-black mt-3">
                                                    <span class="fw-600 text-md">หมายเหตุ</span> <br>
                                                    ข้อสำคัญ: ชื่อที่ลิงก์กับอีเมลของคุณจะไม่ใช่ชื่อผู้ใช้ 
                                                    โดยคุณจะเปลี่ยนชื่อผู้ใช้หรืออีเมลไม่ได้
                                                </p>
                                                <div class="captcha-container mt-2">
                                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                                </div>
                                                <div class="btns mt-3">
                                                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                                                        แก้ไขข้อมูล <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
