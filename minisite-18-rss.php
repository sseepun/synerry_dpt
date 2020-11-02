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
                    [ 'url' => '#', 'name' => 'RSS Feed' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-06 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>
        <div class="container pb-4 position-relative">
            <div class="d-flex jc-center mb-3">
                <div class="text-center color-white">
                    <h3 class="text-center color-white mb-2">
                        RSS FEED SANOOK
                    </h3>
                    <p class="text-nm fw-500 border-top py-3">
                        สนุก ข่าวประจำวัน : เกาะติดทุกข่าวสารและเหตุการณ์ในรอบวัน อัพเดท 24 ชั่วโมง
                    </p>
                </div>
            </div>

            <?php include_once('component/list-header.php'); ?>
            <div class="ss-box-02 border box-shadow width-full bg-white-adaptive no-bradius py-0 mt-2">
                <div class="grids">
                    <?php for($i=0; $i< 12; $i++){?>
                        <div class="grid sm-100 mt-0">
                            <div class="ss-card ss-card-05 border-bottom">
                                <div class="text-wrapper">
                                    <h5 class="color-02 mb-0">
                                        รวม ฟอร์ด-เจมส์ เยาวชนปลดแอก แล้ว! นำตัวสอบสวน สน.สำราญราษฎร์
                                    </h5>
                                    <p class="text-nm color-dgray mt-1">
                                        ตำรวจจับกุม ฟอร์ด ทัตเทพ และเจมศ์ ภานุมาศ 2 แกนนำเยาวชนปลดแอก 
                                        ไปสถานีตำรวจนครบาลสำราญราษฎร์แล้ว
                                    </p>
                                    <div class="d-flex ai-center fw-wrap text-nm mt-3">
                                        <i class="far fa-clock color-02 text-xl"></i>
                                        <div class="op-50 ml-2">
                                            WED, 26 AUG 2020 13:53:17 +0700
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-container text-right">
                                    <a class="btn custom-btn-09" href="#">
                                        เปิดดู <i class="fas fa-link color-white ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php include_once('component/list-footer.php'); ?>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
