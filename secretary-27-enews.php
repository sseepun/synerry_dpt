<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />


    <style>
        /* Imported style from anamai_minisite */

        /* Special Box 2 */
        .ss-box-2{width:100%; padding:1.75rem 2rem; border:1px solid transparent; border-radius:.875rem; border-color: #e1e1e1;}
        .ss-box-2.ss-box-shadow{border-radius:0;}


        /* Fields & Inputs */
        .field{margin:.75rem 0 0 0; width:100%;}
        .field label{font-size:.9375rem; font-weight:300; margin:0;}

        
        /* Captcha Container */
        .captcha-container{width:100%; max-width:280px; margin:1rem 1.5rem 0 0;}
        .captcha-container img{display:block; width:100%; height:auto;}

        .field input[type=email] {
            width:100%; border:1px solid transparent; padding:.4375rem 1rem; margin:0; background:#e7e7e7;
            font-size:.9375rem; color:#000; font-weight:300; border-radius:.1875rem;
            -webkit-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            -moz-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            transition:border-color .3s;
        }

    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>


    <section class="section-padding">
        
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'รู้จักสำนักงานปลัดฯ' ],
                    [ 'url' => '#', 'name' => 'สมัครรับข่าวสาร' ],
                ];
                include_once('component/breadcrumb-3.php');
            ?>
            <h2 class="mt-3">สมัครรับข่าวสาร</h2>

            
            <form action="./" method="POST" class="mt-5">
                <div class="grids">
                    <div class="grid lg-2-3 md-80 sm-100 mt-0">

                        <div class="ss-box-2">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color-04 color-white"><i class="fas fa-mail-bulk"></i></div>
                                <h4 class="fw-500">แบบฟอร์มสมัครรับข่าวสาร</h4>
                            </div>
                            <div class="field">
                                <label for="email" class="text-md mt-4 fw-600">อีเมล <span class="text-danger">*</span></label>
                                <div class="control">
                                    <input placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" type="email" name="email" required>
                                </div>
                            </div>
                            <p>กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>
                            <div class="border-bottom pt-1 pb-1">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="field mt-0-5">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="types[]" id="type_1_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                            <label for="type_1_<?php echo $i; ?>">
                                                ข่าวจากหน่วยงานส่วนกลาง
                                            </label>
                                        </div>
                                    </div>
                                <?php }?>


                                <div class="ml-4">
                                    <?php for($i=4; $i<7; $i++){?>
                                        <div class="field mt-0-5">
                                            <div class="control checkbox-control">
                                                <input type="checkbox" name="types[]" id="type_1_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                <label for="type_1_<?php echo $i; ?>">
                                                    ข่าวจากหน่วยงานส่วนกลาง
                                                </label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="captcha-container mb-3">
                                    <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                                </div>
                                
                            </div>


                            <div class="btns mt-4">
                                <button type="submit" class="btn custom-btn-09 btn-round">
                                    <i class="far fa-check-circle"></i>
                                    ตกลง
                                </button>
                                <button type="submit" class="btn custom-btn-09 btn-round">
                                    <i class="far fa-times-circle"></i>
                                    ล้างข้อมูล
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
            
        </div>
    </section>
    

    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
