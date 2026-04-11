<?php
/**
 * Archive / Category listing template
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

        <!-- Posts -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">

                        <?php if ( have_posts() ) : ?>

                        <div class="sd-archive-list">
                            <?php while ( have_posts() ) : the_post();
                                $thumb   = has_post_thumbnail()
                                    ? get_the_post_thumbnail_url( null, 'medium' )
                                    : $default_thumb;
                                $excerpt = has_excerpt()
                                    ? get_the_excerpt()
                                    : wp_trim_words( strip_tags( get_the_content() ), 20, '…' );
                            ?>
                            <article class="sd-archive-card">
                                <a href="<?php the_permalink(); ?>" class="sd-archive-img-wrap">
                                    <img src="<?php echo esc_url( $thumb ); ?>"
                                         alt="<?php the_title_attribute(); ?>"
                                         class="sd-archive-img">
                                </a>
                                <div class="sd-archive-body">
                                    <div class="sd-archive-meta">
                                        <span class="sd-archive-cat">
                                            <?php the_category( ' ' ); ?>
                                        </span>
                                        <time class="sd-archive-date">
                                            <i class="fe-icon-calendar"></i>
                                            <?php echo get_the_date( 'd. F Y.' ); ?>
                                        </time>
                                    </div>
                                    <h2 class="sd-archive-post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <?php if ( $excerpt ) : ?>
                                    <p class="sd-archive-excerpt"><?php echo esc_html( $excerpt ); ?></p>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="sd-more-link">
                                        Опширније <i class="fe-icon-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
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
                            <h3>Нема објављених чланака</h3>
                            <p>Тренутно нема садржаја у овој категорији. Посетите нас ускоро.</p>
                            <a href="<?php echo home_url(); ?>" class="btn btn-style-5 btn-primary mt-3">Назад на почетну</a>
                        </div>
                        <?php endif; ?>

                    </div><!-- /col-lg-10 -->

                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
