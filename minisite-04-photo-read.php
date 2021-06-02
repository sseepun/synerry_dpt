<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>

.dash-mini{position:relative;}
.dash-mini::after{background:#ffd000}
.dash-mini::after{content:''; position:absolute; top:calc(50% - .05rem); left:calc(100% + .5rem); width:2.125rem; height:.1rem; transition:background .25s;}
.btn.btn-color-05-mini{color:#4d2224; background:#ffd000; border-color:#ffd000;}
.btn.btn-color-05 em{color:#4d2224;}

</style>
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
                [ 'name' => 'ข่าวประชาสัมพันธ์', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
   
   <section class="section-02">
        <div class="container">
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex mb-4 ai-start">
                        <div class="ss-date">
                            <div class="date">28</div>
                            <div class="month">มี.ค.64</div>
                        </div>
                        <h6 class="fw-500 color-001 ml-4">
                            นายสุเมธ มีนาภา ผู้ตรวจราชการกรมโยธาธิการและผังเมือง เป็นประธานในพิธีวาง
                            กระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อ ECOMARINE
                            รุ่น อาร์เทมีส จำนวน 5 ลำ
                        </h6>
                    </div>
                    <a class="ss-img horizontal no-hover" href="public/assets/app/images/content/06.jpg" data-fancybox="gallery">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/06.jpg');"></div>
                    </a>
                    <?php for($j=0; $j<7; $j++){?>
                        <a class="d-none" data-fancybox="gallery" 
                        href="public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg">
                            <img src="public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg" alt="Image Preview" />
                        </a>
                    <?php }?>
                    <div class="gallery-grids">
                        <?php for($j=0; $j<5; $j++){?>
                            <div class="grid md-20 sm-1-3 xs-50">
                                <a class="ss-img" href="#">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                    <?php if($j==4){?>
                                        <div class="hover-container bg-01 op-80">
                                            <p class="h4 lg fw-400 color-black">24+</p>
                                        </div>
                                    <?php }?>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    <div class="h6 sm fw-300 mt-4">
                        <div class="font-03">
                            วันนี้ (18 มีนาคม 2564) เวลา 09.30 น. ท่านอธิบดีมอบหมายให้ นายสุเมธ มีนาภา 
                            ผู้ตรวจราชการกรมโยธาธิการและผังเมือง เป็นประธานในพิธีวางกระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด 
                            ยี่ห้อECOMARINE รุ่น อาร์เทมีส จำนวน 5 ลำ 
                        </div>
                    </div>
                    <div class="p lg fw-400 mt-3">
                        <div class="font-01">
                            โดยมี นายสถิตย์ อินทามระ ผู้ตรวจราชการกรมฯ นายพรพนม บัวชื่น ผู้อำนวยการกองบูรณะและบำรุงรักษา 
                            พร้อมด้วยเจ้าหน้าที่ที่เกี่ยวข้องร่วมพิธีดังกล่าว ซึ่งในวันนี้ได้มีการทดสอบสมรรถนะของเรือด้วย
                            ณ บริเวณอู่ต่อเรือ เอเชียน มารีน เซอร์วิสส์ จังหวัดสมุทรปราการ 
                        </div>
                    </div>
                    <div class="btns d-flex jc-end mt-4">
                        <a class="btn btn-action btn-sm btn-xs btn-color-09 d-flex ai-center mr-2" href="#">
                            <div class="mr-2 ws-nowrap">Embed</div>
                            <img src="public/assets/app/images/icon/embed.png", alt="Icon">
                             
                        </a>
                        <a class="btn btn-action btn-sm btn-xs btn-color-09 d-flex ai-center" href="#">
                            <img src="public/assets/app/images/icon/photo-download.png", alt="Icon">
                            <div class="ml-2 ws-nowrap">ดาวน์โหลดคลังภาพ [48 รูป | 15.4 MB]</div>
                        </a>
                    </div>

                    <div class="border-top border-bottom bcolor-sgray py-3 mt-4">
                        <div class="ss-tags-02">
                            <div class="tags">
                                <div style="width:5.5rem;">
                                    <span class="h6 color-dark fw-500 dash-mini">
                                        แท็ก
                                    </span>
                                </div>
                                <div class="tag" style="">สำนักบริหารกลาง</div>
                                <div class="tag" style="">ข่าวกิจกรรมและประชาสำพันธ์</div>    
                            </div>
                            <div class="share"> 
                                <a class="icon" href="#"> 
                                    <img src="public/assets/app/images/icon/facebook.png">
                                </a>
                                <a class="icon" href="#">
                                    <img src="public/assets/app/images/icon/twitter.png">
                                </a>
                                <a class="icon" href="#">
                                    <img src="public/assets/app/images/icon/line.png">
                                </a>
                                <a class="icon" href="#">
                                    <img src="public/assets/app/images/icon/link.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>

                        <p class="h6 sm fw300 color-gray mt-4">
                            <span class="dash-mini">เอกสารที่เกียวข้อง</span>
                        </p>
                        <div class="scroll-x-wrapper">
                            <table class="table table-download-02">
                                <tbody>
                                    <?php
                                        foreach([
                                            [ 'name' => 'RAR', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                            [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                            [ 'name' => 'XLS', 'icon' => '<em class="far fa-file-excel color-01"></em>' ],
                                            [ 'name' => 'DOC', 'icon' => '<em class="far fa-file-word color-01"></em>' ],
                                            [ 'name' => 'ZIP', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                            [ 'name' => 'PDF', 'icon' => '<em class="far fa-file-pdf color-01"></em>' ]
                                        ] as $f){
                                    ?>
                                        <tr>
                                            <td class="column-icon">
                                                <div class="icon h5 text-center">
                                                    <?= $f['icon'] ?>
                                                    <p class="xxs fw-600"><?= $f['name'] ?></p>
                                                </div>
                                            </td>
                                            <td class="column-text">
                                                <p class="md fw-400 color-12">
                                                    การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน 
                                                </p>
                                                <div class="p xxs fw-200 color-gray mt-2">
                                                    ขนาดไฟล์ <span class="fw-900 color-12">1.31 MB</span>
                                                    <span class="mx-2">|</span>
                                                    จำนวนดาวน์โหลด <span class="fw-900 color-12">16 ครั้ง</span>
                                                    <span class="mx-2">|</span>
                                                    <a class="color-gray h-color-01" href="#">
                                                        <em class="fas fa-clock color-01"></em>
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="column-btn">
                                                <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                                    ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                        <p class="h6 sm fw300 color-gray mt-4">
                            <span class="sss-band left dash-mini">สื่อที่เกี่ยวข้อง (Embed)</span>
                        </p>
                        <div class="d-flex ai-center jc-space-between fw-wrap mt-1">
                            <p class="fw-400 color-03 my-2 pr-2">
                                พิธีวางกระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อ ECOMARINE
                            </p>
                            <?php include('component/shortcode.php'); ?>
                        </div>
                        <div class="slide-target slide-target-01 mt-3">
                            <div class="slide-display sm">
                                <div class="slides">
                                    <?php for($j=0; $j<7; $j++){?>
                                        <div class="slide">
                                            <div class="post-video width-full">
                                                <div class="wrapper">
                                                    <video class="fit" controls>
                                                        <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="slide-nav">
                                <div class="slides">
                                    <?php for($j=0; $j<7; $j++){?>
                                        <div class="slide">
                                            <div class="wrapper">
                                                <div class="ss-img no-hover">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                                    <div class="hover-container clear op-100">
                                                        <div class="icon xs">
                                                            <img src="public/assets/app/images/icon/play-black.png" alt="Image Icon" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="btns text-center py-4 d-flex jc-space-between" data-aos="fade-up" data-aos-delay="0">
                            <a class="btn btn-action btn-color-05 mx-1 my-1" href="#">
                                <em class="fas fa-chevron-left sm mr-2"></em>
                                ข่าวก่อนหน้า
                            </a>
                            <a class="btn btn-action btn-color-05 mx-1 my-1" href="#">
                                ข่าวต่อไป
                                <em class="fas fa-chevron-right sm ml-2"></em>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid xl-25 lg-30 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <a class="back" href="#">
                        <div class="icon-box">
                            <img src="public/assets/app/images/icon/arrow-back.png", alt="Icon">
                        </div>
                        <div class="text">
                            กลับไปหน้ารวมข่าวสาร
                        </div>
                    </a>
                    <div class="view">
                        <div class="ele">
                            <div class="icon-box">
                                <img src="public/assets/app/images/icon/eye.png" alt="eye">
                            </div>
                            <p class="text">17</p>
                        </div>
                        <div class="ele">
                            <div class="icon-box">
                                <img src="public/assets/app/images/icon/star.png" alt="eye">
                            </div>
                            <p class="text">28</p>
                        </div>
                        <div class="ele">
                            <div class="icon-box">
                                <img src="public/assets/app/images/icon/share-white.png" alt="eye">
                            </div>
                            <p class="text">231</p>
                        </div>
                    </div>

                    <p class="h6 sm fw-300 color-gray mt-4">
                        <span class="ss-band-mini dash-mini">ข่าวที่เกียวข้อง</span>
                    </p>
                    <div class="grids">
                        <?php for($k=0; $k<3; $k++){ $j = $k%4+1;?>
                            <div class="grid lg-100">                                    
                                <?php
                                    $cardType = 'Image';
                                    include('component/minisite-ss-card-01.php');   
                                ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    <style>
        .fancybox-thumbs__list a:before{border-color:#fdcd05;}
        .fancybox-thumbs-x .fancybox-thumbs__list{margin:0 auto;}
        @media all and (min-width:768px){
            .fancybox-thumbs{
                top:auto; bottom:0; left:0; right:0; width:auto; height:95px;
                padding:10px 10px 5px 10px; box-sizing:border-box; background:rgba(0,0,0,.3);
            }
            .fancybox-show-thumbs .fancybox-inner{right:0; bottom:95px;}
        }
    </style>
    <script>
        $('[data-fancybox="gallery"]').fancybox({
            thumbs: { autoStart: true, axis: 'x'}
        })
    </script>
</body>
</html>
