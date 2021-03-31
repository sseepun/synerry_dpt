<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'ข้อมูลของฉัน' ],
        ];
        $breadcrumbTitle = 'ข้อมูลของฉัน';
        $breadcrumbBg = 'public/assets/app/images/bg/15.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
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
                    <div class="grids mt-3">
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">อีเมล <span class="text-danger">*</span></label>
                                <input type="email" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">หมายเลขติดต่อ</label>
                                <input type="text" class="form-control no-bradius" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">รหัสผ่าน <span class="text-danger">*</span></label>
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
                                <label class="p fw-400">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                                <input type="password" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">ระบุวันเกิด <span class="text-danger">*</span></label>
                                <div class="date-wrapper">
                                    <input type="text" class="date-picker form-control no-bradius" required title="General Text Input" />
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p fw-400">ระบุเพศ <span class="text-danger">*</span></label>
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
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-action btn-color-p btn-min-width">
                            อัพเดทข้อมูล
                        </button>
                        <button type="reset" class="btn btn-action btn-color-p-inverse btn-min-width">
                            ล้างข้อมูล
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
