<div class="col-lg-3">
    <aside class="sd-sidebar">

        <!-- Quick links -->
        <div class="sd-sidebar-widget">
            <h3 class="sd-sidebar-title">
                <i class="fe-icon-compass"></i> Навигација
            </h3>
            <ul class="sd-sidebar-nav">
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <i class="fe-icon-home"></i> Почетна
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/о-нама'; ?>">
                        <i class="fe-icon-info"></i> О нама
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/category/вести'; ?>">
                        <i class="fe-icon-file-text"></i> Вести
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/category/најава-догађаја'; ?>">
                        <i class="fe-icon-calendar"></i> Најава догађаја
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/архива'; ?>">
                        <i class="fe-icon-archive"></i> Архива
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/контакт'; ?>">
                        <i class="fe-icon-mail"></i> Контакт
                    </a>
                </li>
            </ul>
        </div>

        <?php if ( is_home() ) : ?>

        <!-- Latest posts -->
        <div class="sd-sidebar-widget">
            <h3 class="sd-sidebar-title">
                <i class="fe-icon-clock"></i> Најновије
            </h3>
            <ul class="sd-sidebar-posts">
                <?php
                $recent = get_posts( [
                    'posts_per_page' => 5,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ] );
                foreach ( $recent as $rp ) :
                    $cats = get_the_category( $rp->ID );
                    $cat_name = ! empty( $cats ) ? $cats[0]->name : '';
                ?>
                <li>
                    <a href="<?php echo get_permalink( $rp ); ?>">
                        <span class="sd-sidebar-post-title"><?php echo esc_html( $rp->post_title ); ?></span>
                        <span class="sd-sidebar-post-meta">
                            <?php if ( $cat_name ) : ?>
                            <span class="sd-sidebar-post-cat"><?php echo esc_html( $cat_name ); ?></span>
                            <?php endif; ?>
                            <time><?php echo get_the_date( 'd.m.Y.', $rp ); ?></time>
                        </span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Contact card -->
        <div class="sd-sidebar-widget sd-sidebar-contact">
            <h3 class="sd-sidebar-title sd-sidebar-title--light">
                <i class="fe-icon-phone"></i> Контакт инфо
            </h3>
            <ul class="sd-sidebar-contact-list">
                <li>
                    <i class="fe-icon-map-pin"></i>
                    <span>Иво Лоле Рибара 6<br>17500 Врање</span>
                </li>
                <li>
                    <i class="fe-icon-mail"></i>
                    <a href="mailto:sdvranje1093@vranje.org.rs">sdvranje1093@vranje.org.rs</a>
                </li>
            </ul>
            <div class="sd-sidebar-social">
                <a href="https://www.facebook.com/profile.php?id=61570608391388" target="_blank" aria-label="Facebook">
                    <i class="fe-icon-facebook"></i>
                </a>
                <a href="https://www.instagram.com/sportsko_drustvo_vranje_1093/?igsh=MXM0b2xvdTM2OXppOA%3D%3D&utm_source=qr" target="_blank" aria-label="Instagram">
                    <i class="fe-icon-instagram"></i>
                </a>
            </div>
        </div>

        <?php endif; ?>

    </aside>
</div>
