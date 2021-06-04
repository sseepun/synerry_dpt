<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 1;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'แ',
            'title' => 'แผนผังองค์กร',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-04.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'แผนผังองค์กร', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container">

            ระบบค้นหาข้อมูล (Simple & Advance Search)
            <ul>
                <li>Action ตอนค้นหา</li>
                <li>หน้าแสดงการค้นหา</li>
                <li>หน้าอ่านรายละเอียด</li>
            </ul>

        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
