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
                <div class="ss-box-shadow lg"></div>
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
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <div class="about-06 mt-2">
                                <img class="img-bg" src="public/assets/app/images/bg/minisite-05.jpg" alt="Image Background" />
                                <div class="position-relative">
                                    <h6 class="h4 lg fw-600">
                                        สมัครรับข่าวสารทางอีเมล
                                    </h6>
                                    <p class="sm-no-br">
                                        ลงทะเบียนเพื่อรับข่าวสารอิเล็กทรอนิกส์เราจะส่งข่าวสารให้ท่านทางอีเมล<br>
                                        เมื่อมีข่าวสารที่เกี่ยวกับหน่วยงาน ที่ประกาศผ่านเว็บไซต์นี้
                                    </p>
                                    <div class="info-container">
                                        <div class="info">
                                            <div class="count-container">
                                                <div class="wrapper color-black">
                                                    <div class="position-relative">1</div>
                                                </div>
                                            </div>
                                            <p class="sm text-center mt-1">
                                                อัพเดทข้อมูลข่าวสารก่อนใคร
                                            </p>
                                        </div>
                                        <div class="info">
                                            <div class="count-container">
                                                <div class="wrapper color-black">
                                                    <div class="position-relative">2</div>
                                                </div>
                                            </div>
                                            <p class="sm text-center mt-1">
                                                เลือกระบุประเภทของจดหมายข่าวได้
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/" method="POST">
                                <div class="gallery-grids">
                                    <div class="grid xl-60 lg-2-3 md-70 sm-80 mt-0">
                                        <div class="form-group">
                                            <label class="p fw-500">ระบุอีเมล์ของคุณ <span class="text-danger">*</span></label>
                                            <div class="border-bottom-2 bcolor-01">
                                                <input type="email" class="form-control no-bradius" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="color-01 fw-600 mt-4">
                                    กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม
                                </h6>
                                <div class="mt-1">
                                    <fieldset>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_0" value="0" title="General Checkbox Input" />
                                            <label for="c_0" class="p fw-300 color-black pl-2">ข่าวประชาสัมพันธ์</label>
                                        </div>
                                        <div class="mt-1 mb-3 pl-4">
                                            <div class="gallery-grids">
                                                <div class="grid xl-25 lg-1-3 md-50 sm-100">
                                                    <div class="form-check mt-0">
                                                        <input type="checkbox" id="c_1" value="0" title="General Checkbox Input" />
                                                        <label for="c_1" class="p fw-300 color-black pl-2">ข่าวกิจกรรมประชาสัมพันธ์</label>
                                                    </div>
                                                </div>
                                                <div class="grid xl-25 lg-1-3 md-50 sm-100">
                                                    <div class="form-check mt-0">
                                                        <input type="checkbox" id="c_2" value="2" title="General Checkbox Input" />
                                                        <label for="c_2" class="p fw-300 color-black pl-2">ข่าวสารรัฐมนตรี</label>
                                                    </div>
                                                </div>
                                                <div class="grid xl-25 lg-1-3 md-50 sm-100">
                                                    <div class="form-check mt-0">
                                                        <input type="checkbox" id="c_3" value="3" title="General Checkbox Input" />
                                                        <label for="c_3" class="p fw-300 color-black pl-2">ข่าวสารผู้บริหาร</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_4" value="4" title="General Checkbox Input" />
                                            <label for="c_4" class="p fw-300 color-black pl-2">ปฏิทินกิจกรรม</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_5" value="5" title="General Checkbox Input" />
                                            <label for="c_5" class="p fw-300 color-black pl-2">คลังภาพ</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_6" value="6" title="General Checkbox Input" />
                                            <label for="c_6" class="p fw-300 color-black pl-2">วิดีโอ</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_7" value="7" title="General Checkbox Input" />
                                            <label for="c_7" class="p fw-300 color-black pl-2">ไฟล์เอกสาร</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_8" value="8" title="General Checkbox Input" />
                                            <label for="c_8" class="p fw-300 color-black pl-2">วารสาร</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="c_9" value="9" title="General Checkbox Input" />
                                            <label for="c_9" class="p fw-300 color-black pl-2">เนื้อหาเว็บไซต์</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="captcha-container mt-4 pt-1">
                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                </div>
                                <div class="btns mt-3 pt-1">
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
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
