<div class="ss-card ss-card-06 minisite">
    <?php if($cardType=='Image'){?>
        <div class="img-container">
            <a class="ss-img adaptive-xs" href="#">
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
        </div>
        <div class="text-container bcolor-sgray">
            <div class="stripe border-left-3 bcolor-01">
                <p class="xs fw-400 color-gray">ข่าวประชาสัมพันธ์</p>
                <a class="title h6 sm fw-400 color-03 h-color-01 mt-1" href="#">
                    การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
                </a>
            </div>
            <p class="xxs fw-500 mt-2">
                19 กุมภาพันธ์ 2564
                <em class="fas fa-eye color-01 ml-4 mr-1"></em>
                388
            </p>
            <p class="desc p xs fw-600 color-dark mt-2">
                <span class="font-01">
                    การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชนหนองหลวงพัฒนา 
                    อำเภอเมืองชัยนาท จังหวัดชัยนาท
                </span>
            </p>
            <div class="btns mt-2">
                <a class="btn btn-more" href="#">
                    อ่านเพิ่มเติม
                </a>
            </div>
        </div>
    <?php }else if($cardType=='Preview'){?>
        <div class="img-container">
            <a class="ss-img adaptive-xs" href="#">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-<?= empty($j)? '01': sprintf('%02d', $j%6+1) ?>.jpg');"></div>
                <div class="hover-container">
                    <div class="icon xs">
                        <img src="public/assets/app/images/icon/plus.png" alt="Image Icon" />
                    </div>
                </div>
            </a>
        </div>
        <div class="text-container sm bcolor-sgray">
            <p class="xs fw-400 color-gray">ข่าวประชาสัมพันธ์</p>
            <a class="title p fw-400 color-03 h-color-01 mt-1" href="#">
                การจำหน่ายที่ดินจัดหาประโยชน์ในโครงการจัดรูปที่ดินเพื่อพัฒนาพื้นที่บริเวณชุมชน หนองหลวงพัฒนา
            </a>
            <p class="xxs fw-500 mt-1">
                19 กุมภาพันธ์ 2564
            </p>
            <div class="btns mt-2">
                <a class="btn btn-more" href="#">
                    อ่านเพิ่มเติม
                </a>
            </div>
        </div>
    <?php }?>
</div>
