			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="upper-footer">
					<div class="left-footer-div">
				
						<ul class="left-footer-nav">
								<li><a href="/">Home</a></li>
								<li><a href="/portfolio-work/">Portfolio & Work</a></li>
						</ul>
					</div>
					<div class="right-footer-div">
						<ul class="right-footer-nav">
							<li><a href="/blog/">Blog</a></li>
							<li><a href="/contact-me/">Contact me</a></li>
						</ul>
					</div>
				</div>

			</footer>

			<div class="social-media-single">
				<h3>Follow or Subscribe</h3>
					<ul>
						<li class="twitter-single"><a href="https://twitter.com/kai_dawei"><img src="//localhost:3000/wp-content/themes/html5blank-stable/img/twitter.svg" alt="twitter Logo" class="twitter"></a></li>
						<li class="github-single"><a href="https://github.com/davidkartuzinski"><img src="//localhost:3000/wp-content/themes/html5blank-stable/img/github.svg" alt="github Logo" class="github"></a></li>
						<li class="linkedin-single"><a href="https://www.linkedin.com/in/kaidawei/"><img src="//localhost:3000/wp-content/themes/html5blank-stable/img/linkedin.svg" alt="linkedin Logo" class="linnkedin"></a></li>
					</ul>
			</div>
			<!-- /footer -->
			<!-- copyright -->
			<div class="copyright">


			<div class="maserati">
				<a href="/"><img src="//localhost:3000/wp-content/themes/html5blank-stable/img/dk-maserati-1.svg" alt="Logo" class="maserati"></a>
				</div>

				<div class="bottomlogo">
				<a href="/"><img src="//localhost:3000/wp-content/themes/html5blank-stable/img/logo.png" alt="Logo" class="logo-img"></a>
				</div>
				<p>
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> whilst original theme design Copyright <a href="https://www.caharrisdesign.com/webui/"> C A Harris (Visual Designer)</a>. <?php _e('Custom design developed on', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress with Gutenberg</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
			</div>
				<!-- /copyright -->



		<?php wp_footer(); ?>

		<?php the_field( 'javascript_snippets' ); ?>	
		
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>



	</body>
</html>
