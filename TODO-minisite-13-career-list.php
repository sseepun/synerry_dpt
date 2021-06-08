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
            'show_search' => true,
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'สมัครงาน', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-03.php');
    ?>
    
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="grids">
                <div class="grid xl-25 lg-30 md-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-container">
                        <div class="tabs tabs-04">
                            <div class="bg-filter mask"></div>
                            <a class="tab active" href="#">งานทั้งหมด 1417 อัตรา</a>
                            <a class="tab" href="#">ข้าราชการ<span class="color-11"> (1050)</span></a>
                            <a class="tab" href="#">พนักงานราชการ<span class="color-11"> (84)</span></a>
                            <a class="tab" href="#">ลูกจ้างประจำ<span class="color-11"> (67)</span></a>
                            <a class="tab" href="#">ลูกจ้างชั่วคราว<span class="color-11"> (17)</span></a>
                        </div>
                    </div>
                </div>
                <div class="grid xl-75 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <table class="table table-download-02">
                        <tbody>
                            <?php
                                foreach([
                                    [ 'name' => 'PDF', 'icon' => '<em class="far fa-file-pdf color-01"></em>' ],
                                    [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                    [ 'name' => 'XLS', 'icon' => '<em class="far fa-file-excel color-01"></em>' ],
                                    [ 'name' => 'DOC', 'icon' => '<em class="far fa-file-word color-01"></em>' ],
                                    [ 'name' => 'ZIP', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                    [ 'name' => 'PDF', 'icon' => '<em class="far fa-file-pdf color-01"></em>' ],
                                    [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                    [ 'name' => 'XLS', 'icon' => '<em class="far fa-file-excel color-01"></em>' ],
                                    [ 'name' => 'DOC', 'icon' => '<em class="far fa-file-word color-01"></em>' ],
                                    [ 'name' => 'ZIP', 'icon' => '<em class="far fa-file-archive color-01"></em>' ]
                                ] as $key=>$row){
                            ?>
                                <tr>
                                    <td class="column-icon">
                                        <div class="icon h5 text-center">
                                            <?= $row['icon'] ?>
                                            <p class="xxs fw-600"><?= $row['name'] ?></p>
                                        </div>
                                    </td>
                                    <td class="column-text">
                                        <p class="md fw-400 color-12 title">
                                            <?php if ($key%2==0) {echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                                  else{echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้
                                                  มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวด
                                                  ล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                            ?>
                                        </p>
                                        <div class="p xxs fw-200 color-gray mt-2">
                                            <span class="fw-900 color-12">ประกาศที่ 254/2563 </span>
                                            <span class="mx-2">|</span>
                                            ขนาดไฟล์ <span class="fw-900 color-12">1.31 MB</span>
                                            <span class="mx-2">|</span>
                                            จำนวนดาวน์โหลด <span class="fw-900 color-12">16 ครั้ง</span>

                                        </div>
                                    </td>
                                    <td class="column-button">
                                        <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                            <em class="far fa-edit mr-1"></em>สมัครออนไลน์
                                        </a>
                                        <a class="d-block p xxs fw-200 color-gray h-color-01" href="#" style="margin:auto;">
                                            <em class="fas fa-clock color-01"></em>แจ้งไฟล์เสีย
                                        </a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
