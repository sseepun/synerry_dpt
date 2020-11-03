<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container-banner color-white" data-aos="fade-up" data-aos-delay="0">
                <p class="font-01 text-sm fw-200">
                    เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                    ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                    ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
                </p>
            </div>
        </div>
    </div>
    
    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'จัดซื้อจัดจ้าง' ],
                    [ 'url' => '#', 'name' => 'ประกาศจัดซื้อจัดจ้าง' ],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="content-06 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>
        <div class="container pb-4 position-relative">
            <h3 class="text-center color-white">
                ประกาศจัดซื้อจัดจ้าง
            </h3>
        </div>

        <div class="ss-search-container bg-color-white pt-4 pb-1">
            <div class="container">
                <form action="" method="GET">
                    <div class="ss-search">
                        <input type="text" name="keyword" placeholder="ค้นหาข่าวประชาสัมพันธ์" autocomplete="off" required />
                        <button type="submit">
                            <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                        </button>
                        <div class="suggestion">
                            <div class="scroll-wrapper" data-simplebar>
                                <?php for($i=0; $i<8; $i++){?>
                                    <a class="item" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <h6 class="text">
                                            วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                            กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                        </h6>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-container tab-container-04 vertical my-0">
            <div class="bg-color-white pt-4 pb-3">
                <div class="container">
                    <div class="tabs">
                        <div class="tab active" data-tab="0">
                            <div class="num">01.</div>
                            <p>ข่าวประกาศการจัดซื้อจัดจ้าง</p>
                        </div>
                        <div class="tab" data-tab="1">
                            <div class="num">02.</div>
                            <p>TOR</p>
                        </div>
                        <div class="tab" data-tab="2">
                            <div class="num">03.</div>
                            <p>ราคากลาง</p>
                        </div>
                        <div class="tab" data-tab="3">
                            <div class="num">04.</div>
                            <p>ผลการจัดซื้อจัดจ้าง</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="600">
                    <div class="d-flex ai-center jc-space-between ss-box-02 no-bradius bg-color-09 color-white width-full py-3 mt-5">
                        <h6 class="my-0">เรื่อง</h6>
                        <h6 class="my-0">ดาวน์โหลด</h6>
                    </div>
                    <div class="ss-box-02 border box-shadow width-full bg-white-adaptive no-bradius py-0 mt-0">
                        <div class="grids">
                            <?php for($i=0; $i<12; $i++){?>
                                <div class="grid sm-100 mt-0">
                                    <div class="ss-card ss-card-05 border-bottom">
                                        <div class="text-wrapper">
                                            <div class="d-flex ai-center">
                                                <i class="text-2xl fas fa-file-pdf mr-3" style="color:#ff6c54;"></i>
                                                <p class="text-nm color-dgray mt-0">
                                                    ประกาศจังหวัดเชียงราย เรื่อง ประกวดราคาเช่ารถยนต์บรรทุกขนาด 1 ตัน 
                                                    (ดีเซล) ดับเบิ้ลแคบ ขับเคลื่อน 2 กระบอกสูบไม่ต่ำกว่า 2,400 ซีซี 
                                                    หรือกำลังเครื่องยนต์สูงสุดไม่ต่ำกว่า 110 กิโลวัตต์ พร้อมหลังคาไฟเบอร์ 
                                                    จำนวน 1 คัน
                                                </p>
                                            </div>
                                            <div class="post-stats-02 mt-3">
                                                <div class="block color-dgray">
                                                    <i class="far fa-clock color-02 text-xl mr-1"></i>
                                                    <span class="op-70">10 มิถุนายน 2563</span>
                                                    <span class="sep sep-lg"></span>
                                                    <span class="op-70">ขนาด 2 MB</span>
                                                    <span class="sep sep-lg"></span>
                                                    <i class="fas fa-exclamation-circle text-xl mr-1" style="color:#f89e1d;"></i>
                                                    <a class="op-70 text-sm color-dgray" href="#">
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-container">
                                            <div class="wrapper">
                                                <a class="btn custom-btn-blue btn-md" href="#">
                                                    ดาวน์โหลด <i class="fas fa-download ml-2"></i>
                                                </a>
                                                <p class="mt-2 text-sm op-70 color-dgray width-full">
                                                    1374 ครั้ง
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
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

