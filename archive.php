<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>
    <main id="main" class="site-main">
        <section class="bg-secondary floating">
            <div class="container p-4 mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php the_breadcrumb(); ?>
                    </ol>
                </nav>
                <div class="cols-1">
                    <?php if ( have_posts() ) : ?>
                        <?php
					single_cat_title( '<h1>', '</h1>' );
				?>
                </div>
            </div>
        </section>
        <section class="pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 box-shadow pt-4">
                        <?php
			while ( have_posts() ) :
				the_post();
     ?>
                            <h2 class="h6 pl-md-4"><i class="fe-icon-info text-success"></i><a href="<?php the_permalink(); ?>" class="reload-link pl-1"><?php the_title(); ?></a></h2>
                            <div class="pb-5 pl-md-4">
                                <?php echo get_the_date(); ?>
                            </div>
                            <?php
			endwhile;
						twentynineteen_the_posts_navigation();
			else :
				?>
                    </div>
                </div>
        </section>
        <section class="pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 box-shadow pt-3">
                        <?php
				echo '<h1>Страница у припреми</h1><p class="lead text-muted">Радимо на садржајима који ће се појавити на овој страници. Молимо Вас да посетите страницу ускоро или да нас контактирате.<p>';
		endif;
		?>
                    </div>
                    <?php include 'inc/sidebar.php'; ?>
                </div>
            </div>
        </section>
    </main>
    <?php
get_footer();
