<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Casa_Jasmina
 * @since Casa Jasmina 1.0
 */
?>

		</div><!-- #main -->
		<footer id="main">  
			<div class="row margin-bottom">
			    <div class="large-12 small-6 columns">

			      <div class="row">
			        <div class="small-12 large-6 columns ">
			          <p class="headlines">
			            Powered by
			          </p>
			        </div>
			      </div>

			      <div class="row">

			        <div class="large-3 columns sponsor-logo">
			          <a href="http://www.arduino.cc" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Arduino_logo.png"></a>
			        </div>

			        <div class="large-3 columns sponsor-logo">
			          <a href="http://www.toolboxoffice.it" target="_blank">  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_toolbox.png"></a>
			        </div> 

			        <div class="large-12 columns sponsor-logo margin-top">
			          <a href="http://www.energy-home.it" target="_blank">  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/energy@home_logo.png"></a>
			        </div> 

			      </div>


			    </div>
		  </div>
		</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>