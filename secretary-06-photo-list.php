<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'คลังภาพ' ],
        ];
        $breadcrumbTitle = 'คลังภาพ';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-06.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <?php
                $listHeader = ['search', 'category', 'order', 'icon-grid', 'icon-rss'];
                include('component/list-header.php');
            ?>
            <div class="mt-4">
                <?php for($i=0; $i<16; $i++){?>
                    <div class="ss-card ss-card-07">
                        <div class="img-container">
                            <a class="ss-img adaptive-list" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-container">
                            <div class="d-flex">
                                <div class="card-tag">
                                    ข่าวประชาสัมพันธ์
                                </div>
                            </div>
                            <a class="title p md fw-600 mt-3" href="#">
                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                            </a>
                            <div class="ss-stat">
                                <div class="stat">
                                    8 มกราคม 2020
                                </div>
                                <div class="stat">
                                    <em class="far fa-images mr-1"></em> 15
                                </div>
                                <div class="stat">
                                    <em class="far fa-eye mr-1"></em> 178
                                </div>
                            </div>
                            <div class="arrow">
                                <em class="far fa-arrow-alt-circle-right"></em>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <?php
                $listFooter = ['total', 'pagination', 'pp'];
                include('component/list-footer.php');
            ?>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
