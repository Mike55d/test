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
                        // $('.nav-item').removeClass('active');
                        // $(this).parent().addClass('active');
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100,
                        }, 500, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(':focus')) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                        });
                    }
                }
            });
        $(window).bind('scroll', function() {
            var currentTop = $(window).scrollTop() + 100;
            var elems = $('section');
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
            //var currentLeft = $('nav').scrollLeft();
            var offsetLeft = $('.nav-item.active').offset().left;
            $('nav').animate({
                scrollLeft: offsetLeft,
            }, 50)
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
            var index = parseInt($(this).attr('data-index'));
            $('.carousel').carousel(index);
            $('.carousel').carousel('pause');
        });

        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 1; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });

    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};