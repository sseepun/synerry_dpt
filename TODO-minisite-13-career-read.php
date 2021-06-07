<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 1;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'ส',
            'title' => 'มัครงาน',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-11.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'สมัครงาน', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-post-header">
                        <div class="ss-date">
                            <div class="date">28</div>
                            <div class="month">มี.ค.64</div>
                        </div>
                        <h6 class="fw-500 color-001">
                            รับสมัครคัดเลือกบุคคลเพื่อจ้างเหมาบริการงานด้านธุรการและบันทึกข้อมูล
                            ในงบประมาณรายจ่ายประจำปีงบประมาณ 2564
                            (สำนักควบคุมและตรวจสอบอาคาร)
                        </h6>
                    </div>

                    <div class="mt-3 border-4 bcolor-sgray">
                        <a class="ss-img horizontal no-hover" href="public/assets/app/images/content/06.jpg" data-fancybox="gallery">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/filePDF.jpg');"></div>
                        </a>
                    </div>

                    <div class="h6 sm fw-300 mt-4">
                        <div class="font-03">
                            วันนี้ (18 มีนาคม 2564) เวลา 09.30 น. ท่านอธิบดีมอบหมายให้ นายสุเมธ มีนาภา 
                            ผู้ตรวจราชการกรมโยธาธิการและผังเมือง เป็นประธานในพิธีวางกระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด 
                            ยี่ห้อECOMARINE รุ่น อาร์เทมีส จำนวน 5 ลำ 
                        </div>
                    </div>
                    <div class="p lg fw-400 mt-3">
                        <div class="font-01">
                            โดยมี นายสถิตย์ อินทามระ ผู้ตรวจราชการกรมฯ นายพรพนม บัวชื่น ผู้อำนวยการกองบูรณะและบำรุงรักษา 
                            พร้อมด้วยเจ้าหน้าที่ที่เกี่ยวข้องร่วมพิธีดังกล่าว ซึ่งในวันนี้ได้มีการทดสอบสมรรถนะของเรือด้วย
                            ณ บริเวณอู่ต่อเรือ เอเชียน มารีน เซอร์วิสส์ จังหวัดสมุทรปราการ 
                        </div>
                    </div>
                    <div class="d-flex jc-center mt-4 mb-4">
                        <a class="btn btn-action btn-color-09" href="#">
                            <em class="far fa-edit mr-1"></em> สมัครออนไลน์ 
                        </a>
                    </div>

                    <div class="mt-4">
                        <?php include('component/minisite-post-footer.php'); ?>
                    </div>

                    <div class="mt-4">
                        <p class="h6 sm fw-500 color-dark ss-dash">
                            <span>ไฟล์เอกสารที่เกียวข้อง</span>
                        </p>
                        <div class="scroll-x-wrapper mt-1 pb-0">
                            <table class="table table-download-02">
                                <tbody>
                                    <tr>
                                        <td class="column-icon">
                                            <div class="icon h5 text-center">
                                                <em class="far fa-file-pdf color-01"></em>
                                            </div>
                                        </td>
                                        <td class="column-text">
                                            <p class="md fw-400 color-12">
                                                เรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อECOMARINE รุ่น อาร์เทมีส.pdf 
                                            </p>
                                            <div class="p xxs fw-200 color-gray mt-2">
                                                ขนาดไฟล์ <span class="fw-900 color-12">1.31 MB</span>
                                                <span class="mx-2">|</span>
                                                จำนวนดาวน์โหลด <span class="fw-900 color-12">16 ครั้ง</span>
                                                <span class="mx-2">|</span>
                                                <a class="color-gray h-color-01" href="#">
                                                    <em class="fas fa-clock color-01"></em>
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                        <td class="column-btn">
                                            <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                                ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="column-icon">
                                            <div class="icon h5 text-center">
                                                <em class="far fa-file-pdf color-01"></em>
                                            </div>
                                        </td>
                                        <td class="column-text">
                                            <p class="md fw-400 color-12">
                                                เรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อECOMARINE รุ่น อาร์เทมีส.pdf 
                                            </p>
                                            <div class="p xxs fw-200 color-gray mt-2">
                                                ขนาดไฟล์ <span class="fw-900 color-12">1.31 MB</span>
                                                <span class="mx-2">|</span>
                                                จำนวนดาวน์โหลด <span class="fw-900 color-12">16 ครั้ง</span>
                                                <span class="mx-2">|</span>
                                                <a class="color-gray h-color-01" href="#">
                                                    <em class="fas fa-clock color-01"></em>
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                        <td class="column-btn">
                                            <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                                ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 d-flex jc-center border-bottom-4 bcolor-sgray">
                        <a class="btn btn-action btn-sm btn-xs btn-color-009" href="#">
                            <em class="far fa-caret-square-down mr-1"></em> ดูเพิ่ม
                        </a>
                    </div>
                </div>

                <div class="grid xl-25 lg-30 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <div class="ss-stat">
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-eye"></em>
                            </div>
                            <p class="fw-600 pl-2">17</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-star"></em>
                            </div>
                            <p class="fw-600 pl-2">28</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="fas fa-share-alt"></em>
                            </div>
                            <p class="fw-600 pl-2">231</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="fas fa-user-circle"></em>
                            </div>
                            <p class="fw-600 pl-2">สำนักงานยริหารกลาง</p>
                        </a>
                    </div>


                    <p class="h5 sm fw-300 color-dark ss-dash mt-4 pt-1">
                        <span>สอบถามข้อมูลเพิ่มเติม</span>
                    </p>
                    <div class="p-3 mt-4 bg-mgray">
                        <h6 class="h6 sm fw-500 mb-2 color-09">หัวหน้าฝ่ายทรัพยากรบุคล</h6>
                        <p class="mb-2 fw-500">โทร. 0-2299-4000 </p>
                        <p class="fw-500">อีเมล: webmaster@dpt.mail.go.th</p>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
