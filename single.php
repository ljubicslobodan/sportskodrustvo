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
							if (have_posts())
							{
							    while (have_posts())
							    {
							        the_post(); ?>
							        <h1 class="pb-0 mb-3"><?php the_title(); ?></h1>
											<div class="pt-0 pb-5"><span class="badge badge-warning"><?php the_date(); ?></span></div>
							        <div class=" text-justify"><?php the_content(); ?></div>
							    <?php
								    }
								}
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
