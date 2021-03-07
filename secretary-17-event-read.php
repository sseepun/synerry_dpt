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
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-21.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black">
                งานสัมมนาและนิทรรศการ "เปิดประสบการณ์ เทคนิค การผลิตไฟฟ้าจากพลังงานทดแทน
                (ปัญหา อุปสรรค และวิธีการแก้ไข)"
            </h6>
            <div class="mt-2 mb-3">
                <?php include('component/post-header.php'); ?>
            </div>
            <img class="img bradius-round" src="public/assets/app/images/content/11.jpg" alt="Post Content Image" />
            <div class="post-stat mt-3">
                <div class="block">
                    <div class="stat">
                        <em class="far fa-calendar-alt"></em> 22 มกราคม 2564
                    </div>
                    <div class="stat">
                        <em class="far fa-clock"></em> 8.00-17.30 น.
                    </div>
                    <div class="stat">
                        <em class="fas fa-map-marker-alt"></em> ศูนย์การประชุมแห่งชาติสิริกิติ์
                    </div>
                </div>
            </div>
            <div class="post-content width-full mt-2">
                <p class="lh-lg">
                    การจัดงานสัมมนาและนิทรรศการ หัวข้อ “เปิดประสบการณ์ เทคนิค การผลิตไฟฟ้าจากพลังงานทดแทน 
                    (ปัญหา อุปสรรค และวิธีการแก้ไข)” มุ่งเน้นให้เกิดการพัฒนาบุคลากร ทั้งระดับผู้บริหารและระดับปฏิบัติการ 
                    เพื่อเสริมสร้างความรู้ ความเข้าใจเชิงเทคนิคในการเพิ่มประสิทธิภาพการผลิตไฟฟ้าจากพลังงานทดแทน 
                    อันจะนำมาซึ่งเสถียรภาพและความมั่นคงด้านพลังงานของประเทศ ดังนั้น ผู้เข้าร่วมงานสัมมนาในครั้งนี้ คือ 
                    บุคลากรระดับบริหารและระดับปฏิบัติการ
                </p>
            </div>
            <div class="mt-2 mb-3">
                <?php
                    $postFooter = ['icon-social'];
                    include('component/post-footer.php');
                ?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-code"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        Embed
                    </h6>
                </div>
            </div>
            <div class="post-video pt-2 pb-3">
                <div class="wrapper">
                    <video class="fit" controls="">
                        <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="far fa-calendar-alt"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ปฏิทินกิจกรรมที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids pb-3">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-10 bradius-round">
                            <div class="img-container bradius-round ovf-hidden">
                                <a class="ss-img" href="#">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                    <div class="hover-container">
                                        <div class="icon">
                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                        </div>
                                    </div>
                                    <div class="ss-date-container position-top-left">
                                        <div class="ss-date bradius-round">
                                            <div class="date">22</div>
                                            <div class="month">มกราคม</div>
                                            <div class="year">2564</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="text-container">
                                <a class="title p md fw-600" href="#">
                                    งานสัมมนาและนิทรรศการ "เปิดประสบการณ์ เทคนิค การผลิต
                                    ไฟฟ้าจากพลังงานทดแทน
                                </a>
                                <div class="ss-stat">
                                    <div class="stat width-full">
                                        <em class="far fa-calendar-alt icon-round mr-1"></em>
                                        22 มกราคม 2564
                                    </div>
                                    <div class="stat width-full">
                                        <em class="far fa-clock icon-round mr-1"></em>
                                        8.00-17.30 น.
                                    </div>
                                    <div class="stat width-full">
                                        <em class="fas fa-map-marker-alt icon-round mr-1"></em>
                                        ศูนย์การประชุมแห่งชาติสิริกิติ์
                                    </div>
                                </div>
                                <div class="btns mt-3">
                                    <a class="btn btn-action btn-color-01 btn-xs btn-round" href="#">
                                        รายละเอียดเพิ่มเติม
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
