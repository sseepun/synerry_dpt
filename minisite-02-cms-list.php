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
            'leading' => 'ข้',
            'leading_class' => 'stripe-bottom',
            'title' => 'อมูลข่าวสารประชาสัมพันธ์',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-09.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ข่าวประชาสัมพันธ์', 'url' => '#' ]
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
                            <a class="tab active" href="#">ข่าวกิจกรรม</a>
                            <a class="tab" href="#">ข่าวประชาสัมพันธ์</a>
                            <a class="tab" href="#">ข่าวตัดจากหนังสือพิม</a>
                            <a class="tab" href="#">ข่าวกรม</a>
                            <a class="tab" href="#">วารสารกรม</a>
                            <a class="tab" href="#">คลังข่าวมหาดไทย</a>
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
                            <?php for($j=0; $j<10; $j++){?>
                                <div class="grid xl-50">
                                    <div class="ss-card" style="display: flex;">
                                        <div class="img-con" style="width:10rem;">
                                            <a class="ss-img adaptive" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-<?= empty($j)? '01': sprintf('%02d', $j%6+1) ?>.jpg');"></div>
                                                
                                                <div class="minisite-tag-counts">
                                                    <div class="tag-count">
                                                        <em class="far fa-images mr-2"></em>
                                                        84
                                                    </div>
                                                </div>
                                                <div class="hover-container">
                                                    <div class="icon sm">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Image Icon" />
                                                    </div>
                                                </div>                     
                                            </a>
                                        </div>
                                        <div class="ss-card-01 text-container bcolor-sgray" style="width:calc(100% - 10rem);padding:1rem; border-left:.1875rem solid transparent; transition:background .25s;border:1px solid transparent; border-left:0;">
                                            <p class="xs fw-400 color-gray">ข่าวประชาสัมพันธ์</p>
                                            <a class="title p fw-400 color-03 h-color-01 mt-1" href="#" style="-webkit-line-clamp:2; min-height:2.5625rem;">
                                                <?php if ($j%2==0){
                                                    echo"การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา";
                                                }else{
                                                    echo"การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒ
                                                    การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒน
                                                    การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนนา";
                                                }?>

                                            </a>
                                            <p class="xxs fw-500 mt-2">
                                                19 กุมภาพันธ์ 2564
                                                <em class="fas fa-eye color-01 ml-4 mr-1"></em>
                                                388
                                            </p>
                                            <div class="btns mt-3 minisite">
                                                <a class="btn btn-more" href="#">
                                                    อ่านเพิ่มเติม
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
