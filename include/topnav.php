
<!-- Super Topnav -->
<nav class="stopnav color-sgray bcolor-02 bg-02">
    <div class="container">
        <div class="blocks">
            <div class="block right color-white">
                <div class="text-wrapper">
                    บัญชีของ 
                    <a class="color-01 h-color-white" href="#">
                        คุณจักรพงษ
                    </a>
                    <span class="sep">|</span>
                    <a class="color-white h-color-01" href="#">
                        ออกจากระบบ
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Topnav -->
<nav class="topnav">
    <div class="container">
        <div class="blocks">
            <div class="block ai-unset">
                <a class="logo" href="#">
                    <div class="img-container">
                        <img src="public/assets/app/images/logo.png" alt="Website Logo" />
                    </div>
                    <div class="text-wrapper">
                        <h6 class="color-02">
                            <span class="font-01">
                                กรมโยธาธิการและผังเมือง
                            </span>
                        </h6>
                        <p class="color-dark">
                            <span class="font-02">
                                DEPARTMENT OF PUBLIC WORKS <br>
                                AND TOWN & COUNTRY PLANNING
                            </span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="menu-container hide-mobile" id="topnav-menu">
                <?php
                    foreach([
                        'แนะนำกรม', 'หน่วยงานในสังกัดกรม', 'หน่วยงานในมท.', 
                        'ศูนย์ข้อมูล', 'ติดตอสื่อสาร'
                    ] as $i=>$d){
                ?>
                    <div class="menu has-children">
                        <a href="#" data-dropdown="<?= $i ?>">
                            <?= $d ?> <em class="fas fa-chevron-down"></em>
                        </a>
                        <div class="submenu-dropdown <?php
                            if($i>3)echo 'anchor-right';
                            else if($i>1)echo 'anchor-middle';
                        ?>">
                            <div class="submenu-blocks">
                                <div class="submenu-block">
                                    <h6 class="submenu-title p lg fw-600"><?= $d ?></h6>
                                    <div class="submenu">
                                        <a href="#">ทิศทางองค์กร</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ภารกิจ 4 ด้าน</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">การแบ่งส่วนราชการกรมโยธาธิการและผังเมือง</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">อำนาจหน้าที่ของกรมและส่วนราชการ</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ประวัติความเป็นมาและตราสัญลักษณ์</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">โครงสร้างองค์กร</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ทำเนียบผู้บริหารกรมฯ</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">รายงานผล</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">แผนงาน</a>
                                    </div>
                                </div>
                                <!-- <div class="submenu-block">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="block mobile-right">
                <a class="option sidenav-toggle" href="#">
                    <div class="hamburger">
                        <div></div><div></div><div></div>
                    </div>
                </a>
                <div class="option pr-1">
                    <div class="flag-wrapper">
                        <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                        <em class="fas fa-chevron-down"></em>
                    </div>
                    <div class="dropdown">
                        <a class="flag-wrapper" href="#">
                            <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                        </a>
                    </div>
                </div>
                <a class="option global-search-toggle" href="#">
                    <em class="fas fa-search"></em>
                </a>
            </div>
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
