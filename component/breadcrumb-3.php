<style>
    /* Breadcrumb-3 */
    .breadcrumb-custom-3 {
       width:100%; padding: .25rem 0 .5rem 0;
    }
    .breadcrumb-custom-3 a{
        display:inline-block; font-family:'TH Sarabun New'; font-size:1.25rem;
        margin:0 .75rem 0 0; transition:color .3s;
    }
    .breadcrumb-custom-3 a:last-child{font-weight:600;}
    
    .breadcrumb-custom-3 a{color:#666666;}
    .breadcrumb-custom-3 a:last-child{color:var(--color2); font-weight:600;}
    .breadcrumb-custom-3 a:last-child i {background: #6c109d;}
    
    .breadcrumb-custom-3 a:hover{color:#7d33b4;}


    .breadcrumb-custom-3 a i {
        width:1.375rem; height: 1.375rem; line-height:1.375rem; text-align:center; border-radius: 50%; font-size: .625rem;
        transform: translateY(-.125rem); background: #e1e1e1; color:#fff; transition: background .3s;
    }
</style>


<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-custom-3">
        <div class="breadcrumb-container">
            <?php foreach($breadcrumb as $b){?>
                <a href="<?php echo $b['url']; ?>" class="mt-2 fw-600 font-01 text-sm">
                    <i class="fas fa-chevron-right"></i>
                    <?php echo $b['name']; ?>
                </a>
            <?php }?>
        </div>
    </div>
<?php }?>
