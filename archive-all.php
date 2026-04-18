<?php
/**
 * Template Name: Archive Page
 */
get_header();

// Get all published posts grouped by year
$all_posts = get_posts( [
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post_status'    => 'publish',
] );

// Group posts by year
$by_year = [];
foreach ( $all_posts as $p ) {
    $year = get_the_date( 'Y', $p );
    $by_year[ $year ][] = $p;
}

$current_year = date( 'Y' );
$total_posts  = count( $all_posts );
$total_years  = count( $by_year );
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
                        <li class="breadcrumb-item active">Архива</li>
                    </ol>
                </nav>
                <h1 class="sd-page-title">Архива објављених чланака</h1>
                <p class="sd-archive-all-subtitle">
                    Укупно <strong><?php echo $total_posts; ?></strong> чланака у <strong><?php echo $total_years; ?></strong> година
                </p>
            </div>
        </section>

        <!-- Archive content -->
        <section class="sd-page-content-section">
            <div class="container">
                <div class="sd-sitemap">

                    <?php foreach ( $by_year as $year => $posts ) :
                        $is_current = ( $year == $current_year );
                    ?>
                    <div class="sd-sitemap-group sd-sitemap-accordion <?php echo $is_current ? 'sd-sitemap-accordion--open' : ''; ?>">
                        <button class="sd-sitemap-accordion-btn" type="button" aria-expanded="<?php echo $is_current ? 'true' : 'false'; ?>">
                            <i class="fe-icon-calendar sd-sitemap-accordion-icon"></i>
                            <h2>
                                <?php echo esc_html( $year ); ?>. година
                                <span class="sd-sitemap-count"><?php echo count( $posts ); ?></span>
                            </h2>
                            <i class="fe-icon-chevron-down sd-sitemap-chevron"></i>
                        </button>
                        <ul class="sd-sitemap-list sd-sitemap-list--posts sd-sitemap-panel" style="<?php echo $is_current ? '' : 'display:none;'; ?>">
                            <?php foreach ( $posts as $apost ) :
                                $cats = get_the_category( $apost->ID );
                                $cat_name = ! empty( $cats ) ? $cats[0]->name : '';
                            ?>
                            <li class="sd-sitemap-item">
                                <a href="<?php echo get_permalink( $apost ); ?>" class="sd-sitemap-link">
                                    <i class="fe-icon-file"></i>
                                    <span><?php echo esc_html( $apost->post_title ); ?></span>
                                    <?php if ( $cat_name ) : ?>
                                    <span class="sd-archive-all-cat"><?php echo esc_html( $cat_name ); ?></span>
                                    <?php endif; ?>
                                    <time class="sd-sitemap-date" datetime="<?php echo get_the_date( 'c', $apost ); ?>">
                                        <?php echo get_the_date( 'd.m.Y.', $apost ); ?>
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
