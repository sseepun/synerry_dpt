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
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        $breadcrumbTitle = 'แจ้งเรื่องร้องเรียน';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-18.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div class="ss-box-xl" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-icon-title mt-0 pt-0">
                    <em class="far fa-bell"></em>
                    <div class="text-wrapper">
                        <h6 class="h4 fw-600 color-black">
                            แบบฟอร์มแจ้งปัญหา
                        </h6>
                    </div>
                </div>
                <form action="/" method="POST">
                    <div class="grids mt-1">
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-black">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-black">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control no-bradius" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-black">หมายเลขโทรศัพท์</label>
                                <input type="text" class="form-control no-bradius" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-black">อีเมล</label>
                                <input type="email" class="form-control no-bradius" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-100 mt-0">
                            <div class="form-group">
                                <label class="p color-black">ข้อความ <span class="text-danger">*</span></label>
                                <div class="ckeditor" id="ckeditor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="upload-container mt-3 mb-2">
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
                    <?php foreach(['pdf', 'word'] as $d){?>
                        <div class="border-bottom bcolor-sgray">
                            <div class="ss-card ss-card-01 pb-2">
                                <div class="icon-container">
                                    <div class="h4 lg color-01 text-center">
                                        <em class="far fa-file-<?= $d ?>"></em>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <p class="fw-400 color-black">
                                        เรื่องร้องเรียนการโครงการคัดกรองผู้สูงอายุ.pdf
                                    </p>
                                    <p class="xs fw-500 color-01">
                                        ขนาดไฟล์ 30.31 MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="d-flex ai-center jc-space-between fw-wrap mt-2 pb-1">
                        <div class="captcha-container mt-3">
                            <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                        </div>
                        <div class="btns width-auto mt-3">
                            <button type="submit" class="btn btn-action btn-color-01 btn-no-bradius">
                                ส่งข้อความ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                            </button>
                            <button type="reset" class="btn btn-action btn-color-02 btn-no-bradius">
                                ล้างข้อมูล <em class="far fa-times-circle ml-1"></em>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(function(error){
                console.error(error);
            });
    </script>
</body>
</html>
