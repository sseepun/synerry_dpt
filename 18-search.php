<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ผลการค้นหา' ],
        ];
        $breadcrumbTitle = 'ผลการค้นหา';
        $breadcrumbBg = 'public/assets/app/images/bg/20.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">

            <h6 class="sm color-black" data-aos="fade-up" data-aos-delay="300">
                <span class="h6 fw-600 color-p mr-2">“พลังงานสะอาด”</span>
                <span class="p lg fw-400">ผลลัพธ์การค้นหา</span> 
                <span class="fw-600 color-p">28 รายการ</span>
            </h6>

            <div class="mt-2" data-aos="fade-up" data-aos-delay="450">
                <div class="list-header list-header-search">
                    <div class="block" style="min-width:20rem;">
                        <div class="search-wrapper width-full" style="max-width:21.5rem!important;">
                            <input type="text" class="width-full" placeholder="ค้นหา" />
                        </div>
                    </div>
                    <div class="block">
                        <span class="p sm">ช่วงเวลา</span>
                        <div class="date-wrapper">
                            <input type="text" class="date-picker form-control" required title="General Text Input" />
                        </div> -
                        <div class="date-wrapper">
                            <input type="text" class="date-picker form-control" required title="General Text Input" />
                        </div>
                    </div>
                    <div class="block">
                        <div class="select-wrapper">
                            <select title="General Select">
                                <option value="">เรียงลำดับข้อมูล</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h6 class="p lg fw-600 mt-3">ประเภทข้อมูล</h6>
                <fieldset>
                    <?php $k = 0; ?>
                    <div class="gallery-grids">
                        <?php
                            foreach([
                                'วารสารออนไลน์', 'ข่าวรับสมัครบุคลากร', 'การเปิดเผยราคากลาง',
                                'วารสารออนไลน์', 'ข่าวประชาสัมพันธ์', 'ข่าวการจัดซื้อจัดจ้าง',
                                'แผน-ผลการจัดซื้อจัดจ้าง', 'ข่าวประชาสัมพันธ์'
                            ] as $i=>$d){
                        ?>
                            <div class="grid md-25 sm-50 mt-0">
                                <div class="form-check sm px-0 mt-1">
                                    <input type="checkbox" name="c_<?= $k ?>[]" id="c_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" title="General Radio Input" />
                                    <label for="c_<?= $k ?>_<?= $i ?>" class="color-gray pl-1"><?= $d ?></label>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </fieldset>
            </div>

            <div class="mt-4" data-aos="fade-up" data-aos-delay="600">
                <?php for($i=0; $i<12; $i++){?>
                    <div class="ss-card ss-card-08 bradius-round ovf-hidden">
                        <div class="img-container bradius-round ovf-hidden">
                            <a class="ss-img adaptive-list" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-container">
                            <div class="text-content">
                                <a class="title p md fw-600" href="#">
                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                </a>
                                <p class="xs desc mt-2">
                                    กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                    (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                    HR Forum 2020, Big Data
                                </p>
                                <div class="btns mt-3">
                                    <a class="btn btn-action btn-color-t btn-xs" href="#">
                                        รายละเอียดเพิ่มเติม
                                    </a>
                                </div>
                            </div>
                            <div class="info-content">
                                <p class="fw-600">ประเภท</p>
                                <p class="xs fw-600">แผน-ผลการจัดซื้อจัดจ้าง</p>
                                <p class="text-icon xs fw-600 mt-2">
                                    <em class="far fa-calendar-alt mr-1"></em> 8 มกราคม 2020
                                </p>
                                <p class="text-icon xs fw-600">
                                    <em class="far fa-eye mr-1"></em> 8 มกราคม 2020
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

            <div data-aos="fade-up" data-aos-delay="0">
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
