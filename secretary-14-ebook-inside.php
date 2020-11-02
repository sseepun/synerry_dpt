<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
    <style>
    

    .copy-link-container input {width:100%; border-radius:0; height:4rem; background:#f2f2f2;}
    .copy-link-container a {text-decoration:none; display:block; background: #6c109d; text-align:center; color:#fff; height:3rem; line-height:3rem;}
    .post-card.post-card-08 > .wrapper{padding:1.25rem;}
    @media screen and (max-width:991.98px){
        .post-card.post-card-08 > .wrapper{
            padding:1.125rem;
        }
    }
    @media screen and (max-width:767.98px){
        .post-card.post-card-08 > .wrapper{
            padding:1.125rem 1rem;
        }
    }
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">วารสารออนไลน์</h2>
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
                            [ 'url' => '#', 'name' => 'วารสารออนไลน์' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2">
                        วารสารอุตสาหกรรม - ฉบับที่ 12 เดือนกรกฎาคม - สิงหาคม 2561
                    </h2>
                    <?php include_once('component/post-header.php'); ?>
                    <div class="book-container my-3">
                        <div class="wow-book" id="wow-book">
                            <?php for($i=1; $i<7; $i++){?>
                                <div><img src="public/assets/app/images/banner/0<?= $i ?>.jpg" alt="Page <?= $i ?>" /></div>
                            <?php }?>
                        </div>
                    </div>
                    <?php include_once('component/post-footer.php'); ?>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">ดาวน์โหลดอัลบั้มรูปภาพ</h4>
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
                                                <a class="btn btn-sm btn-round custom-btn-09 mr-2" href="#">
                                                    Embed <i class="fas fa-code"></i>
                                                </a>
                                                <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                    ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding:0;">
                                            <div class="copy-link-container">   
                                                <input type="text">
                                                <a href="#">คัดลอกโค้ด</a>
                                            </div>
                                        </td>
                                          
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="fas fa-film color-white"></i></div>
                        <h4 class="fw-600">วารสารที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="row border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="col-md-4 col-sm-6 mt-4">
                                <div class="post-card post-card-08">
                                    <a class="ss-img vertical bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-container">
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        </div>
                                    </a>
                                    <div class="wrapper">
                                        <div class="d-flex ai-center jc-space-between stats">
                                            <div class="date">13.08.2563</div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-image"></i></div>
                                                15
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="fas fa-eye"></i></div>
                                                268
                                            </div>
                                        </div>
                                        <div class="title-container">
                                            <a class="title h4" href="#">
                                                สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                ปฏิรูปโครงสร้างศก
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

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="public/assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
