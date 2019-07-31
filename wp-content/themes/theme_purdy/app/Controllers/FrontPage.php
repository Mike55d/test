<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    // controllers/FrontPage.php
    public function ServicesLoop()
    {
        $services_items = get_posts([
            'post_type' => 'services',
            'posts_per_page'=>'10',
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            ];
        }, $services_items);
    }

    public function SocialAxisLoop()
    {
        $social_axis_items = get_posts([
            'post_type' => 'social_axis',
            'posts_per_page'=>'10',
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            ];
        }, $social_axis_items);
    }

    public function LocationsLoop()
    {
        $locations_items = get_posts([
            'post_type' => 'locations',
            'posts_per_page'=>'10',
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            ];
        }, $locations_items);
    }

}


