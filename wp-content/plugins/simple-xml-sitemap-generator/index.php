<?php 
/*
Plugin Name: Simple XML Sitemap Generator
Plugin URI: http://www.chefblogger.me
Description: XML Sitemap creates an XML for use with Google and Yahoo (and Yes! Bing too). Just install it to your wordpress installation and let the plugin do his job. <a href="options-general.php?page=QWA_sxmlsg">Administration</a>
Version: 1.9.0
Author: Eric-Oliver M&auml;chler
Author URI: http://www.chefblogger.me
Requires at least: 3.5
Tested up to: 5.3.2
*/

include 'conf.php';

/* Coding start */
function sg_create_sitemap() {
  $postsForSitemap = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'modified',
    'post_type'  => array('post','page','product'),
    'order'    => 'DESC'
  ));

  $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
  $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

  foreach($postsForSitemap as $post) {
    setup_postdata($post);

    $postdate = explode(" ", $post->post_modified);

    $sitemap .= '<url>'.
      '<loc>'. get_permalink($post->ID) .'</loc>'.
      '<lastmod>'. $postdate[0] .'</lastmod>'.
      '<changefreq>daily</changefreq>'.
      '<priority>0.8</priority>'.
    '</url>';
  }
	
	
/* ADD WP Kategorie */
$sxmlsg_kategorien_view = get_option('sxmlsg_kategorien');
	
if ($sxmlsg_kategorien_view == 'Ja') {
	
$now = time();
$sxmlsg_kategorien_datum = date("Y-m-d",$now);	
	
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
	
foreach( $categories as $category ) {
   
	
    $sitemap .= '<url>'.
      '<loc>'. get_category_link( $category->term_id ) .'</loc>'.
      '<lastmod>'. $sxmlsg_kategorien_datum .'</lastmod>'.
      '<changefreq>daily</changefreq>'.
      '<priority>0.8</priority>'.
    '</url>';
	
} 
	
	
	
	
	
/*	
<url>
	<loc>$sxmlsg_kategorien_link</loc>
	<lastmod>2010-10-11</lastmod>
	<changefreq>daily</changefreq>
	<priority>0.8</priority>
</url>
*/


	
}
	
		
	

  $sitemap .= '</urlset>';

  $fp = fopen(ABSPATH . "sitemap.xml", 'w');
  fwrite($fp, $sitemap);
  fclose($fp);
}
add_action("publish_post", "sg_create_sitemap");
add_action("publish_page", "sg_create_sitemap");
/* Ok that's all */
?>