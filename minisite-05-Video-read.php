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
            'leading' => 'ร',
            'leading_class' => 'stripe-bottom',
            'title' => 'ายการวีดีโอ',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-08.jpg',
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
                    <div class="ss-post-header">
                        <div class="ss-date">
                            <div class="date">28</div>
                            <div class="month">มี.ค.64</div>
                        </div>
                        <h6 class="fw-500 color-001">
                            นายสุเมธ มีนาภา ผู้ตรวจราชการกรมโยธาธิการและผังเมือง เป็นประธานในพิธีวาง
                            กระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อ ECOMARINE
                            รุ่น อาร์เทมีส จำนวน 5 ลำ
                        </h6>
                    </div>
                    
                    <div class="post-video width-full mt-3">
                        <div class="wrapper">
                            <video class="fit" controls>
                                <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <div class="d-flex ai-center jc-end fw-wrap mt-3">
                        <div class="shortcode-container sm-right my-1">
                            <a class="btn btn-action btn-sm btn-color-09" href="#">
                                Embed <em class="fas fa-code ml-1"></em>
                            </a>
                            <div class="shortcode-popup">
                                <div class="wrapper">
                                    <div class="shortcode-content">
                                        <textarea rows="4" data-copy="1" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                                        <a class="btn-close color-07" href="#">
                                            <em class="fas fa-times"></em>
                                        </a>
                                    </div>
                                    <a class="btn-code-copy btn btn-action btn-sm btn-color-09" data-copy="1" href="#">
                                        คัดลอก
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-action btn-sm btn-color-09 ml-1" href="#">
                            <em class="far fa-file-archive mr-1"></em>
                            ดาวน์โหลดคลังภาพ [48 รูป | 15.4 MB]
                        </a>
                    </div>

                    <div class="mt-4">
                        <?php include('component/minisite-post-footer.php'); ?>
                    </div>
                    
                    <div class="mt-4">
                        <p class="h6 sm fw-500 color-dark ss-dash">
                            <span>เอกสารที่เกียวข้อง</span>
                        </p>
                        <div class="scroll-x-wrapper mt-1 pb-0">
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
                    </div>

                    <div class="btns d-flex jc-space-between py-4 border-top-4 bcolor-sgray">
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

                <div class="grid xl-25 lg-30 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <a class="btn btn-action btn-color-11 w-full" href="#">
                        <em class="fas fa-arrow-left lg mr-2"></em>
                        กลับไปหน้ารวมข่าวสาร
                    </a>
                    <div class="ss-stat">
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-eye"></em>
                            </div>
                            <p class="fw-600 pl-2">17</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-star"></em>
                            </div>
                            <p class="fw-600 pl-2">28</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="fas fa-share-alt"></em>
                            </div>
                            <p class="fw-600 pl-2">231</p>
                        </a>
                    </div>

                    <p class="h6 sm fw-600 color-dark ss-dash mt-4 pt-1">
                        <span>ข่าวที่เกียวข้อง</span>
                    </p>
                    <div class="grids">
                        <?php for($k=0; $k<3; $k++){ $j = $k%4+1;?>
                            <div class="grid lg-100">                                    
                                <?php
                                    $cardType = 'Video Preview';
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
