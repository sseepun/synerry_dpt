<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'การให้บริการ' ],
            [ 'url' => '#', 'display' => 'กระดานถาม-ตอบ' ],
        ];
        $breadcrumbTitle = 'กระดานถาม-ตอบ';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-13.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = ['search', 'category', 'order'];
                    include('component/list-header.php');
                ?>
            </div>
            <div data-aos="fade-up" data-aos-delay="450">
                <div class="ss-box-webboard">
                    <div class="ss-box-shadow xl"></div>

                    <div class="header">
                        <div class="ss-icon-title mt-0 pt-0">
                            <em class="fas fa-book"></em>
                            <div class="text-wrapper">
                                <h6 class="h5 sm fw-600">
                                    megaloblastic anemia / bicytopenia คือโรคอะไร
                                </h6>
                                <p class="fw-100 mt-1">
                                    อยากทราบว่า megaloblastic anemia และ bicytopenia คือโรคอะไร 
                                    เป็นอันตรายยร้ายแรง หรือไม่  สามารถรักษาให้หายขาดมั้ย และควรมีวิธีปฏิบัติตัวอย่างไร
                                    ในกรร๊คนไข้สูงอายุ
                                </p>
                                <div class="btns mt-3">
                                    <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                        อนามัยผู้สูงอายุ
                                    </a>
                                    <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                        bicytopenia
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="webboard-profile">
                                    <div class="profile-icon">
                                        <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                    </div>
                                    <div class="text">
                                        <p class="sm fw-100">
                                            โพสต์โดย : <span class="fw-500 color-01">anonymous</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="block p sm fw-100">
                                <div class="slot">
                                    27.03.2563 
                                    <div class="btn btn-icon ml-1">
                                        <em class="fas fa-clock"></em>
                                    </div>
                                </div>
                                <div class="slot">
                                    202 
                                    <div class="btn btn-icon ml-1">
                                        <em class="fas fa-eye"></em>
                                    </div>
                                </div>
                                <div class="slot">
                                    Share 
                                    <a class="btn btn-icon ml-1" href="#">
                                        <em class="fab fa-facebook-f"></em>
                                    </a>
                                    <a class="btn btn-icon" href="#">
                                        <em class="fab fa-twitter"></em>
                                    </a>
                                    <a class="btn btn-icon" href="#">
                                        <em class="fab fa-instagram"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="body-section bg-fgray">
                            <div class="ss-icon-title mt-0 pt-0">
                                <em class="far fa-comment-dots bg-02"></em>
                                <div class="text-wrapper">
                                    <h6 class="h5 sm fw-600">
                                        ร่วมความคิดเห็นอื่น
                                    </h6>
                                    <p class="fw-200 color-gray mt-1">
                                        ( กรุณาเข้าสู่ระบบ
                                        <span class="btn btn-icon btn-icon-02 mx-2">
                                            <em class="fas fa-lock"></em>
                                        </span>
                                        เพื่อตั้งกระทู้คำถาม หรือ สมัครสมาชิก
                                        <span class="btn btn-icon btn-icon-02 mx-2">
                                            <em class="far fa-user"></em>
                                        </span>
                                        หากท่านยังไม่มีชื่อเข้าใช้งาน )
                                    </p>
                                    <div class="form-group mt-4">
                                        <textarea name="message" rows="7" class="form-control round" title="General Textarea"></textarea>
                                    </div>
                                    <div class="btn-container text-right mt-3">
                                        <a class="btn btn-action btn-color-01 btn-round" href="#">
                                            ตอบความคิดเห็น
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body-section">
                            <div class="ss-icon-title mt-0 pt-0">
                                <em class="far fa-comments bg-07"></em>
                                <div class="text-wrapper">
                                    <div class="d-flex jc-space-between fw-wrap">
                                        <h6 class="h5 sm fw-600 ws-nowrap mb-1 mr-2">
                                            32 ความคิดเห็นอื่นๆ
                                        </h6>
                                        <div class="webboard-profile multiple">
                                            <?php for($i=0; $i<5; $i++){?>
                                                <div class="profile-icon">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-0<?= $i%2+1 ?>.jpg');"></div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php for($i=0; $i<4; $i++){?>
                                <div class="inner-wrapper">
                                    <h6 class="h5 sm fw-500">
                                        Megalobalstic anemia เป็นกลุ่มโรคที่เกิดจากเซลล์ที่ทำหน้าที่สร้างเซลล์
                                    </h6>
                                    <p class="fw-200 mt-1">
                                        ในไขกระดูกไม่สามารถสร้าง DNA ได้ตามปกติ แต่ยังคงสร้าง RNA 
                                        และโปรตีนได้ทำให้เกิดความผิดปกติโดยเซลล์มีขนาดใหญ่ขึ้น 
                                        และนิวเคลียสมีลักษณะอ่อนในขณะที่ไซโตพลาสซึมเจริญตามปกติ 
                                        ทำให้เกิดปรากฎการณ์ที่เรียกว่า "nuclear-cytoplasmic asynchronism" 
                                        นอกจากนี้เซลล์อื่นๆ ที่มีการแบ่งตัวเร็วจะเกิดมีความผิดปกติที่เรียกว่า "megaloblastosis" 
                                        เช่น เซลล์เยื่อบุทางเดินอาหารเป็นต้น
                                    </p>
                                    <div class="blocks p sm fw-200 mt-2">
                                        <div class="block">
                                            <div class="webboard-profile mr-4">
                                                <div class="profile-icon">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                                </div>
                                                <div class="text">
                                                    <p class="sm fw-200">
                                                        โพสต์โดย : <span class="fw-500">anonymous</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="slot mr-4">
                                                27.03.2563 
                                                <div class="btn btn-icon btn-icon-03 ml-1">
                                                    <em class="fas fa-clock"></em>
                                                </div>
                                            </div>
                                            <div class="slot mr-4">
                                                202 
                                                <div class="btn btn-icon btn-icon-03 ml-1">
                                                    <em class="fas fa-eye"></em>
                                                </div>
                                            </div>
                                            <div class="slot">
                                                Share 
                                                <a class="btn btn-icon btn-icon-03 ml-1" href="#">
                                                    <em class="fab fa-facebook-f"></em>
                                                </a>
                                                <a class="btn btn-icon btn-icon-03" href="#">
                                                    <em class="fab fa-twitter"></em>
                                                </a>
                                                <a class="btn btn-icon btn-icon-03" href="#">
                                                    <em class="fab fa-instagram"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
