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
            [ 'url' => '#', 'display' => 'สมัครรับข่าวสาร' ],
        ];
        $breadcrumbTitle = 'สมัครรับข่าวสาร';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0">
        <div class="container">
        <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3" style="position:relative;">
                            <div class="img-bg" style="display:block; width:100%; padding:52% 0 0 0; background-position:center; background-size:cover; background-repeat:no-repeat; background-image: url('public/assets/app/images/bg/23.jpg');"></div>
                            <div style="position:absolute; top:0; left:0;">
                                <h6 class="h4 lg fw-800">
                                    สมัครรับข่าวสารทางอีเมล
                                </h6>
                                <p class="sm desc">
                                    ลงทะเบียนเพื่อรับข่าวสารอิเล็กทรอนิกส์เราจะส่งข่าวสารให้ท่านทางอีเมล<br>
                                    เมื่อมีข่าวสารที่เกี่ยวกับหน่วยงาน ที่ประกาศผ่านเว็บไซต์นี้
                                </p>
                            </div>
                            <div class="mt-4 pt-1" data-aos="fade-up" data-aos-delay="600">
                                <form action="/" method="POST">
                                    <div class="form-group">
                                        <label class="p">ระบุอีเมล์ของคุณ <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control round" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" 
                                        required title="General Text Input" />
                                    </div>
                                    <div class="form-group mt-3">
                                        <p class="color-01 lg fw-400">
                                            กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม
                                        </p>
                                        <div class="border-bottom mt-1">
                                            <fieldset>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c_3" value="3" title="General Checkbox Input" />
                                                    <label for="c_3">ข่าวประชาสัมพันธ์</label>
                                                    <div class="gallery-grids">
                                                        <div class="grid sm-100 md-1-3">
                                                            <div class="form-check mt-0">
                                                                <input type="checkbox" class="form-check-input" id="c_4" value="4" title="General Checkbox Input" />
                                                                <label for="c_4">ข่าวสารผู้บริหาร</label>
                                                            </div>
                                                        </div>
                                                        <div class="grid sm-100 md-1-3">
                                                            <div class="form-check mt-0">
                                                                <input type="checkbox" class="form-check-input" id="c_5" value="5" title="General Checkbox Input" />
                                                                <label for="c_5">ข่าวกิจกรรมประชาสัมพันธ์</label>
                                                            </div>
                                                        </div>
                                                        <div class="grid sm-100 md-1-3">
                                                            <div class="form-check mt-0">
                                                                <input type="checkbox" class="form-check-input" id="c_6" value="6" title="General Checkbox Input" />
                                                                <label for="c_6">ข่าวสารรัฐมนตรี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c_0" value="0" title="General Checkbox Input" />
                                                    <label for="c_0">วารสารออนไลน์</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c_1" value="1" title="General Checkbox Input" />
                                                    <label for="c_1">ข่าวประชาสัมพันธ์</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c_2" value="2" title="General Checkbox Input" />
                                                    <label for="c_2">ข่าวรับสมัครบุคลากร</label>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
