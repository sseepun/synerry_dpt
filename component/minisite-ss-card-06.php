<?php if($cardType=='Image'){?>
    <div class="ss-card ss-card-06 minisite">
        <div class="img-container">
            <a class="ss-img adaptive-xs" href="#">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-<?= empty($j)? '01': sprintf('%02d', $j%6+1) ?>.jpg');"></div>
                <?php if(!empty($cardImgCount)){?>
                    <div class="minisite-tag-counts">
                        <div class="tag-count">
                            <em class="far fa-images mr-2"></em>
                            84
                        </div>
                    </div>
                <?php }?>
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
    </div>
<?php }else if($cardType=='Image Preview'){?>
    <div class="ss-card ss-card-06 minisite">
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
    </div>
<?php }else if($cardType=='Video Preview'){?>
    <div class="ss-card ss-card-06 minisite">
        <div class="img-container">
            <a class="ss-img adaptive-xs" href="#">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/minisite-<?= empty($j)? '01': sprintf('%02d', $j%6+1) ?>.jpg');"></div>
                <div class="hover-container clear op-100">
                    <div class="icon">
                        <img src="public/assets/app/images/icon/play-black.png" alt="Image Icon" />
                    </div>
                </div>
            </a>
        </div>
        <div class="text-container bcolor-sgray">
            <div class="stripe border-left-3 bcolor-01">
                <p class="xs fw-400 color-gray">ข่าวประชาสัมพันธ์</p>
                <a class="title h6 sm fw-400 color-03 h-color-01 mt-1" href="#">
                    สารคดีสั้น ชุด ผังเมืองเรื่องต้องรู้ 18 ตอน
                </a>
            </div>
            <p class="xxs fw-500 mt-2">
                19 กุมภาพันธ์ 2564
                <em class="fas fa-eye color-01 ml-4 mr-1"></em>
                388
            </p>
            <p class="desc p xs fw-600 color-dark mt-2">
                <span class="font-01">
                    นายพรพจน์ เพ็ญพาส อธิบดีกรมโยธาธิการและผังเมือง ตรวจเยี่ยมอาคารสถานที่เพื่อเตรียมความพร้อมต่อมาตรการที่กำหนด ให้ดำเนินการในพื้นที่ควบคุมสูงสุดตามแผนความต่อเนื่อง 
                </span>
            </p>
            <div class="btns mt-2">
                <a class="btn btn-more" href="#">
                    อ่านเพิ่มเติม
                </a>
            </div>
        </div>
    </div>
<?php }else if($cardType=='Ebook'){?>
    <div class="ss-card ss-card-06 minisite ebook">
        <div class="img-container">
            <a class="ss-img no-hover adaptive-md" href="#">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-ebook-bg.jpg');"></div>
                <div class="ebook-container">
                    <img src="public/assets/app/images/ebook/main.jpg" alt="Image Ebook" />
                </div>
            </a>
        </div>
        <div class="text-container bcolor-sgray">
            <div class="stripe border-left-3 bcolor-01">
                <p class="xs fw-400 color-gray">มยผ. ด้านโยธาธิการ</p>
                <a class="title h6 sm fw-400 color-03 h-color-01 mt-1" href="#">
                    มาตรฐานการตรวจสอบ การประเมิน การซ่อมแซม 
                    และการเสริมความมั่นคงแข็งแรงโครงสร้างอาคารเก่าและโครงสร้าง
                </a>
            </div>
            <p class="xxs fw-500 mt-2">
                19 กุมภาพันธ์ 2564
                <em class="fas fa-eye color-01 ml-4 mr-1"></em>
                388
            </p>
            <p class="desc p xs fw-600 color-dark mt-2">
                <span class="font-01">
                    นายพรพจน์ เพ็ญพาส อธิบดีกรมโยธาธิการและผังเมือง 
                    ตรวจเยี่ยมอาคารสถานที่เพื่อเตรียมความพร้อมต่อมาตรการที่กำหนด 
                    ให้ดำเนินการในพื้นที่ควบคุมสูงสุดตามแผนความต่อเนื่อง 
                </span>
            </p>
            <div class="btns mt-2">
                <a class="btn btn-more" href="#">
                    อ่านเพิ่มเติม
                </a>
            </div>
        </div>
    </div>
<?php }?>
