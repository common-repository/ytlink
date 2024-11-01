<div>
<h2><?php _e('Einstellungen für die Videodarstellung in prettyPhoto', 'ytlink'); ?></h2>
</div>


<textarea wrap="physical" cols="120" rows="30" name="pp_settings" id="pp_settings" aria-describedby="newcontent-description">
<?php echo htmlentities(get_option('pp_settings')); ?>
</textarea>
