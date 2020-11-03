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
                    [ 'url' => '#', 'name' => 'สถาบันเครือข่าย' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-06 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>
        <div class="container pb-4 position-relative">
            <h3 class="text-center color-white">
                สถาบันเครือข่าย
            </h3>
        </div>

        <div class="tab-container tab-container-04 vertical my-0">
            <div class="bg-color-white pt-4 pb-3">
                <div class="container">
                    <div class="tabs">
                        <div class="tab active" data-tab="0">
                            <div class="num">01.</div>
                            <p>ข่าวประกาศการจัดซื้อจัดจ้าง</p>
                        </div>
                        <div class="tab" data-tab="1">
                            <div class="num">02.</div>
                            <p>TOR</p>
                        </div>
                        <div class="tab" data-tab="2">
                            <div class="num">03.</div>
                            <p>ราคากลาง</p>
                        </div>
                        <div class="tab" data-tab="3">
                            <div class="num">04.</div>
                            <p>ผลการจัดซื้อจัดจ้าง</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-contents">
                    <?php for($k=0; $k<4; $k++){?>
                        <div class="tab-content <?php if($k==0)echo 'active'; ?>" data-tab="<?= $k ?>">
                            <div class="grids py-3">
                                <?php for($j=9; $j<=19; $j++){?>
                                    <div class="grid xl-25 lg-1-3 md-1-3 sm-50">
                                        <a class="weblink weblink-02" href="#">
                                            <div class="wrapper">
                                                <div class="img-container">
                                                    <img src="public/assets/app/images/weblink/<?= sprintf('%02d', $j) ?>.png" alt="Weblink" />
                                                </div>
                                                <div class="hover-container">
                                                    <p>สถาบันอาหารกระทรวงอุตสาหกรรม</p>
                                                    <div class="btns">
                                                        <div class="btn custom-btn-white no-bradius">
                                                            WEBSITE <i class="fas fa-link"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
