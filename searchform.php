<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<fieldset>
		<label for="s"><?php _e( 'To search, type and hit search', 'html5blank' ); ?> <br>
			<span>
	<input class="search-input" type="search" name="s" placeholder="">

			</span>
		</label>

	</fieldset>
	
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->
