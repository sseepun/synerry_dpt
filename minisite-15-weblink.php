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
            'leading' => 'เ',
            'title' => 'ว็บลิงค์',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-04.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'เว็บลิงค์', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section>
        <div class="container container-padding adaptive">
            <?php 
                $sectionOptions = [ 'filter', 'order', 'search' ];
                include_once('component/section-options.php');
            ?>
            <div class="gallery-grids" data-aos="fade-up" data-aos-delay="300">
                <?php for($j=0; $j<16; $j++){?>
                    <div class="grid lg-25 md-1-3 xs-50 mt-0 mb-3">
                        <?php
                            $cardType = 'Weblink';
                            include('component/minisite-ss-card-01.php');   
                        ?>
                    </div>
                <?php }?>
            </div>
            <div class="pt-1" data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'page-info', 'pp'];
                    include('component/minisite-list-footer.php');
                ?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
