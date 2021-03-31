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
            [ 'url' => '#', 'display' => 'รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง' ],
        ];
        $breadcrumbTitle = 'รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง';
        $breadcrumbBg = 'public/assets/app/images/bg/10.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="gallery-grids" data-aos="fade-up" data-aos-delay="300">
                <?php for($i=0; $i<15; $i++){?>
                    <div class="grid xl-20 lg-25 md-1-3 sm-50 my-2">
                        <div class="ss-card ss-card-03 bradius-round ovf-hidden">
                            <a class="ss-img" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/client/0<?= $i%3+5 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <a class="title p fw-600 text-center" href="#">
                                    กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
