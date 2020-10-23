<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/treant-js-1.0/Treant.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-treant.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
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
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
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
                    <div class="tree mt-4" id="tree-2"></div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
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
                text: { name: 'กระทรวงอุตสาหกรรม' },
                HTMLclass: 'root',
                children: [
                    
                    {   
                        text: { name: 'สำนักรัฐมนตรี' },
                        HTMLclass: 'node-1',
                        children: [ ],
                    },
                    
                    {   
                        text: { name: 'สำนักงานปลัดกระทรวงอุตสาหกรรม' },
                        HTMLclass: 'node-1',
                        children: [ ],
                    },

                    {   
                        text: { name: 'กลุ่มภารกิจด้านเศรษฐกิจอุตสาหกรรม' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text: { name: 'สำนักงานเศรษฐกิจอุตสาหกรรม' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text: { name: 'สำนักงานคณะกรรมการอ้อยและน้ำตาลทราย' },
                                        HTMLclass: 'node-2',
                                        children: [ ],
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text: { name: 'กลุ่มภารกิจด้านกำกับตรวจสอบกระบวนการผลิต' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text: { name: 'กรมโรงงานอุตสาหกรรม' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text: { name: 'กรมอุตสาหกรรมพื้นฐานและการเหมืองแร่' },
                                        HTMLclass: 'node-2',
                                        children: [ ],
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text: { name: 'กลุ่มภารกิจด้านส่งเสริมอุตสาหกรรมและผู้ประกอบการ' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text: { name: 'กรมส่งเสริมอุตสาหกรรม' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text: { name: 'สำนักงานมาตรฐานผลิตภัณฑ์อุตสาหกรรม' },
                                        HTMLclass: 'node-2',
                                        children: [ ],
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text: { name: 'รัฐวิสาหกิจ' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text: { name: 'การนิคมอุตสาหกรรมแห่งประเทศไทย' },
                                HTMLclass: 'node-2',
                                children: [ ],
                            }
                        ]
                    },

                ]
            }
        };
        var tree = new Treant(treeConfig);
    </script>
    <script>
        var treeConfig2 = {
            chart: {
                container: '#tree-2',
                nodeAlign: 'BOTTOM',
                connectors: { type: 'step' },
            },
            nodeStructure: {
                text: { name: 'สถาบันเครือข่าย' },
                HTMLclass: 'root root-2',
                children: [
                    
                    {   
                        text: { name: 'สถาบันไทย-เยอรมัน' },
                        HTMLclass: 'node-3',
                        children: [
                            {   
                                text: { name: 'สถาบันเพิ่มผลผลิตแห่งชาติ' },
                                HTMLclass: 'node-3',
                                children: [
                                    {   
                                        text: { name: 'สถาบันอาหาร' },
                                        HTMLclass: 'node-3',
                                        children: [
                                            {   
                                                text: { name: 'สถาบันพัฒนาอุตสาหกรรมสิ่งทอ' },
                                                HTMLclass: 'node-3',
                                                children: [
                                                    
                                                ],
                                            },  
                                        ],
                                    },  
                                ],
                            }, 
                        ],
                    },
                    
                    {   
                        text: { name: 'สถาบันรองรับมาตรฐานไอเอสโอ' },
                        HTMLclass: 'node-3',
                        children: [
                            {   
                                text: { name: 'สถาบันไฟฟ้าและอิเล็กทรอนิกส์' },
                                HTMLclass: 'node-3',
                                children: [
                                    {   
                                        text: { name: 'สถาบันแหล็กและเหล็กกล้าแห่งประเทศไทย' },
                                        HTMLclass: 'node-3',
                                        children: [
                                            {   
                                                text: { name: 'สถาบันพัฒนาวิสาหกิจขนาดกลางและขนาดย่อม' },
                                                HTMLclass: 'node-3',
                                                children: [
                                                    {   
                                                        text: { name: 'หน่วยงานที่ดูแลร่วมกับกระทรวงการคลัง' },
                                                        HTMLclass: 'node-3',
                                                        children: [
                                                            {   
                                                                text: { name: 'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย' },
                                                                HTMLclass: 'node-3',
                                                                children: [
                                                                    
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
                        ],
                    },
                    
                    {   
                        text: { name: 'สถาบันพลาสติก' },
                        HTMLclass: 'node-3',
                        children: [
                            {   
                                text: { name: 'สถาบันการก่อสร้างแห่งประเทศไทย' },
                                HTMLclass: 'node-3',
                                children: [
                                    {   
                                        text: { name: 'สถาบันยานยนต์' },
                                        HTMLclass: 'node-3',
                                        children: [ ],
                                    },  
                                ],
                            }, 
                        ],
                    },

                ]
            }
        };
        var tree2 = new Treant(treeConfig2);
    </script>
</body>
</html>
