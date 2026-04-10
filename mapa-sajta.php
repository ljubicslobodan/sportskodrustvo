<?php
/**
 * Template Name: site map
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
                    <h1>Мапа сајта</h1>
                    <span class="page-description"><?php echo get_search_query(); ?></span>
                </div>
            </div>
        </section>
        <section>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-lg-9 box-shadow pt-5">
                        <div class="widget widget-categories p-4">
                     <ul>
                            <li><a href="<?php echo home_url()?>">Почетна</a></li>
			       <li><a href="<?php echo home_url() . '/о-нама' ?>">О нама</a></li>
								<li><a href="<?php echo home_url() . '/контакт' ?>">Контакт</a></li>
				<li><a href="<?php echo home_url() . '/архива' ?>">Архива</a></li>                  
                            <li><a href="<?php echo home_url() . '/мапа-сајта' ?>">Мапа сајта</a></li>
                        </ul>
                        </div>
                    </div>
                    <?php include 'inc/sidebar.php'; ?>
                </div>
            </div>
        </section>
    </main>
    <?php
get_footer();
