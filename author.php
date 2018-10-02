<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

		<article>

			<div class="acf-introduction">
				
			<h1><?php _e( 'My Blog Articles', 'html5blank' );  ?></h1>
				
			<p><?php echo get_the_author(); ?>: <br><br> My Ideas, My Notes, My Tutorials</p>
				</div>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="blogroll-container">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(300,300)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		</div> <!-- .blogroll-container -->

	<div class="blogroll-heading">
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<div class="post-meta">
		<span class="date">Originally Published:<br> <?php the_time('F j, Y'); ?> </span>
		<?php the_modified_date('F j, Y', '<span class="modified-date">Updated: <br>', '</span>'); ?>
		</div>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div> <!-- blogroll-heading -->
		



		<?php edit_post_link(); ?>
	


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

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
			<!-- /article -->

		<?php endif; ?>

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
