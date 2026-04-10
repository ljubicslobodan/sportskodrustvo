<?php
/**
 * Template Name: Archive Page
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
                    <h1>Архива објављених чланака</h1>
                </nav>
                <div class="cols-1">
                </div>
            </div>
        </section>
        <section class="pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 box-shadow pt-4 pl-5 pr-5">
                        <p class="text-muted lead">Да би сте видели архивирани садржај молимо Вас одаберите годину:</p>
                        <ul class="col-6 pt-4" style="list-style-type: none;">
                            <hr>
                            <?php wp_get_archives( array(
												 'type' => 'yearly',
												 'before'          => '<li class="h6 reload-year">година: ',
												 'after'           => '</li><hr>',
												 'limit' => 112
											 ) ); ?>
                        </ul>
                    </div>
                    <?php include 'inc/sidebar.php'; ?>
                </div>
            </div>
        </section>
    </main>
    <?php
 get_footer();
