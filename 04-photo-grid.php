<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'ค',
            'leading_class' => 'stripe-bottom',
            'title' => 'ลังภาพ',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-05.jpg',
            'show_search' => false,
            'structure' => [
                [ 'name' => 'คลังภาพ', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <?php $categories = ['ภาพกิจกรรม', 'ภาพงาน CSR', 'อินโฟกราฟิก']; ?>
    <section class="section-01 xl-bottom">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-06.jpg');"></div>
            <div class="tab-container">

                <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-box-shadow xl"></div>
                    <div class="options">
                        <div class="option option-select">
                            <div class="select-wrapper">
                                <select class="fw-300">
                                    <option value="">ใหม่ล่าสุด</option>
                                </select>
                            </div>
                        </div>
                        <a class="option" href="#">
                            <em class="fas fa-th-list"></em>
                        </a>
                        <a class="option active" href="#">
                            <em class="fas fa-th"></em>
                        </a>
                        <a class="option" href="#">
                            <em class="fas fa-rss"></em>
                        </a>
                        <a class="option option-search" href="#">
                            <em class="fas fa-search"></em>
                        </a>
                    </div>
                    <div class="header bg-01 pl-1 pr-0 py-0">
                        <div class="tabs tabs-03">
                            <?php foreach($categories as $i=>$c){?>
                                <a class="tab <?php if($i==0)echo 'active'; ?>" href="#" data-tab="<?= $i ?>">
                                    <span><?= $c ?></span>
                                </a>
                            <?php }?>
                            <a class="btn-setting" href="#">
                                <img src="public/assets/app/images/icon/more.png" alt="Image Icon" />
                            </a>
                        </div>
                    </div>
                    <div class="body border-4 border-top-0 bcolor-01">
                        <div class="tab-contents">
                            <?php foreach($categories as $i=>$c){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="slide-container slide-container-01">
                                        <div class="slides">
                                            <?php for($k=0; $k<4; $k++){ $j = ($i+$k)%4+1;?>
                                                <div class="slide">
                                                    <div class="ss-card ss-card-06">
                                                        <div class="grids">
                                                            <div class="grid xl-40 lg-50 md-40 sm-100 mt-0">
                                                                <a class="ss-img adaptive" href="#">
                                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                                                    <div class="tag-counts left">
                                                                        <div class="tag-count">
                                                                            <img src="public/assets/app/images/icon/book.png" alt="Image Icon" />
                                                                            255
                                                                        </div>
                                                                        <div class="tag-count">
                                                                            <img src="public/assets/app/images/icon/image.png" alt="Image Icon" />
                                                                            20
                                                                        </div>
                                                                    </div>
                                                                    <div class="hover-container">
                                                                        <div class="icon">
                                                                            <img src="public/assets/app/images/icon/plus.png" alt="Image Icon" />
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="grid xl-60 lg-50 md-60 sm-100 mt-0">
                                                                <div class="text-container">
                                                                    <div class="ss-tags">
                                                                        <div class="tag">ข่าวประชาสัมพันธ์</div>
                                                                        <div class="tag">ที่ดิน</div>
                                                                    </div>
                                                                    <a class="title h6 sm fw-400 color-03 h-color-01 mt-2" href="#">
                                                                        การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
                                                                    </a>
                                                                    <p class="xxs fw-600 mt-1">
                                                                        <span class="font-01">19 กุมภาพันธ์ 2564</span>
                                                                    </p>
                                                                    <p class="desc p xs fw-600 color-dark mt-3">
                                                                        <span class="font-01">
                                                                            การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชนหนองหลวงพัฒนา 
                                                                            อำเภอเมืองชัยนาท จังหวัดชัยนาท
                                                                        </span>
                                                                    </p>
                                                                    <div class="btns mt-3">
                                                                        <a class="btn btn-ss btn-action btn-color-07" href="#">
                                                                            อ่านเพิ่มเติม
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="dots style-right"></div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="tab-contents mt-3" data-aos="fade-up" data-aos-delay="450">
                    <?php foreach($categories as $i=>$c){?>
                        <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                            <div class="grids">
                                <?php for($k=0; $k<12; $k++){ $j = ($i+$k)%4+1;?>
                                    <div class="grid lg-25">
                                        <?php include('component/ss-card-01-photo.php'); ?>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="pt-2 mt-5 border-top bcolor-sgray">
                                <?php
                                    $listFooter = ['total', 'pagination', 'pp'];
                                    include('component/list-footer.php');
                                ?>
                            </div>
                        </div>
                    <?php }?>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
