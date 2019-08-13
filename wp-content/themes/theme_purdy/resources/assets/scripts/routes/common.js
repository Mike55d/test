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
        $('[data-toggle="tooltip"]').tooltip()
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};