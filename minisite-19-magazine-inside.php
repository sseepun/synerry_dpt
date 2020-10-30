<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
    <style>
        .block-wrapper {
            padding: 1.5rem;
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
        }
        .block-wrapper .info-socials {display:flex; flex-wrap: wrap; align-items:center; justify-content: space-between; padding: 0 0 1rem 0; border-bottom: 1px solid transparent; border-color: #e7e7e7; }
        .block-wrapper .info-socials .info .date, .block-wrapper .info-socials .info .view {
            display:inline-block;  border-right: 1px solid transparent; border-color: var(--color2); margin: .5rem .5rem 0 0;  padding: 0 .5rem 0 0;
        }
        .block-wrapper .info-socials .info .pages {display:inline-block; margin: .5rem 0 0 0;}
        .download-container {
            margin: 2rem 0; 
        }
        .download-container a {
            display:inline-block; text-decoration: none; background:#4494cb; padding: .625rem 4rem .625rem .625rem; margin: .5rem 1rem 0 0;  color:#fff; text-align:center;
            transition: background .4s;
        }
        .download-container a:hover {background:#007bff; }
        .download-container .file-size {margin: .5rem 0 0 0; display:inline-block;}
        .download-container a i {padding: 0 1.25rem 0 0;}
    

        .block-wrapper .embed-form {padding: 1.5rem 2.5rem; background:#e1e1e1;}
        .block-wrapper input[type="text"]{
            border-radius:0; padding: .125rem .125rem .125rem .375rem; width:70%;
        }
        .block-wrapper button {border:none; padding: .25rem 3rem .25rem 2.5rem;}

        .block-wrapper .embed-form > * {margin: .5rem 0 0 0;}

        @media screen and (max-width:767.98px){
            .block-wrapper input[type="text"]{width:100%;}
        }

        @media screen and (max-width: 575.98px){
            .block-wrapper .embed-form { padding: 1.5rem;}
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
                    [ 'url' => '#', 'name' => 'วารสารออนไลน์' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="ss-search-container bg-color-sgray pt-3 pb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาข่าวประชาสัมพันธ์" autocomplete="off" required />
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
        
    <div class="container" data-aos="fade-up" data-aos-delay="600">
        <div class="book-container">
            <div class="wow-book" id="wow-book">
                <?php for($i=1; $i<7; $i++){?>
                    <div><img src="public/assets/app/images/banner/0<?= $i ?>.jpg" alt="Page <?= $i ?>" /></div>
                <?php }?>
            </div>
        </div>
    </div>

    <section class="section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="block-wrapper">
                <h3 class="fw-100">รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรม ประจำปีงบประมาณ พ.ศ. 2558</h3>
                
                <div class="info-socials">
                    <div class="info color-02">
                        <div class="date">
                            24-08-2563
                        </div>
                        <div class="view">
                            เปิดดู : 130
                        </div>
                        <div class="pages">
                            77 หน้า
                        </div>
                    </div>
                    <div class="icons mt-2">
                        <img src="public/assets/app/images/social/fb.png" alt="social icon">
                        <img src="public/assets/app/images/social/tw.png" alt="social icon">
                        <img src="public/assets/app/images/social/ln.png" alt="social icon">
                        <img src="public/assets/app/images/social/link.png" alt="social icon">
                    </div>
                </div>

                <div class="download-container fw-100">
                    <a href="#">
                        <i class="fas fa-arrow-down"></i>
                        Download
                    </a>
                    <div class="file-size">
                        ขนาดไฟล์ : 81.91 MB
                    </div>
                    
                </div>

                <form>
                    <div class="d-flex ai-center jc-start fw-wrap embed-form">
                        <label class="font-01 text-md mr-2 mb-0 fw-100">embed code</label>
                        <input type="text">
                        <button class="bg-color-02 fw-100 color-white text-sm" href="#">copy</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
     
    <section class="content-03 section-padding bg-color-gray">
        <div class="container" data-aos="fade-up" data-aos-delay="0">
            <h3 class="text-center color-02 mb-3">วารสารออนไลน์ล่าสุด</h3>
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<8; $i++){?>
                        <div class="slide">
                            <div class="ss-img vertical bradius-0">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
                                <div class="card-hover-container">
                                    <div class="wrapper">
                                        <h6 class="title">
                                            รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรมประจำปีงบประาณ พ.ศ. 2562
                                        </h6>
                                        <div class="btns">
                                            <a class="btn" href="#">
                                                <i class="fas fa-search"></i>
                                            </a>
                                            <a class="btn" href="#">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                        <div class="stats">
                                            24-08-2563
                                            <span class="sep"></span>
                                            เปิดดู : 130
                                            <span class="sep"></span>
                                            80 หน้า
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="public/assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
