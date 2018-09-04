(function ($, root, undefined) {
	
	$(function() {
		$('ul li:first-child').addClass('active');
	  });

	$(function () {
		
		'use strict';

		$('ul.gal-1 li').on('click',function(){
			$('ul.gal-1 li').siblings().removeClass('active');
			$(this).addClass('active');
		});
		
	});

	$(function () {
		
		'use strict';

		$('ul.gal-2 li').on('click',function(){
			$('ul.gal-2 li').siblings().removeClass('active');
			$(this).addClass('active');
		});
		
	});
	
})(jQuery, this);
