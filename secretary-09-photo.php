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
                <h2 class="fw-100 mb-0">คลังภาพ</h2>
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
                        <img class="decor" src="public/assets/app/images/hero/08.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'คลังภาพ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    <?php include_once('component/list-header.php'); ?>

                    <div class="row">
                        <?php for($i=0; $i<8; $i++){?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-3">
                                <div class="post-card post-card-05 no-border">
                                    <a class="ss-img square bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-container">
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        </div>
                                    </a>
                                    <div class="d-flex ai-center jc-space-between stats">
                                        <div class="date">13.08.2563</div>
                                        <div class="d-flex view">
                                            <div class="icon"><i class="far fa-images"></i></div>
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
                        <?php }?>
                    </div>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
