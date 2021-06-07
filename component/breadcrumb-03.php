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
                <div class="grids jc-space-between">
                    <div class="grid md-60 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
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
                    <div class="grid xl-30 md-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                        <?php if($breadcrumb['show_search']){?>
                            <form action="/" method="GET">
                                <div class="form-group">
                                    <div class="append">
                                        <input type="text" placeholder="พิมพ์คำค้นหาที่ต้องการ" required />
                                        <button type="submit" class="icon lg bg-color-gray">
                                            <em class="fas fa-search"></em>
                                        </button>
                                    </div>
                                </div>
                                <?php if(!empty($breadcrumb['search_keywords'])){?>
                                    <div class="keywords">
                                        <?php foreach($breadcrumb['search_keywords'] as $k){?>
                                            <a class="keyword" href="<?= $k['url'] ?>">
                                                <?= $k['name'] ?>
                                            </a>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
