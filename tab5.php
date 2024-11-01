<div>
<h2><?php _e('Einstellungen für die Videodarstellung in slimbox', 'ytlink'); ?></h2>
</div>


<textarea wrap="physical" cols="120" rows="30" name="sb_settings" id="sb_settings" aria-describedby="newcontent-description">
<?php echo htmlentities(get_option('sb_settings')); ?>
</textarea>
