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
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-webboard mt-0">
                    <div class="ss-box-shadow xl"></div>

                    <div class="header">
                        <div class="ss-icon-title mt-0 pt-0">
                            <em class="fas fa-book"></em>
                            <div class="text-wrapper">
                                <h6 class="h5 sm fw-600">
                                    ความเสี่ยงการทุจริตในความโปร่งใสของการใช้จ่ายงบประมาณและการบริหารจัดการทรัพยากรภาครัฐ
                                </h6>
                                <p class="fw-100 mt-1">
                                    อยากทราบว่า megaloblastic anemia และ bicytopenia คือโรคอะไร เป็นอันตรายยร้ายแรง 
                                    หรือไม่  สามารถรักษาให้หายขาดมั้ย และควรมีวิธีปฏิบัติตัวอย่างไร
                                </p>
                                <div class="btns mt-3">
                                    <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                        การระบุความเสี่ยง
                                    </a>
                                    <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                        การทุจริต
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="webboard-profile">
                                    <div class="profile-icon">
                                        <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                    </div>
                                    <div class="text">
                                        <p class="sm fw-100">
                                            โพสต์โดย : <span class="fw-500 color-01">anonymous</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="block p sm fw-100">
                                <div class="slot">
                                    27.03.2563 
                                    <div class="btn btn-icon ml-1">
                                        <em class="fas fa-clock"></em>
                                    </div>
                                </div>
                                <div class="slot">
                                    202 
                                    <div class="btn btn-icon ml-1">
                                        <em class="fas fa-eye"></em>
                                    </div>
                                </div>
                                <div class="slot">
                                    Share 
                                    <a class="btn btn-icon ml-1" href="#">
                                        <em class="fab fa-facebook-f"></em>
                                    </a>
                                    <a class="btn btn-icon" href="#">
                                        <em class="fab fa-twitter"></em>
                                    </a>
                                    <a class="btn btn-icon" href="#">
                                        <em class="fab fa-instagram"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="body-section">
                            <div class="chat-container">
                                <div class="chat-content" data-simplebar>
                                    <?php for($i=0; $i<2; $i++){?>
                                        <div class="chat-date">วันที่ 11/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ใน e-PP เวอร์ชั่นใหม่ ทางกนอ: ได้ยกเลิกเรื่องการมอบอำนาจ 
                                                    เพื่อขอสิทธิ์ใช้งานเพิ่มเติมทั้งหมด คงไว้แต่ User หลักของผู้ประกอบการ 
                                                    ซึ่งในระบบใหม่จะเรียกว่า Master User ซึ่งหากผู้ประกอบการรายใด 
                                                    ต้องการสร้าง User เพิ่มในระบบ สามารถบริหารจัดการ User/Password 
                                                    และสิทธิ์การเข้าใช้งานโปรแกรมได้ด้วยตัวเองโดยไม่จำกัด User ใช้งาน
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    อยากให้ กนอ. ช่วยสนับสนุนศูนย์ฝึกอาชัพ อบรมเทคนิคเฉพาะทาง 
                                                    เป็นคอร์สสัมนา เกี่ยวกับสินค้าที่จะทำธุรกิจครับ เพราะว่าโรงงานในนิคมของ 
                                                    กนอ. นั้นมีแต่บริษัทชั้นนำของประเทศ อยากให้ช่วยส่งเสริมแนะนำ SME
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ข้อมูลผู้ติดต่อ ยังต้องกรอกใหม่ทุกคำขอเหมือนเดิมได้หรือไม่
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat-date">วันที่ 12/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ทางเราได้รับเรื่องร้องเรียน และอยู่ระหว่างการดำนเนินการแล้วค่ะ
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="body-section bg-fgray">
                            <div class="ss-icon-title mt-0 pt-0">
                                <em class="far fa-comment-dots bg-02"></em>
                                <div class="text-wrapper">
                                    <h6 class="h5 sm fw-600">
                                        ตอบหรือถามเพิ่มเติมเรื่องร้องเรียน
                                    </h6>
                                    <div class="form-group mt-2">
                                        <textarea name="message" rows="7" class="form-control round" title="General Textarea"></textarea>
                                    </div>
                                    <div class="btn-container text-right mt-3">
                                        <a class="btn btn-action btn-color-01 btn-round" href="#">
                                            ตอบความคิดเห็น
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
