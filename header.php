<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125056859-1"></script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-125056859-1');
			</script>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
		 	<div class="inside-wrapper">

				 <!-- header -->
				<header role="banner">
					
					<!-- nav -->
					<nav class="nav menu" role="navigation">
						<input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle mobile-menu-toggle-button">
						<?php html5blank_nav(); ?>
						<label class="mobile-left mobmenu-toggle" for="mobile-menu-toggle">+</label>
					</nav>
					<!-- /nav -->

				</header><!-- /header -->

						<div class="clear logo">
								<!-- logo -->
									<a href="<?php echo home_url(); ?>">
										<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
									</a>
								<!-- /logo -->
						</div>
