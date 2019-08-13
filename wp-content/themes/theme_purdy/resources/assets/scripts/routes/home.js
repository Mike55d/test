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
                        }, 500);
                    }
                }
            });
        $(window).bind('scroll', function() {

            var currentTop = $(window).scrollTop() + 150;
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

            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function() {
                var offset = $('.nav-item.active').offset().left - $(window).scrollLeft();
                if (offset > window.innerWidth && $(window).width < 768) {
                    // Not in view so scroll to it
                    $('nav').animate({
                        scrollLeft: offset,
                    }, 300)
                    return false;
                } else if (offset < 0 && $(window).width < 768) {
                    $('nav').animate({
                        scrollLeft: 0,
                    }, 300)
                    return false;
                }
                return true
            }, 250));
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

        $('.text-only').keydown(function(e) {
            if (e.shiftKey || e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                    e.preventDefault();
                }
            }
        });

        $('.number-only').keydown(function(e) {
            if (e.shiftKey || e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
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
        })

    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};