<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PressReleases extends Controller
{

    public function heroFields() 
    {
        return (object) array (
            'hero_mobile' => get_field('hero_mobile'),
            'hero_desktop' => get_field('hero_desktop'),
            'hero_text' => get_field('hero_text')
        );
    }

    public function pageFields() 
    {
        return (object) array (
            'page_title' => get_field('press_release_page_title'),
            'page_description' => get_field('press_release_page_copy'),
        );
    }
}


