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


        /* Tab Container 04 */
        .tab-container-04 .tab {margin: .5rem .5rem 0 0; min-width: 15rem;}
        .tab-container-04 .tab .tab-wrapper {border-bottom: .0625rem solid transparent; border-color: #dcdcdc; vertical-align:middle; transition: all .3s;}
        .tab-container-04 .tab.active .tab-wrapper {border-bottom: .5rem solid transparent; border-color: #63337d; vertical-align:middle;}
        .tab-container-04 .tab-wrapper h5{display:inline-block; margin:0;  }
        .tab-container-04 .tab .tab-wrapper .index { display:inline-block; color:#000; width:auto; height: 2.5rem;  text-align:center; line-height: 2.5rem; transition: all .2s;}
        .tab-container-04 .tab.active .tab-wrapper .index { display:inline-block; width:2.25rem; background:#63337d; color:#fff; font-weight:100; border-radius: .25rem .25rem 0 0;}
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
                    [ 'url' => '#', 'name' => 'สถาบันเครือข่าย' ],
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
    </section>


    <style>
        .post-card.post-card-custom .wrapper {padding:1rem; background: #fff; position:relative; }
        .post-card.post-card-custom .ss-img {padding: 100% 0 0 0;}
        .post-card.post-card-custom .wrapper .hover-container {display:flex;  align-content: space-between; flex-wrap:wrap; position:absolute; top:0; left:0; bottom:0; right:0; background:rgba(25, 141, 203, .9); padding:1rem; opacity:0; transition: opacity .4s;}
        .post-card.post-card-custom:hover .wrapper .hover-container{opacity: 1;}
        .post-card.post-card-custom .wrapper .hover-container a{display:flex; color:#198dca; justify-content:space-between; align-items:center; text-decoration:none; padding:1rem; background: #fff; width:100%;}
    </style>
    <section class="section-padding" style="background-color:#dcdcdc; background-image:url('public/assets/app/images/bg/32.jpg'); background-size:contain; background-position:top center; background-repeat:no-repeat;">
        <div class="container">
            <h2 class="text-center color-white">สถาบันเครือข่าย</h2>
        </div>
        <!-- Tab Container 04 -->
        <div class="tab-container tab-container-04 mt-3">
            <div class="tabs bg-white pt-2 pb-2" data-aos="fade-up" data-aos-delay="300">
                <div class="tab active" data-tab="1">
                    <div class="tab-wrapper">
                        <div class="index">01.</div>
                        <h5 class="text-center text-sm fw-600">
                            <span>ข่าวประกาศการจัดซื้อจัดจ้าง</span>
                        </h5>
                    </div>
                </div>
                <div class="tab" data-tab="2">
                    <div class="tab-wrapper">
                        <div class="index">02.</div>
                        <h5 class="text-center text-sm fw-600">
                            <span>TOR</span>
                        </h5>
                    </div>
                    
                </div>
                <div class="tab" data-tab="3">
                    <div class="tab-wrapper">
                        <div class="index">03.</div>
                        <h5 class="text-center text-sm fw-600">
                            <span>ราคากลาง</span>
                        </h5>
                    </div>
                </div>
                <div class="tab" data-tab="4">
                    <div class="tab-wrapper">
                        <div class="index">04.</div>
                        <h5 class="text-center text-sm fw-600">
                            <span>ผลการจัดซื้อจัดจ้าง</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">
                    <?php for($i=1; $i<=4; $i++){?>
                        <div class="tab-content <?php if($i==1)echo 'active'; ?>" data-tab="<?= $i; ?>">
                            <div class="grids">
                                <?php for($j=0; $j<10; $j++){?>
                                    <div class="grid lg-25 sm-50">
                                        <div class="post-card post-card-custom">
                                            <div class="wrapper">
                                                <div class="ss-img bradius-0">
                                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $i; ?>.jpg"></div>
                                                </div>
                                                <div class="hover-container">
                                                    <p class="color-white text-sm fw-200">สถาบันอาหารกระทรวงอุตสาหกรรม</p>
                                                    <a href="#">
                                                        WEBSITE 
                                                        <i class="fas fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
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

