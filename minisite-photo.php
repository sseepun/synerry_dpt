<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
    
        .post-card.post-card-custom .wrapper { background: #fff; position:relative; }
        .post-card.post-card-custom .wrapper .hover-container {display:flex;  align-content: space-between; flex-wrap:wrap; position:absolute; top:0; left:0; bottom:0; right:0; background:rgba(25, 141, 203, .9); padding:1rem; opacity:0; transition: opacity .4s;}
        .post-card.post-card-custom:hover .wrapper .hover-container{opacity: 1;}
        .post-card.post-card-custom .wrapper .hover-container a{display:flex; color:#198dca; justify-content:space-between; align-items:center; text-decoration:none; padding:1rem; background: #fff; width:100%;}
        .post-card.post-card-custom .wrapper .hover-container .icon {font-size: 2rem; display:block; width:100%;}
        /* New custom style */
        .post-card.post-card-custom-2, .post-card.post-card-custom-2, .post-card.post-card-custom-2 .ss-img  {height:calc(100% - 2rem);}
        .post-card.post-card-custom-2 .text-wrapper {display:flex; flex-wrap:wrap; }
        .post-card.post-card-custom-2 .text-wrapper .text-container { background: #fff; padding: .5rem 1rem; width:calc(100% - 5rem); }
        .post-card.post-card-custom-2 .text-wrapper .btn {display:flex; justify-content:center; border-radius:0; align-items:center; width:5rem; color:#fff; padding:.5rem .25rem;   font-weight:100; cursor:pointer; background:rgba(25, 141, 203, 1); }

        @media screen and (max-width:565.98px){
            .post-card.post-card-custom-2, .post-card.post-card-custom-2, .post-card.post-card-custom-2 .ss-img {height:auto; }
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


    <section style="padding:2rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'คลังภาพ' ],
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
    </section>

    <section class="section-padding section-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');">
        <div class="container">
            <h3 class="text-center color-white">ไฮไลท์ - คลังภาพ</h3>
            <div class="post-stats-02 sm color-white mt-2" style="margin-bottom: -1.5rem;">
                <div class="block">
                    24-08-2563
                    <span class="sep bg-white"></span>
                    เปิดดู : 130
                </div>
            </div>
            <div class="grids pt-2 pb-4">
                <div class="grid md-60 sm-100">

                    <div class="post-card post-card-custom-2">
                        <div class="ss-img bradius-0">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                        </div>
                        <div class="text-wrapper">
                            <div class="text-container">
                                งานมหรกรรมภาคอุตสาหกรรมแห่งปี ของผู้ประกอบการไทยที่จะช่วยติดอาวุธทางธุรกิจ...
                            </div>
                            <div class="btn">อ่านเพิ่ม</div>
                        </div>
                    </div>
                </div>
                <div class="grid md-40 sm-100">
                    <div class="post-card post-card-custom">
                        <div class="wrapper">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                            </div>
                            <div class="hover-container">
                                <div class="icon"><i class="fas fa-camera color-white text-xl"></i></div>
                                <p class="color-white text-sm fw-200">ปลัดกอบชัยฯ ประชุมหารือร่วมหน่วยงานส่วนกลางและส่วนภูมิภาค</p>
                                
                                <div class="post-stats-02 sm color-white">
                                    <div class="block">
                                        24-08-2563
                                        <span class="sep bg-white"></span>
                                        เปิดดู : 130
                                    </div>
                                    <div class="btn-float" style="transform: translate(1rem, 1rem); color: rgba(25, 141, 203, 1); background: #fff;">อ่านเพิ่ม</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-card post-card-custom mt-4">
                        <div class="wrapper">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                            </div>
                            <div class="hover-container">
                                <div class="icon"><i class="fas fa-camera color-white text-xl"></i></div>
                                <p class="color-white text-sm fw-200">ปลัดกอบชัยฯ ประชุมหารือร่วมหน่วยงานส่วนกลางและส่วนภูมิภาค</p>
                                
                                <div class="post-stats-02 sm color-white">
                                    <div class="block">
                                        24-08-2563
                                        <span class="sep bg-white"></span>
                                        เปิดดู : 130
                                    </div>
                                    <div class="btn-float" style="transform: translate(1rem, 1rem); color: rgba(25, 141, 203, 1); background: #fff;">อ่านเพิ่ม</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาคลังภาพ" autocomplete="off" required />
                    <button type="submit">
                        <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                    </button>
                    <div class="suggestion">
                        <div class="scroll-wrapper" data-simplebar>
                            <?php for($i=0; $i<8; $i++){?>
                                <a class="item" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="text">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                        กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="section-padding bg-color-gray">
        <div class="container">
            <h3 class="text-center color-02">คลังภาพ </h3>
            <div class="grids pt-2 pb-4">
                <?php for($i=0; $i<9; $i++){?>
                    <div class="grid lg-1-3 md-50 sm-100">
                        <a class="post-card post-card-custom">
                            <div class="wrapper">
                                <div class="ss-img bradius-0">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                </div>
                                <div class="hover-container">
                                    <div class="icon"><i class="fas fa-camera color-white text-xl"></i></div>
                                    <p class="color-white text-sm fw-200">ปลัดกอบชัยฯ ประชุมหารือร่วมหน่วยงานส่วนกลางและส่วนภูมิภาค</p>
                                    
                                    <div class="post-stats-02 sm color-white">
                                        <div class="block">
                                            24-08-2563
                                            <span class="sep bg-white"></span>
                                            เปิดดู : 130
                                        </div>
                                        <div class="btn-float" style="transform: translate(1rem, 1rem); color: rgba(25, 141, 203, 1); background: #fff;">อ่านเพิ่ม</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>