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
            'leading' => 'ป',
            'title' => 'ระวัติความเป็นมาและตราสัญลักษณ์',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image_bg' => 'public/assets/app/images/bg/minisite-bg-01.png',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ประวัติความเป็นมาและตราสัญลักษณ์', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>

    <section class="history-02 section-padding">
        <div class="container">

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-history lg" src="public/assets/app/images/logo.png" alt="Website Logo" />
                <h6 class="h4 fw-400 color-12 mt-5">
                    ประวัติความเป็นมากรมโยธาธิการและผังเมือง
                </h6>
                <div class="p color-gray mt-2">
                    <div class="font-01 lg-no-br">
                        กรมโยธาธิการและผังเมือง ตั้งขึ้นเมื่อวันที่ 3 ตุลาคม พ.ศ. 2545 จากการรวมกรมโยธาธิการและกรมการผังเมืองเข้าด้วยกัน ซึ่งเป็นผลจากการปฏิรูประบบราชการ
                        <br> โดยบูรณาการงานที่เกี่ยวเนื่องกันของทั้งสองกรมเข้าด้วยกัน และมุ่งหวังให้เกิดการพัฒนาเมืองที่สัมฤทธิ์ผล ตามวัตถุประสงค์ของการผังเมืองอย่างแท้จริง
                        <br> อันจะนำไปสู่คุณภาพชีวิตที่ดีของประชาชนอย่างยั่งยืน
                    </div>    
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <h6 class="h4 fw-400 color-12 mt-5 pt-2">
                    ตราสัญลักษณ์กรมโยธาธิการและผังเมือง
                </h6>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-history mt-3" src="public/assets/app/images/hero/history-01.png" alt="Image History" />
                <h6 class="h5 fw-400 color-12 mt-2">
                    พระพรหม
                </h6>
                <div class="p color-gray mt-2">
                    <div class="font-01 lg-no-br">
                        คือ พระผู้สร้างทั้งสามโลก มีสี่พักตร์ (จัตุรมุข) แปดหู (อัฎฐกรรณ) มีสี่กร ประทับยืนหรือนั่งบนบัลลังก์ดอกบัว มีกายสีแดงบ้างก็ว่าสีเหลือง 
                        <br> (ลัทธิลามะฝ่ายทิเบตว่ามีกายสีขาว) พระเนตรแดงอมเหลืองสวมชฎามกุฏ ใส่เครื่องประดับตกแต่ง และพวงมาลัยดอกไม้ขาว สองพระหัตถ์ด้านหน้าจะเป็นปางประทานอภัย
                        <br> และประทานพร สองพระหัตถ์ด้านหลังถือช้อน (สำหรับหยอดเนยในไฟ) บ้างว่าธารพระกร(ไม้เท้า) และมีหม้อใส่ฆี (น้ำมันที่ผลิตจากเนยเหลว) บางครั้งก็ถือพวงมาลัย
                        <br> ลูกปัด และคณโฑน้ำ หรือคำภีพระเวท และต้นหญ้า มีธนูชื่อ ปรวีตะ วิมานของพระองค์อยู่ในพรหมโลก พาหนะคือ หงส์ชื่อว่า หงสะ วหน
                    </div>    
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-history mt-3" src="public/assets/app/images/hero/history-02.png" alt="Image History" />
                <h6 class="h5 fw-400 color-12 mt-2">
                    พระนารายณ์
                </h6>
                <div class="p color-gray mt-2">
                    <div class="font-01 lg-no-br">
                        คือ พระผู้อยู่ในตำแหน่งพระผู้เป็นเจ้าผู้ถนอมโลก มีลักษณะสี่กรทรงสังข์ ชื่อปัญจชันยะ ในพระหัตถ์ขวาส่วนพระหัตถ์ขวาล่างถือ จักร ชื่อ สุทรรศน์ พระหัตถ์ซ้ายถือ
                        <br> ดอกบัว พระหัตถ์ซ้ายล่างถือคฑา ชื่อเกาโมทติ สีกายของพระนารายณ์ไม่แน่นอน บ้างก็ว่าพระวรกายเป็นสีขาวในสมัยไตรดายุค พระกายเป็นสีแดง สมัยทวาบรยุค พระกายเป็นสีเหลือง 
                        <br> ส่วนปัจจุบันที่เรียกว่ากลียุค พระกายเป็นสีเขียวและสีน้ำเงิน สวรรค์ที่ประทับเรียกว่า ไวกูณฐ์ พาหนะคือ ครุฑ
                    </div>    
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-history mt-3" src="public/assets/app/images/hero/history-03.png" alt="Image History" />
                <h6 class="h5 fw-400 color-12 mt-2">
                    พระศิวะ
                </h6>
                <div class="p color-gray mt-2">
                    <div class="font-01 lg-no-br">
                        คือ พระผู้เป็นใหญ่เหนือการสรรเสริญ เป็นผู้ล้างผู้ทำลาย ทำให้สะอาดปราศจากโทษมลทิน (กรุณา หรือชุบให้สะอาด) ทรงมีพระกายเป็นสีขาว สีสามตา พระเนตรที่สามตั้ง
                        <br> ตรงที่กลางหน้าผาก พระเกศาสีแดง หนึ่งพระพักตร์ บางปางมีสี่พระพักตร์ ที่ศอของพระองค์มีสีนิล ทรงประคำกระโหลกมนุษย์คล้องคอ มีสังวาลเป็นงูพันรอบคอ พระหัตถ์ซ้าย
                        <br> ถืองู พระหัตถ์ขวาถือพระขันธกุมาร หรือกาติยะเทพแห่งสงครามที่สถิตอยู่บนเขาไกลาสในเทือกเขาหิมาลัย พาหนะคือ โคนนทิ
                    </div>    
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-history mt-3" src="public/assets/app/images/hero/history-04.png" alt="Image History" />
                <h6 class="h5 fw-400 color-12 mt-2">
                    พระพิฆเนศวร
                </h6>
                <div class="p color-gray mt-2">
                    <div class="font-01 lg-no-br">
                        หรือ พระวิฆเณศวร หรือ พระพิฆเนศวร เป็นเทพเจ้าแห่งความรู้ เป็นหัวหน้านำคณะข้ามความขัดข้อง(ผู้เป็นใหญ่เหนือความขัดข้อง) พระวิฆเณศวร ตามความนิยมแห่ง
                        <br> ไสยศาสตร์ว่าเป็นเจ้าแห่งความรู้ลักษณะของพระวิฆเณศวร มีรูปกายเป็นมนุษย์อ้วนเตี้ย ท้องพลุ้ย มีเศียรเป็นช้าง มีงาข้างเดียว(ถูกขวาน ปรศุรามหักเสียงา) สีกายสีแดง 
                        <br> (บางแห่งว่าผิวเหลือง นุ่งห่มแดง) มีสี่กร พระหัตถ์หน้าขวาถืองาช้าง พระหัตถ์ซ้ายถือขันน้ำมนต์ เป็นกระโหลกศีรษะมนุษย์ พระหัตถ์หลังขวาถือ ตรี พระหัตถ์ซ้ายถือบาศ 
                        <br> (บ่วง) พาหนะคือ หนู
                    </div>    
                </div>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
