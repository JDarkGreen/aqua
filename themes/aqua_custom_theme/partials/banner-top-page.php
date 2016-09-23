<?php  
/**
  * Archivo que incluye el banner top de la página
  * 
  */

/**
  * Variables
  */

//El banner
$the_banner = get_queried_object();

//El título
$the_title = isset($banner_title) && !empty($banner_title) ? $banner_title : $the_banner->post_title;


/**
  * Renderizando el banner
  */
	
	if( has_banner_page( get_queried_object_id() ) ) :
?>

	<!-- Banner top de Página -->
	<section class="pageCommon__banner">

		<!-- Imagen -->
		<img src="" alt="" class="img-fluid d-block m-x-auto" />
		
		<!-- Título -->
		<h2 class="title-page text-uppercase"> 
			<?= __( $title , 'LANG' ); ?> 
		</h2>

	</section> <!-- /.pageCommon__banner -->

<?php endif; ?>



