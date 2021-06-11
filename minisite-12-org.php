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
            'title' => 'แผนผังองค์กร',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-04.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'แผนผังองค์กร', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <?php
        function treeNode($image, $name, $title, $classer=''){
            return '<a class="node '.$classer.' btn-popup-toggle" data-popup="0" href="#">'
                .'<div class="img-container">'
                    .'<div class="ss-img square no-hover">'
                        .'<div class="img-bg" style="background-image:url(\''.$image.'\');"></div>'
                    .'</div>'
                .'</div>'
                .'<div class="text-container">'
                    .'<div class="wrapper">'
                        .'<h6 class="p sm fw-500">'.$name.'</h6>'
                        .'<p class="title xxs fw-400">'.$title.'</p>'
                    .'</div>'
                .'</div>'
            .'</a>';
        }
    ?>
    <section class="section-padding pt-0" data-aos="fade-up" data-aos-delay="300">
        <div class="container">

            <div class="org-02">
                <div class="wrapper">

                    <div class="node-row root">
                        <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                    </div>

                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                    </div>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                    </div>

                    <div class="node-row tag">
                        <div class="node-tag">
                            ผู้ตรวจราชการกรม
                        </div>
                    </div>
                    <?php for($j=0; $j<2; $j++){?>
                        <div class="node-row">
                            <div class="node-col left">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            </div>
                            <div class="node-col right">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            </div>
                        </div>
                    <?php }?>
                    
                    <div class="node-row tag">
                        <div class="node-tag">
                            ราชการบริหารส่วนกลาง
                        </div>
                    </div>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-card') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-card') ?>
                        </div>
                    </div>
                    <?php for($j=0; $j<3; $j++){?>
                        <div class="node-row">
                            <div class="node-col left">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            </div>
                            <div class="node-col right">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            </div>
                        </div>
                    <?php }?>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                        </div>
                    </div>

                    <div class="node-row tag">
                        <div class="node-tag">
                            ราชการบริหารส่วนภูมิภาค
                        </div>
                    </div>
                    <div class="node-row tag no-link pt-2">
                        <div class="node-tag color-brown">
                            สํานักงานโยธาธิการและผังเมืองจังหวัด 76 จังหวัด
                        </div>
                    </div>
                    <div class="ovf-hidden">
                        <div class="gallery-grids" style="--ggs:.5rem;">
                            <?php for($j=0; $j<3; $j++){?>
                                <div class="grid sm-25 xs-25 node-grid">
                                    <div class="title p sm fw-200">
                                        ภาคเหนือ
                                    </div>
                                    <ol>
                                        <li class="stripe-01">1. กําแพงเพชร (นายปรีดี สถิตย์ชัยวัฒนา)</li>
                                        <li>2. เชียงราย (นายณรงค์ น้ําผึ้ง)</li>
                                        <li>3. เชียงใหม่ (นายวิรัช ตั่งมั่นคงวรกุล)</li>
                                        <li>4. ตาก (นายณรงค์เดช ฉิมเล็ก)</li>
                                        <li>5. นครสวรรค์ (น.ส.นิรชา บัณฑิตย์ชาติ)</li>
                                        <li>6. น่าน  (นายนพรัตน์ มะโน)</li>
                                        <li>7. พะเยา (นายถกนธ์ ข่ายสุวรรณ)</li>
                                        <li>8. พิจิตร (นายพีรพล จันทพรรณ)</li>
                                        <li>9. พิษณุโลก (นายนรินทร์ กวางทอง)</li>
                                        <li>10. เพชรบูรณ์ (นายสมศักดิ์ วิริยะธนาวุฒิวงษ์)</li>
                                        <li>11. แพร่ (นายกิติพงษ์ ที่ปรึกษา)</li>
                                        <li class="stripe-01">12. แม่ฮ่องสอน (ว่าง)</li>
                                        <li>13. ลําปาง (นายประทีป ประคองวงศ์)</li>
                                        <li>14. ลําพูน (นายณรงค์ ทาอุปรงค์)</li>
                                        <li>15. สุโขทัย (นายคมกฤษ ศิริยุทธแสนยากร)</li>
                                        <li>16. อุตรดิตถ์ (นายทวนทอง ศิริมงคลวิชย์)</li>
                                        <li>17. อุทัยธานี (นายสุวิทย์ เถื่อนน้อย)</li>
                                    </ol>
                                </div>
                            <?php }?>
                            <div class="grid sm-25 xs-25 mt-0">
                                <div class="gallery-grids" style="--ggs:.5rem;">
                                    <?php for($j=0; $j<2; $j++){?>
                                        <div class="grid sm-100 node-grid">
                                            <div class="title p sm fw-200">
                                                ภาคภาคกลาง (ต่อ)
                                            </div>
                                            <ol>
                                                <li>22. สระบุรี (นางสาวสถาพร ลิ่มพันธ์)</li>
                                                <li>23. สิงห์บุรี (นายวินัย ภูมิพิทักษ์กุล)</li>
                                                <li>24. สุพรรณบุรี (นายมีโชค นัฎสถาพร)</li>
                                                <li>25. อ่างทอง (นายอธิราชกนกเวชยันต์)</li>
                                            </ol>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-grids" style="--ggs:.5rem;">
                            <?php for($j=0; $j<4; $j++){?>
                                <div class="grid sm-25 xs-25 node-grid">
                                    <ol>
                                        <li class="stripe-02">
                                            1. ผชช.ด่านการผังเมือง (สปภ.) <br>
                                            (น.ส.ธิดารัตน์ พินิจถิรวงศ์ (รก.))
                                        </li>
                                        <li class="stripe-02">
                                            2. ผชช.ด่านวางผังสถาปตยกรรม (สผม.) <br>
                                            (นายจารุโรจน์ ภู่ประเสริฐ)
                                        </li>
                                        <li class="stripe-02">
                                            3. ผชช.ด่านวิเคราะห์ผังเมือง (สพม.)
                                            (น.ส.ศศิธร รุนดี)
                                        </li>
                                        <li class="stripe-02">
                                            4. ผชช.ด่านวิเคราะห์และประเมินผล (สพม.)
                                            (นางเอื้อมพร วงศ์สวัสดิ์กุล)
                                        </li>
                                    </ol>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    
    <div class="popup-container simple" data-popup="0">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="0"></div>
            <div class="popup-box">
                <div class="content-container">
                    <div class="grids">
                        <div class="grid md-40 sm-100 mt-0">
                            <img class="img" src="public/assets/app/images/team/01.jpg" alt="Image Profile" />
                        </div>
                        <div class="grid md-60 sm-100 mt-md-0 color-black">
                            <h6 class="h5 sm fw-600 lh-xs color-11">
                                นายพรพจน์ เพ็ญพาส
                            </h6>
                            <div class="p lg fw-300 lh-xs op-90">
                                <span class="font-01">อธิบดีกรมโยธาธิการและผังเมือง</span>    
                            </div>
                            <div class="ss-stat">
                                <div class="stat">
                                    <div class="btn btn-social xs btn-color-09 no-bradius">
                                        <em class="fas fa-phone-volume"></em>
                                    </div>
                                    <p class="xxs fw-500 pl-2 pt-1">
                                        โทรศัพท์ 
                                        <a class="fw-900 color-11 h-color-01" href="#">
                                            0-2201-8000
                                        </a>
                                    </p>
                                </div>
                                <div class="stat">
                                    <div class="btn btn-social xs btn-color-09 no-bradius">
                                        <em class="far fa-envelope"></em>
                                    </div>
                                    <p class="xxs fw-500 pl-2 pt-1">
                                        อีเมล 
                                        <a class="fw-900 color-11 h-color-01" href="#">
                                            webmaster@dpt.mail.go.th
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <p class="md fw-600 lh-xs mt-3">
                                การศึกษา
                            </p>
                            <ul class="ss-list-02 p sm pt-0">
                                <li>พ.ศ. 2525 โรงเรียนสาธิตมหาวิทยาลัยศรีนครินทรวิโรฒ ปทุมวัน</li>
                                <li>พ.ศ. 2530 วิศวกรรมศาสตร์บัณฑิต จุฬาลงกรณ์มหาวิทยาลัย</li>
                                <li>พ.ศ. 2533 วิศวกรรมศาสตร์มหาบัณฑิต Northrop University ประเทศสหรัฐอเมริกา</li>
                                <li>พ.ศ. 2546 รัฐประศาสนศาสตร์บัณฑิต มหาวิทยาลัยสุโขทัยธรรมาธิราช</li>
                            </ul>
                            <p class="md fw-600 lh-xs mt-3">
                                ประสบการณ์
                            </p>
                            <ul class="ss-list-02 p sm pt-0">
                                <li>พ.ศ. 2563 – ปัจจุบัน อธิบดีกรมโยธาธิการและผังเมือง</li>
                                <li>พ.ศ. 2561 – 2563 รองปลัดกระทรวงมหาดไทย</li>
                                <li>พ.ศ. 2560 – 2561 ผู้ว่าราชการจังหวัดสระแก้ว</li>
                                <li>พ.ศ. 2555 – 2560 รองอธิบดีกรมป้องกันและบรรเทาสาธารณภัย</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="btn-close btn-popup-toggle" data-popup="0" href="#">
                    <div class="hamburger active">
                        <div></div><div></div><div></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
