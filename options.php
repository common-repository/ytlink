<?php
/* Make theme available for translation */
load_theme_textdomain( 'ytlink', WP_PLUGIN_DIR . '/ytlink/languages' );

?>


<script type="text/javascript">

jQuery(document).ready(function() {
  jQuery("#tab1b").click(function() {
    jQuery("#tab1").show("slow");
    jQuery("#tab2").hide("normal");
    jQuery("#tab3").hide("normal");
    jQuery("#tab4").hide("normal");
    jQuery("#tab5").hide("normal");
    jQuery("#tab1b").addClass("active");
    jQuery("#tab2b").removeClass("active");
    jQuery("#tab3b").removeClass("active");
    jQuery("#tab4b").removeClass("active");
    jQuery("#tab5b").removeClass("active");
  });
  jQuery("#tab2b").click(function() {
    jQuery("#tab1").hide("normal");
    jQuery("#tab2").show("slow");
    jQuery("#tab3").hide("normal");
    jQuery("#tab4").hide("normal");
    jQuery("#tab5").hide("normal");
    jQuery("#tab1b").removeClass("active");
    jQuery("#tab2b").addClass("active");
    jQuery("#tab3b").removeClass("active");
    jQuery("#tab4b").removeClass("active");
    jQuery("#tab5b").removeClass("active");
  });
  jQuery("#tab3b").click(function() {
    jQuery("#tab1").hide("normal");
    jQuery("#tab2").hide("normal");
    jQuery("#tab3").show("slow");
    jQuery("#tab4").hide("normal");
    jQuery("#tab5").hide("normal");
    jQuery("#tab1b").removeClass("active");
    jQuery("#tab2b").removeClass("active");
    jQuery("#tab3b").addClass("active");
    jQuery("#tab4b").removeClass("active");
    jQuery("#tab5b").removeClass("active");
  });
  jQuery("#tab4b").click(function() {
    jQuery("#tab1").hide("normal");
    jQuery("#tab2").hide("normal");
    jQuery("#tab3").hide("normal");
    jQuery("#tab4").show("slow");
    jQuery("#tab5").hide("normal");
    jQuery("#tab1b").removeClass("active");
    jQuery("#tab2b").removeClass("active");
    jQuery("#tab3b").removeClass("active");
    jQuery("#tab4b").addClass("active");
    jQuery("#tab5b").removeClass("active");
  });
  jQuery("#tab5b").click(function() {
    jQuery("#tab1").hide("normal");
    jQuery("#tab2").hide("normal");
    jQuery("#tab3").hide("normal");
    jQuery("#tab4").hide("normal");
    jQuery("#tab5").show("slow");
    jQuery("#tab1b").removeClass("active");
    jQuery("#tab2b").removeClass("active");
    jQuery("#tab3b").removeClass("active");
    jQuery("#tab4b").removeClass("active");
    jQuery("#tab5b").addClass("active");
  });
});

</script>

<div class="body">
<div style="float:left;">

  <span class="menu">
  <input class="tab1b active" type="button" id="tab1b" value="<?php _e('Einstellungen', 'ytlink'); ?>" >
  </span>
  <span class="menu">
  <input class="tab2b" type="button" id="tab2b" value="<?php _e('Info', 'ytlink'); ?>">
  </span>
  <span class="menu">
  <input class="tab3b" type="button" id="tab3b" value="<?php _e('Einstellungen Fancybox', 'ytlink'); ?>" <?php if( !is_plugin_active('fancybox-for-wordpress/fancybox.php')) echo " disabled" ?>>
  </span>
  <span class="menu">
  <input class="tab4b" type="button" id="tab4b" value="<?php _e('Einstellungen prettyPhoto', 'ytlink'); ?>" <?php if( !is_plugin_active('prettyphoto/prettyphoto.php')) echo " disabled" ?>>
  </span>
  <span class="menu">
  <input class="tab5b" type="button" id="tab5b" value="<?php _e('Einstellungen slimbox', 'ytlink'); ?>" <?php if( !is_plugin_active('wp-slimbox2/index.php')) echo " disabled" ?>>
  </span>


<form method="post" action="options.php" >
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('ytlink'); ?>

</div>
  <div class="site" style="clear:all;">
    <div id="tab1" class="tab1">
      <div class="content_inner">
      <?php
      require_once 'tab1.php';
      ?>
      </div>
    </div>
    <div id="tab2" class="tab2">
      <div class="content_inner">
        <?php
        require_once 'tab2.php';
        ?>
      </div>
    </div>
    <div id="tab3" class="tab3">
      <div class="content_inner">
        <?php
        require_once 'tab3.php';
        ?>
      </div>
    </div>
    <div id="tab4" class="tab4">
      <div class="content_inner">
        <?php
        require_once 'tab4.php';
        ?>
      </div>
    </div>
    <div id="tab5" class="tab5">
      <div class="content_inner">
        <?php
        require_once 'tab5.php';
        ?>
      </div>
    </div>
  </div>
</div>
<p class="submit" style="float:left;"> 
<input type="submit" class="button-primary" value="<?php _e('&Auml;nderungen &uuml;bernehmen', 'ytlink') ?>" />
<input type="button" value="<?php _e('Standardwerte', 'ytlink') ?>" onclick="defaults(); ">
</p>
</form>


<style type="text/css">
body {
  margin:0;
  text-align:center;
}


div.site {
  width:100%%;
  margin:0 auto;
  text-align:left;
}

div.tab1 {
  float:right;
  width:100%;
  visibility: visible; 
  display: block;
}

div.tab2 {
  float:right;
  width:100%;
  visibility: visible;
  display: none; 
}

div.tab3 {
  float:right;
  width:100%;
  visibility: visible; 
  display: none; 
}

div.tab4 {
  float:right;
  width:100%;
  visibility: visible; 
  display: none; 
}

div.tab5 {
  float:right;
  width:100%;
  visibility: visible; 
  display: none; 
}

/** tab5 deaktiviert - nur vorbereitet **/
#tab5b {
  display: none;
}

div.content_inner {
  padding:10px;
//  border-color:#336699;
//  border-width:1px;
//  border-style:solid;
} 

#menu {
  border-width:1px;
  border-style:solid;
  border-color:blue;
  padding:2.5em;
  floatin: left;
}

.active {
background-color: #336699; 
}

.deactive {
background-color: buttonface;
}
</style>
