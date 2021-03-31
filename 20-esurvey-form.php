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
            [ 'url' => '#', 'display' => 'แบบสอบถาม' ],
        ];
        $breadcrumbTitle = 'แบบสอบถาม';
        $breadcrumbBg = 'public/assets/app/images/bg/19.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="ss-icon-title mt-0 pt-0">
                <em class="fas fa-file-alt"></em>
                <div class="text-wrapper">
                    <h6 class="h5 fw-500">
                        แบบสำรวจความพึงพอใจของผู้ใช้บริการเว็บไซต์
                    </h6>
                    <div class="mt-2">
                        <a class="p fw-400 color-p h-color-s" href="#">
                            <em class="fas fa-chart-bar mr-1"></em> 
                            รายงานผลความคิดเห็น 
                        </a>
                    </div>
                    <p class="fw-300 color-black mt-3">
                        แบบสอบถามนี้มีวัตถุประสงค์เพื่อสำรวจความพึงพอใจของผู้รับบริการที่มีต่อเว็บไซต์กระทรวงพลังงาน 
                        และจะนำผลการประเมินมาพัฒนา ปรับปรุงเว็บไซต์ให้ดียิ่งขึ้นอย่างต่อเนื่อง 
                        โปรดทำเครื่องหมายให้ตรงตามความเป็นจริงของท่านมากที่สุด 
                    </p>
                </div>
            </div>
            <form action="/" method="POST">
                <div class="survey-02 mt-3">

                    <?php $k = 1; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">เพศ</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['ชาย', 'หญิง'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    <?php $k = 2; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">อายุ</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['ต่ำกว่า 18 ปี', '18-24 ปี', '25-34 ปี', '35-44 ปี', '45-54 ปี', 'มากกว่า 55 ปี'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    <?php $k = 3; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">ระดับการศึกษา</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['ต่ำกว่าปริญญาตรี', 'ปริญญาตรี', 'ปริญญาโท', 'สูงกว่าปริญญาโท'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    <?php $k = 4; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">ท่านมีความพึงพอใจกับเว็บไซต์ของเราเพียงใด ด้านการใช้งาน เช่น รวดเร็ว ใช้งานง่าย</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['มากที่สุด', 'มาก', 'ปานกลาง', 'น้อย', 'น้อยที่สุด'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    <?php $k = 5; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">ท่านมีความพึงพอใจกับเว็บไซต์ของเราเพียงใด ด้านข้อมูล เช่น มีรายละเอียดที่ต้องการครบถ้วน เพียงพอต่อความต้องการ</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['มากที่สุด', 'มาก', 'ปานกลาง', 'น้อย', 'น้อยที่สุด'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    <?php $k = 6; ?>
                    <div class="survey">
                        <div class="num"><?= $k ?></div>
                        <div class="text-container border-bottom bcolor-sgray">
                            <p class="fw-300 color-black">ท่านมีความพึงพอใจกับเว็บไซต์ของเราเพียงใด ด้านรูปแบบ เช่น เข้าใจง่าย อักษรอ่านง่าย ชัดเจนทั้งภาพและสี</p>
                            <fieldset>
                                <div class="gallery-grids">
                                    <?php foreach(['มากที่สุด', 'มาก', 'ปานกลาง', 'น้อย', 'น้อยที่สุด'] as $i=>$d){?>
                                        <div class="grid xl-15 lg-20 md-25 sm-50 mt-0">
                                            <div class="form-check sm px-0">
                                                <input type="radio" name="r_<?= $k ?>" id="r_<?= $k ?>_<?= $i ?>" value="<?= $i ?>" required title="General Radio Input" />
                                                <label for="r_<?= $k ?>_<?= $i ?>" class="color-black pl-1"><?= $d ?></label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="btns width-auto mt-4 pt-1">
                        <button type="submit" class="btn btn-action btn-color-p">
                            ส่งแบบสอบถาม
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
