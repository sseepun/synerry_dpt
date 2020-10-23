<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/treant-js-1.0/Treant.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-treant.css" />
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">โครงสร้างองค์กร</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/08.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'โครงสร้างองค์กร' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    <div class="tree mt-4" id="tree"></div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script src="public/assets/lib/treant-js-1.0/vendor/raphael.js"></script>
    <script src="public/assets/lib/treant-js-1.0/Treant.js"></script>
    <script>
        var treeConfig = {
            chart: {
                container: '#tree',
                nodeAlign: 'BOTTOM',
                connectors: { type: 'step' },
            },
            nodeStructure: {
                innerHTML: 'สำนักงานปลัดกระทรวงอุตสาหกรรม',
                HTMLclass: 'h-root',
                children: [
                    
                    {   
                        innerHTML: 'ปลัดกระทรวง (นักบริหาร ระดับสูง)',
                        HTMLclass: 'h-root h-root-2',
                        children: [
                            
                            {   
                                innerHTML: `รองปลัดกระทรวง (นักบริหาร ระดับสูง) = 4
                                    <br>ผู้ตรวจราชการกระทรวง (นักบริหาร ระดับสูง) = 6
                                    <br>ผู้ช่วยปลัดกระทรวง (นักบริหาร ระดับต้น) = 1
                                    <br>ที่ปรึกษาด้านกฎหมาย (นิติกร ชช, /กว.) = 1`,
                                HTMLclass: 'h-root h-root-3',
                                children: [ ],
                            },
                            
                            {   
                                innerHTML: `<div class="title">
                                        <div class="wrapper">
                                            กลุ่มตรวจสอบภายใน
                                        </div>
                                    </div>
                                    <div class="subtitle">
                                        <div class="wrapper">
                                            ผู้ตรวจสอบภายในกระทรวง <br>
                                            (นักวิชาการตรวจสอบภายใน ชพ.*)
                                        </div>
                                    </div>`,
                                HTMLclass: 'd-node',
                                children: [
                                    {   
                                        innerHTML: `<div class="title">
                                                <div class="wrapper">
                                                    กองกลาง
                                                </div>
                                            </div>
                                            <div class="subtitle">
                                                <div class="wrapper">
                                                    ผู้อำนวยการกอง <br>
                                                    (ผู้อำนวยการ ระดับต้น)
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <ul>
                                                    <li>กลุ่มอำนวยการและบริหารทั่วไป</li>
                                                    <li>กลุ่มพัสดุและอาคารสถานที่</li>
                                                    <li>กลุ่มการเงินและบัญชี</li>
                                                    <li>กลุ่มประชาสัมพันธ์</li>
                                                </ul>
                                            </div>`,
                                        HTMLclass: 'd-node',
                                        children: [
                                            {   
                                                innerHTML: `<div class="title">
                                                        <div class="wrapper">
                                                            กองกฏหมาย
                                                        </div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <div class="wrapper">
                                                            ผู้อำนวยการกอง <br>
                                                            (ผู้อำนวยการเฉพาะด้าน(นิติกร) 
                                                            ระดับต้น)
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>ฝ่ายบริหารทั่วไป</li>
                                                            <li>กลุ่มกฏหมายและระเบียบ</li>
                                                            <li>กลุ่มคดีและเปรียบเทียบปรับ</li>
                                                            <li>กลุ่มนิติกรรมสัญญา</li>
                                                            <li>กลุ่มวนัยและจริยธรรม</li>
                                                        </ul>
                                                    </div>`,
                                                HTMLclass: 'd-node',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="title">
                                                                <div class="wrapper">
                                                                    กองตรวจราชการ
                                                                </div>
                                                            </div>
                                                            <div class="subtitle">
                                                                <div class="wrapper">
                                                                    ผู้อำนวยการกอง <br>
                                                                    (ผู้อำนวยการ ระดับสูง)
                                                                </div>
                                                            </div>
                                                            <div class="desc">
                                                                <ul>
                                                                    <li>ฝ่ายบริหารทั่วไป</li>
                                                                    <li>กลุ่มสนับสนุนการตรวจราชการ 1</li>
                                                                    <li>กลุ่มสนับสนุนการตรวจราชการ 2</li>
                                                                    <li>กลุ่มวิเคราะห์และติดตามประเมินผล</li>
                                                                </ul>
                                                            </div>`,
                                                        HTMLclass: 'd-node',
                                                        children: [ ],
                                                    },
                                                ],
                                            },
                                        ],
                                    },
                                ],
                            },

                            {   
                                innerHTML: `<div class="title">
                                        <div class="wrapper">
                                            กลุ่มพัฒนาระบบบริหาร
                                        </div>
                                    </div>
                                    <div class="subtitle">
                                        <div class="wrapper">
                                            (นักวิเคราะห์นโยบายและแผน ชพ.*)
                                        </div>
                                    </div>`,
                                HTMLclass: 'd-node',
                                children: [
                                    {   
                                        innerHTML: `<div class="title">
                                                <div class="wrapper">
                                                    กองยุทธศาสตร์และแผนงาน
                                                </div>
                                            </div>
                                            <div class="subtitle">
                                                <div class="wrapper">
                                                    ผู้อำนวยการกอง <br>
                                                    (ผู้อำนวยการ ระดับสูง)
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <ul>
                                                    <li>ฝ่ายบริหารทั่วไป</li>
                                                    <li>กลุ่มความร่วมมือระหว่างประเทศ</li>
                                                    <li>กลุ่มแผนและงบประมาณ</li>
                                                    <li>กลุ่มพัฒนาโครงการพิเศษ</li>
                                                    <li>กลุ่มยุทธศาสตร์</li>
                                                </ul>
                                            </div>`,
                                        HTMLclass: 'd-node',
                                        children: [
                                            {   
                                                innerHTML: `<div class="title">
                                                        <div class="wrapper">
                                                            ศูนย์เทคโนโลยีสารสนเทศ <br>
                                                            และการสื่อสาร
                                                        </div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <div class="wrapper">
                                                            ผู้อำนวยการกอง <br>
                                                            (ผู้อำนวยการระดับสูง)
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>ฝ่ายบริหารทั่วไป</li>
                                                            <li>กลุ่มเครือข่ายสื่อสาร และระบบสารสนเทศ</li>
                                                            <li>กลุ่มนโยบายยุทธศาสตร์เทคโนโลยีสารสนเทศ</li>
                                                        </ul>
                                                    </div>`,
                                                HTMLclass: 'd-node',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="title">
                                                                <div class="wrapper">
                                                                    สำนักงานที่ปรึกษา <br>
                                                                    ด้านอุตสาหกรรมในต่างประเทศ
                                                                    <ol>
                                                                        <li>ณ กรุงโตเกียว ป.ญี่ปุ่น</li>
                                                                        <li>ณ กรุงเวียนนา สาธารณรัฐออสเตรีย</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                            <div class="subtitle">
                                                                <div class="wrapper">
                                                                    อัครราชทูตที่ปรึกษา (ผ่ายอุตสาหกรรม)
                                                                    <ol>
                                                                        <li>ผู้อำนวยการ ระดับต้น</li>
                                                                        <li>นักวิชาการอุตสาหกรรม ชพ.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>`,
                                                        HTMLclass: 'd-node',
                                                        children: [ ],
                                                    },
                                                ],
                                            },
                                        ],
                                    },
                                ],
                            },
                            
                            {   
                                innerHTML: `<div class="title">
                                        <div class="wrapper">
                                            ศูนย์ปฏิบัติการต่อต้าน <br>
                                            การทุจริต
                                        </div>
                                    </div>
                                    <div class="subtitle">
                                        <div class="wrapper">
                                            ผู้อำนวยการศูนย์ <br>
                                            นักวิเคราะห์นโยบายและแผน ชพ. <br>
                                            (มีคำสั่งให้ปฏิบัติหน้าที่ <br>
                                            ผู้อำนวยการศูนย์)
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <ul>
                                            <li>กลุ่มงานป้องกันและปราบปราม</li>
                                            <li>การทุจริตและประพฤติมิชอบ</li>
                                            <li>กลุ่มงานส่งเสริมและคุ้มครองจริยธรรม</li>
                                        </ul>
                                    </div>`,
                                HTMLclass: 'd-node',
                                children: [
                                    {   
                                        innerHTML: `<div class="title">
                                                <div class="wrapper">
                                                    สำนักงานอุตสาหกรรม <br>
                                                    จังหวัด 76 จังหวัด
                                                </div>
                                            </div>
                                            <div class="subtitle">
                                                <div class="wrapper">
                                                    อุตสาหกรรมจังหวัด <br>
                                                    (ผู้อำนวยการ ระดับสูง) = 75 <br>
                                                    อุตสาหกรรมจังหวัด <br>
                                                    (ผู้อำนวยการ ระดับต้น) = 1 <br>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <ul>
                                                    <li>กลุ่มนโยบายและแผนงาน</li>
                                                    <li>กลุ่มโรงงานอุตสาหกรรม</li>
                                                    <li>กลุ่มส่งเสริมและพัฒนาอุตสาหกรรม</li>
                                                    <li>กลุ่มอุตสหกรรมพื้นฐานและการเหมืองแร่</li>
                                                </ul>
                                            </div>`,
                                        HTMLclass: 'd-node',
                                        children: [
                                            {   
                                                innerHTML: `<div class="title">
                                                        <div class="wrapper">
                                                            กองบริหารทรัพยากรบุคคล
                                                        </div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <div class="wrapper">
                                                            ผู้อำนวยการกอง <br>
                                                            นักทรัพยากรบุคคล ชช.
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>ฝ่ายบริหารทั่วไป</li>
                                                            <li>กลุ่มบริหารทรัพยากรบุคคล</li>
                                                            <li>กลุ่มพัฒนาทรัพยากรบุคคล</li>
                                                        </ul>
                                                    </div>`,
                                                HTMLclass: 'd-node d-node-2',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="title">
                                                                <div class="wrapper">
                                                                    สำนักงานกองทุนพัฒนา <br>
                                                                    เอสเอ็มอีตามแนวประชารัฐ
                                                                </div>
                                                            </div>
                                                            <div class="subtitle">
                                                                <div class="wrapper">
                                                                    ผู้อำนวยการ <br>
                                                                    (มีคำสั่งมอบหมายให้ปฏิบัติ <br>
                                                                    อีกหน้าที่หนึ่ง)
                                                                </div>
                                                            </div>`,
                                                        HTMLclass: 'd-node d-node-2',
                                                        children: [
                                                            {   
                                                                innerHTML: `<div class="title">
                                                                        <div class="wrapper">
                                                                            กลุ่มขับเคลื่อนการปฏิรูป <br>
                                                                            ประเทศยุทธศาสตร์ชาติ <br>
                                                                            และการสร้างความสามัคคี <br>
                                                                            ปรองดอง
                                                                        </div>
                                                                    </div>
                                                                    <div class="subtitle">
                                                                        <div class="wrapper">
                                                                            หัวหน้ากลุ่ม <br>
                                                                            (มีคำสั่งมอบหมายให้ปฏิบัติ <br>
                                                                            อีกหน้าที่หนึ่ง)
                                                                        </div>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <ul>
                                                                            <li>ฝ่ายบริหารทั่วไป</li>
                                                                            <li>กลุ่มบริหารทัรพยากรบุคคล</li>
                                                                            <li>กลุ่มพัฒนาทัรพยากรบุคคล</li>
                                                                        </ul>
                                                                    </div>`,
                                                                HTMLclass: 'd-node d-node-2',
                                                                children: [ ],
                                                            },
                                                        ],
                                                    },
                                                ],
                                            },
                                        ],
                                    },
                                ],
                            },

                        ],
                    },

                ]
            }
        };
        var tree = new Treant(treeConfig);
    </script>
</body>
</html>
