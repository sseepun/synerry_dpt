<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        
        .header{padding: 1.5rem 0;position:relative;}
        .header h3{margin-bottom: 1rem; }
        .header p { display:inline-block; margin:0; padding:1rem 0 0 0;  border-top: 1px solid transparent; border-color: #dcdcdc;}

        .ss-card-custom { display:flex; flex-wrap:wrap; justify-content: space-between; border-bottom:1px solid transparent;  border-color:#d9d0e4;padding:1.5rem 0;}
        .ss-card-custom .btn-container {margin-top:1rem;}
        .ss-card-custom .btn-container a {display:flex; align-items:center; min-width: 6rem; justify-content: space-between; padding:.5rem .75rem; color:#fff; text-decoration:none; background: #73519c;}
        .ss-card-custom .info-container { display:flex; align-items:flex-start; flex-wrap:wrap; }
        .ss-card-custom .info-container .date-time {color:#999; margin:.5rem 0 0 0;}
        .ss-card-custom .info-container i{margin:.5rem 1rem 0 0; width:1.5rem; font-size:1.25rem; height:1.5rem; ;line-height:1.5rem;  text-align:center; display:inline-block; }
        .list-header.custom {position:absolute; bottom:1rem; left:-15px;}
        @media screen and (max-width: 1199.98px){
            .list-header.custom {position:relative; bottom:0; left:0; margin-top:1rem;}
        }
    </style>
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
            <div class="header text-center color-white">
                <h3 class="text-center color-white">
                    RSS FEED SANOOK
                </h3>
                <p class="fw-500">
                    สนุก ข่าวประจำวัน : เกาะติดทุกข่าวสารและเหตุการณ์ในรอบวัน อัพเดท 24 ชั่วโมง
                </p>

                <div class="search-container">
                    <input type="text" name="search" placeholder="ค้นหา" required />
                    <button type="submit">
                        <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                    </button>
                </div>
            </div>

            <div class="bg-white px-4">
                <div class="grids">
                    <?php for($i=0; $i< 12; $i++){?>
                        <div class="grid sm-100 mt-0">
                            <div class="ss-card ss-card-custom">
                                <div class="text-wrapper">
                                    <h4 class="color-02">รวม ฟอร์ด-เจมส์ เยาวชนปลดแอก แล้ว! นำตัวสอบสวน สน.สำราญราษฎร์</h4>
                                    <p class="desc font-01 fw-300 text-md">
                                        ตำรวจจับกุม ฟอร์ด ทัตเทพ และเจมศ์ ภานุมาศ 2 แกนนำเยาวชนปลดแอก ไปสถานีตำรวจนครบาลสำราญราษฎร์แล้ว
                                    </p>
                                    <div class="info-container">
                                        <i class="far fa-clock color-02"></i>
                                        <div class="date-time">
                                            WED, 26 AUG 2020 13:53:17 +0700
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-container">
                                    <a href="#">
                                        เปิดดู
                                        <i class="fas fa-link"></i>
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
