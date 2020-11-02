<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-custom-03">
        <div class="breadcrumb-container">
            <?php foreach($breadcrumb as $b){?>
                <a href="<?php echo $b['url']; ?>">
                    <i class="fas fa-chevron-right"></i>
                    <?php echo $b['name']; ?>
                </a>
            <?php }?>
        </div>
    </div>
<?php }?>
