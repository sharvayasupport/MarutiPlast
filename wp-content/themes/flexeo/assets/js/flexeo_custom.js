; (function ($) {
    "use strict";

    if ($('.dt_service').hasClass('dt_service--three')) {
        $(".dt_service--three .dt_item_inner").hover(function(){
            $(this).find('.dt_item_content').slideToggle(300);
            $(this).find('.dt_item_title').slideToggle(300);
        });
    }

})(jQuery);