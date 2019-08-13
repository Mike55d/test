<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);



// Add option page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Configuración del Tema',
        'menu_title'	=> 'Tema', 
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}

// LOAD THE POST TYPES
foreach ( glob( realpath( dirname( __FILE__ ) ) . '/post-types/*.php' ) as $post_types ) {
    @include_once $post_types;
}

// LOAD THE CUSTOME FIELDS
foreach ( glob( realpath( dirname( __FILE__ ) ) . '/pages/*.php' ) as $post_types ) {
    @include_once $post_types;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin', 'walker']);

//ADD SVG SUPPORT
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
	
}


pll_register_string('Inicio', 'Inicio', 'theme-purdy');
pll_register_string('Servicios', 'Servicios', 'theme-purdy');
pll_register_string('Sostenibilidad', 'Sostenibilidad', 'theme-purdy');
pll_register_string('Gente Purdy', 'Gente Purdy', 'theme-purdy');
pll_register_string('Encontranos', 'Encontranos', 'theme-purdy');
pll_register_string('Contáctanos', 'Contáctanos', 'theme-purdy');

pll_register_string('Ver más', 'Ver más', 'theme-purdy');
pll_register_string('Objetivos', 'Objetivos', 'theme-purdy');

pll_register_string('Contacto', 'Contacto', 'theme-purdy');
pll_register_string('Teléfono', 'Teléfono', 'theme-purdy');
pll_register_string('Dirección', 'Dirección', 'theme-purdy');
pll_register_string('Horario de Atención', 'Horario de Atención', 'theme-purdy');
pll_register_string('Ir con', 'Ir con', 'theme-purdy');
pll_register_string('Envíanos un mensaje', 'Envíanos un mensaje', 'theme-purdy');

pll_register_string('Reglamento', 'Reglamento', 'theme-purdy');
pll_register_string('Términos y Condiciones', 'Términos y Condiciones', 'theme-purdy');
pll_register_string('Derechos Reservados', 'Derechos Reservados', 'theme-purdy');

pll_register_string('Anterior', 'Anterior', 'theme-purdy');
pll_register_string('Siguiente', 'Siguiente', 'theme-purdy');



