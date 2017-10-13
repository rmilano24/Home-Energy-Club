<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

</div><!-- Close container -->
	<div class="footer-container" data-sticky-footer>
		<footer class="footer">
      <div class="grid-container">
      <div class="grid-x grid-padding-x align-middle">
  			<div class="cell medium-12">
          <img src="wp-content/themes/FoundationPress/src/assets/images/footer-logo@2x.png" width="255" height="75" alt="Home Energy Club">
          <p class="copyright">Copyright 2017 | All Rights Reserved. By using this site, you acknowledge that you have read and agreed to company's <a href="#">terms of service</a> and <a href="#">privacy policy</a>.</p>
  			</div>
  		</div>
    </div>


			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</footer>
	</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
