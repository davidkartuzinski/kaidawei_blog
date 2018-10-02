<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				
				<div class="acf-introduction"><h1><?php _e( 'Page not found', 'html5blank' ); ?></h1><p>Yeah. You hit the jackpot! Kidding. You hit the 404 page which means you're no where. <br> You got options though, they're below:</p></div>

				<h2>
					<?php _e( 'Your Options from "the 404"', 'html5blank' ); ?>
				</h2>
				<div class="arrow-box">
				<div class="arrow-down"></div></div>
				<h3>First Option - Be happy you saw this amazing Blue Shelby, and go to the next option.</h3>
				<p>The only place on my site to see the Blue Shelby is here on the 404.  Everyone else gets the orange Maserati.</p>
				<p><a href="/contact-me/"><img src="<?php echo get_template_directory_uri(); ?>/img/blue-shelby.png" alt="Blue Shelby" class="blue-shelby"></a></p>
				<h3>Second Option - Try Search</h3>
				<p>Search for whatever you thought you were clicking to. That often finds it.</p>
				<div class="acf-introduction-search"><?php get_template_part( 'searchform' ); ?>  </div>
				<h3>Last option</h3>
				<p>The last option: You can click over to my <a href="/contact-me">contact page</a>, and tell me from whomever (whereever) you got the bad link from. (I'll have my people talk to their people and make them an offer they can't refuse. Nicely.)</a>
				</p>
				<p><a href="/contact-me/"><img src="<?php echo get_template_directory_uri(); ?>/img/detective.png" alt="404 Detective" class="404-detective"></a></p>
				
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

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
