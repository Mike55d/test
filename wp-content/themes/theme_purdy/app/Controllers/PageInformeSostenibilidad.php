<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageInformeSostenibilidad extends Controller
{
    public static function getReports() 
    {
        $frontPage = get_page_by_title('Sostenibilidad'); 
        return (object) array (
            'sustainability_page_reports' => get_field('sustainability_page_reports', $frontPage->ID)
        );
    }
}


