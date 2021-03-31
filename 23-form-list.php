<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ดาวน์โหลดแบบคำขอ' ],
        ];
        $breadcrumbTitle = 'ดาวน์โหลดแบบคำขอ';
        $breadcrumbBg = 'public/assets/app/images/bg/18.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="scroll-x-wrapper" data-simplebar>
                <table class="table table-01 table-xl">
                    <thead>
                        <tr>
                            <th style="min-width:2.75rem;">No.</th>
                            <th style="min-width:4rem;">เอกสาร</th>
                            <th style="min-width:20rem;">แบบคำขอ</th>
                            <th style="min-width:6rem;">ส่งทางอีเมล</th>
                            <th style="min-width:6rem;">
                                ส่งทางอีเมลและ <br> ส่งต้นฉบับทางไปรษณีย์
                            </th>
                            <th style="min-width:6rem;">
                                ส่งต้นฉบับทาง <br> ไปรษณีย์เท่านั้น
                            </th>
                            <th style="min-width:10rem;">หมายเหตุ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0; $i<5; $i++){?>
                            <tr>
                                <td class="header" colspan="7">
                                    <h6 class="h6 fw-600">การศึกษา</h6>
                                </td>
                            </tr>
                            <?php for($j=0; $j<5; $j++){?>
                                <tr>
                                    <td><?= sprintf('%02d', $i*5+$j+1) ?></td>
                                    <td>
                                        <a class="icon-file" href="#">
                                            <img src="public/assets/app/images/icon/file-doc.png" alt="Image Icon" />
                                        </a>
                                        <a class="icon-file" href="#">
                                            <img src="public/assets/app/images/icon/file-pdf.png" alt="Image Icon" />
                                        </a>
                                    </td>
                                    <td class="text-left">
                                        แบบขอหนังสือรับรองการเงินทางการศึกษา
                                    </td>
                                    <td>
                                        <div class="status checked">
                                            <em class="fas fa-check"></em>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status unchecked">
                                            <em class="fas fa-check"></em>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status unchecked">
                                            <em class="fas fa-check"></em>
                                        </div>
                                    </td>
                                    <td class="text-left">
                                        สำหรับนักเรียนระดับมัธยม
                                    </td>
                                </tr>
                            <?php }?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
