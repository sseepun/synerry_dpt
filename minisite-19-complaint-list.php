<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        /* Color pallette for table */
        /* Light brown: #8b6e70 */
        /* Dark brown:  #6f5254 */
        .status-dot {
            width: .5rem; height:.5rem; border-radius:50%;
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        $breadcrumbTitle = 'แจ้งเรื่องร้องเรียน';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0">
        <div class="container">
        <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">แจ้งเรื่องร้องเรียน</a>
                                    <a class="tab" href="#">ติดต่อหน่วยงาน</a>
                                    <a class="tab" href="#">คำถามที่พบบ่อย (FAQ)</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">

                            <div class="d-flex fw-wrap jc-space-between">
                                <h6 class="h4 fw-300 color-01">
                                    เรื่องร้องเรียน
                                </h6>
                                <button class="btn btn-action btn-color-01 btn-round">
                                    แจ้งเรื่อง <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </button>
                            </div>


                            <div class="scroll-x-wrapper mt-4">
                                <table class="table table-01 cols-4">
                                    <thead>
                                        <tr>
                                            <th style="min-width:2.75rem;">หมายเลข</th>
                                            <th style="min-width:20rem;">หัวข้อเรื่อง</th>
                                            <th style="min-width:6rem;">สถานะ</th>
                                            <th style="min-width:6rem;">อัพเดท</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0; $i<10; $i++){?>
                                            <tr>
                                                <td><?= sprintf('%2d', 219-$i*2+1) ?></td>
                                                <td>ขอสนับสนุน สมุดบันทึกสุขภาพ</td>
                                                <td>
                                                    <div class="d-flex ai-center jc-center">
                                                        <div class="status-dot bg-<?= sprintf('%02d', $i+1); ?> mr-2"></div> รอดำเนินการ
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= sprintf('%2d', 19-$i*2+1); ?> มกราคม 2564
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= sprintf('%2d', 217-$i*2+2) ?></td>
                                                <td>สอบถามตำแหน่งพนักงานราชการเจ้าพนักงานธุรการ</td>
                                                <td>
                                                    <div class="d-flex ai-center jc-center">
                                                        <div class="status-dot bg-<?= sprintf('%02d', ($i+3) % 10); ?> mr-2"></div> รอดำเนินการ
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= sprintf('%2d', 18-$i*2+1); ?> มกราคม 2564
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>

                            <?php
                                $listFooter = ['pagination', 'pp'];
                                include('component/list-footer-minisite.php');
                            ?>

                            <div class="mt-4">
                                <h6 class="p fw-600">เงื่อนไขการร้องทุกข์ออนไลน์</h6>
                                <p class="sm">ผู้ร้องเรียนกรุณาอ่านและปฏิบัติตามข้อตกลงด้านล่างนี้โดยละเอียด เพื่อรักษาสิทธิประโยชน์ในการร้องเรียนของท่าน</p>
                                <ol class="mt-3" style="padding-left:14.28px;">
                                    <?php for($i=0; $i<5; $i++){?>
                                        <li class="p sm">ศิลปากรนู้ด วีนเซ่นไหว้บ๊อบ แจ็กเก็ตรีไทร์ แจ๊ส คาปูชิโนคาร์โฮสเตสเจี๊ยว วิลเลจสโรชาไฮแจ็คเฟรช นอมินีวาทกรรมดาวน์ ช็อปเปอร์วิดีโอเวสต์วิว ซูเปอร์สปายปูอัดอึ๋ม สเตชันฮ็อตกาญจน์สกรัม พุดดิ้งช็อปปิ้งระโงกซันตาคลอส พรีเมียร์น็อก แครกเกอร์ มอคคาราสเบอร์รี เบลอแต๋วเตี๊ยมเลิฟวาไรตี้ แรงใจเบลอ</li>
                                    <?php }?>
                                </ol>
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
