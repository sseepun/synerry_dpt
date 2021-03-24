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
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'ติดต่อเรา' ],
        ];
        $breadcrumbTitle = 'ติดต่อเรา';
        $breadcrumbBg = 'public/assets/app/images/bg/04.jpg';
        include('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <h6 class="h3 fw-600" data-aos="fade-up" data-aos-delay="0">
                ติดต่อ สนร.
            </h6>
            <div class="grids mt-3">
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                    <p class="md">
                        1906 23rd Street, N.W., Washington D.C. 20008
                    </p>
                    <p class="sm mt-4">
                        หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้
                        ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                    </p>
                    <div class="mt-2" data-aos="fade-up" data-aos-delay="300">
                        <form action="/" method="POST">
                            <div class="grids">
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">อีเมล <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">เนื้อเรื่อง <span class="text-danger">*</span></label>
                                        <input type="text" name="subject" class="form-control" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="form-group">
                                        <label class="p fw-400">ข้อความ <span class="text-danger">*</span></label>
                                        <textarea name="message" rows="5" class="form-control" required title="General Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-3">
                                <button type="submit" class="btn btn-action btn-color-p btn-min-width">
                                    ส่งข้อความ
                                </button>
                                <button type="reset" class="btn btn-action btn-color-p-inverse btn-min-width">
                                    ล้างข้อมูล
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="grid lg-50 sm-100 xl-mt-0 lg-mt-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="map-container">
                        <div class="fit img-fill" style="background-image:url('public/assets/app/images/misc/map.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
