<!DOCTYPE html>
<html lang="th">
<style>
.content a:hover{
color:#FFB739;
}
</style>
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>

<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'วิสัยทัศน์และพันธกิจ' ],
        ];
        $breadcrumbTitle = 'วิสัยทัศน์และพันธกิจ';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>
    <section class="section-minisite section-padding pt-0"
        style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </a>
                                    <a class="tab" href="#">เกี่ยวกับหน่วยงาน</a>
                                    <a class="tab active" href="#">วิสัยทัศน์และพันธกิจ</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <h6 class="h5 fw-500 color-01">สารบัญ</h6>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">1</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    ข้อมูลพื้นฐาน
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">01 - โครงสร้าง</a></p>
                                                <p><a href="#">02 - ข้อมูลผู้บริหาร</a></p>
                                                <p><a href="#">03 - อำนาจหน้าที่</a></p>
                                                <p><a href="#">04 - แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></p>
                                                <p><a href="#">05 - ข้อมูลการติดต่อ</a></p>
                                                <p><a href="#">06 - กฎหมายที่เกี่ยวข้อง</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">2</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การประชาสัมพันธ์
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">07 - ข่าวประชาสัมพันธ์</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">3</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                การปฏิสัมพันธ์ข้อมูล
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">08 - Q&A</a></p>
                                                <p><a href="#">09 - Social Network</a>
                                                <ul>
                                                    <li>
                                                    <a href="#">Facebook</a>
                                                    </li>
                                                    <li>
                                                    <a href="#">Twitter</a>
                                                    </li>
                                                </ul>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">4</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การดำเนินงาน
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">010 - แผนดำเนินงานประจำปี</a></p>
                                                <p><a href="#">011 - รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน</a></p>
                                                <p><a href="#">012 - รายงานผลการดำเนินงานประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">5</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การปฏิบัติงาน
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O13 - คู่มือหรือมาตรฐานการปฏิบัติงาน</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">6</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การให้บริการ
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O14 - คู่มือหรือมาตรฐานการให้บริการ</a></p>
                                                <p><a href="#">O15 - ข้อมูลเชิงสถิติการให้บริการ</a></p>
                                                <p><a href="#">O16 - รายงานผลการสำรวจความพึงพอใจการให้บริการ</a></p>
                                                <p><a href="#">O17 - E-Service</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">7</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    แผนการใช้จ่ายงบประมาณประจำปี
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O18 - แผนการใช้จ่ายงบประมาณประจำปี</a></p>
                                                <p><a href="#">O19 - รายงานการกำกับติดตามการใช้จ่ายงบประมาณรอบ 6 เดือน</a></p>
                                                <p><a href="#">O20 - รายงานผลการใช้จ่ายงบประมาณประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">8</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การจัดซื้อจัดจ้างหรือการจัดหาพัสดุ
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O21 - แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ</a></p>
                                                <p><a href="#">O22 - ประกาศต่าง ๆ เกี่ยวกับการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</a></p>
                                                <p><a href="#">O23 - สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a></p>
                                                <p><a href="#">O24 - รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">9</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การบริหารและพัฒนาทรัพยากรบุคคล
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O25 - นโยบายการบริหารทรัพยากรบุคคล</a></p>
                                                <p><a href="#">O26 - การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a></p>
                                                <p><a href="#">O27 - หลักเกณฑ์การบริหารและการพัฒนาทรัพยากรบุคคล</a></p>
                                                <p><a href="#">O28 - รายงานผลการบริหารและการพัฒนาทรัพยากรบุคคลประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">10</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การบริหารและพัฒนาทรัพยากรบุคคล
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O29 - แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></p>
                                                <p><a href="#">O30 - ช่องทางแจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></p>
                                                <p><a href="#">O31 - ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">11</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    การเปิดโอกาสให้เกิดการมีส่วนร่วม
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O32 - ช่องทางการรับฟังความคิดเห็น</a></p>
                                                <p><a href="#">O33 - การเปิดโอกาสให้เกิดการมีส่วนร่วม</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">12</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                เจตจำนงสุจริตของผู้บริหาร
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O34 - เจตจำนงสุจริตของผู้บริหาร</a></p>
                                                <p><a href="#">O35 - การมีส่วนร่วมของผู้บริหาร</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">13</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                การประเมินความเสี่ยงเพื่อปกป้องการทุจริต
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O36 - การประเมินความเสี่ยงการทุจริตประจำปี</a></p>
                                                <p><a href="#">O37 - การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">14</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                การเสริมสร้างวัฒนธรรมองค์กร
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O38 - การเสริมสร้างวัฒนธรรมองค์กร</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">15</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                แผนป้องกันการทุจริต
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O39 - แผนปฏิบัติการป้องกันการทุจริต</a></p>
                                                <p><a href="#">O40 - รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต รอบ 6 เดือน</a></p>
                                                <p><a href="#">O41 - รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="faq-02 mt-2">
                                    <div class="faq">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="h4 fw-500 lh-xs">16</p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน
                                                </h6>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" style="display:none;">
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs"></p>
                                                </div>
                                                <div class="content">
                                                <p><a href="#">O42 - มาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></p>
                                                <p><a href="#">O43 - การดำเนินการตามมาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>

</html>