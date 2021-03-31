
<?php if(isset($postHeader)){?>
    <div class="post-stat">
        <?php if(in_array('general', $postHeader)){?>
            <div class="block">
                <div class="stat">
                    <em class="far fa-star"></em> ข่าวสารทั่วไป
                </div>
                <div class="stat">
                    <em class="far fa-calendar-alt"></em> 19 กันยายน 2563
                </div>
            </div>
            <div class="block">
                <div class="stat">
                    <em class="far fa-eye"></em> 17
                </div>
            </div>
        <?php }?>
        <?php if(in_array('calendar', $postHeader)){?>
            <div class="block">
                <div class="stat">
                    <em class="far fa-calendar"></em> 22 มกราคม 2564
                </div>
                <div class="stat">
                    <em class="far fa-clock"></em> 8.00-17.30 น.
                </div>
            </div>
            <div class="block">
                <div class="stat">
                    <em class="fas fa-map-marker-alt"></em> ศูนย์การประชุมแห่งชาติสิริกิติ์
                </div>
            </div>
        <?php }?>
    </div>
<?php }?>
