<?php
/*
Plugin Name: Top Latino Radio WP-Player
Plugin URI: http://www.toplatino.net/
Description: Agrega el player de Top Latino Radio como widget en tu sitio de Wordpress. 
Version: 2.0
Author: Luis del Campo
Author URI: http://www.toplatino.net
*/

//Define directorios del plugin
define( 'WP_TOPLATINO_URL_PLAYER', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_TOPLATIO_DIR_PLAYER', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_TopLatinoRadio($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>

 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,145,0" width="160" height="240" align="middle">
<param name="allowScriptAccess" value="always" />
<param name="allowFullScreen" value="false" />
<param name="movie" value="http://cadenatop.com/players/toplatino/toplatino.swf" />
<param name="quality" value="high" /><param name="bgcolor" value="" />
<embed src="http://cadenatop.com/players/toplatino/toplatino.swf" quality="high" bgcolor="" width="160" height="240" name="embed-wp" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://get.adobe.com/es/flashplayer" />
</object>
<center><a href="http://www.toplatino.net"><font size="1px">Top Latino Radio</font></a></center>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('Top Latino Radio', 'widget_TopLatinoRadio'); 
?>