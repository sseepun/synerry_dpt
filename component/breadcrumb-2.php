<style>
    /* Breadcrumb2 */
    .breadcrumb-custom-2 {
        display:flex; width:100%; padding: .25rem 0 .5rem 0; align-items:center; justify-content: space-between;
    }
    .breadcrumb-custom-2 a{
        display:inline-block; font-family:'TH Sarabun New'; font-size:1.25rem;
        margin:0 0 0 .75rem; transition:color .3s;
    }
    .breadcrumb-custom-2 a:last-child{font-weight:600;}
    .breadcrumb-custom-2 a::before{
        content:''; display:inline-block; width:.3125rem; height:.3125rem; border-radius:50%;
        margin:0 .1875rem 0 0; transform:translateY(-.0625rem);
    }
    
    .breadcrumb-custom-2 a{color:#666666;}
    .breadcrumb-custom-2 a:last-child{color:var(--color2); font-weight:600;}
    .breadcrumb-custom-2 a:hover{color:#7d33b4;}

    
</style>


<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-custom-2">
        <div class="breadcrumb-container">
            <?php foreach($breadcrumb as $b){?>
                <a href="<?php echo $b['url']; ?>" class="font-01 text-sm">
                    <?php echo $b['name']; ?>
                </a>
            <?php }?>
        </div>
        <div class="date-time-container">
            <?php echo $dateTime['date'].' '.$dateTime['time']; ?>
        </div>
    </div>
<?php }?>
