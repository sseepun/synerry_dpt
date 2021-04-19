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
            'leading' => 'คำ',
            'leading_class' => 'stripe-bottom',
            'title' => 'ถามที่พบบ่อย',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสาร <br> ที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/breadcrumb-02.jpg',
            'show_search' => true,
            'structure' => [
                [ 'name' => 'คำถามที่พบบ่อย', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-01.php');
    ?>
    
    <section class="section-01 pb-0">
        <div class="container">
            <div class="ss-box width-full position-relative" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-box-shadow fade-shadow lg"></div>
                <div class="header bg-01">
                    <h6 class="p lg fw-500 color-03 text-center">
                        คำถามที่พบบ่อย
                    </h6>
                </div>
                <div class="body pb-5">
                    <div class="faq-01">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="faq <?php if($i==0)echo 'active'; ?>">
                                <div class="question">
                                    <div class="ftag text-center">
                                        <p class="xs fw-400">คำถาม</p>
                                        <p class="h5 sm fw-400 lh-2xs">
                                            <?= $i+98 ?>
                                        </p>
                                    </div>
                                    <h6 class="fag-title p fw-600">
                                        <span class="font-01">
                                            อาคารประเภทใดบ้างที่ต้องติดตั้งเครื่องดับเพลิงแบบมือถือ
                                        </span>
                                    </h6>
                                    <div class="options">
                                        <p class="xs">11 มีนาคม 2564</p>
                                        <a class="btn btn-action btn-color-01" href="#">
                                            <?= $i==0? 'ปิดคำตอบ': 'ดูคำตอบ' ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                                    <div class="wrapper">
                                        <div class="ftag">
                                            <p class="xs fw-400">คำตอบ</p>
                                        </div>
                                        <div class="content">
                                            <p>
                                                <span class="font-01">
                                                    อาคารที่ต้องติดตั้งเครื่องดับเพลิงแบบมือถือ ได้แก่
                                                </span>
                                            </p>
                                            <ol>
                                                <li class="p">
                                                    <div class="font-01">
                                                        ห้องแถว ตึกแถว บ้านแถว บ้านแฝด ที่อาคารมีความสูงไม่เกิน 2 ชั้น ต้องติดตั้งเครื่องดับเพลิงแบบมือถือ คูหาละ 1 เครื่อง 
                                                        หากอาคารที่สูงเกิน 2 ชั้นขึ้นไป ต้องติดตั้งอย่างน้อยชั้นละ 1 เครื่อง
                                                    </div>
                                                </li>
                                                <li class="p">
                                                    <div class="font-01">
                                                        โรงมหรสพ หอประชุม โรงแรม สถานพยาบาล สถานศึกษา หอสมุด สถานกีฬาในร่ม ตลาด ห้างสรรพสินค้า ศูนย์การค้า สถานบริการ ท่าอากาศยาน อาคาร	
                                                        จอดรถ สถานีขนส่งมวลชน ภัตตาคาร สำนักงาน สถานที่ทำการของราชการ โรงงาน อาคารพาณิชย์ หอพัก และอาคารอยู่อาศัยรวม (แฟลต, อพาร์ทเม้นท์) 
                                                        ตั้งแต่ 4 หน่วยขึ้นไป ต้องติดตั้งเครื่องดับเพลิงแบบมือถือ 1 เครื่อง ต่อพื้นที่อาคารไม่เกิน 1,000 ตารางเมตร ทุกระยะไม่เกิน 45 เมตร และไม่น้อยกว่า
                                                        ชั้นละ 1 เครื่อง โดยการติดตั้งเครื่องดับเพลิงแบบมือถือต้องติดตั้งให้ส่วนบนสุดของตัวเครื่องสูงจากระดับพื้นอาคารไม่เกิน 1.50 เมตร
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="mt-4 px-4">
                                                <img class="img" src="public/assets/app/images/content/faq-01.jpg" alt="Image Content" />
                                            </div>
                                            <div class="p text-center mt-4">
                                                <div class="font-01">
                                                    สามารถอ่านรายละเอียดเพิ่มเติมตามกฎกระทรวง ฉบับที่ 39 (พ.ศ. 2537) ออกตามความในพ.ร.บ.ควบคุมอาคาร พ.ศ. 2522 
                                                    ว่าด้วยการกำหนดแบบและวิธีการเกี่ยวกับการติดตั้งระบบการป้องกันอัคคีภัยฯ หมวด 1 ข้อ 2 และข้อ 3 ได้ที่ลิงค์นี้
                                                    <a class="color-black h-color-01" href="#">
                                                        <u>https://bit.ly/2IFVrHv</u>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="lg fw-500 color-08 mt-4">
                                                เอกสารที่เกียวข้อง
                                            </p>
                                            <div class="scroll-x-wrapper pb-2 mt-3" data-simplebar>
                                                <table class="table table-download">
                                                    <tbody>
                                                        <?php
                                                            foreach([
                                                                'pdf', 'doc', 'docx', 'xls', 'xlsx',
                                                                'ppt', 'pptx', 'zip', 'rar'
                                                            ] as $k){
                                                        ?>
                                                            <tr>
                                                                <td class="px-0 py-0">
                                                                    <div class="download-card text-center">
                                                                        <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                                                                        <p class="md fw-400 color-white">
                                                                            <?= strtoupper($k) ?>
                                                                        </p>
                                                                        <p class="xxxs fw-400 color-01">
                                                                            (155 Kb.)
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td style="min-width:320px;">
                                                                    <p>
                                                                        <span class="font-01">
                                                                            กฎหมายด้านโยธาธิการและผังเมือง
                                                                        </span>
                                                                    </p>
                                                                </td>
                                                                <td style="min-width:250px;">
                                                                    <div class="d-flex ai-center jc-end fw-wrap">
                                                                        <a class="btn btn-action btn-color-01 btn-xs" href="#">
                                                                            ดาวนโหลด (10)
                                                                        </a>
                                                                        <a class="btn btn-icon color-black h-color-01 ml-2" href="#">
                                                                            <img class="mr-1" src="public/assets/app/images/icon/alert.png" alt="Image Icon" /> 
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
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="pt-2 border-top bcolor-sgray" data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>

    <section class="section-padding pb-0 position-relative">
        <div class="container">
            <div class="section-bg" style="background-image:url('public/assets/app/images/bg/section-04.jpg');"></div>
            <div class="ss-box xxl position-relative" data-aos="fade-up" data-aos-delay="0">
                <div class="ss-box-shadow xl"></div>
                <div class="header bg-01">
                    <h6 class="p lg fw-500 color-03">
                        แบบฟอร์มติดต่อ
                    </h6>
                </div>
                <div class="body">
                    <div class="d-flex ai-center">
                        <div class="mr-3" style="width:4rem; min-width:3.5rem;">
                            <img class="img" src="public/assets/app/images/icon/envelope.png" alt="Image Icon" />
                        </div>
                        <div class="text-container">
                            <p class="sm fw-600">
                                <span class="font-01">
                                    หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ทางเจ้าหน้าที่ะคำเนินการ
                                    ตามคำขอโดยเร็วที่สุด
                                </span>
                            </p>
                            <p class="sm fw-600">
                                <span class="font-01">
                                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย *
                                </span>
                            </p>
                        </div>
                    </div>
                    <form action="/" method="POST">
                        <div class="grids mt-2">
                            <div class="grid sm-100">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">หัวข้อเรื่อง</span> *
                                    </label>
                                    <input type="text" class="fgray" required />
                                </div>
                            </div>
                            <div class="grid sm-50">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">เลือกหน่วยงาน</span> *
                                    </label>
                                    <div class="append">
                                        <select class="fgray" required>
                                            <option value=""></option>
                                            <option value="1">หน่วยงานที่ 1</option>
                                            <option value="2">หน่วยงานที่ 2</option>
                                        </select>
                                        <div class="icon">
                                            <em class="fas fa-chevron-down"></em>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">ชื่อและนามสกุล</span> *
                                    </label>
                                    <input type="text" class="fgray" required />
                                </div>
                            </div>
                            <div class="grid sm-50">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">อีเมล</span> *
                                    </label>
                                    <input type="email" class="fgray" required />
                                </div>
                            </div>
                            <div class="grid sm-50">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">หมายเลขติดต่อ</span>
                                    </label>
                                    <input type="email" class="fgray" />
                                </div>
                            </div>
                            <div class="grid sm-100">
                                <div class="form-group">
                                    <label class="p fw-600">
                                        <span class="font-01">อัพโหลดหรือแนบไฟล์</span>
                                    </label>
                                    <div class="input-info">
                                        <input type="file" class="fgray" />
                                        <div class="info">
                                            <span class="font-01">
                                                <i>ไฟล์ PDF, PNG, JPG ขนาดรวมกันไม่เกิน 5 MB</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-100">
                                <label class="p fw-600">
                                    <span class="font-01">ข้อความ</span> *
                                </label>
                                <textarea rows="6" class="fgray" required></textarea>
                            </div>
                        </div>
                        <div class="d-flex ai-center jc-space-between fw-wrap my-4">
                            <div class="capcha-container mr-2">
                                <img src="public/assets/app/images/misc/captcha.jpg" alt="Image Capcha" />
                            </div>
                            <div class="btns width-auto my-3">
                                <button type="submit" class="btn btn-action btn-color-05 clip-path-01 mr-1">
                                    <span class="px-1">
                                        ส่งข้อความ <em class="fas fa-chevron-right sm ml-2"></em>
                                    </span>
                                </button>
                                <button type="reset" class="btn btn-action btn-color-06 clip-path-01">
                                    <span class="px-1">
                                        ล้างข้อมูล <em class="fas fa-times sm ml-2"></em>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
