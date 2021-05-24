<style>
/* Breadcrumb 02 */
.breadcrumb-02{position:relative; display:block; width:100%; overflow:hidden;}
.breadcrumb-02 > .breadcrumb-container{
    width:100%; background-size:cover; background-position:center;
}
.breadcrumb-02 > .breadcrumb-container > .container{
    height:14rem; position:relative; display:flex; align-items:flex-end;
}
.breadcrumb-02 .breadcrumb-wrapper{
    position:absolute; top:0; left:0; display:flex; align-items:center;
    padding:.875rem 1rem; min-width:19rem;
}
.breadcrumb-02 .breadcrumb-wrapper a{font-size:.8125rem; font-weight:200;}
.breadcrumb-02 .breadcrumb-wrapper em{font-size:.5625rem; margin:0 .5rem;}
.breadcrumb-02 .ss-icon-title-01{transform-origin:bottom left; transform:scale(1.2);}
@media screen and (max-width:991.98px){
    .breadcrumb-02 > .breadcrumb-container > .container{height:12rem;}
}
@media screen and (max-width:767.98px){
    .breadcrumb-02 > .breadcrumb-container > .container{padding-bottom:1rem;}
    .breadcrumb-02 .ss-icon-title-01{transform:scale(1);}
}
@media screen and (max-width:575.98px){
    .breadcrumb-02 .breadcrumb-wrapper{left:1rem;}
}
/* Breadcrumb 02 */
.breadcrumb-02 .breadcrumb-wrapper{background:#4d2224;}
.breadcrumb-02 .breadcrumb-wrapper a{color:#ffffff;}
.breadcrumb-02 .breadcrumb-wrapper a:hover,
.breadcrumb-02 .breadcrumb-wrapper a:last-child{color:#ffd000;}
.breadcrumb-02 .breadcrumb-wrapper em{color:#ffd000;}
.breadcrumb-02 .ss-icon-title-01 > .text-icon, .breadcrumb-02 .ss-icon-title-01 .title,
.breadcrumb-02 .ss-icon-title-01 .desc{color:#ffffff;}
.breadcrumb-02 .ss-icon-title-01 > .text-icon::before{background:#ffffff;}
</style>

<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-02">
        <div class="breadcrumb-container" style="background-image:url('<?= $breadcrumb['image'] ?>');">
            <div class="container">
                <?php if(!empty($breadcrumb['structure'])){?>
                    <div class="breadcrumb-wrapper">
                        <a href="#">
                            หน้าแรก
                        </a>
                        <?php foreach($breadcrumb['structure'] as $b){?>
                            <em class="fas fa-chevron-right"></em>
                            <a href="<?= $b['url'] ?>">
                                <?= $b['name'] ?>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
                <div class="title-container" data-aos="fade-up" data-aos-delay="0">
                    <div class="ss-icon-title-01 <?php if(!empty($breadcrumb['leading_class']))echo $breadcrumb['leading_class']; ?>">
                        <div class="text-icon fw-400"><?= $breadcrumb['leading'] ?></div>
                        <div class="text-wrapper">
                            <div class="title fw-300">
                                <?= $breadcrumb['title'] ?>
                            </div>
                            <div class="desc fw-100">
                                <?= $breadcrumb['desc'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
