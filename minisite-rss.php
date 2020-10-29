<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        /* Custom CSS */
        .intro-02 {
            padding-bottom: 0;
        }
        .intro-02 .text-container-banner {
            padding: 1rem 0 .75rem 0;
            position:relative;
            display:inline-block;
        }
        .intro-02 .text-container-banner::after{
            content:''; position:absolute; top:0; left:-50%; width:165%; height:100%; z-index:-1; 
            -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,0),  rgba(33, 44, 67, .65), rgba(33, 44, 67, .9), rgba(33, 44, 67, .9),rgba(33, 44, 67, .65), rgba(0,0,0,0));
            background-color: #212c43;
        }
        .header{padding: 1.5rem 0;position:relative;}
        .header h3 {margin-bottom: 1rem; }
        .header p { display:inline-block; margin:0; padding:1rem 0 0 0;  border-top: 1px solid transparent; border-color: #dcdcdc;}

        .row.custom-padding {padding:3rem 2.5rem; border-bottom: 1px solid transparent; }
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
        @media screen and (max-width: 767.98px){
            .grids.custom-padding {padding: 2rem 1.67rem;}
        }
        @media screen and (max-width: 565.98px){
            .grids.custom-padding {padding: 1.5rem 1.25rem;}
        }
    
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container-banner color-white" data-aos="fade-up" data-aos-delay="0">
                <p class="font-01 text-sm fw-200">
                    เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                    ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                    ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
                </p>
            </div>
        </div>
    </div>
    <section style="padding:2rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'RSS FEED' ],
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
    </section>


    <section class="section-padding" style="background-color:#dcdcdc; background-image:url('public/assets/app/images/bg/32.jpg'); background-size:contain; background-position:top center; background-repeat:no-repeat;">
        <div class="container">
            <div class="header text-center color-white">
                <h3>RSS FEED SANOOK</h3>
                <p class="fw-500">สนุก ข่าวประจำวัน : เกาะติดทุกข่าวสารและเหตุการณ์ในรอบวัน อัพเดท 24 ชั่วโมง</p>
                <div class="list-header custom">
                    <div class="block">
                        <div class="text-wrapper">
                            <div class="search-container">
                                <input type="text" name="search" placeholder="SANOOK" />
                                <button type="submit">
                                    <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row custom-padding bg-white">
                <?php for($i=0; $i< 12; $i++){?>
                    <div class="col-sm-12">
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
    
    </section>


    <section class="call-02">
        <div class="container">
            <h1 class="text-center color-white mb-0" data-aos="fade-up" data-aos-delay="0">
                เรารับฟังความคิดเห็นของคุณ
            </h1>
            <h4 class="text-center color-white fw-300 mt-0 mb-0" data-aos="fade-up" data-aos-delay="150">
                เกี่ยวกับความรับผิดชอบของกระทรวงอุตสาหกรรม
            </h4>
            <div data-aos="fade-up" data-aos-delay="300">
                <img class="subject lazy-img" data-src="public/assets/app/images/hero/03.png" alt="Call 02" />
            </div>
            <form action="/" method="POST" data-aos="fade-up" data-aos-delay="600">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="สมัครรับข่าวสารกับกระทรวงอุตสาหกรรม" required />
                    <div class="input-group-append">
                        <button class="btn custom-btn-warning" type="submit">
                            สมัครรับข่าว
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="call-container mt-5" style="background-image:url('public/assets/app/images/bg/20.jpg');">
            <div class="container" data-aos="fade-up" data-aos-delay="0">
                <div class="call-text text-center title">
                    ปฏิรูปอุตสาหกรรมสู่ 4.0
                </div>
                <div class="call-text text-center desc">
                    เพิ่มมูลค่าเศรษฐกิจอุตสาหกรรมของไทยให้เติบโตไม่น้อยกว่าร้อยละ 4.5
                </div>
                <div class="call-text text-center desc desc-lg">
                    ภายในปี พ.ศ.2564
                </div>
                <div class="slide-container mt-5">
                    <div class="slides">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="slide">
                                <div class="wrapper">
                                    <div class="client lazy-bg" data-src="public/assets/app/images/client/01.jpg"></div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>

