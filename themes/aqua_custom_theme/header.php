<?php /**
 * El template para mostrar en el header
 *
 * Muestra todos los elementos de la cabeza y todo hasta el div " - contenido del sitio " .
 *
 * @package Wordpress
 * @subpackage Glam Theme
 * @since GlanTheme 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="author" content="" />

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Pingback -->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?= IMAGES ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?= IMAGES ?>/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
</head>

<?php  
	# Extraer todas las opciones de personalización
	$options   = get_option("theme_settings");
	# Comprobar si esta desplegada la barra de Navegación
	$admin_bar = is_admin_bar_showing() ? 'mainHeader__active-bar' : '';

	# Extraemos el logo de las opciones del tema
	$logo_theme_url = get_header_image();

	$logo_theme_url = !empty( $logo_theme_url ) ? $logo_theme_url : IMAGES . '/logo_spa.png';

?>

<body <?php body_class(); ?>>

<!-- Contenedor canvas wrapper para slider mobile -->
<div canvas="container">
	
	<!-- Barra cabecera superior -->
	<div id="topBarHeader">
		
		<!-- Contenedor Layout -->
		<div class="pageWrapperLayout">

			<div class="pull-sm-right">
			
				<!-- Menu de Redes sociales -->
				<?php include( locate_template('partials/social/menu-top-social.php') ); ?>
			
				<!-- Reservas -->
				<div id="contact-phone" class="pull-sm-right">
					<?= 'Reservas '; ?>
					<?= isset($options['theme_phone_text_1']) && !empty($options['theme_phone_text_1']) ? $options['theme_phone_text_1'] : ''; ?>
				</div> <!-- /#contact-phone -->
				
			</div> 

		</div> <!-- /.pageWrapperLayout -->

	</div> <!-- /#topBarHeader -->

	<header id="mainHeader">


		
		<!-- Incluir Navegación -->
		<?php include(locate_template('partials/main-menu-navigation.php')); ?>

	</header> <!-- /#mainHeader -->





