<?php
/*
Plugin Name: Nalta meta till fotografier
Plugin URI: https://github.com/selindmarkl/nalta/tree/master/plugins/nalta-meta
Description: Presentera meta data som lagras i egna fält i en post. Denna plugin visar fotoinformation från kommunarkivet.se 
Version: 0.6
Author: Jido 
Author URI: https://github.com/selindmarkl
*/
 
function nalta_meta_till_fotografier ( $content ) {

    // Vi vill bara lägga till koden på enskilda inlägg
    if ( is_single() ) { 

        //lägger till koden i slutet av inlägget
        $content .= 'Fotoinformation:<br /><hr>
<span class="meta-rubrik">Fotograf:</span> [ecpt_field id="fotograf"]<br />
<span class="meta-rubrik">Årtal:</span> [ecpt_field id="year"]<br />
<span class="meta-rubrik">Bildrättigheter:</span> [ecpt_field id="copyright"]<br />
<span class="meta-rubrik">Bildnummer:</span> [ecpt_field id="bildnummer"]<br />
<br />'; 

    }

    // returnera det nya innehållet
    return $content;
}

//lägga till ett filter som aktiverar vår filtreringsfunktion
add_filter( 'the_content', 'nalta_meta_till_fotografier');
?>
