<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />

    <style>
        /* Custom CSS */
        .img-container {
            position:relative; padding: 150% 0 0 0;
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.35);
            transition: all .4s;
        }
        .img-container .img-bg {position:absolute; top:0; left:0; bottom:0; right:0; background-position:center; background-size:cover; background-repeat: no-repeat; }
        .img-container .hover-container {
            position:absolute; top:0; left:0; bottom:0 ; right:0; opacity:0; pointer-events:none; transition: all .4s;
        } 


        /* Hover effect */
        .img-container .hover-container > .wrapper {position:relative; height:100%; padding: 2rem 1.5rem 1.5rem 1.5rem; background: rgba(255, 255, 255, 0.4);}
        .img-container:hover{
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
        }
        .img-container:hover .hover-container {
            opacity:1; pointer-events: auto;
        }
        .img-container .hover-container a:hover i{
            background:#cc74db;
        }

        /* End Hover effect */


        .img-container .hover-container a{margin: 1.5rem 1.25rem 0 0;}
        .img-container .hover-container a i{width:3rem; height:3rem; text-align:center; line-height: 3rem; font-size: 1.375rem; color:white; background:#63337d; transition: background .4s;}
        
        /* hover-container blocks */
        .img-container .hover-container .blocks {display:inline-block; position:absolute; bottom: 1rem; left:50%; transform: translateX(-50%); min-width:fit-content;}
        .img-container .hover-container .blocks .block {display:inline-block;}
        .img-container .hover-container .blocks .block:nth-child(2){
            border-left: 1px solid transparent; border-right: 1px solid transparent; 
            border-color:#63337d; padding: 0 .25rem;
        }
    
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container-banner color-white" data-aos="fade-up" data-aos-delay="0">
                <p class="font-01 text-sm">
                    เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                    ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                    ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
                </p>
            </div>
        </div>
    </div>


    <section style="padding:2rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
        
    </section>

    <section class="section-padding" style="background-color:#dcdcdc; background-image:url('public/assets/app/images/bg/32.jpg'); background-size:contain; background-position:top center; background-repeat:no-repeat;">
       <div class="header">
            <div class="container">
                <h3 class="text-center color-white">วารสารออนไลน์</h3>
            </div>
       </div>
       <div class="list-header jc-center mt-4 mb-4 pt-4 pb-4 bg-white">
            <div class="block">
                <div class="text-wrapper">
                    <div class="search-container">
                        <input type="text" name="search" placeholder="ค้นหา" />
                        <button type="submit" class="bg-color-02">
                            <i class="fas fa-search color-white"></i>
                            <!-- <img src="public/assets/app/images/icon/search.png" alt="Search icon" /> -->
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="grids">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="grid lg-25 md-50 sm-100" data-aos="fade-up" data-aos-delay="0">
                        <div class="img-container">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
                            <div class="hover-container">
                                <div class="wrapper">
                                    <p class="text-md mt-0">รายงานประจำปีสำนักงานปลัดกระทรวงอุตสาหกรรมประจำปีงบประาณ พ.ศ. 2562</p>
                                    <div class="d-flex ai-center jc-center">
                                        <a href="#"><i class="fas fa-search"></i></a>
                                        <a href="#"><i class="fas fa-arrow-down"></i></a>
                                    </div>
                                    <div class="blocks">
                                        <div class="block text-sm color-02">
                                            24-08-2563
                                        </div>
                                        <div class="block text-sm color-02">
                                            เปิดดู : 130
                                        </div>
                                        <div class="block text-sm color-02">
                                            80 หน้า
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                

                
            
            </div>
        
        
        </div>
    
    </section>
    
    

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
