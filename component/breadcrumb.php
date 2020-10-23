<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-custom">
        <div class="breadcrumb-container">
            <?php foreach($breadcrumb as $b){?>
                <a href="<?php echo $b['url']; ?>">
                    <?php echo $b['name']; ?>
                </a>
            <?php }?>
        </div>
    </div>
<?php }?>
