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
            'leading' => 'ส',
            'leading_class' => 'pull-right',
            'title' => 'มัครงาน',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-11.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'สมัครงาน', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
    
    <section class="section-container" data-aos="fade-up" data-aos-delay="300">
        <div class="container mt-5">
            <h5 class="fw-400">ใบสมัครคัดเลือกบุคคลเพื่อจ้างเหมาบริการงานด้านธุรการและบันทึกข้อมูล ในงบประมาณรายจ่าย
            ประจำปีงบประมาณ 2564 (สำนักควบคุมและตรวจสอบอาคาร)</h5>
            <p class="p xs mt-4" style="text-align: center;">กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย * </p>
            <h6 class="h6 sm mt-3">ประวัติส่วนตัว</h6>
            <div class="grids">
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">ชื่อ</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">นามสกุล</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">สันชาติ</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">วันเกิด</span> *
                        </label>
                        <div class="prepend">
                            <input type="text" required="">
                            <div class="icon icon-color2">
                                <em class="far fa-calendar-alt"></em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">เลขบัตรประชาชน</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
            </div>
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <h6 class="h6 sm mt-3">ที่อยู่ปัจจุบัน</h6>
            <div class="grids">
                <div class="grid all-100">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">ที่อยู่</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">ตำบล/แขวง</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">อำเภอ/เขต</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">จังหวัด</span> *
                        </label>
                        <div class="select-wrapper">
                            <select name="department" required title="General Select">
                                <option value="">เลือกจังหวัด</option>
                                <option value="">b</option>
                                <option value="">c</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">ระหัสไปรษณีย์</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">โทรศัพท์</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
                <div class="grid all-50">
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">อีเมล</span> *
                        </label>
                        <input type="text" required="">
                    </div>
                </div>
            </div>
            <div class="grids">
                <div class="grid all-100"> <!--อายุ-->
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">อายุ</span> *
                        </label>
                        <div class="d-flex ws-nowrap">
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">ต่ำกว่า 18 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">18-24 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">25-34 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">35-34 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">45-54 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">55-64 ปี</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">มากกว่า 65 ปี</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid all-100"> <!--ขอมูล-->
                    <div class="form-group">
                        <label class="p fw-300">
                            <span class="font-01">ท่านมีความพึงพอใจกับเว็บไซต์ของเราเพียงใด ด้านข้อมูล เช่น มีรายละเอียดที่ต้องการครบถ้วน เพียงพอต่อความต้องการ</span> *
                        </label>
                        <div class="d-flex ws-nowrap">
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">วารสารออนไลน์</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">ข่าวประชาสัมพันธ์</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">ข่าวรับสมัครบุคลากร</span>
                                </label>
                            </div>
                            <div class="checkbox-set">
                                <input type="checkbox" name="checkbox[]">
                                <label for="checkbox_0" class="p">
                                    <span class="font-01">ข่าวการจัดซื้อจัดจ้าง</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grids">
                <div class="grid xl-50 lg-50 sm-100">
                    <div class="d-flex ai-center border-2 bcolor-mgray p-3">
                        <div class="icon ml-3">
                            <em style="font-size: 60px; color:#fdcd05;" class="far fa-file"></em>
                        </div>
                        <div class="text" style="padding:1rem 0.5rem 1rem 1rem;">
                                <p class="p lg fw-500">ลากหรือวางไฟล์ไว้ที่นี่</p>
                                <p class="mt-1">ชนิดไฟล์ที่อนุญาติ .jpg , .jpeg , .png , .zip , .rar ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB</p>
                        </div>
                        <div class="button">
                            <a class="btn btn-action btn-color-09" href="#">
                                <em class="far fa-plus-circle mr-2"></em>เพิ่มไฟล์
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="grid xl-50 lg-50 sm-100">
                    <div class="file border-bottom bcolor-13 d-flex jc-space-between ai-center">
                        <p class="pt-2 pb-2">
                            <em class="far fa-file-pdf mr-1 color-01"></em>
                            job-16022564-1.pdf   [ 1.4 MB ]
                        </p>
                        <div style="font-size: 20px;">
                            <a href="#"><em class="far fa-edit mr-1 color-11"></em></a>
                            <span class="color-13">|</span>
                            <a href="#"><em class="far fa-times-circle ml-2 color-13"></em></a>
                        </div>
                    </div>
                    <div class="file border-bottom bcolor-13 d-flex jc-space-between ai-center">
                        <p class="pt-2 pb-2">
                            <em class="far fa-file-pdf mr-1 color-01"></em>
                            job-16022564-1.pdf   [ 1.4 MB ]
                        </p>
                        <div style="font-size: 20px;">
                            <a href="#"><em class="far fa-edit mr-1 color-11"></em></a>
                            <span class="color-13">|</span>
                            <a href="#"><em class="far fa-times-circle ml-2 color-13"></em></a>
                        </div>
                    </div>
                    <div class="file border-bottom bcolor-13 d-flex jc-space-between ai-center">
                        <p class="pt-2 pb-2">
                            <em class="far fa-file-pdf mr-1 color-01"></em>
                            job-16022564-1.pdf   [ 1.4 MB ]
                        </p>
                        <div style="font-size: 20px;">
                            <a href="#"><em class="far fa-edit mr-1 color-11"></em></a>
                            <span class="color-13">|</span>
                            <a href="#"><em class="far fa-times-circle ml-2 color-13"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grids">
                <div class="grid xl-50 lg-50 sm-100">
                    <div class="d-flex ai-center border-2 bcolor-mgray p-3">
                        <div class="icon ml-3">
                            <em style="font-size: 60px; color:#fdcd05;" class="far fa-image"></em>
                        </div>
                        <div class="text" style="padding:1rem 0.5rem 1rem 1rem;">
                            <p class="p lg fw-500">ลากหรือวางไฟล์ไว้ที่นี่</p>
                            <p class="mt-1">ชนิดไฟล์ที่อนุญาติ .jpg , .jpeg , .png ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB</p>
                        </div>
                        <div class="button">
                            <a class="btn btn-action btn-color-09" href="#">
                                <em class="far fa-plus-circle mr-2"></em>เพิ่มรูปภาพ
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="grid xl-50 lg-50 sm-100">
                    <div class="file border-bottom bcolor-13 d-flex jc-space-between ai-center">
                        <p class="pt-2 pb-2">
                            <em class="far fa-file-image mr-1 color-01"></em>
                            job-16022564-1.pdf   [ 1.4 MB ]
                        </p>
                        <div style="font-size: 20px;">
                            <a href="#"><em class="far fa-edit mr-1 color-11"></em></a>
                            <span class="color-13">|</span>
                            <a href="#"><em class="far fa-times-circle ml-2 color-13"></em></a>
                        </div>
                    </div>
                    <div class="file border-bottom bcolor-13 d-flex jc-space-between ai-center">
                        <p class="pt-2 pb-2">
                            <em class="far fa-file-image mr-1 color-01"></em>
                            job-16022564-1.pdf   [ 1.4 MB ]
                        </p>
                        <div style="font-size: 20px;">
                            <a href="#"><em class="far fa-edit mr-1 color-11"></em></a>
                            <span class="color-13">|</span>
                            <a href="#"><em class="far fa-times-circle ml-2 color-13"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <h6 class="h6 sm mt-3">ประวัติการศึกษา</h6>
            <p class="p xs mt-3">(ให้กรอกทุกวุฒิที่ได้รับและแนบสําเนาแสดงผลการเรียนเฉพาะวุฒิที่ใช้สมัครเข้ารับการประเมินพร้อมใบสมัคร)</p>
            <h6 class="h6 sm mt-3">ม.6/ปวช./ปวส.</h6>
            <div class="grids">
                <div class="grid all-25"><input type="text" required="" placeholder="สาขา/วิชาเอก"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="คะแนนเฉลี่ยตลอดหลักสูตร"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="ชื่อสถานศึกษา"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="พ.ศ. ที่สําเร็จการศึกษา"></div>
            </div>
            <h6 class="h6 sm mt-3">ปริญญาตรี</h6>
            <div class="grids">
                <div class="grid all-25"><input type="text" required="" placeholder="สาขา/วิชาเอก"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="คะแนนเฉลี่ยตลอดหลักสูตร"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="ชื่อสถานศึกษา"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="พ.ศ. ที่สําเร็จการศึกษา"></div>
            </div>
            <h6 class="h6 sm mt-3">ปริญญาโท</h6>
            <div class="grids">
                <div class="grid all-25"><input type="text" required="" placeholder="สาขา/วิชาเอก"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="คะแนนเฉลี่ยตลอดหลักสูตร"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="ชื่อสถานศึกษา"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="พ.ศ. ที่สําเร็จการศึกษา"></div>
            </div>
            <h6 class="h6 sm mt-3">อื่นๆ</h6>
            <div class="grids">
                <div class="grid all-25"><input type="text" required="" placeholder="สาขา/วิชาเอก"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="คะแนนเฉลี่ยตลอดหลักสูตร"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="ชื่อสถานศึกษา"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="พ.ศ. ที่สําเร็จการศึกษา"></div>
            </div>
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <h6 class="h6 sm mt-3">ประวัติฝึกอบรม</h6>
            <div class="grids">
                <div class="grid all-50"><input type="text" required="" placeholder="ชื่อหลักสูตร"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="ระยะเวลาในการฝึกอบรม (ระบุช่วงเวลา)"></div>
                <div class="grid all-25"><input type="text" required="" placeholder="หน่วยงานผู้จัด"></div>
            </div>
            <div class="d-flex jc-end mt-3">
                <a class="btn btn-action btn-color-10" href="#">
                    <em class="far fa-plus-square mr-2"></em>เพิ่มประวัติฝึกอบรม
                </a>
            </div>                         
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <h6 class="h6 sm mt-3">ประวัติการทำงาน</h6>
            <div class="grids">
                <div class="grid all-20"><input type="text" required="" placeholder="สถานที่ทํางาน"></div>
                <div class="grid all-20"><input type="text" required="" placeholder="ตําแหน่ง"></div>
                <div class="grid all-20"><input type="text" required="" placeholder="เงินเดือน"></div>
                <div class="grid all-20"><input type="text" required="" placeholder="ระยะเวลา"></div>
                <div class="grid all-20"><input type="text" required="" placeholder="เหตุผลที่ลาออก"></div>
            </div>
            <div class="d-flex jc-end mt-3">
                <a class="btn btn-action btn-color-10" href="#">
                    <em class="far fa-plus-square mr-2"></em>เพิ่มประวัติการทำงาน
                </a>
            </div>
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <h6 class="h6 sm mt-3">รายระเอียดผลงานที่สำคัญ หรือโดดเด่น</h6>
            <textarea rows="6" required=""></textarea>
            <div class="border-bottom-3 bcolor-13 mt-4"></div>
            <div class="form-group mt-3">
                <div class="checkbox-set">
                    <input type="checkbox" name="checkbox[]">
                    <label for="checkbox_0" class="p">
                        <span class="font-01">ข้าพเจ้าขอรับรองว่า ข้อความที่แจ้งไว้ในใบสมัครนี้ถูกต้องและเป็นความจริงทุกประการ</span>
                    </label>
                </div>
            </div>
            <div class="d-flex jc-space-between ai-center mt-4">
                <div style="width:300px;height:80px;background-color:red;">robot</div>
                <div class="submit-clear">
                    <a class="btn btn-action btn-color-09" href="#">
                        ส่งใบสมัคร<em class="far fa-arrow-circle-right ml-2"></em>
                    </a>
                    <a class="btn btn-action btn-color-08" href="#">
                        ล้างข้อมูล<em class="far fa-times-circle ml-2"></em>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
