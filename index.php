<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>


</style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    
    <section class="banner-01 img-only">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide">
                        <img src="public/assets/app/images/banner/07.jpg" alt="Banner <?= $i; ?>" />
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h4 class="text-center mb-0" data-aos="fade-up" data-aos-delay="0">
                ข่าวกระทรวงอุตสาหกรรม
            </h4>
            <h1 class="text-center mb-0" data-aos="fade-up" data-aos-delay="150">
                เปิดโลกทัศน์ด้านอุตสาหกรรมให้กับตัวคุณ
            </h1>
            <h2 class="text-center mb-0 fw-200" data-aos="fade-up" data-aos-delay="300">
                ด้วยการอัพเดทข่าวสารกับเราได้ที่นี่
            </h2>
            
            <!-- Tab 2 -->
            <div class="tab-container tab-container-01">
                <div class="tabs" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab active" data-tab="1">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-01.png" alt="Tab Icon 1" />
                        </div>
                        <h5 class="text-center">
                            <span>ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="2">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-02.png" alt="Tab Icon 2" />
                        </div>
                        <h5 class="text-center">
                            <span>รายงานกิจกรรมต่างๆ</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="3">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-03.png" alt="Tab Icon 3" />
                        </div>
                        <h5 class="text-center">
                            <span>ข่าวประกาศภายใต้กระทรวงอุตสาหรกรรม</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="4">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-04.png" alt="Tab Icon 4" />
                        </div>
                        <h5 class="text-center">
                            <span>ผลการจัดซื้อจัดจ้าง</span>
                        </h5>
                    </div>
                    <div class="tab" data-tab="5">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/data-05.png" alt="Tab Icon 5" />
                        </div>
                        <h5 class="text-center">
                            <span>ภาพงานกิจกรรม</span>
                        </h5>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">

                    <div class="tab-content active" data-tab="1">
                        <div class="hero" style="background-image:url('public/assets/app/images/bg/09.jpg');"></div>
                        <div class="contents">
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3">
                                        <div class="post-card">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    ปฏิรูปโครงสร้างศก
                                                </a>
                                                <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                            </div>
                                            <p class="date">21. 09.2563</p>
                                            <div class="ss-img bradius-0">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
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
                                                สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="pagination mt-5" data-aos="fade-up" data-aos-delay="0">
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
            </div>
        </div>
    </section>

    <img src="public/assets/app/images/mockup.jpg" style="display:block; width:100%; height:auto;" />
    
    <?php // include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
