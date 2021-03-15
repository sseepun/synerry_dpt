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
            [ 'url' => '#', 'display' => 'แบบสำรวจออนไลน์' ],
        ];
        $breadcrumbTitle = 'แบบสำรวจออนไลน์';
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
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 color-black">
                            <h6 class="h5 sm fw-500 color-01 md-no-br text-center">
                                แบบสำรวจเพื่อจัดทำข้อเสนอการบริหารและพัฒนาผู้ปฏิบัติงาน <br>
                                ด้านเทคโนโลยีดิจิทัล
                            </h6>
                            <div class="d-flex ai-center jc-center color-black p xs fw-400 mt-2">
                                <div class="p sm color-01 mr-2">
                                    <em class="far fa-clock"></em>
                                </div>
                                28 เมษายน 2564
                                <div class="mx-2">|</div>
                                <div class="p sm color-01 mr-2">
                                    <em class="far fa-eye"></em>
                                </div>
                                200
                                <div class="mx-2">|</div>
                                <div class="p sm color-01 mr-2">
                                    <em class="fas fa-share-square"></em>
                                </div>
                                18
                            </div>
                            <p class="xs fw-500 mt-3">
                                <span class="fw-600 text-md">คำชี้แจง:</span> <br>  
                                แบบสอบถามนี้ใช้ในการศึกษาความพึงพอใจของผู้รับบริการ เกี่ยวกับคุณภาพการให้บริการเว็บไซต์ 
                                กรมธุรกิจพลังงาน เพื่อนำข้อมูลที่ได้จากการสำรวจไปใช้ 
                                ในการปรับปรุงและพัฒนาเว็บไซต์ให้มีประสิทธิภาพและประสิทธิผลตอบสนองความต้องการของประชาชนได้อย่างแท้จริง 
                                ขอความกรุณาท่าน โปรดพิจารณาตอบคำถาม 
                                ทุกข้อตามความเป็นจริงเพื่อจะนำข้อมูลที่ได้ไปใช้ให้เกิดประโยชน์ในการพัฒนาข้อมูลด้านสารสนเทศและกระบวนการทำงานของบุคลากรกรมธุรกิจพลังงานต่อไป 
                                ขอขอบคุณมา ณ โอกาสนี้
                            </p>
                            <div class="progress-01" style="--p:.25;">
                                <div class="bar">
                                    <div class="track"></div>
                                    <div class="dot">25</div>
                                </div>
                                <div class="percent">
                                    <p class="md fw-600">25%</p>
                                </div>
                            </div>

                            <div class="survey-03">
                                <p class="h6 sm fw-400 mt-2">
                                    <span class="fw-600">ส่วนที่ 1:</span> ข้อมูลผู้ตอบแบบสอบถาม
                                </p>
                                <div class="survey border-bottom bcolor-sgray">
                                    <div class="survey-tag">
                                        <p class="fw-600">คำถามที่ 1</p>
                                    </div>
                                    <div class="wrapper">
                                        <p class="fw-400 color-black">เพศ</p>
                                        <?php $k = 0; ?>
                                        <fieldset>
                                            <div class="gallery-grids">
                                                <?php foreach(['ชาย', 'หญิง'] as $i=>$d){?>
                                                    <div class="grid xl-20 lg-30 md-1-3 sm-50 mt-0">
                                                        <div class="form-check sm px-0">
                                                            <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                            <label for="r_<?= $k ?>_<?= $i ?>" class="sm fw-300 color-black pl-1"><?= $d ?></label>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="survey border-bottom bcolor-sgray">
                                    <div class="survey-tag">
                                        <p class="fw-600">คำถามที่ 2</p>
                                    </div>
                                    <div class="wrapper">
                                        <p class="fw-400 color-black">ระบุช่วงเวลาที่คุณเริ่มและใช้เว็บไซต์</p>
                                        <div class="d-flex ai-center fw-wrap mt-1">
                                            <span class="p sm mr-2">จาก</span>
                                            <div class="date-wrapper my-1 mr-4" style="width:8.75rem;">
                                                <input type="text" class="date-picker form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                            <span class="p sm mr-2">ถึง</span>
                                            <div class="date-wrapper my-1" style="width:8.75rem;">
                                                <input type="text" class="date-picker form-control no-bradius fgray" required title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="survey border-bottom bcolor-sgray">
                                    <div class="survey-tag">
                                        <p class="fw-600">คำถามที่ 3</p>
                                    </div>
                                    <div class="wrapper">
                                        <p class="fw-400 color-black">วัตถุประสงค์ในการเลือกเข้าใช้งาน(ตอบได้มากกว่า 1 ข้อ) *</p>
                                        <?php $k = 1; ?>
                                        <fieldset>
                                            <?php
                                                foreach([
                                                    'ต้องการหาข้อมูลโครงการเพื่อการลงทุน', 'ต้องการหาข้อมูลความรู้เพื่อประกอบการตัดสินใจ',
                                                    'ต้องการหาข้อมูลความรู้เพื่อใช้ในการทำงาน', 'อื่นๆ'
                                                ] as $i=>$d){
                                            ?>
                                                <div class="">
                                                    <div class="form-check sm px-0">
                                                        <input type="checkbox" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                        <label for="r_<?= $k ?>_<?= $i ?>" class="sm fw-300 color-black pl-1"><?= $d ?></label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="survey">
                                    <div class="survey-tag">
                                        <p class="fw-600">คำถามที่ 4</p>
                                    </div>
                                    <div class="wrapper">
                                        <p class="fw-400 color-black">ท่านเห็นว่าข้อมูลที่เผยแพร่ในเว็บไซต์ ควรเพิ่มเติม / ปรับปรุง อย่างไร</p>
                                        <div class="form-group">
                                            <textarea name="message" rows="8" class="form-control no-bradius fgray" title="General Textarea"></textarea>
                                        </div>
                                        <p class="fw-600 color-black mt-3">อัพโหลดไฟล์</p>
                                        <div class="form-group mt-1 mb-2">
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
                                        <?php foreach(['pdf', 'ppt', 'pdf'] as $d){?>
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
                                <div class="survey">
                                    <div class="wrapper">
                                        <div class="d-flex ai-center jc-space-between fw-wrap">
                                            <a class="btn btn-action btn-color-01 btn-round mt-1" href="#">
                                            <em class="far fa-arrow-alt-circle-left mr-1"></em> ก่อนหน้า
                                            </a>
                                            <a class="btn btn-action btn-color-01 btn-round mt-1" href="#">
                                                ต่อไป <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
