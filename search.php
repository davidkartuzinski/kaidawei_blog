<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1>Search Results for:</h1>

			<div class="acf-introduction">"<?php echo sprintf( __( '', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>"</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
