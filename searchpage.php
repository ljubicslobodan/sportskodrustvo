<?php
/**
 * Template Name: Search Page
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
								<h1 class="pt-2 pb-2">Претрага</h1>
								<p class="text-muted lead">Унесите у поље испод термин или фразу на основу које желите да извршите претрагу а затим идите на дугме претражи. </p>
									<div>
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
?>
