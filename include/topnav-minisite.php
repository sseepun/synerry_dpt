
<!-- Super Topnav Minisite -->
<nav class="stopnav-minisite">
    <div class="container">
        <div class="blocks">
            <div class="block">
                <a class="logo" href="#">
                    <img src="public/assets/app/images/logo.png" alt="Image Logo" />
                    <div class="text-container">
                        <h6><span class="font-01">กรมโยธาธิการและผังเมือง</span></h6>
                        <p><span class="font-01">จังหวัดนครปฐม</span></p>
                    </div>
                </a>
            </div>
            <div class="block right">
                <div class="block">
                    <div class="option">
                        <a href="#">
                            <em class="fas fa-lock"></em> เข้าสู่ระบบ
                        </a>
                    </div>
                    <div class="option">
                        <a href="#">
                            <em class="fas fa-sitemap"></em> แผนผังเว็บไซต์
                        </a>
                    </div>
                    <div class="option">
                        <a href="#">
                            <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                            <div class="chev">
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 6.99995L0.75 1.74995L1.8 0.699951L6 4.89995L10.2 0.699951L11.25 1.74995L6 6.99995Z" />
                                </svg>
                            </div>
                        </a>
                        <div class="dropdown">
                            <a href="#">
                                <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <a class="btn-menu global-search-toggle" href="#">
                    <div class="wrapper">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.7502 20.6895L16.0861 15.0254C17.4471 13.3914 18.1258 11.2956 17.981 9.17399C17.8362 7.05236 16.8789 5.06824 15.3085 3.63438C13.738 2.20053 11.6752 1.42733 9.54918 1.47565C7.42316 1.52396 5.39761 2.39006 3.89389 3.89377C2.39018 5.39748 1.52408 7.42304 1.47577 9.54906C1.42746 11.6751 2.20065 13.7379 3.63451 15.3084C5.06836 16.8788 7.05248 17.836 9.17412 17.9809C11.2958 18.1257 13.3915 17.447 15.0255 16.086L20.6896 21.7501L21.7502 20.6895ZM3.00018 9.75006C3.00018 8.41503 3.39606 7.10999 4.13776 5.99996C4.87946 4.88992 5.93366 4.02476 7.16706 3.51387C8.40047 3.00298 9.75766 2.8693 11.067 3.12975C12.3764 3.39021 13.5791 4.03308 14.5231 4.97708C15.4672 5.92109 16.11 7.12382 16.3705 8.4332C16.6309 9.74257 16.4973 11.0998 15.9864 12.3332C15.4755 13.5666 14.6103 14.6208 13.5003 15.3625C12.3902 16.1042 11.0852 16.5001 9.75018 16.5001C7.96058 16.4981 6.24484 15.7863 4.9794 14.5208C3.71396 13.2554 3.00216 11.5397 3.00018 9.75006Z" />
                            </svg>
                        </div>
                        ค้นหา
                    </div>
                </a>
                <a class="btn-menu show-mobile sidenav-toggle" href="#">
                    <div class="hamburger">
                        <div></div><div></div><div></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Topnav Minisite -->
<?php
    $topnavMenu = [
        [
            'href' => '#', 'text' => 'หน้าแรก'
        ],
        [
            'href' => '#', 'text' => 'แนะนำกรม'
        ],
        [
            'href' => '#', 'text' => 'หน่วยงานในสังกัดกรม'
        ],
        [
            'href' => '#', 'text' => 'หน่วยงานใน มท.'
        ],
        [
            'href' => '#', 'text' => 'ศูนย์ข้อมูล'
        ],
        [
            'href' => '#', 'text' => 'ติดต่อสื่อสาร'
        ]
        ];
?>
<nav class="topnav-minisite" style="--nmenu:<?= sizeof($topnavMenu) ?>;">
    <div class="container">
        <div class="menu-container" id="topnav-menu">
            <?php foreach($topnavMenu as $i=>$d){?>
                <div class="menu <?php if($topnavActiveIndex==$i)echo 'active'; ?>">
                    <a href="<?= $d['href'] ?>">
                        <?= $d['text'] ?>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav minisite">
    <div class="wrapper">
        <div class="sidenav-toggle">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="options">
            <div class="option-btn">
                <a href="#">
                    <em class="fas fa-lock mr-2"></em> เข้าสู่ระบบ
                </a>
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
<div class="global-search-container minisite">
    <div class="wrapper">
        <div class="close-filter global-search-toggle"></div>
        <div class="container">
            <div class="btns">
                <a class="btn-close global-search-toggle" href="#">
                    <div class="hamburger active">
                        <div></div><div></div><div></div>
                    </div>
                </a>
            </div>
            <div class="search-panel">
                <form action="/" method="GET">
                    <p class="h4 fw-500 text-center">
                        กรุณาระบุคำค้นหาที่ท่านต้องการ
                    </p>
                    <div class="form-group mt-2">
                        <div class="append">
                            <input type="text" placeholder="ค้นหา" required />
                            <button type="submit" class="icon lg">
                                <em class="fas fa-search"></em>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="d-flex ai-center jc-space-between mt-3">
                    <p class="lg fw-600 pt-2">ประวัติการค้นหา</p>
                    <a class="btn btn-action btn-2xs btn-color-09 mt-1" href="#">
                        <em class="far fa-times-circle mr-1"></em>
                        ลบประวัติการค้นหา
                    </a>
                </div>
                <div class="gallery-grids mt-3">
                    <div class="grid sm-50 mt-0">
                        <ul class="ss-list-02 lg">
                            <li><a class="color-dark h-color-01" href="#">
                                วันสตรีสากล
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                การใช้พลังงานในชีวิตประจําวัน
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                พลังงานไฟฟ้า
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                ถ่านหิน
                            </a></li>
                        </ul>
                    </div>
                    <div class="grid sm-50 mt-0">
                        <ul class="ss-list-02 lg">
                            <li><a class="color-dark h-color-01" href="#">
                                ประชาคมถ่านหินและเหล็กกล้าแห่งยุโรป
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                รัฐสมาชิกสหภาพยุโรป
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                รถพลังงานไฟฟ้า
                            </a></li>
                            <li><a class="color-dark h-color-01" href="#">
                                รถรางไฟฟ้า
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Accessibility -->
<nav class="side-panel access-panel minisite">
    <div class="wrapper">
        <div class="panel">
            <div class="panel-row">
                <div class="icon">
                    <img src="public/assets/app/images/icon/access.png" alt="Image Icon" />
                </div>
                <p class="fw-600"><span class="font-01">การช่วยการเข้าถึง</span></p>
            </div>
            <div class="panel-row">
                <div class="icon-width">
                    <p class="fw-600"><span class="font-01">ขนาดตัวอักษร</span></p>
                </div>
                <div class="options">
                    <a class="option btn font-size-btn" data-size="14">
                        <span style="font-size:14px;">ก</span>
                    </a>
                    <a class="option btn font-size-btn active" data-size="16">
                        <span style="font-size:16px;">ก</span>
                    </a>
                    <a class="option btn font-size-btn" data-size="18">
                        <span style="font-size:20px;">ก</span>
                    </a>
                </div>
            </div>
            <div class="panel-row">
                <div class="icon-width">
                    <p class="fw-600"><span class="font-01">ขนาดเคอเซอร์</span></p>
                </div>
                <div class="options">
                    <a class="option btn-lsp active" data-lsp="0" href="#">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="50px" height="16px" style="transform:scale(.8)"
                        >
                            <path fill-rule="evenodd" 
                                d="M48.697,8.710 L48.121,9.269 L41.498,15.696 L41.199,15.987 L40.906,15.691 L40.341,15.120 L40.048,14.824 L40.347,14.534 L45.857,9.187 L35.768,8.924 L35.356,8.913 L35.360,8.505 L35.368,7.706 L35.372,7.285 L35.798,7.296 L45.841,7.557 L40.474,2.133 L40.181,1.836 L40.480,1.546 L41.056,0.987 L41.355,0.697 L41.649,0.993 L48.138,7.553 L48.703,8.123 L48.996,8.419 L48.697,8.710 ZM30.405,7.104 L32.289,7.104 L32.289,8.970 L30.405,8.970 L30.405,7.104 ZM25.682,7.104 L27.566,7.104 L27.566,8.970 L25.682,8.970 L25.682,7.104 ZM20.959,7.104 L22.844,7.104 L22.844,8.970 L20.959,8.970 L20.959,7.104 ZM16.236,7.104 L18.121,7.104 L18.121,8.970 L16.236,8.970 L16.236,7.104 ZM13.636,8.271 L13.632,8.693 L13.206,8.682 L3.163,8.421 L8.530,13.845 L8.823,14.142 L8.524,14.432 L7.948,14.991 L7.649,15.281 L7.356,14.985 L0.866,8.425 L0.302,7.855 L0.009,7.558 L0.308,7.268 L0.884,6.709 L7.506,0.281 L7.805,-0.009 L8.099,0.287 L8.663,0.857 L8.956,1.154 L8.657,1.444 L3.147,6.791 L13.237,7.054 L13.649,7.065 L13.644,7.473 L13.636,8.271 Z"/>
                        </svg>
                    </a>
                    <a class="option btn-lsp" data-lsp="1" href="#">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="64px" height="18px" style="transform:scale(.8)"
                        >
                            <path fill-rule="evenodd" 
                                d="M56.013,9.163 L55.440,9.722 L48.846,16.149 L48.548,16.440 L48.256,16.143 L47.694,15.574 L47.403,15.277 L47.700,14.987 L53.186,9.639 L43.140,9.377 L42.730,9.366 L42.734,8.958 L42.743,8.160 L42.747,7.738 L43.171,7.749 L53.170,8.010 L47.827,2.586 L47.535,2.289 L47.833,1.999 L48.406,1.441 L48.704,1.150 L48.996,1.447 L55.457,8.006 L56.019,8.576 L56.311,8.873 L56.013,9.163 ZM34.801,7.556 L36.677,7.556 L36.677,9.423 L34.801,9.423 L34.801,7.556 ZM27.748,7.556 L29.624,7.556 L29.624,9.423 L27.748,9.423 L27.748,7.556 ZM20.694,7.556 L22.570,7.556 L22.570,9.423 L20.694,9.423 L20.694,7.556 ZM14.105,8.724 L14.101,9.146 L13.677,9.135 L3.678,8.873 L9.021,14.298 L9.313,14.594 L9.015,14.884 L8.442,15.443 L8.144,15.734 L7.852,15.438 L1.391,8.878 L0.829,8.308 L0.537,8.011 L0.835,7.721 L1.408,7.162 L8.002,0.734 L8.300,0.444 L8.592,0.740 L9.154,1.311 L9.445,1.607 L9.148,1.897 L3.662,7.245 L13.707,7.507 L14.118,7.517 L14.113,7.926 L14.105,8.724 Z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="panel-row">
                <div class="icon-width">
                    <p class="fw-600"><span class="font-01">การแสดงผล</span></p>
                </div>
                <div class="options">
                    <a class="option-row theme-btn active" data-theme="0" href="#">
                        <div class="icon">
                            <img src="public/assets/app/images/misc/color-0.png" alt="Image Icon" />
                        </div>
                        <p class="fw-600"><span class="font-01">สีปกติ</span></p>
                    </a>
                    <a class="option-row theme-btn" data-theme="1" href="#">
                        <div class="icon">
                            <img src="public/assets/app/images/misc/color-1.png" alt="Image Icon" />
                        </div>
                        <p class="fw-600"><span class="font-01">ขาว-ดำ</span></p>
                    </a>
                    <a class="option-row theme-btn" data-theme="2" href="#">
                        <div class="icon">
                            <img src="public/assets/app/images/misc/color-2.png" alt="Image Icon" />
                        </div>
                        <p class="fw-600"><span class="font-01">ดำ-เหลือง</span></p>
                    </a>
                </div>
            </div>
            <div class="panel-row">
                <div class="icon-width">
                    <p class="fw-600"><span class="font-01">ขนาดเคอเซอร์</span></p>
                </div>
                <div class="options">
                    <a class="option btn-cursor active" data-cursor="1" href="#">
                        <img src="public/assets/app/images/icon/cursor.svg" alt="Image Cursor" />
                        <img src="public/assets/app/images/icon/cursor-active.svg" alt="Image Cursor" />
                    </a>
                    <a class="option btn-cursor" data-cursor="0.8" href="#">
                        <img src="public/assets/app/images/icon/cursor.svg" alt="Image Cursor" />
                        <img src="public/assets/app/images/icon/cursor-active.svg" alt="Image Cursor" />
                    </a>
                    <a class="option btn-cursor" data-cursor="0.6" href="#">
                        <img src="public/assets/app/images/icon/cursor.svg" alt="Image Cursor" />
                        <img src="public/assets/app/images/icon/cursor-active.svg" alt="Image Cursor" />
                    </a>
                </div>
            </div>
        </div>
        <a class="icon" href="#">
            <img src="public/assets/app/images/icon/access.png" alt="Image Icon" />
        </a>
    </div>
</nav>
