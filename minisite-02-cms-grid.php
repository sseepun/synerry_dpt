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
            'leading' => 'ค',
            'leading_class' => 'stripe-bottom',
            'title' => 'ลังภาพ',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-01.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'คลังภาพ', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>

    <section class="section-02">
        <div class="container">
            <?php 
                $sectionOptions = [ 'filter', 'order', 'display', 'rss', 'search' ];
                include_once('component/section-options.php');
            ?>
            <div class="tab-container">
                <div class="grids">
                    <div class="grid xl-25 lg-30 md-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="tabs tabs-04">
                            <div class="bg-filter mask"></div>
                            <a class="tab active" href="#">ภาพกิจกรรม</a>
                            <a class="tab" href="#">ภาพงาน CSR</a>
                            <a class="tab" href="#">อินโฟกราฟิก</a>
                        </div>
                    </div>
                    <div class="grid xl-75 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="450">
                        <div class="slide-container slide-container-01">
                            <div class="slides">
                                <?php for($j=0; $j<6; $j++){?>
                                    <div class="slide">
                                        <?php
                                            $cardType = 'Image';
                                            include('component/minisite-ss-card-06.php');   
                                        ?>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="dots dots-square"></div>
                        </div>
                        <div class="grids">
                            <?php for($j=0; $j<9; $j++){?>
                                <div class="grid xl-1-3">
                                    <?php
                                        $cardType = 'Image';
                                        include('component/minisite-ss-card-01.php');   
                                    ?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="pt-4" data-aos="fade-up" data-aos-delay="0">
                    <?php
                        $listFooter = ['total', 'pagination', 'page-info', 'pp'];
                        include('component/minisite-list-footer.php');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
