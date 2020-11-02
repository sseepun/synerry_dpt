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
                <h2 class="fw-100 mb-0">RSS Feed</h2>
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
                            [ 'url' => '#', 'name' => 'RSS Feed' ],
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

                    <div class="grids mt-4">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="grid sm-100 border-bottom mt-0">
                                <div class="post-topic mt-0 pt-3 pb-2">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/rss.png" alt="RSS Icon" />
                                    </div>
                                    <div class="content">
                                        <div class="post-card">
                                            <div class="title-container height-auto">
                                                <a class="title h4" href="#">
                                                    สถาบันอาหาร จับมือ สภาหอการค้าแห่งประเทศไทย ลงนาม MOU 
                                                    ร่วมกันส่งเสริมการแปรรูปเพื่อเพิ่มมูลค่าสินค้า
                                                    เกษตรและอาหารด้วยนวัตกรรม
                                                </a>
                                            </div>
                                            <div class="d-flex ai-center stats mt-2">
                                                <div class="date fw-600">13.08.2563</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
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
