<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'รู้จักสำนักงานปลัดฯ' ],
                    [ 'url' => '#', 'name' => 'ยกเลิกการรับข่าวสาร' ],
                ];
                include_once('component/breadcrumb-03.php');
            ?>
        </div>
    </section>

    <section class="pt-2 pb-5 mb-4">
        <div class="container">
            <h2 class="mt-0 mb-0" data-aos="fade-up" data-aos-delay="300">
                ยกเลิกการรับข่าวสาร
            </h2>
            <form action="" method="POST">
                <div class="ss-box ss-box-02 border mt-5" data-aos="fade-up" data-aos-delay="600">
                    <div class="ss-icon-title mt-0 mb-1">
                        <div class="icon bg-color-07 color-white"><i class="fas fa-mail-bulk"></i></div>
                        <h4 class="fw-500">แบบฟอร์มยกเลิกการรับข่าวสาร</h4>
                    </div>
                    <p class="mt-4 text-sm">
                        หากท่านต้องการยกเลิกการรับช่าวสาร กรุณากรอกอีเมล์ที่ท่านต้องการยกเลิกด้านล่าง
                    </p>
                    <div class="form-group mt-3">
                        <label>อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="กรุณากรอกอีเมลที่ต้องการยกเลิกข่าวสาร" required />
                    </div>
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-round custom-btn-09">
                            ยกเลิกการรับช่าวสาร
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
