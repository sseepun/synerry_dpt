<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'รู้จักสำนักงานปลัดฯ' ],
                    [ 'url' => '#', 'name' => 'สมัครรับข่าวสาร' ],
                ];
                include_once('component/breadcrumb-03.php');
            ?>
        </div>
    </section>

    <section class="pt-2 pb-5 mb-4">
        <div class="container">
            <h2 class="mt-0 mb-0" data-aos="fade-up" data-aos-delay="300">
                สมัครรับข่าวสาร
            </h2>
            <form action="./" method="POST">
                <div class="ss-box ss-box-02 border mt-5" data-aos="fade-up" data-aos-delay="600">
                    <div class="ss-icon-title mt-0 mb-1">
                        <div class="icon bg-color-07 color-white"><i class="fas fa-mail-bulk"></i></div>
                        <h4 class="fw-500">แบบฟอร์มสมัครรับข่าวสาร</h4>
                    </div>
                    <div class="form-group mt-4">
                        <label>อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" required />
                    </div>
                    <p class="mt-3 mb-3 text-sm">
                        กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม
                    </p>

                    <div class="border-bottom pb-4">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="c_<?= $i ?>" />
                                <label class="form-check-label" for="c_<?= $i ?>">
                                    ข่าวจากหน่วยงานส่วนกลาง
                                </label>
                            </div>
                        <?php }?>
                        <div class="ml-4">
                            <?php for($i=4; $i<7; $i++){?>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="c_<?= $i ?>" />
                                    <label class="form-check-label" for="c_<?= $i ?>">
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </label>
                                </div>
                            <?php }?>
                        </div>

                        <div class="captcha-container mt-4">
                            <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                        </div>
                    </div>

                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-round custom-btn-09">
                            <i class="far fa-check-circle mr-1"></i> ตกลง
                        </button>
                        <a class="btn btn-round custom-btn-sgray btn-form-clear" href="#">
                            <i class="far fa-times-circle mr-1"></i> ล้างข้อมูล
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
