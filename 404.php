<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                                <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
                                <div class="page-content">
                                    <p>
                                        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?>
                                    </p>
                                    <?php get_search_form(); ?>
                                </div>
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
