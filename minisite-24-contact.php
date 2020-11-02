<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    ['url' => '#', 'name' => 'ติดต่อสำนักงาน'],
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container" data-aos="fade-up" data-aos-delay="300">

            <div class="ss-box-02 bg-color-gray no-bradius border width-full">
                <form action="" method="POST">
                    <h2 class="color-07 mt-0 mb-3">แบบฟอร์มติดต่อเรา</h2>
                    <div class="row mt-4">
                        <div class="col-sm-6 form-group">
                            <label>เรื่องที่ติดต่อ <span class="color-07">*</span></label>
                            <div class="select-wrapper">
                                <select class="form-control no-bradius" required>
                                    <option value="">ร้องเรียนการทำงาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>กรอกรายละเอียดการติดต่อ <span class="color-07">*</span></label>
                            <textarea rows="4" class="form-control no-bradius" required></textarea>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>โทรศัพท์ <span class="color-07">*</span></label>
                            <input type="text" class="form-control no-bradius" required />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>อีเมล์ <span class="color-07">*</span></label>
                            <input type="email" class="form-control no-bradius" required />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>ชื่อ-นามสกุล <span class="color-07">*</span></label>
                            <input type="text" class="form-control no-bradius" required />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>ยื่นยันผู้ใช้งาน</label>
                            <div class="captcha-container">
                                <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                            </div>
                        </div>
                    </div>
                    <div class="btns text-center mt-4">
                        <button type="submit" class="btn btn-2xl custom-btn-09 mx-1 no-bradius">
                            ส่งข้อมูล
                        </button>
                        <a class="btn btn-2xl custom-btn-11 btn-form-clear mx-1 no-bradius" href="#">
                            ล้างข้อมูล
                        </a>
                    </div>
                </form>
            </div>

            <div class="grids no-gap">
                <div class="grid lg-50 sm-100 mt-0">
                    <div class="section-bg ss-box-02 width-full no-bradius lazy-bg" data-src="public/assets/app/images/bg/60.jpg">
                        <h3 class="color-07 mt-0 mb-2">ที่อยู่ ติดต่อสำนักงาน</h3>
                        <table class="table va-baseline">
                            <tbody>
                                <tr>
                                    <td>ที่อยู่</td>
                                    <td>:</td>
                                    <td class="text-left">
                                        1115/2 ถนนไกรสรสิทธิ์ ตำบลเวียง <br>
                                        อำเภอเมืองเชียงราย จังหวัดเชียงราย <br>
                                        57000  ประเทศไทย
                                    </td>
                                </tr>
                                <tr>
                                    <td>โทรศัพท์</td>
                                    <td>:</td>
                                    <td class="text-left">053-711666</td>
                                </tr>
                                <tr>
                                    <td>โทรสาร</td>
                                    <td>:</td>
                                    <td class="text-left">053-717706</td>
                                </tr>
                                <tr>
                                    <td>ฮีเมล์</td>
                                    <td>:</td>
                                    <td class="text-left">
                                        <a class="color-07" href="mailto:moi_chiangrai@industry.go.th">
                                            moi_chiangrai@industry.go.th
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="grid lg-50 sm-100 mt-0">
                    <div class="map-container adaptive lazy-bg" data-src="public/assets/app/images/bg/56.jpg"></div>
                </div>
            </div>

        </div>
    </section>
        
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
