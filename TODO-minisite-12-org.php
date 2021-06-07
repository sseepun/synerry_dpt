<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 1;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'แ',
            'title' => 'แผนผังองค์กร',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-04.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'แผนผังองค์กร', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
<style>
/* Org 02 */
.org-02{display:block; width:100%; overflow-x:auto; overflow-y:hidden;}
.org-02 > .wrapper{display:block; width:71.25rem; margin:0 auto;}

.org-02 .node{
    position:relative; display:block; width:100%; max-width:12rem; margin:.1875rem;
}
.org-02 .node > .text-container{text-align:center; padding:.75rem .5rem;}
.org-02 .node .title{width:100%; min-height:2.125rem;}
.org-02 .node.node-card{display:flex; max-width:20rem;}
.org-02 .node.node-card > .img-container{width:8rem;}
.org-02 .node.node-card > .text-container{
    width:calc(100% - 8rem); text-align:left; padding:.75rem;
    display:flex; align-items:center; flex-wrap:wrap;
}
.org-02 .node.node-slot > .img-container{display:none;}

.org-02 .node-row{
    width:100%; display:flex; justify-content:center;
    position:relative; padding:2.5rem 0 0 0;
}
.org-02 .node-row::before{
    content:''; position:absolute; top:-.1875rem; bottom:.1875rem;
    left:calc(50% - .0625rem); width:.125rem;
}
.org-02 .node-row.root::before{display:none;}
.org-02 .node-col{width:50%; display:flex;}
.org-02 .node-col.left{justify-content:flex-end; padding:0 .625rem 0 0;}
.org-02 .node-col.right{justify-content:flex-start; padding:0 0 0 .625rem;}
.org-02 .node-col .node::before{
    content:''; position:absolute; bottom:100%; left:calc(50% - .0625rem);
    width:.125rem; height:1.5rem;
}
.org-02 .node-col .node::after{
    content:''; position:absolute; bottom:calc(100% + 1.5rem);
    width:calc(100% + .375rem); height:.125rem;
}
.org-02 .node-col.left .node::after{left:calc(50% - .0625rem);}
.org-02 .node-col.right .node::after{right:calc(50% - .0625rem);}

.org-02 .node-tag{
    display:block; width:100%; max-width:19rem; padding:.625rem; text-align:center;
    font-size:1rem; font-weight:300;
}

/* Org 02 */
.org-02 .node{background:#e1e1e1; color:#000000;}
.org-02 .node h6{color:#993300;}
.org-02 .node.node-slot{background:#993300; color:#ffffff;}
.org-02 .node.node-slot h6{color:#ffffff;}
.org-02 .node.node-slot.color-green{background:#169f96;}
.org-02 .node-row::before, .org-02 .node-col .node::before,
.org-02 .node-col .node::after{background:#000000;}
.org-02 .node-tag{background:#000000; color:#ffffff;}
</style>
    <?php
        function treeNode($image, $name, $title, $classer=''){
            return '<a class="node '.$classer.'" href="#">'
                .'<div class="img-container">'
                    .'<div class="ss-img square no-hover">'
                        .'<div class="img-bg" style="background-image:url(\''.$image.'\');"></div>'
                    .'</div>'
                .'</div>'
                .'<div class="text-container">'
                    .'<div class="wrapper">'
                        .'<h6 class="p sm fw-500">'.$name.'</h6>'
                        .'<p class="title xxs fw-400">'.$title.'</p>'
                    .'</div>'
                .'</div>'
            .'</a>';
        }
    ?>
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container">

            <div class="org-02">
                <div class="wrapper">

                    <div class="node-row root">
                        <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                    </div>

                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                    </div>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                        </div>
                    </div>

                    <div class="node-row tag">
                        <div class="node-tag">
                            ผู้ตรวจราชการกรม
                        </div>
                    </div>
                    <?php for($j=0; $j<2; $j++){?>
                        <div class="node-row">
                            <div class="node-col left">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            </div>
                            <div class="node-col right">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง') ?>
                            </div>
                        </div>
                    <?php }?>
                    
                    <div class="node-row tag">
                        <div class="node-tag">
                            ราชการบริหารส่วนกลาง
                        </div>
                    </div>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-card') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-card') ?>
                        </div>
                    </div>
                    <?php for($j=0; $j<3; $j++){?>
                        <div class="node-row">
                            <div class="node-col left">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            </div>
                            <div class="node-col right">
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot') ?>
                                <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            </div>
                        </div>
                    <?php }?>
                    <div class="node-row">
                        <div class="node-col left">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                        </div>
                        <div class="node-col right">
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'กองออกแบบก่อสร้างพลับพลาพิธีและโครงการพิเศษ', 'node-slot color-green') ?>
                            <?= treeNode('public/assets/app/images/team/01.jpg', 'นายพรพจน์ เพ็ญพาส', 'อธิบดีกรมโยธาธิการและผังเมือง', 'node-slot color-green') ?>
                        </div>
                    </div>

                    <div class="node-row tag">
                        <div class="node-tag">
                            ราชการบริหารส่วนภูมิภาค
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
