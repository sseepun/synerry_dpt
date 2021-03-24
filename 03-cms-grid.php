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
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbBg = 'public/assets/app/images/bg/01.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <?php
                $listHeader = ['search', 'category', 'order'];
                include('component/list-header.php');
            ?>
            <div class="grids">
                <?php for($i=0; $i<11; $i++){?>
                    <?php if($i==0){?>
                        <div class="grid xl-50 lg-2-3 sm-100">
                            <div class="ss-card ss-card-04 adaptive">
                                <a class="ss-img adaptive" href="#">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
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
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
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
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
