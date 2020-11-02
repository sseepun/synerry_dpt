<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'วิสัยทัศน์'],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/50.jpg">
        <div class="container">
            <div class="text-container-02" data-aos="fade-up" data-aos-delay="0">
                <h1 class="text-center">
                    วิสัยทัศน์
                </h1>
                <p class="text-center">
                    "เป็นองค์กรขับเคลื่อนการพัฒนาอุตสาหกรรม และผู้ประกอบการให้มีศักยภาพที่
                </p>
                <p class="text-center mt-2">
                    เข้มแข็งและพัฒนาอย่างต่อเนื่อง รวมถึงการรักษาสิ่งแวดล้อมอย่างยั่งยืน"
                </p>
            </div>
        </div>
    </section>
        
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
