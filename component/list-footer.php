
<?php if(isset($listFooter)){?>
    <div class="list-footer">
        <?php if(in_array('total', $listFooter)){?>
            <div class="block">
                <div class="text-wrapper color-gray text-sm">
                    จำนวนทั้งหมด <span class="fw-600 color-p">400 รายการ</span> 
                </div>
            </div>
        <?php }?>
        <?php if(in_array('pagination', $listFooter)){?>
            <div class="block">
                <div class="pagination-01">
                    <div class="wrapper">
                        <a href="#" class="page-btn page-prev disabled">
                            <em class="fas fa-chevron-left"></em>
                        </a>
                        <a href="#" class="page-btn active">01</a>
                        <a href="#" class="page-btn">02</a>
                        <a href="#" class="page-btn">03</a>
                        <a href="#" class="page-btn">04</a>
                        <a href="#" class="page-btn">05</a>
                        <a href="#" class="page-btn page-next">
                            <em class="fas fa-chevron-right"></em>
                        </a>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php if(in_array('pp', $listFooter)){?>
            <div class="block">
                <div class="text-wrapper color-gray text-sm">
                    แสดงผลต่อหน้า
                    <div class="select-wrapper">
                        <select class="pp color-p fw-600">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }?>
