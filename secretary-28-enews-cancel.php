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
        .field label{font-size:1.3125rem; font-weight:300; margin:0;}

        
        /* Captcha Container */
        .captcha-container{width:100%; max-width:280px; margin:1rem 1.5rem 0 0;}
        .captcha-container img{display:block; width:100%; height:auto;}

        .field input[type=email] {
            width:100%; border:1px solid transparent; padding:.4375rem 1rem; margin:0; background:#e7e7e7;
            font-size:1.25rem; color:#000; font-weight:300; border-radius:.1875rem;
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
                    [ 'url' => '#', 'name' => 'ยกเลิกการรับข่าวสาร' ],
                ];
                include_once('component/breadcrumb-3.php');
            ?>
            <h2 class="mt-3">ยกเลิกการรับข่าวสาร</h2>

            
            <form action="./" method="POST" class="mt-5">
                <div class="grids">
                    <div class="grid lg-2-3 md-80 sm-100 mt-0">

                        <div class="ss-box-2">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color-04 color-white"><i class="fas fa-mail-bulk"></i></div>
                                <h4 class="fw-500">แบบฟอร์มยกเลิกการรับข่าวสาร</h4>
                            </div>
                            <div class="field">
                                <p class="fw-500">หากท่านต้องการยกเลิกการรับช่าวสาร กรุณากรอกอีเมล์ที่ท่านต้องการยกเลิกด้านล่าง</p>
                                <label for="email" class="text-md mt-4 fw-600">อีเมล <span class="text-danger">*</span></label>
                                <div class="control">
                                    <input placeholder="กรุณากรอกอีเมลที่ต้องการยกเลิกข่าวสาร" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="captcha-container">
                                <img class="lazy-img" data-src="public/assets/app/images/default/captcha.png" alt="CAPTCHA" />
                            </div>
                            <div class="btns mt-4">
                                <button type="submit" class="btn custom-btn-primary btn-sm btn-round">
                                    ยกเลิกการรับช่าวสาร
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
