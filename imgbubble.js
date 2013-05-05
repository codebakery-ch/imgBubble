(function ($) {
    $.fn.imgBubble = function (options) {
        var settings = $.extend({
            'imgClass': '.imgbubble',
            'navWrapper': '#imgBubble_nav',
            'imageWrapper': '#img_wrapper'
        }, options);
        $(settings.imageWrapper).find('img').addClass(settings.imgClass.replace('.',''));
        var i = 0;
        this.each(function () {
            i++;
            var rel = $(this).attr('rel');
            var menuItem = $('<div class="linkwrap"><a rel="' + rel + '">' + rel + '</a></div>');
            menuItem.appendTo($(settings.navWrapper));
        });
        var first = 1;
        $(settings.imgClass+'[rel=' + first + ']').show();
        return $(settings.navWrapper).find('.linkwrap a').click(onClick)
        function onClick() {
            var field = $(this).attr('rel');
            $(settings.imgClass).hide();
            $(settings.imgClass+'[rel=' + field + ']').show();
        }
    };
})(jQuery);