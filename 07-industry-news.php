<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Custom CSS */
        /* Intro 01 */
        .intro-01{background-position:center; background-size:cover; background-repeat:no-repeat;}
        .intro-01 > .container{position:relative; padding-top:4rem; padding-bottom:1rem;}
        .ss-card .h-line {margin-top:1rem; height: .25rem; background: #efefef; width:100%;}
        .text-container p {margin:0;}
        .text-container h3 {margin:0;}
        .post-card .title-container .view {
            font-family: 'TH Sarabun New';
            margin: .125rem 0 .5rem 0;
            color: #88009b;
        }
        .post-card .title-container .view .icon {
            width:1.5rem; height:1.5rem; display:block;
            font-size: .9375rem; margin: 0 .5rem 0 0; text-align:center; line-height:1.75rem;
        }
        .slots {margin-top:-5.5rem;}
        .slot {
            height: 50%; position:relative;
        }
        .slot > img {
            position: absolute; top:0; left:0; height:auto; width:100%;
        }

        .list-wrapper {height:100%; padding: 1rem .5rem;}
        .list-wrapper ul {list-style:none; padding:0; margin:0;}
        .list-wrapper li {display:flex; margin-bottom:1rem;}
        .list-wrapper li:last-child { margin-bottom:0;}
        .list-wrapper li a {text-decoration: none; color:#fff; display:block;}
        .list-wrapper li i {display:block;font-size:.5rem; color:#fff; text-align:center; line-height: 1.375rem; height:1rem; margin-right:.5rem;}
        .list-wrapper li:hover i{color:#bb8a42;}
        .list-wrapper li:hover a{color:var(--color1);}

        @media only screen and (max-width: 991.98px){
            .slots{margin-top:-3.5rem;}
            .intro-01 > .container{padding-top:3rem; padding-bottom:1rem;}
            .text-container p {font-size:110%;}
            .text-container h3 {font-size:110%;}
        }
        @media screen and (max-width: 767.98px){
            .slot > img {position:relative; left: calc(50% - 7.1825rem);}
            .intro-01 > .container{padding-bottom:0;}
            .text-container p {font-size:90%;}
            .text-container h3 {font-size:90%;}
        }
        @media screen and (max-width:575.98px){
            .intro-01 > .container{padding-top:2.5rem;}
            .slots{margin-top:-3rem;}

        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-01 lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white">
                <h3>ข่าวประชาสัมพันธ์</h3>
                <p>เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร</p>
                <p>ด้านอุตสาหกรรมกับเราได้ที่นี่</p>
            </div>
        </div>
    </div>


    <section class="section-padding" style="position:relative;">
        <div class="container">
            <div class="grids jc-space-between">
                <div class="grid lg-25 md-30 sm-100">
                    <div class="slots">
                        <div class="slot bg-color-02">
                            <div class="list-wrapper">
                                <ul>
                                    <?php for($i=0; $i < 12; $i++){?>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#">โรงงานและการจัดตั้ง</a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="slot">
                            <img src="public/assets/app/images/bg/23.jpg" alt="">
                            <!-- <div style="width:20%; position:relative; background-image:url('public/assets/app/images/bg/23.jpg'); background-size:cover; background-position:center;"></div> -->
                        </div>
                    </div>
                    
                </div>
                <div class="grid lg-70 md-70 sm-100">
                    <div class="grids">
                        <?php for($i = 0; $i < 9; $i++){?>
                            <div class="grid lg-1-3 md-50 sm-50">
                                <div class="ss-card mb-3">
                                    <div class="block w-auto">
                                        
                                        <div class="post-card">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    รมว.สุริยะฯ เผย นิสสันมั่นใจศักยภาพฐานการผลิตของไทย
                                                </a>
                                                <div class="d-flex jc-space-between">
                                                    <div class="date" style="color: #88009b;">13.08.2563</div>
                                                    <div class="d-flex view"><div class="icon"><i class="fas fa-eye"></i></div>268</div>
                                                </div>
                                            </div>
                                            <div class="ss-img square bradius-0">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= ($i%7)+1; ?>.jpg"></div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a class="social social-fw" href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a></li>
                                                        <li><a class="social social-tw" href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a></li>
                                                        <li><a class="social social-ln" href="#">
                                                            <i class="fab fa-line"></i>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิต...
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                        <div class="h-line"></div>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <!-- <div class="pagination mt-5" data-aos="fade-up" data-aos-delay="0">
                        <div class="wrapper">
                            <a href="#" class="page-btn page-prev disabled"></a>
                            <a href="#" class="page-btn active">01</a>
                            <a href="#" class="page-btn">02</a>
                            <a href="#" class="page-btn">03</a>
                            <a href="#" class="page-btn">04</a>
                            <a href="#" class="page-btn">05</a>
                            <a href="#" class="page-btn page-next"></a>
                            <a class="btn btn-round custom-btn-dark btn-sm" href="#">
                                อ่านข่าวทั้งหมด
                            </a>
                        </div>
                    </div> -->
                    <div class="list-footer">
                        <div class="block">
                            <div class="text-wrapper text-sm">
                                จำนวนทั้งหมด <span class="fw-600 color-03">400 รายการ</span> 
                            </div>
                        </div>
                        <div class="block">
                            <div class="pagination">
                                <div class="wrapper">
                                    <a href="#" class="page-btn page-first disabled"></a>
                                    <a href="#" class="page-btn page-prev disabled"></a>
                                    <a href="#" class="page-btn active">01</a>
                                    <a href="#" class="page-btn">02</a>
                                    <a href="#" class="page-btn">03</a>
                                    <a href="#" class="page-btn">04</a>
                                    <a href="#" class="page-btn">05</a>
                                    <a href="#" class="page-btn page-next"></a>
                                    <a href="#" class="page-btn page-last"></a>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="text-wrapper text-sm">
                                แสดงผลต่อหน้า
                                <select class="pp">
                                    <option value="10">10 รายการ</option>
                                    <option value="25">25 รายการ</option>
                                    <option value="50">50 รายการ</option>
                                    <option value="75">75 รายการ</option>
                                    <option value="100">100 รายการ</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
