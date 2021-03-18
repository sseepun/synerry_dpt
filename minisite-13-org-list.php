<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/treant-js-1.0/Treant.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-treant.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'โครงสร้างองค์กร' ],
        ];
        $breadcrumbTitle = 'โครงสร้างองค์กร';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow xl"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab" href="#">ผู้บริหารระดับสูง</a>
                                    <a class="tab active" href="#">โครงสร้างองค์กร</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <h6 class="h5 sm fw-600 color-01 mt-2">
                                โครงสร้างองค์กร
                            </h6>
                            <div class="mt-3 pb-4">
                                <div class="tree" id="tree"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    
    <script src="public/assets/lib/treant-js-1.0/vendor/raphael.js"></script>
    <script src="public/assets/lib/treant-js-1.0/Treant.js"></script>
    <script>
        var treeConfig = {
            chart: {
                container: '#tree',
                siblingSeparation: 15,
                levelSeparation: 15,
                subTeeSeparation: 15,
                subTeeSeparation: 10,
                connectors: {
                    type: 'step',
                    stackIndent: 20
                },
                nodeAlign: 'BOTTOM',
            },
            nodeStructure: {
                HTMLclass: 'root',
                innerHTML: `
                    <div class="header-wrapper">
                        <div class="icon">
                            <img src="public/assets/app/images/logo-text-square.png" alt="Tree Root Icon" />
                        </div>
                        <div class="text-container">
                            <h6 class="p fw-300 lh-xs color-black">สำนักงานพลังงาน</h6>
                            <p class="h5 sm fw-400 lh-xs color-01">สุราษฎร์ธานี</p>
                        </div>
                    </div>
                    <div class="node-container">
                        <div class="wrapper">
                            สำนักงานปลัด<br>กระทรวงพลังงาน
                        </div>
                    </div>
                `,
                children: [

                    {
                        HTMLclass: 'node-empty',
                        pseudo: true,
                        stackChildren: true,
                        children: [
                            {
                                HTMLclass: 'node-1',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            กลุ่มพัฒนา<br>ระบบบริหาร
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-1',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            กลุ่มตรวจสอบ<br>ภายใน
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-1',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            ศูนย์ปฏิบัติการ<br>ต่อต้านการทุจริต
                                        </div>
                                    </div>
                                `
                            }
                        ]
                    },

                    {
                        HTMLclass: 'node-empty',
                        pseudo: true,
                        stackChildren: true,
                        children: [
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            สำนักบริหารกลาง
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            สำนักนโยบายและ<br>ยุทธศาสตร์
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            ศูนย์เทคโนโลยีสารสนเทศ<br>และการสื่อสาร
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            สำนักงานความร่วมมือ<br>ระหว่างประเทศ
                                        </div>
                                    </div>
                                `
                            }
                        ]
                    },

                    {
                        HTMLclass: 'node-empty',
                        pseudo: true,
                        stackChildren: true,
                        children: [
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            กองตรวจและ<br>ประเมินผล
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            กองศึกษาและประสานงาน<br>พลังงานนิวเคลียร์
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            สำนักส่งเสริมการมี<br>ส่วนร่วมของประชาชน
                                        </div>
                                    </div>
                                `
                            },
                            {
                                HTMLclass: 'node-2',
                                innerHTML: `
                                    <div class="node-container">
                                        <div class="wrapper">
                                            สำนักงานพลังงาน<br>จังหวัด(76 จังหวัด)
                                        </div>
                                    </div>
                                `
                            }
                        ]
                    },

                ]
            }
        };
        var tree = new Treant(treeConfig);
    </script>
</body>
</html>
