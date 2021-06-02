<div class="ss-card ss-card-01 minisite">
    <?php if($cardType=='Image'){?>
        <a class="ss-img horizontal-2" href="#">
            <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-<?= empty($j)? '01': sprintf('%02d', $j%6+1) ?>.jpg');"></div>
            <div class="minisite-tag-counts">
                <div class="tag-count">
                    <em class="far fa-images mr-2"></em>
                    84
                </div>
            </div>
            <div class="hover-container">
                <div class="icon sm">
                    <img src="public/assets/app/images/icon/plus.png" alt="Image Icon" />
                </div>
            </div>
        </a>
        <div class="text-container bcolor-sgray">
            <p class="xs fw-400 color-gray">ข่าวประชาสัมพันธ์</p>
            <a class="title p fw-400 color-03 h-color-01 mt-1" href="#">
                การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
            </a>
            <p class="xxs fw-500 mt-2">
                19 กุมภาพันธ์ 2564
                <em class="fas fa-eye color-01 ml-4 mr-1"></em>
                388
            </p>
            <div class="btns mt-3">
                <a class="btn btn-more" href="#">
                    อ่านเพิ่มเติม
                </a>
            </div>
        </div>
    <?php }else if($cardType=='Weblink'){?>
        <a class="ss-img" href="#">
            <div class="img-bg" style="background-image:url('public/assets/app/images/content/weblink-<?= empty($j)? '01': sprintf('%02d', $j%8+1) ?>.jpg');"></div>
            <div class="hover-container">
                <div class="icon sm">
                    <img src="public/assets/app/images/icon/plus.png" alt="Image Icon" />
                </div>
            </div>
        </a>
        <div class="text-container bg-hgray bcolor-hgray weblink">
            <div class="stripe border-left-3 bcolor-01">
                <a class="title p fw-400 color-black h-color-01 mt-2" href="#">
                    สำนักงานเลขานุการกรม
                </a>
                <p class="xxs fw-500 mt-1">
                    <em class="fas fa-eye color-01 mr-1"></em>
                    388
                </p>
            </div>
        </div>
    <?php }else if($cardType=='Video Preview'){?>
        <a class="ss-img horizontal-2" href="#">
            <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-vdo-<?= empty($j)? '01': sprintf('%02d', $j%3+1) ?>.jpg');"></div>
            <div class="hover-container clear op-100">
                <div class="icon">
                    <img src="public/assets/app/images/icon/play-black.png" alt="Image Icon" />
                </div>
            </div>
        </a>
        <div class="text-container bcolor-sgray weblink p-3">
            <div class="stripe border-left-3 bcolor-01 pt-2">
                <p class="xxs fw-500 color-gray">
                    <?php if($j%2==0){ echo"เกี่ยวกับองค์กร";}
                          else{echo"สารคดี";}
                    ?>
                </p>    
                <a class="title p fw-400 color-03 h-color-01 mt-1" href="#">
                    <?php if($j%2==0){ echo"2D Animation ให้ความรู้หน้าที่ของกรมโยธาธิการเเละผังเมือง";}
                          else{echo"ผังเมืองเชียงใหม่ หนึ่งในการพัฒนาเมืองแห่งความสุข";}
                    ?>
                </a>
            </div>
            <p class="xxs fw-500 mt-2">
                19 กุมภาพันธ์ 2564
            </p>
        </div>
    <?php }?>
</div>
