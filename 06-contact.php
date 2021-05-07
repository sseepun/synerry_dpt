<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'ติ',
            'leading_class' => 'stripe-bottom pull-right',
            'title' => 'ดต่อเรา',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-04.jpg',
            'show_search' => false,
            'structure' => [
                [ 'name' => 'ติดต่อเรา', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01-contact.php');
    ?>
    
    <section class="section-01 lg-bottom">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-05.jpg');"></div>
            <div class="grids position-relative">

                <div class="grid xl-1-3 lg-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-box width-full">
                        <div class="ss-box-shadow fade-shadow lg"></div>
                        <div class="header bg-01">
                            <h6 class="p lg fw-500 color-03">
                                แบบฟอร์มติดต่อ
                            </h6>
                        </div>
                        <div class="body pb-4">
                            <p class="sm fw-600">
                                <span class="font-01">
                                    หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอก
                                    แบบฟอร์มด้านล่างนี้ทางเจ้าหน้าที่ะคำเนินการตามคำขอโดยเร็วที่สุด
                                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย *
                                </span>
                            </p>
                            <form action="/" method="GET">
                                <div class="grids">
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">หัวข้อเรื่อง</span> *
                                            </label>
                                            <input type="text" class="fgray" required />
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">เลือกหน่วยงาน</span> *
                                            </label>
                                            <div class="append">
                                                <select class="fgray" required>
                                                    <option value=""></option>
                                                    <option value="1">หน่วยงานที่ 1</option>
                                                    <option value="2">หน่วยงานที่ 2</option>
                                                </select>
                                                <div class="icon">
                                                    <em class="fas fa-chevron-down"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">ชื่อและนามสกุล</span> *
                                            </label>
                                            <input type="text" class="fgray" required />
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">อีเมล</span> *
                                            </label>
                                            <input type="email" class="fgray" required />
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">หมายเลขติดต่อ</span>
                                            </label>
                                            <input type="email" class="fgray" />
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">อัพโหลดหรือแนบไฟล์</span>
                                            </label>
                                            <div class="upload-wrapper fgray">
                                                <input type="file" class="fgray" size="0" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="form-group">
                                            <label class="p fw-600">
                                                <span class="font-01">ข้อความ</span> *
                                            </label>
                                            <textarea rows="6" class="fgray" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="capcha-container mt-3">
                                    <img src="public/assets/app/images/misc/captcha.jpg" alt="Image Capcha" />
                                </div>
                                <div class="btns mt-3">
                                    <button type="submit" class="btn btn-action btn-color-05 clip-path-01 mr-1">
                                        <span class="px-1">
                                            ส่งข้อความ <em class="fas fa-chevron-right sm ml-2"></em>
                                        </span>
                                    </button>
                                    <button type="reset" class="btn btn-action btn-color-06 clip-path-01">
                                        <span class="px-1">
                                            ล้างข้อมูล <em class="fas fa-times sm ml-2"></em>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="grid xl-2-3 lg-60 sm-100 mt-0" data-aos="fade-up" data-aos-delay="450">
                    <div class="right-container">
                        <h6 class="p lg fw-500 color-09">
                            แผนที่สำนักงาน
                        </h6>
                        <div class="right-map">
                            <div class="map-container">
                                <div class="fit img-fill" style="background-image:url('public/assets/app/images/misc/map.jpg');"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
