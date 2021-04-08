<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading bg-fgray">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'เ',
            'title' => 'ว็บลิงค์',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-03.jpg',
            'show_search' => false,
            'structure' => [
                [ 'name' => 'เว็บลิงค์', 'url' => '#' ],
                [ 'name' => 'หน่วยงานภายใน', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <section class="section-01">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-03.jpg');"></div>
            <div class="ss-box width-full position-relative tab-container" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-shadow xl"></div>
                <div class="options">
                    <a class="option" href="#">
                        <p class="fw-200 px-3">แชร์</p>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-facebook-f"></em>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-twitter"></em>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-line"></em>
                    </a>
                    <a class="option option-search" href="#">
                        <em class="fas fa-search"></em>
                    </a>
                </div>
                <div class="header bg-01 pl-1 pr-0 py-0">
                    <div class="tabs tabs-03">
                        <a class="tab active" href="#" data-tab="0">
                            <span>หน่วยงานภายใน</span>
                        </a>
                        <a class="tab" href="#" data-tab="1">
                            <span>หน่วยงานภายนอก</span>
                        </a>
                        <a class="btn-setting" href="#">
                            <img src="public/assets/app/images/icon/more.png" alt="Image Icon" />
                        </a>
                    </div>
                </div>
                <div class="body">
                    <div class="tab-contents">
                        <?php for($i=0; $i<2; $i++){?>
                            <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                <div class="grids">
                                    <?php for($j=0; $j<16; $j++){?>
                                        <div class="grid xl-25 lg-1-3">
                                            <div class="ss-card ss-card-01">
                                                <div class="ss-img">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/weblink-<?= sprintf('%02d', ($j+$i)%8+1) ?>.jpg');"></div>
                                                    <div class="tag-count">
                                                        <img src="public/assets/app/images/icon/book.png" alt="Image Icon" />
                                                        255
                                                    </div>
                                                    <div class="hover-container"></div>
                                                </div>
                                                <div class="text-container pb-0 bcolor-01">
                                                    <a class="title p fw-400 color-black h-color-01 line-3" href="#">
                                                        การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
                                                    </a>
                                                    <div class="btns mt-3">
                                                        <a class="btn btn-more fw-400" href="#">
                                                            ไปที่เว็บไซต์
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="mt-4 pt-3 pb-4">
                        <?php
                            $listFooter = ['total', 'pagination', 'pp'];
                            include('component/list-footer.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
