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
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        $breadcrumbTitle = 'แจ้งเรื่องร้องเรียน';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">แจ้งเรื่องร้องเรียน</a>
                                    <a class="tab" href="#">ติดต่อหน่วยงาน</a>
                                    <a class="tab" href="#">คำถามที่พบบ่อย (FAQ)</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="d-flex fw-wrap jc-space-between">
                                <h6 class="h5 fw-600 color-01 mr-2">
                                    แบบฟอร์มแจ้งเรื่องร้องเรียน
                                </h6>
                                <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                    ย้อนกลับ
                                    <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                                </a>
                            </div>
                            <form action="/" method="POST">
                                <div class="mt-2 pt-1">
                                    <div class="input-group">
                                        <div class="grids">
                                            <div class="grid sm-100 mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            หัวข้อเรื่อง <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
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
                                                                <select class="form-control no-bradius fgray" required title="General Select Input">
                                                                    <option value="">นางสาว</option>
                                                                </select>
                                                                <p class="xs fw-600 color-gray my-1">ชื่อนำหน้า</p>
                                                            </div>
                                                            <div class="grid lg-40 sm-1-3 mt-0">
                                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                                <p class="xs fw-600 color-gray my-1">ชื่อ</p>
                                                            </div>
                                                            <div class="grid lg-40 sm-1-3 mt-0">
                                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                                <p class="xs fw-600 color-gray my-1">นามสกุล</p>
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
                                                    <div class="grid lg-80 sm-75 mt-0">
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
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            ข้อความ <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <textarea class="form-control no-bradius fgray" rows="4" title="General Textarea" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            อัพโหลดไฟล์
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <div class="form-group mt-0 mb-2">
                                                            <div class="input-dropzone bcolor-sgray bg-fgray no-bradius">
                                                                <div class="wrapper text-center color-gray">
                                                                    <div class="h3 color-01 lh-xs">
                                                                        <em class="fas fa-cloud-upload-alt"></em>
                                                                    </div>
                                                                    <div class="p md fw-500 color-black">
                                                                        ลากไฟล์ หรือ <u class="color-01">ค้นหาไฟล์</u> 
                                                                        เพื่ออัพโหลด
                                                                    </div>
                                                                    <div class="p fw-400 color-black">
                                                                        ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php foreach(['pdf', 'doc'] as $d){?>
                                                            <div class="ss-file-02">
                                                                <div class="icon-container">
                                                                    <div class="img-container">
                                                                        <div class="img-wrapper">
                                                                            <img src="public/assets/app/images/icon/file-<?= $d ?>.png" alt="File Icon" />
                                                                        </div>
                                                                    </div>
                                                                    <p class="xs fw-200">
                                                                        <span class="fw-600">0.78</span> MB
                                                                    </p>
                                                                </div>
                                                                <div class="block jc-space-between">
                                                                    <div class="text-container">
                                                                        <div class="wrapper">
                                                                            <p class="sm fw-100">20 กุมภาพันธ์ 2564</p>
                                                                            <p class="fw-500 lh-sm color-black">
                                                                                โครงการสนับสนุนการลงทุนติดตั้งใช้งานระบบอบแห้งพลังงานแสงอาทิตย์
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <a class="btn-container">
                                                                        <div class="fw-500">
                                                                            <em class="far fa-times-circle color-02 mr-1"></em> 
                                                                            ลบไฟล์
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grids">
                                            <div class="grid lg-20 sm-25 mt-0"></div>
                                            <div class="grid lg-80 sm-75 mt-4 pt-1">
                                                <div class="captcha-container">
                                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                                </div>
                                                <div class="btns width-auto mt-3">
                                                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                                                        แจ้งร้อง <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                                    </button>
                                                    <button type="reset" class="btn btn-action btn-color-02 btn-round btn-min-width">
                                                        ยกเลิก
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
