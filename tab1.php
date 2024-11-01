<?php
//$ytplugid = '0fqm1VPktpk';

$ytplugid = 'e-jMjV3caS0';

?>





<!-- Infos -->

<?php

$imgurl=WP_PLUGIN_URL . "/ytlink/images/";
  $ytid = $ytplugid;
  $videobox = get_option('videobox');
  $ico_x = get_option('ico_x');
  $ico_y = floor(get_option('ico_x')*3/4);
  $param = get_option('param');
  $size = "";
  $rz = rand(100, 999);
  if ( $x == '' ) $video_x = get_option('video_x'); else $video_x = $x;
  if ( $y == '' ) $video_y = get_option('video_y'); else $video_y = $y;
  if ( $ppic == '' ) $ppic = get_option('ppic');
  if ( $tit == '' ) $tit = get_option('tit');
  $float = get_option('float');
  $fso = get_option('fso');
  $fs = get_option('fs');
  $align = get_option('hlage');
  $pfeil = get_option('pfeil');
  if ($video_x != "" && $video_y != "") $size = "&width=" . $video_x . "&height=" . $video_y;  

if ( get_option('fso') == h) {
  $fssize = getimagesize($imgurl . get_option('fsob'));
  $fssize = $fssize[1];
} else {
  $fssize = getimagesize($imgurl . get_option('fsli'));
  $fssize = $fssize[0];
}
?>

<script type="text/javascript">

function sxt (sx) {
  if (sx > 496) { sx = 496 };
  if (sx < 76) { sx = 76 };
  var sxn = Math.floor(sx / 4) *4;
  if (sx == sxn) {
    return sx;
  } else {
    return sxn;
  }
}

function prevpicsize (sx) {
//  sx = sxt(sx);
  sx = parseInt(sx);
//  var sy = Math.floor(sx*3/4);
  var sy = parseInt(sx*3/4);
  var fsb = parseInt(<?php echo $fssize; ?>) ;
  var fontsi = 12;
  if (document.getElementById('fsv').checked == true ) {

//vertikale Filmstripes
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.width = fsb + 'px';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = 'left';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.width = fsb + 'px';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = 'left';
      document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.width = parseInt(sx + (2 * fsb))  + 'px';
      document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.height= parseInt(sy + fontsi) + 'px';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = 'left';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.marginTop = '0px';
      document.getElementById('picol_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('picol_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('picol_<?php echo $ytid . "-" . $rz; ?>').style.marginTop = '0px';
      document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.width = parseInt(sx + (2 * fsb)) + 'px';
      document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';


  } else {

//horizontale Filmstripes
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.height = fsb + 'px';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = 'left';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.height = fsb + 'px';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = 'left';
      document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.height= parseInt(sy + fontsi + (2 * fsb)) + 'px';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('picol_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('picol_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
      document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.width = sx + 'px';
      document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.height = parseInt(sy + (2 * fsb)) + 'px';
  

  }
  document.getElementById('ic').value = sx;
  document.getElementById('ict').value = sx;
}

function prevpic (pp) {
  document.getElementById('pic_<?php echo $ytid . "-" . $rz; ?>').style.backgroundImage = 'url("http://i.ytimg.com/vi/<?php echo $ytplugid; ?>/' + pp + '.jpg"\)';
}

function updtitel (tit) {
  document.getElementById('title_<?php echo $ytid . "-" . $rz; ?>').innerText = tit;
}

function arro (ar) {
  ar = ar.replace(/#/g, '');
      document.getElementById('pfeil').value = ar;
      document.getElementById('arrowcol').value = '#' + ar;
}

function textfluss (tf) {
  document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = tf;
  if (tf != 'none') {
    document.getElementById('lagel').disabled = 'disabled';
    document.getElementById('lagec').disabled = 'disabled';
    document.getElementById('lager').disabled = 'disabled';
  } else {
    document.getElementById('lagel').disabled = false;
    document.getElementById('lagec').disabled = false;
    document.getElementById('lager').disabled = false;
  }
}

function zentr (tf) {
  document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.margin = tf;
}

function filmstripe1 () {
  var sx = document.getElementById('ict').value;
  var sy = parseInt(sx*3/4);
  var fsurl="http://www.xundeenergie.at/wordpress/wp-content/plugins/ytlink/images/";
  if (document.getElementById('fs').checked == true) {
    document.getElementById('fs').checked = 'checked';
//    document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.visibility = 'visible';
//    document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.visibility = 'visible';
    document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.display = 'block';
    document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.display = 'block';
    document.getElementById('fsh').disabled = false;
    document.getElementById('fsv').disabled = false;

    if (document.getElementById('fsv').checked == true) {
//vertikale Filmstreifen
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.backgroundImage = 'url(' + fsurl + 'filmstreifen-links.png' + ')';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.backgroundRepeat = 'repeat-y';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.backgroundImage = 'url(' + fsurl + 'filmstreifen-rechts.png' + ')';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.backgroundRepeat = 'repeat-y';

   } else {
//horizontale Filmstreifen
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.backgroundImage = 'url(' + fsurl + 'filmstreifen-oben.png' + ')';
      document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.backgroundRepeat = 'repeat-x';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.backgroundImage = 'url(' + fsurl + 'filmstreifen-unten.png' + ')';
      document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.backgroundRepeat = 'repeat-x';
//      document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.height = parseInt(sy + (2 * fsb)) + 'px';
    }

  } else {
//    document.getElementById('ppr_<?php echo $ytid . "-" . $rz; ?>').style.height = sy + 'px';
    document.getElementById('fs1_<?php echo $ytid . "-" . $rz; ?>').style.display = 'none';
    document.getElementById('fs2_<?php echo $ytid . "-" . $rz; ?>').style.display = 'none';
    document.getElementById('fsh').disabled = 'disabled';
    document.getElementById('fsv').disabled = 'disabled';
  }

  prevpicsize(document.getElementById('ict').value);
}

function defaults() {
  document.getElementById('im').checked = 'checked';
  document.getElementById('fs').checked = 'checked';
  document.getElementById('ppd').checked = 'checked';
  document.getElementById('fs').checked = 'checked';
  document.getElementById('fsv').checked = 'checked';
  document.getElementById('tfn').checked = 'checked';
  document.getElementById('hlage').style.visibility = 'visible';
  document.getElementById('lagec').checked = 'checked';
  document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.margin = '<?php echo get_option('float_def'); ?>';
  document.getElementById('ppic_<?php echo $ytid . "-" . $rz; ?>').style.cssFloat = '<?php echo get_option('hlage_def'); ?>';

  arro('<?php echo get_option('pfeil_def'); ?>');
  prevpic('default');
  prevpicsize('<?php echo get_option('ico_xm'); ?>');
  document.getElementById('video_x').value = '<?php echo get_option('video_x_def'); ?>';
  document.getElementById('video_y').value = '<?php echo get_option('video_y_def'); ?>';
  document.getElementById('tit').value = '<?php echo get_option('tit_def'); ?>';
}

</script>
<div class="wrap">
<h2><?php _e('Youtube-Link', 'ytlink'); ?></h2>



<h3><?php _e('Videodarstellung', 'ytlink'); ?></h3>
<select name="videobox" size="1" >
	<option id="fanb" <?php if(get_option('videobox') == "fancybox") echo " selected"; if( !is_plugin_active('fancybox-for-wordpress/fancybox.php')) echo " disabled" ?> >fancybox</option>
	<option id="prph" <?php if(get_option('videobox') == "prettyphoto") echo " selected"; if( !is_plugin_active('prettyphoto/prettyphoto.php')) echo " disabled" ?> >prettyphoto</option>
	<option id="slmbx" <?php if(get_option('videobox') == "slimbox") echo " selected"; if( !is_plugin_active('wp-slimbox2/index.php')) echo " disabled" ?> style="display:none;">slimbox</option>
	<option id="blank" <?php if(get_option('videobox') == "neues Fenster") echo " selected" ?> ><?php _e('neues Fenster', 'ytlink'); ?></option>
</select>

<?php //**** Laden des Vorschaubild-Skriptes
require 'preview.php'; 
?>


<h3><?php _e('Vorschaubild', 'ytlink'); ?></h3>
<div style="max-width: 600px; 20em; border-width:1px; border-style:solid; border-color:blue; padding:2.5em; width:600px;">
<div><?php _e('Die Darstellung des Videos im Admin-Bereich funktioniert nur in einem neuen Fenster.', 'ytlink'); ?>
<?php _e('Zum Testen bitte eine Site oder Artikel ausprobieren!!!', 'ytlink'); ?>

<?php
/** Laden des gesamten Vorschaubildes **/
 echo $vpreview; 
?>

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>

<div style="clear:both;"></div>

<div style="float: left; width:">
<h3><?php _e('Gr&ouml;&szlig;e:', 'ytlink'); ?></h3>
    <input id="is" type="radio" name="ico_x" value="<?php echo get_option('ico_xs'); ?>"  onclick="prevpicsize(this.value);" <?php if ( get_option('ico_x') == get_option('ico_xs') ) echo " checked"; ?> ><label for="is"> <?php _e('klein', 'ytlink'); ?></label><br>
    <input id="im" type="radio" name="ico_x" value="<?php echo get_option('ico_xm'); ?>" onclick="prevpicsize(this.value);" <?php if ( get_option('ico_x') == get_option('ico_xm') ) echo " checked"; ?> ><label for="im"> <?php _e('mittel', 'ytlink'); ?></label><br>
    <input id="il" type="radio" name="ico_x" value="<?php echo get_option('ico_xl'); ?>" onclick="prevpicsize(this.value);" <?php if ( get_option('ico_x') == get_option('ico_xl') ) echo " checked"; ?> ><label for="il"> <?php _e('gro&szlig;', 'ytlink'); ?></label> <br>
    <input id="ic" type="radio" name="ico_x" value="<?php echo get_option('ico_x'); ?>" onclick="prevpicsize(getElementById('ict').value);" <?php 
    if ( 
      get_option('ico_x') != get_option('ico_xs') &&
      get_option('ico_x') != get_option('ico_xm') &&
      get_option('ico_x') != get_option('ico_xl') 
    ) 
    echo " checked"; ?> >
    <label for="ic"><?php _e('Benutzerdefiniert', 'ytlink'); ?>
      <input type="text" id="ict" name="ico_x" value="<?php echo get_option('ico_x'); ?>"  onchange="prevpicsize(this.value);" style="text-align: right;" size="3" maxlength="3">px <?php _e('horizontal.', 'ytlink'); ?><br>
      <?php _e('Die Vertikale ist der angegebene Horizontalwert * 0,75', 'ytlink'); ?>
    </label> 
</div>

<div  style="float:left;">
<h3><?php _e('Textfluss', 'ytlink'); ?></h3>
<div style="float:left;">
<input id="tfl" type="radio" name="float" value="left" onclick="textfluss(this.value);" <?php if ( get_option('float') == 'left' ) echo " checked"; ?> ><label for="tfl"> <?php _e('links', 'ytlink'); ?></label> <br>
<input id="tfn" type="radio" name="float" value="none" onclick="textfluss(this.value);" <?php if ( get_option('float') == 'none' ) echo " checked"; ?> ><label for="tfn"> <?php _e('keiner', 'ytlink'); ?></label><br>
<input id="tfr" type="radio" name="float" value="right" onclick="textfluss(this.value);" <?php if ( get_option('float') == 'right' ) echo " checked"; ?> ><label for="tfr"> <?php _e('rechts', 'ytlink'); ?></label> <br>
</div>
</div>

<div id="hlage" style="float: left; padding-left:3em; visibility: visible;">
<h3><?php _e('horizontale Lage', 'ytlink'); ?></h3>
  <input id="lagel" type="radio" name="hlage" value="1em auto 1em 0" onclick="zentr(this.value);" <?php if ( get_option('hlage') == '1em auto 1em 0' ) echo " checked"; ?> ><label for="lagel"> <?php _e('links', 'ytlink'); ?></label> <br>

  <input id="lagec" type="radio" name="hlage" value="1em auto" onclick="zentr(this.value);" <?php if ( get_option('hlage') == '1em auto' ) echo " checked"; ?> ><label for="lagec"> <?php _e('zentriert', 'ytlink'); ?></label> <br>

  <input id="lager" type="radio" name="hlage" value="1em 0 1em auto" onclick="zentr(this.value);" <?php if ( get_option('hlage') == '1em 0 1em auto' ) echo " checked"; ?> ><label for="lager"> <?php _e('rechts', 'ytlink'); ?></label> <br>
</div>

<div style="clear:left;"></div>

<div style="float: left;">
<h3><?php _e('Filmstreifen', 'ytlink'); ?></h3>
<table>
<tr>
<td>
    <div><input id="fs" type="checkbox" name="fs" value="true" onclick="filmstripe1();" <?php if ( get_option('fs') == true ) echo " checked"; ?> ><label for="fs"> <?php _e('Filmstreifen', 'ytlink'); ?></label> <br></div>
</td>
<td>
    <div>    <input id="fsv" type="radio" name="fso" value="v" onclick="filmstripe1();" <?php if ( get_option('fso') == 'v' ) echo " checked"; ?> ><label for="fsv"> <?php _e('vertikal', 'ytlink') ?></label> <br>
    <input id="fsh" type="radio" name="fso" value="h" onclick="filmstripe1();" <?php if ( get_option('fso') == 'h' ) echo " checked"; ?> ><label for="fsh"> <?php _e('horizontal', 'ytlink') ?></label> <br></div>
</td>
</tr>
</table>
</div>
<div>

<h3><?php _e('Pfeil', 'ytlink'); ?></h3>
<input type="text" class="my-color-field" id="arrowcol" name="arrowcol" value="#<?php echo get_option('pfeil'); ?>" size="10" >
<input type="hidden" id="pfeil" name="pfeil" value="<?php echo get_option('pfeil'); ?>" >


</div>

<div style="clear:left;"></div>

<h3><?php _e('Vorschaubild', 'ytlink'); ?></h3>
<p>
    <input id="ppd" type="radio" name="ppic" value="default" onclick="prevpic(this.value);" <?php if ( get_option('ppic') == 'default' ) echo " checked"; ?> ><label for="ppd"> Default.jpg</label> <br>
    <input id="pp1" type="radio" name="ppic" value="1" onclick="prevpic(this.value);" <?php if ( get_option('ppic') == '1' ) echo " checked"; ?> ><label for="pp1"> 1.jpg</label> <br>
    <input id="pp2" type="radio" name="ppic" value="2" onclick="prevpic(this.value);" <?php if ( get_option('ppic') == '2' ) echo " checked"; ?> ><label for="pp2"> 2.jpg</label> <br>
    <input id="pp3" type="radio" name="ppic" value="3" onclick="prevpic(this.value);" <?php if ( get_option('ppic') == '3' ) echo " checked"; ?> ><label for="pp3"> 3.jpg</label> <br>
</p>

<input type="hidden" name="ico_xs" value="<?php echo get_option('ico_xs'); ?>">
<input type="hidden" name="ico_xm" value="<?php echo get_option('ico_xm'); ?>">
<input type="hidden" name="ico_xl" value="<?php echo get_option('ico_xl'); ?>">
<input type="hidden" name="fsli" value="<?php echo get_option('fsli'); ?>">
<input type="hidden" name="fsre" value="<?php echo get_option('fsre'); ?>">
<input type="hidden" name="fsob" value="<?php echo get_option('fsob'); ?>">
<input type="hidden" name="fsun" value="<?php echo get_option('fsun'); ?>">

<input type="hidden" name="video_x_def" value="<?php echo get_option('video_x_def'); ?>">
<input type="hidden" name="video_y_def" value="<?php echo get_option('video_y_def'); ?>">
<input type="hidden" name="tit_def" value="<?php echo get_option('tit_def'); ?>">
<input type="hidden" name="pfeil_def" value="<?php echo get_option('pfeil_def'); ?>">
<input type="hidden" name="fb_settings_def" value="<?php echo htmlentities(get_option('fb_settings_def')); ?>">
<input type="hidden" name="pp_settings_def" value="<?php echo htmlentities(get_option('pp_settings_def')); ?>">
<input type="hidden" name="sb_settings_def" value="<?php echo htmlentities(get_option('sb_settings_def')); ?>">


<h3><?php _e('Video Wiedergabegr&ouml;&szlig;e', 'ytlink'); ?></h3>
<?php _e('Breite:', 'ytlink') ?>
  <input type="text" id="video_x" name="video_x" value="<?php echo get_option('video_x'); ?>" (default 800)/>
<?php _e('H&ouml;he', 'ytlink'); ?>
  <input type="text" id="video_y" name="video_y" value="<?php echo get_option('video_y'); ?>" default(488)/><br>

<h3><?php _e('Standardtitel', 'ytlink'); ?></h3>
<?php _e('Titel', 'ytlink'); ?>
  <input type="text" id="tit" name="tit" value="<?php echo get_option('tit'); ?>" onchange="updtitel(this.value);" /> <?php _e('(Bei Shortcode ohne der Option "tit=")', 'ytlink'); ?>

<input type="hidden" name="action" value="update" />



</div>
