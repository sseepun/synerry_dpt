<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'เข้าสู่ระบบ' ],
        ];
        $breadcrumbTitle = 'เข้าสู่ระบบ';
        $breadcrumbBg = 'public/assets/app/images/bg/15.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-box" data-aos="fade-up" data-aos-delay="600">
                <div class="d-flex ai-center jc-space-between fw-wrap">
                    <div class="ss-icon-title width-auto mt-0 mr-3 pt-0">
                        <em class="far fa-user"></em>
                        <div class="text-wrapper">
                            <h6 class="h5 sm fw-600 color-black ws-nowrap">
                                ขอรหัสผ่านใหม่
                            </h6>
                        </div>
                    </div>
                </div>
                <form action="/" method="POST">
                    <p class="mt-4">
                        กรุณากรอกอีเมล์ในช่องข้างล่างเพื่อเริ่มตั้งค่ารหัสผ่านใหม่
                    </p>
                    <div class="form-group mt-2">
                        <label class="p fw-400">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" required title="General Text Input" />
                    </div>
                    <div class="btns mt-4">
                        <button type="submit" class="btn btn-action btn-color-p btn-min-width">
                            ขอรหัสผ่านใหม่
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
