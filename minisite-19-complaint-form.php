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
                                <h6 class="h4 fw-300 color-01">
                                    แบบฟอร์มแจ้งเรื่องร้องเรียน
                                </h6>
                                <div class="d-flex ai-center">
                                    <p class="sm">ย้อนกลับ</p>
                                    <em class="far fa-arrow-alt-circle-left ml-1 text-2xl color-01"></em>
                                </div>
                            </div>
                            <form action="/" method="POST">
                                <div class="grids mt-1">
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20">
                                                <label class="p color-black mt-2">หัวข้อเรื่อง <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="grid sm-80">
                                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="grids mt-0">
                                            <div class="grid sm-20 mt-0">
                                                <label class="p color-black mt-2">
                                                    ชื่อและนามสกุล
                                                </label>
                                            </div>
                                            <div class="grid sm-80 mt-0">
                                                <div class="gallery-grids mt-0">
                                                    <div class="grid sm-20 mt-0">
                                                        <select class="form-control no-bradius" required>
                                                            <option value="">นางสาว</option>
                                                        </select>
                                                        <p class="sm mt-1">ชื่อนำหน้า</p>
                                                    </div>
                                                    <div class="grid sm-40 mt-0">
                                                        <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                                        <p class="sm mt-1">ชื่อ</p>
                                                    </div>
                                                    <div class="grid sm-40 mt-0">
                                                        <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                                        <p class="sm mt-1">นามสกุล</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20">
                                                <label class="p color-black mt-2">หมายเลขโทรศัพท์</label>
                                            </div>
                                            <div class="grid sm-60">
                                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20">
                                                <label class="p color-black mt-2">อีเมล <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="grid sm-50">
                                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20">
                                                <label class="p color-black mt-2">ข้อความ <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="grid sm-80">
                                                <textarea class="form-control no-bradius" rows="4" title="General Textarea" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid sm-20">
                                                <label class="p color-black mt-2">อัพโหลดไฟล์</label>
                                            </div>
                                            <div class="grid sm-80">
                                                <div class="upload-container">
                                                    <div class="file-container">
                                                        <div class="icon-container">
                                                            <div class="h4 lg color-01 text-center">
                                                                <em class="far fa-file-image"></em>
                                                            </div>
                                                        </div>
                                                        <div class="text-container color-black">
                                                            <p class="sm fw-500">
                                                                ลากหรือวางไฟล์ไว้ที่นี่
                                                            </p>
                                                            <p class="xs fw-400">
                                                                ชนิดไฟล์ที่อนุญาติ .jpg .gif .jpeg .png .zip .rar
                                                                ไฟล์ทั้งหมดรวมกันไม่เกินไม่เกิน 5 MB
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="btns">
                                                        <a class="btn btn-action btn-color-black btn-round btn-xs" href="#">
                                                            เพิ่มไฟล์
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                                    foreach([
                                                        'pdf', 'doc'
                                                    ] as $d){
                                                ?>
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
                                    <div class="grid sm-20">
                                    </div>
                                    <div class="grid sm-80">
                                        <div class="captcha-container mt-4">
                                            <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                        </div>
                                    </div>
                                    <div class="grid sm-20"></div>
                                    <div class="grid sm-80">
                                        <div class="btns width-auto mt-3">
                                            <button type="submit" class="btn btn-action btn-color-01 btn-no-bradius">
                                                แจ้งร้อง <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                            </button>
                                            <button type="reset" class="btn btn-action btn-color-02 btn-no-bradius">
                                                ยกเลิก
                                            </button>
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
