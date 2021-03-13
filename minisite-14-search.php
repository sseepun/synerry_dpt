<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        .border-bottom-full::after{
            content:''; display:block; width: calc(100% + 2.25rem); background:black; height:.0625rem;
            background: #ccc; margin:.5rem 0 0 -.5rem;
        }
        .ss-card.ss-card-08.minisite:hover .border-bottom-full:after{
            background: #fff;
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
        ];
        $breadcrumbTitle = 'คำถามที่พบบ่อย';
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
                                    <a class="tab active" href="#">คำถามที่พบบ่อย</a>
                                    <a class="tab" href="#">ติดต่อหน่วยงาน</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <?php
                                $listHeader = ['total', 'view', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <?php for($i=0; $i<12; $i++){?>
                                <div class="ss-card ss-card-08 minisite">
                                    <div class="img-container">
                                        <a class="ss-img adaptive-list" href="#">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                            <div class="hover-container">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-container">
                                        <div class="text-content d-flex fw-wrap">
                                            <a class="title p md fw-600" href="#">
                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                            </a>
                                            <p class="xs desc mt-2">
                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                HR Forum 2020, Big Data
                                            </p>
                                            <div class="d-flex ai-center text-xs desc fw-400" style="margin-top:auto;">
                                                เมนู <div class="px-1 py-1 bg-fgray ml-1">ปฏิทินกิจกรรม</div>
                                            </div>
                                        </div>
                                        <div class="info-content">
                                            <div>
                                                <div class="border-bottom-full bcolor-sgray pb-2">
                                                    <p class="sm fw-600">ประเภท</p>
                                                    <p class="xs">ข่าวประชาสัมพันธ์</p>
                                                </div>
                                                <p class="text-icon xs fw-600 mt-2">
                                                    <em class="far fa-clock mr-1"></em> 19 เมษายน 2564
                                                </p>
                                                <p class="text-icon xs fw-600">
                                                    <em class="far fa-eye mr-1"></em> 98
                                                </p>
                                                <p class="text-icon xs fw-600">
                                                    <em class="far fa-share-square mr-1"></em> 120
                                                </p>
                                            </div>
                                            <div class="arrow">
                                                <em class="far fa-arrow-alt-circle-right"></em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php
                                $listFooter = ['pagination', 'pp'];
                                include('component/list-footer-minisite.php');
                            ?>
                            
                            <div class="contact-02">
                                <img class="img-float" src="public/assets/app/images/misc/car.png" alt="Float Image" />
                                <h6 class="h5 fw-500 color-01">แบบฟอร์มติดต่อ</h6>
                                <p class="color-black sm-no-br mt-1">
                                    หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ <br>
                                    ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                                </p>
                                <p class="xs color-black">
                                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                                    <span class="text-danger">*</span> 
                                </p>
                                <div class="mt-4">
                                    <form action="/" method="POST">
                                        <div class="grids">
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">เลือกหน่วยงาน <span class="text-danger">*</span></label>
                                                    <div class="select-wrapper">
                                                        <select name="department" class="form-control no-bradius bg-fgray" required>
                                                            <option value="">เลือกหน่วยงาน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">อีเมล <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control no-bradius bg-fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-100 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ข้อความ <span class="text-danger">*</span></label>
                                                    <textarea name="message" rows="5" class="form-control no-bradius bg-fgray" required title="General Textarea" 
                                                    style="border-top-color:#fe4d01!important;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex ai-center jc-space-between fw-wrap mt-1 pb-1">
                                            <div class="captcha-container mt-3">
                                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                            </div>
                                            <div class="btns width-auto mt-3">
                                                <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                                    แสดงความคิดเห็น <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                </button>
                                                <button type="reset" class="btn btn-action btn-color-02 btn-round">
                                                    ยกเลิก <em class="far fa-times-circle ml-1"></em>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
