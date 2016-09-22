<?php
	/*
	 * Obtener Header
	 */
	get_header(); 

	/*
	 * Extraer opciones del tema
	 */
	$options = get_option("theme_settings");

	/*
	 * Importar partial de slider
	 */
	include( locate_template('partials/slider-home/slider-home-revolution.php') );

?>


<!-- Wrapper de Contenido / Contenedor Layout -->
<div class="pageWrapperLayout containerRelative">
	<?php  
		/*
		 * Importar partial de servicios
		 */
		include( locate_template('partials/home/section-services.php') );
	?>
</div> <!-- /.pageWrapperLayout -->


<!-- Footer -->
<?php get_footer(); ?>
