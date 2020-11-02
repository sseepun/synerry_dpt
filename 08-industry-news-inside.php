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
                            [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2">
                        รมว. สุริยะฯ เผย นิสสันมั่นใจศักยภาพฐานการผลิตของไทยเดินหน้าลงทุนต่อไป
                    </h2>
                    <?php include_once('component/post-header.php'); ?>
                    
                    <div class="post-img">
                        <img class="hero" src="public/assets/app/images/hero/06.png" alt="Post Hero" />
                        <img src="public/assets/app/images/bg/25.jpg" alt="Post Image" />
                    </div>

                    <div class="post-content">
                        <h5 class="fw-500">
                            สุริยะ เผย ค่ายนิสสันเชื่อมั่นประเทศไทยปิดโรงงานรถยนต์ในอินโดนีเซีย มาผลิตที่ไทยแห่งเดียวในภูมิภาคอาเซียน 
                            พร้อมแผนดำเนินการธุรกิจระยะยาว ส่งผลดีต่อการจ้างงานและเศรษกิจของประเทศ 
                            พร้อมเร่งขับเคลื่อนมาตรการสนับสนุนการผลิตรถยนต์ไฟฟ้าผ่านคณะกรรมการนโยบายยานยนต์ไฟฟ้าแห่งชาติเพื่อให้ประเทศไทยบรรลุเป้าหมายเป็นฐานการผลิตรถยนต์ไฟฟ้าสำคัญของโลกต่อไป
                        </h5>
                        <p class="fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                            คอมเพล็กซ์แดนเซอร์ออเดอร์บรรพชน พลานุภาพออเดอร์ บลูเบอร์รีสังโฆ บลูเบอร์รีเกย์ซาบะสเตย์ฟาสต์ฟู้ด ออโต้เทคโนแครตทัวร์พาร์ตเนอร์แผดเผา แล็บ เกจนาฏยศาลาโบกี้สะเด่าภควัทคีตา วอลนัตดีพาร์ทเมนท์แพ็ค โค้กพูล แมชชีนแรงผลัก เซี้ยว ติวโบกี้ทรู เพาเวอร์ โลโก้วีนเทคเรซิ่น ยนตรกรรมฮ่องเต้ไลน์ไทม์ เที่ยงคืนโจ๋
                            คาปูชิโนตรวจสอบเวอร์ทิป วานิลลาเบบี้ ซีดาน ฮ็อตซ้อโปรโมชั่น ภคันทลาพาธแจ็กพ็อตไทม์ งี้สะเด่าพุทโธ เซอร์วิส ดั๊มพ์คันยิฮองเฮา ฟรังก์อึมครึมยนตรกรรมจิตเภท มอลล์โบว์แชมเปี้ยน แฟร์เฝออัตลักษณ์ปิโตรเคมีซิมโฟนี่ อพาร์ทเมนท์เป่ายิ้งฉุบม็อบทาวน์วอล์ค หงวน ออกแบบควิกโรแมนติกวอลนัท สเตริโอคอรัปชั่น เปปเปอร์มินต์ปักขคณนาคอลเล็กชั่น
                        </p>      
                        <p class="fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                        </p>                    
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
                                        <td style="min-width:380px;">
                                            <div class="fw-600 color-04 text-lg">
                                                ประกาศกรมอนามัย ฉบับที่ 27/04.pdf
                                            </div>
                                            <div class="table-desc">
                                                ขนาดไฟล์
                                                <span class="fw-600 color-04">1.31 MB</span>
                                                <span class="sep"></span>
                                                จำนวนดาวน์โหลด
                                                <span class="fw-600 color-04">16 ครั้ง</span>
                                                <span class="sep"></span>
                                                <a class="text-sm" href="#">
                                                    <i class="fas fa-exclamation-triangle color-04 text-2xs"></i> 
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                        <td style="min-width:130px;">
                                            <div class="d-flex ai-center jc-end">
                                                <a class="btn btn-sm btn-round custom-btn-09" href="#">
                                                    ดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-images color-white"></i></div>
                        <h4 class="fw-600">รูปภาพที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="gallery-grids border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<8; $i++){?>
                            <div class="grid md-25">
                                <a class="ss-img bradius-0" href="public/assets/app/images/banner/01.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-text <?php if($i==7)echo 'op-100'; ?>">
                                        <?php if($i<7){?>
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        <?php }else{?>
                                            <p class="color-white text-center">
                                                รูปภาพทั้งหมด <br>
                                                <span class="text-xl fw-600">120</span> 
                                                รูปภาพ
                                            </p>
                                        <?php }?>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="fas fa-code color-white"></i></div>
                        <h4 class="fw-600">Embed</h4>
                    </div>
                    <div class="ss-mp4 mt-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="wrapper">
                            <video controls>
                                <source src="public/assets/app/video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="fas fa-film color-white"></i></div>
                        <h4 class="fw-600">วิดีโอที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="row border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="col-md-4 col-sm-6 mt-4">
                                <div class="ss-video bradius-0">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-container"></div>
                                    <div class="bottom-tag">
                                        <i class="far fa-clock"></i> 10:30
                                    </div>
                                    <div class="play-container">
                                        <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
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
