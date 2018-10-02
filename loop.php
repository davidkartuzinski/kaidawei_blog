<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
		<?php the_modified_date('F j, Y', '<span class="modified-date">Updated:<br> ', '</span>'); ?>
		<span class="author"><?php _e( 'Published by: &nbsp;&nbsp;&nbsp;  <br>', 'html5blank' ); ?> <span><?php the_author_posts_link(); ?></span></span>
		</div>
		<!-- /post details -->	
		<?php edit_post_link(); ?>

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div> <!-- blogroll-heading -->
		


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
