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

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'คำถามที่พบบ่อย' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-06 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>
        <div class="container pb-4 position-relative">
            <h3 class="text-center color-white">
                คำถามที่พบบ่อย
            </h3>
        </div>

        <div class="ss-search-container bg-color-white pt-4 pb-1">
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
                                        <h6 class="text">
                                            วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                            กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                        </h6>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-container tab-container-04 vertical my-0">
            <div class="bg-color-white pt-4 pb-3">
                <div class="container">
                    <div class="tabs">
                        <div class="tab active" data-tab="0">
                            <div class="num">01.</div>
                            <p>ข่าวประกาศการจัดซื้อจัดจ้าง</p>
                        </div>
                        <div class="tab" data-tab="1">
                            <div class="num">02.</div>
                            <p>TOR</p>
                        </div>
                        <div class="tab" data-tab="2">
                            <div class="num">03.</div>
                            <p>ราคากลาง</p>
                        </div>
                        <div class="tab" data-tab="3">
                            <div class="num">04.</div>
                            <p>ผลการจัดซื้อจัดจ้าง</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-contents">
                    <?php for($k=0; $k<4; $k++){?>
                        <div class="tab-content <?php if($k==0)echo 'active'; ?>" data-tab="<?= $k ?>">
                            <div class="faq-01 faq-01-custom mt-4">
                                <img class="hero" src="public/assets/app/images/hero/16.jpg" alt="Faq Hero" />
                                <div class="faqs">
                                    <?php for($i=0; $i<10; $i++){?>
                                        <div class="faq">
                                            <div class="question">
                                                <div class="ftag">Q</div>
                                                <h6>
                                                    นโยบายต่อการบริหารราชการแผ่นดินที่มีธรรมาภิบาล? 
                                                </h6>
                                            </div>
                                            <div class="wrapper">
                                                <div class="answer">
                                                    <div class="ftag">A</div>
                                                    <div class="content">
                                                        <p>
                                                            กระทรวงอุตสาหกรรมให้ความสำคัญโดยได้เน้นย้ำให้ข้าราชการทุกระดับชั้น 
                                                            ในทุกหน่วยราชการรัฐวิสาหกิจ และสถาบันเครือข่ายในสังกัด 
                                                            ยึดถือเป็นแนวทางในการปฏิบัติอย่างเคร่งครัด ในทุกขั้นตอน ต้องมีความโปร่งใส ตรวจสอบได้ 
                                                            ไม่มีการทุจริต และประพฤติมิชอบ เพื่อให้ผู้ประกอบการมีความเชื่อมั่น วางใจในระบบราชการ 
                                                            ทั้งนี้ได้ ขอความร่วมมือจากภาคเอกชนในการสนับสนุนนโยบาย ดังกล่าวให้เกิดผล 
                                                            อย่างจริงจังด้วย โดยหากพบเห็นการกระทำ ที่ส่อไปในทางทุจริตในประเด็นที่เกี่ยวข้องกับกระทรวง 
                                                            อุตสาหกรรม ก็สามารถ ร้องเรียนผ่านช่องทางรับแจ้งเรื่องร้องเรียนได้โดยตรงทางเว็บไซต์ของกระทรวง
                                                        </p>
                                                        <h6 class="color-04 mt-4 mb-0">ไฟล์แนบ:</h6>
                                                        <div class="table-wrapper pt-0 pb-0">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="min-width:220px;">
                                                                            ประกาศกรมอนามัย ฉบับที่ 27/04.pdf
                                                                        </td>
                                                                        <td class="text-right" style="min-width:110px;">
                                                                            <div class="d-flex jc-end">
                                                                                <a class="color-04 btn-text-image" href="#">
                                                                                    ดาวน์โหลด
                                                                                    <img class="img-icon ml-2" src="public/assets/app/images/icon/download-02.png" alt="Download Icon" />
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="min-width:220px;">
                                                                            วารสารอุตสาหกรรม - ฉบับที่ 12 เดือนกรกฎาคม - สิงหาคม 2561.pdf
                                                                        </td>
                                                                        <td class="text-right" style="min-width:110px;">
                                                                            <div class="d-flex jc-end">
                                                                                <a class="color-04 btn-text-image" href="#">
                                                                                    ดาวน์โหลด
                                                                                    <img class="img-icon ml-2" src="public/assets/app/images/icon/download-02.png" alt="Download Icon" />
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-padding section-bg lazy-bg" data-aos="fade-up" data-aos-delay="0" 
    data-src="public/assets/app/images/bg/61.jpg">
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label class="color-white">
                            เรื่องที่ติดต่อ <span class="color-07">*</span>
                        </label>
                        <div class="select-wrapper">
                            <select class="form-control no-bradius" required>
                                <option value="">ร้องเรียนการทำงาน</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label class="color-white">
                            กรอกรายละเอียดการติดต่อ <span class="color-07">*</span>
                        </label>
                        <textarea rows="4" class="form-control no-bradius" required></textarea>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="color-white">
                            โทรศัพท์ <span class="color-07">*</span>
                        </label>
                        <input type="text" class="form-control no-bradius" required />
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="color-white">
                            อีเมล์ <span class="color-07">*</span>
                        </label>
                        <input type="email" class="form-control no-bradius" required />
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="color-white">
                            ชื่อ-นามสกุล <span class="color-07">*</span>
                        </label>
                        <input type="text" class="form-control no-bradius" required />
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="color-white">
                            ยื่นยันผู้ใช้งาน
                        </label>
                        <div class="captcha-container">
                            <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                        </div>
                    </div>
                </div>
                <div class="btns text-center mt-4">
                    <button type="submit" class="btn btn-2xl custom-btn-09 mx-1 no-bradius">
                        ส่งข้อมูล
                    </button>
                    <a class="btn btn-2xl custom-btn-11 btn-form-clear mx-1 no-bradius" href="#">
                        ล้างข้อมูล
                    </a>
                </div>
            </form>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
