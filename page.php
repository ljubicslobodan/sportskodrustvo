<?php
/**
 * Static page template
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

        <!-- Page header -->
        <section class="sd-page-header">
            <div class="container">
                <nav aria-label="breadcrumb" class="sd-archive-breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url(); ?>">Почетна</a>
                        </li>
                        <li class="breadcrumb-item active"><?php the_title(); ?></li>
                    </ol>
                </nav>
                <h1 class="sd-page-title"><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- Featured image (if set) -->
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="sd-page-hero-img">
            <div class="container">
                <div class="sd-page-hero-wrap">
                    <?php the_post_thumbnail( 'large', [ 'class' => 'sd-page-featured-img' ] ); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Page content -->
        <section class="sd-page-content-section">
            <div class="container">
                <div class="sd-page-content-wrap">
                    <div class="sd-page-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Back link -->
                    <div class="sd-page-footer">
                        <a href="<?php echo home_url(); ?>" class="sd-post-back-btn">
                            <i class="fe-icon-arrow-left"></i> Назад на почетну
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php endwhile; ?>

    </main>
</div>
<?php get_footer(); ?>
