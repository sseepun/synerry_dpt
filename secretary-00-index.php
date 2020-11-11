<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    
    <section class="banner-01 img-only no-filter">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide" data-desc="กำหนดชำระค่าธรรมเนียมในเดือน | <?= $i+1; ?>/8">
                        <img src="public/assets/app/images/banner/03.jpg" alt="Banner <?= $i; ?>" />
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-0" data-aos="fade-up" data-aos-delay="150">
                ข่าวสำนักงานปลัดกระทรวงอุตสาหกรรม
            </h2>
            
            <!-- Tab Container 01 -->
            <div class="tab-container tab-container-01 mt-3">
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
                    <?php for($i=1; $i<=5; $i++){?>
                        <div class="tab-content <?php if($i==1)echo 'active'; ?>" data-tab="<?= $i; ?>">
                            <div class="grids">
                                <?php for($j=0; $j<4; $j++){?>
                                    <div class="grid lg-25 sm-50">
                                        <div class="post-card btn-on-hover">
                                            <div class="ss-img bradius-0">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $i; ?>.jpg"></div>
                                                <div class="tag bg-color-04">
                                                    สำนักบริหารกลาง
                                                </div>
                                                <div class="hover-container">
                                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                                </div>
                                            </div>
                                            <div class="title-container mt-2">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    ปฏิรูปโครงสร้างศก
                                                </a>
                                                <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                            </div>
                                            <p class="date">21. 09.2563</p>
                                            <p class="desc">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-primary-02" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            
            <div class="pagination pagination-02 mt-5" data-aos="fade-up" data-aos-delay="0">
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

    <section class="call-01 section-bg lazy-bg" data-src="public/assets/app/images/bg/18.jpg">
        <div class="container">
            <h1 class="text-center color-white fw-500 mb-0" data-aos="fade-up" data-aos-delay="0">
                เปิดโอกาสให้สังคมและสิ่งแวดล้อม
            </h1>
            <h3 class="text-center color-white fw-200 mt-0 mb-3" data-aos="fade-up" data-aos-delay="150">
                นี่แหละคืออุตสาหกรรมยุคใหม่ที่แท้จริง  ร่วมสร้างแรงบันดาลใจดีดีไปกับเรา
            </h3>
        </div>
    </section>

    <section class="content-01 no-fading" data-aos="fade-up" data-aos-delay="0">
        <div class="content-header">
            <div class="container">
                <div class="content-tabs">
                    <div class="header">
                        <h3 class="fw-300">ข่าวอุตสาหกรรมจังหวัด</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab active" data-id="1">
                        <h3 class="fw-300">รวมทุกจังหวัด</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab" data-id="2">
                        <h3 class="fw-300">ภาคกลาง</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab" data-id="3">
                        <h3 class="fw-300">ภาคเหนือ</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab" data-id="4">
                        <h3 class="fw-300">ภาคอีสาน</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab" data-id="5">
                        <h3 class="fw-300">ภาคใต้</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                    <div class="tab" data-id="6">
                        <h3 class="fw-300">ภาคตะวันออก</h3>
                        <p>ทั้ง 77 จังหวัดทั่วประเทศไทย</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contents">
            <?php for($z=1; $z<=6; $z++){?>
                <div class="content <?php if($z==1)echo 'active'; ?>" data-id="<?= $z; ?>">
                    <div class="img-bg-container">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/19.jpg'); background-position:center -25rem;"></div>
                    </div>
                    <div class="container">
                        <h2 class="color-white text-center mb-4">
                            ร่วมถ่ายทอดเรื่องราวดีดีเกี่่ยวกับอุตสาหกรรม
                        </h2>
                        <h4 class="color-white text-center font-02 fw-300 mt-3 mb-0 xs-no-br">
                            ทั้ง <span class="text-xxxl font-01">7<?= $z; ?></span> 
                            จังหวัดทั่วประเทศไทยเพื่อแลกเปลี่ยนความรู้ความคิดเห็น 
                            <br>และนำไปสู่การต่อยอดเพื่อพัฒนาประชาติต่อไป
                        </h4>
                        <div class="tab-container tab-container-03">
                            <div class="tabs">
                                <div class="tab active" data-tab="1">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h4 class="text-center">ข่าวมาใหม่</h4>
                                </div>
                                <div class="tab" data-tab="2">
                                    <div class="icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <h4 class="text-center">ข่าวอัพเดท</h4>
                                </div>
                                <div class="tab" data-tab="3">
                                    <div class="icon">
                                        <i class="fas fa-book-reader"></i>
                                    </div>
                                    <h4 class="text-center">ข่าวที่เปิดอ่าน</h4>
                                </div>
                            </div>
                            <div class="tab-contents">
                                <?php for($k=1; $k<=3; $k++){?>
                                    <div class="tab-content <?php if($k==1)echo 'active'; ?>" data-tab="<?= $k; ?>">
                                        <div class="grids no-gap mb-3">
                                            <div class="grid lg-50 sm-100 mt-0 pb-2">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="ss-card mb-3">
                                                        <div class="block">
                                                            <div class="ss-img square bradius-0">
                                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $k; ?>.jpg"></div>
                                                                <div class="hover-container">
                                                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
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
                                                                <p class="date">21. 09.2563</p>
                                                                <p class="desc">
                                                                    กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                                    อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                                    สนับสนุนเพิ่มขีดความสามารถการผลิต...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <div class="grid lg-50 sm-100 bg-color-sgray mt-0 pb-2">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="ss-card mb-3">
                                                        <div class="block">
                                                            <div class="ss-img square bradius-0">
                                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $k; ?>.jpg"></div>
                                                                <div class="hover-container">
                                                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
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
                                                                <p class="date">21. 09.2563</p>
                                                                <p class="desc">
                                                                    กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                                    อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                                    สนับสนุนเพิ่มขีดความสามารถการผลิต...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <!-- <div class="grid lg-50 sm-100 bg-color-sgray mt-0 pb-2">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="post-card post-card-06 pb-3 no-border">
                                                        <div class="title-container">
                                                            <a class="title h4" href="#">
                                                                สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                                เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                                เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                                ปฏิรูปโครงสร้างศก
                                                            </a>
                                                        </div>
                                                        <p class="date">21. 09.2563</p>
                                                        <p class="desc">
                                                            กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                            อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                            สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                            ภาคอุตสาหกรรมและภาคเกษตรกรรม
                                                            กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                            อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                            สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                            ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                        </p>
                                                    </div>
                                                <?php }?>
                                            </div> -->
                                        </div>
                                        <div class="pagination pagination-02 mt-3">
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
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>

    <section class="call-02 pb-4">
        <div class="container">
            <h2 class="text-center color-white mb-0" data-aos="fade-up" data-aos-delay="0">
                เรารับฟังความคิดเห็นของคุณ
            </h2>
            <h4 class="text-center color-white font-02 fw-300 mt-0 mb-0" data-aos="fade-up" data-aos-delay="150">
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
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
