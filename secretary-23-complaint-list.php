<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        $breadcrumbTitle = 'แจ้งเรื่องร้องเรียน';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-18.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <?php
                $listHeader = ['search', 'category', 'order', 'crud'];
                include('component/list-header.php');
            ?>
            <div class="scroll-x-wrapper mt-4">
                <table class="table table-01 cols-4">
                    <thead>
                        <tr>
                            <th style="min-width:2.75rem;">No.</th>
                            <th style="min-width:20rem;">หัวข้อกระทู้</th>
                            <th style="min-width:6rem;">ผู้โพสกระทู้</th>
                            <th style="min-width:6rem;">ผู้ตอบล่าสุด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0; $i<10; $i++){?>
                            <tr>
                                <td><?= sprintf('%02d', $i*2+1) ?></td>
                                <td>ขอสนับสนุน สมุดบันทึกสุขภาพ</td>
                                <td>
                                    <div class="profile-card">
                                        <div class="profile-icon">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                        </div>
                                        <div class="text-container">
                                            <div class="name">อรอุมา ชาญณรงค์</div>
                                            <div class="date">(12/03/2558 15:05:48)</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="profile-card">
                                        <div class="profile-icon">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                        </div>
                                        <div class="text-container">
                                            <div class="name">อรอุมา ชาญณรงค์</div>
                                            <div class="date">(12/03/2558 15:05:48)</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><?= sprintf('%02d', $i*2+2) ?></td>
                                <td>สอบถามตำแหน่งพนักงานราชการเจ้าพนักงานธุรการ</td>
                                <td>
                                    <div class="profile-card">
                                        <div class="profile-icon">
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                        </div>
                                        <div class="text-container">
                                            <div class="name">อรอุมา ชาญณรงค์</div>
                                            <div class="date">(12/03/2558 15:05:48)</div>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <?php
                $listFooter = ['total', 'pagination', 'pp'];
                include('component/list-footer.php');
            ?>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
