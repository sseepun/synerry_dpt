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
                    <div class="slide" data-desc="<?= $i+1; ?>/8 | กำหนดชำระค่าธรรมเนียมในเดือน">
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
            <h3 class="text-center mb-0 font-02 fw-600" data-aos="fade-up" data-aos-delay="0">
                ข่าวกระทรวงอุตสาหกรรม
            </h3>
            <h2 class="text-center mb-1" data-aos="fade-up" data-aos-delay="150">
                เปิดโลกทัศน์ด้านอุตสาหกรรมให้กับตัวคุณ
            </h2>
            <h4 class="text-center mb-0 fw-200" data-aos="fade-up" data-aos-delay="300">
                ด้วยการอัพเดทข่าวสารกับเราได้ที่นี่
            </h4>
            
            <!-- Tab Container 01 -->
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

                    <!-- Tab 1 -->
                    <div class="tab-content active" data-tab="1">
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/09.jpg"></div>
                        <div class="contents">
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3">
                                        <div class="post-card btn-on-hover">
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
                                            <a class="ss-img bradius-0" href="#">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                                <div class="socials"></div>
                                            </a>
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

                    <!-- Tab 2 -->
                    <div class="tab-content" data-tab="2">
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/10.jpg"></div>
                        <div class="contents pl-0">
                            <div class="grids no-gap">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3 mt-0">
                                        <div class="post-card post-card-02 bg-color-0<?= $j+1; ?> btn-on-hover">
                                            <div class="title-container">
                                                <a class="title h4" href="#">
                                                    สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                                    เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                                    เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    ปฏิรูปโครงสร้างศก
                                                </a>
                                                <p class="by color-white">
                                                    เขียนโดย : <strong>สำนักบริหารกลาง</strong>
                                                </p>
                                            </div>
                                            <p class="date <?= $j==2? 'color-06': 'color-05'; ?>">21. 09.2563</p>
                                            <p class="desc color-white">
                                                กระทรวงอุตสาหกรรม (อก.) ผลักดันแผน
                                                อุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                สนับสนุนเพิ่มขีดความสามารถการผลิตทั้ง
                                                ภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                            </p>
                                            <div class="btns">
                                                <a class="btn-action btn-action-white" href="#">
                                                    <i class="fas fa-chevron-right"></i>
                                                    อ่านรายละเอียด
                                                </a>
                                            </div>
                                        </div>
                                        <a class="ss-img bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/02.jpg"></div>
                                            <div class="socials"></div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3 -->
                    <div class="tab-content" data-tab="3">
                        <div class="filter-bg bg-color-02"></div>
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/11.jpg"></div>
                        <div class="contents">
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3">
                                        <a class="ss-img bradius-0" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/03.jpg"></div>
                                            <div class="socials"></div>
                                        </a>
                                        <div class="post-card post-card-03 btn-on-hover bg-color-white">
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

                    <!-- Tab 4 -->
                    <div class="tab-content" data-tab="4">
                        <div class="filter-bg bg-color-sgray"></div>
                        <div class="hero lazy-bg" data-src="public/assets/app/images/bg/12.jpg"></div>
                        <div class="contents pl-0 bg-color-white">
                            <div class="post-card post-card-03 pb-0">
                                <div class="title-container height-auto">
                                    <a class="title h4 height-auto" href="#">
                                        สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                        เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                        เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                        ปฏิรูปโครงสร้างศก
                                    </a>
                                    <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                </div>
                                <p class="date">21. 09.2563</p>
                            </div>
                            
                            <div class="table-wrapper">
                                <div class="post-card post-card-03 pt-0 pb-0">
                                    <h4>เอกสารแนบ</h4>
                                </div>
                                <table class="table table-gray">
                                    <tbody>
                                        <?php foreach(['pdf', 'xls', 'doc'] as $f){?>
                                            <tr>
                                                <td class="pl-4">
                                                    <div class="file-icon file-icon-sm <?= $f; ?>"></div>
                                                </td>
                                                <td>
                                                    การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                                </td>
                                                <td>
                                                    <a class="fw-400 color-02 fw-500" href="#">
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </td>
                                                <td class="text-left pr-4">
                                                    <strong>1.44 MB</strong> 
                                                    <a href="#">
                                                        <img class="img-icon ml-2" src="public/assets/app/images/icon/download.png" alt="Download Icon" />
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="post-card post-card-03 pt-0">
                                <div class="title-container height-auto">
                                    <a class="title h4 height-auto" href="#">
                                        สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                        เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                        เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                        ปฏิรูปโครงสร้างศก
                                    </a>
                                    <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                </div>
                                <p class="date">21. 09.2563</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 5 -->
                    <div class="tab-content" data-tab="5" style="height:540px;">
                        <div class="filter-bg lazy-bg" data-src="public/assets/app/images/bg/13.jpg"></div>
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

    <section class="call-01 section-bg lazy-bg" data-src="public/assets/app/images/bg/14.jpg">
        <div class="container">
            <h1 class="text-center color-white fw-500 mb-0" data-aos="fade-up" data-aos-delay="0">
                เปิดโอกาสให้สังคมและสิ่งแวดล้อม
            </h1>
            <h4 class="text-center color-white fw-200 mt-0 mb-3" data-aos="fade-up" data-aos-delay="150">
                นี่แหละคืออุตสาหกรรมยุคใหม่ที่แท้จริง ร่วมสร้างแรงบันดาลใจดีดีไปกับเรา
            </h4>
            <div class="btns text-center" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-round custom-btn-secondary btn-popup-toggle" href="#" data-popup="subscribe">
                    หน้ารายงานกิจกรรมเพื่อสังคม
                </a>
            </div>
        </div>
    </section>
    <div class="popup-container" data-popup="subscribe">
        <div class="wrapper">
            <div class="popup-box">
                <div class="img-container">
                    <img src="public/assets/app/images/banner/08.jpg" alt="Popup Banner" />
                </div>
                <div class="btns mt-0-5">
                    <div class="form-check form-check-inline mr-3">
                        <input class="form-check-input mr-2" type="checkbox" id="show-toggle" value="1">
                        <label class="form-check-label mt-1" for="show-toggle">
                            ไม่ต้องแสดงอีก
                        </label>
                    </div>
                    <a class="btn btn-round custom-btn-tertiary btn-popup-toggle px-5" href="#" data-popup="subscribe">
                        <i class="far fa-times-circle color-white"></i> ปิด
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section-padding bg-color-gray">
        <div class="container">
            <h3 class="text-center mb-1 font-02 fw-600" data-aos="fade-up" data-aos-delay="0">
                ข่าวกระทรวงอุตสาหกรรมสำหรับคุณ
            </h3>
            <h2 class="text-center mb-0" data-aos="fade-up" data-aos-delay="300">
                เปิดโลกทัศน์ให้กับตัวคุณเอง 
                <span class="fw-200">ด้วยการอัพเดทข่าวสารด้านอุตสาหกรรมกับเราที่นี่</span>
            </h2>
            
            <!-- Tab Container 02 -->
            <div class="tab-container tab-container-02">
                <div class="tabs" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab active" data-tab="1">
                        <div class="icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 class="text-center">ผู้ประกอบการ / SME</h4>
                    </div>
                    <div class="tab" data-tab="2">
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="text-center">นักลงทุน</h4>
                    </div>
                    <div class="tab" data-tab="3">
                        <div class="icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h4 class="text-center">นักวิชาการ</h4>
                    </div>
                    <div class="tab" data-tab="4">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="text-center">บุคคลทั่วไป</h4>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">
                    <?php for($i=1; $i<5; $i++){?>
                        <div class="tab-content <?php if($i==1)echo 'active'; ?>" data-tab="<?= $i; ?>">
                            <div class="filter-bg lazy-bg" data-src="public/assets/app/images/bg/15.jpg"></div>
                            <div class="slide-container">
                                <div class="slides">
                                    <?php for($j=0; $j<5; $j++){?>
                                        <div class="slide">
                                            <div class="post-card post-card-03">
                                                <div class="title-container">
                                                    <a class="title h4" href="#">
                                                        สุริยะฯ ดันแผนพัฒนาอุตฯ เครื่องจักรกลเต็มสูบ มุ่งสนับสนุนเกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                                    </a>
                                                    <p class="by">เขียนโดย : <strong>สำนักบริหารกลาง</strong></p>
                                                </div>
                                                <p class="date">21. 09.2563</p>
                                                <p class="desc">
                                                    กระทรวงอุตสาหกรรม (อก.) ผลักดันแผนอุตสาหกรรมเครื่องจักรกลให้เป็นอุตสาหกรรม
                                                    สนับสนุนเพิ่มขีดความสามารถการผลิตทั้งภาคอุตสาหกรรมและภาคเกษตรกรรม...
                                                </p>
                                                <!-- <div class="social-btns pt-2 pb-1">
                                                    <a class="btn-social btn-social-fw" href="#">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a class="btn-social btn-social-tw" href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a class="btn-social btn-social-ln" href="#">
                                                        <i class="fab fa-line"></i>
                                                    </a>
                                                </div> -->
                                                <div class="btns pt-2 pb-2">
                                                    <a class="btn-action btn-action-dark" href="#">
                                                        <i class="fas fa-chevron-right"></i>
                                                        อ่านรายละเอียด
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="arrows"></div>
                            </div>
                        </div>
                    <?php }?>
                </div>
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
                    <a class="btn btn-round custom-btn-dark btn-sm" href="#">
                        อ่านข่าวทั้งหมด
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-01" data-aos="fade-up" data-aos-delay="0">
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
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/16.jpg'); background-position:center -2rem;"></div>
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
                                <div class="tab" data-tab="4">
                                    <div class="icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="text-center">ข่าวยอดนิยม</h4>
                                </div>
                            </div>
                            <div class="tab-contents">
                                <?php for($k=1; $k<=4; $k++){?>
                                    <div class="tab-content <?php if($k==1)echo 'active'; ?>" data-tab="<?= $k; ?>">
                                        <div class="grids no-gap">
                                            <div class="grid lg-50 sm-100 mt-0">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="ss-card mb-3">
                                                        <div class="block">
                                                            <a class="ss-img square bradius-0" href="#">
                                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $k; ?>.jpg"></div>
                                                                <div class="socials"></div>
                                                            </a>
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
                                            <div class="grid lg-50 sm-100 bg-color-sgray mt-0">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="ss-card mb-3">
                                                        <div class="block">
                                                            <a class="ss-img square bradius-0" href="#">
                                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/0<?= $k; ?>.jpg"></div>
                                                                <div class="socials"></div>
                                                            </a>
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
                                        </div>
                                        <div class="pagination mt-0">
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

    <section class="call-02">
        <div class="container">
            <h1 class="text-center mb-0" data-aos="fade-up" data-aos-delay="0">
                เรารับฟังความคิดเห็นของคุณ
            </h1>
            <h4 class="text-center font-02 fw-300 mt-0 mb-0" data-aos="fade-up" data-aos-delay="150">
                เกี่ยวกับความรับผิดชอบของกระทรวงอุตสาหกรรม
            </h4>
            <div data-aos="fade-up" data-aos-delay="300">
                <img class="subject lazy-img" data-src="public/assets/app/images/hero/03.png" alt="Call 02" />
            </div>
        </div>
        <div class="call-container" style="background-image:url('public/assets/app/images/bg/17.jpg');">
            <div class="container" data-aos="fade-up" data-aos-delay="450">
                <form action="/" method="POST">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="สมัครรับข่าวสารกับกระทรวงอุตสาหกรรม" required />
                        <div class="input-group-append">
                            <button class="btn custom-btn-tertiary" type="submit">
                                สมัครรับข่าว
                            </button>
                        </div>
                    </div>
                </form>
                <div class="call-text text-center title">
                    ปฏิรูปอุตสาหกรรมสู่ 4.0
                </div>
                <div class="call-text text-center desc">
                    เพิ่มมูลค่าเศรษฐกิจอุตสาหกรรมของไทยให้เติบโตไม่น้อยกว่าร้อยละ 4.5
                </div>
                <div class="call-text text-center desc desc-lg">
                    ภายในปี พ.ศ.2564
                </div>
                <div class="slide-container">
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
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
