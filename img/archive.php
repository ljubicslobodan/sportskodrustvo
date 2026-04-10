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
			</section><!-- .page-header -->

			<section class="pt-3 pb-3">

				<div class="container">
					<div class="row">
					<div class="col-lg-9 box-shadow pt-5">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
     ?><h2 class="h6 pl-md-4"><i class="fe-icon-info text-success"></i><a href="<?php the_permalink(); ?>" class="reload-link pl-1"><?php the_title(); ?></a></h2>
		 	<div class="pb-5 pl-md-4"><?php echo get_the_date(); ?></div>


		 <?php

				// End the loop.
			endwhile;
						twentynineteen_the_posts_navigation();
			else :
				?>
			</div>
		</div>
			</section><!-- .page-header -->

			<section class="pb-3">

				<div class="container">
					<div class="row">
					<div class="col-lg-9 box-shadow pt-5">
						<?php
				echo '<h1>Страница у припреми</h1><p class="text-muted h5">Радимо на садржајима који ће се појавити на овој страници. Молимо Вас да посетите страницу ускоро или да нас контактирате.<p>';

			// Previous/next page navigation.


			// If no content, include the "No posts found" template.


		endif;
		?>
	</div>
	 					<?php include 'sidebar.php'; ?>
</div>
</div>

</section>




		</main><!-- #main -->


<?php
get_footer();
