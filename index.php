<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-02">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide" style="background-image:url('./assets/img/banner/06.jpg');">
                        <div class="container">
                            <div class="text-wrapper">
                                <h2 class="animate" style="--delay:.6s;">
                                    ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                                </h2>
                                <p class="animate" style="--delay:.75s;">
                                    ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                    <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="background-image:url('./assets/img/banner/04.jpg');">
                        <div class="container">
                            <h2 class="animate text-center" style="--delay:.6s;">
                                ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                            </h2>
                            <p class="animate text-center" style="--delay:.75s;">
                                ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                            </p>
                        </div>
                    </div>
                    <div class="slide" style="background-image:url('./assets/img/banner/01.jpg');">
                        <div class="container">
                            <h2 class="animate text-center" style="--delay:.6s;">
                                ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                            </h2>
                            <p class="animate text-center" style="--delay:.75s;">
                                ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                            </p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
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

    <section class="call-03" style="background-image:url('./assets/img/bg/02.jpg');">
        <div class="container">
            <div class="contents">
                <div class="text-container">
                    <h3 data-aos="fade-up" data-aos-delay="0">
                        <span class="quote start"><i class="fas fa-quote-left"></i></span>
                        อุตสาหกรรมที่เป็น <br>
                        นวัตกรรมอย่างแท้จริงนั้น <br>
                        ต้องส่งผลบวกแทนที่จะ <br>
                        ส่งผลลบต่อโลก
                        <span class="quote end"><i class="fas fa-quote-right"></i></span>
                    </h3>
                    <div class="btns" data-aos="fade-up" data-aos-delay="300">
                        <a class="btn btn-action btn-primary" href="#">
                            อ่านรายละเอียด
                        </a>
                        <a class="btn btn-action btn-secondary" href="#">
                            อ่านรายละเอียด
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-03" style="background-image:url('./assets/img/bg/03.jpg');">
        <div class="selection" data-aos="fade-in" data-aos-delay="300">
            <div class="container">
                <div class="selectors">
                    <div class="title">
                        <h2>ติดตามข่าวสาร</h2>
                        <p>เกี่ยวกับอุตสาหกรรมในเขตภาคอีสาน</p>
                    </div>
                    <a class="selector active" href="#">
                        <h3>ข่าวอุตสาหกรรม</h3>
                    </a>
                    <a class="selector" href="#">
                        <h3>ภาคกลาง</h3>
                    </a>
                    <a class="selector" href="#">
                        <h3>ภาคเหนือ</h3>
                    </a>
                    <a class="selector" href="#">
                        <h3>ข่าวอุตสาหกรรม</h3>
                    </a>
                    <a class="selector" href="#">
                        <h3>ภาคใต้</h3>
                    </a>
                    <a class="selector" href="#">
                        <h3>ภาคตะวันออก</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-padding">
                <h1 class="text-center" data-aos="fade-up" data-aos-delay="0">
                    เปิดโอกาศให้สังคมและสิ่งแวดล้อม
                </h1>
                <p class="text-center" data-aos="fade-up" data-aos-delay="300">
                    นี่แหละอุตสาหกรรมยุคใหม่ที่แท้จริง ไม่ว่าคุณจะอยู่ที่ไหนก็ร่วมสร้างแรงบันดาลใจดีดีไปกับเรา
                </p>
                <div class="box" data-aos="fade-up" data-aos-delay="0">
                    <div class="tab-container" style="transform:translateY(-1px);">
                        <div class="tabs">
                            <div class="tab active" data-tab="1">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>01.</span> ข่าวมาใหม่
                                    </div>
                                    <div class="desc">กระทรวงอุตสาหกรรม</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="2">
                                <div class="icon"><i class="fas fa-history"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>02.</span> ข่าวอัพเดท
                                    </div>
                                    <div class="desc">กระทรวงอุตสาหกรรม</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="3">
                                <div class="icon"><i class="fas fa-book-reader"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>03.</span> ข่าวที่เปิดอ่าน
                                    </div>
                                    <div class="desc">กระทรวงอุตสาหกรรม</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="4">
                                <div class="icon"><i class="fas fa-star"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>04.</span> ข่าวยอดนิยม
                                    </div>
                                    <div class="desc">กระทรวงอุตสาหกรรม</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-contents">
                            <?php for($i=1; $i<5; $i++){?>
                                <div class="tab-content <?php if($i==1)echo 'active'; ?>" data-tab="<?php echo $i; ?>" 
                                style="padding:2rem 1rem;">
                                    <div class="grids">
                                        <?php for($j=0; $j<2; $j++){?>
                                            <div class="grid sm-50 mt-0">
                                                <?php for($k=0; $k<3; $k++){?>
                                                    <div class="ss-card" style="margin-bottom:1rem;">
                                                        <div class="block">
                                                            <div class="ss-img square">
                                                                <div class="img-bg" style="background-image:url('./assets/img/banner/0<?php echo ($i+$j+$k)%6 + 1; ?>.jpg');"></div>
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
                                                        </div>
                                                        <div class="block">
                                                            <a class="ss-h5" href="#">
                                                                ประชุมคณะกรรมการเทคโนโลยีสารสนเทศ
                                                                กระทรวงอุตสาหกรรมร่วมกับสำนักงานพัฒนา...
                                                            </a>
                                                            <div class="ss-date">10.04.2563</div>
                                                            <p>
                                                                นายนิรันดร์ ยิ่งมหิศรานนท์ รองอธิบดีกรมอุตสาหกรรมพื้นฐาน
                                                                และการเหมืองแร่...
                                                            </p>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>
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
                                                <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                                    อ่านข่าวทั้งหมด
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="./assets/img/mockup.jpg" style="display:block; width:100%; height:auto;">

    <section class="client-01">
        <div class="container">
            <div class="clients" data-aos="fade-up" data-aos-delay="0">
                <a class="client" href="#">
                    <img src="./assets/img/client/01.jpg" alt="Client 01 0">
                    <h6 class="name">
                        ศาลปกครอง <br>
                        สาระดีดีจากศาลปกครอง
                    </h6>
                </a>
                <a class="client" href="#">
                    <img src="./assets/img/client/02.jpg" alt="Client 01 1">
                    <h6 class="name">
                        สสช. <br>
                        สำนักงานสถิติแห่งชาติ
                    </h6>
                </a>
                <a class="client" href="#">
                    <img src="./assets/img/client/03.jpg" alt="Client 01 2">
                    <h6 class="name">
                        กพร. <br>
                        สำนักงานคณะกรรมการ <br>
                        พัฒนาระบบข้าราชการ
                    </h6>
                </a>
                <a class="client" href="#">
                    <img src="./assets/img/client/04.jpg" alt="Client 01 3">
                    <h6 class="name">
                        ฐานข้อมูลหน่วยงานรัฐ
                    </h6>
                </a>
                <a class="client" href="#">
                    <img src="./assets/img/client/05.jpg" alt="Client 01 4">
                    <h6 class="name">
                        สำนักงาน ก.พ.
                    </h6>
                </a>
                <a class="client" href="#">
                    <img src="./assets/img/client/06.jpg" alt="Client 01 5">
                    <h6 class="name">
                        กองทุนบำเหน็จบำนาญ <br>
                        ข้าราชการ
                    </h6>
                </a>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
