<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-custom-02">
        <div class="breadcrumb-container">
            <?php foreach($breadcrumb as $b){?>
                <a href="<?php echo $b['url']; ?>">
                    <?php echo $b['name']; ?>
                </a>
            <?php }?>
        </div>
        <?php if(!empty($dateTime)){?>
            <div class="date">
                <?php echo $dateTime['date'].' '.$dateTime['time']; ?>
            </div>
        <?php }?>
    </div>
<?php }?>
