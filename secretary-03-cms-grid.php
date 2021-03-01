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
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-01.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <?php
                $categories = [
                    'ข่าวประชาสัมพันธ์', 'กิจกรรมพลังงานจังหวัด', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร',
                    'เรื่องเด่นประเด็นดัง', 'ข่าวจัดซื้อจัดจ้าง', 'ประกาศรับสมัครงาน'
                ];
            ?>
            <div class="tab-container">
                <div class="tabs tabs-01">
                    <?php foreach($categories as $j=>$k){?>
                        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                            <?= $k ?>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php foreach($categories as $j=>$k){?>
                        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                            <?php
                                $listHeader = ['search', 'category', 'order', 'icon-grid', 'icon-rss'];
                                include('component/list-header.php');
                            ?>
                            <div class="grids mt-2">

                                <div class="grid xl-75 lg-2-3 sm-100">
                                    <div class="ss-card ss-card-05 use-slick">
                                        <div class="img-container">
                                            <div class="wrapper">
                                                <?php for($i=0; $i<4; $i++){?>
                                                    <div class="img-wrapper <?php if($i==0)echo 'active'; ?>" data-i="<?= $i ?>">
                                                        <a class="ss-img adaptive" href="#">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                            <div class="hover-container">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                            <div class="slide-container">
                                                <div class="slides">
                                                    <?php for($i=0; $i<4; $i++){?>
                                                        <div class="slide">
                                                            
                                                            <div class="wrapper">
                                                                <a class="title p lg fw-600" href="#">
                                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                                </a>
                                                                <div class="ss-stat jc-start">
                                                                    <div class="stat">
                                                                        8 มกราคม 2020
                                                                    </div>
                                                                    <div class="stat">
                                                                        <em class="far fa-eye mr-1"></em> 178
                                                                    </div>
                                                                </div>
                                                                <p class="desc xs lh-lg">
                                                                    วันนี้ (5 ธ.ค. 63) นายกุลิศ สมบัติศิริ ปลัดกระทรวงพลังงาน พร้อมด้วยนายสมบูรณ์ 
                                                                    หน่อแก้ว รองปลัดกระทรวงพลังงาน ได้ให้เกียรติเยี่ยมชมบูธกระทรวงพลังงาน 
                                                                    ร่วมกับการไฟฟ้าฝ่ายผลิตแห่งประเทศไทย และบริษัท ปตท. จำกัด (มหาชน)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                <div class="arrows"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid xl-25 lg-1-3 sm-100">
                                    <div class="ss-ads ss-ads-01" style="background-image:url('public/assets/app/images/bg/ads-01.jpg');">
                                        <div class="wrapper">
                                            <div class="text-center color-white">
                                                <h6 class="h4 fw-600 lh-xs md-no-br">
                                                    อัพเดท<br>ข้อมูลทันใจ
                                                </h6>
                                                <p class="h6 fw-300 md-no-br mt-1">
                                                    แค่สมัครรับข่าวสารออนไลน์<br>ง่ายๆ แค่คลิก
                                                </p>
                                            </div>
                                            <div class="btns text-center">
                                                <a class="btn btn-action btn-round btn-sm btn-color-05" href="#">
                                                    สมัครรับข่าวสาร
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php for($i=0; $i<11; $i++){?>
                                    <?php if($i==0){?>
                                        <div class="grid xl-50 lg-2-3 sm-100">
                                            <div class="ss-card ss-card-04 adaptive">
                                                <a class="ss-img adaptive" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="wrapper">
                                                        <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                                        <a class="title p md fw-600" href="#">
                                                            สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                            สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                        </a>
                                                        <div class="ss-stat jc-start">
                                                            <div class="stat">
                                                                8 มกราคม 2020
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
                                            </div>
                                        </div>
                                    <?php }else{?>
                                        <div class="grid xl-25 lg-1-3 sm-50">
                                            <div class="ss-card ss-card-04">
                                                <a class="ss-img square" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                        สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <div class="ss-stat jc-start">
                                                        <div class="stat">
                                                            8 มกราคม 2020
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
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <?php
                                $listFooter = ['total', 'pagination', 'pp'];
                                include('component/list-footer.php');
                            ?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
