
<!-- Topnav Secretary -->
<nav class="topnav-secretary">
    <div class="blocks">
        <div class="block ai-unset">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo-white.png" alt="Website Logo" />
                <div class="text-wrapper">
                    <h6>สำนักงานปลัดกระทรวงพลังงาน</h6>
                    <p>SECRETARY OF ENERGY</p>
                </div>
            </a>
            <div class="menu-container">
                <?php
                    foreach([
                        'หน้าแรก', 'เกี่ยวกับกระทรวง', 'การให้บริการ', 
                        'ข่าว/ประกาศ', 'แผน/ผลการดำเนินงาน', 'ติดต่อเรา'
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
            <a class="option" href="#">
                <em class="zmdi zmdi-male"></em>
            </a>
            <a class="option" href="#">
                <em class="zmdi zmdi-search"></em>
            </a>
        </div>
    </div>
</nav>
