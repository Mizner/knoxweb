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
		<div class="site-info">
			<p id="footer-info"><a href="http://www.knoxweb.com">@knoxweb</a> | All Rights Reserved &copy; 1996-<?php echo date("Y") ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
$(document).ready (function () {
    $(window).scroll (function () {
        var sT = $(this).scrollTop();
            if (sT >= 2) {
                $('.fixed-header').addClass('headerScroll')
            }else {
                $('.fixed-header').removeClass('headerScroll')
            }
    })
})
</script>

</body>
</html>
