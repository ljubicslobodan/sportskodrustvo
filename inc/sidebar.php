<div class="col-lg-3">
    <a class="offcanvas-toggle" href="#blog-single-sidebar" data-toggle="offcanvas"><i class="fe-icon-sidebar"></i></a>
    <aside class="offcanvas-container" id="blog-single-sidebar" style="font-size: 0.875rem;">
        <div class="offcanvas-scrollable-area px-4 pt-5 px-lg-0 pt-lg-0"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
 <h2 class="h4 block-title pt-4">Инфо</h2>
            <?php if(is_home()): ?>
                <div class="widget">
                    <h4 class="widget-title">Брзи линкови</h4>
                    <a class="tag-link" href="<?php echo home_url() . '/category/вести' ?>">Вести</a>
          <a class="tag-link" href="<?php echo home_url() . '/о-нама' ?>">О нама</a>
                    <a class="tag-link" href="<?php echo home_url() . '/контакт' ?>">Контакт</a>
                    <a class="tag-link active" href="#">Почетна</a>
                </div>
                <?php endif; ?>
                    
        </div>
    </aside>
</div>
