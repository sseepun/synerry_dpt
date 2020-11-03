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
                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                    <div class="title">CEO</div>`,
                HTMLclass: 'm-node',
                children: [
                    
                    {   
                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                            <div class="title">CFO</div>`,
                        HTMLclass: 'm-node',
                        children: [
                            {   
                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                    <div class="title">Employee</div>`,
                                HTMLclass: 'm-node m-node-2',
                                children: [ 
                                    {   
                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                            <div class="title">Employee</div>`,
                                        HTMLclass: 'm-node m-node-2',
                                        children: [
                                            {   
                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                    <div class="title">Employee</div>`,
                                                HTMLclass: 'm-node m-node-2',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                            <div class="title">Employee</div>`,
                                                        HTMLclass: 'm-node m-node-2',
                                                        children: [
                                                            {   
                                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                                    <div class="title">Employee</div>`,
                                                                HTMLclass: 'm-node m-node-2',
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
                    
                    {   
                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                            <div class="title">VP Bus Dev</div>`,
                        HTMLclass: 'm-node',
                        children: [
                            {   
                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                    <div class="title">Employee</div>`,
                                HTMLclass: 'm-node m-node-2',
                                children: [ 
                                    {   
                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                            <div class="title">Employee</div>`,
                                        HTMLclass: 'm-node m-node-2',
                                        children: [
                                            {   
                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                    <div class="title">Employee</div>`,
                                                HTMLclass: 'm-node m-node-2',
                                                children: [ ],
                                            },
                                        ],
                                    },
                                ],
                            },
                        ],
                    },
                    
                    {   
                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                            <div class="title">VP Div A</div>`,
                        HTMLclass: 'm-node',
                        children: [
                            {   
                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                    <div class="title">Employee</div>`,
                                HTMLclass: 'm-node m-node-2',
                                children: [ 
                                    {   
                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                            <div class="title">Employee</div>`,
                                        HTMLclass: 'm-node m-node-2',
                                        children: [
                                            {   
                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                    <div class="title">Employee</div>`,
                                                HTMLclass: 'm-node m-node-2',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                            <div class="title">Employee</div>`,
                                                        HTMLclass: 'm-node m-node-2',
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
                    
                    {   
                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                            <div class="title">VP Div B</div>`,
                        HTMLclass: 'm-node',
                        children: [
                            {   
                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                    <div class="title">Employee</div>`,
                                HTMLclass: 'm-node m-node-2',
                                children: [ 
                                    {   
                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                            <div class="title">Employee</div>`,
                                        HTMLclass: 'm-node m-node-2',
                                        children: [
                                            {   
                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                    <div class="title">Employee</div>`,
                                                HTMLclass: 'm-node m-node-2',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                            <div class="title">Employee</div>`,
                                                        HTMLclass: 'm-node m-node-2',
                                                        children: [
                                                            {   
                                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                                    <div class="title">Employee</div>`,
                                                                HTMLclass: 'm-node m-node-2',
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
                    
                    {   
                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                            <div class="title">VP HR</div>`,
                        HTMLclass: 'm-node',
                        children: [
                            {   
                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                    <div class="title">Employee</div>`,
                                HTMLclass: 'm-node m-node-2',
                                children: [ 
                                    {   
                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                            <div class="title">Employee</div>`,
                                        HTMLclass: 'm-node m-node-2',
                                        children: [
                                            {   
                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                    <div class="title">Employee</div>`,
                                                HTMLclass: 'm-node m-node-2',
                                                children: [
                                                    {   
                                                        innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                            <div class="title">Employee</div>`,
                                                        HTMLclass: 'm-node m-node-2',
                                                        children: [
                                                            {   
                                                                innerHTML: `<div class="img-container" style="background-image:url('public/assets/app/images/hero/02.png');"></div>
                                                                    <div class="title">Employee</div>`,
                                                                HTMLclass: 'm-node m-node-2',
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
