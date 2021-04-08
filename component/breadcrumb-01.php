<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01">
        <div class="breadcrumb-container" style="background-image:url('<?= $breadcrumb['image'] ?>');">
            <div class="container">
                <div class="grids">
                    <div class="grid md-60 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                        <div class="ss-icon-title-01 <?php if(!empty($breadcrumb['leading_class']))echo $breadcrumb['leading_class']; ?>">
                            <div class="text-icon fw-400"><?= $breadcrumb['leading'] ?></div>
                            <div class="text-wrapper">
                                <div class="title fw-400"><?= $breadcrumb['title'] ?></div>
                                <div class="desc fw-100"><?= $breadcrumb['desc'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid md-40 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                        <?php if($breadcrumb['show_search']){?>
                            <form action="/" method="GET">
                                Search
                            </form>
                        <?php }?>
                    </div>
                </div>
                <?php if(!empty($breadcrumb['structure'])){?>
                    <div class="breadcrumb-wrapper" data-aos="fade-up" data-aos-delay="150">
                        <a href="#">
                            <img src="public/assets/app/images/icon/home.png" alt="Image Icon" />
                        </a>
                        <?php foreach($breadcrumb['structure'] as $b){?>
                            <em class="fas fa-chevron-right"></em>
                            <a href="<?= $b['url'] ?>">
                                <?= $b['name'] ?>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="pattern-container">
            <div class="pattern" style="background-image:url('public/assets/app/images/misc/pattern-03.png');"></div>
        </div>
    </section>
<?php }?>
