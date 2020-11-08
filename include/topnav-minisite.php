
<!-- Topnav -->
<div class="topnav-filter"></div>
<nav class="topnav">
    <div class="top-container" style="background-image:url('public/assets/app/images/bg/01.jpg');">
        <div class="container">
            <div class="blocks">
                <div class="block"></div>
                <div class="block">
                    <div class="option ml-3 mr-3">
                        ขนาดตัวอักษร
                        <a class="btn custom-btn-primary btn-circle ml-1 font-size-btn" href="#" data-size="-1">-</a>
                        <a class="btn custom-btn-warning btn-circle font-size-btn" href="#" data-size="0">ก</a>
                        <a class="btn custom-btn-primary btn-circle font-size-btn" href="#" data-size="1">+</a>
                    </div>
                    <div class="option mr-3">
                        ความตัดกันของสี
                        <a class="btn custom-btn-theme-0 btn-circle ml-1 theme-btn" href="#" data-theme="0">C</a>
                        <a class="btn custom-btn-theme-1 btn-circle theme-btn" href="#" data-theme="1">C</a>
                        <a class="btn custom-btn-theme-2 btn-circle theme-btn" href="#" data-theme="2">C</a>
                    </div>
                    <div class="option" style="cursor:pointer;">
                        ภาษาไทย
                        <div class="flag-icon btn btn-circle ml-1" 
                        style="background-image:url('public/assets/app/images/default/th_flag.png');"></div>
                        <div class="dropdown">
                            <a href="#">
                                ภาษาอังกฤษ
                                <div class="flag-icon btn btn-circle ml-2" 
                                style="background-image:url('public/assets/app/images/default/us_flag.png');"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-container" style="background:#371e4f;">
        <div class="container">
            <div class="wrapper">
                <a class="logo" href="./">
                    <img src="public/assets/app/images/logo-minisite.png" alt="Logo" />
                    <div class="text">
                        <h2>สำนักงานอุตสาหกรรม</h2>
                        <h1>จังหวัดเชียงราย</h1>
                    </div>
                </a>
                <div class="menu-container" id="topnav-menu">

                    <div class="menu has-children">
                        <a href="#">รู้จักสำนักงานปลัดฯ</a>
                        <div class="submenu-dropdown">
                            <div class="wrapper">
                                <div class="hero" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                                <div class="submenu-container">
                                    <?php for($i=0; $i<3; $i++){?>
                                        <div class="submenu has-children">
                                            <a href="#">
                                                e-Service กรมโรงงานอุตสาหกรรม <?= $i ?>
                                            </a>
                                            <div class="submenu-container level-1">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="submenu has-children">
                                                        <a href="#">
                                                            e-Service กรมโรงงานอุตสาหกรรม <?= $j ?>
                                                        </a>
                                                        <div class="submenu-container level-2">
                                                            <?php for($k=0; $k<13; $k++){?>
                                                                <div class="submenu">
                                                                    <a href="#">
                                                                        e-Service กรมโรงงานอุตสาหกรรม <?= $k ?>
                                                                    </a>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <a href="#">บริการประชาชน</a>
                    </div>

                    <div class="menu has-children">
                        <a href="#">สำหรับเจ้าหน้าที่</a>
                        <div class="submenu-dropdown">
                            <div class="wrapper">
                                <div class="hero" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                                <div class="submenu-container">
                                    <?php for($i=0; $i<3; $i++){?>
                                        <div class="submenu has-children">
                                            <a href="#">
                                                e-Service กรมโรงงานอุตสาหกรรม <?= $i ?>
                                            </a>
                                            <div class="submenu-container level-1">
                                                <?php for($j=0; $j<2; $j++){?>
                                                    <div class="submenu has-children">
                                                        <a href="#">
                                                            e-Service กรมโรงงานอุตสาหกรรม <?= $j ?>
                                                        </a>
                                                        <div class="submenu-container level-2">
                                                            <?php for($k=0; $k<13; $k++){?>
                                                                <div class="submenu">
                                                                    <a href="#">
                                                                        e-Service กรมโรงงานอุตสาหกรรม <?= $k ?>
                                                                    </a>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <a href="#">ติดต่อเรา</a>
                    </div>

                    <!-- <div class="menu menu-icon" style="background-image:url('public/assets/app/images/bg/07.jpg');">
                        <a href="javascript:">
                            <div class="flag-icon" style="background-image:url('public/assets/app/images/default/th_flag.png');"></div>
                            <p>ภาษาไทย</p>
                            <i class="icon-bottom fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown">
                            <a href="#">
                                <div class="flag-icon" style="background-image:url('public/assets/app/images/default/us_flag.png');"></div>
                                <p>ภาษาอังกฤษ</p> 
                            </a>
                        </div>
                    </div> -->
                    <div class="menu menu-icon" style="background-image:url('public/assets/app/images/bg/06.jpg');">
                        <a class="global-search-toggle" href="#">
                            <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                            <p>ค้นหา</p>
                        </a>
                    </div>
                </div>
                <div class="menu-mobile">
                    <div class="sidenav-btn">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-btn">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="options">
            <div class="option">
                <div class="icon">ก</div>
                <div class="dropdown">
                    <div class="btn font-size-btn" data-size="-1">-</div>
                    <div class="btn font-size-btn" data-size="0">ก</div>
                    <div class="btn font-size-btn" data-size="1">+</div>
                </div>
            </div>
            <div class="option">
                <div class="icon">C</div>
                <div class="dropdown">
                    <div class="btn theme-btn" data-theme="0">C</div>
                    <div class="btn theme-btn" data-theme="1">C</div>
                    <div class="btn theme-btn" data-theme="2">C</div>
                </div>
            </div>
            <div class="option">
                <div class="flag" style="background-image:url('public/assets/app/images/default/th_flag.png');"></div>
                <div class="dropdown">
                    <a href="#">
                        <div class="flag" style="background-image:url('public/assets/app/images/default/us_flag.png');"></div>
                    </a>
                </div>
            </div>
            <div class="option global-search-toggle">
                <div class="icon"><i class="fas fa-search"></i></div>
            </div>
        </div>
        <div class="scroll-wrapper" data-simplebar>
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Search Container -->
<div class="global-search-container use-gsap">
    <div class="wrapper">
        <div class="hamburger active global-search-toggle">
            <div></div><div></div><div></div>
        </div>
        <div class="container">
            <form action="/" method="GET">
                <h3 class="color-white text-center mt-0 mb-0-5">
                    คุณกำลังมองหาอะไร?
                </h3>
                <div class="input-container">
                    <input type="text" name="keywords" placeholder="ค้นหา" required>
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
