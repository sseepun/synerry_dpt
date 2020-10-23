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
                <h2 class="fw-100 mb-0">คลังภาพ</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
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

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'คลังภาพ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2 sm-no-br">
                        ก.อุต ดันการแก้ไขปัญหามลพิษ PM 2.5 แบบบูรณาการ 
                        <br> เป็นวาระแห่งชาติ
                    </h2>
                    <?php include_once('component/post-header.php'); ?>
                    
                    <div class="post-img post-img-02 mt-4">
                        <img src="public/assets/app/images/hero/07.jpg" alt="Post Image" />
                    </div>
                    
                    <div class="gallery-grids pb-4">
                        <?php for($i=0; $i<8; $i++){?>
                            <div class="grid md-25">
                                <a class="ss-img bradius-0" href="public/assets/app/images/banner/01.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-text <?php if($i==7)echo 'op-100'; ?>">
                                        <p class="color-white text-center">
                                            รูปภาพทั้งหมด <br>
                                            <span class="text-xl fw-600">120</span> 
                                            รูปภาพ
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    <?php include_once('component/post-footer.php'); ?>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">ไฟล์เอกสารที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="table-wrapper mt-1 border-bottom" data-simplebar data-aos="fade-up" data-aos-delay="300">
                        <table class="table table-file">
                            <tbody>
                                <?php for($i=0; $i<3; $i++){?>
                                    <tr>
                                        <td style="min-width:300px;">
                                            <span class="fw-600 color-04 text-lg">
                                                ประกาศกรมอนามัย ฉบับที่ 27/04.pdf
                                            </span>
                                            <br>
                                            <span class="text-sm">ขนาดไฟล์</span>
                                            <span class="fw-600 color-04">1.31 MB</span>
                                            <span class="text-sm">|</span>
                                            <span class="text-sm">จำนวนดาวน์โหลด</span>
                                            <span class="fw-600 color-04">16 ครั้ง</span>
                                        </td>
                                        <td style="width:260px;">
                                            <div class="d-flex ai-center jc-end">
                                                <a class="btn btn-sm btn-round custom-btn-10 btn-toggle mr-1" href="#" data-toggle="embed-<?= $i ?>">
                                                    Embed <i class="fas fa-code"></i>
                                                </a>
                                                <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                    ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                </a>
                                                <div class="v-sep"></div>
                                                <a class="btn-icon" href="#">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="no-padding">
                                            <div class="toggle-target" data-toggle="embed-<?= $i ?>">
                                                <textarea name="message" class="no-bradius" rows="2"></textarea>
                                                <div class="btns mt-0">
                                                    <a class="btn btn-sm custom-btn-tertiary no-bradius width-full" href="#">
                                                        คัดลอกโค้ด
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-images color-white"></i></div>
                        <h4 class="fw-600">คลังภาพที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-4">
                                <div class="post-card post-card-08">
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
                                            <div class="icon"><i class="far fa-image"></i></div>
                                            15
                                        </div>
                                        <div class="d-flex view">
                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                            268
                                        </div>
                                    </div>
                                </div>
                                <a class="ss-img square  bradius-0" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-container">
                                        <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
