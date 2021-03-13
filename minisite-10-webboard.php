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
            [ 'url' => '#', 'display' => 'กระดานถามตอบ' ],
            [ 'url' => '#', 'display' => 'ถามตอบธุรกิจพลังงาน' ],
        ];
        $breadcrumbTitle = 'กระดานถามตอบ';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid eq-padding position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow xl"></div>
                <div class="box-content">
                    <div class="title-container">
                        <div class="title-wrapper">
                            <h6 class="p lg fw-500">สร้างกระทู้ใหม่</h6>
                        </div>
                        <div class="btn-wrapper">
                            <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                ย้อนกลับ
                                <em class="far fa-arrow-alt-circle-left ml-1 h4 color-01"></em>
                            </a>
                        </div>
                    </div>
                    <form action="/" method="POST">
                        <div class="grids mt-4">
                            <div class="grid sm-100 mt-0">
                                <div class="form-group">
                                    <label class="p fw-500 color-black">หัวข้อกระทู้ <span class="text-danger">*</span></label>
                                    <div class="border-bottom-2 bcolor-01">
                                        <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-40 mt-0">
                                <div class="form-group">
                                    <label class="p fw-500 color-black">เลือกประเภท</label>
                                    <div class="select-wrapper">
                                        <select class="form-control no-bradius fgray" required>
                                            <option value="">หน่วยงานที่เกี่ยวข้อง</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-60 mt-0">
                                <div class="form-group">
                                    <label class="p fw-500 color-black">เพิ่มแท็ก</label>
                                    <input type="email" class="form-control no-bradius fgray" title="General Text Input" placeholder="ตัวอย่างเช่น สนับสนุนโครงการ, กระทรวงพลังงาน"/>
                                </div>
                            </div>
                            <div class="grid sm-100 mt-0">
                                <div class="form-group">
                                    <label class="p fw-500 color-black">ข้อความ</label>
                                    <div class="ckeditor fgray" id="ckeditor"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex ai-center jc-space-between fw-wrap mt-2 pb-1">
                            <div class="captcha-container mt-3">
                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                            </div>
                            <div class="btns width-auto mt-3">
                                <button type="reset" class="btn btn-action btn-sm btn-color-02 btn-round btn-min-width">
                                    ยกเลิก
                                </button>
                                <button type="submit" class="btn btn-action btn-sm btn-color-01 btn-round btn-min-width">
                                    ตั้งกระทู้ใหม่ <em class="far fa-check-circle ml-1"></em>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
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
