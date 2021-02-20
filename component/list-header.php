
<?php if(isset($listHeader)){?>
    <div class="list-header">
        <div class="block">
            <?php if(in_array('search', $listHeader)){?>
                <div class="search-wrapper">
                    <input type="text" class="round" placeholder="ค้นหา" />
                </div>
            <?php }?>
            <?php if(in_array('category', $listHeader)){?>
                <div class="select-wrapper">
                    <select class="round">
                        <option value="">แบ่งตามหมวดหมู่</option>
                    </select>
                </div>
            <?php }?>
            <?php if(in_array('order', $listHeader)){?>
                <div class="select-wrapper">
                    <select class="round">
                        <option value="">เรียงลำดับข้อมูล</option>
                    </select>
                </div>
            <?php }?>
        </div>
        <div class="block">
            <?php if(in_array('icon-grid', $listHeader)){?>
                <a class="option active" href="#">
                    <em class="fas fa-th"></em>
                </a>
                <a class="option" href="#">
                    <em class="fas fa-th-list"></em>
                </a>
            <?php }?>
            <?php if(in_array('icon-rss', $listHeader)){?>
                <a class="option" href="#">
                    <em class="fas fa-rss"></em>
                </a>
            <?php }?>
        </div>
    </div>
<?php }?>
