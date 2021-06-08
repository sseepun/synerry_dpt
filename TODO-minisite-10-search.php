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
            'leading' => 'ค้',
            'title' => 'นหาข้อมูล',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-12.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ค้นหาข้อมูล', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container mt-5">
            <h5 class="h5"> <span class="color-12 fw-600">พลังงานสะอาด"</span> ผลลัพธ์การค้นหา <span class="color-12 fw-600">28 รายการ</span></h5>
            <div class="grids">
                <div class="grid xl-40 lg-25"> <!--search-->
                    <div class="form-group">
                        <div class="append">
                            <input type="text" placeholder="ค้นหา" required />
                            <button type="submit" class="icon icon-color2">
                                <em class="fas fa-search"></em>
                            </button>
                        </div>
                    </div>
                </div> 
                <div class="grid xl-40 lg-50"> <!--date-->
                    <div class="form-group">
                        <div class="input-fit">
                            <p class="ws-nowrap mr-2">ช่วงเวลา</p>
                            <div class="prepend">
                                <input type="text" class="date-picker fgray" />
                                <div class="icon icon-color2">
                                    <em class="far fa-calendar-alt"></em>
                                </div>
                            </div>
                            <div class="h6 fw-600 px-2">-</div>
                            <div class="prepend">
                                <input type="text" class="date-picker fgray" />
                                <div class="icon icon-color2">
                                    <em class="far fa-calendar-alt"></em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="grid xl-20 lg-25">
                    <div class="form-group">
                        <div class="select-wrapper">
                            <select name="department" required title="General Select">
                                <option value="">เรียงลำดับข้อมูล</option>
                                <option value="">b</option>
                                <option value="">c</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <p class="p lg fw-500 mt-4">ประเภทข้อมูล</p>
            <div class="d-flex fw-wrap ws-nowrap">
                <?php $a=array("ข่าว","อัลบั้มภาพ","วิดีโอ","ถาม-ตอบ","ไฟล์เอกสาร","ข้อมูลเว็บไซต์");
                foreach ($a as $value) { ?>
                    <div style="width:25%">
                        <div class="form-group">
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01"><?= $value ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="d-block mt-3">
                <a class="btn btn-action btn-color-011" href="#">
                    <em class="far fa-times mr-1"></em> ล้างข้อมูล
                </a>
            </div>
        </div>
        <div class="container mt-4">
            <div class="grids">
                <div class="grid xl-25 lg-30 md-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="pop-qus">
                        <h6 class="head h6 sm fw-100 bg-12 color-white">คำถามยอดนิยม</h6>
                        <div class="week-month">

                            <a class="btn btn-action btn-color-09" href="#">รายสัปดาห์</a>
                            <a class="btn btn-action btn-color-010" href="#">รายเดือน</a>
                        </div>
            
                        <div class="list bcolor-white">1. เราไม่ทิ้งกัน</div>
                        <div class="list bcolor-white">2. คนละครึ่ง</div>
                        <div class="list bcolor-white">3. โควิท-19</div>
                        <div class="list bcolor-white">4. DLTV</div>
                        <div class="list bcolor-white">5. เยียวยาเกษตรกร</div>
                        <div class="list bcolor-white">6. เราเที่ยวด้วยกัน</div>
                        <div class="list bcolor-white">7. US Election 2020</div>
                        <div class="list bcolor-white">8. ร้อยเลห์มารยา</div>
                        <div class="list bcolor-white">9. ลงทะเบียนรับเงินค่าไฟฟ้า</div>
                        <div class="list bcolor-white">10. สมัครสอบ กพ.</div>
                
                    </div>
                    
                </div>
                <div class="grid xl-75 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <div class="gallery-grids">
                        <?php $searchArray = [['type'=>'news','pic'=>'public/assets/app/images/content/minisite-search-01.jpg','icon'=>'<em class="far fa-list-alt"></em>'],
                                              ['type'=>'photo','pic'=>'public/assets/app/images/content/minisite-search-02.jpg','icon'=>'<em class="far fa-images"></em>'],
                                              ['type'=>'VDO','pic'=>'public/assets/app/images/content/minisite-search-03.jpg','icon'=>'<em class="far fa-play-circle"></em>'],
                                              ['type'=>'QA','pic'=>'public/assets/app/images/content/minisite-search-04.jpg','icon'=>'<em class="far fa-comment-dots"></em>'],
                                              ['type'=>'RAR','pic'=>'public/assets/app/images/content/minisite-search-05.jpg','icon'=>null],
                                              ['type'=>'DOC','pic'=>'public/assets/app/images/content/minisite-search-06.jpg','icon'=>null],
                                              ['type'=>'PPT','pic'=>'public/assets/app/images/content/minisite-search-07.jpg','icon'=>null],
                                              ['type'=>'XLS','pic'=>'public/assets/app/images/content/minisite-search-08.jpg','icon'=>null],
                                              ['type'=>'PDF','pic'=>'public/assets/app/images/content/minisite-search-09.jpg','icon'=>null],
                                              ['type'=>'ZIP','pic'=>'public/assets/app/images/content/minisite-search-10.jpg','icon'=>null],
                                              ['type'=>'WebLink','pic'=>'public/assets/app/images/content/minisite-search-11.jpg','icon'=>null]
                        ]; 
                        foreach($searchArray as $key=>$row){ ?>
                            <div class="grid all-100">
                                <div class="ss-card ss-card-09">
                                    <div class="img-container">
                                        <a class="ss-img adaptive-xs" href="#">
                                            <div class="img-bg" style="background-image:url(<?= $row['pic'] ?>);"></div>                  
                                            <?php if (isset($row['icon'])){?>            
                                                <div class="minisite-tag-counts">
                                                    <div class="tag-count">
                                                        <?= $row['icon'] ?>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        
                                        </a>
                                    </div>
                                    <div class="text-container bg-hgray p-4 d-flex">
                                        <?php if($row['type']=="QA") {?>
                                            <div class="QA">
                                                <div class="color-white bg-01 p-2">Q</div>
                                                <div class="color-white bg-12 p-2">A</div>
                                            </div>
                                        <?php } ?>
                                        <div class="teexxt">
                                            <h6 class="h6 sm fw-500 color-12 head">
                                                <?php if ($key%2==0) {echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                                  else{echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้
                                                  มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวด
                                                  ล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                                ?>
                                            </h6>

                                            <p class="title mt-1">
                                                <?php if ($key%2==0) {echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                                  else{echo "การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้
                                                  มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวด
                                                  ล้อมชุมชนการขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน";}
                                                ?>
                                            </p>

                                            <div class="p fw-200 color-gray mt-4">
                                                คำที่ค้นพบ:<span class="fw-900 color-12">พลังงานสะอาด</span>
                                                <span class="mx-2">|</span>
                                                ประเภทข้อมูล:<span class="fw-900 color-12">ข่าวสาร</span>
                                                <span class="mx-2">|</span>
                                                ลิงค์ข้อมูล<span class="fw-900 color-12">16 ครั้ง</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                </div>
            </div>


        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
