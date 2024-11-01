<?php
require_once 'settings-jquery.php';


//Festlegen des Codes für das Video ($vlink) und des Vorschaubildes ($ilink)

  $vlink="http://www.youtube.com/watch?v=" . $ytid;
//  $vlink="http://www.youtube.com/v/" . $ytid;
  $ilink="http://i.ytimg.com/vi/" . $ytid . "/" . $ppic . ".jpg";
  $imgurl=WP_PLUGIN_URL . "/ytlink/images/";
  //$overlayimg=$imgurl . "video-button-transp_" . get_option('pfeil') . ".png";
  $overlayimg = WP_PLUGIN_URL . "/ytlink/arrow.php?color=" . $pfeil;
  $fontsize = 11;
  update_option('ilink', $ilink);

  if ( $fs == 'true') {
    if ( $fso == 'h') {

      //horizontale Streifen
      $fsl = $imgurl . get_option('fsob');
      $fsr = $imgurl . get_option('fsun');
      $fssize = getimagesize($fsl);
      $bgrep = "repeat-x";
      $fswidth =  get_option('ico_x') . "px";
      $fsheight =  $fssize[1] . "px";
      $fspad_x = "0px";
      $fspad_y = $fsheight;
     $floatprev = "clear:left";
      $floatoben = "left";
//      $floatprev = "left";
      $floatunten = "left";
      $ppic_x = $ico_x + ( 2 * $fspad_x);
      $ppic_y = $ico_y + ( 2 * $fspad_y);
      $ppr_y = $ico_y + $fontsize + ( 2 * $fspad_y);


    } else {

      //vertikale Streifen
      $fsl = $imgurl . get_option('fsli');
      $fsr = $imgurl . get_option('fsre');
      $fssize = getimagesize($fsl);
      $bgrep = "repeat-y";
      $fsheight =  floor(get_option('ico_x')*3/4) . "px";
      $fswidth =  $fssize[0] . "px";
      $fspad_x = $fswidth;
      $fspad_y = "0px";
      $floatprev = "float:left";
      $floatoben = "left";
//      $floatprev = "left";
      $floatunten = "right";
      $ppic_x = $ico_x + ( 2 * $fspad_x);
      $ppic_y = $ico_y + ( 2 * $fspad_y);
      $ppr_y = $ico_y + $fontsize + ( 2 * $fspad_y);
    
    }
  } else {

      //keine Streifen
      $fsl = $imgurl . get_option('fsli');
      $fsr = $imgurl . get_option('fsre');
      $fssize = getimagesize($fsl);
      $bgrep = "repeat-y";
      $fsheight =  "0px";
      $fswidth =  "0px";
      $fspad_x = $fswidth;
      $fspad_y = "0px";
      $floatprev = "float:left";
      $floatoben = "left";
//      $floatprev = "left";
      $floatunten = "right";
      $ppic_x = $ico_x + ( 2 * $fspad_x);
      $ppic_y = $ico_y + ( 2 * $fspad_y);
      $ppr_y = $ico_y + $fontsize + ( 2 * $fspad_y);

  }

//echo $videobox;
if (is_admin()) $videobox = 'admin';

  switch ($videobox)
  {
  case "fancybox":
     $jq_options = get_option('fb_settings');
     $param = "id='youtube_fancybox_" . $ytid . "-" . $rz . "'";
     $v_id = "youtube_fancybox_" . $ytid . "-" . $rz;
     break;
  case "prettyphoto":
     $jq_options = get_option('pp_settings');
     $param = "id='youtube_prettyphoto_" . $ytid . "-" . $rz . "'";
     $v_id = "youtube_prettyphoto_" . $ytid . "-" . $rz;
     break;
  case "slimbox":
     $jq_options = get_option('sb_settings');
     $param = "id='youtube_slimbox_" . $ytid . "-" . $rz . "'";
     $v_id = "youtube_slimbox_" . $ytid . "-" . $rz;
     break;
  default:
     $jq_options = ' ';
     $param = "id='youtube_prettyphoto_" . $ytid . "-" . $rz . "' target='_blank'";
     $v_id = "youtube_" . $ytid . "-" . $rz;
  }

if (is_admin()) {
     $jq_options = ' ';
     $param = "id='youtube_admin_" . $ytid . "-" . $rz . "' target='_blank'";
     $v_id = "youtube_admin_" . $ytid . "-" . $rz;
}

echo jquery_scripts($video_x, $video_y, $jq_options, $v_id, $videobox);

$vpreview = "
<!-- Festlegen des Stylesheets für die Ausgabe -->

<style type='text/css'>
#ppic_" . $ytid . "-" . $rz . " {
  width:" . $ppic_x . "px;
  height:" . $ppr_y . "px;
  margin:" . $align . ";
//  text-align:center;
//  text-align:left;
  float: " . $float . ";
  display: block;
  padding: 0 1em 0 1em;
}


#ppr_" . $ytid . "-" . $rz . " {
  width:" . $ppic_x . "px;
  height:" . $ppic_y . "px;
  margin:0 auto;
  text-align:left;
}

div.pic_" . $ytid . "-" . $rz . " {
  width:" . $ico_x . "px;
  height:" . $ico_y . "px;
  " . $floatprev . ";
  background-image:url('" . $ilink . "');
  background-repeat: no-repeat;
  background-size: contain;
}
/*
img.pic_" . $ytid . "-" . $rz . " {
  width:" . $ico_x . "px;
  height:" . $ico_y . "px;
  filter:alpha(opacity=100);
  -moz-opacity: 1;
  opacity: 1;
  background-image:url('" . $ilink . "');
  background-repeat: no-repeat;
  background-size: contain;
}
*/
#picol_" . $ytid . "-" . $rz . " {
  width:" . $ico_x . "px;
  height:" . $ico_y . "px;
  filter:alpha(opacity=100);
  -moz-opacity: 1;
  opacity: 1;
  display: block;
  padding: 0px;
  max-width: 100%;
  border: 0px solid;
  background: transparent;
}

div.fs1_" . $ytid . "-" . $rz . " {
  width:" . $fswidth . ";
  height:" . $fsheight . ";
  float:" . $floatoben . ";
  background-image:url('" . $fsl . "');
  background-repeat: " . $bgrep . ";
  background-size: contain;
}

div.fs2_" . $ytid . "-" . $rz . " {
  width:" . $fswidth . ";
  height:" . $fsheight . ";
  float:" . $floatunten . ";
  background-image:url('" . $fsr . "');
  background-repeat: " . $bgrep . ";
  background-size: contain;
}

h5.h5_" . $ytid . "-" . $rz . " {
  margin-top: 0px;
  text-align: left;
  font-size: " . $fontsize . "px;
  font-weight: normal;
  width: 600px;
}

#ipic_" . $ytid . "-" . $rz . " {
  width:" . $ppic_x . "px;
  height:" . $ppic_y . "px;
  visibility: hidden;
  display: none;
}
</style>

<!-- Struktur des Videoelements -->

<div id='ppic_" . $ytid . "-" . $rz . "' class='ppic_" . $ytid . "-" . $rz . "'>
  <div id='ppr_" . $ytid . "-" . $rz . "' class='ppr_" . $ytid . "-" . $rz . "'>
   <span>
   <img id='ipic_" . $ytid . "-" . $rz . "' class='ppr_" . $ytid . "-" . $rz . "' src='" . $ilink . "' title='" . $tit . "' alt='" . $tit . "'>
   </span>
    <a " . $param . " title='" . $tit . "' href='" . $vlink . $size . "&fs=1&feature=player_embedded'>
    <div id='fs1_" . $ytid . "-" . $rz . "' class='fs1_" . $ytid . "-" . $rz . "'></div>
    <div id='pic_" . $ytid . "-" . $rz . "' class='pic_" . $ytid . "-" . $rz . "'>
        <img id='picol_" . $ytid . "-" . $rz . "' class='pic_" . $ytid . "-" . $rz . "' src='" . $overlayimg . "' />
    </div>
    <div id='fs2_" . $ytid . "-" . $rz . "' class='fs2_" . $ytid . "-" . $rz . "'></div>
    </a>
  </div>
  <div id='title_" . $ytid . "-" . $rz . "' class='title_" . $ytid . "-" . $rz . "'>
    <h5 class='h5_" . $ytid . "-" . $rz . "'>" . $tit . "</h5>
  </div>
</div >";
?>
