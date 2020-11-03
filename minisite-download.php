<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <style>
        /* Custom CSS */
        .intro-02 {
            padding-bottom: 0;
        }
        .intro-02 .text-container-banner {
            padding: 1rem 0 .75rem 0;
            position:relative;
            display:inline-block;
        }
        .intro-02 .text-container-banner::after{
            content:''; position:absolute; top:0; left:-50%; width:165%; height:100%; z-index:-1; 
            -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,0),  rgba(33, 44, 67, .65), rgba(33, 44, 67, .9), rgba(33, 44, 67, .9),rgba(33, 44, 67, .65), rgba(0,0,0,0));
            background-color: #212c43;
        }


        /* Tab Container 04 */
        .tab-container-04 .tab {margin: .5rem .5rem 0 0; min-width: 15rem;}
        .tab-container-04 .tab .tab-wrapper {border-bottom: .0625rem solid transparent; border-color: #dcdcdc; vertical-align:middle; transition: all .3s;}
        .tab-container-04 .tab.active .tab-wrapper {border-bottom: .5rem solid transparent; border-color: #63337d; vertical-align:middle;}
        .tab-container-04 .tab-wrapper h5{display:inline-block; margin:0;  }
        .tab-container-04 .tab .tab-wrapper .index { display:inline-block; color:#000; width:auto; height: 2.5rem;  text-align:center; line-height: 2.5rem; transition: all .2s;}
        .tab-container-04 .tab.active .tab-wrapper .index { display:inline-block; width:2.25rem; background:#63337d; color:#fff; font-weight:100; border-radius: .25rem .25rem 0 0;}
    </style>

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

    <section class="section-padding" style="background-color:#dcdcdc; background-image:url('public/assets/app/images/bg/32.jpg'); background-size:contain; background-position:top center; background-repeat:no-repeat;">
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
        
        <style>
            .text-wrapper {width:calc(100% - 7.5rem);}
        </style>
        <!-- Tab Container 04 -->
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

                    <style>
                        .sep {margin:0 .5rem; width:1px; height: .8125rem; background:rgba(0,0,0,.3); transform: translateY(0); }
                    </style>
                    <div class="d-flex ai-center jc-space-between color-white mt-5 py-3" style="background:#2e1453; padding-left: 2rem; padding-right:2rem;">
                        <h6 class="mb-0">เรื่อง</h6>
                        <h6 class="mb-0">ดาวน์โหลด</h6>
                    </div>
                    <div class="ss-box-02 border box-shadow width-full bg-white-adaptive no-bradius py-0 mt-0">
                        
                        <div class="grids">
                            
                            <?php for($i=0; $i< 12; $i++){?>
                                <div class="grid sm-100 mt-0">
                                    <div class="ss-card ss-card-05 border-bottom">
                                            <div class="d-flex ai-center">
                                                <i class="text-xl fas fa-file-pdf mr-4" style="color:#ff6c54; "></i>
                                                <div class="d-flex ai-center jc-space-between">
                                                    <div class="text-wrapper">
                                                        <p class="mb-0 mt-0 text-sm op-40">ประกาศจังหวัดเชียงราย เรื่อง ประกวดราคาเช่ารถยนต์บรรทุกขนาด 1 ตัน (ดีเซล) ดับเบิ้ลแคบ ขับเคลื่อน 2 กระบอกสูบไม่ต่ำกว่า 2,400 ซีซี หรือกำลังเครื่องยนต์สูงสุดไม่ต่ำกว่า 110 กิโลวัตต์ พร้อมหลังคาไฟเบอร์ จำนวน 1 คัน</p>
                                                    </div>
                                                    <div class="btn-container text-right">
                                                        <a class="btn custom-btn-09 bg-color-blue" href="#">
                                                            ดาวน์โหลด <i class="fas fa-arrow-down color-white ml-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
            
                                            <div class="d-flex ai-center fw-wrap text-nm mt-2 width-full">
                                                <i class="tetx-xl far fa-clock color-09 mr-4"></i>
                                                <p class="mt-0 op-40 text-xs">10 มิถุนายน 2563</p>
                                                <div class="sep"></div>
                                                <p class="mt-0 op-40 text-xs">ขนาด 2 MB</p>
                                                <div class="sep"></div>
                                                <a class="text-xs" href="#" style="color:#9b9b9b;">
                                                    <i class="fas fa-exclamation-circle" style="color:#f89e1d;"></i>
                                                    แจ้งไฟล์เสีย
                                                </a>
                                                <p class="mt-0 text-xs op-40" style="margin: 0 2rem 0 auto;">1374 ครั้ง</p>

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

