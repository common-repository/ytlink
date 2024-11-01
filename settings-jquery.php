<?php

function jquery_scripts($video_x = 800, $video_y = 600, $jq_options = '', $v_id = '', $vb='') {
  switch ($vb)
  {
  case "fancybox":
    $fbpp_jquery_script = htmlentities("
    <!-- START ytlink -->
    <script type='text/javascript'>
    //jQuery-fancybox
    jQuery(function(){
      jQuery('#" . $v_id . "').click(function() {
        jQuery.fancybox({
          'width'     :  '" . $video_x . "',
          'height'    :  '" . $video_y . "',
          " . trim(html_entity_decode($jq_options)) . "
        });
      return false;
      });
    })
    </script>
    <!-- END ytlink -->
    ", ENT_COMPAT);
    break;

  case "prettyphoto":
    $fbpp_jquery_script = htmlentities("
    <!-- START ytlink -->
    <script type='text/javascript'>
    //jQuery-prettyphoto
    jQuery(function(){
    jQuery('#" . $v_id . "').prettyPhoto({
      " . trim(html_entity_decode($jq_options)) . "
    });
    })
    </script>
    <!-- END ytlink -->
    ", ENT_COMPAT);
    break;

  case "slimbox":
    $fbpp_jquery_script = htmlentities("
    <!-- START ytlink -->
    <script type='text/javascript'>
    //jQuery-slimbox
    jQuery(function(){
    jQuery('#" . $v_id . "').slimbox({
      " . trim(html_entity_decode($jq_options)) . "
    });
    })
    </script>
    <!-- END ytlink -->
    ", ENT_COMPAT);
    break;

  default:
    $fbpp_jquery_script = "";

  }

return html_entity_decode($fbpp_jquery_script);

}

?>
