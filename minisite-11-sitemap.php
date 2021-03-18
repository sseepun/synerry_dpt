<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'แผนผังเว็บไซต์' ],
        ];
        $breadcrumbTitle = 'แผนผังเว็บไซต์';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid eq-padding position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="sitemap-02 pb-4">
                        <div class="grids sitemap-02">
                            <div class="grid lg-1-3 md-50 sm-100 mt-0">

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            หน้าหลัก
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">อัพเดทข่าวพลังงาน</a></li>
                                        <li><a href="#">สถิติพลังงาน</a></li>
                                        <li><a href="#">ข่าวสารพลังงานจังหวัด</a></li>
                                        <li><a href="#">ข่าวประกาศ</a></li>
                                        <li><a href="#">สื่อมัลติมีเดีย</a></li>
                                        <li><a href="#">หน่วยงานที่เกี่ยวข้อง</a></li>
                                    </ul>
                                </div>

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            เกี่ยวกับกระทรวง
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">ประวัติกระทรวงพลังงาน</a></li>
                                        <li><a href="#">วิสัยทัศน์ พันธกิจ และตราสัญลักษณ์</a></li>
                                        <li><a href="#">ผู้บริหารระดับสูง</a></li>
                                        <li><a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง (CIO)</a></li>
                                        <li><a href="#">โครงสร้างส่วนราชการ</a></li>
                                        <li><a href="#">อำนาจหน้าที่</a></li>
                                        <li><a href="#">เจตจำนงสุจริตของผู้บริหาร</a></li>
                                        <li><a href="#">การมีส่วนร่วมของผู้บริหาร</a></li>
                                        <li><a href="#">แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></li>
                                        <li><a href="#">กฎหมาย/พรบ.ด้านพลังงาน</a></li>
                                        <li><a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a></li>
                                        <li><a href="#">สำนักงานพลังงานจังหวัด</a></li>
                                        <li><a href="#">ข้อมูลพลังงาน</a></li>
                                        <li><a href="#">นโยบายพลังงาน</a>
                                            <ul>
                                                <li><a href="#">นโยบายด้านพลังงานของรัฐบาล</a></li>
                                                <li><a href="#">คำแถลงนโยบายของคณะรัฐมนตรี</a></li>
                                                <li><a href="#">ยุทธศาสตร์ด้านพลังงาน</a></li>
                                                <li><a href="#">มติคณะ กพช./กบง.</a></li>
                                                <li><a href="#">แผนการบริหารราชการแผ่นดิน</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="grid lg-1-3 md-50 sm-100 mt-0">

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            แผน/ผลการดำเนินงาน
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">แผนการดำเนินงาน</a></li>
                                        <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a>
                                            <ul>
                                                <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a></li>
                                                <li><a href="#">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ 6 เดือน</a></li>
                                                <li><a href="#">รายงานผลการใช้จ่ายงบประมาณประจำปี</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ข้อมูลรายงาน</a></li>
                                        <li><a href="#">รายงานประจำปี</a>
                                            <ul>
                                                <li><a href="#">รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน</a></li>
                                                <li><a href="#">รายงานผลการดำเนินงานของกระทรวง</a></li>
                                                <li><a href="#">รายงานการเงินสำนักงานปลัดกระทรวงพลังงาน</a></li>
                                                <li><a href="#">รายงานต้นทุนต่อหน่วยผลผลิต</a></li>
                                                <li><a href="#">รายงานงบทดลอง</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">การป้องกันการทุจริต</a>
                                            <ul>
                                                <li><a href="#">แผนปฏิบัติการป้องกันการทุจริต</a></li>
                                                <li><a href="#">รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต รอบ 6 เดือน</a></li>
                                                <li><a href="#">รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</a></li>
                                                <li><a href="#">การประเมินความเสี่ยงการทุจริตประจำปี</a></li>
                                                <li><a href="#">การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</a></li>
                                                <li><a href="#">มาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></li>
                                                <li><a href="#">การดำเนินการตามมาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            ติดต่อเรา
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">ติดต่อเรา</a></li>
                                        <li><a href="#">แผนผังเว็บไซต์</a></li>
                                    </ul>
                                </div>
                            
                            </div>
                            <div class="grid lg-1-3 md-50 sm-100 mt-0">

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            การให้บริการ
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">คู่มือหรือมาตรฐานการปฏิบัติงาน</a></li>
                                        <li><a href="#">คู่มือหรือมาตรฐานการให้บริการ</a></li>
                                        <li><a href="#">ข้อมูลเชิงสถิติการให้บริการ</a></li>
                                        <li><a href="#">รายงานผลการสำรวจความพึงพอใจการให้บริการ</a></li>
                                        <li><a href="#">E-Service</a></li>
                                        <li><a href="#">การมีส่วนร่วมของประชาชน</a></li>
                                        <li><a href="#">Q&A</a></li>
                                        <li><a href="#">การแจ้งเรื่องร้องเรียน</a>
                                            <ul>
                                                <li><a href="#">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></li>
                                                <li><a href="#">ช่องทางแจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></li>
                                                <li><a href="#">ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบประจำปี</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sitemap mt-4">
                                    <div class="header ss-border py-1">
                                        <h6 class="h5 fw-500 color-01">
                                            ข่าว/ประกาศ
                                        </h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
                                        <li><a href="#">กิจกรรมพลังงานจังหวัด</a></li>
                                        <li><a href="#">ข่าวสารรัฐมนตรี</a></li>
                                        <li><a href="#">ข่าวสารผู้บริหาร</a></li>
                                        <li><a href="#">เรื่องเด่นประเด็นดัง</a></li>
                                        <li><a href="#">ข่าวจัดซื้อจัดจ้าง</a>
                                            <ul>
                                                <li><a href="#">แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ</a></li>
                                                <li><a href="#">ประกาศจัดซื้อจัดจ้าง สป.พน.</a></li>
                                                <li><a href="#">ประกาศจัดซื้อจัดจ้างพลังงานจังหวัด</a></li>
                                                <li><a href="#">สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a></li>
                                                <li><a href="#">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ประกาศรับสมัครงาน</a>
                                            <ul>
                                                <li><a href="#">รับสมัครงาน</a></li>
                                                <li><a href="#">นโยบายการบริหารทรัพยากรบุคคล</a></li>
                                                <li><a href="#">การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a></li>
                                                <li><a href="#">หลักเกณฑ์การบริหารและการพัฒนาทรัพยากรบุคคล</a></li>
                                                <li><a href="#">รายงานผลการบริหารและการพัฒนาทรัพยากรบุคคลประจำปี</a></li>
                                            </ul>
                                        </li>

                                    </ul>
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
