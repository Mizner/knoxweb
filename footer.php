<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package knoxweb
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footerWidgets"><?php dynamic_sidebar( 'footer' ); ?></div>
	<div class="site-info">
		<p id="footer-info"><a href="http://www.knoxweb.com">@knoxweb</a> | All Rights Reserved &copy;
			1996-<?php echo date( "Y" ) ?></p>
	</div><!-- .site-info -->

	<div class="getQuoteContainer">
		<button id="getQuote">Request A Quote</button>
		<div id="quoteForm" class="">
			<?php echo do_shortcode( '[contact-form-7 id="7001" title="Get A Quote"]' ); ?>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>


<script>
	var cb = function () {
		var l = document.createElement('link');
		l.rel = 'stylesheet';
		l.href = 'wp-content/themes/knoxweb/style.css';
		var h = document.getElementsByTagName('head')[0];
		h.parentNode.insertBefore(l, h);
	};
	var raf = requestAnimationFrame || mozRequestAnimationFrame ||
		webkitRequestAnimationFrame || msRequestAnimationFrame;
	if (raf) raf(cb);
	else window.addEventListener('load', cb);
</script>

</body>
</html>
