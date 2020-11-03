<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/treant-js-1.0/Treant.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-treant.css" />
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>

    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'เกี่ยวกับสำนักงาน' ],
                    ['url' => '#', 'name' => 'โครงสร้างองค์กร'],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <h3 class="color-09 fw-300 mb-0">
                    โครงสร้างองค์กร
                </h3>
                <p class="fw-600 mt-1 op-40">
                    ORGANIZATION CHART
                </p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="600">
                <div class="tree" id="tree"></div>
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
                nodeAlign: 'BOTTOM',
                connectors: { type: 'step' },
            },
            nodeStructure: {
                text: { name: 'กระทรวงอุตสาหกรรม' },
                HTMLclass: 'm-root',
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
</body>
</html>
