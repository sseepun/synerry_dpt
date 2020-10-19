<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Custom CSS */
        /* Intro 01 */
        .intro-01{background-position:center; background-size:cover; background-repeat:no-repeat;}
        .intro-01 > .container{position:relative; padding-top:4rem; padding-bottom:1rem;}
        .h-line {margin-top:1rem; height: .25rem; background: #efefef; width:100%;}
        .slots {margin-top:-5.5rem;}
        .slot {
            height: 50%; position:relative;
        }
        .slot > img {
            position: relative; top:0; left:0; height:auto; width:100%;
        }
        .text-container {padding: 1.5rem 0 0 7.5rem;}

        .list-wrapper {height:100%; padding: 1rem .5rem;}
        .list-wrapper ul {list-style:none; padding:0; margin:0;}
        .list-wrapper li {display:flex; margin-bottom:1rem;}
        .list-wrapper li:last-child { margin-bottom:0;}
        .list-wrapper li a {text-decoration: none; color:#fff; display:block;}
        .list-wrapper li i {display:block;font-size:.5rem; color:#fff; text-align:center; line-height: 1.375rem; height:1rem; margin-right:.5rem;}
        .list-wrapper li:hover i{color:#bb8a42;}
        .list-wrapper li:hover a{color:var(--color1);}


        .content-info .block {display:flex; align-items:center; margin: 0 .5rem 0 0;}
        .content-info .block .icon {width:1.5rem; height:1.5rem; color:#fff; background:#4e1669; border-radius:50%; font-size:.9375rem; margin: 0 .5rem 0 0; text-align:center; line-height:1.75rem;}
        @media only screen and (max-width: 991.98px){
            .slots{margin-top:-3.5rem;}
            .intro-01 > .container{padding-top:3rem; padding-bottom:1rem;}
            .text-container p {font-size:110%;}
            .text-container h3 {font-size:110%;}
        .text-container {padding: 0;}

        }
        @media screen and (max-width: 767.98px){
            .slot > img {position:relative; left: calc(50% - 7.1825rem); width:auto;}
            .intro-01 > .container{padding-bottom:0;}
            .text-container p {font-size:90%;}
            .text-container h3 {font-size:90%;}
        }
        @media screen and (max-width:575.98px){
            .intro-01 > .container{padding-top:2.5rem;}
            .slots{margin-top:-3rem;}

        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-01 lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white">
                <h3>ข่าวประชาสัมพันธ์</h3>
                <p>เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร</p>
                <p>ด้านอุตสาหกรรมกับเราได้ที่นี่</p>
            </div>
        </div>
    </div>


    <section class="section-padding" style="position:relative;">
        <div class="container">
            <div class="grids jc-space-between">
                <div class="grid lg-25 md-30 sm-100">
                    <div class="slots" data-aos="fade-up" data-aos-delay="0">
                        <div class="slot bg-color-02">
                            <div class="list-wrapper">
                                <ul>
                                    <?php for($i=0; $i < 12; $i++){?>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#">โรงงานและการจัดตั้ง</a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="slot">
                            <img src="public/assets/app/images/bg/23.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="grid lg-70 md-70 sm-100">
                    <h3 class="fw-400">รมว. สุริยะฯ เผย นิสสันมั่นใจศักยภาพฐานการผลิตของไทยเดินหน้าลงทุนต่อไป</h3>
                    <div class="content-info">
                        <div class="d-flex ai-center">
                            <div class="block">
                                <div class="icon"><i class="fas fa-users"></i></div>
                                สำนักบริหารกลาง
                            </div>
                            <div class="block">
                                <div class="icon"><i class="fas fa-clock"></i></div>
                                7 เมษายน 2563
                            </div>
                            <div class="block">
                                <div class="icon"><i class="fas fa-eye"></i></div>
                                17 ครั้ง
                            </div>
                        </div>
                    </div>

                    <div class="ss-img bradius-0" style="margin-top: 1.5rem;">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg')"></div>
                    </div>

                    <div class="text-container">
                        <p class="text-xl fw-400">สุริยะ เผย ค่ายนิสสันเชื่อมั่นประเทศไทยปิดโรงงานรถยนต์ในอินโดนีเซีย มาผลิตที่ไทยแห่งเดียวในภูมิภาคอาเซียน พร้อมแผนดำเนินการธุรกิจระยะยาว ส่งผลดีต่อการจ้างงานและเศรษกิจของประเทศ พร้อมเร่งขับเคลื่อนมาตรการสนับสนุนการผลิตรถยนต์ไฟฟ้าผ่านคณะกรรมการนโยบายยานยนต์ไฟฟ้าแห่งชาติเพื่อให้ประเทศไทยบรรลุเป้าหมายเป็นฐานการผลิตรถยนต์ไฟฟ้าสำคัญของโลกต่อไป</p>
                        <p class="text-sm fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                            คอมเพล็กซ์แดนเซอร์ออเดอร์บรรพชน พลานุภาพออเดอร์ บลูเบอร์รีสังโฆ บลูเบอร์รีเกย์ซาบะสเตย์ฟาสต์ฟู้ด ออโต้เทคโนแครตทัวร์พาร์ตเนอร์แผดเผา แล็บ เกจนาฏยศาลาโบกี้สะเด่าภควัทคีตา วอลนัตดีพาร์ทเมนท์แพ็ค โค้กพูล แมชชีนแรงผลัก เซี้ยว ติวโบกี้ทรู เพาเวอร์ โลโก้วีนเทคเรซิ่น ยนตรกรรมฮ่องเต้ไลน์ไทม์ เที่ยงคืนโจ๋
                            คาปูชิโนตรวจสอบเวอร์ทิป วานิลลาเบบี้ ซีดาน ฮ็อตซ้อโปรโมชั่น ภคันทลาพาธแจ็กพ็อตไทม์ งี้สะเด่าพุทโธ เซอร์วิส ดั๊มพ์คันยิฮองเฮา ฟรังก์อึมครึมยนตรกรรมจิตเภท มอลล์โบว์แชมเปี้ยน แฟร์เฝออัตลักษณ์ปิโตรเคมีซิมโฟนี่ อพาร์ทเมนท์เป่ายิ้งฉุบม็อบทาวน์วอล์ค หงวน ออกแบบควิกโรแมนติกวอลนัท สเตริโอคอรัปชั่น เปปเปอร์มินต์ปักขคณนาคอลเล็กชั่น
                        </p>      
                        <p class="text-sm fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                           
                        </p>                    
                    </div>
                    
                    <div class="h-line"></div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-03"><i class="far fa-file-alt color-white"></i></div>
                        <h2>Embed</h2>
                    </div>
                    <div class="ss-mp4" style="margin-top:1rem;"  data-aos="fade-up" data-aos-delay="0">
                        <div class="wrapper">
                            <video controls>
                                <source src="public/assets/app/video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
