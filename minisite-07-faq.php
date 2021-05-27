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
            'leading' => 'คำ',
            'leading_class' => 'stripe-bottom',
            'title' => 'ถามที่พบบ่อย',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-07.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'คำถามที่พบบ่อย', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>

    <section class="section-02">
        <div class="container">
            <?php 
                $sectionOptions = [ 'filter', 'search-box', 'search' ];
                include_once('component/section-options.php');
            ?>
            <div class="faq-02 pt-3" data-aos="fade-up" data-aos-delay="300">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="faq <?php if($i==0)echo 'active'; ?>">
                        <div class="question">
                            <div class="ftag">Q</div>
                            <h6 class="p lg fw-400 d-flex jc-space-between fw-wrap">
                                แนวทางและขั้นตอนในการตรวจสอบอาคาร
                                <div class="p xxs ws-nowrap mt-1">
                                    อ่าน : 128 ครั้ง
                                </div>
                            </h6>
                            <div class="arrow"></div>
                        </div>
                        <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                            <div class="wrapper">
                                <div class="ftag">A</div>
                                <div class="content">
                                    <p class="sm fw-200 lh-nm">
                                        เป็นหน้าที่ที่กระทรวงพลังงานที่จะต้องผลักดันอยู่แล้วเพื่อให้มีเชื้อเพลิงใช้อย่างต่อเนื่องและราคาที่เป็นธรรม 
                                        แต่ขึ้นกับการตัดสินใจของผู้ลงทุนด้วย การลงทุนเชิงพาณิชย์ต้องใช้เงินลงทุนสูงประกอบกับผลผลิตวัตถุดิบยังไม่มากพอคงจะต้องรอเวลาระยะหนึ่งแต่ปัจจุบันก็มีโรงงานขนาดใหญ่เกิดขึ้นแล้วหลายแห่ง 
                                        ขณะเดียวกันเราก็มุ่งเน้นให้ชุมชนช่วยเหลือตัวเองได้ในระดับหนึ่ง
                                    </p>
                                    <div class="scroll-x-wrapper pb-0 mt-2">
                                        <table class="table table-download-02">
                                            <tbody>
                                                <?php
                                                    foreach([
                                                        [ 'name' => 'RAR', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                                        [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                                        [ 'name' => 'XLS', 'icon' => '<em class="far fa-file-excel color-01"></em>' ],
                                                        [ 'name' => 'DOC', 'icon' => '<em class="far fa-file-word color-01"></em>' ],
                                                        [ 'name' => 'ZIP', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                                        [ 'name' => 'PDF', 'icon' => '<em class="far fa-file-pdf color-01"></em>' ]
                                                    ] as $f){
                                                ?>
                                                    <tr>
                                                        <td class="column-icon">
                                                            <div class="icon h5 text-center">
                                                                <?= $f['icon'] ?>
                                                                <p class="xxs fw-600"><?= $f['name'] ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="column-text">
                                                            <p class="md fw-400 color-12">
                                                                การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน 
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
                                                            <a class="btn btn-action btn-xs btn-color-09" href="#">
                                                                ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                                            </a>
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
                <?php }?>
            </div>
            <div class="pt-4" data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'page-info', 'pp'];
                    include('component/minisite-list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('component/section-contact.php'); ?>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
