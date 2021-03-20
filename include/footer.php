
<!-- Back to Top -->
<a class="back-to-top active" href="#">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- Footer -->
<nav class="footer bg-t border-top bcolor-t">
    <div class="container">
        <div class="blocks">
            <div class="block block-left">
                <a class="logo" href="#">
                    <img src="public/assets/app/images/logo.png" alt="Website Logo" />
                    <div class="text-wrapper">
                        <h6 class="color-p">
                            สำนักงานผู้ดูแลนักเรียนในสหรัฐอเมริกา
                        </h6>
                        <p class="color-white">
                            Office of Educational Affairs <br>
                            Royal Thai Embassy, Washington DC
                        </p>
                    </div>
                </a>
                <div class="slot">
                    <p class="xs color-white op-80">
                        1906 23rd Street, N.W. <br>
                        Washington D.C. 20008
                    </p>
                </div>
                <div class="slot">
                    <div class="btns">
                        <a class="btn btn-social btn-color-p" href="#">
                            <em class="fab fa-facebook-f"></em>
                        </a>
                        <a class="btn btn-social btn-color-p" href="#">
                            <em class="fas fa-phone-alt"></em>
                        </a>
                        <a class="btn btn-social btn-color-p" href="#">
                            <em class="fas fa-sitemap"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="block block-right">
                <div class="grids">
                    <?php for($i=0; $i<4; $i++){?>
                        <div class="grid md-25 xs-50">
                            <a class="p xs fw-400 color-white h-color-p" href="#">
                                เครือข่ายเวปที่น่าสนใจ
                            </a>
                            <ul class="links">
                                <?php
                                    foreach([
                                        'สำนักงาน ก.พ.', 'สนร. อังกฤษ', 'สนร. ฝรั่งเศส', 'สนร. เยอรมนี',
                                        'สนร. ออสเตรเลีย', 'สนร. ญี่ปุ่น', 'สถานเอกอัครราชทูต ณ กรุงวอชิงตัน',
                                        'กระทรวงต่างประเทศ'
                                    ] as $k){
                                ?>
                                    <li>
                                        <a class="p xxs fw-300 color-white h-color-p" href="#">
                                            <?= $k ?>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Super Footer -->
<nav class="sfooter color-white bg-black border-top bcolor-black">
    <div class="container">
        <div class="blocks">
            <div class="block">
                <p class="xxs">
                    1906 23rd Street, N.W., Washington D.C. 20008
                </p>
                <div class="d-flex ai-center mt-1">
                    <p class="xxs">จำนวนผู้เข้าชม</p>
                    <div class="visitor-count">
                        <div>3</div>
                        <div>8</div>
                        <div>4</div>
                        <div>6</div>
                        <div>7</div>
                        <div>1</div>
                        <div>2</div>
                    </div>
                </div>
            </div>
            <div class="block">
                <p class="xxs op-70">
                    &copy; 2021 by Office of Educational Affairs.
                    All rights reserved.
                </p>
                <div class="quicklinks">
                    <a class="h-color-p" href="#">นโยบายเว็บไซต์</a>
                    <a class="h-color-p" href="#">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a>
                    <a class="h-color-p" href="#">นโยบายคุ้กกี้</a>
                </div>
            </div>
        </div>
    </div>
</nav>
