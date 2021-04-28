<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php
        $topnavClass = 'clear';
        include_once('include/topnav.php');
    ?>

    <?php
        $breadcrumb = [
            'leading' => 'ค้',
            'leading_class' => 'stripe-bottom',
            'title' => 'นหาข้อมูล',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-05.jpg',
            'show_search' => true,
            // 'search_keywords' => [
            //     [ 'url' => '#', 'name' => 'รายการวิดีโอ' ],
            //     [ 'url' => '#', 'name' => 'เขื่อนป้องกัน' ],
            //     [ 'url' => '#', 'name' => 'มาตรฐาน' ]
            // ],
            'structure' => [
                [ 'name' => 'ค้นหาข้อมูล', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <section class="section-01 xl-bottom">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-05.jpg');"></div>
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-shadow xl"></div>
                <div class="header bg-01">
                    <h6 class="p lg fw-500 color-03">
                        ค้นหาข้อมูล
                    </h6>
                </div>
                <div class="body border-3 bcolor-01 pt-0 pb-4">
                    <form action="/" method="GET">
                        <div class="grids">
                            <div class="grid lg-30 md-50 sm-100">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">เลือกเช่วงเวลา</span>
                                    </label>
                                    <div class="input-fit">
                                        <div class="append">
                                            <input type="text" class="date-picker fgray" />
                                            <div class="icon lg bg-gray">
                                                <em class="far fa-calendar-alt"></em>
                                            </div>
                                        </div>
                                        <div class="h6 fw-600 px-2">-</div>
                                        <div class="append">
                                            <input type="text" class="date-picker fgray" />
                                            <div class="icon lg bg-gray">
                                                <em class="far fa-calendar-alt"></em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg-30 md-50 sm-100">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">การเรียงลำดับ</span>
                                    </label>
                                    <fieldset>
                                        <div class="gallery-grids">
                                            <?php
                                                foreach([
                                                    'ใหม่ล่าสุด', 'เก่าไปใหม่', 'จำนวนการเข้าชม', 'ที่เกี่ยวข้อง'
                                                ] as $i=>$d){
                                            ?>
                                                <div class="grid md-50 sm-1-3 xs-50">
                                                    <div class="checkbox-set">
                                                        <input type="radio" name="radio" id="radio_<?= $i ?>" <?php if($i==0)echo 'checked'; ?> />
                                                        <label for="radio_<?= $i ?>" class="p sm">
                                                            <span class="font-01"><?= $d ?></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="grid lg-40 sm-100">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">ประเภทข้อมูล</span>
                                    </label>
                                    <fieldset>
                                        <div class="gallery-grids">
                                            <?php
                                                foreach([
                                                    'ข่าวประชาสัมพันธ์', 'ถามตอบ', 'คลังภาพ', 'รายการวิดีโอ', 'ไฟล์เอกสาร',
                                                    'ข้อมูลเผยแพร่', 'เนื้อหาเว็บไซต์', 'เมนู', 'เว็บไซต์ย่อย'
                                                ] as $i=>$d){
                                            ?>
                                                <div class="grid xl-1-3 lg-50 md-25 sm-1-3 xs-50">
                                                    <div class="checkbox-set">
                                                        <input type="checkbox" name="checkbox[]" id="checkbox_<?= $i ?>" <?php if($i<2)echo 'checked'; ?> />
                                                        <label for="checkbox_<?= $i ?>" class="p sm">
                                                            <span class="font-01"><?= $d ?></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="btns text-center mt-4">
                            <button type="submit" class="btn btn-action btn-color-05 clip-path-01 mr-1">
                                <span class="px-1">
                                    ค้นหาข้อมูล <em class="fas fa-chevron-right sm ml-2"></em>
                                </span>
                            </button>
                            <button type="reset" class="btn btn-action btn-color-06 clip-path-01">
                                <span class="px-1">
                                    ล้างข้อมูล <em class="fas fa-times sm ml-2"></em>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="pt-3 mt-4" data-aos="fade-up" data-aos-delay="450">
                <h6 class="h5 sm fw-600">“แผนผังที่ดิน”</h6>
                <p>ผลลัพธ์การค้นหา <span class="fw-600 text-xl">28</span> รายการ</p>
            </div>

            <div class="grids" data-aos="fade-up" data-aos-delay="0">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="grid sm-100">
                        <div class="ss-card ss-card-05">
                            <div class="info-container">
                                <p class="sm fw-200">ประเภท</p>
                                <p class="xs fw-100">ข่าวประชาสัมพันธ์</p>
                                <p class="xxs fw-300 color-01 mt-2">11 มีนาคม 2564</p>
                                <table class="table-stat mt-1">
                                    <tbody>
                                        <tr>
                                            <td><img src="public/assets/app/images/icon/book-yellow.png" alt="Image Icon" /></td>
                                            <td><p class="sm fw-300">168</p></td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/assets/app/images/icon/checkout-yellow.png" alt="Image Icon" /></td>
                                            <td><p class="sm fw-300">12</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-container">
                                <div class="card-header">
                                    <a class="title p lg fw-400 color-09 h-color-01" href="#">
                                        มท.3 สั่งการกรมโยธาฯ เร่งดำเนินโครงการก่อสร้าง เขื่อนป้องกันตลิ่งริมคลองสินปุน 
                                        จ.กระบี่ บรรเทาความเดือดร้อนประชาชน
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="desc sm">
                                        <span class="font-01">
                                            นายทรงศักดิ์ ทองศรี รัฐมนตรีช่วยว่าการกระทรวงมหาดไทย (มท.3) 
                                            ลงพื้นที่จังหวัดกระบี่ เพื่อตรวจติดตามความก้าวหน้าโครงการก่อสร้างเขื่อนป้องกันตลิ่งริมคลองสินปุน 
                                            พร้อมปรับปรุงภูมิทัศน์ หมู่ที่ 4 ตำบลลำทับ อำเภอลำทับ จังหวัดกระบี่ พร้อมสั่งการให้กรมโยธาธิการและผังเมือง 
                                            เร่งดำเนินโครงการฯ เพื่อบรรเทาความเดือดร้อนของพี่น้องประชาชนริมคลองสินปุน ส่งเสริมเศรษฐกิจชุมชน 
                                            ยกระดับคุณภาพชีวิตประชาชนให้ดียิ่งขึ้น
                                        </span>
                                    </p>
                                    <p class="more xs fw-300">
                                        เมนู - ข่าวประชาสัมพันธ์
                                    </p>
                                </div>
                            </div>
                            <div class="img-container">
                                <a class="ss-img adaptive" href="#">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/search-0<?= $i%6+1 ?>.jpg');"></div>
                                    <div class="hover-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

            <div class="pt-2 border-top bcolor-sgray" data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
