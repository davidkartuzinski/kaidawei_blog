</div> <!-- inside wrapper -->
	<div class="bottom-flares"></div>
		</div>
		<!-- /wrapper -->


<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="sidebar-inner">
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>

		<div class="sidebar-center">
			<h3>My picture</h3>
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
