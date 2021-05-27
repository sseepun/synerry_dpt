<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 0;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'ด',
            'leading_class' => 'stripe-bottom pull-right',
            'title' => 'าวน์โหลด',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-06.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ดาวน์โหลด', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="section-02">
        <div class="container">
            <?php 
                $sectionOptions = [ 'filter', 'order', 'rss', 'search' ];
                include_once('component/section-options.php');
            ?>
            <?php foreach([2021, 2020, 2019] as $y){?>
                <div class="border-bottom-3 bcolor-sgray pt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="strip-line">
                        <p class="md fw-400">
                            แผนงานโครงการงบประมาณรายจ่ายประจำปี 2021 
                            <span class="mx-1">|</span> 
                            <span class="p xxs">สร้างเมื่อ 19 กุมภาพันธ์ 2564</span>
                        </p>
                    </div>
                    <div class="scroll-x-wrapper">
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
                                            <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                                ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btns text-center mt-3 mb-4">
                        <a class="btn btn-action btn-color-03" href="#">
                            ดาวน์โหลดทั้งหมด <em class="fas fa-external-link-alt color-01 ml-1"></em>
                        </a>
                    </div>
                </div>
            <?php }?>
            <div class="pt-4" data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'page-info', 'pp'];
                    include('component/minisite-list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
