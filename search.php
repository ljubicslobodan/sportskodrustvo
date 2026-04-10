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
                    <div class="cols-1">
												<nav aria-label="breadcrumb">
												<ol class="breadcrumb">
							<?php the_breadcrumb(); ?>
												</ol>
											</nav>
                        <h1>Резултати претраге</h1>
                        <?php _e( 'Резултати претраге за: ', 'twentynineteen' ); ?>
                            <span class="page-description"><?php echo get_search_query(); ?></span>
                    </div>
                </div>
            </section>
            <!-- .page-header -->
            <section>
									<div class="container mb-3">
										<div class="row">
                    <div class="col-lg-9 box-shadow pt-5 pl-md-5">
                        <?php
													// Start the Loop.
                        if ( have_posts() ) :
													while ( have_posts() ) :
														the_post();
														/*
														 * Include the Post-Format-specific template for the content.
														 * If you want to override this in a child theme, then include a file
														 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
														 */
										     ?>
                            <h2 class="h6"><i class="fe-icon-info text-success"></i><a href="<?php the_permalink(); ?>" class="reload-link pl-1"><?php the_title(); ?></a></h2>
                            <div class="pb-5">
                                <?php the_date(); ?>
                            </div>
                            <?php
																// End the loop.
															endwhile;
															// Previous/next page navigation.
															twentynineteen_the_posts_navigation();
															// If no content, include the "No posts found" template.
														else :
                                echo '<p class="lead text-muted">Ништа није пронађено. Молимо Вас да покушате поново уношењем другог термина односно фразе у претраживач.</p><br>';
                                get_search_form();
														endif;
														?>
                    </div>
													 	<?php include 'inc/sidebar.php'; ?>
                </div>
							</div>
            </section>
    </main>
    <!-- #main -->
    <?php
get_footer();
