<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<article>

			<div class="acf-introduction"><h1>Search Results for:</h1><p>"<?php echo sprintf( __( '', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>"<br> <br>The Articles Below Might Be Interesting To You:</p></div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			<div class="acf-introduction-search"><p>Look around. Someone's gonna learn something. <br> Get lucky and search for something</p> <?php get_template_part( 'searchform' ); ?>  </div>

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
