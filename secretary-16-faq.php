<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">คำถามที่พบบ่อย</h2>
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
                        <img class="decor" src="public/assets/app/images/hero/08.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'คำถามที่พบบ่อย' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    <div class="list-header">
                        <div class="block">
                            <div class="text-wrapper">
                                <div class="search-container">
                                    <input type="text" name="search" placeholder="ค้นหา" />
                                    <button type="submit">
                                        <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="text-wrapper">
                                <select class="category">
                                    <option value="" disabled selected>แบ่งตามหมวดหมู่</option>
                                    <option value="newest">แบ่งตามหมวดหมู่</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">คำถามที่เพิ่มล่าสุด</h4>
                    </div>
                    <div class="faq-01 mt-4">
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

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
