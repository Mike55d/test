<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* --------------------------------------------------------------------------------------------------------------------------------------- */
 function adminForm_sxmlsg() {
	 

?>
<div class="wrap">
<h2>Simple XML Sitemap Generator</h2>
<b>Deutsch / German</b>
<p>Mit diesem Plugin wird ganz einfach eine Sitemap.xml generiert. Nachdem Sie das Plugin aktiviert haben und ein Beitrag oder Post aktualisiert / neu geschrieben haben - wird die sitemap.xml Datei automatisch generiert.</p>
<b>Englisch / English</b>
<p>With this Plugin installed, a sitemap.xml will automaticly be generated..</p>

	
<hr />
	
	
	
	
<?php
/*
 <h3>#start#</h3>
$categories = get_categories();
foreach($categories as $category) {
   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
}

<h3>#ende#</h3>		 
*/
  
/*------nonce field check start ---- */
if (isset($_REQUEST['submit'])) {

  if ( 
    ! isset( $_POST['nonce_tel'] ) 
    || ! wp_verify_nonce( $_POST['nonce_tel'], 'nonce_tel_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsapp();
  			}
			
  }			
/*------nonce field check end ---- */  

  
  


/*------nonce field reset start ---- */
if (isset($_REQUEST['submit_post_kat_sxmlsg'])) {
  if ( 
    ! isset( $_POST['nonce_wppostkat'] ) 
    || ! wp_verify_nonce( $_POST['nonce_wppostkat'], 'nonce_wppostkat_field' ) 
		) {
	  		print '##error';
   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
	  //print '##ok';
   		saveForm_kat_sxmlsg();
  			}
}
/*------nonce field reset end ---- */ 


	  
 
  





  
  
 showForm_sxmlsg();
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
 
 
 
 
 
 
 
 
 
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 	
 	//reset
  if (isset($_REQUEST['quickwhatsappbutton_reset'])) {
	  $resetter = '';
   update_option('quickwhatsapp', sanitize_text_field($resetter) );
  }

function resetForm_quickwhatsapp333333() {
  
  update_option('quickwhatsapp', '' );

  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 




/* --------------------------------------------------------------------------------------------------------------------------------------- */  
/* greetings */
 function saveForm_kat_sxmlsg() {

$sxmlsg_wpkat = $_REQUEST['sxmlsg_wpkat'];
//ECHO "<br />";  
//ECHO "zum abspeichern bereitlegen: $sxmlsg_wpkat";	 
//ECHO "<br />"; 
	 
ECHO "saved";	
	 
  update_option('sxmlsg_kategorien', $sxmlsg_wpkat);

  
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */




/* --------------------------------------------------------------------------------------------------------------------------------------- */
function showForm_sxmlsg() {

	/*
  $default = get_option('quickwhatsapp');
  
  //tel nummer
  echo '<h2>Quick WhatsApp Chat Optionen</h2>';
  echo '<form method="post">';
  echo '<label for="quickwhatsapp"><strong>Handynummer: / mobile phone number (Beispiel: 417611122233) </strong><br />';
  echo '<input type="text"  name="quickwhatsapp" size="50" maxlength="50" value="' . $default . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit" value="Sichern / Save">';
  wp_nonce_field( 'nonce_tel_field', 'nonce_tel' );
echo '</form><br/>';

//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickwhatsappbutton_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_reset_field', 'nonce_reset' );
  echo '</form>';
  echo '<br /><br />';
  echo '<hr>';
	
//eigene Begrüssung definieren
  echo '<form method="post">';
  echo '<label for="quickwhatsappbuttonbegrüssung"><strong>Eigene Chatbegrüssung definieren / Own Chat Greeting-Words</strong><br />';
  echo '<input type="text"  name="quickwhatsapps_greetings" size="80" maxlength="80" value="' . $quickwhatsapps_greetings_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_whatsapp_greetings" value="Sichern / Save">';
  wp_nonce_field( 'nonce_greetings_field', 'nonce_greetings' );
echo '</form><br />';
*/
	
/* #################### WordPress Kategorie add ######################### */
	

$sxmlsg_kategorien_view = get_option('sxmlsg_kategorien');
	

	
echo "<form method='post'>";
echo '<label for="wpkategorie_sxmlsg"><strong>Add WordPress post category to the Sitemap? / WordPress Kategorie zur Sitemap hinzufügen?</strong><br />';	
	
	
//<option value="Ja" selected="selected">Ja</option>

echo '<select name="sxmlsg_wpkat" id="sxmlsg_wpkat">';

if ($sxmlsg_kategorien_view  == 'Nein')
{
  echo '<option value="Nein" selected="selected">Nein / No</option>
  <option value="Ja">Ja / Yes</option>';
}
elseif  ($sxmlsg_kategorien_view == 'Ja')

{
  echo '<option value="Nein">Nein / No</option>
  <option value="Ja" selected="selected">Ja / Yes</option>';
}

else
{
  echo '<option value="Nein">Nein / No</option>
  <option value="Ja">Ja / Yes</option>';
}

echo '</select>';	
	
	
	
echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_post_kat_sxmlsg" value="Sichern / Save">';
  wp_nonce_field( 'nonce_wppostkat_field', 'nonce_wppostkat' );
echo '</form><br />';
echo '<hr>';

/* ############################################################## */
//alt: beforefp: neu quickwhatsapp
  
  ?>
  </div>
  
  <div class="wrap">
 
  <h2>Infos</h2>
  <p>Dies ist das Simple XML Sitemap Generator Plugin - programmiert von Eric-Oliver M&auml;chler von <a href="http://www.chefblogger.me" target="_blank">www.chefblogger.me</a>. Mehr von meinen WordPress Plugins findet man übrigens unter <a href="#" target="_blank">hier</a> </p>

  
  </div>
  <?php
 }
 /* --------------------------------------------------------------------------------------------------------------------------------------- */
?>