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
            'leading' => 'R',
            'leading_class' => 'stripe-bottom',
            'title' => 'ss Feed',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-03.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'RSS Feed', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section>
        <div class="container container-padding adaptive">
            <?php 
                $sectionOptions = [ 'category', 'filter', 'order', 'search' ];
                include_once('component/section-options.php');
            ?>
            <div data-aos="fade-up" data-aos-delay="300">
                <?php for($i=0; $i<15; $i++){?>
                    <div class="ss-card ss-card-08 border-bottom bcolor-sgray">
                        <div class="icon h4 text-center">
                            <em class="fas fa-rss color-01"></em>
                            <p class="xs fw-500">RSS</p>
                        </div>
                        <div class="text-container">
                            <a class="title p lg fw-400 color-05 h-color-01" href="#">
                                ประกาศสำนักงานปลัดกระทรวงพลังงานเรื่อง ประกาศผู้ชนะการเสนอราคา 
                                ซื้อวัสดุสำนักงาน จำนวน 3 รายการ
                            </a>
                            <p class="sm fw-600 color-01 mt-1">12.04.2564</p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="pt-4" data-aos="fade-up" data-aos-delay="0">
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
