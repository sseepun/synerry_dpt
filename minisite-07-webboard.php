<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        .title-custom .title{
            width: calc(100% - 6.5rem); padding-left:1.5rem;
        }
        .title-custom .btn {
            width:6.5rem;
        }
        @media screen and (max-width:767.98px){
            .title-custom {margin-left: -1rem;}
            .title-custom .title {padding-left: 2.5rem;}
        }
    </style>
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

            <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="title-custom d-flex">
                        <div class="title d-flex ai-center color-white bg-black py-3">
                            <h6 class="p lg">สร้างกระทู้ใหม่</h6>
                        </div>
                        <div class="btn d-flex ai-center">
                            <p class="sm">ย้อนกลับ</p>
                            <em class="far fa-arrow-alt-circle-left ml-1 text-2xl color-01"></em>
                        </div>
                    </div>
                    <form action="/" method="POST" class="ml-4 mt-2">
                        <div class="grids">
                            <div class="grid sm-100 mt-0">
                                <div class="form-group">
                                    <label class="p color-black">หัวข้อกระทู้ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control no-bradius" required title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid sm-30 mt-0">
                                <div class="form-group">
                                    <label class="p color-black">เลือกประเภท</label>
                                    <div class="select-wrapper">
                                        <select class="form-control no-bradius" required>
                                            <option value="">หน่วยงานที่เกี่ยวข้อง</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-70 mt-0">
                                <div class="form-group">
                                    <label class="p color-black">เพิ่มแท็ก</label>
                                    <input type="email" class="form-control no-bradius" title="General Text Input" placeholder="ตัวอย่างเช่น สนับสนุนโครงการ, กระทรวงพลังงาน"/>
                                </div>
                            </div>
                            <div class="grid sm-100 mt-0">
                                <div class="form-group">
                                    <label class="p color-black">ข้อความ</label>
                                    <div class="ckeditor" id="ckeditor"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex ai-center jc-space-between fw-wrap mt-2 pb-1">
                            <div class="captcha-container mt-3">
                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                            </div>
                            <div class="btns width-auto mt-3">
                                <button type="reset" class="btn btn-action btn-sm btn-color-02 btn-round">
                                    ยกเลิก
                                </button>
                                <button type="submit" class="btn btn-action btn-sm btn-color-01 btn-round">
                                    ตั้งกระทู้ใหม่ <em class="far fa-check-circle ml-1"></em>
                                </button>
                            </div>
                        </div>
                    </form>
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
