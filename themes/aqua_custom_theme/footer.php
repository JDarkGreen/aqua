<?php
/**
 * La plantilla que muestra el footer
 *
 * Contiene el cierre de la div #content y todo el contenido después de
 *
 * @package WordPress
 * @subpackage Salon Glam
 * @since Salon Glam 1.0
 */

#Extraer todas las opciones de personalización
$options = get_option("theme_settings");

?>
	
	<footer id="mainFooter" class="mainFooter">
		
	</footer> <!-- /. -->
	

	<?php wp_footer(); ?>

	<script> var url = "<?= THEMEROOT ?>"; </script>

	</div> <!-- /end sliderbar container -->

</body>
</html>
