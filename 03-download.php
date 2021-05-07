<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'ด',
            'leading_class' => 'stripe-bottom pull-right',
            'title' => 'าวน์โหลด',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-05.jpg',
            'show_search' => false,
            'structure' => [
                [ 'name' => 'ดาวน์โหลด', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <?php $categories = ['ภาพกิจกรรม', 'ภาพงาน CSR', 'อินโฟกราฟิก']; ?>
    <section class="section-01 xl-bottom">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-07.jpg');"></div>

            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-shadow xl"></div>
                <div class="options">
                    <div class="option option-select">
                        <div class="select-wrapper">
                            <select class="fw-300">
                                <option value="">เลือกหมวดหมู่</option>
                            </select>
                        </div>
                    </div>
                    <div class="option option-select">
                        <div class="select-wrapper">
                            <select class="fw-300">
                                <option value="">ใหม่ล่าสุด</option>
                            </select>
                        </div>
                    </div>
                    <a class="option" href="#">
                        <p class="fw-200 px-3">แชร์</p>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-facebook-f"></em>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-twitter"></em>
                    </a>
                    <a class="option" href="#">
                        <em class="fab fa-line"></em>
                    </a>
                    <a class="option option-search" href="#">
                        <em class="fas fa-search"></em>
                    </a>
                </div>
                <div class="header bg-01 text-center">
                    <h6 class="p lg fw-500 color-03">
                        เกณฑ์การตรวจสอบความถูกต้องของการจัดทำข้อมูลกายภาพเพื่อการวางผังเมือง
                    </h6>
                    <p class="sm fw-600">
                        <span class="font-01">สร้างเมื่อ 20 มีนาคม 2564</span>
                    </p>
                </div>
                <div class="body">
                    <div class="scroll-x-wrapper pt-2 pb-2" data-simplebar>
                        <table class="table table-download">
                            <tbody>
                                <?php
                                    foreach([
                                        'pdf', 'doc', 'docx', 'xls', 'xlsx',
                                    ] as $k){
                                ?>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <div class="download-card text-center">
                                                <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                                                <p class="md fw-400 color-white">
                                                    <?= strtoupper($k) ?>
                                                </p>
                                                <p class="xxxs fw-400 color-01">
                                                    (155 Kb.)
                                                </p>
                                            </div>
                                        </td>
                                        <td style="min-width:320px;">
                                            <p class="fw-600">
                                                <span class="font-01">
                                                    กฎหมายด้านโยธาธิการและผังเมือง
                                                </span>
                                            </p>
                                        </td>
                                        <td style="min-width:250px;">
                                            <div class="d-flex ai-center jc-end fw-wrap">
                                                <a class="btn btn-action btn-color-01 btn-xs" href="#">
                                                    ดาวนโหลด (10)
                                                </a>
                                                <a class="btn btn-icon color-black h-color-01 ml-2" href="#">
                                                    <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btns text-center mt-2">
                        <a class="btn btn-action btn-color-05 clip-path-01" href="#">
                            ดาวน์โหลดทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="0">
                <div class="ss-box-shadow xl"></div>
                <div class="header color-white bg-black text-center">
                    <h6 class="p lg fw-300">
                        มาตรฐานการทดสอบความสามารถในการรับน้ำหนักบรรทุกของพื้นดินกรมโยธาธิการและผังเมือง กระทรวงมหาดไทย
                    </h6>
                    <p class="sm fw-600">
                        <span class="font-01">สร้างเมื่อ 20 มีนาคม 2564</span>
                    </p>
                </div>
                <div class="body">
                    <div class="scroll-x-wrapper pt-2 pb-2" data-simplebar>
                        <table class="table table-download">
                            <tbody>
                                <?php
                                    foreach([
                                        'ppt', 'pptx', 'zip', 'rar'
                                    ] as $k){
                                ?>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <div class="download-card text-center">
                                                <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                                                <p class="md fw-400 color-white">
                                                    <?= strtoupper($k) ?>
                                                </p>
                                                <p class="xxxs fw-400 color-01">
                                                    (155 Kb.)
                                                </p>
                                            </div>
                                        </td>
                                        <td style="min-width:320px;">
                                            <p class="fw-600">
                                                <span class="font-01">
                                                    กฎหมายด้านโยธาธิการและผังเมือง
                                                </span>
                                            </p>
                                        </td>
                                        <td style="min-width:250px;">
                                            <div class="d-flex ai-center jc-end fw-wrap">
                                                <a class="btn btn-action btn-color-01 btn-xs" href="#">
                                                    ดาวนโหลด (10)
                                                </a>
                                                <a class="btn btn-icon color-black h-color-01 ml-2" href="#">
                                                    <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btns text-center mt-2">
                        <a class="btn btn-action btn-color-05 clip-path-01" href="#">
                            ดาวน์โหลดทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="0">
                <div class="ss-box-shadow xl"></div>
                <div class="header bg-01 text-center">
                    <h6 class="p lg fw-500 color-03">
                        เกณฑ์การตรวจสอบความถูกต้องของการจัดทำข้อมูลกายภาพเพื่อการวางผังเมือง
                    </h6>
                    <p class="sm fw-600">
                        <span class="font-01">สร้างเมื่อ 20 มีนาคม 2564</span>
                    </p>
                </div>
                <div class="body">
                    <div class="scroll-x-wrapper pt-2 pb-2" data-simplebar>
                        <table class="table table-download">
                            <tbody>
                                <?php
                                    foreach([
                                        'pdf', 'doc', 'docx', 'xls', 'xlsx',
                                    ] as $k){
                                ?>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <div class="download-card text-center">
                                                <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                                                <p class="md fw-400 color-white">
                                                    <?= strtoupper($k) ?>
                                                </p>
                                                <p class="xxxs fw-400 color-01">
                                                    (155 Kb.)
                                                </p>
                                            </div>
                                        </td>
                                        <td style="min-width:320px;">
                                            <p class="fw-600">
                                                <span class="font-01">
                                                    กฎหมายด้านโยธาธิการและผังเมือง
                                                </span>
                                            </p>
                                        </td>
                                        <td style="min-width:250px;">
                                            <div class="d-flex ai-center jc-end fw-wrap">
                                                <a class="btn btn-action btn-color-01 btn-xs" href="#">
                                                    ดาวนโหลด (10)
                                                </a>
                                                <a class="btn btn-icon color-black h-color-01 ml-2" href="#">
                                                    <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btns text-center mt-2">
                        <a class="btn btn-action btn-color-05 clip-path-01" href="#">
                            ดาวน์โหลดทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="0">
                <div class="ss-box-shadow xl"></div>
                <div class="header color-white bg-black text-center">
                    <h6 class="p lg fw-300">
                        มาตรฐานการทดสอบความสามารถในการรับน้ำหนักบรรทุกของพื้นดินกรมโยธาธิการและผังเมือง กระทรวงมหาดไทย
                    </h6>
                    <p class="sm fw-600">
                        <span class="font-01">สร้างเมื่อ 20 มีนาคม 2564</span>
                    </p>
                </div>
                <div class="body">
                    <div class="scroll-x-wrapper pt-2 pb-2" data-simplebar>
                        <table class="table table-download">
                            <tbody>
                                <?php
                                    foreach([
                                        'ppt', 'pptx', 'zip', 'rar'
                                    ] as $k){
                                ?>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <div class="download-card text-center">
                                                <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                                                <p class="md fw-400 color-white">
                                                    <?= strtoupper($k) ?>
                                                </p>
                                                <p class="xxxs fw-400 color-01">
                                                    (155 Kb.)
                                                </p>
                                            </div>
                                        </td>
                                        <td style="min-width:320px;">
                                            <p class="fw-600">
                                                <span class="font-01">
                                                    กฎหมายด้านโยธาธิการและผังเมือง
                                                </span>
                                            </p>
                                        </td>
                                        <td style="min-width:250px;">
                                            <div class="d-flex ai-center jc-end fw-wrap">
                                                <a class="btn btn-action btn-color-01 btn-xs" href="#">
                                                    ดาวนโหลด (10)
                                                </a>
                                                <a class="btn btn-icon color-black h-color-01 ml-2" href="#">
                                                    <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btns text-center mt-2">
                        <a class="btn btn-action btn-color-05 clip-path-01" href="#">
                            ดาวน์โหลดทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="pt-2 mt-5 border-top bcolor-sgray">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
