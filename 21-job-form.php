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
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'แบบฟอร์มรับสมัครงาน' ],
        ];
        $breadcrumbTitle = 'แบบฟอร์มรับสมัครงาน';
        $breadcrumbBg = 'public/assets/app/images/bg/12.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black" data-aos="fade-up" data-aos-delay="300">
                ใบสมัครเข้ารับการประเมินความเหมาะสมกับตําแหน่งนักวิชาการเงินและบัญชีปฏิบัติการของ
                สํานักงานปลัดกระทรวงพลังงาน
            </h6>
            <p class="color-gray text-center mt-3 mb-2" data-aos="fade-up" data-aos-delay="450">
                กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                <span class="text-danger">*</span> 
            </p>
            <form action="/" method="POST">
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="600">
                    <h6 class="p lg fw-600 mb-1">ประวัติส่วนตัว</h6>
                    <div class="grids">
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">สัญชาติ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">วันเกิด <span class="text-danger">*</span></label>
                                <div class="date-wrapper">
                                    <input type="text" class="date-picker form-control round" required title="General Text Input" />
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">เลขบัตรประจําตัวประชาชน <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0"></div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">สถานที่เกิด <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">จังหวัด <span class="text-danger">*</span></label>
                                <div class="select-wrapper">
                                    <select class="form-control round" required>
                                        <option value="">เลือกจังหวัด</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="p lg fw-600 mb-1">ที่อยู่ปัจจุบัน</h6>
                    <div class="grids">
                        <div class="grid sm-100 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">ที่อยู่ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">ตําบล/แขวง <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">อําเภอ/เขต <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">จังหวัด <span class="text-danger">*</span></label>
                                <div class="select-wrapper">
                                    <select class="form-control round" required>
                                        <option value="">เลือกจังหวัด</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">โทรศัพท์ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-0">
                            <div class="form-group">
                                <label class="p color-gray">อีเมล <span class="text-danger">*</span></label>
                                <input type="email" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="p lg fw-600">ประวัติการศึกษา</h6>
                    <p class="sm color-gray mt-2">
                        (ให้กรอกทุกวุฒิที่ได้รับและแนบสําเนาแสดงผลการเรียนเฉพาะวุฒิที่ใช้สมัครเข้ารับการประเมินพร้อมใบสมัคร)
                    </p>
                    <?php foreach(['ม.๖/ปวช./ปวส.', 'ปริญญาตรี', 'ปริญญาโท', 'อื่น ๆ'] as $d){?>
                        <p class="fw-600 mt-3" style="margin-bottom:-.1875rem;">
                            <?= $d ?> <span class="text-danger">*</span>
                        </p>
                        <div class="grids">
                            <div class="grid md-25 sm-50 mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control round" placeholder="สาขา/วิชาเอก" title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid md-25 sm-50 mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control round" placeholder="คะแนนเฉลี่ยตลอดหลักสูตร" title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid md-25 sm-50 mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control round" placeholder="ชื่อสถานศึกษา" title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid md-25 sm-50 mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control round" placeholder="พ.ศ. ที่สําเร็จการศึกษา" title="General Text Input" />
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="p lg fw-600">ประวัติการฝึกอบรม</h6>
                    <div class="grids">
                        <div class="grid md-50 sm-100 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="ชื่อหลักสูตร" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid md-25 sm-50 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="ระยะเวลาในการฝึกอบรม (ระบุช่วงเวลา)" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid md-25 sm-50 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="หน่วยงานผู้จัด" title="General Text Input" />
                            </div>
                        </div>
                    </div>
                    <div class="btns text-right mt-3">
                        <a class="btn btn-action btn-color-04 btn-round" href="#">
                            <em class="far fa-plus-square mr-1"></em> 
                            เพิ่มประวัติการฝึกอบรม
                        </a>
                    </div>
                </div>
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="p lg fw-600">ประวัติการทํางาน</h6>
                    <div class="grids">
                        <div class="grid lg-20 sm-60 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="สถานที่ทํางาน" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid lg-20 sm-40 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="ตําแหน่ง" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid lg-20 sm-30 mt-0">
                            <div class="form-group">
                                <input type="number" class="form-control round" placeholder="เงินเดือน" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid lg-20 sm-30 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="ระยะเวลา" title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid lg-20 sm-40 mt-0">
                            <div class="form-group">
                                <input type="text" class="form-control round" placeholder="เหตุผลที่ลาออก" title="General Text Input" />
                            </div>
                        </div>
                    </div>
                    <div class="btns text-right mt-3">
                        <a class="btn btn-action btn-color-04 btn-round" href="#">
                            <em class="far fa-plus-square mr-1"></em> 
                            เพิ่มประวัติการทํางาน
                        </a>
                    </div>
                </div>
        
                <div class="border-bottom-3 bcolor-sgray py-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="p lg fw-600">รายละเอียดผลงานที่สําคัญ หรือโดดเด่น</h6>
                    <div class="grids">
                        <div class="grid sm-100 mt-0">
                            <div class="form-group">
                                <textarea class="form-control round" rows="8" title="General Textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div data-aos="fade-up" data-aos-delay="0">
                    <div class="pt-2">
                        <fieldset>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="c_0" value="1" title="General Checkbox Input" required />
                                <label class="p color-black" for="c_0">
                                    ข้าพเจ้าขอรับรองว่า ข้อความที่แจ้งไว้ในใบสมัครนี้ถูกต้องและเป็นความจริงทุกประการ
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="d-flex ai-center jc-space-between fw-wrap mt-2 pb-1">
                        <div class="captcha-container mt-3">
                            <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                        </div>
                        <div class="btns width-auto mt-3">
                            <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                ส่งข้อความ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                            </button>
                            <button type="reset" class="btn btn-action btn-color-02 btn-round">
                                ล้างข้อมูล <em class="far fa-times-circle ml-1"></em>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
