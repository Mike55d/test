export default {
    init() {
        // JavaScript to be fired on all pages
        let $html = $('html');

        $('.btn-small-letter').on('click', function() {
            setFontSize('small');
        });

        $('.btn-large-letter').on('click', function() {
            setFontSize('large');
        });


        function setFontSize(size) {
            let root_size = parseInt($html.css('font-size'));
            const small_limit = 16;
            const large_limit = 22;

            if (size === 'large') {
                root_size = root_size < large_limit ? root_size + 2 : root_size;
            } else {
                root_size = root_size > small_limit ? root_size - 2 : root_size;
            }

            $html.css('font-size', root_size + 'px');
        }

        // INIT TOOLTIP
        $('[data-toggle="tooltip"]').tooltip();

        $(window).on('resize load', function() {
            if (window.innerWidth >= 768 && $('.slider-multi.slick-initialized').length) {
                $('.slider-multi').slick('unslick')
            } else if (window.innerWidth < 768 && !$('.slider-multi.slick-initialized').length) {
                $('.slider-multi').slick({
                    dots: true,
                    arrows: false,
                    infinite: false,
                    centerMode: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
            }
            if (window.innerWidth >= 768 && $('.certification-logos.slick-initialized').length) {
                $('.certification-logos').slick('unslick')
            } else if (window.innerWidth < 768 && !$('.certification-logos.slick-initialized').length) {
                $('.certification-logos').slick({
                    dots: true,
                    arrows: false,
                    infinite: false,
                    centerMode: false,
                    slidesToShow: 1.2,
                    slidesToScroll: 1,
                });
            }
        });

        $('.expand').on('click', function(e) {
            window.setTimeout(function() {
                var link = $(e.target).closest('a')
                if (window.location.pathname.match('/es/*')) {
                    if ($(link).hasClass('collapsed')) {
                        $(link).find('span').text('Ver más');
                    } else {
                        $(link).find('span').text('Ver menos');
                    }
                } else if (window.location.pathname.match('/en/*')) {
                    if ($(link).hasClass('collapsed')) {
                        $(link).find('span').text('See more');
                    } else {
                        $(link).find('span').text('See less');
                    }
                }
            }, 100)
        });
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};