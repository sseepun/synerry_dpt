<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'พันธกิจ'],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/41.jpg">
        <div class="filter"></div>
        <div class="container">
            <div class="text-container" data-aos="fade-up" data-aos-delay="0">
                <h1 class="text-center">พันธกิจ</h1>
                <p class="text-center">
                    1. สร้างมูลค่าเพิ่มทางเศรษฐกิจ การค้า การลงทุน การท่องเที่ยว การเกษตร และอุตสาหกรรมแปรรูป 
                    เพื่อสร้างรายได้ให้ประชาชนในพื้นที่ โดยสนับสนุนปัจจัยพื้นฐานการผลิตได้แก่ การพัฒนาโครงสร้างพื้นฐาน 
                    การบริหารจัดการแหล่งน้ำเพื่อการเกษตร การพัฒนาที่ดินให้มีประสิทธิภาพ 
                    ภายใต้หลักปรัชญาเศรษฐกิจพอเพียง
                </p>
            </div>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/42.jpg">
        <div class="filter"></div>
        <div class="container">
            <div class="text-container" data-aos="fade-up" data-aos-delay="0">
                <p class="text-center">
                    2. จรรโลงวัฒนธรรม ศาสนา ศิลปะ ทุนทางสังคมของล้านนา การพัฒนาคุณภาพชีวิต 
                    การพัฒนาทรัพยากรมนุษย์ การจัดการศึกษาและสาธารณสุขแบบบูรณาการ
                </p>
            </div>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/43.jpg">
        <div class="filter"></div>
        <div class="container">
            <div class="text-container" data-aos="fade-up" data-aos-delay="0">
                <p class="text-center">
                    3. บริหารจัดการทรัพยากรธรรมชาติและสิ่งแวดล้อมโดยการมีส่วนร่วมของทุกภาคส่วน
                </p>
            </div>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/44.jpg">
        <div class="filter"></div>
        <div class="container">
            <div class="text-container" data-aos="fade-up" data-aos-delay="0">
                <p class="text-center">
                    4. เสริมสร้างความปลอดภัยในชีวิตและทรัพย์สินในพื้นที่ปกติและชายแดน 
                    ป้องกันและปราบปรามปัญหาของยาเสพติด และพัฒนาความร่วมมือกับประเทศเพื่อนบ้าน
                </p>
            </div>
        </div>
    </section>

    <section class="content-05 lazy-bg" data-src="public/assets/app/images/bg/45.jpg">
        <div class="filter"></div>
        <div class="container">
            <div class="text-container" data-aos="fade-up" data-aos-delay="0">
                <p class="text-center">
                    5. ส่งเสริมหลักธรรมาภิบาลในการบริหารจัดการภาครัฐเพื่อการบริหารงานจังหวัดแบบบูรณการ
                </p>
            </div>
        </div>
    </section>
        
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
