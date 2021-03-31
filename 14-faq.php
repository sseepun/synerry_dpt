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
        $breadcrumbBg = 'public/assets/app/images/bg/05.jpg';
        include('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="faq-01" data-aos="fade-up" data-aos-delay="450">
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
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
