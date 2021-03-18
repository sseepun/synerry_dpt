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
            [ 'url' => '#', 'display' => 'ประกาศสมัครงาน' ],
        ];
        $breadcrumbTitle = 'ประกาศสมัครงาน';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
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
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <div class="d-flex fw-wrap jc-space-between">
                                <h6 class="h5 fw-600 color-01 mr-2">
                                    แบบฟอร์มสมัครงาน
                                </h6>
                                <a class="d-flex ai-center p sm color-black h-color-01" href="#">
                                    ย้อนกลับ
                                    <div class="h4 color-01 ml-1">
                                        <em class="far fa-arrow-alt-circle-left"></em>
                                    </div>
                                </a>
                            </div>
                            <form action="/" method="POST">
                                <div class="mt-2 pt-1">

                                    <div class="input-group header color-white bg-12 border bcolor-12">
                                        <p class="md fw-400">1. ข้อมูลส่วนตัว</p>
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
                                                            เพศ
                                                        </label>
                                                    </div>
                                                    <?php $k = 0; ?>
                                                    <?php foreach(['ชาย', 'หญิง'] as $i=>$d){?>
                                                        <div class="grid lg-25 sm-1-3 xs-50 mt-0">
                                                            <div class="form-check sm">
                                                                <input type="radio" class="form-check-input" name="c_<?= $k ?>" id="c_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" title="General Checkbox Input" />
                                                                <label for="c_<?= $k ?>_<?= $i ?>" class="color-black text-left">
                                                                    <?= $d ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            วันเกิด
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <div class="gallery-grids mt-0">
                                                            <div class="grid lg-20 sm-1-3 mt-0">
                                                                <select class="form-control no-bradius fgray" required title="General Select Input">
                                                                    <option value=""></option>
                                                                </select>
                                                                <p class="xs fw-600 color-gray my-1">วัน</p>
                                                            </div>
                                                            <div class="grid lg-40 sm-1-3 mt-0">
                                                                <select class="form-control no-bradius fgray" required title="General Select Input">
                                                                    <option value=""></option>
                                                                </select>
                                                                <p class="xs fw-600 color-gray my-1">เดือน</p>
                                                            </div>
                                                            <div class="grid lg-30 sm-1-3 mt-0">
                                                                <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                                <p class="xs fw-600 color-gray my-1">ปี</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            เลขที่บัตรประชาชน
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-50 sm-75 mt-0">
                                                        <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                        <p class="xs fw-600 color-gray my-1">ไม่ต้องใส่เครื่องหมาย “-”</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            รูปถ่าย
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <div class="file-wrapper">
                                                            <input type="file" class="form-control no-bradius fgray" required title="General Text Input" />
                                                        </div>
                                                        <p class="xs fw-600 color-gray my-1">ไฟล์นามสกุล jpeg, png ขนาดไม่เกิน  2 MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            สถานะภาพ
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <div class="gallery-grids">
                                                            <?php $k = 1; ?>
                                                            <?php foreach(['โสด', 'สมรส', 'หย่า', 'หม้าย'] as $i=>$d){?>
                                                                <div class="grid lg-25 sm-50 xs-50 mt-0">
                                                                    <div class="form-check sm">
                                                                        <input type="radio" class="form-check-input" name="c_<?= $k ?>" id="c_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" title="General Checkbox Input" />
                                                                        <label for="c_<?= $k ?>_<?= $i ?>" class="color-black text-left">
                                                                            <?= $d ?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php }?>
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
                                                        <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            อีเมล
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
                                                            ที่อยู่
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <textarea class="form-control no-bradius fgray" rows="4" title="General Textarea" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="input-group header color-white bg-12 border bcolor-12">
                                        <p class="md fw-400">2. ประสบการณ์การทำงาน (เรียงจากล่าสุด)</p>
                                    </div>
                                    <?php for($n=0; $n<2; $n++){?>
                                        <div class="input-group header color-black bg-11 border bcolor-11 py-2">
                                            <p class="fw-400">ประวัติการทำงาน <?= $n+1 ?></p>
                                        </div>
                                        <div class="input-group">
                                            <div class="grids">
                                                <div class="grid sm-100 mt-0">
                                                    <div class="grids">
                                                        <div class="grid lg-20 sm-25 mt-0">
                                                            <label class="p sm fw-500 color-black mt-2">
                                                                ชื่อบริษัทหรือนายจ้าง
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
                                                                ตำแหน่งงาน
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
                                                                หน้าที่ความรับผิดชอบ
                                                            </label>
                                                        </div>
                                                        <div class="grid lg-80 sm-75 mt-0">
                                                            <textarea class="form-control no-bradius fgray" rows="4" title="General Textarea" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                    
                                    <div class="input-group header color-white bg-12 border bcolor-12">
                                        <p class="md fw-400">3. ข้อมูลการศึกษา (เรียงจากล่าสุด)</p>
                                    </div>
                                    <?php for($n=0; $n<2; $n++){?>
                                        <div class="input-group header color-black bg-11 border bcolor-11 py-2">
                                            <p class="fw-400">ระดับการศึกษา <?= $n+1 ?></p>
                                        </div>
                                        <div class="input-group">
                                            <div class="grids">
                                                <div class="grid sm-100 mt-0">
                                                    <div class="grids">
                                                        <div class="grid lg-20 sm-25 mt-0">
                                                            <label class="p sm fw-500 color-black mt-2">
                                                                ระดับการศึกษา
                                                            </label>
                                                        </div>
                                                        <div class="grid lg-80 sm-75 mt-0">
                                                            <div class="gallery-grids">
                                                                <?php $k = $n + 2; ?>
                                                                <?php foreach(['ปริญาเอก', 'ปริญาโท', 'ปริญาตรี', 'อนุปริญญา'] as $i=>$d){?>
                                                                    <div class="grid lg-25 sm-50 xs-50 mt-0">
                                                                        <div class="form-check sm">
                                                                            <input type="radio" class="form-check-input" name="c_<?= $k ?>" id="c_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" title="General Checkbox Input" />
                                                                            <label for="c_<?= $k ?>_<?= $i ?>" class="color-black text-left">
                                                                                <?= $d ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid sm-100 xs-mt-0">
                                                    <div class="grids">
                                                        <div class="grid lg-20 sm-25 mt-0">
                                                            <label class="p sm fw-500 color-black mt-2">
                                                                สถานบันการศึกษา
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
                                                                คณะและปีการศึกษา
                                                            </label>
                                                        </div>
                                                        <div class="grid lg-80 sm-75 mt-0">
                                                            <div class="gallery-grids mt-0">
                                                                <div class="grid lg-1-3 sm-1-3 mt-0">
                                                                    <select class="form-control no-bradius fgray" required title="General Select Input">
                                                                        <option value=""></option>
                                                                    </select>
                                                                    <p class="xs fw-600 color-gray my-1">ระดับ</p>
                                                                </div>
                                                                <div class="grid lg-1-3 sm-1-3 mt-0">
                                                                    <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                                    <p class="xs fw-600 color-gray my-1">ชื่อคณะ</p>
                                                                </div>
                                                                <div class="grid lg-1-3 sm-1-3 mt-0">
                                                                    <input type="text" class="form-control no-bradius fgray" required title="General Text Input" />
                                                                    <p class="xs fw-600 color-gray my-1">ปีที่จบการศึกษา</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    <?php }?>
                                    
                                    <div class="input-group header color-white bg-12 border bcolor-12">
                                        <p class="md fw-400">4. แนะนำตัวผู้สมัคร</p>
                                    </div>
                                    <div class="input-group">
                                        <div class="grids">
                                            <div class="grid sm-100 mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            เขียนหรือบรรยายเกี่ยวกับตัวผู้สมัคร
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <textarea class="form-control no-bradius fgray" rows="4" title="General Textarea" required></textarea>
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
                                                            อัพโหลดไฟล์แนบเพิ่มเติม
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <div class="file-wrapper">
                                                            <input type="file" class="form-control no-bradius fgray" required title="General Text Input" />
                                                        </div>
                                                        <p class="xs fw-600 color-gray my-1">ไฟล์นามสกุล jpeg, png ขนาดไม่เกิน  2 MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 xs-mt-0">
                                                <div class="grids">
                                                    <div class="grid lg-20 sm-25 mt-0">
                                                        <label class="p sm fw-500 color-black mt-2">
                                                            EMBED
                                                        </label>
                                                    </div>
                                                    <div class="grid lg-80 sm-75 mt-0">
                                                        <textarea class="form-control no-bradius fgray" rows="4" title="General Textarea" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid lg-20 sm-25 mt-0"></div>
                                            <div class="grid lg-80 sm-75 mt-3 pt-1">
                                                <div class="captcha-container">
                                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                                </div>
                                                <div class="btns width-auto mt-3">
                                                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                                                        ตกลง <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
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
