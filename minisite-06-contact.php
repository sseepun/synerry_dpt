<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 0;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'ติ',
            'leading_class' => 'stripe-bottom',
            'title' => 'ดต่อเรา',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-05.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ติดต่อเรา', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>

    <section>
        <div class="container container-padding adaptive">
            <?php 
                $sectionOptions = [ 'socials' ];
                include_once('component/section-options.php');
            ?>
            <div class="grids jc-center">
                <div class="grid lg-50 md-75 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <h6 class="h5 fw-400">
                        กรมโยธาธิการและผังเมือง กระทรวงมหาดไทย
                    </h6>
                    <p class="fw-300 mt-1">
                        224 ถนนพระราม 9 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพฯ 10320
                    </p>
                    <table class="table table-icon mt-2">
                        <tbody>
                            <tr>
                                <td><div class="icon"><em class="fas fa-phone-volume"></em></div></td>
                                <td class="p fw-500">โทรศัพท์</td>
                                <td>
                                    <a class="p fw-600 color-11 h-color-01" href="#">
                                        0-2201-8000
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="icon"><em class="fas fa-fax"></em></div></td>
                                <td class="p fw-500">โทรสาร</td>
                                <td>
                                    <a class="p fw-600 color-11 h-color-01" href="#">
                                        0-2273-0895
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="icon"><em class="far fa-envelope"></em></div></td>
                                <td class="p fw-500">อีเมล</td>
                                <td>
                                    <a class="p fw-600 color-11 h-color-01" href="#">
                                        webmaster@dpt.mail.go.th
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="icon"><em class="fas fa-headset"></em></div></td>
                                <td class="p fw-500" colspan="2">
                                    ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน	
                                    <a class="h4 fw-600 color-11 h-color-01 lh-3xs ml-3" href="#">
                                        1111
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="icon"><em class="far fa-clock"></em></div></td>
                                <td class="p fw-500" colspan="2">
                                    เวลาเปิด / ปิดทำการ		
                                    <a class="p fw-600 color-11 h-color-01 ml-3" href="#">
                                        8.00 - 16.00 น.
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="grid lg-50 md-75 sm-100 xl-mt-0" data-aos="fade-up" data-aos-delay="450">
                    <div class="border-6 bcolor-01">
                        <img class="img" src="public/assets/app/images/misc/map.jpg" alt="Image Map" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('component/section-contact.php'); ?>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
