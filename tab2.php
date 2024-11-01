<div class="wrap">
<h2><?php _e('Info:', 'ytlink'); ?></h2>
<?php _e('Dieses Plugin stellt einen Shortcode zur Verfügung, bei dem mehrere Optionen angegeben werden können.', 'ytlink'); ?>
<ul style="list-style-type:disc;">
<li><?php _e('Youtube-Video-Code', 'ytlink'); ?> <code>ytid="<?php echo $ytplugid; ?>"</code></li>
<li><?php _e('Titel des Videos', 'ytlink'); ?> <code>tit="TITEL"</code></li>
<li><?php _e('Breite des Videofensters', 'ytlink'); ?> <code>x="000"</code></li>
<li><?php _e('Höhe des Videofensters', 'ytlink'); ?> <code>y="000"</code></li>
<li><?php _e('Welches Vorschaubild', 'ytlink'); ?> <code>ppic="default"</code></li>
<li><?php _e('Textfluss', 'ytlink'); ?> <code>fload="left"</code></li>
<li><?php _e('Filmlochstreifen', 'ytlink'); ?> <code>fso="v"</code></li>
</ul>
<p>
<?php _e('Wenn der Youtube-Url &lt;<a href="http://www.youtube.com/watch?v="' . $ytplugid  . '" target="_blank">http://www.youtube.com/watch?v=' . $ytplugid .'</a>&gt; lautet, so ist bei diesem Shortcode nur <span style="white-space:nowrap;">ytid="<span style="color:red";">' . $ytplugid . '"</span></span> anzugeben.', 'ytlink') ?><br>
<?php _e('Der Titel des Videos kann frei gewählt werden und ist mit tit="TITEL" anzugeben.<br>
Die Breite und Höhe des Videofensters wird mit x="200" y="150" angegeben.<br>
<p>
Es gibt mehrere Möglichkeiten den Shortcode anzugeben. Die Reihenfolde der Optionen ist dabei unerheblich:', 'ytlink'); ?>
<ul style="list-style-type:disc;">
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" ppic="1"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" tit="Verve - Gesunde Energie"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" x="300" y="200"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" x="300" y="200" fso="h"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" tit="Verve - Gesunde Energie" x="300" y="200"]</code></li>
<li><code>[ytcode ytid="<?php echo $ytplugid; ?>" fso="v" tit="Verve - Gesunde Energie" x="300" y="200"]</code></li>
</ul>
<p>
<h3><?php _e('Optionen', 'ytlink'); ?></h3>

<h4><?php _e('Video-Darstellungsgr&ouml;&szlig;e', 'ytlink'); ?></h4>
<ul style="list-style-type:disc;">
<li><code>x="300" y="200"</code></li>
</ul>
<br><?php _e('Das Video wird mit der Gr&ouml;&szlig;e von 300x200px dargestellt. Fehlt eine oder zwei dieser Optionen, wird auf die Standardvorgabe aus der Einstellungs-Seite jeweils zurückgegriffen.', 'ytlink'); ?>

<h4><?php _e('Titel', 'ytlink'); ?></h4>
<ul style="list-style-type:disc;">
<li><code>tit="<?php _e('Ich bin ein Titel', 'ytlink'); ?>"</code><br></li>
</ul>
<?php _e('Hier kann der Titel-Tag angegeben werden. Für den Link wird das Attribut "title" gesetzt und die Beschriftung in der Videobox erfolgt genauso. Fehlt diese Option, wird auf den Standardtitel gem&auml;&szlig; Einstellungen zug&uuml;ckgegriffen.', 'ytlink'); ?>
<h4><?php _e('Vorschaubild', 'ytlink'); ?></h4>
<?php _e('Youtube stellt 4 verschiedene Vorschaubilder zur Verfügung.', 'ytlink'); ?> 
<ul style="list-style-type:disc;">
<li>default - shortcode-Option: <code>ppic="default"</code></li>
<li>1 - shortcode-Option: <code>ppic="1"</code></li>
<li>2 - shortcode-Option: <code>ppic="2"</code></li>
<li>3 - shortcode-Option: <code>ppic="3"</code></li>
</ul>
<br>
<?php _e('Das Plugin wählt als Standard immer "default" aus. Sollte für ein Video ein anderes besser passen, wählen Sie bitte dieses im Shortcode entsprechend aus.', 'ytlink'); ?> 
<p>
<h4><?php _e('Filmstreifen', 'ytlink'); ?></h4>
<ul style="list-style-type:disc;">
<li><code>fso="n"</code> - <?php _e('keine Filmlochstreifen', 'ytlink'); ?></li>
<li><code>fso="h"</code> - <?php _e('horizontale Filmlochstreifen', 'ytlink'); ?></li>
<li><code>fso="v"</code> - <?php _e('vertikale Filmlochstreifen', 'ytlink'); ?></li>
</ul>
<h4><?php _e('Textfluss', 'ytlink'); ?></h4>
<ul style="list-style-type:disc;">
<li><code>float="left"</code> - <?php _e('Das Vorschaubild ist links, der Text umfließt das Bild rechts', 'ytlink'); ?></li>
<li><code>float="right"</code> - <?php _e('Das Vorschaubild ist rechts, der Text umfließt das Bild links', 'ytlink'); ?></li>
<li><code>float="none"</code> - <?php _e('Das Vorschaubild sitzt entsprechend "align" rechts, zentriert oder links, der Text wird nach dem Vorschaubild fortgesetzt', 'ytlink'); ?></li>
</ul>
<h4><?php _e('horizontale Ausrichtung', 'ytlink'); ?></h4>
<?php _e('Wenn die Option <code>float="none"</code> gesetzt ist, kann die horizontale Position gewählt werden:', 'ytlink'); ?><br>
<ul style="list-style-type:disc;">
<li><code>align="left"</code> - <?php _e('links', 'ytlink'); ?></li>
<li><code>align="center"</code> - <?php _e('zentriert', 'ytlink'); ?></li>
<li><code>align="right"</code> - <?php _e('rechts', 'ytlink'); ?></li>
</ul>
<h4><?php _e('Farbe des Pfeiles', 'ytlink'); ?></h4>
<?php _e('Die Farbe des Pfeiles ist in Hexadezimaler Schreibweise anzugeben OHNE führendes "#"', 'ytlink'); ?><br>
<ul style="list-style-type:disc;">
<li><code>pfeil="FFFFFF"</code> - <?php _e('wei&szlig;er Pfeil', 'ytlink'); ?></li>
<li><code>pfeil="FF0000"</code> - <?php _e('roter Pfeil', 'ytlink'); ?></li>
</ul>
<h3><?php _e('Videodarstellung', 'ytlink'); ?></h3>
<?php _e('Damit die Optionen "fancybox" und "prettyphoto" genutzt werden können, muss das jeweilige Plugin installiert sein. Es sind in diesen Plugins keine weiteren Einstellungen vorzunehmen!', 'ytlink'); ?>
<p>
<?php _e('Für die Option', 'ytlink'); ?>
<br>
<ul style="list-style-type:disc;">
<li><?php _e('"fancybox" ist', 'ytlink'); ?> <a href="http://wordpress.org/extend/plugins/fancybox-for-wordpress/" target="_blank">Fancybox for Wordpress</a></li>
<li><?php _e('"prettyphoto" ist', 'ytlink'); ?> <a href="http://wordpress.org/extend/plugins/prettyphoto/" target="_blank">WordPress prettyPhoto</a></li>
</ul>
<?php _e('zu installieren.', 'ytlink'); ?>

</div>
