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
			<p id="footer-info"><a href="http://www.knoxweb.com">@knoxweb</a> | All Rights Reserved &copy; 1996-<?php echo date("Y") ?></p>
		</div><!-- .site-info -->

            <div class="getQuote" id="getQuote">
                <button>Request A Quote</button>
                <div class="quoteForm">

                </div>
            </div>

	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

<!-- Change header background on scroll -->
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
<!--get a quote form-->
<script>
    $(document).ready(function() {

  var $toggleTrigger = $('#getQuote button').eq(-1);

  $toggleTrigger.click(function() {
    $("#getQuote").toggleClass("show");
  });

});
</script>

</body>
</html>
