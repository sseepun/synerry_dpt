
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
        <div class="menu-container">
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
<div class="global-search-container minisite">
    <div class="wrapper">
        <div class="close-filter global-search-toggle"></div>
        <div class="container">
            <div class="search-panel">
                <form action="/" method="GET">
                    <div class="form-group mt-0">
                        <div class="append">
                            <input type="text" class="md sgray" placeholder="พิมพ์คำค้นหาที่ต้องการ" required />
                            <button type="submit" class="icon lg">
                                <em class="fas fa-search"></em>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="item-container">
                    <p class="fw-600 color-08">คำแนะนำค้นหา</p>
                    <div class="items" data-simplebar>
                        <?php
                            foreach([
                                'ร่างธรรมนูญว่าด้วยการผังเมือง',
                                'นโยบายการตั้งถิ่นฐานและผังเมือง',
                                'สำนักงานสภาพัฒนาการเศรษฐกิจและ',
                                'สังคมแห่งชาติ',
                                'ทิศทางการพัฒนาเชิงพื้นที่',
                                'การจัดระบบเมืองที่มีคุณภาพ',
                                'ร่างธรรมนูญว่าด้วยการผังเมือง',
                                'นโยบายการตั้งถิ่นฐานและผังเมือง',
                            ] as $d){
                        ?>
                            <a class="item p sm fw-600" href="#">
                                <div class="text-container font-01">
                                    <?= $d ?>
                                </div>
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/arrow-right-black.png" alt="Image Icon" />
                                </div>
                            </a>
                        <?php }?>
                    </div>
                    <div class="btns">
                        <a class="btn btn-action btn-color-05 width-full clip-path-01" href="#">
                            ค้นหาขั้นสูง <em class="fas fa-chevron-right sm ml-2"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
