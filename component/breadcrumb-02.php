<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-02">
        <?php if(!empty($breadcrumb['image_bg'])){?>
            <img class="img-content" src="<?= $breadcrumb['image_bg'] ?>" alt="Image Content" />
            <div class="breadcrumb-container">
        <?php }else{?>
            <div class="breadcrumb-container" style="background-image:url('<?= $breadcrumb['image'] ?>');">
        <?php }?>
            <div class="container">
                <?php if(!empty($breadcrumb['structure'])){?>
                    <div class="breadcrumb-wrapper" data-aos="fade-right" data-aos-delay="0">
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
                <div class="title-container" data-aos="fade-right" data-aos-delay="150">
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
