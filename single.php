<?php
/**
 * Single post template
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

        <!-- Post header -->
        <section class="sd-post-header">
            <div class="container">
                <div class="sd-post-header-inner">

                    <!-- Breadcrumb + category -->
                    <div class="sd-post-eyebrow">
                        <a href="<?php echo home_url(); ?>" class="sd-post-back">
                            <i class="fe-icon-arrow-left"></i> Почетна
                        </a>
                        <?php
                        $cats = get_the_category();
                        if ( $cats ) :
                            foreach ( $cats as $cat ) :
                        ?>
                        <span class="sd-post-cat-badge">
                            <a href="<?php echo get_category_link( $cat->term_id ); ?>">
                                <?php echo esc_html( $cat->name ); ?>
                            </a>
                        </span>
                        <?php endforeach; endif; ?>
                    </div>

                    <!-- Title -->
                    <h1 class="sd-post-title"><?php the_title(); ?></h1>

                    <!-- Meta -->
                    <div class="sd-post-meta">
                        <span class="sd-post-meta-item">
                            <i class="fe-icon-calendar"></i>
                            <?php echo get_the_date( 'd. F Y.' ); ?>
                        </span>
                        <?php if ( get_the_modified_date() !== get_the_date() ) : ?>
                        <span class="sd-post-meta-item">
                            <i class="fe-icon-edit-2"></i>
                            Ажурирано <?php echo get_the_modified_date( 'd. F Y.' ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="sd-post-meta-item">
                            <i class="fe-icon-user"></i>
                            <?php the_author(); ?>
                        </span>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured image -->
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="sd-post-hero-img">
            <div class="container">
                <div class="sd-post-hero-wrap">
                    <?php the_post_thumbnail( 'large', [ 'class' => 'sd-post-featured-img' ] ); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Content -->
        <section class="sd-post-content-section">
            <div class="container">
                <div class="sd-post-content-wrap">
                    <div class="sd-post-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php $tags = get_the_tags(); if ( $tags ) : ?>
                    <div class="sd-post-tags">
                        <i class="fe-icon-tag"></i>
                        <?php foreach ( $tags as $tag ) : ?>
                        <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="tag-link">
                            <?php echo esc_html( $tag->name ); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Back link -->
                    <div class="sd-post-footer-nav">
                        <?php
                        $cats = get_the_category();
                        $back_url  = $cats ? get_category_link( $cats[0]->term_id ) : home_url();
                        $back_name = $cats ? $cats[0]->name : 'Почетна';
                        ?>
                        <a href="<?php echo esc_url( $back_url ); ?>" class="sd-post-back-btn">
                            <i class="fe-icon-arrow-left"></i> Назад на „<?php echo esc_html( $back_name ); ?>"
                        </a>

                        <div class="sd-post-nav-links">
                            <?php
                            $prev = get_previous_post();
                            $next = get_next_post();
                            if ( $prev ) : ?>
                            <a href="<?php echo get_permalink( $prev->ID ); ?>" class="sd-post-nav-btn" title="<?php echo esc_attr( $prev->post_title ); ?>">
                                <i class="fe-icon-chevron-left"></i> Претходно
                            </a>
                            <?php endif;
                            if ( $next ) : ?>
                            <a href="<?php echo get_permalink( $next->ID ); ?>" class="sd-post-nav-btn" title="<?php echo esc_attr( $next->post_title ); ?>">
                                Следеће <i class="fe-icon-chevron-right"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php endwhile; ?>

    </main>
</div>
<?php get_footer(); ?>
