<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Casa_Jasmina
 * @since Casa Jasmina 1.0
 */

  global $ardu_sso;
  require_once("WP_Arduino_SSO.php");
  $ardu_sso = new WP_Arduino_SSO();
  
  global $DeploySettingsSSOSite;
  global $DeploySettingsCASSite;
  global $DeploySettingsSearchForm;

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div id="page" class="hfeed site">

	<header>
		<div id="pageheader">

		    <div class="row header">
		      <div class="small-6 large-8 eight columns">
		        <div class="title">
		          <a href="http://casajasmina.arduino.cc/"><?php bloginfo( 'name' ); ?></a>
		        </div>
		      </div>

		      <div class="small-6 large-4 four columns search">
				<div class="row collapse">
					<?php echo $DeploySettingsSearchForm; ?>
				</div>
			</div>

		    </div>


		    <!--[if gte IE 9]><!-->
			<div id="navWrapper"  class="sticky">
			<![endif]-->
			<!--[if IE 8]>
				<div id="navWrapper">
			<![endif]-->
			    <nav class="row top-bar" data-topbar="" role="navigation">

				    <ul class="title-area">
				        <li class="name">
				         <h1><a href="#"></a></h1>
				       	</li>
						<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				       	<li class="toggle-topbar menu-icon"><a href="#"><span></span>Menu</a></li>
				    </ul>

					<section class="top-bar-section">

					    <ul class="left">
					      <li><a href="http://casajasmina.arduino.cc/">Home</a></li>
					      <li class="has-dropdown not-click">
					        <a href="#">About</a>
					        <ul class="dropdown">
					          <li>
					          	<a href="http://casajasmina.arduino.cc/about"> The project </a>
					          </li>
					          <li>
					          	<a href="http://casajasmina.arduino.cc/team"> The team </a>
					          </li>
					          <li>
					          	<a href="http://casajasmina.arduino.cc/location"> The location </a>
					          </li>
					        </ul>
					      </li>
					      <li>
					      	<a href="http://casajasmina.arduino.cc/collaborate">Collaborate</a>
					      </li>
					      <!--<li>
					      	<a href="">Blog</a>
					      </li>-->

					    </ul>

					    <?php global $ardu_sso; if (isset ($ardu_sso) && ($ardu_sso->is_logged_in() || $ardu_sso->login())): ?>
							<ul class="right">
								<li class="has-dropdown not-click userPic">
									<a href="#">
									<?php
										/*
											TODO: information about avatr should be transmitted with the
											session data (cfr. Arduino_SSO::login()) to avoid bother the
											SSO server
										*/
										$res = $ardu_sso->get_user_profile ('avatar');
										if (array_key_exists ('avatar', $res) == false || $res ['avatar'] == '')
											$avatar = $DeploySettingsSSOSite . '/img/user_default.png';
										else
											$avatar = $res ['avatar'];
									?>
									<img src="<?php echo $avatar ?>" alt="userpicture" />
									</a>
									<ul class="dropdown">
										<li><a href="<?php echo esc_url( wp_logout_url() ); ?>">Sign out</a></li>
									</ul>
								</li>
							</ul>
						<?php else: ?>
						<ul class="right">
							<li><a href="<?php echo $DeploySettingsCASSite ?>/login?service=<?php echo 'http://' . $_SERVER ['SERVER_NAME'] ?>/wp-login.php?redirect_to=<?php echo urlencode ("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>" class="cart">LOG IN</a></li>
							<li><a href="<?php echo $DeploySettingsSSOSite ?>auth/signup" class="cart">SIGN UP</a></li>
						</ul>
					<?php endif; ?>

					</section>

				</nav>
			</div>
		</div>
	</header>

	<div id="main" class="site-main">
