<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
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
            <h4 class="text-center mb-0">ข่าวกระทรวงอุตสาหกรรม</h4>
            <h1 class="text-center mb-0">เปิดโลกทัศน์ด้านอุตสาหกรรมให้กับตัวคุณ</h1>
            <h3 class="text-center mb-0">ด้วยการอัพเดทข่าวสารกับเราได้ที่นี่</h3>
        </div>
    </section>
    
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="0">
                ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม
            </h2>
            
            <!-- Tab 2 -->
            <div class="tab-container-2">
                <div class="tabs" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab active" data-tab="1">
                        <div class="icon">
                            <img src="./assets/img/icon/data-01.png" alt="Tab Icon 1" />
                        </div>
                        <div class="text-container">
                            ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม
                        </div>
                    </div>
                    <div class="tab" data-tab="2">
                        <div class="icon">
                            <img src="./assets/img/icon/data-02.png" alt="Tab Icon 2" />
                        </div>
                        <div class="text-container">
                            รายงานกิจกรรมต่างๆ
                        </div>
                    </div>
                    <div class="tab" data-tab="3">
                        <div class="icon">
                            <img src="./assets/img/icon/data-03.png" alt="Tab Icon 3" />
                        </div>
                        <div class="text-container">
                            ข่าวประกาศภายใต้กระทรวงอุตสาหรกรรม
                        </div>
                    </div>
                    <div class="tab" data-tab="4">
                        <div class="icon">
                            <img src="./assets/img/icon/data-04.png" alt="Tab Icon 4" />
                        </div>
                        <div class="text-container">
                            ผลการจัดซื้อจัดจ้าง
                        </div>
                    </div>
                    <div class="tab" data-tab="5">
                        <div class="icon">
                            <img src="./assets/img/icon/data-05.png" alt="Tab Icon 5" />
                        </div>
                        <div class="text-container">
                            ภาพงานกิจกรรม
                        </div>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
                    <?php for($i=1; $i<6; $i++){?>
                        <div class="tab-content <?php if($i==1)echo 'active'; ?>" data-tab="<?php echo $i; ?>">
                            <div class="grids">
                                <?php for($j=0; $j<4; $j++){?>
                                    <div class="grid md-50 lg-25 mt-0">
                                        <div class="ss-img bradius-0">
                                            <div class="img-bg" style="background-image:url('./assets/img/banner/0<?php echo ($i+2)%6 + 1; ?>.jpg');"></div>
                                            <div class="socials">
                                                <ul>
                                                    <li><a class="social social-fw" href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a></li>
                                                    <li><a class="social social-tw" href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="ss-h5" href="#">
                                            ประชุมคณะกรรมการเทคโนโลยีสารสนเทศ
                                            กระทรวงอุตสาหกรรมร่วมกับสำนักงาน
                                            พัฒนา...
                                        </a>
                                        <div class="ss-date color1">10.04.2563</div>
                                        <p>
                                            นายนิรันดร์ ยิ่งมหิศรานนท์ รองอธิบดีกรม
                                            อุตสาหกรรมพื้นฐานและการเหมืองแร่ รักษาการ
                                            ผู้ตรวจราชการกระทรวงอุตสาหกรรม ในฐานะ
                                            ประธานคณะกรรมการตรวจรับพัสดุ...
                                        </p>
                                        <div class="btns">
                                            <a class="btn btn-action btn-white next-icon" href="#">
                                                อ่านรายละเอียด
                                            </a>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="pagination" style="margin-top:3rem;">
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
                                    <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                        อ่านข่าวทั้งหมด
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
