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
            'leading' => 'แ',
            'leading_class' => 'stripe-bottom',
            'title' => 'ผนผังเว็บไซต์',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-02.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'แผนผังเว็บไซต์', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="sitemap-02 section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="grids">
                <div class="grid lg-1-3 md-50 sm-100 mt-0">

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-home"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                หน้าหลัก
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">เรื่องเด่น</a></li>
                            <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
                            <li><a href="#">ข่าวกิจกรรม</a></li>
                            <li><a href="#">จัดซื้อจัดจ้าง</a>
                                <ul>
                                    <li><a href="#">ประกาศจัดซื้อจัดจ้าง (RSS กรมบัญชีกลาง)</a></li>
                                    <li><a href="#">ประกาศจัดซื้อจัดจ้างกรมโยธาธิการและผังเมือง</a></li>
                                    <li><a href="#">แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ</a></li>
                                    <li><a href="#">สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a></li>
                                    <li><a href="#">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ประกาศข่าวงานผังเมืองรวม</a>
                                <ul>
                                    <li><a href="#">ปิดประกาศ 90 วัน</a></li>
                                    <li><a href="#">ปิดประกาศ 60 วัน</a></li>
                                    <li><a href="#">ปิดประกาศ 15 วัน</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ชวนดูวิดีโอ</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-suitcase"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                หน่วยงานในสังกัดกรม
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ส่วนกลาง</a></li>
                            <li><a href="#">ส่วนภูมิภาค</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-book-reader"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                การบริการประชาชน
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">อยากบอกให้รู้</a></li>
                            <li><a href="#">มาตรฐานกรมโยธาธิการและผังเมือง</a></li>
                            <li><a href="#">บทความวิชาการเกี่ยวกับคำพิพากษาศาลปกครอง</a></li>
                            <li><a href="#">e-Document (ข้อมูลเผยแพร่)</a></li>
                            <li><a href="#">e-VDO (ไฟล์วิดิโอ)</a></li>
                            <li><a href="#">etc. (เกร็ดเล็กเกร็ดน้อย)</a></li>
                            <li><a href="#">KM การจัดการความรู้</a></li>
                            <li><a href="#">FAQ (ถามบ่อย)</a></li>
                            <li><a href="#">Opensource @DPT</a></li>
                            <li><a href="#">จุลสารอาเซียน</a></li>
                            <li><a href="#">ไอทีน่ารู้</a></li>
                            <li><a href="#">เผยแพร่ข้อมูลโครงการ</a></li>
                            <li><a href="#">เผยแพร่ความรู้ด้านโยธาธิการและผังเมือง (Infographic)</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-headset"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                ติดต่อสอบถาม
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ปรึกษาการตรวจสอบโรงมหรสพ</a></li>
                            <li><a href="#">ปรึกษากฏหมาย</a></li>
                            <li><a href="#">ร้องเรียน ศูนย์ดำรงธรรม</a></li>
                            <li><a href="#">แจ้งเบาะแส</a></li>
                            <li><a href="#">รับฟังความคิดเห็น</a></li>
                            <li><a href="#">แบบสำรวจ</a></li>
                            <li><a href="#">แบบสอบถาม</a></li>
                            <li><a href="#">เว็บบอร์ด</a></li>
                        </ul>
                    </div>

                </div>
                <div class="grid lg-1-3 md-50 sm-100 mt-0">

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-id-card"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                แนะนำกรมโยธาธิการและผังเมือง
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ทิศทางองค์กร</a></li>
                            <li><a href="#">ภารกิจ 4 ด้าน</a></li>
                            <li><a href="#">การแบ่งส่วนราชการกรมโยธาธิการและผังเมือง</a></li>
                            <li><a href="#">อำนาจหน้าที่ของกรมและส่วนราชการ</a></li>
                            <li><a href="#">ประวัติความเป็นมาและตราสัญลักษณ์</a></li>
                            <li><a href="#">โครงสร้างองค์กร</a></li>
                            <li><a href="#">ข้อมูลผู้บริหาร</a></li>
                            <li><a href="#">ทำเนียบผู้บริหารกรมฯ</a></li>
                            <li><a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a></li>
                            <li><a href="#">รายงานผล</a>
                                <ul>
                                    <li><a href="#">รายงานประจำปี</a></li>
                                    <li><a href="#">รายงานผลการดำเนินงาน</a></li>
                                    <li><a href="#">รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน</a></li>
                                    <li><a href="#">รายงานการประชุมคณะกรรมการผังเมือง</a></li>
                                    <li><a href="#">รายงานการประชุมคณะกรรมการจัดรูปที่ดิน</a></li>
                                    <li><a href="#">แบบรายงานผลการดำเนินงานของกระทรวงมหาดไทยในการขับเคลื่อนนโยบายรัฐบาล และคณะรักษาความสงบแห่งชาติ รอบ 2 ปี</a></li>
                                    <li><a href="#">รายงานผลการประเมินตนเองเกี่ยวกับความพึงพอใจต่อการบริการแผนงาน</a></li>
                                    <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a></li>
                                    <li><a href="#">รายงานการกำกับติดตามการใช้จ่ายงบประมาณประจำปี รอบ 6 เดือน</a></li>
                                    <li><a href="#">รายงานผลการใช้จ่ายงบประมาณประจำปี</a></li>
                                    <li><a href="#">แผนพัฒนาดิจิทัล พ.ศ.2562-2564 กรมโยธาธิการและผังเมือง</a></li>
                                    <li><a href="#">แผนปฏิบัติราชการประจำปีงบประมาณ 2559</a></li>
                                    <li><a href="#">แผนความต่อเนื่อง (Business Continuity Plan-BCP) กรมโยธาธิการและผังเมือง</a></li>
                                    <li><a href="#">แผนปฏิบัติราชการประจำปีงบประมาณ 2560 ของกระทรวงมหาดไทย</a></li>
                                    <li><a href="#">แผนปฏิบัติการป้องกันและปราบปรามการทุจริตและประพฤติมิชอบ ประจำปีงบประมาณ พ.ศ. 2560</a></li>
                                    <li><a href="#">แผนป้องกันและปราบปรามการทุจริตและประพฤติมิชอบพ.ศ. 2558-2560</a></li>
                                    <li><a href="#">แผนปฏิบัติราชการ 4 ปี</a></li>
                                    <li><a href="#">แผนยุทธศาสตร์กระทรวงมหาดไทย 2560-2564</a></li>
                                    <li><a href="#">แผนการจัดการความรู้ประจำปีงบประมาณ 2559</a></li>
                                    <li><a href="#">การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</a></li>
                                    <li><a href="#">แผนป้องกันการทุจริต</a></li>
                                </ul>
                            </li>
                            <li><a href="#">เจตจำนงสุจริตของผู้บริหาร</a></li>
                            <li><a href="#">การมีส่วนร่วมของผู้บริหาร</a></li>
                            <li><a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a></li>
                            <li><a href="#">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-sitemap"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                หน่วยงานในสังกัด มท.
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">สำนักงานปลัดกระทรวงมหาดไทย</a></li>
                            <li><a href="#">กรมการปกครอง</a></li>
                            <li><a href="#">กรมการพัฒนาชุมชน</a></li>
                            <li><a href="#">กรมที่ดิน</a></li>
                            <li><a href="#">กรมป้องกันและบรรเทาสาธารณภัย</a></li>
                            <li><a href="#">กรมส่งเสริมการปกครองท้องถิ่น</a></li>
                            <li><a href="#">สำนักงานรัฐมนตรี กระทรวงมหาดไทย</a></li>
                            <li><a href="#">กลุ่มตรวจสอบภายในระดับกระทรวงมหาดไทย</a></li>
                        </ul>
                    </div>
                
                </div>
                <div class="grid lg-1-3 md-50 sm-100 mt-0">

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-users"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                การบริการประชาชน
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">แบบแปลนก่อสร้าง</a></li>
                            <li><a href="#">บริการข้อมูลผังเมือง</a></li>
                            <li><a href="#">จัดซื้อจัดจ้าง</a></li>
                            <li><a href="#">ฐานข้อมูล</a></li>
                            <li><a href="#">ประกาศรับสมัครงาน</a></li>
                            <li><a href="#">บัญชีรายละเอียดการบรรจุบุคคลเข้ารับราชการ</a></li>
                            <li><a href="#">E-Learnning</a></li>
                            <li><a href="#">ประกาศข่าวงานผังเมืองรวม</a></li>
                            <li><a href="#">DPT RSS Feed</a></li>
                            <li><a href="#">คู่มือหรือมาตรฐานการปฏิบัติงาน</a></li>
                            <li><a href="#">คู่มือหรือมาตรฐานการให้บริการ</a></li>
                            <li><a href="#">ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบประจำปี</a></li>
                            <li><a href="#">ข้อมูลเชิงสถิติการให้บริการ</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-newspaper"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                ข้อมูลข่าวสารประชาสัมพันธ์
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ข่าวกิจกรรม</a></li>
                            <li><a href="#">ข่าวประชาสัมพันธ์ทั่วไป</a></li>
                            <li><a href="#">ข่าวตัดจากหนังสือพิมพ์</a></li>
                            <li><a href="#">ข่าวกรม</a></li>
                            <li><a href="#">คลังข่าวมหาดไทย</a></li>
                            <li><a href="#">วารสารกรมฯ (e-Journal)</a></li>
                            <li><a href="#">การประเมินคุณธรรมและความโปร่งใสภาครัฐ (ITA)</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-chalkboard-teacher"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                การบริหารและพัฒนาทรัพยากรบุคคล
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">นโยบายการบริหารทรัพยากรบุคคล</a></li>
                            <li><a href="#">การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a></li>
                            <li><a href="#">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a></li>
                            <li><a href="#">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-balance-scale"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                กฏหมาย/แบบฟอร์ม
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">กฏหมายด้านโยธาธิการและผังเมือง</a></li>
                            <li><a href="#">แบบฟอร์มเอกสารราชการ</a></li>
                            <li><a href="#">กฏหมายของกรมโยธาธิการและผังเมืองกับการเข้าสู่ประชาคมอาเซียน</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-file-alt"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                ศูนย์ข้อมูล
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ศูนย์ประสานงานแก้ไขปัญหา ผักตบชวา</a></li>
                            <li><a href="#">ศูนย์ข้อมูลข่าวสารกรมฯ</a></li>
                            <li><a href="#">ศูนย์ปฏิบัติการกรมโยธาธิการและผังเมือง</a></li>
                        </ul>
                    </div>

                    <div class="sitemap">
                        <div class="header">
                            <div class="icon">
                                <em class="fas fa-phone-volume"></em>
                            </div>
                            <h6 class="p md fw-600 color-black">
                                ติดต่อสื่อสาร
                            </h6>
                        </div>
                        <ul>
                            <li><a href="#">ติดต่อกรมโยธาธิการและผังเมือง</a></li>
                            <li><a href="#">แผนที่ตั้งหน่วยงาน</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
