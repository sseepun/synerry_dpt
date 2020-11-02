<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'คลังวิดีโอ' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-04">
        <div class="top-container" data-aos="fade-up" data-aos-delay="300" 
        style="background:url('public/assets/app/images/bg/32.jpg') center/cover;">
            <div class="container">
                <div class="ss-mp4">
                    <div class="wrapper">
                        <video controls>
                            <source src="public/assets/app/video/01.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-container" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="box-wrapper">

                    <div class="pb-3">
                        <h2 class="fw-500 mt-2">
                            ก.อุตฯ ส่งมอบชุดบำบัดน้ำเสียจากครัวเรือน ข่าวค่ำ วันที่ 8 กรกฎาคม 2563 
                        </h2>
                        <?php include_once('component/post-header.php'); ?>
                    </div>
                    
                    <div class="shortcode bg-color-gray">
                        <div class="wrapper">
                            <label>Embed code</label>
                            <input type="text" value="Test code" />
                            <button class="btn">Copy</button>
                        </div>
                    </div>

                    <div class="post-content pl-0">
                        <p class="fw-300">
                            อีกหนึ่งกลุ่มที่ได้รับผลกระทบจากโควิด-19 ก็คือ กลุ่มธุรกิจร้านอาหารเคลื่อนที่ หรือ Food Truck 
                            จากการถูกสั่งปิดพื้นที่จอดรถ ขายอาหาร แม้ในช่วงที่มีการคลายล็อกแล้วก็ต้องให้บริการในแบบวิถีใหม่ 
                            ดังนั้น เพื่อช่วย เพิ่มยอดขายให้กับผู้ประกอบการ กระทรวง อุตสาหกรรม จึงได้ผลักดันให้ 
                            Food Truck ขายผ่านแอพพลิเคชัน ส่งอาหารแบบเดลิเวอรี่
                        </p>                 
                    </div>
                    <?php include_once('component/post-footer.php'); ?>

                    <!-- Download -->
                    <div class="post-topic">
                        <div class="icon bg-color-blue">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <div class="content">
                            <div class="table-wrapper pt-0">
                                <table class="table table-file">
                                    <tbody>
                                        <?php for($i=0; $i<3; $i++){?>
                                            <tr>
                                                <td class="border-bottom" style="min-width:380px;">
                                                    <div class="fw-600 color-04 text-lg">
                                                        ประกาศกรมอนามัย ฉบับที่ 27/04.pdf
                                                    </div>
                                                    <div class="table-desc">
                                                        ขนาดไฟล์
                                                        <span class="fw-600 color-04">1.31 MB</span>
                                                        <span class="sep"></span>
                                                        จำนวนดาวน์โหลด
                                                        <span class="fw-600 color-04">16 ครั้ง</span>
                                                        <span class="sep"></span>
                                                        <a class="text-sm" href="#">
                                                            <i class="fas fa-exclamation-triangle color-04 text-2xs"></i> 
                                                            แจ้งไฟล์เสีย
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="border-bottom" style="min-width:130px;">
                                                    <div class="d-flex ai-center jc-end">
                                                        <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                            ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ss-search-container" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาคลังวิดีโอ" autocomplete="off" required />
                    <button type="submit">
                        <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                    </button>
                    <div class="suggestion">
                        <div class="scroll-wrapper" data-simplebar>
                            <?php for($i=0; $i<8; $i++){?>
                                <a class="item" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="text">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                        กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="content-03 section-padding bg-color-gray">
        <div class="container" data-aos="fade-up" data-aos-delay="0">
            <h3 class="text-center color-02 mb-3">คลังวิดีโอ</h3>
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<8; $i++){?>
                        <div class="slide">
                            <a class="post-card post-card-09" href="#">
                                <div class="ss-video bradius-0">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="play-container">
                                        <div class="play-icon">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper bg-color-white">
                                    <div class="title-container">
                                        <div class="title h4">
                                            วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ 
                                            หลักสูตร "การยกระดับมาตรฐาน...
                                        </div>
                                    </div>
                                    <div class="post-stats-02 sm">
                                        <div class="block">
                                            24-08-2563
                                            <span class="sep"></span>
                                            เปิดดู : 130
                                        </div>
                                        <div class="btn-float">อ่านเพิ่ม</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
