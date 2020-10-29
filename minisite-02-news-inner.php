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


        /* New Custom CSS only for this page */
        
        .img-container {
            position:relative;
        }
        .img-container .img-bg {
            position:absolute;
            top:3rem;
            left:0;
            right:0;
            bottom:0;
            background-position:center;
            background-size:cover;
            background-repeat: no-repeat;
            height:calc(100% - 3rem);
            margin:0 auto;
            width: calc(100% - 30px);
            
        }

        .wrapper {
            padding:1.25rem 1rem .75rem 1.25rem; 
            border-bottom: 1px solid #dfd8e9;
            box-shadow: 0px 0px 10px 5px rgba(0,0,0,.25);
            -webkit-box-shadow: 0px 0px 10px 5px rgba(0,0,0,.25);
            -moz-box-shaddow: 0px 0px 10px 5px rgba(0,0,0,.25);
        }
        .wrapper .header {
            border-bottom: 1px solid #e1e1e1;
        }


        .tag-container {display:flex; flex-wrap:wrap; align-items:center; justify-content: flex-start; margin-top:1rem;}
        .tag-container a { text-decoration:none; }
        .tag-container .tag-btn {
            display:block; margin:.5rem 1rem 0 0; padding:.5rem .75rem; color:#464446; border: 1px solid transparent; border-color: #dbd8d8; border-radius:.25rem;
            transition: all .4s;
        }
        /* Types */
        .tag-container .tag-btn.type-01::before{
            content: '# DIGITAL TRANSFORMATION FOR UPPER NORTHERN SME';
        }
        .tag-container .tag-btn.type-02::before {
            content: '# โครงการยกระดับการประกอบการ SME ภาคเหนือ';
        }
        .tag-container .tag-btn.type-03::before {
            content: '# SME ภาคเหนือ';
        }
        .tag-container .tag-btn.type-04::before {
            content: '# DIGITAL';
        }
        /* Hover */
        .tag-container .tag-btn:hover {
            background: #0081c5; color:#fff;
        }

        /* Icon */
        .icon-custom {width:3rem;height:3rem; font-size:1.5rem; text-align:center; line-height: 3rem; background:#0081c5; color:#fff;}
        
        /* video */
        .video-container{
            display:flex; flex-wrap:nowrap; width:100%; overflow-x:scroll; padding-bottom:.5rem;
        }
        /* Scrollbar */
        .video-container::-webkit-scrollbar {
            height: .5rem;
        }
        .video-container::-webkit-scrollbar-track{
            background:#e1e1e1;
        }
        .video-container::-webkit-scrollbar-thumb {
            background-color:#0081c5;
        }

        .mp4-wrapper{padding: 0 15px; width:100%;}
        .mp4-wrapper button {
            border:none; padding: .2rem 1rem;
        }


        /* Imported from block.css */
        /* Banner 01 */
        .banner-02{position:relative; width:100%;}
        .banner-02 > .slide-container{position:relative; width:100%; padding:0;}
        .banner-02 .slides .slick-list {margin: 0 5rem;}
        .banner-02 .slide{
            min-height:450px; display:flex; align-items:center; text-align:center; line-height:1;
            background-size:cover; background-position:center; background-repeat:no-repeat;
            padding:0;
        }
        .banner-02 .arrows{
            position:absolute; display:flex; justify-content:space-between; align-items:center;
            top:0; bottom:0; left:0; right:0; padding:0 1rem; pointer-events:none;
        }
        .banner-02 .arrows > .slick-prev, .banner-02 .arrows > .slick-next{
            display:block; width:2.5rem; height:2.5rem; pointer-events:auto; cursor:pointer; opacity:0;
            text-align:center; line-height:2.75rem; outline:none; font-size:0; background:transparent;
            box-shadow:none; border:0; transition:opacity .3s, transform .3s; 
        }
        .banner-02 .arrows > .slick-prev{transform:translateX(-.625rem);}
        .banner-02 .arrows > .slick-next{transform:translateX(.625rem);}
        .banner-02 .slide-container:hover .arrows > .slick-prev, 
        .banner-02 .slide-container:hover .arrows > .slick-next{
            opacity:.8; transform:translateX(0);
        }
        .banner-02 .arrows > .slick-prev:hover, .banner-02 .arrows > .slick-next:hover{opacity:1;}
        .banner-02 .arrows > .slick-prev::before, .banner-02 .arrows > .slick-next::before{
            font-family:'Font Awesome 5 Free'; font-weight:900; font-size:2.5rem;
        }
        .banner-02 .arrows > .slick-prev::before{content:'\f053';}
        .banner-02 .arrows > .slick-next::before{content:'\f054';}

        /* Import from minisite-01-neews */
        .post-card {
            transform: translate(0); transition: all ease-in-out .2s; width: calc(100% - 1.5rem); 
        }
        .post-card > .text-wrapper {padding: 0 .5rem 0 .75rem; 
        }
        .post-card .stat-info {padding: 0 .5rem 0 .75rem;}
        .post-card .btn-rb {margin-left: .5rem; text-decoration: none;  color: #fff; background: #502683; display:block; padding: .25rem .375rem .25rem .25rem; }
        .post-card:hover {
            transform: translate(-1rem, -1rem);
            -webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            -moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.5);
        }

        @media screen and (max-width: 575.98px){
            #letter-bg {display:none;}
            .img-container .img-bg {
                position:relative; display:block; top:0; height:20rem;
            }
        }
        /* max-width of img-bg is equal to container width - 30px (padding-left + padding-right) */
        @media screen and (min-width: 576px){
            .img-container .img-bg {
                max-width:510px;
            }
        }
        @media screen and (min-width: 768px){
            .img-container .img-bg {
                max-width:690px;
            }
        }
        @media screen and (min-width: 992px){
            .img-container .img-bg {
                max-width:930px;
            }
        }
        @media screen and (min-width: 1200px){
            .img-container .img-bg {
                max-width:1110px;
            }
        
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


    <section style="padding:3rem 0 1rem 0;">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                ];
                $dateTime = [
                    'date' => '',
                    'time' => ''
                ];
                include_once('component/breadcrumb-2.php');
            ?>
        </div>
        
    </section>
    <section class="section-padding" >
        <div class="img-container">
            <img style="width:100%; height:100%;" id="letter-bg" src="public/assets/app/images/bg/32.jpg" alt="">
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg')"></div>
        </div>

        <div class="container">
            
            <div class="wrapper">
                <div class="header">
                    <h3 class="fw-100">ร่วมติดตามการเข้าให้คำปรึกษาแนะนำของที่ปรึกษาโครงการแก่ผู้ประกอบการภายใต้โครงการยกระดับการประการ SME ภาคเหนือตอนบนด้วยเทคโนโลยี (DIGITAL TRANSFORMATION FOR UPPER NORTHERN SME)</h3>
                    <div class="d-flex fw-wrap jc-space-between ai-center mb-4">
                        <div class="stat-info font-01 fw-100 mt-2">
                            <div class="d-inlinec">
                                24-08-2563 | เปิดดู : 130
                            </div>

                        </div>
                        <div class="icons mt-2">
                            <img src="public/assets/app/images/social/fb.png" alt="social icon">
                            <img src="public/assets/app/images/social/tw.png" alt="social icon">
                            <img src="public/assets/app/images/social/ln.png" alt="social icon">
                            <img src="public/assets/app/images/social/link.png" alt="social icon">
                        </div>
                    </div>
                </div>
                <p class="fw-100">
                    ติวเตอร์อุรังคธาตุสเก็ตช์มอยส์เจอไรเซอร์แฮมเบอร์เกอร์ ซีเรียสอิกัวนาอีสต์เซฟตี้เห็นด้วย สี่แยกโครนาบลูเบอร์รี มัฟฟินสแตนเลสวิทย์พรีเมียร์อุปสงค์ ออร์แกนิค ติวสเกตช์โฮป ห่วยแคมเปญรูบิกอุปการคุณอมาตยาธิปไตย ออยล์สโตร์โพลล์กฤษณ์ไทยแลนด์ อุตสาหการอึมครึมมาร์เก็ตติ้ง แฮนด์สามช่าโปรเจ็ค เทียมทานคอนเฟิร์มเยลลี่เรซิ่นแก๊สโซฮอล์ โดนัทฮัลโหลบอยคอต รีสอร์ทราสเบอร์รีกาญจนาภิเษก พาวเวอร์ความหมายไอติมล้มเหลวบัตเตอร์ แพตเทิร์น ออร์แกนิคกราวนด์

                    ล้มเหลวฟรุตสปอต บอยคอตดีมานด์โค้กเฟิร์ม เนิร์สเซอรี่ โพลล์เอ็กซ์เพรสนอร์ท หยวนภควัมบดีฟีเวอร์เซี้ยวแครอท ฟินิกซ์บลูเบอร์รีอิเลียดสจ๊วต พรีเมียร์ เปโซอีสต์เที่ยงวันแดรี่ ด็อกเตอร์บึ้มเฝอวอลล์ โรแมนติกโอเปร่า อพาร์ทเมนท์สเตย์พลานุภาพ อิสรชนคอนโทรล บอกซ์โปรชิฟฟอนตัวเองซิมโฟนี่ วิภัชภาคพฤหัสธุรกรรมโปรโมชั่น โปรบาลานซ์สปิริตเยอร์บีร่าแจ็กพอต คีตปฏิภาณฮัม
                </p>
                <p class="fw-100">
                    ติวเตอร์อุรังคธาตุสเก็ตช์มอยส์เจอไรเซอร์แฮมเบอร์เกอร์ ซีเรียสอิกัวนาอีสต์เซฟตี้เห็นด้วย สี่แยกโครนาบลูเบอร์รี มัฟฟินสแตนเลสวิทย์พรีเมียร์อุปสงค์ ออร์แกนิค ติวสเกตช์โฮป ห่วยแคมเปญรูบิกอุปการคุณอมาตยาธิปไตย ออยล์สโตร์โพลล์กฤษณ์ไทยแลนด์ อุตสาหการอึมครึมมาร์เก็ตติ้ง แฮนด์สามช่าโปรเจ็ค เทียมทานคอนเฟิร์มเยลลี่เรซิ่นแก๊สโซฮอล์ โดนัทฮัลโหลบอยคอต รีสอร์ทราสเบอร์รีกาญจนาภิเษก พาวเวอร์ความหมายไอติมล้มเหลวบัตเตอร์ แพตเทิร์น ออร์แกนิคกราวนด์
                </p>
                <div class="tag-container">
                    <a class="tag-btn type-01" href="#"></a>
                    <a class="tag-btn type-02" href="#"></a>
                    <a class="tag-btn type-03" href="#"></a>
                    <a class="tag-btn type-04" href="#"></a>
                </div>
                <!-- Gallery -->
                <div class="row mt-2">
                    <div class="col-md-1 col-sm-2 mt-2">
                        <div class="icon-custom"><i class="fas fa-camera"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <div class="row">
                            <?php for($i=0; $i < 4; $i++){?>
                                <div class="col-md-3 col-sm-6 mt-2">
                                    <a class="ss-img bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-text <?php if($i==7)echo 'op-100'; ?>">
                                            <?php if($i<3){?>
                                                <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                            <?php }else{?>
                                                <p class="color-white text-center">
                                                    รูปภาพทั้งหมด <br>
                                                    <span class="text-xl fw-600">120</span> 
                                                    รูปภาพ
                                                </p>
                                            <?php }?>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="row mt-2">
                    <div class="col-md-1 col-sm-2 mt-2">
                        <div class="icon-custom"><i class="fas fa-play-circle"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <div class="row mt-2">
                            <div class="mp4-wrapper">
                                <form>
                                    <div class="d-flex ai-center jc-center fw-wrap" style="padding: 1.5rem 0; background:#e1e1e1;">
                                        <label class="font-01 text-md mr-2 mb-0">embed code</label>
                                        <input type="text" class="bradius-0">
                                        <button class="bg-color-02 color-white text-sm" href="#">Copy</button>
                                    </div>
                                </form>
                                <div class="ss-mp4 mt-2"  data-aos="fade-up" data-aos-delay="300">
                                    <div class="wrapper">
                                        <video controls>
                                            <source src="public/assets/app/video/01.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="video-container">
                                <?php for($i=0; $i < 8; $i++){?>
                                    <div class="col-md-3 col-sm-6 mt-2" data-aos="fade-up" data-aos-delay="300">
                                        <div class="ss-video bradius-0">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                            <div class="hover-container"></div>
                                            <div class="bottom-tag">
                                                <i class="far fa-clock"></i> 10:30
                                            </div>
                                            <div class="play-container">
                                                <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
                <!-- Download -->
                <div class="row mt-2">
                    <div class="col-md-1 col-sm-2 mt-2">
                        <div class="icon-custom"><i class="fas fa-arrow-down"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <div class="row">
                            <div class="table-wrapper" style="padding: 0 15px;" data-simplebar data-aos="fade-up" data-aos-delay="300">
                                <table class="table table-file">
                                    <tbody>
                                        <?php for($i=0; $i<3; $i++){?>
                                            <tr style="border-bottom: 1.5px solid #0081c5;">
                                                <td style="width:2rem !important;">
                                                    <div class="file-icon pdf"></div>
                                                    
                                                </td>
                                                <td class="text-left">
                                                    <a class="text-md" href="#">
                                                        เอกสารแนบที่ 203.pdf ขนาด 360 kb
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="list-header jc-center bg-white">
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
    <section class="section-padding">
        <div class="container" style="background: #dcdcdc;">
            <div class="banner-02 mt-4">
                <h3 class="text-center color-02 pt-4">ข่าวล่าสุด</h3>
                <div class="slide-container">
                    <div class="slides">
                        <?php for($i=0; $i< 8; $i++){?>

                            <div class="slide">
                                <div class="post-card bg-color-white">
                                    <a class="ss-img bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-container">
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        </div>
                                    </a>
                                    <div class="text-wrapper">
                                        <p class="desc font-01 fw-100 text-md">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ หลักสูตร "การยกระดับมาตรฐาน...
                                        </p>
                                    </div>
                                    <div class="d-flex fw-wrap ai-center jc-space-between">
                                        <div class="stat-info font-01 fw-100 mt-2">24-08-2563 | เปิดดู : 130</div>
                                        <a href="#" class="btn-rb mt-2">อ่านเพิ่ม</a>
                                    </div>
                                    
                                </div>
                            </div>

                        <?php }?>
                        
                    </div>
                    <div class="arrows"></div>
                </div>
            
            </div>
            
        
        </div>

    </section>



    


    <section class="call-02">
        <div class="container">
            <h1 class="text-center color-white mb-0" data-aos="fade-up" data-aos-delay="0">
                เรารับฟังความคิดเห็นของคุณ
            </h1>
            <h4 class="text-center color-white fw-300 mt-0 mb-0" data-aos="fade-up" data-aos-delay="150">
                เกี่ยวกับความรับผิดชอบของกระทรวงอุตสาหกรรม
            </h4>
            <div data-aos="fade-up" data-aos-delay="300">
                <img class="subject lazy-img" data-src="public/assets/app/images/hero/03.png" alt="Call 02" />
            </div>
            <form action="/" method="POST" data-aos="fade-up" data-aos-delay="600">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="สมัครรับข่าวสารกับกระทรวงอุตสาหกรรม" required />
                    <div class="input-group-append">
                        <button class="btn custom-btn-warning" type="submit">
                            สมัครรับข่าว
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="call-container mt-5" style="background-image:url('public/assets/app/images/bg/20.jpg');">
            <div class="container" data-aos="fade-up" data-aos-delay="0">
                <div class="call-text text-center title">
                    ปฏิรูปอุตสาหกรรมสู่ 4.0
                </div>
                <div class="call-text text-center desc">
                    เพิ่มมูลค่าเศรษฐกิจอุตสาหกรรมของไทยให้เติบโตไม่น้อยกว่าร้อยละ 4.5
                </div>
                <div class="call-text text-center desc desc-lg">
                    ภายในปี พ.ศ.2564
                </div>
                <div class="slide-container mt-5">
                    <div class="slides">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="slide">
                                <div class="wrapper">
                                    <div class="client lazy-bg" data-src="public/assets/app/images/client/01.jpg"></div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>
        var banner02 = $('.banner-02');
        if(banner02.length){

            banner02.each(function(){
                var self=  $(this),
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 3, 
                    focusOnSelect: true, autoplay: false,
                    arrows: true, appendArrows: self.find('.arrows'),
                    responsive: [
                        {
                            breakpoint: 991.98,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 767.98,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                    ]
                };

                console.log(self);

                self.find('.slides').slick(options);

            });
        }
    
    </script>
</body>
</html>
