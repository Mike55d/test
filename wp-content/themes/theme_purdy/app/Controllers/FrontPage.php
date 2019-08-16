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
            'orderby' => 'date',
            'order'   => 'ASC'
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'stat_number' => get_field('stat_number', $post->ID),
                'stat_title' => get_field('stat_title', $post->ID),
                'stat_description' => get_field('stat_description', $post->ID),
                'icon' => get_field('icon', $post->ID)
            ];
        }, $services_items);
    }

    public function SocialAxisLoop()
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
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'objectives' => get_field('objectives', $post->ID)
            ];
        }, $social_axis_items);
    }

    public function LocationsLoop()
    {
        $locations_items = get_posts([
            'post_type' => 'locations',
            'posts_per_page'=>'20',
        ]);

        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_title', $post->post_title),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'phone' => get_field('phone', $post->ID),
                'address' => get_field('address', $post->ID),
                'schedule' => get_field('schedule', $post->ID),
                'waze_link' => get_field('waze_link', $post->ID),
                'google_maps_link' => get_field('google_maps_link', $post->ID)
            ];
        }, $locations_items);
    }

    public function heroFields() 
    {
        return (object) array (
            'hero_mobile' => get_field('hero_mobile'),
            'hero_desktop' => get_field('hero_desktop'),
            'hero_text' => get_field('hero_text')
        );
    }

    public function servicesFields() 
    {
        return (object) array (
            'services_title' => get_field('services_title'),
            'services_description' => get_field('services_description'),
        );
    }

    public function socialFields() 
    {
        return (object) array (
            'social_title' => get_field('social_title'),
            'social_description' => get_field('social_description'),
            'social_video' => get_field('social_video'),
            'social_video_thumbnail' => get_field('social_video_thumbnail')
        );
    }

    public function peopleFields() 
    {
        return (object) array (
            'people_title' => get_field('people_title'),
            'people_description' => get_field('people_description'),
            'people_image' => get_field('people_image'),
            'people_skills' => get_field('people_skills')
        );
    }

    public function locationsFields() 
    {
        return (object) array (
            'locations_title' => get_field('locations_title'),
            'locations_description' => get_field('locations_description'),
        );
    }

    public function contactFields() 
    {
        return (object) array (
            'contact_title' => get_field('contact_title'),
            'contact_description' => get_field('contact_description'),
            'contact_phone' => get_field('contact_phone'),
            'contact_messenger' => get_field('contact_messenger'),
            'contact_form' => get_field('contact_form')
        );
    }
}


