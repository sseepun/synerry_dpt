<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
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
            <div class="ss-box-full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
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
                            <div class="scroll-x-wrapper">
                                <div class="grids no-gap border-top border-bottom bcolor-sgray" style="border-left: 1px solid transparent; border-right:1px solid transparent;">
                                    <div class="grid sm-10 mt-0">
                                        <div class="d-flex jc-center ai-center bg-02 px-2 py-2">
                                            <p class="sm color-white">หมายเลข</p>
                                        </div>
                                        <div class="bg-mgray" style="height:calc(100% - 2.3rem);">
                                            <div class="d-flex jc-center px-2 py-2">
                                                <p class="fw-400 color-black">32</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-70 mt-0">
                                        <div class="ml-3 py-2">
                                            <p class="sm">
                                                <span class="fw-600">แจ้งโดย</span> สมโภช  แก้วคุ้ม
                                            </p>
                                        </div>
                                        <div class="ml-3 py-2">
                                            <h6 class="p fw-600">ไบโอดีเซลจากน้ำมันที่ใช้แล้ว</h6>
                                            <p class="desc sm">
                                                ต้องการทราบหน่วยของราคาขายส่งของก๊าซ NGV ในตลาดโลก หากเป็นน้ำมันดิบ ราคาขายส่ง จะเป็นดอลลาร์ต่อบาร์เรล
                                            </p>
                                        </div>
                                        <div class="border-top bcolor-sgray mt-3 pt-4 pb-2 ml-3 mb-5">
                                            <h6 class="p fw-600">ไฟล์แนบ</h6>
                                            <div class="gallery-grids">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="grid sm-100 mt-1">
                                                        <div class="ss-file-01">
                                                            <div class="icon-container">
                                                                <div class="img-container">
                                                                    <div class="img-wrapper">
                                                                        <img src="public/assets/app/images/icon/file-pdf.png" alt="File Icon" />
                                                                    </div>
                                                                </div>
                                                                <p class="xs fw-200">
                                                                    <span class="fw-600">0.78</span> MB
                                                                </p>
                                                            </div>
                                                            <div class="text-container">
                                                                <p class="fw-500 lh-sm color-black">
                                                                    โครงการสนับสนุนการลงทุนติดตั้งใช้งาน
                                                                    ระบบอบแห้งพลังงานแสงอาทิตย์
                                                                </p>
                                                                <div class="p xs mt-2">
                                                                    <a class="color-01 h-color-02 fw-600 mr-3" href="#">
                                                                        <em class="fas fa-arrow-circle-down mr-1"></em> 
                                                                        ดาวน์โหลด ( <span class="color-black">109</span> )
                                                                    </a>
                                                                    <a class="color-gray h-color-02 fw-500" href="#">
                                                                        <em class="fas fa-exclamation-triangle color-02 mr-1"></em>
                                                                        แจ้งไฟล์เสีย
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-20 mt-0 bcolor-sgray" style="border-left: 1px solid transparent;">
                                        <div class="d-flex jc-center px-2 py-3 border-bottom bcolor-sgray">
                                            <button class="btn btn-action btn-color-01 btn-round px-2 py-1 text-xs">
                                                ปิดเรื่องร้องเรียน <em class="far far fa-arrow-alt-circle-right text-xl ml-1"></em>
                                            </button>
                                        </div>
                                        <div class="px-2 py-3">
                                            <div class="text-xs">
                                                <em class="far fa-eye color-01 mr-1"></em> 98
                                            </div>
                                            <div class="text-xs">
                                                <em class="far fa-clock color-01 mr-1"></em> 22 มกราคม 2020
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ss-box-webboard mt-0">

                                <div class="body">
                                    <div class="body-section">
                                        <div class="chat-container">
                                            <div class="chat-content" data-simplebar>
                                                <div class="chat-date">พฤหัสบดี 20 มกราคม 2564</div>
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
                                                                ตอบเมื่อวันที่ 11 ธันวาคม 2563 เวลา 14.50 น.
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
                                                                ตอบเมื่อวันที่ 11 ธันวาคม 2563 เวลา 14.00 น.
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
                                                                ตอบเมื่อ 2 นาทีที่ผ่านมา
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ss-box box-shadow d-flex">
                                    <input type="text" class="form-control no-border" placeholder="พิมพ์ข้อความ..." required title="General Text Input" />
                                    <button class="mx-1 my-1 px-3 py-2 btn btn-action btn-color-01">
                                        <em class="fas fa-paper-plane"></em>
                                    </button>
                                </div>
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
