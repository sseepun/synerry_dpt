<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <?php
        $breadcrumb = [
            'leading' => 'ค',
            'leading_class' => 'stripe-bottom',
            'title' => 'ลังภาพ',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-01-minisite.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'คลังภาพ', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>

    <div style="height:800px;"></div>
    
    <?php // include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
