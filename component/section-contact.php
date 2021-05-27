
<section>
    <div class="container border-bottom-3 bcolor-sgray"></div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="grids jc-center">
            <div class="grid xl-60 lg-2-3 sm-100 mt-0">
                <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="h4 lg fw-400">
                        แบบฟอร์มติดต่อเรา
                    </h6>
                    <p class="lg sm-no-br mt-1">
                        หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ <br>
                        ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                    </p>
                </div>
                <p class="xs color-gray text-center mt-3" data-aos="fade-up" data-aos-delay="150">
                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                    <span class="text-danger">*</span> 
                </p>
                <div class="mt-3" data-aos="fade-up" data-aos-delay="300">
                    <form action="/" method="POST">
                        <div class="grids">
                            <div class="grid sm-50 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">เลือกหน่วยงาน <span class="text-danger">*</span></label>
                                    <div class="select-wrapper">
                                        <select name="department" required title="General Select">
                                            <option value="">เลือกหน่วยงาน</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                    <input type="text" name="name" required title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid sm-50 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" required title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid sm-50 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">อีเมล <span class="text-danger">*</span></label>
                                    <input type="email" name="email" required title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid sm-100 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">หัวข้อติดต่อ <span class="text-danger">*</span></label>
                                    <input type="text" name="subject" required title="General Text Input" />
                                </div>
                            </div>
                            <div class="grid sm-100 mt-3">
                                <div class="form-group">
                                    <label class="p sm color-gray">ข้อความ <span class="text-danger">*</span></label>
                                    <textarea name="message" rows="5" required title="General Textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom-3 bcolor-sgray">
                            <div class="scroll-x-wrapper pb-0">
                                <table class="table table-download-02">
                                    <tbody>
                                        <?php
                                            foreach([
                                                [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                                [ 'name' => 'PDF', 'icon' => '<em class="far fa-file-pdf color-01"></em>' ]
                                            ] as $f){
                                        ?>
                                            <tr>
                                                <td class="column-icon">
                                                    <div class="icon h5 text-center">
                                                        <?= $f['icon'] ?>
                                                        <p class="xxs fw-600"><?= $f['name'] ?></p>
                                                    </div>
                                                </td>
                                                <td class="column-text">
                                                    <p class="md fw-400 color-12">
                                                        การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน 
                                                    </p>
                                                    <div class="p xxs fw-200 color-gray mt-2">
                                                        ขนาดไฟล์ <span class="fw-900 color-12">1.31 MB</span>
                                                        <span class="mx-2">|</span>
                                                        จำนวนดาวน์โหลด <span class="fw-900 color-12">16 ครั้ง</span>
                                                        <span class="mx-2">|</span>
                                                        <a class="color-gray h-color-01" href="#">
                                                            <em class="fas fa-clock color-01"></em>
                                                            แจ้งไฟล์เสีย
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex ai-center jc-space-between fw-wrap mt-1 pb-1">
                            <div class="captcha-container mt-3">
                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                            </div>
                            <div class="btns width-auto mt-3">
                                <button type="submit" class="btn btn-action btn-color-09">
                                    ส่งข้อความ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </button>
                                <button type="reset" class="btn btn-action btn-color-08">
                                    ล้างข้อมูล <em class="far fa-times-circle ml-1"></em>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
