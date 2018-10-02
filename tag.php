<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<article>
			<div class="acf-introduction"><h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1><p><?php echo get_the_author(); ?>My Articles, My Ideas, My Notes, My Tutorials</p></div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			<h2>Let's Work Together</h2>
	<div class="arrow-box">
	<div class="arrow-down"></div></div>

	<div class="social-media">
	<h3>Find and Connect</h3>
		<ul>
	<li class="twitter"><a href="https://twitter.com/kai_dawei">Twitter</a></li>
	<li class="github"><a href="https://github.com/davidkartuzinski">GitHub</a></li>
	<li class="linkedin"><a href="https://www.linkedin.com/in/kaidawei/">LinkedIn</a></li>
</ul>
	</div>
			</article>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
