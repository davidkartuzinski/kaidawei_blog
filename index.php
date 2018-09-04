<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="blogroll">

			<h1><?php _e( 'My Blog and My Notes to Self', 'html5blank' ); ?></h1>

			<div class="acf-introduction">This is my blog. You can discover notes that I write to myself. You can see what technology I am working with or get a good idea of what I am learning.</div>


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			<div class="acf-introduction-search">Look around. Someone's gonna learn something. <br> Get lucky and search for something <?php get_template_part( 'searchform' ); ?>  </div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
