<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 0;
        include_once('include/topnav-minisite.php');
    ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<5; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/<?= sprintf('%02d', ($i+2)%3+1) ?>.jpg');">
                        <!-- <div class="container text-center">
                            <h6 class="h1 fw-500 color-02 animate" style="--delay:.75s;">
                                <span class="font-01">สถาปนิกหลวง</span>
                            </h6>
                            <p class="h6 fw-400 animate" style="--delay:.9s;">
                                <span class="font-01">
                                    ในฐานะช่างของแผ่นดิน เรามุ่งให้บริการงานช่างและให้คำปรึกษาด้านช่างทุกระดับ
                                </span>
                            </p>
                        </div> -->
                    </div>
                <?php }?>
            </div>
            <div class="pattern-container">
                <div class="container">
                    <div class="pattern" style="background-image:url('public/assets/app/images/misc/pattern-01.png');"></div>
                </div>
            </div>
            <div class="bullet">
                <div class="bullet-wrapper">
                    <div class="dots"></div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-01" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="contents">
                <?php
                    foreach([
                        [ 'num' => '๑', 'title' => 'การบริการประชาชน' ],
                        [ 'num' => '๒', 'title' => 'ข่าวสารประชาสัมพันธ์' ],
                        [ 'num' => '๓', 'title' => 'กฏหมายแบบฟอร์ม' ],
                        [ 'num' => '๔', 'title' => 'เผยแพร่ความรู้' ],
                        [ 'num' => '๕', 'title' => 'ติดต่อสอบถาม' ],
                        [ 'num' => '๖', 'title' => 'แผนงาน / รายงานผล' ],
                    ] as $i=>$d){
                ?>
                    <a class="content" href="#">
                        <div class="bg-container clip-path-01">
                            <div class="wrapper">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/intro-<?= sprintf('%02d', $i+1) ?>.jpg');"></div>
                                <div class="filter"></div>
                                <div class="gross"></div>
                            </div>
                        </div>
                        <div class="icon-container">
                            <img src="public/assets/app/images/icon/handling.png" alt="Image Icon" />
                        </div>
                        <div class="text-container">
                            <div class="wrapper">
                                <div class="num h2 lg fw-500">
                                    <span class="font-01"><?= $d['num'] ?>.</span>
                                </div>
                                <h6 class="title p"><?= $d['title'] ?></h6>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>

    <?php
        $categories = [
            'ข่าวกิจกรรม', 'ข่าวประชาสัมพันธ์', 'ข่าวตัดจากหนังสือพิมพ์', 
            'ข่าวกรม', 'วารสารกรมฯ', 'คลังข่าวมหาดไทย'
        ];
    ?>
    <section class="section-padding ovf-hidden bg-gray-gradient">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="ss-icon-title-01">
                    <div class="text-icon fw-400 color-03">ข้</div>
                    <div class="text-wrapper">
                        <div class="title fw-400 color-03">อมูลข่าวสารประชาสัมพันธ์</div>
                        <div class="desc fw-200 color-dark">
                            กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-container">
                <div class="grids">
                    <div class="grid xl-25 lg-30 md-40 sm-100" data-aos="fade-up" data-aos-delay="0">
                        <div class="tabs tabs-04">
                            <div class="bg-filter"></div>
                            <?php foreach($categories as $i=>$c){?>
                                <a 
                                    class="tab <?php if($i==0)echo 'active'; ?>" 
                                    href="#" data-tab="<?= $i ?>"
                                >
                                    <?= $c ?>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="grid xl-75 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <div class="tab-contents">
                            <?php foreach($categories as $i=>$c){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <?php
                                        $j = $i;
                                        $cardType = 'Image';
                                        include('component/minisite-ss-card-06.php');   
                                    ?>
                                    <div class="grids">
                                        <?php for($k=0; $k<4; $k++){?>
                                            <div class="grid lg-50 sm-100">
                                                <?php
                                                    $j = $i + $k + 1;
                                                    $cardType = 'Image Preview';
                                                    include('component/minisite-ss-card-06.php');  
                                                ?>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="pt-4" data-aos="fade-up" data-aos-delay="0">
                    <?php
                        $listFooter = ['pagination'];
                        $listFooterClass = 'jc-center';
                        include('component/minisite-list-footer.php');
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="text-center">
                <h6 class="h3 fw-500 color-03">
                    จัดซื้อจัดจ้าง (RSS บัญชีกลาง)
                </h6>
                <p class="lg">
                    <span class="font-01">
                        กรมโยธาธิการและผังเมืองยินดีรับใช้ พร้อมให้บริการประชาชน
                    </span>
                </p>
            </div>
            <div class="grids jc-center pt-1 mt-4">
                <div class="grid xl-2-3 lg-75 sm-100 mt-0">
                    <div class="tab-container">
                        <div class="tabs tabs-02">
                            <a class="tab active" href="#" data-tab="0">
                                จัดซื้อจัดจ้าง (RSS บัญชีกลาง)
                            </a>
                            <a class="tab" href="#" data-tab="1">
                                จัดซื้อจัดจ้าง กรมโยธาและผังเมือง
                            </a>
                        </div>
                        <div class="tab-contents">
                            <?php for($i=0; $i<2; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <?php for($j=0; $j<8; $j++){?>
                                        <?php include('component/ss-card-02.php'); ?>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-07 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="text-center">
                <h6 class="h3 xs fw-500 color-03">
                    ชวนดูวิดีโอ
                </h6>
                <p class="lg">
                    <span class="font-01">
                        ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ
                    </span>
                </p>
            </div>
            <div class="slide-container pt-1 mt-4">
                <div class="slides">
                    <?php for($j=0; $j<6; $j++){?>
                        <div class="slide">
                            <?php
                                $cardType = 'Video Preview';
                                include('component/minisite-ss-card-01.php');  
                            ?>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows">
                    <a class="arrow arrow-prev" href="#">
                        <svg width="10" height="16" viewBox="0 0 10 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.950197 8L8.45019 0.499999L9.50019 1.55L3.0502 8L9.5002 14.45L8.4502 15.5L0.950197 8Z" />
                        </svg>
                    </a>
                    <a class="arrow arrow-next" href="#">
                        <svg width="10" height="16" viewBox="0 0 10 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.950197 8L8.45019 0.499999L9.50019 1.55L3.0502 8L9.5002 14.45L8.4502 15.5L0.950197 8Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
