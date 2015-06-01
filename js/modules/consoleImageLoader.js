(function($) {
	'use strict';
	var consoles = $('.oxo__console-chooser .oxo__list-item'),
		img;

		consoles.each(function() {
			img = $(this).attr('data-img');
			$(this).css('background-image', 'url(' + img + ')');
		});

})(jQuery);
