<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="bg-secondary floating">
                <div class="container p-4 mb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <?php the_breadcrumb(); ?>
                        </ol>
                    </nav>
                </div>
            </section>
            <section>
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-lg-9 box-shadow">
                            <div class="p-3">
                                <?php
																while ( have_posts() ) :
																	the_post();
																	if ( has_post_thumbnail()) : ?>
													                                    <h1 class="pb-1"><?php the_title(); ?></h1>
													                                    <div class="col-9 mb-5 mt-5 ml-0 pl-0">
													                                        <?php the_post_thumbnail(); ?>
													                                    </div>
													                                    <?php endif;
																	get_template_part( 'template-parts/content/content', 'page' );
																endwhile;
																?>
                            </div>
                        </div>
                        <?php include 'inc/sidebar.php'; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php
get_footer();
