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
            [ 'url' => '#', 'display' => 'วิสัยทัศน์ พันธกิจ' ],
        ];
        $breadcrumbTitle = 'วิสัยทัศน์ พันธกิจ';
        $breadcrumbBg = 'public/assets/app/images/bg/02.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="about-01 img-fill" style="background-image:url('public/assets/app/images/bg/mission-01.jpg');">
        <div class="container">
            <div class="text-wrapper">
                <h6 class="h5 fw-600" data-aos="fade-up" data-aos-delay="450">
                    วิสัยทัศน์กระทรวงพลังงาน
                </h6>
                <div class="quote-container h4 xl fw-100 lh-xs xs-no-br" data-aos="fade-up" data-aos-delay="600">
                    <span class="quote-start text-xl fw-600">ประเทศไทย</span> <br>
                    มีความ<span class="fw-600 text-xl">มั่นคง</span><span class="fw-600">ด้านพลังงาน</span> <br>
                    เป็น<span class="fw-600 text-xl">ศูนย์กลาง</span><span class="fw-600">พลังงาน</span>ในภูมิภาคเอเชีย <br>
                    เศรษฐกิจฐานราก <br>
                    มีความ<span class="fw-600 text-xl">เข้มแข็ง</span><span class="quote-end fw-600">จากภาคพลังงาน</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about-01 text-right img-fill" style="background-image:url('public/assets/app/images/bg/mission-02.jpg');">
        <div class="container">
            <div class="text-wrapper">
                <h6 class="h5 fw-600" data-aos="fade-up" data-aos-delay="150">
                    พันธกิจกระทรวงพลังงาน
                </h6>
                <div class="quote-container h4 xl fw-100 lh-xs xs-no-br" data-aos="fade-up" data-aos-delay="300">
                    <span class="quote-start text-xl fw-600">เสริมสร้าง</span>ความ<span class="text-xl fw-600">มั่นคง</span> <br>
                    <span class="fw-600">ทาง</span><span class="text-xl fw-600">พลังงาน</span>เพื่อรองรับ <br>
                    <span class="fw-600 text-xl">การเติบโต</span><span class="fw-600">ทางเศรษฐกิจ</span>และ <br>
                    <span class="fw-600 text-xl">พัฒนางาน</span>ในระดับพื้นที่ <br>
                    ที่เป็นมิตรต่อ<span class="quote-end fw-600 text-xl">สิ่งแวดล้อม</span>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
