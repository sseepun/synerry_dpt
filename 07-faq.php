<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading bg-fgray">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'คำ',
            'leading_class' => 'stripe-bottom',
            'title' => 'ถามที่พบบ่อย',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-02.jpg',
            'show_search' => true,
            'structure' => [
                [ 'name' => 'คำถามที่พบบ่อย', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <section class="section-01">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-01.jpg');"></div>
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-shadow xl"></div>
                <div class="header bg-01">
                    <h6 class="p lg fw-500 color-03 text-center">
                        คำถามที่พบบ่อย
                    </h6>
                </div>
                <div class="body pb-5">
                    <div class="grids">
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'เมนูหลัก',
                                    'children' => [
                                        'หน้าแรก', 'นโยบายเว็บไซต์', 'ผังเว็บไซต์', 'ค้นหาข้อมูล'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'แนะนำกรมโยธาธิการและผังเมือง',
                                    'children' => [
                                        'ทิศทางองค์กร', 'ภารกิจ 4 ด้าน', 'การแบ่งส่วนราชการกรมโยธาธิการและผังเมือง',
                                        'อำนาจหน้าที่ของกรมและส่วนราชการ', 'โครงสร้างองค์กร',
                                        'ทำเนียบผู้บริหารกรมฯ', 'ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'เผยแพร่ความรู้',
                                    'children' => [
                                        'เผยแพร่ข้อมูลโครงการ', 'มาตรฐานกรมโยธาธิการและผังเมือง', 'e-Document (ข้อมูลเผยแพร่)',
                                        'e-VDO (ไฟล์วิดิโอ)', 'etc. (เกร็ดเล็กเกร็ดน้อย)', 'KM การจัดการความรู้',
                                        'FAQ (ถามบ่อย)', 'ความรู้ด้านโยธาธิการและผังเมือง (Infographic)', 'แบนเนอร์หน่วยงาน'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'หน่วยงานในสังกัดกรม',
                                    'children' => [
                                        'ส่วนกลาง', 'ส่วนภูมิภาค'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                            <?php
                                $d = [
                                    'title' => 'ศูนย์ข้อมูล',
                                    'children' => [
                                        'ศูนย์ประสานงานแก้ไขปัญหา ผักตบชวา', 'ศูนย์ข้อมูลข่าวสารกรมฯ',
                                        'ศูนย์ปฏิบัติการกรมโยธาธิการและผังเมือง', 'การประเมินคุณธรรมและความโปร่งใส'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'Service (การบริการประชาชน)',
                                    'children' => [
                                        'บริการข้อมูลผังเมือง', 'แบบแปลนก่อสร้าง', 'จัดซื้อจัดจ้าง', 'ฐานข้อมูล',
                                        'ประกาศรับสมัครงาน', 'บัญชีรายละเอียดการบรรจุบุคคลเข้ารับราชการ', 
                                        'ประกาศผังเมืองรวม ปิดประกาศ 90, 30', 'และ 15 วัน', 'DPT RSS Feed'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'ข้อมูลข่าวสารประชาสัมพันธ์',
                                    'children' => [
                                        'ข่าวกิจกรรม', 'ข่าวประชาสัมพันธ์', 'ข่าวตัดจากหนังสือพิมพ์', 
                                        'ข่าวกรม', 'วารสารกรมฯ', 'คลังข่าวมหาดไทย' 
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'ติดต่อสอบถาม',
                                    'children' => [
                                        'ปรึกษากฏหมาย', 'ปรึกษาการตรวจสอบโรงมหรสพ', 'ร้องเรียนศูนย์ดำรงธรรม',
                                        'แจ้งเบาะแส', 'รับฟังความคิดเห็น', 'แบบสำรวจความคิดเห็น',
                                        'แบบสอบถามรับฟังคิดเห็น', 'สมุดเยี่ยม', 'Webboard'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="grid md-1-3 mt-0">
                            <?php
                                $d = [
                                    'title' => 'กฏหมาย/แบบฟอร์ม',
                                    'children' => [
                                        'กฏหมายด้านโยธาธิการและผังเมือง', 'แบบฟอร์มเอกสารราชการ'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                            <?php
                                $d = [
                                    'title' => 'สำหรับเจ้าหน้าที่',
                                    'children' => [
                                        'จดหมายอิเล็กทรอนิกส์ Mail.go.th', 'ระบบเครือข่ายภายในกรมฯ (Intranet)'
                                    ]
                                ];
                            ?>
                            <ul class="ss-list lg py-2">
                                <li>
                                    <a class="fw-600 color-03 h-color-01" href="#">
                                        <?= $d['title'] ?>
                                    </a>
                                    <ul>
                                        <?php foreach($d['children'] as $c){?>
                                            <li><a class="fw-600 color-black h-color-01" href="#">
                                                <?= $c ?>
                                            </a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
