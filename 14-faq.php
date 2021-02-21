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
            [ 'url' => '#', 'display' => 'การให้บริการ' ],
            [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
        ];
        $breadcrumbTitle = 'คำถามที่พบบ่อย';
        $breadcrumbBg = 'public/assets/app/images/bg/11.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = ['search', 'category'];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="faq-01 mt-3 pt-2" data-aos="fade-up" data-aos-delay="450">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="faq <?php if($i==0)echo 'active'; ?>">
                        <div class="question">
                            <div class="ftag">Q</div>
                            <h6 class="p lg fw-500">
                                ปิโตรเลียมในประเทศไทย มีมากจริงหรือ ?? 
                            </h6>
                            <div class="arrow"></div>
                        </div>
                        <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                            <div class="wrapper">
                                <div class="ftag">A</div>
                                <div class="content">
                                    <p>
                                        เป็นหน้าที่ที่กระทรวงพลังงานที่จะต้องผลักดันอยู่แล้วเพื่อให้มีเชื้อเพลิงใช้อย่างต่อเนื่องและราคาที่เป็นธรรม 
                                        แต่ขึ้นกับการตัดสินใจของผู้ลงทุนด้วย การลงทุนเชิงพาณิชย์ต้องใช้เงินลงทุนสูงประกอบกับผลผลิตวัตถุดิบยังไม่มากพอคงจะต้องรอเวลาระยะหนึ่งแต่ปัจจุบันก็มีโรงงานขนาดใหญ่เกิดขึ้นแล้วหลายแห่ง 
                                        ขณะเดียวกันเราก็มุ่งเน้นให้ชุมชนช่วยเหลือตัวเองได้ในระดับหนึ่ง
                                    </p>
                                    <div class="scroll-x-wrapper mt-3">
                                        <table class="table">
                                            <tbody>
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <tr>
                                                        <td class="va-baseline pr-0">
                                                            <h6 class="color-02">
                                                                <em class="far fa-file-pdf"></em>
                                                            </h6>
                                                        </td>
                                                        <td style="min-width:380px;">
                                                            <p class="md fw-600">
                                                                นโยบายควบคุมราคาก๊าซปิโตรเลียมเหลว (LPG)
                                                            </p>
                                                            <p class="sm fw-200 color-gray mt-1">
                                                                ขนาดไฟล์
                                                                <span class="fw-500 color-black">1.31 MB</span>
                                                                <span class="sep"></span>
                                                                จำนวนดาวน์โหลด
                                                                <span class="fw-500 color-black">16 ครั้ง</span>
                                                                <span class="sep"></span>
                                                                <a class="color-01 h-color-02" href="#">
                                                                    <em class="fas fa-exclamation-circle text-xs mr-05"></em>
                                                                    แจ้งไฟล์เสีย
                                                                </a>
                                                            </p>
                                                        </td>
                                                        <td style="min-width:130px;">
                                                            <div class="d-flex ai-center jc-end">
                                                                <a class="btn btn-action btn-color-03 btn-round btn-sm" href="#">
                                                                    ดาวน์โหลด 
                                                                    <em class="far fa-arrow-alt-circle-down ml-1"></em>
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
                <?php }?>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
