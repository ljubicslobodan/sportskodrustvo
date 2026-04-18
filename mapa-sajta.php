<?php
/**
 * Template Name: site map
 */
get_header();

// Fetch all published pages (excluding the sitemap page itself)
$all_pages = get_pages( [
    'sort_column' => 'menu_order, post_title',
    'exclude'     => get_the_ID(),
] );

// Fetch all categories that have posts
$categories = get_categories( [
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => true,
] );
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Page header -->
        <section class="sd-page-header">
            <div class="container">
                <nav aria-label="breadcrumb" class="sd-archive-breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url(); ?>">Почетна</a>
                        </li>
                        <li class="breadcrumb-item active">Мапа сајта</li>
                    </ol>
                </nav>
                <h1 class="sd-page-title">Мапа сајта</h1>
            </div>
        </section>

        <!-- Sitemap content -->
        <section class="sd-page-content-section">
            <div class="container">
                <div class="sd-sitemap">

                    <!-- Pages (always visible, short list) -->
                    <div class="sd-sitemap-group">
                        <div class="sd-sitemap-group-header">
                            <i class="fe-icon-file-text"></i>
                            <h2>Странице</h2>
                        </div>
                        <ul class="sd-sitemap-list">
                            <li class="sd-sitemap-item">
                                <a href="<?php echo home_url(); ?>" class="sd-sitemap-link">
                                    <i class="fe-icon-home"></i>
                                    <span>Почетна</span>
                                </a>
                            </li>
                            <?php foreach ( $all_pages as $page ) : ?>
                            <li class="sd-sitemap-item">
                                <a href="<?php echo get_permalink( $page ); ?>" class="sd-sitemap-link">
                                    <i class="fe-icon-chevron-right"></i>
                                    <span><?php echo esc_html( $page->post_title ); ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Categories as accordions -->
                    <?php foreach ( $categories as $cat ) :
                        $cat_posts = get_posts( [
                            'category'       => $cat->term_id,
                            'posts_per_page' => -1,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ] );
                    ?>
                    <div class="sd-sitemap-group sd-sitemap-accordion">
                        <button class="sd-sitemap-accordion-btn" type="button" aria-expanded="false">
                            <i class="fe-icon-folder sd-sitemap-accordion-icon"></i>
                            <h2>
                                <?php echo esc_html( $cat->name ); ?>
                                <span class="sd-sitemap-count"><?php echo $cat->count; ?></span>
                            </h2>
                            <i class="fe-icon-chevron-down sd-sitemap-chevron"></i>
                        </button>
                        <ul class="sd-sitemap-list sd-sitemap-list--posts sd-sitemap-panel" style="display:none;">
                            <?php foreach ( $cat_posts as $cpost ) : ?>
                            <li class="sd-sitemap-item">
                                <a href="<?php echo get_permalink( $cpost ); ?>" class="sd-sitemap-link">
                                    <i class="fe-icon-file"></i>
                                    <span><?php echo esc_html( $cpost->post_title ); ?></span>
                                    <time class="sd-sitemap-date" datetime="<?php echo get_the_date( 'c', $cpost ); ?>">
                                        <?php echo get_the_date( 'd.m.Y.', $cpost ); ?>
                                    </time>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>

                    <!-- Back link -->
                    <div class="sd-page-footer">
                        <a href="<?php echo home_url(); ?>" class="sd-post-back-btn">
                            <i class="fe-icon-arrow-left"></i> Назад на почетну
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>
</div>

<script>
(function($) {
    $('.sd-sitemap-accordion-btn').on('click', function() {
        var $btn   = $(this);
        var $group = $btn.closest('.sd-sitemap-accordion');
        var $panel = $group.find('.sd-sitemap-panel');
        var isOpen = $group.hasClass('sd-sitemap-accordion--open');

        if (isOpen) {
            $group.removeClass('sd-sitemap-accordion--open');
            $panel.slideUp(250);
            $btn.attr('aria-expanded', 'false');
        } else {
            $group.addClass('sd-sitemap-accordion--open');
            $panel.slideDown(250);
            $btn.attr('aria-expanded', 'true');
        }
    });
})(jQuery);
</script>

<?php get_footer(); ?>
