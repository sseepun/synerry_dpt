<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/06.jpg');">
                        <div class="container">
                            <div class="text-wrapper">
                                <h2 class="animate" style="--delay:.6s;">
                                    ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                                </h2>
                                <p class="animate" style="--delay:.75s;">
                                    ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                    <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/04.jpg');">
                        <div class="container">
                            <h2 class="animate text-center" style="--delay:.6s;">
                                ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                            </h2>
                            <p class="animate text-center" style="--delay:.75s;">
                                ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                            </p>
                        </div>
                    </div>
                    <div class="slide" style="background-image:url('public/assets/app/images/banner/01.jpg');">
                        <div class="container">
                            <h2 class="animate text-center" style="--delay:.6s;">
                                ไม่ว่าใครก็เรียนรู้ได้ด้วย <br> ภาษาเทคโนโลยี
                            </h2>
                            <p class="animate text-center" style="--delay:.75s;">
                                ผลิตภาพอุตสาหกรรมไทย ให้สามารถเเข่งขันได้ในระดับสากล
                                <br> เพื่อพัฒนาเศรษฐกิจ สังคม และสิ่งเเวดล้อมของไทยให้ยั่งยืน
                            </p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
