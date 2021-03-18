<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <section class="banner-03">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/05.jpg');">
                        <div class="container">
                            <div class="text-container">
                                <img class="img-text animate" src="public/assets/app/images/misc/text-03.png" alt="Banner Image Text" style="--delay:.6s;" />
                                <h6 class="h4 lg fw-500 color-01 lh-xs mt-4 animate" style="--delay:.75s;">
                                    เสริมสร้างความมั่นคงทางพลังงาน
                                </h6>
                                <p class="md fw-400 color-black animate" style="--delay:.9s;">
                                    เพื่อรงอรับการเติบโตทางเศรษฐกิจ
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="arrow-wrapper">
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <section class="intro-06">
        <div class="container">
            <div class="wrapper">
                <div class="info">
                    <p class="fw-400 color-02">
                        ราคาน้ำมันขายปลีก (บ./ลิตร)
                    </p>
                </div>
                <div class="slide-container">
                    <div class="slides">
                        <?php for($i=0; $i<11; $i++){?>
                            <div class="slide">
                                <p class="xs fw-400 color-white">
                                    แก๊สโซฮอล์ 95
                                    <span class="fw-600 color-01 ml-1">24.05</span>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-05">
        <div class="wrapper">
            <div class="intro-cards">
                <div class="intro-card bg-01 border bcolor-01" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrapper color-white">
                        <img class="img-pattern" src="public/assets/app/images/icon/fire.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-500 lh-xs">ราคาเชื้อเพลิง</h6>
                            <p class="xs fw-500 lh-xs">PTTNGV</p>
                            <p class="h3 fw-600 lh-xs">15.31</p>
                        </div>
                    </div>
                </div>
                <div class="intro-card bg-02 border bcolor-02" data-aos="fade-up" data-aos-delay="150">
                    <div class="wrapper color-black">
                        <img class="img-pattern" src="public/assets/app/images/icon/give.png" alt="Image Pattern" />
                        <div class="text-container">
                            <h6 class="p fw-600 lh-xs">ราคาหุ้น</h6>
                            <p class="xs fw-600 lh-xs">ราคาล่าสุด</p>
                            <p class="h3 fw-600 lh-xs">39.25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="intro-07 section-padding pt-0" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="ss-box width-full position-relative px-0">
                <div class="ss-box-shadow xl"></div>
                <div class="box-content">
                    <div class="icon-blocks bcolor-sgray">
                        <?php
                            foreach([
                                'จัดซื้อจัดจ้าง', 'ราคาน้ำมันวันนี้', 'โครงสร้างราคาน้ำมัน', 'ฐานะกองทุนน้ำมัน',
                                'การใช้ไฟฟ้า ณ ปัจจุบัน', 'แบบสอบถาม', 'คำถามที่พบบ่อย'
                            ] as $i=>$d){
                        ?>
                            <a class="block bcolor-sgray" href="#">
                                <div class="wrapper">
                                    <div class="img-icon">
                                        <img src="public/assets/app/images/icon/minisite-0<?= $i+1 ?>.png" alt="icon">
                                    </div>
                                    <p class="fw-600 lh-sm">
                                        <?= $d ?>
                                    </p>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                    
                    <?php $categories = ['ข่าวประชาสัมพันธ์', 'เรื่องเด่นประเด็นดัง', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร']; ?>
                    <div class="tab-container px-4 pt-5 pb-4">
                        <div class="d-flex ai-center jc-space-between fw-wrap">
                            <div class="ss-icon-title-02 ws-nowrap mt-0">
                                <div class="text-icon color-01">E</div>
                                <div class="text-wrapper">
                                    <div class="title color-01">NERGY NEWS</div>
                                    <div class="desc color-black">อัพเดทข่าวพลังงาน</div>
                                </div>
                            </div>
                            <div class="tabs tabs-05 width-auto my-2">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?> btn btn-action btn-color-01 btn-sm btn-round mt-1" 
                                    href="#" data-tab="<?= $j ?>">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="tab-contents mt-1">
                            <?php foreach($categories as $j=>$k){?>
                                <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                    <div class="slide-container">
                                        <div class="slides">
                                            <?php for($i=0; $i<6; $i++){?>
                                                <div class="slide">
                                                    <div class="ss-card ss-card-06">
                                                        <a class="ss-img square" href="#">
                                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                            <div class="hover-container">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="text-container">
                                                            <div class="ss-stat jc-space-between">
                                                                <div class="stat">
                                                                    <em class="far fa-clock mr-1"></em> 28 เมษายน 2564
                                                                </div>
                                                                <div class="stat">
                                                                    <em class="far fa-eye mr-1"></em> 200
                                                                </div>
                                                            </div>
                                                            <a class="title p md fw-600" href="#">
                                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                            </a>
                                                            <p class="xs desc">
                                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                                HR Forum 2020, Big Data
                                                            </p>
                                                            <div class="arrow">
                                                                <em class="far fa-arrow-alt-circle-right"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="arrows"></div>
                                        <a class="learn-more p fw-500 color-black h-color-02" href="#">
                                            ดูทั้งหมด
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="about-07 section-padding" style="background-image:url('public/assets/app/images/bg/minisite-09.jpg');">
        <div class="container">
            <div class="ss-icon-title-02 ws-nowrap mt-0" data-aos="fade-up" data-aos-delay="0">
                <div class="text-icon color-01">E</div>
                <div class="text-wrapper">
                    <div class="title color-01">NERGY STATISTICS</div>
                    <div class="desc color-black">สถิติพลังงาน</div>
                </div>
            </div>
            <div class="gallery-grids mt-3" data-aos="fade-up" data-aos-delay="150">
                <div class="grid lg-50 sm-100">

                    <div class="about-box">
                        <div class="box-header">
                            <div class="left-container">
                                <h6 class="sm fw-600 lh-xs">
                                    ราคาขายปลีก <br> น้ำมัน 
                                    <span class="fw-200 text-2xs">(บาท/ ลิตร)</span>
                                </h6>
                            </div>
                            <div class="right-container">
                                <p class="lg fw-500 lh-xs color-black">
                                    15 มกราคม 2564
                                </p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="scroll-x-wrapper pb-0" data-simplebar>
                                <table class="table table-06">
                                    <thead>
                                        <tr>
                                            <th class="p fw-500 color-01 ws-nowrap">
                                                <div class="pl-2">ปั้มน้ำมัน</div>
                                            </th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">เบนซิล 95</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">แก็สโซฮอลล์ 95</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">แก็สโซฮอลล์ 91</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach([
                                                'ปตท.', 'บางจาก', 'เชลล์', 'เอสโซ่', 'คาลเท็กซ์', 
                                                'ไออาร์พีซี', 'พีที', 'ซัสโก้', 'เพียว'
                                            ] as $i=>$d){
                                        ?>
                                            <tr>
                                                <td class="py-1">
                                                    <div class="icon-container">
                                                        <div class="icon-wrapper">
                                                            <img src="public/assets/app/images/icon/gas-<?= $i+10 ?>.jpg" alt="Gas Icon" />
                                                        </div>
                                                        <div class="text p sm fw-500">
                                                            <?= $d ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p sm fw-500 text-center">31.46</td>
                                                <td class="p sm fw-500 text-center">24.05</td>
                                                <td class="p sm fw-500 text-center">23.78</td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid lg-50 sm-100 mt-0">
                    <div class="gallery-grids">
                        <div class="grid sm-100">

                            <div class="about-box">
                                <div class="box-header">
                                    <div class="left-container">
                                        <h6 class="sm fw-600 lh-xs">
                                            การใช้ไฟฟ้า ณ ปัจจุบัน
                                        </h6>
                                    </div>
                                    <div class="right-container">
                                        <p class="lg fw-500 lh-xs color-black">
                                            15 มกราคม 2564 <br>
                                            เวลา 19:00  น.
                                        </p>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="chart-container no-label width-full adaptive-02">
                                        <div class="chart bradius-round"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="grid sm-100">

                            <div class="about-box">
                                <div class="box-header">
                                    <div class="left-container">
                                        <h6 class="sm fw-600 lh-xs">
                                            ฐานะกองทุนน้ำมัน <br>
                                            <span class="fw-200 text-2xs">(บาท/ ลิตร)</span>
                                        </h6>
                                    </div>
                                    <div class="right-container">
                                        <p class="lg fw-500 lh-xs color-black">
                                            <span class="text-xs">สิ้นสุด ณ วันที่</span> <br>
                                            10 มกราคม 2564
                                        </p>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="scroll-x-wrapper pb-0" data-simplebar>
                                        <table class="table table-06">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="p fw-500 color-01 text-center ws-nowrap">น้ำมัน</th>
                                                    <th class="p fw-500 color-01 text-center ws-nowrap">LPG</th>
                                                    <th class="p fw-500 color-01 text-center ws-nowrap">รวม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="p sm fw-600 ws-nowrap text-right">
                                                        สินทรัพย์รวม
                                                    </td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                </tr>
                                                <tr>
                                                    <td class="p sm fw-600 ws-nowrap text-right">
                                                        หนี้สินรวม
                                                    </td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                    <td class="p sm fw-400 text-center">54.11</td>
                                                </tr>
                                                <tr>
                                                    <td class="p fw-600 ws-nowrap text-right">
                                                        ฐานะกองทุนสุทธิ
                                                    </td>
                                                    <td class="p fw-500 text-center">54.11</td>
                                                    <td class="p fw-500 text-center">54.11</td>
                                                    <td class="p fw-500 text-center">54.11</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="grid md-100 sm-100">

                    <div class="about-box">
                        <div class="box-header">
                            <div class="left-container">
                                <h6 class="sm fw-600 lh-xs">
                                    โครงสร้างราคาขายปลีก <br>
                                    <span class="fw-200 text-2xs">(บาท/ ลิตร)</span>
                                </h6>
                            </div>
                            <div class="right-container">
                                <p class="lg fw-500 lh-xs color-black">
                                    15 มกราคม 2564
                                </p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="scroll-x-wrapper pb-0" data-simplebar>
                                <table class="table table-06">
                                    <thead>
                                        <tr>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">หน่วย</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Ex-Refin<br>(AVG)</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Tax<br>B/Litre</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">M.Tax<br>B/Litre</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Oil<br>Fund</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Consv.<br>Fund</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Wholesale<br>Prices (WS)</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">VAT</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">WS & VAT</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Marketing<br>Magin</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">VAT</th>
                                            <th class="p fw-500 color-01 text-center ws-nowrap">Retail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p fw-600 ws-nowrap text-right">
                                                LPG (UNIT:<br>BAHT/KILO)
                                            </td>
                                            <td class="p sm fw-400 text-center">19.0692</td>
                                            <td class="p sm fw-400 text-center">2.1700</td>
                                            <td class="p sm fw-400 text-center">0.2170</td>
                                            <td class="p sm fw-400 text-center">-7.0804</td>
                                            <td class="p sm fw-400 text-center">0.000</td>
                                            <td class="p sm fw-400 text-center">14.3758</td>
                                            <td class="p sm fw-400 text-center">1.0063</td>
                                            <td class="p sm fw-400 text-center">15.3821</td>
                                            <td class="p sm fw-400 text-center">3.2566</td>
                                            <td class="p sm fw-400 text-center">0.2280</td>
                                            <td class="p fw-500 text-center">31.45</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="about-08 section-padding" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="gallery-grids">
                <div class="grid lg-30 sm-100 mt-0">
                    <div class="img-container">
                        <img src="public/assets/app/images/bg/minisite-10.jpg" alt="Hero Image" />
                    </div>
                </div>
                <div class="grid lg-70 sm-100 mt-0 position-relative">

                    <?php $categories = ['สมัครงาน', 'ประกาศจัดซื้อจัดจ้าง']; ?>
                    <div class="tab-container">
                        <div class="d-flex ai-center jc-space-between fw-wrap">
                            <div class="ss-icon-title-02 ws-nowrap mt-0">
                                <div class="text-icon color-01">A</div>
                                <div class="text-wrapper">
                                    <div class="title color-01">NNOUNCEMENTS</div>
                                    <div class="desc color-black">ข่าวประกาศ</div>
                                </div>
                            </div>
                            <div class="tabs tabs-05 width-auto my-2">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?> btn btn-action btn-color-01 btn-sm btn-round mt-1" 
                                    href="#" data-tab="<?= $j ?>">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="tab-contents">
                            <?php foreach($categories as $j=>$k){?>
                                <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                    <div class="text-right mt-1">
                                        <a class="p fw-600 color-black h-color-1" href="#">
                                            ดูทั้งหมด
                                        </a>
                                    </div>
                                    <div class="job-container">
                                        <?php for($i=0; $i<5; $i++){?>
                                            <div class="ss-card ss-card-16">
                                                <div class="wrapper color-black">
                                                    <div class="ss-stat my-0">
                                                        <div class="stat my-0">
                                                            <em class="far fa-clock color-01 mr-2"></em> 
                                                            <span class="fw-500">22 มกราคม  2564</span>
                                                        </div>
                                                    </div>
                                                    <div class="info-container">
                                                        <div class="info">
                                                            <a class="p lg fw-600 color-01 h-color-02 lh-xs" href="#">
                                                                ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <p class="sm fw-500">
                                                                จำนวน 
                                                                <span class="fw-600 color-01 text-xl mx-1">10</span> 
                                                                ตำแหน่ง
                                                            </p>
                                                        </div>
                                                        <div class="info">
                                                            <a class="d-flex ai-center jc-end p sm fw-500 h-color-01" href="#">
                                                                ข้อมูลเพิ่มเติม
                                                                <span class="h5 color-01 ml-2">
                                                                    <em class="far fa-arrow-alt-circle-right"></em>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="call-container img-fill" style="background-image:url('public/assets/app/images/bg/minisite-11.jpg');">
                <div class="wrapper">
                    <div class="text-container">
                        <h6 class="h5 sm fw-600 lh-xs color-01">ลงทะเบียนรับข้อมูลข่าวสาร</h6>
                        <p class="fw-400 color-white">ติดตามกิจกรรมข่าวสาร และ ข้อมูลอัพเดทต่างๆ</p>
                    </div>
                    <div class="form-container">
                        <form action="/" method="GET">
                            <div class="call-input-container">
                                <input type="email" class="form-control round" placeholder="กรอกอีเมลเพื่อสมัครรับจดหมายข่าว" required title="General Text Input" />
                                <button type="submit" class="btn btn-action btn-color-01 btn-round btn-sm">
                                    สมัครรับจดหมายข่าว
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
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
