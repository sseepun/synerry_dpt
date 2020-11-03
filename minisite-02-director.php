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
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'โครงสร้างบุคลากร'],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="section-padding" style="background:url('public/assets/app/images/bg/62.jpg') center top/100% auto repeat;">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <h3 class="color-09 fw-300 mb-0">
                    โครงสร้างบุคลากร
                </h3>
                <p class="fw-600 mt-1 op-40">
                    EXECYTIVE COMMITTEE
                </p>
            </div>

            <div class="d-flex jc-center mt-5" data-aos="fade-up" data-aos-delay="600">
                <div class="bg-color-09 py-3 px-4">
                    <p class="color-white mt-0">สำนักงานอุตสาหกรรมจังหวัดเชียงราย</p>
                </div>
            </div>
            <div class="grids jc-center mt-3 pb-5" data-aos="fade-up" data-aos-delay="0">
                <div class="grid sm-100 md-50 lg-25">
                    <a class="post-card post-card-08 btn-popup-toggle" data-popup="profile">
                        <div class="ss-img bradius-0">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/hero/02.png"></div>
                            <div class="hover-container">
                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                            </div>
                            <div class="calendar-tag py-3 px-3">
                                <div class="text-2xl color-white">+</div>
                            </div>
                        </div>
                        <div class="wrapper text-center px-2 py-3 bg-color-gray color-dark">
                            <p class="mt-0 text-nm">
                                นางกฤษนันท์ ทะวิชัย
                            </p>
                            <p class="fw-600 mt-0 text-nm color-07">
                                อุตสาหกรรมจังหวัดเชียงราย
                            </p>
                            <p class="mt-0 text-nm">
                                092-2607167
                            </p>
                        </div>
                    </a>
                </div>
                <div class="sep mt-3"></div>
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid sm-100 md-50 lg-25">
                        <h6 class="text-center fw-600 mb-2">
                            <span class="text-sm">สำนักงานอุตสาหกรรมจังหวัดเชียงราย</span>
                        </h6>
                        <a class="post-card post-card-08 btn-popup-toggle" data-popup="profile">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/hero/02.png"></div>
                                <div class="hover-container">
                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                </div>
                                <div class="calendar-tag px-2 py-3 px-3">
                                    <div class="text-2xl color-white">+</div>
                                </div>
                            </div>
                            <div class="wrapper text-center py-3 bg-color-gray color-dark">
                                <p class="mt-0 text-nm">
                                    นางกฤษนันท์ ทะวิชัย
                                </p>
                                <p class="fw-600 mt-0 text-nm">
                                    อุตสาหกรรมจังหวัดเชียงราย
                                </p>
                                <p class="mt-0 text-nm">
                                    092-2607167
                                </p>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>

            <?php for($j=0; $j<2; $j++){?>
                <div class="d-flex jc-center mt-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="bg-color-blue py-3 px-4">
                        <p class="color-white mt-0">สำนักงานอุตสาหกรรมจังหวัดเชียงราย</p>
                    </div>
                </div>

                <div class="grids jc-center mt-3 pb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid sm-100 md-50 lg-25">
                        <a class="post-card post-card-08 btn-popup-toggle" data-popup="profile">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/hero/02.png"></div>
                                <div class="hover-container">
                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                </div>
                                <div class="calendar-tag px-2 py-3 px-3">
                                    <div class="text-2xl color-white">+</div>
                                </div>
                            </div>
                            <div class="wrapper text-center py-3 bg-color-gray color-dark">
                                <p class="mt-0 text-nm">
                                    นางกฤษนันท์ ทะวิชัย
                                </p>
                                <p class="fw-600 mt-0 text-nm color-blue">
                                    อุตสาหกรรมจังหวัดเชียงราย
                                </p>
                                <p class="mt-0 text-nm">
                                    092-2607167
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="sep text-center">
                        <h6 class="mt-5 mb-2 text-dgray">
                            <span class="fw-600 color-blue">ติดต่อ</span>
                            <span class="op-50 ml-2">
                                053-7116666 ต่อ 141,142  /  085-713-9955
                            </span>
                        </h6>
                    </div>
                    <?php for($i=0; $i<4; $i++){?>
                        <div class="grid sm-100 md-50 lg-25">
                            <a class="post-card post-card-08 btn-popup-toggle" data-popup="profile">
                                <div class="ss-img bradius-0">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/hero/02.png"></div>
                                    <div class="hover-container">
                                        <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                    </div>
                                    <div class="calendar-tag px-2 py-3 px-3">
                                        <div class="text-2xl color-white">+</div>
                                    </div>
                                </div>
                                <div class="wrapper text-center py-3 bg-color-gray color-dark">
                                    <p class="mt-0 text-nm">
                                        นางกฤษนันท์ ทะวิชัย
                                    </p>
                                    <p class="fw-600 mt-0 text-nm">
                                        อุตสาหกรรมจังหวัดเชียงราย
                                    </p>
                                    <p class="mt-0 text-nm">
                                        092-2607167
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

        </div>
    </section>
    
    <section class="stat-01 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <h2 class="text-center color-white fw-200 my-0">
                อัตตรากำลังเจ้าหน้าที่
            </h2>
            <h6 class="text-center color-white fw-100 my-0">
                สำนักงานอุตสาหกรรมเชียงราย
            </h6>
            <div class="grids no-gap mt-3">
                <div class="grid lg-25 sm-50">
                    <h1>13</h1>
                    <p>คน</p>
                    <p>ข้าราชการ</p>
                </div>
                <div class="grid lg-25 sm-50">
                    <h1>2</h1>
                    <p>คน</p>
                    <p>พนักงานราชการ</p>
                </div>
                <div class="grid lg-25 sm-50">
                    <h1>14</h1>
                    <p>คน</p>
                    <p>ลูกจ้างเหมาบริการ</p>
                </div>
                <div class="grid lg-25 sm-50">
                    <h1>29</h1>
                    <p>คน</p>
                    <p>รวมทั้งหมด</p>
                </div>
            </div>
        </div>                    
    </section>

    <div class="popup-container" data-popup="profile">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="profile"></div>
            <div class="popup-box popup-profile">
                <div class="top-container">
                    <div class="img-container">
                        <div class="ss-img bradius-0 no-hover">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/hero/02.png"></div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-content">
                            <h2>นางกฤษนันท์ ทะวิชัย</h2>
                            <h2 class="fw-600">
                                <span class="text-md">อุตสาหกรรมจังหวัดเชียงราย</span>
                            </h2>
                            <h2>092-2607167</h2>
                        </div>
                        <div class="bottom-content">
                            <p>เดือน ปี เกิด กุมภาพันธ์ 2485</p>
                        </div>
                    </div>
                </div>
                <div class="middle-container">
                    <div class="scroll-wrapper" data-simplebar>
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="title-wrapper">
                                <h6>ประวัติการศึกษา</h6>
                            </div>
                            <div class="table-wrapper">
                                <table class="table">
                                    <tbody>
                                        <?php for($j=0; $j<3; $j++){?>
                                            <tr>
                                                <td style="min-width:10rem;">
                                                    พ.ศ. 2505-2509
                                                </td>
                                                <td style="min-width:20rem;">
                                                    วิศวกรรมศาสตร์บัณฑิต จากมหาวิทยาลัย แคลิฟอร์เนีย 
                                                    เบิร์กลีย์ ประเทศสหรัฐอเมริกา
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="bottom-container">
                    <div class="btns bg-color-09 text-right">
                        <a class="btn custom-btn-11 btn-xl no-bradius"href="#">
                            พิมพ์ <i class="fas fa-print ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
