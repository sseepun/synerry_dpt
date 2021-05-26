
<?php if(isset($listFooter)){?>
    <div class="list-footer minisite <?php if(!empty($listFooterClass))echo $listFooterClass; ?>">
        <?php if(in_array('total', $listFooter)){?>
            <div class="block">
                <p class="xs fw-200 color-gray">
                    แสดงข้อมูล <span class="fw-600 mx-1">1 - 10</span>
                    จาก <span class="fw-600 ml-1">180 รายการ</span>
                </p>
            </div>
        <?php }?>
        <?php if(in_array('pagination', $listFooter)){?>
            <div class="block">
                <div class="pagination-03">
                    <div class="wrapper">
                        <a href="#" class="page-btn page-first disabled">
                            หน้าแรก
                        </a>
                        <a href="#" class="page-btn page-prev disabled">
                            <em class="fas fa-chevron-left"></em>
                        </a>
                        <a href="#" class="page-btn active">1</a>
                        <a href="#" class="page-btn">2</a>
                        <a href="#" class="page-btn">3</a>
                        <a href="#" class="page-btn">4</a>
                        <a href="#" class="page-btn">5</a>
                        <a href="#" class="page-btn page-next">
                            <em class="fas fa-chevron-right"></em>
                        </a>
                        <a href="#" class="page-btn page-last">
                            หน้าสุดท้าย
                        </a>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php if(in_array('page-info', $listFooter) || in_array('pp', $listFooter)){?>
            <div class="block">
                <?php if(in_array('page-info', $listFooter)){?>
                    <div class="slot p xs fw-200 color-gray">
                        หน้า <div class="box fw-600 border bcolor-sgray mx-1">1</div>
                        จาก <div class="fw-600 ml-1">30 หน้า</div>
                    </div>
                <?php }?>
                <?php if(in_array('pagination', $listFooter)){?>
                    <div class="slot">
                        <p class="xs fw-200 color-gray mr-1">
                            แสดงต่อหน้า
                        </p>
                        <select>
                            <option value="10">10 รายการ</option>
                            <option value="20">20 รายการ</option>
                            <option value="25">25 รายการ</option>
                            <option value="50">50 รายการ</option>
                        </select>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    </div>
<?php }?>
