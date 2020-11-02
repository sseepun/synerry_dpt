<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>



    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง</h2>
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
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรางอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>
                    
                    <div class="list-header">
                        <div class="block">
                            <div class="text-wrapper">
                                <div class="search-container">
                                    <input type="text" name="search" placeholder="ค้นหา" />
                                    <button type="submit">
                                        <img src="public/assets/app/images/icon/search.png" alt="Search icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="text-wrapper">
                                <div class="select-wrapper">
                                    <select class="category">
                                        <option value="" disabled selected>แบ่งตามหมวดหมู่</option>
                                        <option value="newest">แบ่งตามหมวดหมู่</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grids py-3">
                        <?php 
                            for($i=0; $i<2; $i++){
                                foreach([
                                    'สำนักงานปลัด<br>กระทรวงอุตสาหกรรม',
                                    'กรมอุตสาหกรรมพื้นฐาน<br>และการเหมืองแร่ (กพร.)',
                                    'กรมโรงงานอุตสาหกรรม',
                                    'กรมส่งเสริมอุตสาหกรรม',
                                    'สำนักงานเศรษฐกิจ<br>อุตสาหกรรม',
                                    'การนิคมอุตสาหกรรม<br>แห่งประเทศไทย',
                                    'สถาบันไทย-เยอรมัน',
                                    'สถาบันยานยนต์',
                                ] as $j=>$d){
                        ?>
                            <div class="grid xl-25 lg-1-3 md-1-3 sm-50">
                                <a class="weblink" href="#">
                                    <div class="wrapper">
                                        <div class="img-container">
                                            <img src="public/assets/app/images/weblink/0<?= $j+1 ?>.png" alt="Weblink" />
                                        </div>
                                        <p><?= $d ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php }}?>
                    </div>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
