(function($) {
    jQuery(document).ready(function($){
        $('#wrapper-front').masonry({
            itemSelector: '.post-case',
            gutterWidth: 0,
            isAnimated: true,
            isFitWidth: true, // I have spend 5 hours for this shit
            isRTL: true,
            isResizable: true,
            resize: true,
            transitionDuration: '1.0s'
        });
    });
}(jQuery));