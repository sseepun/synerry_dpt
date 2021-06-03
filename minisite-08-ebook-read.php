<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
</head>
<body class="loading">
    <?php 
        $topnavActiveIndex = 1;
        include_once('include/topnav-minisite.php');
    ?>
    <?php
        $breadcrumb = [
            'leading' => 'ข้',
            'title' => 'อมูลเผยแพร่',
            'desc' => 'กรมโยธาธิการและผังเมืองพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ สำหรับคุณ',
            'image' => 'public/assets/app/images/bg/minisite-breadcrumb-10.jpg',
            'structure' => [
                [ 'name' => 'แนะนำกรม', 'url' => '#' ],
                [ 'name' => 'ข้อมูลเผยแพร่', 'url' => '#' ]
            ]
        ];
        include_once('component/breadcrumb-02.php');
    ?>
   
   <section class="section-02">
        <div class="container">
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-post-header">
                        <div class="ss-date">
                            <div class="date">28</div>
                            <div class="month">มี.ค.64</div>
                        </div>
                        <h6 class="fw-500 color-001">
                            นายสุเมธ มีนาภา ผู้ตรวจราชการกรมโยธาธิการและผังเมือง เป็นประธานในพิธีวาง
                            กระดูกงูเรือกำจัดผักตบชวาแบบสายพานลำเลียงพร้อมบีบอัด ยี่ห้อ ECOMARINE
                            รุ่น อาร์เทมีส จำนวน 5 ลำ
                        </h6>
                    </div>
                    
                    <div class="book-container mt-3">
                        <div class="wow-book" id="wow-book">
                            <?php for($i=0; $i<6; $i++){?>
                                <div><img class="img" src="public/assets/app/images/ebook/0<?= $i+1 ?>.jpg" alt="Page <?= $i ?>" /></div>
                            <?php }?>
                        </div>
                    </div>
                    
                    <div class="p md fw-600 color-09 mt-4">
                        <div class="font-01">
                            กระทรวงมหาดไทย โดยกรมโยธาธิการและผังเมือง จัดสัมมนา เรื่อง "การรับฟังความคิดเห็น 
                            ประกอบการจัดทำร่างธรรมนูญว่าด้วยการผังเมือง" ที่ จ.ภูเก็ต เพื่อให้ผู้เข้าร่วมสัมมนา มีความรู้ความเข้าใจต่อสาระสำคัญ 
                            ขั้นตอนการดำเนินการจัดทำร่างธรรมนูญว่าด้วยการผังเมือง และรับฟังความคิดเห็น ข้อเสนอแนะ 
                            แนวทางการแก้ไขปรับปรุงร่างธรรมนูญว่าด้วย การผังเมืองที่จัดทำขึ้น โดยคณะทำงาน ให้มีประสิทธิภาพมากยิ่งขึ้น
                        </div>
                    </div>
                    <div class="p fw-600 mt-3">
                        <div class="font-01">
                            นายพรพจน์ เพ็ญพาส อธิบดีกรมโยธาธิการและผังเมือง เปิดเผยว่า ผังเมืองถือเป็นเครื่องมือสำคัญในการกำหนดทิศทางการพัฒนาเชิงพื้นที่ 
                            รวมถึงลักษณะการใช้พื้นที่ตามศักยภาพและความเหมาะสม ซึ่งจะช่วยสร้างโอกาสในการพัฒนาเมือง ให้มีการเติบโตที่ยั่งยืน 
                            และสร้างประโยชน์แก่ทุกคนอย่างทั่วถึง ประกอบกับรัฐบาลได้ให้ความสำคัญกับการจัดระบบเมืองที่มีคุณภาพ ปลอดภัย 
                            และเป็นมิตรต่อสิ่งแวดล้อมพร้อมกำหนดแนวทางการแก้ไขปัญหาการใช้พื้นที่ให้เกิดความยั่งยืน 
                            โดยต้องมีการจัดทำนโยบายการตั้งถิ่นฐานและผังเมือง ด้วยการให้มีหน่วยงานระดับชาติกำกับดูแล 
                            และทำงานควบคู่ไปกับสำนักงานสภาพัฒนาการเศรษฐกิจและสังคมแห่งชาติ รวมถึงให้มีกฎหมายเฉพาะเหมือนเป็นธรรมนูญผังเมือง 
                            ในการกำกับกฎหมายอื่นๆไม่ให้หน่วยงานต่าง ๆ ละเมิด หรือปล่อยให้มีการพัฒนาเชิงพื้นที่ที่ไม่เป็นไปตามหลักการ
                        </div>
                    </div>

                    <div class="mt-4">
                        <?php include('component/minisite-post-footer.php'); ?>
                    </div>
                    
                    <div class="mt-4">
                        <p class="h6 sm fw-500 color-dark ss-dash">
                            <span>เอกสารที่เกียวข้อง</span>
                        </p>
                        <div class="scroll-x-wrapper mt-1 pb-0">
                            <table class="table table-download-02">
                                <tbody>
                                    <?php
                                        foreach([
                                            [ 'name' => 'RAR', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
                                            [ 'name' => 'PPT', 'icon' => '<em class="far fa-file-powerpoint color-01"></em>' ],
                                            [ 'name' => 'XLS', 'icon' => '<em class="far fa-file-excel color-01"></em>' ],
                                            [ 'name' => 'DOC', 'icon' => '<em class="far fa-file-word color-01"></em>' ],
                                            [ 'name' => 'ZIP', 'icon' => '<em class="far fa-file-archive color-01"></em>' ],
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
                                            <td class="column-btn">
                                                <a class="btn btn-action btn-sm btn-xs btn-color-09" href="#">
                                                    ดาวน์โหลด <em class="far fa-share-square ml-1"></em>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="btns d-flex jc-space-between py-4 border-top-4 bcolor-sgray">
                        <a class="btn btn-action btn-color-05 mx-1 my-1" href="#">
                            <em class="fas fa-chevron-left sm mr-2"></em>
                            ข้อมูลเผยแพร่ก่อนหน้า
                        </a>
                        <a class="btn btn-action btn-color-05 mx-1 my-1" href="#">
                            ข้อมูลเผยแพร่โอต่อไป
                            <em class="fas fa-chevron-right sm ml-2"></em>
                        </a>
                    </div>
                </div>

                <div class="grid xl-25 lg-30 sm-100" data-aos="fade-up" data-aos-delay="450">
                    <a class="btn btn-action btn-color-11 w-full" href="#">
                        <em class="fas fa-arrow-left lg mr-2"></em>
                        กลับไปหน้ารวมข้อมูลเผยแพร่
                    </a>
                    <div class="ss-stat">
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-eye"></em>
                            </div>
                            <p class="fw-600 pl-2">17</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="far fa-star"></em>
                            </div>
                            <p class="fw-600 pl-2">28</p>
                        </a>
                        <a class="stat" href="#">
                            <div class="btn btn-social sm btn-color-10 no-bradius">
                                <em class="fas fa-share-alt"></em>
                            </div>
                            <p class="fw-600 pl-2">231</p>
                        </a>
                    </div>

                    <p class="h6 sm fw-600 color-dark ss-dash mt-4 pt-1">
                        <span>ข้อมูลเผยแพร่ที่เกียวข้อง</span>
                    </p>
                    <div class="grids">
                        <?php for($k=0; $k<2; $k++){ $j = $k%4+1;?>
                            <div class="grid lg-100">                                    
                                <?php
                                    $cardType = 'Ebook';
                                    include('component/minisite-ss-card-01.php');   
                                ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
    
    <script src="public/assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
