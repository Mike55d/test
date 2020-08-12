import 'slick-carousel';

export default {
    init() {
        // JavaScript to be fired on the home page

        // SMOOTH SCROLLING

        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('.nav-item').removeClass('active');
                        $(this).parent().addClass('active');
                        var scrollAmount = 0;
                        if (window.innerWidth < 768) {
                            scrollAmount = target.offset().top - 140
                        } else {
                            scrollAmount = target.offset().top - 100
                        }
                        $('html, body').animate({
                            scrollTop: scrollAmount,
                        }, 500);
                    }
                }
            });
          
            var isScrolling;

        $(window).bind('scroll', function() {

            var currentTop = $(window).scrollTop() + 150;
            var elems = $('.section');
            elems.each(function() {
                var elemTop = $(this).offset().top;
                var elemBottom = elemTop + $(this).height();
                if (currentTop >= elemTop && currentTop <= elemBottom) {
                    var id = $(this).attr('id');
                    var navElem = $('a[href="#' + id + '"]');
                    $('.nav-item').removeClass('active');
                    navElem.parent().addClass('active');
                }
            });
            // Clear our timeout throughout the scroll
            window.clearTimeout( isScrolling );
            
            // Set a timeout to run after scrolling ends
            isScrolling = setTimeout(function() {

                if(window.innerWidth < 768) {
                    var navPos = $('.nav-item.active').offset().left;
                    $('nav').animate({
                        scrollLeft: $('nav').scrollLeft() + navPos - 50,
                    }, 200)
                    
                }

            }, 50);
    
            
        });

        $('.input-wrap input, .input-wrap textarea').on('focus input', function() {
            $('label[for=' + $(this).attr('name') + ']').addClass('active');
        });
        $('.input-wrap input, .input-wrap textarea').on('blur', function() {
            if ($(this).val() == '') {
                $('label[for=' + $(this).attr('name') + ']').removeClass('active');
            }
        });
        $('.input-counter').on('input', function() {
            $('#counter').text($(this).val().length);
        })

        $('.idx').on('click', function() {
            $(window).trigger('resize');
            var index = parseInt($(this).attr('data-index'));
            $('.slider-services').slick('slickGoTo', index);
        });

        $('.text-only').keydown(function(e) {
            if (e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key == 8) || (key == 9) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                    e.preventDefault();
                }
            }
        });

        $('.number-only').keydown(function(e) {
            if (e.shiftKey || e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 8) || (key == 9))) {
                    e.preventDefault();
                }
            }
        });

        $('.expand').on('click', function(e) {
            window.setTimeout(function() {
                var link = $(e.target).closest('a')
                if (window.location.pathname === '/es/') {
                    if ($(link).hasClass('collapsed')) {
                        $(link).find('span').text('Ver más');
                    } else {
                        $(link).find('span').text('Ver menos');
                    }
                } else if (window.location.pathname === '/en/') {
                    if ($(link).hasClass('collapsed')) {
                        $(link).find('span').text('See more');
                    } else {
                        $(link).find('span').text('See less');
                    }
                }
            }, 100)
        });

        $('.slider-services').slick({
            dots: false,
            arrows: true,
            infinite: true,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });

        $('.lang-toggle').on('click', function(e){
            e.preventDefault();
            $('.language-switcher').toggleClass('open');
        })
    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};