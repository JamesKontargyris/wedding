(function()
{
    $('.gallery__photo').magnificPopup({type:'image'});

    /*
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });

    /* Nav menu toggle */
    $('.site-header__menu__link').on('click', function()
    {
        var mainNav = $('.main-navigation');
        if(mainNav.hasClass('is-open'))
        {
            mainNav.animate({left:'-600px'});
        }
        else
        {
            mainNav.animate({left:'0px'});
        }
        $('.site-header__menu__icon').toggleClass('is-hidden');
        mainNav.toggleClass('is-open');
        return false;
    });

    /* Homepage fade-in of hero elements */
    $('.home-hero').css('display', 'flex');
    $('.home-hero__content, .home-hero__title__divider, .home-hero__title__small-text, .home-hero__title__medium-text, .home-hero__title__large-text, .home-hero__scroll-arrow, .home-hero__mobile-silhouettes').css('opacity', '0');

    $('.home-hero__content').delay(300).animate({opacity:1}, 1500, function()
    {
        $('.home-hero__title__small-text').animate({opacity:1}, 1000, function()
        {
            $('.home-hero__title__large-text').animate({opacity:1}, 1000, function()
            {
                $('.home-hero__title__divider').animate({opacity:1}, 700);
                $('.home-hero__title__medium-text').delay(500).animate({opacity:1}, 1000, function() {
                    $('.home-hero__scroll-arrow').delay(500).animate({opacity:1}, 1000);
                });
            });
        });
    });

    /* Footer countdown */
    var weddingDate = '2016/09/10';
    $('.countdown__timer__days .number').countdown(weddingDate, function(event)
    {
        $(this).text(event.strftime('%D'));
    });
    $('.countdown__timer__hours .number').countdown(weddingDate, function(event)
    {
        $(this).text(event.strftime('%H'));
    });
    $('.countdown__timer__minutes .number').countdown(weddingDate, function(event)
    {
        $(this).text(event.strftime('%M'));
    });
    $('.countdown__timer__seconds .number').countdown(weddingDate, function(event)
    {
        $(this).text(event.strftime('%S'));
    });

    /* Make proposal photos appear when the user scrolls to that section of the homepage */
    $(window).scroll( function(){

        /* Hide the scroll down arrow on the homepage*/
        $('.home-hero__scroll-arrow').fadeOut(500);

        /* Check the location of each desired element */
        $('.our-story__photos .photos-row__photo:first-child').each( function(i){

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it in */
            if( bottom_of_window > bottom_of_object ){

                $('.our-story__photos .photos-row__photo').each(function(i) {
                    $(this).delay((i++) * 500).animate({'opacity':'1'},1300);
                });

            }

        });

    });

    /* Smooth scroll to named anchor */
    $(document).on('click', '.smooth-scroll', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $(id).offset().top - 80;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos}, 1000);
    });
})();