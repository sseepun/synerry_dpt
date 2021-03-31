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
                <p class="mt-4">
                    ระบบได้ทำการจัดส่งรหัสผ่านไปที่อีเมล์ของคุณแล้ว
                    ระบบจะกลับไปยังหน้าหลักอัตโนมัติ
                </p>
                <div class="btns mt-4">
                    <a class="btn btn-action btn-color-p btn-min-width" href="#">
                        ไปยังหน้าแรก
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
