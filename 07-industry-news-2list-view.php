<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Custom CSS */
        .ss-card .h-line {margin-top:1rem; height: .25rem; background: #efefef; width:100%;}
        .text-container p {margin:0;}
        .text-container h3 {margin:0;}
        /* .ss-card .date {margin: .125rem 0 .5rem 0;} */
        .ss-card .view {
            font-family: 'TH Sarabun New';
            margin: .5rem 0 0 .25rem;
            color: #88009b;
        }
        .ss-card .view .icon {
            width:1.5rem; height:1.5rem; display:block;
            font-size: .9375rem; margin: 0 .25rem 0 0; text-align:center; line-height:1.75rem;
        }
        .slots {margin-top:-5.5rem;}
        .slot {
            height: 50%; position:relative;
        }
        .slot > img {
            position: relative; top:0; left:0; height:auto; width:100%;
        }

        .list-wrapper {height:100%; padding: 1rem .5rem;}
        .list-wrapper ul {list-style:none; padding:0; margin:0;}
        .list-wrapper li {display:flex; margin-bottom:1rem;}
        .list-wrapper li:last-child { margin-bottom:0;}
        .list-wrapper li a {text-decoration: none; color:#fff; display:block;}
        .list-wrapper li i {display:block;font-size:.5rem; color:#fff; text-align:center; line-height: 1.375rem; height:1rem; margin-right:.5rem;}
        .list-wrapper li:hover i{color:#bb8a42;}
        .list-wrapper li:hover a{color:var(--color1);}

        @media screen and (max-width: 991.98px){
            .slots{margin-top:-3.5rem;}
            .text-container p {font-size:110%;}
            .text-container h3 {font-size:110%;}
        }
        @media screen and (max-width: 767.98px){
            .slot > img {left: calc(50% - 7.1825rem); width:auto;}
            .text-container p {font-size:90%;}
            .text-container h3 {font-size:90%;}
        }
        @media screen and (max-width:575.98px){
            .slots{margin-top:-3rem;}
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">ข่าวประชาสัมพันธ์</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="grids">

            <div class="grid lg-25 md-35 sm-100 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
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

                <div class="grid lg-75 md-65 sm-100" data-aos="fade-up" data-aos-delay="600">

                    <div class="grids">
                        <?php for($i = 0; $i < 9; $i++){?>
                            <div class="ss-card mb-3">
                                <div class="block">
                                    <div class="ss-img square bradius-0">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= ($i%7) +1; ?>.jpg"></div>
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
                                </div>
                                <div class="block">
                                    <div class="post-card post-card-04">
                                        <div class="title-container">
                                            <a class="title h4" href="#">
                                                สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                เกษตรแปรรูป 
                                            </a>
                                        </div>
                                        <div class="d-flex ai-center">
                                            <div class="date" style="color: #88009b;">13.08.2563</div>
                                            <div class="d-flex view"><div class="icon"><i class="fas fa-eye"></i></div>268</div>
                                        </div>
                                        <p class="desc">
                                            กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                            อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                            สนับสนุนเพิ่มขีดความสามารถการผลิต...
                                        </p>
                                    </div>
                                    <div class="btns">
                                        <a class="btn-action btn-action-primary" href="#">
                                            <i class="fas fa-chevron-right"></i>
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                    <div class="h-line"></div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <div class="list-footer mt-5 mb-5">
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
