<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">ปฏิทินกิจกรรม</h2>
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
                            [ 'url' => '#', 'name' => 'ปฏิทินกิจกรรม' ],
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
                                <div class="date-selectors">
                                    <div class="date-selector">
                                        <label>ตั้งแต่</label>
                                        <input type="text" class="date-picker" />
                                        <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    <div class="date-selector">
                                        <label>ถึง</label>
                                        <input type="text" class="date-picker" />
                                        <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
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

                    <div class="month-selector">
                        <a class="arrow arrow-prev color-dark" href="#">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <h1 class="month color-09">กรกฎาคม 2563</h1>
                        <a class="arrow arrow-next color-dark" href="#">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>

                    <div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<9; $i++){?>
                            <div class="col-md-4 col-sm-6 mt-4">
                                <div class="post-card post-card-08 pb-2">
                                    <a class="ss-img square bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="hover-container">
                                            <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                        </div>
                                    </a>
                                    <div class="date-tag">
                                        <div class="date">9</div>
                                        <p>กรกฎาคม <span class="fw-600">2563</span></p>
                                    </div>
                                    <div class="wrapper">
                                        <div class="title-container height-auto">
                                            <a class="title h4" href="#">
                                                ภัยคุกคามไซเบอร์กับวิถีชีวิตรูปแบบใหม่ Cyber Threats 
                                                in New Normal
                                            </a>
                                        </div>
                                        <div class="stats mt-2">
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                                <span class="color-black fw-500">
                                                    5-8 กรกฎาคม 2563
                                                </span>
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="far fa-clock"></i></div>
                                                <span class="color-black fw-500">
                                                    11:00 - 19:00 น
                                                </span>
                                            </div>
                                            <div class="d-flex view">
                                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                                <span class="color-black fw-500">
                                                    thaibfconference.com
                                                </span>
                                            </div>
                                        </div>
                                        <div class="btns mt-3">
                                            <a class="btn-action btn-action-primary" href="#">
                                                <i class="fas fa-chevron-right"></i>
                                                อ่านรายละเอียด
                                            </a>
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

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
