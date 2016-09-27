<?php /* Template Name: Página Nosotros Template */
/**
 * Esta es la plantilla que despliega la informacion de la página
 * Nosotros
 *
 */

/**
  * Objeto actual
  */
global $post;

/*
 * Obtener Header
 */
get_header(); 

/*
 * Extraer opciones del tema
 */
$options = get_option("theme_settings");

/*
 * Importar banner de Página
 */

include( locate_template('partials/banner-top-page.php') );


/*
 * Importar Sección Staff
 */

include( locate_template('partials/nosotros/section-staff.php') );

?>



<?php  
	/*
	 * Importar partial de contacto
	 */
	include( locate_template('partials/section-contact-banner.php') );
?>



<!-- Footer -->
<?php get_footer(); ?>