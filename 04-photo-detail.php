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
            'leading' => 'ค',
            'leading_class' => 'stripe-bottom',
            'title' => 'ลังภาพ',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-05.jpg',
            'show_search' => false,
            'structure' => [
                [ 'name' => 'คลังภาพ', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <?php $categories = ['ภาพกิจกรรม', 'ภาพงาน CSR', 'อินโฟกราฟิก']; ?>
    <section class="section-01">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-01.jpg');"></div>
            <div class="tab-container">

                <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-box-shadow xl"></div>
                    <div class="options">
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
                    <div class="header bg-01 pl-1 pr-0 py-0">
                        <div class="tabs tabs-03">
                            <?php foreach($categories as $i=>$c){?>
                                <a class="tab <?php if($i==0)echo 'active'; ?>" href="#" data-tab="<?= $i ?>">
                                    <span><?= $c ?></span>
                                </a>
                            <?php }?>
                            <a class="btn-setting" href="#">
                                <img src="public/assets/app/images/icon/more.png" alt="Image Icon" />
                            </a>
                        </div>
                    </div>
                    <div class="body bg-white">
                        <div class="post-container">
                            <div class="post-left-container">
                                <div class="ss-date">
                                    <div class="date">23</div>
                                    <div class="month">มี.ค.64</div>
                                </div>
                                <div class="post-stats mt-2">
                                    <div class="post-stat">
                                        <div class="icon">
                                            <img src="public/assets/app/images/icon/book.png" alt="Image Icon" />
                                        </div>
                                        255
                                    </div>
                                    <div class="post-stat">
                                        <div class="icon">
                                            <img src="public/assets/app/images/icon/image.png" alt="Image Icon" />
                                        </div>
                                        20
                                    </div>
                                    <div class="post-stat">
                                        <div class="icon sm">
                                            <img src="public/assets/app/images/icon/share.png" alt="Image Icon" />
                                        </div>
                                        12
                                    </div>
                                </div>
                                <div class="pattern" style="background-image:url('public/assets/app/images/misc/pattern-04.png');"></div>
                            </div>
                            <div class="post-right-container">

                                <div class="post-header">
                                    <div class="title-container">
                                        <h6 class="fw-500 color-09">
                                            ยผ.ต่อยอดเขื่อนป้องกันตลิ่งริมน้ำโขง เนรมิต “ถนนสวรรค์ชายโขง” 
                                            หนุนท่องเที่ยว จ.นครพนม
                                        </h6>
                                        <p class="sm fw-600 mt-1 mb-2">
                                            <span class="font-01">สร้างเมื่อ 20 มีนาคม 2564</span>
                                        </p>
                                    </div>
                                    <div class="option-container pt-1 pb-2">
                                        <a class="option color-black h-color-01" href="#">
                                            <img src="public/assets/app/images/icon/arrow-left-black.png" alt="Image Icon" />
                                            ย้อนกลับ
                                            <em class="fas fa-th color-01"></em>
                                        </a>
                                    </div>
                                </div>

                                <div class="post-content">
                                    <div class="slide-target slide-target-02">
                                        <div class="slide-display clip-path-02">
                                            <div class="slides">
                                                <?php for($j=0; $j<7; $j++){?>
                                                    <div class="slide">
                                                        <div class="wrapper">
                                                            <a class="ss-img no-hover" data-fancybox="gallery"
                                                            href="public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg">
                                                                <img class="d-none" src="public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg" alt="Image Preview" />
                                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <div class="arrows"></div>
                                        </div>
                                        <div class="slide-nav">
                                            <div class="slides">
                                                <?php for($j=0; $j<7; $j++){?>
                                                    <div class="slide">
                                                        <div class="wrapper">
                                                            <div class="ss-img no-hover">
                                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= empty($j)? '01': sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p md fw-600 color-09 mt-4">
                                        <div class="font-01">
                                            กระทรวงมหาดไทย โดยกรมโยธาธิการและผังเมือง จัดสัมมนา เรื่อง "การรับฟังความคิดเห็น 
                                            ประกอบการจัดทำร่างธรรมนูญว่าด้วยการผังเมือง" ที่ จ.ภูเก็ต เพื่อให้ผู้เข้าร่วมสัมมนา มีความรู้ความเข้าใจต่อสาระสำคัญ 
                                            ขั้นตอนการดำเนินการจัดทำร่างธรรมนูญว่าด้วยการผังเมือง และรับฟังความคิดเห็น ข้อเสนอแนะ 
                                            แนวทางการแก้ไขปรับปรุงร่างธรรมนูญว่าด้วย การผังเมืองที่จัดทำขึ้น โดยคณะทำงาน ให้มีประสิทธิภาพมากยิ่งขึ้น
                                        </div>
                                    </div>
                                    <div class="p fw-600 mt-3">
                                        <div class="font-01">
                                            นายพรพจน์ เพ็ญพาส อธิบดีกรมโยธาธิการและผังเมือง เปิดเผยว่า ผังเมืองถือเป็นเครื่องมือสำคัญในการกำหนดทิศทางการพัฒนาเชิงพื้นที่ 
                                            รวมถึงลักษณะการใช้พื้นที่ตามศักยภาพและความเหมาะสม ซึ่งจะช่วยสร้างโอกาสในการพัฒนาเมือง ให้มีการเติบโตที่ยั่งยืน 
                                            และสร้างประโยชน์แก่ทุกคนอย่างทั่วถึง ประกอบกับรัฐบาลได้ให้ความสำคัญกับการจัดระบบเมืองที่มีคุณภาพ ปลอดภัย 
                                            และเป็นมิตรต่อสิ่งแวดล้อมพร้อมกำหนดแนวทางการแก้ไขปัญหาการใช้พื้นที่ให้เกิดความยั่งยืน 
                                            โดยต้องมีการจัดทำนโยบายการตั้งถิ่นฐานและผังเมือง ด้วยการให้มีหน่วยงานระดับชาติกำกับดูแล 
                                            และทำงานควบคู่ไปกับสำนักงานสภาพัฒนาการเศรษฐกิจและสังคมแห่งชาติ รวมถึงให้มีกฎหมายเฉพาะเหมือนเป็นธรรมนูญผังเมือง 
                                            ในการกำกับกฎหมายอื่นๆไม่ให้หน่วยงานต่าง ๆ ละเมิด หรือปล่อยให้มีการพัฒนาเชิงพื้นที่ที่ไม่เป็นไปตามหลักการ
                                        </div>
                                    </div>
                                    <img class="img sm mt-3" src="public/assets/app/images/content/06.jpg" alt="Image Content" />
                                    <div class="p fw-600 mt-3">
                                        <div class="font-01">
                                            นายพรพจน์ เพ็ญพาส อธิบดีกรมโยธาธิการและผังเมือง เปิดเผยว่า ผังเมืองถือเป็นเครื่องมือสำคัญในการกำหนดทิศทางการพัฒนาเชิงพื้นที่ 
                                            รวมถึงลักษณะการใช้พื้นที่ตามศักยภาพและความเหมาะสม ซึ่งจะช่วยสร้างโอกาสในการพัฒนาเมือง ให้มีการเติบโตที่ยั่งยืน 
                                            และสร้างประโยชน์แก่ทุกคนอย่างทั่วถึง ประกอบกับรัฐบาลได้ให้ความสำคัญกับการจัดระบบเมืองที่มีคุณภาพ ปลอดภัย 
                                            และเป็นมิตรต่อสิ่งแวดล้อมพร้อมกำหนดแนวทางการแก้ไขปัญหาการใช้พื้นที่ให้เกิดความยั่งยืน 
                                            โดยต้องมีการจัดทำนโยบายการตั้งถิ่นฐานและผังเมือง ด้วยการให้มีหน่วยงานระดับชาติกำกับดูแล 
                                            และทำงานควบคู่ไปกับสำนักงานสภาพัฒนาการเศรษฐกิจและสังคมแห่งชาติ รวมถึงให้มีกฎหมายเฉพาะเหมือนเป็นธรรมนูญผังเมือง 
                                            ในการกำกับกฎหมายอื่นๆไม่ให้หน่วยงานต่าง ๆ ละเมิด หรือปล่อยให้มีการพัฒนาเชิงพื้นที่ที่ไม่เป็นไปตามหลักการ
                                        </div>
                                    </div>
                                    <div class="border-top border-bottom bcolor-sgray py-3 mt-4">
                                        <div class="ss-tags">
                                            <span class="p md color-08 fw-500 ss-band left">
                                                แท็ก
                                            </span>
                                            <div class="tag">ข่าวประชาสัมพันธ์</div>
                                            <div class="tag">ที่ดิน</div>
                                            <div class="tag">ผังเมือง</div>
                                            <div class="tag">พัฒนาพื้นที่</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="related-contents">
                                    <p class="xs fw-400 color-gray">
                                        ขนาดไฟล์ทั้งหมด 10 MB
                                    </p>
                                    <div class="btns mt-1">
                                        <a class="btn btn-action btn-sm btn-color-05 clip-path-01" href="#">
                                            ดาวน์โหลดภาพทั้งหมด (10)
                                            <em class="fas fa-chevron-down sm ml-1"></em>
                                        </a>
                                    </div>
                                    <div class="btns mt-2">
                                        <a class="btn btn-icon color-black h-color-01" href="#">
                                            <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
                                            แจ้งไฟล์เสีย
                                        </a>
                                    </div>
                                    <p class="h6 sm fw-500 color-08 mt-4">
                                        <span class="ss-band">ข่าวที่เกียวข้อง</span>
                                    </p>
                                    <div class="grids">
                                        <?php for($k=0; $k<2; $k++){ $j = $k%4+1;?>
                                            <div class="grid lg-100">
                                                <div class="ss-card ss-card-01">
                                                    <div class="ss-img">
                                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/<?= sprintf('%02d', $j%4+1) ?>.jpg');"></div>
                                                        <div class="hover-container">
                                                            <div class="btns text-center">
                                                                <a class="btn btn-social btn-color-02 no-bradius" href="#">
                                                                    <em class="fab fa-facebook-f"></em>
                                                                </a>
                                                                <a class="btn btn-social btn-color-02 no-bradius" href="#">
                                                                    <em class="fab fa-instagram"></em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-container bcolor-01 pb-2">
                                                        <a class="title p fw-400 color-03 h-color-01" href="#">
                                                            การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
                                                        </a>
                                                        <p class="xxs fw-600 mt-2">
                                                            <span class="font-01">19 กุมภาพันธ์ 2564</span>
                                                        </p>
                                                        <p class="desc p xs fw-600 color-dark mt-2">
                                                            <span class="font-01">
                                                                การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชนหนองหลวงพัฒนา 
                                                                อำเภอเมืองชัยนาท จังหวัดชัยนาท
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="post-bottom pb-3">

                                    <p class="h6 sm fw-500 color-08 mt-4">
                                        <span class="ss-band left">EMBED</span>
                                    </p>
                                    <div class="shortcode-container mt-2">
                                        <textarea data-copy="0" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                                        <div class="btns">
                                            <a class="btn-code-copy btn btn-action btn-color-01" data-copy="0" href="#">
                                                คัดลอก
                                            </a>
                                        </div>
                                    </div>

                                    <p class="h6 sm fw-500 color-08 mt-4">
                                        <span class="ss-band left">เอกสารที่เกียวข้อง</span>
                                    </p>
                                    <div class="scroll-x-wrapper pt-2 pb-2" data-simplebar>
                                        <table class="table table-download">
                                            <tbody>
                                                <?php
                                                    foreach([
                                                        'pdf', 'doc', 'docx', 'xls', 'xlsx',
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

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="btns text-center bg-10 py-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-action btn-color-05 clip-path-03 mx-1 my-1" href="#">
                        <em class="fas fa-chevron-left sm mr-2"></em>
                        ข่าวก่อนหน้า
                    </a>
                    <a class="btn btn-action btn-color-05 clip-path-01 mx-1 my-1" href="#">
                        ข่าวต่อไป
                        <em class="fas fa-chevron-right sm ml-2"></em>
                    </a>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
