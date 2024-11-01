<?php 
/* 
   Plugin Name: ytlink 
   Plugin URI: http://wordpress.org/extend/plugins/ytlink/
   Description: Erzeugt einen Link mit Vorschaubild aus einem Shortcode nur mit der Video-ID für Youtub
   Version: 0.9.2
   Author: Jakobus Schürz 
   Author URI: http://www.xundeenergie.at

   This program is distributed under the GNU General Public License, Version 2, 
   June 1991. Copyright (C) 1989, 1991 Free Software Foundation, Inc., 51 Franklin 
   St, Fifth Floor, Boston, MA 02110, USA 

   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
   DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR 
   ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES 
   (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; 
   LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON 
   ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT 
   (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS 
   SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. 
*/ 

define( 'YTLINK_VERSION', '0.9.2' );
define( 'YTLINK_URL', plugin_dir_url(__FILE__) );
define( 'YTLINK_PATH', plugin_dir_path(__FILE__) );
if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

/**
 * Load Text Domain
 *
 * This gets the plugin ready for translation.
 *
 * @package WPSocial SEO Booster
 * @since 1.0.0
 */
function ytlink_load_textdomain() {
  load_plugin_textdomain( 'ytlink', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'ytlink_load_textdomain' ); 


function activate_ytlink() {
  add_option('videobox', 'fancybox');
  add_option('ico_x', '220');
  add_option('ico_xs', '120');
  add_option('ico_xm', '220');
  add_option('ico_xl', '340');
  add_option('ico_y', '130');
  add_option('fs', 'true');
  add_option('fso', 'v');
  add_option('ppic', 'default');
  add_option('video_x', '800');
  add_option('video_y', '600');
  add_option('tit', 'Video ansehen');
  add_option('video_x_def', '800');
  add_option('video_y_def', '600');
  add_option('tit_def', 'Video ansehen');
  add_option('fsli', 'filmstreifen-links.png');
  add_option('fsre', 'filmstreifen-rechts.png');
  add_option('fsob', 'filmstreifen-oben.png');
  add_option('fsun', 'filmstreifen-unten.png');
  add_option('fsun', 'ilink');
  add_option('float', 'none');
  add_option('float_def', 'none');
  add_option('hlage', '1em auto');
  add_option('hlage_def', '1em auto');
  add_option('pfeil', 'FF9900');
  add_option('pfeil_def', 'FF9900');
  add_option('arrowcol', 'FF9900');
  jquery_defaults();
}

function jquery_defaults() {
$fb_settings_def = htmlentities("\n
        'padding'       : 6,
//        'autoScale'     : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic',
        'speedIn': 500,
        'speedOut': 500,
        'title'         : this.title,
        'titlePosition'   : 'inside',
        'easingIn'   : 'easeOutBack',
        'easingOut'   : 'easeInOutElastic',
        'href'          : this.href.replace(new RegExp(\"watch\\\?v=\", \"i\"), 'v/')+ '&autoplay=1',
        'type'          : 'swf',
        'swf'           : {
             'wmode'        : 'transparent',
            'allowfullscreen'   : 'true'
        }", ENT_COMPAT);

$pp_settings_def = htmlentities("", ENT_COMPAT);
$sb_settings_def = htmlentities("", ENT_COMPAT);

  add_option('fb_settings', $fb_settings_def);
  add_option('pp_settings', $pp_settings_def);
  add_option('sb_settings', $sb_settings_def);
  add_option('fb_settings_def', $fb_settings_def);
  add_option('pp_settings_def', $pp_settings_def);
  add_option('sb_settings_def', $sb_settings_def);

}


function defaults_ytlink() {
  update_option('videobox', 'prettyphoto');
  update_option('ico_x', '220');
  update_option('ico_xs', '120');
  update_option('ico_xm', '220');
  update_option('ico_xl', '340');
  update_option('ico_y', '130');
  update_option('fs', 'true');
  update_option('fso', 'v');
  update_option('video_x', '800');
  update_option('video_y', '600');
  update_option('tit', __('Video ansehen', 'ytlink'));
  update_option('video_x_def', '800');
  update_option('video_y_def', '600');
  update_option('tit_def', __('Video ansehen', 'ytlink'));
}

function deactive_ytlink() {
  delete_option('videobox');
  delete_option('ico_x');
  delete_option('ico_xs');
  delete_option('ico_xm');
  delete_option('ico_xl');
  delete_option('ico_y');
  delete_option('ppic');
  delete_option('fs');
  delete_option('fso');
  delete_option('fsli');
  delete_option('fsre');
  delete_option('fsob');
  delete_option('fsun');
  delete_option('video_x');
  delete_option('video_y');
  delete_option('tit');
  delete_option('video_x_def');
  delete_option('video_y_def');
  delete_option('tit_def');
  delete_option('fb_cust');
  delete_option('pp_cust');
  delete_option('fb_settings');
  delete_option('pp_settings');
  delete_option('sb_settings');
  delete_option('fb_settings_def');
  delete_option('pp_settings_def');
  delete_option('sb_settings_def');
  delete_option('ilink');
  delete_option('float');
  delete_option('float_def');
  delete_option('hlage');
  delete_option('hlage_def');
  delete_option('pfeil');
  delete_option('pfeil_def');
  delete_option('arrowcol');
}

function admin_init_ytlink() {
  register_setting('ytlink', 'videobox');
  register_setting('ytlink', 'ico_x');
  register_setting('ytlink', 'ico_xs');
  register_setting('ytlink', 'ico_xm');
  register_setting('ytlink', 'ico_xl');
  register_setting('ytlink', 'ico_y');
  register_setting('ytlink', 'ppic');
  register_setting('ytlink', 'video_x');
  register_setting('ytlink', 'video_y');
  register_setting('ytlink', 'tit');
  register_setting('ytlink', 'video_x_def');
  register_setting('ytlink', 'video_y_def');
  register_setting('ytlink', 'tit_def');
  register_setting('ytlink', 'fs');
  register_setting('ytlink', 'fso');
  register_setting('ytlink', 'fsli');
  register_setting('ytlink', 'fsre');
  register_setting('ytlink', 'fsob');
  register_setting('ytlink', 'fun');
  register_setting('ytlink', 'fb_cust');
  register_setting('ytlink', 'pp_cust');
  register_setting('ytlink', 'fb_settings');
  register_setting('ytlink', 'pp_settings');
  register_setting('ytlink', 'sb_settings');
  register_setting('ytlink', 'fb_settings_def');
  register_setting('ytlink', 'pp_settings_def');
  register_setting('ytlink', 'sb_settings_def');
  register_setting('ytlink', 'ilink');
  register_setting('ytlink', 'float');
  register_setting('ytlink', 'float_dev');
  register_setting('ytlink', 'hlage');
  register_setting('ytlink', 'hlage_def');
  register_setting('ytlink', 'pfeil');
  register_setting('ytlink', 'pfeil_def');
  register_setting('ytlink', 'arrowcol');
}

function admin_menu_ytlink() {
  add_options_page('Youtube-Link', 'Youtube-Link', 'manage_options', 'ytlink', 'options_page_youtubelink');
}

function options_page_youtubelink() {
  include(WP_PLUGIN_DIR.'/ytlink/options.php');  
}


if (is_admin()) {
  add_action('admin_init', 'admin_init_ytlink');
  add_action('admin_menu', 'admin_menu_ytlink');
  
}

function wp_gear_manager_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('fancybox');
wp_enqueue_script('jquery');
}

function wp_gear_manager_admin_styles() {
wp_enqueue_style('fancybox');
}

add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
add_action('admin_print_styles', 'wp_gear_manager_admin_styles');


add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
	// first check that $hook_suffix is appropriate for your admin page
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'my-script-handle', plugins_url('my-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

/**** die eigentliche Funktion *****/
function ytlink_func($atts) {

  $videobox = get_option('videobox');
  $ico_x = get_option('ico_x');
  $ico_y = floor(get_option('ico_x')*3/4);
  $param = get_option('param');
  $size = "";
  $rz = rand(100, 999);
  $fs = get_option('fs');
  $align = "";
/**
  update_option('video_x', get_option('video_x_def'));
  update_option('video_y', get_option('video_y_def'));
  update_option('tit', get_option('tit_def'));
  $x = get_option('video_x');
  $y = get_option('video_y');
  $tit = get_option('tit');
*/

  // liest die im Shortcode angegebenen parameter aus.
  extract(shortcode_atts(array(  
   'ytid' => '', 'tit' => '', 'x' => '', 'y' => '', 'ppic' => '', 'fso' => '', vb => '', float => '', align => '', pfeil => ''
   ), $atts));

  if ( $x == '' ) $video_x = get_option('video_x'); else $video_x = $x;
  if ( $y == '' ) $video_y = get_option('video_y'); else $video_y = $y;
  if ( $ppic == '' ) $ppic = get_option('ppic');
  if ( $tit == '' ) $tit = get_option('tit');
  if ( $pfeil == '' ) $pfeil = get_option('pfeil');
  switch ($fso) {
	case "n":
	  $fs = 'false';
	  break;
	case "v":
	  $fso = 'v';
	  $fs = 'true';
	  break;
	case "h":
	  $fso = 'h';
	  $fs = 'true';
	  break;
	case "":
	  $fso = get_option('fso');
	  $fs = get_option('fs');
  }
  switch ($align) {
	case "left":
	  $align = '0 auto 0 0';
	  break;
	case "center":
	  $align = '0 auto';
	  break;
	case "right":
	  $align = '0 0 0 auto';
	  break;
	case "":
	  $align = get_option('hlage');
  }
  if ( $float == '' ) $float = get_option('float');
//  if ( $align== '' ) $align= get_option('hlage');
  if ( $vb == '' ) $videobox = get_option('videobox'); else $videobox = $vb;
  if ( $video_x != "" && $video_y != "" ) $size = "&width=" . $video_x . "&height=" . $video_y;  

//echo "ALIGN: ".$align." FS: ".$fs." FSorient:".$fso."<br>";
require 'preview.php';

  return $vpreview;
	
}

add_shortcode('ytcode', 'ytlink_func');
add_shortcode('ytlink', 'ytlink_func');

register_activation_hook(__FILE__, 'activate_ytlink');
register_deactivation_hook(__FILE__, 'deactive_ytlink');



?>
