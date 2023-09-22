(function($) {
    $(document).ready(function() {
        $('#zdk-custom-menu').prepend('<div id="menu-button">Menu</div>');
        $('#zdk-custom-menu #menu-button').on('click', function(){
            var menu = $(this).next('ul');
            if (menu.hasClass('open')) {
                menu.removeClass('open');
            } else {
                menu.addClass('open');
            }
        });
        $('#zdk-custom-menu a').each(function(){
            var icon = $(this).data('icon'),
                text = $(this).text();
            $(this).html('<i class="fa fa-fw fa-lg ' + icon + '"></i>  ' + text);
        });
    });
})(jQuery);
