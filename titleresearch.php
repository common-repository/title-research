<?php
/**
 * @package TitleResearch
 * @version 1.0
 */
/*
Plugin Name: Title Research
Plugin URI: http://www.shahariaazam.com/downloads/wp-plugin/titleresearch.zip
Description: This 'Title Research' plugin is helpful for researcher who want direct search according to the title of the wordpress post. They don't need to search on that same topics in the search engine. They can easily get the more information by clicking the search engine's icons.
Version: 1.0
Author URI: http://www.shahariaazam.com
*/
function MoreInfo(){
   $x=get_the_title();
   echo '----------------- <br />For more info on this title <a href="http://www.google.com/search?q='.$x.'"><img src="wp-content/plugins/titleresearch/google.png"></a>';
   echo '&nbsp;<a href="http://search.yahoo.com/search?q='.$x.'"><img src="wp-content/plugins/titleresearch/yahoo.png"></a>';
}
add_action('loop_end','MoreInfo');
?>