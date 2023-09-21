( function( $ ) {
$( document ).ready(function() {
$('#zdk-custom-menu').prepend('<div id="menu-button">Menu</div>');
	$('#zdk-custom-menu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );
