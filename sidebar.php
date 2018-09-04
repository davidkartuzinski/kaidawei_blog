</div> <!-- inside wrapper -->
		</div>
		<!-- /wrapper -->


<!-- sidebar -->
<aside class="sidebar" role="complementary">
<div class="footer-flare">
	<div class="footer-flare-left">
	</div>
	<div class="footer-flare-right">
	</div>
</div> 
	<h2>Let's Work Together</h2>
	<div class="social-media">
	<h3>Find and Connect</h3><ul>
	<li class="twitter"><a href="https://twitter.com/kai_dawei">Twitter</a></li>
	<li class="github"><a href="https://github.com/davidkartuzinski">GitHub</a></li>
	<li class="linkedin"><a href="https://www.linkedin.com/in/kaidawei/">LinkedIn</a></li>
</ul>
	</div>

	<div class="sidebar-inner">
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>

		<div class="sidebar-center">
		<picture>
			<source srcset="<?php echo
			get_template_directory_uri() . '/img/david-kartuzinski-kaidawei.jpg';
			?>"
					media="(min-width: 1000px)">
			<img src="<?php echo
			get_template_directory_uri() . '/img/david-kartuzinski-kaidawei.jpg';
			?>">
		</picture>
		</div>

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
	</div>

</aside>
<!-- /sidebar -->
