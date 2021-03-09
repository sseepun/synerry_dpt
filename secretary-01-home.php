<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php $topnavClass = 'fade-in'; include_once('include/topnav-secretary.php'); ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/01.jpg');">
                        <div class="container">
                        
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="bullet">
                <div class="container">
                    <div class="bullet-wrapper">
                        <div class="dots"></div>
                        <div class="arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding position-relative" style="z-index:1;">
        <div class="container">
            <h6 class="h3 fw-600">
                อัพเดทข่าวพลังงาน
            </h6>
            <?php $categories = ['ข่าวประชาสัมพันธ์', 'เรื่องเด่นประเด็นดัง', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร']; ?>
            <div class="tab-container">
                <div class="tabs tabs-03">
                    <div class="btns">
                        <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                            ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                        </a>
                    </div>
                    <?php foreach($categories as $j=>$k){?>
                        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                            <?= $k ?>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php foreach($categories as $j=>$k){?>
                        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                            <div class="grids">

                                <div class="grid xl-75 lg-2-3 sm-100">
                                    <div class="ss-card ss-card-05 use-slick">
                                        <div class="img-container">
                                            <div class="wrapper">
                                                <?php for($i=0; $i<4; $i++){?>
                                                    <div class="img-wrapper <?php if($i==0)echo 'active'; ?>" data-i="<?= $i ?>">
                                                        <a class="ss-img adaptive" href="#">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                            <div class="hover-container">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                            <div class="slide-container">
                                                <div class="slides">
                                                    <?php for($i=0; $i<4; $i++){?>
                                                        <div class="slide">
                                                            
                                                            <div class="wrapper">
                                                                <a class="title p lg fw-600" href="#">
                                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                                </a>
                                                                <div class="ss-stat jc-start">
                                                                    <div class="stat">
                                                                        8 มกราคม 2020
                                                                    </div>
                                                                    <div class="stat">
                                                                        <em class="far fa-eye mr-1"></em> 178
                                                                    </div>
                                                                </div>
                                                                <p class="desc xs lh-lg">
                                                                    วันนี้ (5 ธ.ค. 63) นายกุลิศ สมบัติศิริ ปลัดกระทรวงพลังงาน พร้อมด้วยนายสมบูรณ์ 
                                                                    หน่อแก้ว รองปลัดกระทรวงพลังงาน ได้ให้เกียรติเยี่ยมชมบูธกระทรวงพลังงาน 
                                                                    ร่วมกับการไฟฟ้าฝ่ายผลิตแห่งประเทศไทย และบริษัท ปตท. จำกัด (มหาชน)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                <div class="arrows"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid xl-25 lg-1-3 sm-100">
                                    <div class="ss-ads ss-ads-01" style="background-image:url('public/assets/app/images/bg/ads-01.jpg');">
                                        <div class="wrapper">
                                            <div class="text-center color-white">
                                                <h6 class="h4 fw-600 lh-xs md-no-br">
                                                    อัพเดท<br>ข้อมูลทันใจ
                                                </h6>
                                                <p class="h6 fw-300 md-no-br mt-1">
                                                    แค่สมัครรับข่าวสารออนไลน์<br>ง่ายๆ แค่คลิก
                                                </p>
                                            </div>
                                            <div class="btns text-center">
                                                <a class="btn btn-action btn-round btn-sm btn-color-05" href="#">
                                                    สมัครรับข่าวสาร
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php for($i=0; $i<3; $i++){?>
                                    <?php if($i==0){?>
                                        <div class="grid xl-50 lg-2-3 sm-100">
                                            <div class="ss-card ss-card-04 adaptive">
                                                <a class="ss-img adaptive" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="wrapper">
                                                        <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                                        <a class="title p md fw-600" href="#">
                                                            สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                            สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                        </a>
                                                        <div class="ss-stat jc-start">
                                                            <div class="stat">
                                                                8 มกราคม 2020
                                                            </div>
                                                            <div class="stat">
                                                                <em class="far fa-eye mr-1"></em> 178
                                                            </div>
                                                        </div>
                                                        <div class="arrow">
                                                            <em class="far fa-arrow-alt-circle-right"></em>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }else{?>
                                        <div class="grid xl-25 lg-1-3 sm-50">
                                            <div class="ss-card ss-card-04">
                                                <a class="ss-img square" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                        สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <div class="ss-stat jc-start">
                                                        <div class="stat">
                                                            8 มกราคม 2020
                                                        </div>
                                                        <div class="stat">
                                                            <em class="far fa-eye mr-1"></em> 178
                                                        </div>
                                                    </div>
                                                    <div class="arrow">
                                                        <em class="far fa-arrow-alt-circle-right"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-03 section-padding">
        <div class="img-bg" style="background-image:url('public/assets/app/images/banner/02.jpg');"></div>
        <div class="container position-relative">
            <h6 class="h3 fw-600 color-white">
                ข่าวสารพลังงานจังหวัด
            </h6>
            <?php $categories = ['กิจกรรมพลังงานจังหวัด', 'จัดซื้อจัดจ้างพลังงานจังหวัด']; ?>
            <div class="tab-container">
                <div class="tabs tabs-04 mt-2 mb-2">
                    <?php foreach($categories as $j=>$k){?>
                        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                            <?= $k ?>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php foreach($categories as $j=>$k){?>
                        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                            <div class="list-header jc-start">
                                <div class="block mr-2 bcolor-white">
                                    <span class="p sm fw-400 color-white mr-1">แสดงข่าวจาก</span>
                                    <div class="select-wrapper">
                                        <select class="sm round">
                                            <option value="">ภาคกลาง</option>
                                        </select>
                                    </div>
                                    <div class="select-wrapper">
                                        <select class="sm round">
                                            <option value="">ทั้งหมด</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="block bcolor-white">
                                    <span class="p sm fw-400 color-white mr-1">เรียงลำดับ</span>
                                    <div class="select-wrapper">
                                        <select class="sm round">
                                            <option value="">มาใหม่</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-container">
                                <div class="slides">
                                    <?php for($i=0; $i<5; $i++){?>
                                        <div class="slide">
                                            <div class="wrapper">
                                                <div class="ss-card ss-card-04 ovf-visible">
                                                    <div class="text-container mt-0">
                                                        <div class="wrapper">
                                                            <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                                            <a class="title p md fw-600" href="#">
                                                                <?= $k ?>
                                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                            </a>
                                                            <div class="ss-stat jc-start">
                                                                <div class="stat">
                                                                    8 มกราคม 2020
                                                                </div>
                                                                <div class="stat">
                                                                    <em class="far fa-eye mr-1"></em> 178
                                                                </div>
                                                            </div>
                                                            <div class="arrow">
                                                                <em class="far fa-arrow-alt-circle-right"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="bullet">
                                    <div class="bullet-wrapper">
                                        <div class="arrows"></div>
                                        <div class="dots"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-3">
                                <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                    ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-04 section-padding">
        <div class="img-bg" style="background-image:url('public/assets/app/images/banner/03.jpg');"></div>
        <div class="container position-relative">
            <h6 class="h3 fw-600 color-black">
                สถิติพลังงาน
            </h6>
            <div class="gallery-grids">
                <div class="grid xl-75 sm-100 mt-0">
                    <div class="gallery-grids">
                        <div class="grid sm-100">

                            <div class="about-box bradius-round bg-01">
                                <div class="d-flex ai-center jc-space-between color-white fw-wrap">
                                    <h6 class="p lg fw-600 lh-xs ws-nowrap mr-3">
                                        โครงสร้างราคาน้ำมัน
                                    </h6>
                                    <div class="my-1">
                                        <span class="p xs fw-500 mr-1">
                                            26 พฤศจิกายน 2020
                                        </span>
                                        <a class="btn btn-action btn-color-black btn-round btn-xs" href="#">
                                            ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                        </a>
                                    </div>
                                </div>
                                <div class="scroll-x-wrapper mt-2 pb-2" data-simplebar>
                                    <table class="table table-04 table-sm color-white">
                                        <thead>
                                            <tr>
                                                <th class="p xs fw-500 color-09 ws-nowrap">UNIT</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">EX-REFIN.</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">TAX</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">M. TAX</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">OIL FUND</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">CONSV. FUND</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">WHOLESALE</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">VAT</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">WS&VAT</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">MARKETING</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">VAT</th>
                                                <th class="p xs fw-500 text-center ws-nowrap">RETAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0; $i<9; $i++){?>
                                                <tr>
                                                    <td class="p xs fw-500 color-09 ws-nowrap">GASOHOL95 E10</td>
                                                    <td class="p xs fw-400 text-center">10.9537</td>
                                                    <td class="p xs fw-400 text-center">5.8500</td>
                                                    <td class="p xs fw-400 text-center">0.5850</td>
                                                    <td class="p xs fw-400 text-center">0.6200</td>
                                                    <td class="p xs fw-400 text-center">0.1000</td>
                                                    <td class="p xs fw-400 text-center">18.1087</td>
                                                    <td class="p xs fw-400 text-center">1.2676</td>
                                                    <td class="p xs fw-400 text-center">19.3763</td>
                                                    <td class="p xs fw-400 text-center">2.1249</td>
                                                    <td class="p xs fw-400 text-center">0.1487</td>
                                                    <td class="p xs fw-400 text-center">21.65</td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="grid xl-1-3 lg-40 md-50 sm-100">
                            
                            <div class="about-box bradius-round bg-white">
                                <h6 class="p lg fw-600 lh-xs color-black">
                                    ราคาน้ำมันวันนี้
                                </h6>
                                <p class="xs fw-500 color-01">
                                    26 พฤศจิกายน 2020
                                </p>
                                <table class="table table-02 table-sm mt-2">
                                    <tbody>
                                        <?php for($i=1; $i<10; $i++){?>
                                            <tr>
                                                <td>
                                                    <img src="public/assets/app/images/icon/gas-0<?= $i ?>.jpg" alt="Gas Icon" />
                                                </td>
                                                <td class="text-right">
                                                    <p class="sm fw-200 color-gray">
                                                        26.76
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="d-flex ai-center jc-space-between color-gray fw-wrap mt-3">
                                    <p class="xs fw-500 mr-1">
                                        ( หน่วย : บาท/ลิตร )
                                    </p>
                                    <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                        ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="grid xl-2-3 lg-60 md-50 sm-100 mt-0">
                            <div class="gallery-grids">
                                <div class="grid sm-100">

                                    <div class="about-box bradius-round bg-white">
                                        <div class="d-flex ai-center jc-space-between color-black fw-wrap">
                                            <h6 class="p lg fw-600 lh-xs ws-nowrap mr-3">
                                                การใช้ไฟฟ้า ณ ปัจจุบัน
                                            </h6>
                                            <div class="my-1">
                                                <span class="p xs fw-500 color-01 mr-1">
                                                    26 พฤศจิกายน 2020
                                                </span>
                                                <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                                    ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                </a>
                                            </div>
                                            <div class="chart-container no-label width-full adaptive-01">
                                                <div class="chart bradius-round"></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="grid xl-50 lg-60 sm-100">

                                    <div class="about-box bradius-round bg-02">
                                        <h6 class="p lg fw-600 lh-xs color-black">
                                            ฐานะกองทุนน้ำมัน
                                        </h6>
                                        <p class="xs fw-500 color-black">
                                            สิ้นสุด ณ วันที่ 26 พฤศจิกายน 2020
                                        </p>
                                        <table class="table table-03 table-sm color-black mt-2">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="p xs fw-600 text-center pr-0">น้้ามัน</td>
                                                    <td class="p xs fw-600 text-center pr-0">LPG</td>
                                                    <td class="p xs fw-600 text-center">รวม</td>
                                                </tr>
                                                <tr>
                                                    <td class="p xs fw-600 pr-0">สินทรัพย์รวม</td>
                                                    <td class="p xs fw-600 text-center pr-0">54,111</td>
                                                    <td class="p xs fw-600 text-center pr-0">243</td>
                                                    <td class="p xs fw-600 text-center">57,086</td>
                                                </tr>
                                                <tr>
                                                    <td class="p xs fw-600 pr-0">หนี้สินรวม</td>
                                                    <td class="p xs fw-600 text-center pr-0">17,082</td>
                                                    <td class="p xs fw-600 text-center pr-0">7,211</td>
                                                    <td class="p xs fw-600 text-center">24,293</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="p xs fw-600 pr-0">ฐานะกองทุนสุทธิ</th>
                                                    <th class="p xs fw-600 text-center pr-0" style="color:#009900;">
                                                        39,761
                                                    </th>
                                                    <th class="p xs fw-600 text-center pr-0" style="color:#f2290a;">
                                                        -6,968
                                                    </th>
                                                    <th class="p xs fw-600 text-center">32,793</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btns text-right mt-3">
                                            <a class="btn btn-action btn-color-black btn-round btn-xs" href="#">
                                                ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-05 section-padding pb-0 bg-01">
        <div class="container">
            <h6 class="h3 fw-600 color-white">
                ข่าวประกาศ
            </h6>
            <div class="gallery-grids">
                <div class="grid md-50 sm-100 about-grid">

                    <?php $categories = ['จัดซื้อจัดจ้าง กระทรวงพลังงาน', 'สมัครงาน']; ?>
                    <div class="tab-container">
                        <div class="tabs tabs-03 white">
                            <div class="btns">
                                <a class="btn btn-action btn-color-black btn-round btn-sm" href="#">
                                    ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </a>
                            </div>
                            <?php foreach($categories as $j=>$k){?>
                                <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                    <?= $k ?>
                                </a>
                            <?php }?>
                        </div>
                        <div class="tab-contents">
                            <?php foreach($categories as $j=>$k){?>
                                <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                    <div class="mt-3">
                                        <?php for($i=0; $i<4; $i++){?>
                                            <div class="ss-card ss-card-11 bradius-round ovf-hidden">
                                                <div class="ss-date-container">
                                                    <div class="ss-date-sm bradius-round ovf-hidden">
                                                        <div class="date">22</div>
                                                        <div class="month">ม.ค.</div>
                                                        <div class="year">2564</div>
                                                    </div>
                                                </div>
                                                <div class="text-container">
                                                    <a class="title p sm fw-100" href="#">
                                                        <?= $k ?>
                                                        ประกาศสำนักงานปลัดกระทรวงพลังงาน เรื่องประกาศผู้ชนะการเสนอราคา 
                                                        จ้างซ่อมเครื่องถ่ายเอกสารยี่ห้อ RICOH รุ่น AFICIO MP ๓๓๙๑ 
                                                        โดยวิธีเฉพาะเจาะจง
                                                    </a>
                                                </div>
                                                <div class="info-content color-01">
                                                    <div class="h4 lh-xs">
                                                        <em class="fas fa-cloud-download-alt"></em>
                                                    </div>
                                                    <p>
                                                        ดาวน์โหลด <br>
                                                        (PDF, 629.0 KB)
                                                    </p>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
                <div class="grid md-50 sm-100 position-relative">

                    <div class="about-container">
                        <div class="wrapper">
                            <div class="img-bg"></div>
                            <div class="position-relative">
                                <div class="d-flex ai-center jc-space-between fw-wrap">
                                    <h6 class="h3 fw-600 color-white ws-nowrap mr-2">
                                        สื่อมัลติมีเดีย
                                    </h6>
                                    <div class="my-1">
                                        <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                            ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                        </a>
                                    </div>
                                </div>
                                <?php $categories = ['Energy Channel', 'สื่อประชาสัมพันธ์', 'คำถามที่พบบ่อย']; ?>
                                <div class="tab-container mt-1">
                                    <div class="tabs tabs-03 pr-0">
                                        <?php foreach($categories as $j=>$k){?>
                                            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                                <?= $k ?>
                                            </a>
                                        <?php }?>
                                    </div>
                                    <div class="tab-contents">
                                        <?php foreach($categories as $j=>$k){?>
                                            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                                <div class="mt-4">

                                                    <div class="px-2 py-2 bradius-round bg-white border bcolor-white">
                                                        <a class="ss-img horizontal bradius-round ovf-hidden" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                            <div class="hover-container">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                                </div>
                                                            </div>
                                                            <div class="short-desc bg-white">
                                                                <p class="sm fw-600 color-black lh-xs">
                                                                    วีดีทัศน์ "พลังสายธารแห่งพระบารมี"
                                                                </p>
                                                                <p class="xs fw-600 color-01 lh-xs">
                                                                    16 เมษายน 2020
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="mt-4">
                                                        <?php for($i=0; $i<5; $i++){?>
                                                            <div class="ss-card ss-card-12">
                                                                <div class="video-container">
                                                                    <a class="ss-img square" href="#">
                                                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                                        <div class="hover-container op-100">
                                                                            <div class="icon">
                                                                                <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="text-container">
                                                                    <a class="title p xs fw-600" href="#">
                                                                        <?= $k ?>
                                                                        รายการเดินหน้าประเทศไทย ดีเซล B20 รหัสความสุขเกษตรกรปาล์มน้ำมัน
                                                                    </a>
                                                                    <p class="date fw-600">
                                                                        8 เมษายน 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php }?>
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
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'area',
                toolbar: { show: false },
                height: '100%'
            },
            stroke: { curve: 'smooth', width: 1 },
            legend: { show: false },
            dataLabels: { enabled: false },
            series: [
                {
                    name: 'Data 1',
                    data: [0, 5, 2, 5, 7, 10, 20, 12, 25, 35, 20, 0]
                },
                {
                    name: 'Data 2',
                    data: [0, 10, 5, 15, 10, 20, 30, 45, 20, 15, 10, 0]
                },
                {
                    name: 'Data 3',
                    data: [0, 2, 5, 5, 3, 15, 35, 10, 5, 10, 15, 0]
                },
            ],
            colors: ['rgba(254,77,1,.7)', 'rgba(255,183,57,.7)', 'rgba(160,232,208,.7)'],
            fill: { type: 'solid' },
            xaxis: {
                categories: [
                    'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN',
                    'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'
                ]
            },
        }
        $('.chart').each(function(){
            var apexChart = new ApexCharts($(this)[0], options);
            apexChart.render();
        });
    </script>
</body>
</html>
