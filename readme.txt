=== Plugin Name ===
Contributors: xundeenergie
Donate link: http://jakobusschuerz.vemma.eu/verve-energy-drink.html
Tags: youtube, shortcode
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Makes a preview-pic out of the short youtube-id, uses fancybox or prettyPhoto

== Description ==

Gives you a shortcode for Youtube-Videos and makes a preview-pic for this Video and realizes to watch the video with fancybox for wordpress oder prettyPhoto or in a extra tab. You choose, what you want.

The URL ist for example: http://www.youtube.com/watch?v=XmRLJ4XvpZk
The shortcode is

	[ytcode ytid="XmRLJ4XvpZk"]
	[ytcode ytid="XmRLJ4XvpZk" tit="Vemma Strategie Deutsch"]
	[ytcode ytid="XmRLJ4XvpZk" tit="Vemma Strategie Deutsch" x="800" y="488"]
	[ytcode ytid="XmRLJ4XvpZk" x="800" y="488" ppic="2"]
	[ytcode ytid="XmRLJ4XvpZk" ppic="default"]
	[ytcode ytid="XmRLJ4XvpZk" fso="v"]

- Options:
- float="left|none|right"
  if float is none, you can choose the alignment:

- align="left|center|right"

- fso="h|v|n"
  horizontal, vertical, none filmstripes

- ppic="default|1|2|3"
  takes the previewpic from youtube. This are the four possible picture-names.

- vb="prettyphoto|fancybox|blank"
  if installed it uses prettyphoto or fancybox. Or it opens the video in a new tab (target="_blank")

- pfeil="FF0000"
  the color of the arrow is now red

== Installation ==


1. Extract `ytlink.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Install "Fancybox for Wordpress" and/or "prettyPhoto", if you wish to watch the Videos with this Plugins. If not, the Video opens in a new Window/Tab (target="_blank"
3. Place one of the 4 shortcodes with your defaults in pages or sites
4. Choose your default-settings in the admin-section for video-size, preview-pic-size and the title (if you don't put this into the shortcode)
5. Enjoy

== Frequently Asked Questions ==

= Are there other languages than german for the admin-menu? =

No! You can help me!

= What is this for a strange donate-link? =

If you want to donate, buy a tray verve energy-drink. this is insanely healty energy for you. you will love it! sure!!! an if you buy it on the site above, i get a few euros for it. ;-)

= What about prettyPhoto and fancybox? =

Fancybox testet version 3.0.2
prettyPhoto testet version 1.0

== Screenshots ==

1. Page one "Settings for Youtube-Link"
2. Settings for Fancybox

== Changelog ==
= 0.9.2 =
= - Preview-Bug in admin-section with prettyPhoto fixed

= 0.9.1 =
= - l18n Localisation prepared
  - de_DE, de_AT, de_CH, en_GB .po-Files prepared

= 0.9 =
= - Choose the color of the arrow with wp-color-picker dynamically

= 0.8.3 =
= - Infosite update
  - bugs in preview fixed

= 0.8.2 =
= - Filmstripes none: bug fixed

= 0.8.1 =
= - Codeupdate
  - black and white arrow added


= 0.8 =
- Now you can choose the color of the arrow, which is overlay on the preview-pic


= 0.7.1 =
* - Bug in Preview fixed

= 0.7 =
* - If float "none", you can now choose the alignment of the preview-pic left, center or right. 
  - shortcode options added for alignment and float

= 0.6 =
* - Adjustable float left, none, right. Choose in Admin default for all videos, or choose in shortcode option "float"
  - Some Bugs fixed

= 0.5.8 =
* - Bugs fixed:
  - Previewpic in some Themes not shown

= 0.5.7 =
* - Bugs fixed

= 0.5.6 =
* - Bugs fixed - Debug-Code removed

= 0.5.5 =
* - prepared the plugin for a third videobox like shadowbox or lightbox.
  - prepared undocumentet shordcode-option for the videobox for each link

= 0.5.4 =
* - marging of video-title in preview smaller

= 0.5.3 =
* - Video-preview opens in a new Tab/Window in admin-section
* - extra-file for video-preview-generation - Code-cleanup
* - some bugs fixed

= 0.5.2 =
* - Colored tab-buttons in admin-section
* - Some bugs fixed

= 0.3 =
* - Admin-section:
  - Choose vertical or horizontal filmstripes 
* some bugs fixed

= 0.2 =
* - Admin-section, choose preview-pic-sice small|medium|large
  - including a dynamic preview-pic
  - choose to show flimstripe above and under the preview-pic or not.
  - Reset to defaults
  - Choose from different previewpics (default, 1, 2, 3)

= 0.1 =
* First version

== Upgrade Notice ==
= 0.6 =
* more features for the preview-pic, floating in text adjustable, succsessful tested with themes:
  -twentytwelve
  -pinboard

= 0.3 =

* Full functionally
* Bugs fixed

= 0.1 =
*First version

== Arbitrary section ==
*Known Issues:
  - Publishing an Artikel/Site or update ist can cause an error-message "Warning: Cannot modify header information - headers already sent by (...)"
    maybe this is theme specific or it depends to other plugins!

== A brief Markdown Example ==


Unordered list:

* Make opacity from the overlay-pic with the arrow on the preview-pic adjustable
* resizing of the previewpic doesn't work correct!

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
