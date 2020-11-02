<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">ปฏิทินกิจกรรม</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'ปฏิทินกิจกรรม' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2">
                        รมว.สุริยะฯ เผย นิสสันมั่นใจศักยภาพฐานการผลิตของไทย เดินหน้าลงทุนต่อไป
                    </h2>
                    <div class="post-stats">
                        <div class="block">
                            <div class="stat mr-3">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-user.png" alt="Icon" />
                                สำนักบริหารกลาง
                            </div>
                            <div class="stat mr-3">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-clock.png" alt="Icon" />
                                7 เมษายน 2563
                            </div>
                            <div class="stat">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-view.png" alt="Icon" />
                                17 ครั้ง
                            </div>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="public/assets/app/images/bg/48.jpg" alt="Post Image" />
                    </div>
                    <div class="post-stats mt-2">
                        <div class="block">
                            <div class="stat mr-3">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-calendar.png" alt="Icon" />
                                5-8 กรกฎาคม 2563
                            </div>
                            <div class="stat mr-3">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-clock.png" alt="Icon" />
                                11:00 - 19:00 น.
                            </div>
                            <div class="stat">
                                <img class="circle-icon" src="public/assets/app/images/icon/circle-location.png" alt="Icon" />
                                thaibfconference.com
                            </div>
                        </div>
                    </div>

                    <div class="post-content pl-0">
                        <p class="fw-300">
                            อย่าปล่อยให้ใครขโมยข้อมูลเราไปเรียกค่าไถ่ อยากรู้ทันภัยไซเบอร์เฝ้าหน้าจอเลยที่ 
                            Facebook DGA Thailand เชิญมาร่วมรับฟังไอเดียในการรับมือ 
                            "ภํยคุกคามไซเบอร์กับวิถีชีวิตรูปแบบใหม่ Cyber Treats in New Normal" 
                            จาก ดร.ปริญญา หอมเอนก กรรมการผู้ทรงคุณวุฒิ 
                            ด้านการรักษาความมั่นคงปลอดภัยไซเบอร์แห่งชาติ และ ดร.ธัชพล โปษยานนท์ 
                            ผู้อำนวยการศูนย์ความเป็นเลิศด้านดิจิทัล มหาวิทยาลัยหอการค้าไทย ในวันที่ 3 กรกฎาคม 2563 
                            เวลา 14.00 - 15.00 น.
                        </p>                    
                    </div>
                    <?php include_once('component/post-footer.php'); ?>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07 color-white"><i class="fas fa-code"></i></div>
                        <h4 class="fw-600">Embed</h4>
                    </div>
                    <div class="map-container mt-3" data-aos="fade-up" data-aos-delay="300">
                        <img class="img" src="public/assets/app/images/bg/49.jpg" alt="Map Image" />
                    </div>
                    


                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">ไฟล์เอกสารที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="table-wrapper mt-1 border-bottom" data-simplebar data-aos="fade-up" data-aos-delay="300">
                        <table class="table table-file">
                            <tbody>
                                <?php for($i=0; $i<1; $i++){?>
                                    <tr>
                                        <td style="min-width:380px;">
                                            <div class="fw-600 color-04 text-lg">
                                                วารสารอุตสาหกรรม - ฉบับที่ 12 เดือนกรกฎาคม - สิงหาคม 2561.pdf
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
                                        <td style="min-width:130px;">
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


                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-images color-white"></i></div>
                        <h4 class="fw-600">รูปภาพที่เกี่ยวข้อง</h4>
                    </div>

                    <div class="gallery-grids pb-4 border-bottom">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25">
                                <a class="ss-img bradius-0" href="public/assets/app/images/banner/01.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-text <?php if($i==7)echo 'op-100'; ?>">
                                        <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07 color-white"><i class="far fa-calendar-alt"></i></div>
                        <h4 class="fw-600">ปฏิทินกิจกรรมที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="row border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="col-md-4 col-sm-6 mt-4">
                                <div class="post-card post-card-08 pb-2">
                                    <a class="ss-img square bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-container">
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        </div>
                                    </a>
                                    <div class="date-tag">
                                        <div class="date">9</div>
                                        <p>กรกฎาคม <span class="fw-600">2563</span></p>
                                    </div>
                                    <div class="wrapper">
                                        <div class="title-container height-auto">
                                            <a class="title h4" href="#">
                                                ภัยคุกคามไซเบอร์กับวิถีชีวิตรูปแบบใหม่ Cyber Threats 
                                                in New Normal
                                            </a>
                                        </div>
                                        <div class="stats mt-2">
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                                <span class="color-black fw-500">
                                                    5-8 กรกฎาคม 2563
                                                </span>
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-clock"></i></div>
                                                <span class="color-black fw-500">
                                                    11:00 - 19:00 น
                                                </span>
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                                <span class="color-black fw-500">
                                                    thaibfconference.com
                                                </span>
                                            </div>
                                        </div>
                                        <div class="btns mt-3">
                                            <a class="btn-action btn-action-primary" href="#">
                                                <i class="fas fa-chevron-right"></i>
                                                อ่านรายละเอียด
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
