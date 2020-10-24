<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">วิดีโอ</h2>
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
                            [ 'url' => '#', 'name' => 'วิดีโอ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2 sm-no-br">
                        โครงการจิตอาสา กระทรวงอุตสาหกรรม เราทำความดี ด้วยหัวใจ
                    </h2>
                    <?php include_once('component/post-header.php'); ?>
                    
                    <div class="ss-video horizontal bradius-0 mt-4 mb-3">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                        <div class="hover-container"></div>
                        <div class="play-container">
                            <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <?php include_once('component/post-footer-embed.php'); ?>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="fas fa-film color-white"></i></div>
                        <h4 class="fw-600">วิดีโอที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-4">
                                <div class="post-card post-card-08">
                                    <div class="wrapper">
                                        <div class="title-container">
                                            <a class="title h4" href="#">
                                                สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                ปฏิรูปโครงสร้างศก
                                            </a>
                                        </div>
                                        <div class="d-flex ai-center jc-space-between stats">
                                            <div class="date">13.08.2563</div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-clock"></i></div>
                                                3:05
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="fas fa-eye"></i></div>
                                                268
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($i%2==0){?>
                                        <div class="ss-video square bradius-0">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                            <div class="hover-container"></div>
                                            <div class="play-container">
                                                <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }else{?>
                                        <a class="ss-img square bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                            <div class="hover-container">
                                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                            </div>
                                        </a>
                                    <?php }?>
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
</body>
</html>
