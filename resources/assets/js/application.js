jQuery(document).ready(function($) {
    // @todo: Refactor this entire document
    // Cache window width on resize to reduce DOM lookups
    var window_width = $(window).width();

    $(window).resize(function() {
        window_width = $(window).width();
    });

    // Apply Fastclick to the page
    window.addEventListener('load', function() {
        FastClick.attach(document.body);
    }, false);

    // select text inputs
    $('input[type=text], textarea').focus(function() {
        $(this).select();
    });

    // Responsive docs nav
    $(document).on('click', function (e) {
        var $wrapper = $('#documentation'),
            $button = $('.docs-show');

        if ($wrapper.hasClass('nav-expanded')) {
            // If we might be dismissing
            if ($(e.target).closest('nav#docs').length == 0) {
                // If click isn't within the docs navigation, go ahead and dismiss it
                e.preventDefault();

                $button.text($button.data('show-text'));
                $wrapper.removeClass('nav-expanded');
            }
        } else if (e.target == $('.docs-show')[0]) {
            e.preventDefault();

            // If button is being clicked
            $button.text($button.data('hide-text'));
            $wrapper.addClass('nav-expanded');
        }
    });

    // Responsive top nav
    $('.show-primary-nav').on('click', function(e) {
        e.preventDefault();

        var $nav_wrapper = $('nav#primary');

        $nav_wrapper.toggleClass('expanded');

        $(document).on('click.dismiss-primary-nav', function(e) {
            if (e.target == $('.show-primary-nav')[0] && $nav_wrapper.hasClass('expanded')) {
                // Ignore if it's the button
                return;
            } else if ($(e.target).closest('nav#docs').length > 0) {
                // Ignore if it's a click within the nav
                return true;
            }

            $nav_wrapper.removeClass('expanded');
            $(document).off('.dismiss-primary-nav');
        });
    });

    // toplink
    $('#top').hide();

    $(window).scroll(function(){
        // Hide top link at the top of the page, or at the WAY bottom on mobile (obscures footer)
        var mobileHideTopFooter = window_width < 800 && ($(window).scrollTop() + $(window).height()) >= ($(document).height() - 90);

        if (($(window).scrollTop() >= 600) && ! mobileHideTopFooter)
        {
            $('#top').fadeIn(500);
        }
        else
        {
            $('#top').fadeOut(500);
        }
    });

    // sticky nav
    var nav      = $('nav#primary');
    var content  = $('#content');
    var docs     = $('#docs-content');
    var isFixed  = false;
    var $w       = $(window);
    // Sticky nav only on non-mobile
    var navHomeY = $w.width() > 800 ? nav.offset().top : 0;

    $w.resize(function()
    {
        navHomeY = $w.width() > 800 ? nav.offset().top : 0;
    });

    $w.scroll(function()
    {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if ( shouldBeFixed && ! isFixed )
        {
            nav.addClass('fixed');
            content.addClass('nav-fixed');

            isFixed = true;
        }
        else if ( ! shouldBeFixed && isFixed )
        {
            nav.removeClass('fixed');
            content.removeClass('nav-fixed');

            isFixed = false;
        }
    });

    var header_height = $('#header').outerHeight() + 50; // Add 50 for good measure

    // parallax header
    $(window).scroll( function()
    {
        var scroll = $(window).scrollTop(),
            slowScroll = scroll/2;

        // Drop parallax on smaller screens (faux mobile detection)
        if (screen.width < 1025) {
            return;
        }

        // Only run parallax when we're high enough on the page to see it
        if (scroll < header_height) {
            $('#header').css({transform: "translateY(" + slowScroll + "px)"});
        }
    });

    // footer z-index fix for ie
    $(window).scroll(function(){
        if ( $(window).scrollTop() >= 400)
        {
            $('#copyright').css({ 'z-index' : 22});
        }
        else
        {
            $('#copyright').css({ 'z-index' : 1});
        }
    });

    // quotes scroll
    var scrollSpeed = 80;
    var current = 0;
    var direction = 'h';

    function bgscroll()
    {
        current -= 1;
        $('#quotes').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
    }
    setInterval(bgscroll, scrollSpeed);

    // quotes fade
    $('#quote > li').hide();
    $('#quote > li').fadeLoop({ fadeIn: 1000, stay: 5000, fadeOut: 500 });

    /*
    // docs drop menu
    $('#documentation nav#docs ul li').click(function(){
       $(this).find('ul:first').stop(true, true).animate({
                height: ['toggle', 'swing'],
                opacity: 'toggle'
          }, 200, 'linear');
    });
    */

    // scrolling docs nav
    /*
    var $sidebar   = $("nav#docs"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 50;

    $window.scroll(function(){
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        }
        else
        {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    */

    // heading links
    $('#docs-content').find('a[name]').each(function () {
        var anchor = $('<a href="#' + this.name + '">');
        $(this).parent().next('h2').wrapInner(anchor);
    });

    // prettyprint
    $('pre').addClass('prettyprint');

    // uniform
    $('select, input:checkbox, input:radio, input:file').uniform();

});
