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
            [ 'url' => '#', 'display' => 'แบบฟอร์มการตั้งกระทู้' ],
        ];
        $breadcrumbTitle = 'แบบฟอร์มการตั้งกระทู้';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-13.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
            <?php
                $listHeader = ['search', 'category', 'order', 'crud'];
                include('component/list-header.php');
            ?>
            <form action="/" method="GET">
                <div class="ss-box-header color-white bradius-round mt-4">
                    <div class="header bg-07">
                        <h6 class="p lg fw-400">หัวข้อกระทู้</h6>
                    </div>
                    <div class="body bg-08">
                        <div class="form-group">
                            <input type="text" class="form-control no-bradius" required title="General Text Input" />
                        </div>
                    </div>
                </div>
                <div class="ss-box-header color-white bradius-round">
                    <div class="header bg-07">
                        <h6 class="p lg fw-400">หมวดหมู่กระทู้</h6>
                    </div>
                    <div class="body bg-08">
                        <div class="gallery-grids">
                            <?php
                                foreach([
                                    'ข่าวประชาสัมพันธ์', 'สุขภาพช่องปาก', 'โภชนาการทันโรค', 'นานาทัศนะ',
                                    'พรบ.สาธารณสุข 2535', 'บริหารทรัพยากรบุคคล', 'ออกกำลังกาย',
                                    'เวทีวิชาการ', 'เมืองน่าอยู่', 'การพัฒนาระบบราชการ',
                                    'โรงพยาบาลส่งเสริมสุขภาพ', 'ความรู้คอมพิวเตอร์'
                                ] as $i=>$d){
                            ?>
                                <div class="grid lg-25 md-1-3 mt-0 mb-2">
                                    <div class="form-check">
                                        <input type="radio" name="category" id="category_<?= $i ?>" class="form-check-input" title="General Radio Input Input" />
                                        <label for="category_<?= $i ?>" class="color-white"><?= $d ?></label>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="ss-box-header color-white bradius-round">
                    <div class="header bg-07">
                        <h6 class="p lg fw-400">รายละเอียด</h6>
                    </div>
                    <div class="body bg-08">
                        <div class="form-group">
                            <textarea class="form-control no-bradius" rows="8" title="General Textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="ss-box-header color-white bradius-round">
                    <div class="header bg-07">
                        <h6 class="p lg fw-400">ไฟล์แนบ</h6>
                    </div>
                    <div class="body bg-08">
                        <div class="form-group">
                            <div class="control">
                                <div class="input-dropzone bcolor-08 no-bradius">
                                    <div class="wrapper text-center color-white">
                                        <div class="h2 lh-xs">
                                            <em class="zmdi zmdi-cloud-upload"></em>
                                        </div>
                                        <div class="p sm fw-300 lh-xs">
                                            Drag and Drop file here
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns text-center mt-5">
                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                        <em class="far fa-check-circle mr-1"></em> ตกลง
                    </button>
                    <button type="reset" class="btn btn-action btn-color-02 btn-round btn-min-width">
                        <em class="far fa-times-circle mr-1"></em> ล้างข้อมูล
                    </button>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
