<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="acf-introduction"><h1><?php _e( 'Archives', 'html5blank' ); ?></h1></div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
