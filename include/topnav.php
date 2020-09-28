<style>
/* Topnav */
nav.topnav{position:fixed; top:0; left:0; width:100vw; transition:transform .3s; z-index:95;}
nav.topnav.sticky{transform:translateY(-3.0625rem);}
nav.topnav > .top-container{
    position:relative; width:100%; background-position:center; background-size:cover;
    padding:.375rem 0 calc(.375rem + 2px) 0;
}
nav.topnav > .top-container::after{
    content:''; position:absolute; bottom:0; left:0; right:0; height:2px; pointer-events:none;
    background-image:linear-gradient(to right,#d2bf73,#ddc256,#e7d181,#bb8932,#bb8a42,#f4efe7,
        #cfa74d, #ddc256, #d1ae65);
}
nav.topnav > .top-container .blocks{
    width:100%; display:flex; align-items:center; justify-content:space-between;
    flex-wrap:wrap;
}
nav.topnav > .top-container .block{display:flex; align-items:center;}
nav.topnav > .top-container .block > .option{
    margin:.25rem 0; font-size:1.0625rem; font-weight:300; color:#fff;
}
nav.topnav > .bottom-container{
    width:100%; background-position:center; background-size:cover; position:relative;
}
nav.topnav > .bottom-container::after{
    content:''; position:absolute; top:100%; left:0; right:0; height:2px; pointer-events:none;
    background-image:linear-gradient(to right,#d2bf73,#ddc256,#e7d181,#bb8932,#bb8a42,#f4efe7,
        #cfa74d, #ddc256, #d1ae65); z-index:1;
}
nav.topnav > .bottom-container > .container > .wrapper{
    width:100%; display:flex; align-items:center; justify-content:space-between;
}
nav.topnav .logo{
    display:flex; align-items:center; text-decoration:none; margin:.5rem .5rem .5rem 0;
    transition:opacity .3s;
}
nav.topnav .logo:hover{opacity:.75;}
nav.topnav .logo > img{display:block; height:4rem; width:auto;}
nav.topnav .logo > .text{margin:0 0 0 1rem;}
nav.topnav .logo h1{
    margin:0; line-height:1; font-weight:300; font-size:2.125rem;
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    background-image:linear-gradient(to right,#d2bf73,#ddc256,#bb8a42,#f4efe7,
        #cfa74d, #ddc256, #d1ae65);
}
nav.topnav .logo h5{margin:.125rem 0 0 0; line-height:1; font-weight:200; color:#fff;}
nav.topnav .menu-container{
    display:flex; position:relative; counter-reset:topnavCounter;
    background-image:linear-gradient(45deg,#652b74,#6b3179,#4d1959);
}
nav.topnav .menu-container::after{
    content:''; position:absolute; top:0; bottom:0; right:0; width:1px; pointer-events:none;
    background-image:linear-gradient(to bottom,#8e6099,#dacdc1,#e0d1a8,#dac57a);
}
nav.topnav .menu{position:relative; background-size:cover; background-position:center;}
nav.topnav .menu::after{
    content:''; position:absolute; top:0; bottom:0; left:0; width:1px; pointer-events:none;
    background-image:linear-gradient(to bottom,#8e6099,#dacdc1,#e0d1a8,#dac57a);
}
nav.topnav .menu::before{
    content:''; position:absolute; top:0; bottom:0; left:0; right:0; background-size:cover;
    background-position:center; pointer-events:none; opacity:0; transition:opacity .3s;
    background:#52275c;
}
nav.topnav .menu:hover::before{opacity:1;}
nav.topnav .menu > a{
    display:block; position:relative; text-decoration:none; padding:2rem 1rem .25rem 1rem;
    font-size:1.1875rem; color:#fff; font-weight:200; white-space:nowrap; transition:color .3s;
}
nav.topnav .menu:hover > a, nav.topnav .menu:hover > a::before{color:#f1d13d;}
nav.topnav .menu > a::before{
    counter-increment:topnavCounter; content:counters(topnavCounter, '.', decimal-leading-zero);
    font-size:160%; font-weight:200; margin:0 .25rem 0 0; transition:color .3s;
}
nav.topnav .menu.menu-icon > a{padding:1.125rem .625rem .75rem .625rem; text-align:center;}
nav.topnav .menu.menu-icon > a::before{display:none;}
nav.topnav .menu.menu-icon .flag-icon{
    display:block; width:1.5rem; height:1.5rem; border-radius:50%; background-size:cover;
    background-position:center; margin:0 auto;
}
nav.topnav .menu.menu-icon p{margin:.1875rem 0 0 0; text-align:center; font-size:1rem;}
nav.topnav .menu.menu-icon .icon{display:block; line-height:1; margin:0 auto; font-size:1.5rem;}
nav.topnav .menu.menu-icon .icon-bottom{
    position:absolute; bottom:.25rem; left:0; right:0; font-size:.6875rem;
}
nav.topnav .menu > .dropdown{
    position:absolute; top:calc(100% + .3125rem); left:0; background:#fff; opacity:0;
    box-shadow:0px 0px 20px 0px rgba(82,63,105,.22); pointer-events:none;
    padding:.625rem 0 .5rem 0; transition:top .3s, opacity .3s;
}
nav.topnav .menu:hover > .dropdown{top:100%; opacity:1; pointer-events:auto;}
nav.topnav .menu > .dropdown a{
    display:block; position:relative; padding:.5rem .75rem .25rem .75rem;
    text-decoration:none; transition:background .3s;
}
nav.topnav .menu > .dropdown a:hover{background:#eee;}
nav.topnav .menu > .dropdown a > p{
    margin:.1875rem 0 0 0; text-align:center; font-size:1rem; white-space:nowrap;
}
nav.topnav .menu > .submenu-dropdown{
    position:fixed; left:0; width:100vw; background:#33254f; opacity:0; pointer-events:none;
    transform:translateY(.375rem); transition:opacity .3s, transform .3s;
}
nav.topnav .menu:hover > .submenu-dropdown{opacity:1; pointer-events:auto; transform:translateY(0);}
nav.topnav .menu > .submenu-dropdown > .wrapper{
    width:100%; min-height:calc(100vh - 17rem); display:flex; position:relative;
}
nav.topnav .submenu-dropdown .hero{width:35vw; background-size:cover; background-position:center;}
nav.topnav .submenu-container{
    position:relative; width:18rem; background:#fff; padding:.875rem 0 .75rem 0;
}
nav.topnav .submenu-container::after{
    content:''; position:absolute; top:100%; left:0; width:4.5rem; height:2.25rem;
    background-image:url('public/assets/app/images/hero/01.png');
    background-size:100% auto; background-position:top left; background-repeat:no-repeat;
}
nav.topnav .submenu-container > .submenu > a, nav.topnav .submenu-level2 > .submenu > a{
    position:relative; display:block; width:100%; font-size:1.25rem; font-weight:300;
    color:#000; padding:.3125rem 1rem .3125rem 2rem; text-decoration:none; line-height:1.25;
    transition:background .3s, color .3s;
}
nav.topnav .submenu-container > .submenu:hover > a{color:#fff; background:#622a6f;}
nav.topnav .submenu-container > .submenu > a::before,
nav.topnav .submenu-level2 > .submenu > a::before{
    content:'\f054'; font-family:'Font Awesome 5 Free'; font-weight:900; font-size:.5625rem;
    position:absolute; top:0; bottom:0; left:1rem; display:flex; align-items:center;
}
nav.topnav .submenu > .submenu-level2{
    position:absolute; top:0; bottom:0; left:100%; opacity:0; pointer-events:none;
    padding:.875rem 0 .75rem 0; width:calc(65vw - 18rem - 12rem); transition:opacity .3s;
}
nav.topnav .submenu:hover > .submenu-level2{opacity:1; pointer-events:auto;}
nav.topnav .submenu-level2 > .submenu > a{color:#fff;}
nav.topnav .submenu-level2 > .submenu:hover > a{color:#f1d13d;}

nav.topnav .menu-mobile{display:none;}
nav.topnav .menu-mobile > .sidenav-btn{padding:1rem 0 1rem 1rem;}
nav.topnav .menu-mobile .hamburger > *{background:#fff;}

.topnav-filter{
    content:''; position:fixed; top:0; left:0; width:100vw; height:100vh; background:#000;
    opacity:0; pointer-events:none; transition:opacity .3s; z-index:94;
}
.topnav-filter.active{opacity:.65;}

nav.topnav ~ .topnav-spacer{display:block; width:100%; height:8.25rem;}

@media screen and (max-width:1199.98px){
    nav.topnav.sticky{transform:translateY(0);}
    nav.topnav > .top-container{display:none;}
    nav.topnav .menu-container{display:none;}
    nav.topnav .menu-mobile{display:block;}
    nav.topnav ~ .topnav-spacer{height:4.9375rem;}
}
</style>

<!-- Topnav -->
<div class="topnav-filter"></div>
<nav class="topnav">
    <!-- <div class="top-container" style="background-image:url('public/assets/app/images/bg/01.jpg');"> -->
    <div class="top-container" style="background:#ababab;">
        <div class="container">
            <div class="blocks">
                <div class="block">
                    <div class="option">
                        <a class="btn custom-btn-primary btn-xs" href="#">
                            <i class="fas fa-chevron-right mr-1"></i>
                            รู้จักสำนักงานปลัดกระทรวงฯ
                        </a>
                        <a class="btn custom-btn-secondary btn-xs" href="#">
                            <i class="fas fa-chevron-right mr-1"></i>
                            บริการประชาชน
                        </a>
                        <a class="btn custom-btn-secondary btn-xs" href="#">
                            <i class="fas fa-chevron-right mr-1"></i>
                            สำหรับเจ้าหน้าที่
                        </a>
                        <a class="btn custom-btn-secondary btn-xs" href="#">
                            <i class="fas fa-chevron-right mr-1"></i>
                            ติดต่อกระทรวง
                        </a>
                    </div>
                </div>
                <div class="block">
                    <div class="option ml-3 mr-3">
                        ขนาดตัวอักษร
                        <a class="btn custom-btn-primary btn-circle ml-1 font-size-btn" href="#" data-size="-1">-</a>
                        <a class="btn custom-btn-warning btn-circle font-size-btn" href="#" data-size="0">ก</a>
                        <a class="btn custom-btn-primary btn-circle font-size-btn" href="#" data-size="1">+</a>
                    </div>
                    <div class="option">
                        ความตัดกันของสี
                        <a class="btn custom-btn-theme-0 btn-circle ml-1 theme-btn" href="#" data-theme="0">C</a>
                        <a class="btn custom-btn-theme-1 btn-circle theme-btn" href="#" data-theme="1">C</a>
                        <a class="btn custom-btn-theme-2 btn-circle theme-btn" href="#" data-theme="2">C</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-container" style="background:#371e4f;">
        <div class="container">
            <div class="wrapper">
                <a class="logo" href="./">
                    <img src="public/assets/app/images/logo.png" alt="Logo" />
                    <div class="text">
                        <h1>กระทรวงอุตสาหกรรม</h1>
                        <h5>Ministry of Industry (Thailand)</h5>
                    </div>
                </a>
                <div class="menu-container" id="topnav-menu">

                    <div class="menu has-children">
                        <a href="#">เกี่ยวกับเรา</a>
                        <div class="submenu-dropdown">
                            <div class="wrapper">
                                <div class="hero" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                                <div class="submenu-container">
                                    <?php for($i=0; $i<12; $i++){?>
                                        <div class="submenu has-children">
                                            <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
                                            <div class="submenu-level2">
                                                <?php for($j=0; $j<12; $j++){?>
                                                    <div class="submenu">
                                                        <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
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
                        <a href="#">ผู้ประกอบการ/SME</a>
                    </div>

                    <div class="menu has-children">
                        <a href="#">นักลงทุน</a>
                        <div class="submenu-dropdown">
                            <div class="wrapper">
                                <div class="hero" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                                <div class="submenu-container">
                                    <?php for($i=0; $i<12; $i++){?>
                                        <div class="submenu has-children">
                                            <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
                                            <div class="submenu-level2">
                                                <?php for($j=0; $j<12; $j++){?>
                                                    <div class="submenu">
                                                        <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
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
                        <a href="#">นักวิชาการ</a>
                    </div>

                    <div class="menu has-children">
                        <a href="#">บุคคลทั่วไป</a>
                        <div class="submenu-dropdown">
                            <div class="wrapper">
                                <div class="hero" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                                <div class="submenu-container">
                                    <?php for($i=0; $i<12; $i++){?>
                                        <div class="submenu has-children">
                                            <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
                                            <div class="submenu-level2">
                                                <?php for($j=0; $j<12; $j++){?>
                                                    <div class="submenu">
                                                        <a href="#">e-Service กรมโรงงานอุตสาหกรรม</a>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu menu-icon">
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
                    </div>
                    <div class="menu menu-icon">
                        <a class="global-search-toggle" href="#">
                            <i class="icon fas fa-search"></i>
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
                <h1 class="color-white text-center mt-0 mb-0-5">
                    คุณกำลังมองหาอะไร?
                </h1>
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
