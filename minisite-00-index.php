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
    
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column img-only">
                        <div class="menu-container">
                            <img src="public/assets/app/images/hero/09.png" alt="Decoration" />
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9 col-md-12">

                    <section class="section-padding pb-0">
                        <h2 class="text-center mb-1" data-aos="fade-up" data-aos-delay="150">
                            ศูนย์รวมข้อมูลข่าวสาร
                        </h2>
                        <h6 class="text-center mb-0 fw-200" data-aos="fade-up" data-aos-delay="300">
                            ท่านสามารถติดตามข่าวสารอัพเดทเกี่ยวกับอุตสาหกรรมจังหวัดอุทัยธานีได้ที่นี่
                        </h6>
                        
                        <!-- Tab Container 01 -->
                        <div class="tab-container tab-container-01">
                            <div class="tabs" data-aos="fade-up" data-aos-delay="300">
                                <div class="tab active" data-tab="1">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/data-01.png" alt="Tab Icon 1" />
                                    </div>
                                    <h5 class="text-center">
                                        <span>ข่าวประชาสัมพันธ์</span>
                                    </h5>
                                </div>
                                <div class="tab" data-tab="2">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/data-02.png" alt="Tab Icon 2" />
                                    </div>
                                    <h5 class="text-center">
                                        <span>วารสารออนไลน์</span>
                                    </h5>
                                </div>
                                <div class="tab" data-tab="3">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/data-03.png" alt="Tab Icon 3" />
                                    </div>
                                    <h5 class="text-center">
                                        <span>คลังวิดีโอและสื่อมัลติมีเดีย</span>
                                    </h5>
                                </div>
                                <div class="tab" data-tab="4">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/data-05.png" alt="Tab Icon 5" />
                                    </div>
                                    <h5 class="text-center">
                                        <span>คลังภาพกิจกรรม</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">

                                <!-- Tab 1 -->
                                <div class="tab-content active" data-tab="1">
                                    <div class="grids">
                                        <?php for($j=0; $j<3; $j++){?>
                                            <div class="grid md-1-3">
                                                <div class="post-card post-card-05 btn-on-hover no-border no-padding">
                                                    <a class="ss-img bradius-0" href="#">
                                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                                        <div class="hover-container">
                                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                                        </div>
                                                        <div class="tag bg-color-blue">
                                                            สำนักบริหารภาคกลาง
                                                        </div>
                                                    </a>
                                                    <div class="title-container mt-2">
                                                        <a class="title h4" href="#">
                                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                            ปฏิรูปโครงสร้างศก
                                                        </a>
                                                    </div>
                                                    <div class="d-flex ai-center jc-space-between stats mt-2">
                                                        <div class="date">13.08.2563</div>
                                                        <div class="d-flex view">
                                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                                            268
                                                        </div>
                                                    </div>
                                                    <p class="desc mt-1">
                                                        กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                        อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                        สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                        ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                    </p>
                                                    <div class="btns mt-3">
                                                        <a class="btn-action btn-action-primary" href="#">
                                                            <i class="fas fa-chevron-right"></i>
                                                            อ่านรายละเอียด
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="pagination mt-4" data-aos="fade-up" data-aos-delay="0">
                                        <div class="wrapper">
                                            <a href="#" class="page-btn page-prev disabled"></a>
                                            <a href="#" class="page-btn active">01</a>
                                            <a href="#" class="page-btn">02</a>
                                            <a href="#" class="page-btn">03</a>
                                            <a href="#" class="page-btn">04</a>
                                            <a href="#" class="page-btn">05</a>
                                            <a href="#" class="page-btn page-next"></a>
                                            <a class="btn custom-btn-dark btn-sm" href="#">
                                                อ่านข่าวทั้งหมด
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab 2 -->
                                <div class="tab-content" data-tab="2">
                                    <div class="grids">
                                        <?php for($j=0; $j<3; $j++){?>
                                            <div class="grid md-1-3">
                                                <div class="post-card post-card-05 btn-on-hover no-border no-padding">
                                                    <a class="ss-img bradius-0" href="#">
                                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/02.jpg"></div>
                                                        <div class="hover-container">
                                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                                        </div>
                                                        <div class="tag bg-color-blue">
                                                            สำนักบริหารภาคกลาง
                                                        </div>
                                                    </a>
                                                    <div class="title-container mt-2">
                                                        <a class="title h4" href="#">
                                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                            ปฏิรูปโครงสร้างศก
                                                        </a>
                                                    </div>
                                                    <div class="d-flex ai-center jc-space-between stats mt-2">
                                                        <div class="date">13.08.2563</div>
                                                        <div class="d-flex view">
                                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                                            268
                                                        </div>
                                                    </div>
                                                    <p class="desc mt-1">
                                                        กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                        อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                        สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                        ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                    </p>
                                                    <div class="btns mt-3">
                                                        <a class="btn-action btn-action-primary" href="#">
                                                            <i class="fas fa-chevron-right"></i>
                                                            อ่านรายละเอียด
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="pagination mt-4" data-aos="fade-up" data-aos-delay="0">
                                        <div class="wrapper">
                                            <a href="#" class="page-btn page-prev disabled"></a>
                                            <a href="#" class="page-btn active">01</a>
                                            <a href="#" class="page-btn">02</a>
                                            <a href="#" class="page-btn">03</a>
                                            <a href="#" class="page-btn">04</a>
                                            <a href="#" class="page-btn">05</a>
                                            <a href="#" class="page-btn page-next"></a>
                                            <a class="btn custom-btn-dark btn-sm" href="#">
                                                อ่านข่าวทั้งหมด
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab 3 -->
                                <div class="tab-content" data-tab="3">
                                    <div class="grids">
                                        <?php for($j=0; $j<3; $j++){?>
                                            <div class="grid md-1-3">
                                                <div class="post-card post-card-05 btn-on-hover no-border no-padding">
                                                    <a class="ss-img bradius-0" href="#">
                                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/03.jpg"></div>
                                                        <div class="hover-container">
                                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                                        </div>
                                                        <div class="tag bg-color-blue">
                                                            สำนักบริหารภาคกลาง
                                                        </div>
                                                    </a>
                                                    <div class="title-container mt-2">
                                                        <a class="title h4" href="#">
                                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                            ปฏิรูปโครงสร้างศก
                                                        </a>
                                                    </div>
                                                    <div class="d-flex ai-center jc-space-between stats mt-2">
                                                        <div class="date">13.08.2563</div>
                                                        <div class="d-flex view">
                                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                                            268
                                                        </div>
                                                    </div>
                                                    <p class="desc mt-1">
                                                        กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                        อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                        สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                        ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                    </p>
                                                    <div class="btns mt-3">
                                                        <a class="btn-action btn-action-primary" href="#">
                                                            <i class="fas fa-chevron-right"></i>
                                                            อ่านรายละเอียด
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="pagination mt-4" data-aos="fade-up" data-aos-delay="0">
                                        <div class="wrapper">
                                            <a href="#" class="page-btn page-prev disabled"></a>
                                            <a href="#" class="page-btn active">01</a>
                                            <a href="#" class="page-btn">02</a>
                                            <a href="#" class="page-btn">03</a>
                                            <a href="#" class="page-btn">04</a>
                                            <a href="#" class="page-btn">05</a>
                                            <a href="#" class="page-btn page-next"></a>
                                            <a class="btn custom-btn-dark btn-sm" href="#">
                                                อ่านข่าวทั้งหมด
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab 4 -->
                                <div class="tab-content" data-tab="4">
                                    <div class="grids">
                                        <?php for($j=0; $j<3; $j++){?>
                                            <div class="grid md-1-3">
                                                <div class="post-card post-card-04 btn-on-hover no-border no-padding">
                                                    <a class="ss-img bradius-0" href="#">
                                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/04.jpg"></div>
                                                        <div class="hover-container">
                                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                                        </div>
                                                        <div class="tag bg-color-blue">
                                                            สำนักบริหารภาคกลาง
                                                        </div>
                                                    </a>
                                                    <div class="title-container mt-2">
                                                        <a class="title h4" href="#">
                                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                            ปฏิรูปโครงสร้างศก
                                                        </a>
                                                    </div>
                                                    <div class="d-flex ai-center jc-space-between stats mt-2">
                                                        <div class="date">13.08.2563</div>
                                                        <div class="d-flex view">
                                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                                            268
                                                        </div>
                                                    </div>
                                                    <p class="desc mt-1">
                                                        กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                        อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                        สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                        ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                    </p>
                                                    <div class="btns mt-3">
                                                        <a class="btn-action btn-action-primary" href="#">
                                                            <i class="fas fa-chevron-right"></i>
                                                            อ่านรายละเอียด
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="pagination mt-4" data-aos="fade-up" data-aos-delay="0">
                                        <div class="wrapper">
                                            <a href="#" class="page-btn page-prev disabled"></a>
                                            <a href="#" class="page-btn active">01</a>
                                            <a href="#" class="page-btn">02</a>
                                            <a href="#" class="page-btn">03</a>
                                            <a href="#" class="page-btn">04</a>
                                            <a href="#" class="page-btn">05</a>
                                            <a href="#" class="page-btn page-next"></a>
                                            <a class="btn custom-btn-dark btn-sm" href="#">
                                                อ่านข่าวทั้งหมด
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="intro-03 mt-5" data-aos="fade-up" data-aos-delay="0">
                        <div class="wrapper">
                            <div class="text-container">
                                <h1>
                                    เป็นองค์กรที่ขับเคลื่อน และพัฒนา อุตสาหกรรมและผู้ประกอบการ
                                </h1>
                                <p>
                                    ให้มีศักยภาพเข้มแข็งอย่างต่อเนื่อง รวมถึงการรักษาสิ่งแวดล้อม 
                                    อย่างยั่งยืน
                                </p>
                            </div>
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/47.jpg"></div>
                            <img class="hero" src="public/assets/app/images/hero/10.png" alt="Intro 03 Hero" />
                        </div>
                    </section>

                    <div class="tab-container tab-container-04">
                        <div class="tabs" data-aos="fade-up" data-aos-delay="0">
                            <?php for($i=0; $i<6; $i++){?>
                                <div class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="num">0<?= $i+1 ?>.</div>
                                    <p>ข่าวประกาศการจัดซื้อจัดจ้าง</p>
                                </div>
                            <?php }?>
                        </div>
                        <div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
                            <?php for($i=0; $i<6; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <?php for($j=0; $j<2; $j++){?>
                                        <div class="post-card post-card-04 pl-0 mb-4">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป 
                                                </a>
                                            </div>
                                            <div class="ss-tag bg-color-blue color-white no-bradius my-1">
                                                สำนักบริหารภาคกลาง
                                            </div>
                                            <p class="date">21. 09.2563</p>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิต...
                                            </p>
                                        </div>
                                    <?php }?>
                                    <div class="pagination mt-3" data-aos="fade-up" data-aos-delay="0">
                                        <div class="wrapper">
                                            <a href="#" class="page-btn page-prev disabled"></a>
                                            <a href="#" class="page-btn active">01</a>
                                            <a href="#" class="page-btn">02</a>
                                            <a href="#" class="page-btn">03</a>
                                            <a href="#" class="page-btn">04</a>
                                            <a href="#" class="page-btn">05</a>
                                            <a href="#" class="page-btn page-next"></a>
                                            <a class="btn custom-btn-dark btn-sm" href="#">
                                                อ่านข่าวทั้งหมด
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="content-02" data-aos="fade-up" data-aos-delay="0">
                        <div class="contents">
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                    <div class="text">
                                        ปฏิทิน <br> กิจกรรม
                                    </div>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="far fa-file-alt"></i></div>
                                    <div class="text">
                                        แผนการจัดซื้อจัดจ้าง
                                    </div>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                                    <div class="text">
                                        กองทุน <br> 20,000 ล้าน
                                    </div>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="fab fa-wpforms"></i></div>
                                    <div class="text">
                                        แบบฟอร์ม <br> ร้องทุกข์
                                    </div>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="fas fa-balance-scale"></i></div>
                                    <div class="text">
                                        การอุทธรณ์
                                        <div class="text-xs op-70">
                                            คำสั่งทางการปกครอง <br>
                                            ตามกฏหมายว่าด้วยแรงงาน
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="wrapper">
                                    <div class="icon"><i class="far fa-building"></i></div>
                                    <div class="text">
                                        หน่วยงาน
                                        <div class="text-xs op-70">
                                            ในสังกัดกระทรวง <br>
                                            อุตสาหกรรม
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
