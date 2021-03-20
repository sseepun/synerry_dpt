
<!-- Super Topnav -->
<nav class="stopnav color-white bcolor-t bg-t">
    <div class="blocks">
        <div class="block hide-mobile mr-3">
            <span class="text">ขนาดตัวอักษร</span>
            <a class="btn font-size-btn btn-circle" href="#" data-size="-1">-</a>
            <a class="btn font-size-btn btn-circle" href="#" data-size="0">ก</a>
            <a class="btn font-size-btn btn-circle" href="#" data-size="1">+</a>
        </div>
        <div class="block hide-mobile mr-3">
            <span class="text">ความตัดกันของสี</span>
            <a class="btn theme-btn btn-circle" href="#" data-theme="0">C</a>
            <a class="btn theme-btn btn-circle" href="#" data-theme="1">C</a>
            <a class="btn theme-btn btn-circle" href="#" data-theme="2">C</a>
        </div>
        <div class="block hide-mobile mr-3">
            <div class="flag-wrapper">
                <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                <div class="text">ไทย</div>
                <em class="fas fa-chevron-down"></em>
            </div>
            <div class="dropdown">
                <a class="flag-wrapper" href="#">
                    <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                    <div class="text">อังกฤษ</div>
                </a>
            </div>
        </div>
        <div class="block right mr-3">
            <a class="btn btn-circle" href="#">
                <em class="fab fa-facebook-f"></em>
            </a>
            <a class="btn btn-circle" href="#">
                <em class="fas fa-phone-alt"></em>
            </a>
            <a class="btn btn-circle" href="#">
                <em class="fas fa-sitemap"></em>
            </a>
        </div>
        <div class="block">
            <a class="btn btn-action btn-color-p btn-2xs" href="#">
                เข้าสู่ระบบ <em class="fas fa-lock ml-1"></em>
            </a>
        </div>
    </div>
</nav>

<!-- Topnav -->
<nav class="topnav">
    <div class="blocks">
        <div class="block ai-unset">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo.png" alt="Website Logo" />
                <div class="text-wrapper">
                    <h6 class="color-t">
                        สำนักงานผู้ดูแลนักเรียนในสหรัฐอเมริกา
                    </h6>
                    <p class="color-p">
                        Office of Educational Affairs <br>
                        Royal Thai Embassy, Washington DC
                    </p>
                </div>
            </a>
        </div>
        <div class="menu-container hide-mobile" id="topnav-menu">
            <?php
                foreach([
                    'หน้าแรก', 'ข่าวสาร', 'ระเบียบ', 'ดาวน์โหลดแบบคำขอ', 
                    'บริการ สนร.', 'รู้จัก สนร.', 'สาระน่ารู้'
                ] as $i=>$d){
            ?>
                <div class="menu has-children">
                    <a href="#" data-dropdown="<?= $i ?>">
                        <?= $d ?>
                    </a>

                    <div class="submenu-dropdown <?php
                        if($i>3)echo 'anchor-right';
                        else if($i>1)echo 'anchor-middle';
                    ?>">
                        <div class="submenu-blocks">
                            <div class="submenu-block">
                                <h6 class="submenu-title p lg fw-600"><?= $d ?></h6>
                                <div class="submenu">
                                    <a href="#">ประวัติกระทรวงพลังงาน</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">วิสัยทัศน์ พันธกิจ และตราสัญลักษณ์</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">ผู้บริหารระดับสูง</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง (CIO)</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">โครงสร้างส่วนราชการ</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">อำนาจหน้าที่</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">เจตจำนงสุจริตของผู้บริหาร</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">การมีส่วนร่วมของผู้บริหาร</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">กฎหมาย/พรบ.ด้านพลังงาน</a>
                                </div>
                            </div>
                            <div class="submenu-block">
                                <h6 class="submenu-title p lg fw-600"><?= $d ?></h6>
                                <div class="submenu">
                                    <a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">สำนักงานพลังงานจังหวัด</a>
                                </div>
                                <div class="submenu">
                                    <a href="#">ข้อมูลพลังงาน</a>
                                </div>
                                <div class="submenu has-children">
                                    <a href="#">นโยบายพลังงาน</a>
                                    <div class="submenu-block">
                                        <div class="submenu">
                                            <a href="#">นโยบายด้านพลังงานของรัฐบาล</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">คำแถลงนโยบายของคณะรัฐมนตรี</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ยุทธศาสตร์ด้านพลังงาน</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">มติคณะ กพช./กบง.</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">แผนการบริหารราชการแผ่นดิน</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
        <div class="block mobile-right">
            <a class="option global-search-toggle" href="#">
                <em class="fas fa-search"></em>
            </a>
            <a class="option sidenav-toggle show-mobile" href="#">
                <div class="hamburger">
                    <div></div><div></div><div></div>
                </div>
            </a>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-toggle">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="options">
            <div class="option">
                <div class="icon">ก</div>
                <div class="dropdown">
                    <div class="icon font-size-btn" data-size="-1">-</div>
                    <div class="icon font-size-btn" data-size="0">ก</div>
                    <div class="icon font-size-btn" data-size="1">+</div>
                </div>
            </div>
            <div class="option">
                <div class="icon">C</div>
                <div class="dropdown">
                    <div class="icon theme-btn" data-theme="0">C</div>
                    <div class="icon theme-btn" data-theme="1">C</div>
                    <div class="icon theme-btn" data-theme="2">C</div>
                </div>
            </div>
            <div class="option">
                <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                <div class="dropdown">
                    <a href="#">
                        <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="scroll-wrapper" data-simplebar>
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Global Search Container -->
<div class="global-search-container">
    <div class="wrapper">
        <div class="close-filter global-search-toggle"></div>
        <div class="content-container">
            <div class="ss-box-lg">
                <form action="/" method="GET">
                    <h6 class="h4 lg fw-600 color-black text-center">
                        กรุณาระบุคำค้นหาที่ท่านต้องการ
                    </h6>
                    <div class="form-group mt-1">
                        <div class="search-wrapper">
                            <input type="text" class="width-full" name="keywords" placeholder="ค้นหา" required title="General Text Input" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="btn-container global-search-toggle">
                <div class="hamburger active">
                    <div></div><div></div><div></div>
                </div>
            </div>
        </div>
    </div>
</div>
