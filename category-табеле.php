<?php
/**
 * Category template for "Табеле"
 * 3-column grid layout with large featured images + post title
 */
get_header();

$default_thumb = get_stylesheet_directory_uri() . '/img/galerija/1.jpg';
$cat_name      = single_cat_title( '', false );
$cat_desc      = category_description();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Page header -->
        <section class="sd-archive-header">
            <div class="container">
                <nav aria-label="breadcrumb" class="sd-archive-breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Почетна</a></li>
                        <li class="breadcrumb-item active"><?php echo esc_html( $cat_name ); ?></li>
                    </ol>
                </nav>
                <h1 class="sd-archive-title"><?php echo esc_html( $cat_name ); ?></h1>
                <?php if ( $cat_desc ) : ?>
                <p class="sd-archive-desc"><?php echo esc_html( $cat_desc ); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Posts grid -->
        <section class="py-5">
            <div class="container">

                <?php if ( have_posts() ) : ?>

                <div class="sd-tabele-grid">
                    <?php while ( have_posts() ) : the_post();
                        $thumb = has_post_thumbnail()
                            ? get_the_post_thumbnail_url( null, 'large' )
                            : $default_thumb;
                    ?>
                    <a href="<?php the_permalink(); ?>" class="sd-tabele-card">
                        <div class="sd-tabele-img-wrap">
                            <img src="<?php echo esc_url( $thumb ); ?>"
                                 alt="<?php the_title_attribute(); ?>"
                                 class="sd-tabele-img">
                        </div>
                        <h2 class="sd-tabele-title"><?php the_title(); ?></h2>
                    </a>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="sd-archive-pagination">
                    <?php
                    the_posts_pagination( [
                        'mid_size'  => 2,
                        'prev_text' => '<i class="fe-icon-chevron-left"></i>',
                        'next_text' => '<i class="fe-icon-chevron-right"></i>',
                    ] );
                    ?>
                </div>

                <?php else : ?>
                <div class="sd-archive-empty">
                    <i class="fe-icon-inbox"></i>
                    <h3>Нема објављених табела</h3>
                    <p>Тренутно нема садржаја у овој категорији. Посетите нас ускоро.</p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-style-5 btn-primary mt-3">Назад на почетну</a>
                </div>
                <?php endif; ?>

            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
