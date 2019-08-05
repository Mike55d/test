<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function footerFields() 
    {
        return (object) array (
            'facebook' => get_field('facebook', 'options'),
            'twitter' => get_field('twitter', 'options'),
            'youtube' => get_field('youtube', 'options'),
            'terms_and_conditions' => get_field('terms_and_conditions', 'options'),
            'instagram' => get_field('instagram', 'options'),
            'privacy_policy' => get_field('privacy_policy', 'options'),
            'cookies' => get_field('cookies', 'options')
        );
    }

}
