<?php /* Template Name: Página Servicios Template */
/**
 * Esta es la plantilla que despliega la informacion de la página
 * Servicios
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
 * Obtener primer servicio
 */ 
	$args        = array('posts_per_page'=>1,'post_type' =>'theme-services','order'=>'ASC','orderby'=>'menu_order','post_status'=>'publish');
	
	$services    = get_posts( $args );
	$the_service = $services[0];
?>

<main class="mainContainerService containerRelative">
	
	<!-- Imágen -->
	<?php $img_url = wp_get_attachment_url( get_post_thumbnail_id(  $the_service->ID ) );
	?>
	<figure class="featured-image" style="background-image : url(<?= $img_url; ?>)"></figure>

	<!-- Contenido o Información de Página -->
	<div class="container-text">

		<!-- Título -->
		<h2 class="titleCommon__section text-xs-center"> <span> <?= $the_service->post_title; ?> </span> </h2>

		<!-- Espacio --> <br/>

		<!-- Información -->
		<?= apply_filters( 'the_content' , $the_service->post_content ); ?>

		<!-- Espacio --> <br/>

		<!-- Boton ver servicios -->
		<div class="text-xs-center">
			<a href="#" class="btn-show-more text-uppercase"> ver servicios </a>
		</div> <!-- /. -->

	</div> <!-- /.container-text -->

</main> <!-- /.mainContainerService -->

<?php  
	/*
	 * Importar partial de contacto
	 */
	include( locate_template('partials/section-contact-banner.php') );
?>


<!-- Footer -->
<?php get_footer(); ?>
