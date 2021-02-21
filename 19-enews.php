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
            [ 'url' => '#', 'display' => 'สมัครรับข่าวสาร' ],
        ];
        $breadcrumbTitle = 'สมัครรับข่าวสาร';
        $breadcrumbBg = 'public/assets/app/images/bg/09.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <h6 class="h4 lg fw-600 text-center" data-aos="fade-up" data-aos-delay="450">
                แบบฟอร์มสมัครรับข่าวสาร
            </h6>
            <div class="ss-box mt-4 pt-2" data-aos="fade-up" data-aos-delay="600">
                <form action="/" method="POST">
                    <div class="form-group">
                        <label class="p md">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control round" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" 
                        required title="General Text Input" />
                    </div>
                    <div class="form-group mt-3">
                        <p class="md color-black">
                            กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม
                        </p>
                        <div class="border-bottom mt-1">
                            <fieldset>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="c_0" 
                                    value="0" title="General Checkbox Input" />
                                    <label class="form-check-label" for="c_0">
                                        วารสารออนไลน์
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="c_1" 
                                    value="1" title="General Checkbox Input" />
                                    <label class="form-check-label" for="c_1">
                                        ข่าวประชาสัมพันธ์
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="c_2" 
                                    value="2" title="General Checkbox Input" />
                                    <label class="form-check-label" for="c_2">
                                        ข่าวรับสมัครบุคลากร
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="c_3" 
                                    value="3" title="General Checkbox Input" />
                                    <label class="form-check-label" for="c_3">
                                        ข่าวการจัดซื้อจัดจ้าง
                                    </label>
                                </div>
                                <div class="ml-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="c_4" 
                                        value="4" title="General Checkbox Input" />
                                        <label class="form-check-label" for="c_4">
                                            การเปิดเผยราคากลาง
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="c_5" 
                                        value="5" title="General Checkbox Input" />
                                        <label class="form-check-label" for="c_5">
                                            แผน-ผลการจัดซื้อจัดจ้าง
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="c_6" 
                                        value="6" title="General Checkbox Input" />
                                        <label class="form-check-label" for="c_6">
                                            สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร.1)
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="captcha-container mt-4">
                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                    </div>
                    <div class="btns mt-3 pt-3 border-top bcolor-sgray">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round">
                            <em class="far fa-check-circle mr-1"></em> ตกลง
                        </button>
                        <button type="reset" class="btn btn-action btn-color-02 btn-round">
                            <em class="far fa-times-circle mr-1"></em> ล้างข้อมูล
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
