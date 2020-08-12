<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageSostenibilidad extends Controller
{
    public static function certificationsFields() 
    {
        $frontPage = get_page_by_title('Front Page'); 
        return (object) array (
            'certification_logos' => get_field('certification_logos', $frontPage->ID)
        );
    }

    public static function pageFields() 
    {
        return (object) array (
            'page_title' => get_field('sustainability_page_title'),
            'page_description' => get_field('sustainability_page_copy'),
            'page_video_thumbnail' => get_field('sustainability_page_video_thumbnail'),
            'page_video' => get_field('sustainability_page_video'),
        );
    }

    public static function reports() 
    {
        return  get_field('sustainability_page_reports');
    }

    public static function documents() {
        return  get_field('sustainability_page_documents');
    }

    public static function sustainabilitySection() 
    {
        return  get_field('sustainability_page_sustainability_section');
    }

    public static function SocialAxisLoop()
    {
        $social_axis_items = get_posts([
            'post_type' => 'social_axis',
            'posts_per_page'=>'10',
            'orderby' => 'date',
            'order'   => 'ASC'
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'full'),
                'progress' => get_field('progress', $post->ID)
            ];
        }, $social_axis_items);
    }
}


