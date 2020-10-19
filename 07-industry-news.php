<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
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
                        <?php for($i=0; $i<8; $i++){?>
                            <div class="grid lg-1-3 md-50 sm-50">
                                <div class="post-card post-card-05 btn-on-hover">
                                    <div class="title-container">
                                        <a class="title h4" href="#">
                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                            ปฏิรูปโครงสร้างศก
                                        </a>
                                    </div>
                                    <div class="d-flex ai-center jc-space-between stats">
                                        <div class="date">13.08.2563</div>
                                        <div class="d-flex view">
                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                            268
                                        </div>
                                    </div>
                                    <div class="ss-img bradius-0">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="socials">
                                            <ul>
                                                <li><a class="social" href="#">
                                                    <img src="public/assets/app/images/social/fb.png" alt="Social Icon" />
                                                </a></li>
                                                <li><a class="social" href="#">
                                                    <img src="public/assets/app/images/social/tw.png" alt="Social Icon" />
                                                </a></li>
                                                <li><a class="social" href="#">
                                                    <img src="public/assets/app/images/social/ln.png" alt="Social Icon" />
                                                </a></li>
                                                <li><a class="social" href="#">
                                                    <img src="public/assets/app/images/social/link.png" alt="Social Icon" />
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

                    <div class="list-footer mt-5 mb-5">
                        <div class="block">
                            <div class="text-wrapper text-sm">
                                จำนวนทั้งหมด <span class="fw-600 color-03">400 รายการ</span> 
                            </div>
                        </div>
                        <div class="block">
                            <div class="pagination">
                                <div class="wrapper">
                                    <a href="#" class="page-btn page-prev disabled"></a>
                                    <a href="#" class="page-btn active">01</a>
                                    <a href="#" class="page-btn">02</a>
                                    <a href="#" class="page-btn">03</a>
                                    <a href="#" class="page-btn">04</a>
                                    <a href="#" class="page-btn">05</a>
                                    <a href="#" class="page-btn page-next"></a>
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
