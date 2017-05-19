<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/de/"><img alt="Creative Commons License" style="border-width:0; float: left; margin-bottom: 0.5em;" src="/wp-content/themes/yblass/cc-by-sa-3.0-de-88x31.png" title="Creative Commons Attribution-Share Alike 3.0 Germany License"/></a>

<ul class="hor-list">
<li>© 2008–<?php echo date("Y")?> <a xmlns:cc="http://creativecommons.org/ns#" href="//adrianheine.de/id" property="cc:attributionName" rel="cc:attributionURL author">Adrian Heine</a></li>
<li><a href="?page_id=3" title="Antworten">Datenschutz, Impressum, Lizenz</a></li>
<li><a property="dc:title" xmlns:dc="http://purl.org/dc/elements/1.1/" href="<?php bloginfo('url');?>" rel="dc:source"><?php preg_match("/https?:\/\/([\s\S]*)/", get_bloginfo('url'), $match); echo $match[1]; ?></a></li>
<li>Läuft auf <a href="https://wordpress.org/">WordPress</a></li>
<li>Theme <a href="https://github.com/adrianheine/yblass">yBlass</a></li>
<li><a href="http://validator.w3.org/check/referer" title="XHTML-1.0-Transitional-Validierung">Valides XHTML</a></li>
<li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS-Validierung">Valides CSS</a></li>
<li><a href="http://validator.w3.org/feed/check.cgi?url=http%3A//blog.adrianlang.de/%3Ffeed%3Datom" title="Atom-Feed-Validierung">Valides Atom</a></li>
</ul>
