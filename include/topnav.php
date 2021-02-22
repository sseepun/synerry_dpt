
<!-- Topnav -->
<nav class="topnav">
    <div class="blocks">
        <div class="block">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo-white.png" alt="Website Logo" />
            </a>
            <div class="menu-container">
                <?php
                    foreach([
                        'อัพเดทข่าวพลังงาน', 'สถิติพลังงาน', 'ข่าวสารพลังงานจังหวัด', 
                        'ข่าวประกาศ', 'สื่อมัลติมีเดีย', 'หน่วยงานที่เกี่ยวข้อง'
                    ] as $i=>$d){
                ?>
                    <div class="menu">
                        <a href="#" data-dropdown="<?= $i ?>">
                            <div class="num">0<?= $i+1 ?></div>
                            <?= $d ?>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="block">
            <a class="option topnav-dropdown-toggle" href="#">
                <div class="hamburger">
                    <div></div><div></div><div></div>
                </div>
            </a>
            <a class="option global-search-toggle" href="#">
                <em class="zmdi zmdi-search"></em>
            </a>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Topnav Option -->
<div class="topnav-option" style="background-image:url('public/assets/app/images/bg/topnav-option.jpg');">
    <div class="container">
        <div class="blocks">
            <div class="block">
                <span class="text">ขนาดตัวอักษร</span>
                <a class="btn font-size-btn btn-circle" href="#" data-size="-1">-</a>
                <a class="btn font-size-btn btn-circle circular shadow" href="#" data-size="0">ก</a>
                <a class="btn font-size-btn btn-circle" href="#" data-size="1">+</a>
            </div>
            <div class="block">
                <span class="text">ความตัดกันของสี</span>
                <a class="btn theme-btn btn-circle circular shadow" href="#" data-theme="0">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="1">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="2">C</a>
            </div>
            <div class="block">
                <div class="flag-wrapper circular shadow">
                    <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                    <div class="text">ไทย</div>
                    <em class="fas fa-chevron-down"></em>
                </div>
                <div class="dropdown">
                    <div class="flag-wrapper">
                        <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                        <div class="text">อังกฤษ</div>
                    </div>
                </div>
            </div>
            <div class="block">
                <a class="btn btn-circle circular" href="#">
                    <em class="fab fa-facebook-f"></em>
                </a>
                <a class="btn btn-circle circular" href="#">
                    <em class="fab fa-youtube"></em>
                </a>
                <a class="btn btn-circle circular" href="#">
                    <em class="fas fa-sitemap"></em>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Topnav Dropdown -->
<div class="topnav-dropdown">
    <div class="wrapper">
        <div class="close-filter topnav-dropdown-toggle"></div>
        <div class="content-container">

        </div>
        <div class="btn-container topnav-dropdown-toggle">
            <div class="hamburger active">
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
</div>

<!-- Global Search -->
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
                            <input type="text" class="round width-full" name="keywords" placeholder="ค้นหา" required title="General Text Input" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="btn-container global-search-toggle">
            <div class="hamburger active">
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
</div>
